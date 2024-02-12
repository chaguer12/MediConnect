<?php

namespace App\Http\Controllers;

use App\Models\Speciality;
use Illuminate\Http\Request;

class SpecialityController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $specialities = Speciality::all();
        return view('admin.admin-dashboard',[
            'specialities' => $specialities,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'speciality' => 'required|string|max:30',
        ]);
        $speciality = new Speciality();
        $speciality->speciality_name = $validatedData['speciality'];
        $speciality->save();
      
        return redirect()->route('Speciality.index')->with('success', 'Speciality created successfully');

    }

    /**
     * Display the specified resource.
     */
    public function show(Speciality $speciality)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Speciality $speciality)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Speciality $speciality)
    {
   
        
        // $request->validate([
            //     'Speciality' => 'required|string|max:255', 
            
            // ]);
            
            // $speciality->update([
                //     'Speciality' => $request->Speciality,
                
                // ]);
                
        if(!empty($request->Speciality)){
            Speciality::where('id',$request->id)->update(['speciality_name' => $request->Speciality]);
            return redirect()->route('Speciality.index')->with('success', 'Speciality updated successfully!');
        }else{
            
            return redirect()->route('Speciality.index');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Speciality $speciality)
    {
        //
    }
}
