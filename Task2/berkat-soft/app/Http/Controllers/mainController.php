<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class mainController extends Controller
{
    public function dashboard(){

        $user = User::all();

        return view('dashboard', compact('user'),[
            "title" => "Dashboard"
        ]);
    }

    public function listCustomer(){
        return view('customer-list', [
            "title" => "Customer List"
        ]);
    }

    public function listOrder(){
        return view('order-list',[
            "title" => "Order List"
        ]);
    }
}
