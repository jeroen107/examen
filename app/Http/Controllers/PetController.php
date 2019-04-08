<?php

namespace App\Http\Controllers;

use App\Customer;
use App\Pet;
use Illuminate\Http\Request;

class PetController extends Controller
{
    public function create($id){
        $customer = Customer::findorfail($id);
        return view('pet.create',  compact('customer', 'pet'));



    }

    public function store(Request $request){
        $request->validate([
            'name' => 'required',
            'race' => 'required'
        ]);


        $pet = new Pet();

        $pet->name = $request->name;
        $pet->race = $request->race;
        $pet->owner_id = $request->owner_id;


        $pet->save();

        return redirect(route('customer.show', ['id' => $pet->owner_id]))->with('message', 'het huisdier is toegevoegd')->with('status', 'success');
    }

    public function edit($id){

        $pet = Pet::findorfail($id);


       $customer = $pet->Owner()->first();




        return view('pet.edit',  compact('customer', 'pet'));
    }

    public function update(Request $request){

        $request->validate([
            'name' => 'required',
            'race' => 'required'
        ]);

        $pet = Pet::findorfail($request->pet_id);

        $pet->name = $request->name;
        $pet->race = $request->race;
        $pet->owner_id = $request->owner_id;

        $pet->save();

        return redirect(route('customer.show', ['id' => $pet->owner_id]))->with('message', 'Het huisdier is aangepast')->with('status', 'success');

    }

    public function delete(Request $request){
        $pet = Pet::findorfail($request->pet_id);
        $pet->delete();

        return redirect(route('customer.show', ['id' => $pet->owner_id]))->with('message', 'het huisdier is verwijderd')->with('status', 'success');
    }

}
