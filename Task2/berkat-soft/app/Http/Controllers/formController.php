<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class formController extends Controller
{
    public function login()
    {
        return view('login',[
            "title" => "Login"
        ]);
    }

    public function signUp()
    {
        return view ('sign-up', [
            "title" => "Sign Up"
        ]);
    }

    public function inputProduct(){
        return view ('form-input-product', [
            "title" => "Input Product"
        ]);
    }

    public function inputCustomer(){
        return view ('form-input-customer', [
            "title" => "Input Customer"
        ]);
    }

    public function inputOrder(){
        return view('form-input-order',[
            "title" => "Input Order List"
        ]);
    }


    // insert-product-data
    public function store(Request $request){

        $request->validate([
            "itemName" => 'required',
            "itemCode" => 'required',
            "stockEntry" => 'required',
            "entryDate" => 'required'
        ]);

        dd($request);
    }
}
