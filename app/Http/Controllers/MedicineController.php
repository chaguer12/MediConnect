<?php

namespace App\Http\Controllers;

use App\Models\Medicine;
use App\Models\Speciality;
use Illuminate\Http\Request;

class MedicineController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $specialities = Speciality::all();
        $medicines = Medicine::all();
        return view('admin.admin-dashboard',[
            'specialities' => $specialities,
            'medicines' => $medicines,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       $validatedData = $request->validate([
        'medicine' => 'required|string|max:30',
       ]);
       $medicine = new Medicine();
       $medicine->medic_name = $validatedData['medicine'];
       $medicine->save();
       return redirect()->route('medicine.index')->with('success', 'Medicine created successfully');

    }

    /**
     * Display the specified resource.
     */
    public function show(Medicine $medicine)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Medicine $medicine)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Medicine $medicine)
    {
        
        if(!empty($request->medicine)){
            Medicine::where('id',$request->id)->update(['medic_name' => $request->medicine]);
            return redirect()->route('medicine.index')->with('success', 'medicine updated successfully!');
        }else{
            
            return redirect()->route('medicine.index');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        if(Medicine::destroy($id)){
            return redirect()->route('medicine.index')->with('success', 'medicine deleted successfully!');
        }
    }
}
