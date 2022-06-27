<?php

namespace App\Http\Controllers;

use App\Models\GymInventory;
use Illuminate\Http\Request;

class GymInventoryController extends Controller
{
    //return all data
    public function index(){
        return response()->json(GymInventory::orderBy('id','DESC')->get());
    }

    // return a specific resource

    public function show(GymInventory $gymInventory){
        return response()->json($gymInventory);
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $gymInventory = new GymInventory;
        $gymInventory->name = $request->name;
        $gymInventory->lastname = $request->lastname;
        $gymInventory->address = $request->address;
        $gymInventory->number = $request->number;
        $gymInventory->temperature = $request->temperature;
        $gymInventory->save();

        return  response()->json(['message'=>'created'],201);

    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $gymInventory = GymInventory::findOrFail($id);
        $gymInventory->update($request->all());
        // $GymInventory->name = $request->name;
        // $GymInventory->price = $request->price;
        // $GymInventory->stocks = $request->stocks;
        // $GymInventory->physical_condition = $request->physical_condition;
        // $GymInventory->manufacturer = $request->manufacturer;
        // $GymInventory->save();

        return  response()->json(['message'=>'updated'],200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $gymInventory = GymInventory::find($id);
        $gymInventory->delete();

        return  response()->json(['message'=>'deleted'],200);
    }

}
