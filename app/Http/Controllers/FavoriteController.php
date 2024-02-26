<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Models\Favorite;
use App\Models\Doctor;
use App\Models\Patient;
use Illuminate\Http\Request;

class FavoriteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
            
        $doctor_id = $request->doctor;
        $patient_id = Auth::id();
        PatientController::create($patient_id);
        if(Auth::check()){
            $favorite = Favorite::create([
                'patient_id' => $patient_id ,
                'doctor_id' =>$doctor_id,
            ]);

        }else{
            return 'not logged in!';
        }
        
        redirect()->route('doctor.index');
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
    }

    /**
     * Display the specified resource.
     */
    public function show(Favorite $favorite)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Favorite $favorite)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Favorite $favorite)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
      if(Favorite::destroy($id)){
         redirect()->route('doctor.index');
      }
        
    }
}
