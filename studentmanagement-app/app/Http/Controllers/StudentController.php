<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;
use App\Models\student;
use Illuminate\View\View;

class StudentController extends Controller
{
    public function index(): View
    {
        $students = Student::all();

        return view('students.index', compact('students'));
    }

    public function create(): View {

      return view('students.create');
    }

    public function store(Request $request): RedirectResponse {
        
        $input = $request->all();
        Student :: create($input);
        return redirect('students')->with('flash_message', 'Student Addedd!');
    }
}