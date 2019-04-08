<?php

namespace App\Http\Controllers;

use App\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index(){

        $customers = Customer::all();
        return view('customer.index', compact('customers'));
    }

    public function create(){

        return view('customer.create');

    }

    public function store(Request$request){
        $request->validate([
           'name' => 'required',
           'email' => 'required'
        ]);


        $customer = new Customer();

        $customer->name = $request->name;
        $customer->email = $request->email;
        $customer->phone = $request->phone;

        $customer->save();

        return redirect(route('customer.index'))->with('message', 'De klant is toegevoegd')->with('status', 'success');

    }
    
}
