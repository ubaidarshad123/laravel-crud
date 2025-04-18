<?php

namespace App\Http\Controllers;
use App\Models\student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class Crud extends Controller
{
    public function create(Request $request)
    {
        $request->validate([
            'email' => 'required|email|unique:students,email',
            'password' => 'required|string|min:8',
            'address' => 'required',
            'city' => 'required',
        ]);

        $student = new student();
        $student->email = $request->email;
        $student->password = Hash::make($request->password);
        $student->address = $request->address;
        $student->city = $request->city;
        $student->state = $request->state;
        $student->save();
        return redirect()->route('view.all');
    }

    public function index()
    {
        return view('view_data');
    }
}
