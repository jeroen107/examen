<?php

namespace App\Http\Controllers;

use App\Customer;
use App\Pet;
use Illuminate\Http\Request;

class PetController extends Controller

    /**
     * dit is de create voor een huisdier  het word aangeroepen bij de web.php
     */

{
    public function create($id){
        $customer = Customer::findorfail($id);
        return view('pet.create',  compact('customer', 'pet'));



    }

    /**
     * dit is de store voor het huisdier hier worden de gegevens opgeslagen die je in het formulier hebt ingevuld
     */

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

    /**
     * dit is de edit van het huisdier hier word het aanpas formulier opgehaald
     */

    public function edit($id){

        $pet = Pet::findorfail($id);


       $customer = $pet->Owner()->first();




        return view('pet.edit',  compact('customer', 'pet'));
    }

    /**
     * dit is de update van huisdieren de gegevens die je in het formuleir hebt ingevuld worden hier verwerkt
     */

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
    /**
     * dit is de delete van huisdieren hier word een huisdier verwijderd
     */

    public function delete(Request $request){
        $pet = Pet::findorfail($request->pet_id);
        $pet->delete();

        return redirect(route('customer.show', ['id' => $pet->owner_id]))->with('message', 'het huisdier is verwijderd')->with('status', 'success');
    }

}
