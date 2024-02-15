<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Models\Doctor;
use Illuminate\Http\Request;
use App\Services\ImageService;
use App\Models\Speciality;
use App\Models\User;

class DoctorController extends Controller
{
    private $imageService;

    public function __construct(ImageService $imageService)
    {

        $this->imageService = $imageService;
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $doctor = Doctor::where('user_id',Auth::id())->first();
        
        
        if(isset($doctor)){
            $doc = Doctor::with(['User','Speciality'])->where('user_id' , Auth::id())->first();
            
            return view('doctor.doctor-profile', compact('doc'));
        }else{
            $specialities = Speciality::all();
            return view('doctor.doctor-dashboard', [
            'specialities' => $specialities,
        ]);

        }
        
    }

    

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
        $validatedData = $request->validate([
            'image' => 'required|image',
            'description' => 'required|string',
            'speciality' => 'required',
        ]);
        
            $imageName = $this->imageService->moveImage($validatedData["image"]);
            $doctor = Doctor::create([
            "user_id" => Auth::id(),
            "image" => $imageName,
            "speciality_id" => $validatedData["speciality"],
            "description" => $validatedData["description"]
        ]);



        return redirect()->route('doctor.index');
       
            
    
    }

    /**
     * Display the specified resource.
     */
    public function show(Doctor $doctor)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Doctor $doctor)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Doctor $doctor)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Doctor $doctor)
    {
        //
    }
}
