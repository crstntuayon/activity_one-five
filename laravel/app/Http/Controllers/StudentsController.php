<?php

namespace App\Http\Controllers;

use App\Models\Students;
use App\Models\User;
use Illuminate\Http\Request;




class StudentsController extends Controller
{

    // CREATE
    public function addNewStudent(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'age' => 'required',
            'gender' => 'required',
        ]);

        $add_new = new Students;
        $add_new->id = $request->id;
        $add_new->name = $request->name;
        $add_new->age = $request->age;
        $add_new->gender = $request->gender;
        $add_new->save();



        return back()->with('success', 'Student added successfully');
    }


    // READ
    public function myView()
    {
        $students = Students::all();
        $users = User::all();

        return view('welcome', compact('students', 'users'));
    }


    // UPDATE
    public function updateView($id)
    {
        $students = Students::where('id', '=', $id)->get();
        return view('update', compact('students'));
    }


    public function updateME(Request $request)
    {
        Students::where('id', '=', $request->id)->update([
            'name' => $request->name,
            'age' => $request->age,
            'gender' => $request->gender,
        ]);
     
        return redirect('/')->with('success', 'Student updated successfully');
    }

    public function deleteME($id)
    {
        Students::where('id', '=', $id)->delete();
        return back()->with('success', 'Student deleted successfully');
    }

      public function index(Request $request)
    {
       $students = Students::paginate(5);  
       $totalStudents = Students::count();
       return view('welcome', compact('students')); // Return the dashboard view with students data
    }

     public function search(Request $request)
    {
      $search = $request->input('search'); // Get the search query from the request
      $students = Students::where('name', 'like', "%{$search}%")->paginate(5)->appends(['search' => $search]); // Preserve the search query in the pagination links

        return view('welcome', compact('students')); // Pass the search results to the view
        
    }


}