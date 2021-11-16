<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use Laravel\Passport\Client;
use App\User;
use App\Address;
use App\Order;
use App\OrderItem;
use Validator;

class UserController extends Controller
{
    public function __construct(){
        $this->notAuthorizedCode = 401;
        $this->okCode = 200;
        $this->badRequestCode = 400;
    }

    public function CheckService(){
        return response()->json(["code" => $this->okCode, "message" => "online"], $this->okCode);
    }

    public function NotAuthorized(){
        return response()->json(["code" => $this->notAuthorizedCode, 'value' => false], $this->notAuthorizedCode);
    }

    public function SignUp(Request $request){
        $credentials = $request->validate([
            'username' => ['required'],
            'email' => ['required', 'email'],
            'phone' => ['required'],
            'password' => ['required'],
        ]);
        $credentials["password"] = bcrypt($credentials["password"]);
        $user = User::create(
            $credentials
        );
        if($user){   
            $accessToken = $user->createToken('authToken')->accessToken;
            return response()->json(["code" => $this->okCode, "message" => "signup sucessfully", "token" => $accessToken], $this->okCode);
        }else{
            return response()->json(["code" => $this->badRequestCode, "message" => "signup failed"], $this->badRequestCode);
        }
    }

    public function Login(Request $request){
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);
        if (!auth()->attempt($credentials)) {
            return response()->json(["code" => $this->badRequestCode, "message" => "wrong credentials"], $this->badRequestCode);
        }
        $accessToken = auth()->user()->createToken('authToken')->accessToken;
        return response()->json(["code" => $this->okCode, "message" => "login sucessfully", "token" => $accessToken, "user" => auth()->user()], $this->okCode);
    }

    public function CheckToken(){
        $user = auth()->user();
        return response()->json(["code" => $this->okCode, "tokenIsValid" => true, "user" => $user], $this->okCode);
    }

    public function GetCategories(Request $request){
        $categories = DB::table('categories')->get()->toArray();
        return response()->json(["code" => $this->okCode, "categories" => $categories], $this->okCode);
    }

    public function GetSubCategories(Request $request){
        $subCategories = DB::table('sub_categories')->get()->toArray();
        return response()->json(["code" => $this->okCode, "message" => $subCategories], $this->okCode);
    }

    public function GetProductByFilters(Request $request){
        $products = DB::table('products')->get()->toArray();
        return response()->json(["code" => $this->okCode, "products" => $products], $this->okCode);
    }

    public function AddOrder(Request $request){
        $user = auth()->user();
        $body = json_decode($request->getContent(), true);
        $validation = Validator::make($body, [
            'address' => 'required',
            'totalprice' => 'required|numeric',
            'products.*.productid' => 'required|integer',
            'products.*.productname' => 'required',
            'products.*.productimg' => 'required',
            'products.*.price' => 'required|numeric',
            'products.*.size' => 'required',
            'products.*.color' => 'required',
        ]);
        if ($validation->passes()) {
            $order = [
                'userid' => $user->id,
                'address' => $body['address'],
                'totalprice' => $body['totalprice'],
                'promocode' => $request['promocode'],
            ];
            $order = Order::create(
                $order
            );
            foreach($body['products'] as $product){
                $orderItem = [
                    'orderid' => $order->id,
                    'productid' => $product['productid'],
                    'productname' => $product['productname'],
                    'productimg' => $product['productid'],
                    'price' => $product['price'],
                    'size' => $product['size'],
                    'color' => $product['color']
                ]; 
                OrderItem::create(
                    $orderItem
                );
            }
            return response()->json(["code" => $this->okCode, "message" => "order placed"], $this->okCode);
        } else {
            $errors = $validation->errors()->all();
            return response()->json(["code" => $this->badRequestCode, "errors" => $errors], $this->badRequestCode);
        }
        
    }

    public function GetOrdersByUser(Request $request){
        $user = auth()->user();
        $orders = DB::table('orders')->where('userid', $user->id)->get()->toArray();
        $result = [];
        foreach($orders as $key => $order){
            $result[$key] = [
                "header" => $order,
                "products" => DB::table('order_items')->where('orderid', $order->id)->get()->toArray()
            ];
            //$result[$key]["products"] = DB::table('order_items')->where('orderid', $order->id)->get()->toArray();
        }
        return response()->json(["code" => $this->okCode, "orders" => $result], $this->okCode);
    }

    public function AddAddress(Request $request){
        $user = auth()->user();
        $credentials = $request->validate([
            'address' => ['required'],
        ]);
        $address = Address::create(
            array(
                'userid' => $user->id,
                'address' => $credentials['address'],
            )
        );
        if($address){
            return response()->json(["code" => $this->okCode, "message" => "address added sucessfully"], $this->okCode);
        }else{
            return response()->json(["code" => $this->badRequestCode, "message" => "could not add address"], $this->badRequestCode);
        }
    }

}
