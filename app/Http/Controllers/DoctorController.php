<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use Illuminate\Http\Request;

class DoctorController extends Controller
{
    public function index()
    {
        $doctors = Doctor::all();
        return view('doctors.index', compact('doctors'));
    }

    public function create()
    {
        return view('doctors.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => '',
            'address' => '',
            'specialist' => '',
        ]);

        // Lengkapi code create

        return redirect()->route('doctors.index')->with('success', 'Doctor created successfully.');
    }
    
    public function show(Doctor $doctor)
    {
        return view('doctors.show', compact('doctor'));
    }

    public function edit(Doctor $doctor)
    {
        return view('doctors.edit', compact('doctor'));
    }

    public function update(Request $request, Doctor $doctor)
    {
        $validatedData = $request->validate([
            'name' => '',
            'address' => '',
            'specialist' => '',
        ]);

        // Lengkapi code update

        return redirect()->route('doctors.index')->with('success', 'Doctor updated successfully.');
    }

    public function destroy(Doctor $doctor)
    {
        // Lengkapi code delete

        return redirect()->route('doctors.index')->with('success', 'Doctor deleted successfully.');
    }
}
