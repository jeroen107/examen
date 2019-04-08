<?php

namespace App\Http\Controllers;

use App\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    /**
     * dit is de index voor customers hier word het overzicht van all klanten aangeroepen van de web.php
     */

    public function index(){

        $customers = Customer::all();
        return view('customer.index', compact('customers'));
    }

    /**
     * dit is de create voor de customers hier word het aanmaakformulier voor klanten aangeroepen van de web.php
     */
    public function create(){

        return view('customer.create');

    }

    /**
     * dit is de store voor customers hier worden de gegevens die je hebt ingevuld in het formulier opgeslagen van klanten
     */

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

    /**
     * dit is de edit voor klanten hier word het formulier opgehaald
     */

    public function edit($id){

        $customer = Customer::findorfail($id);
        return view('customer.edit', compact('customer'));
    }

    /**
     * dit is de update voor klanten de gegevens die je hebt aangepast in het formulier van edit worden hier verwerkt en je klant is dan aangepast
     */

    public function update(Request $request){

        $customer = Customer::findorfail($request->customer_id);

        $customer->name = $request->name;
        $customer->email = $request->email;
        $customer->phone = $request->phone;

        $customer->save();

        return redirect(route('customer.index'))->with('message', 'De klant is aangepast')->with('status', 'success');

    }

    /**
     * dit is de delete hier word je klant verwijderd
     */

    public function delete(Request $request){
        $customer = Customer::findorfail($request->customer_id);
        $customer->delete();

        return redirect(route('customer.index'))->with('message', 'De klant is verwijderd')->with('status', 'success');
    }

    /**
     * dit is de show van de klant hier staat het overzicht van alle huisdieren per klant
     */

    public function show($id){
        $customer = Customer::findorfail($id);
        $pets = $customer->Pets()->get();

        return view('customer.show', compact('customer', 'pets'));
    }

}
