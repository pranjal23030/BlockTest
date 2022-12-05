<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
Use Intervention\Image\Facades\Image;

class MainController extends Controller
{
    public function create(){
        return view('create');
    }

    public function store(Request $request){
        $student = new Student();
        $student->studname = $request->studname;
        $student->course = $request->course;
        $student->fee = $request->fee;

        $filenameWithExt = $request->file('image')->getClientOriginalName();
        $img = Image::make($request->file('image'));
        $img->save('storage/image/'.$filenameWithExt);
        $student->image = $filenameWithExt;
        $student->save();
        return redirect('/list');

    }

    public function list() {
        $students = Student::orderBy('studname','asc')->get();
        return view('list')->with('students',$students);
    }

    public function edit($id) {
        $student = Student::where('id',$id)->first();
        return view('update')->with('student',$student);
    }

    public function update(Request $request) {
        $student = Student::where('id',$request->id)->first();
        $student->studname = $request->studname;
        $student->course = $request->course;
        $student->fee = $request->fee;
        $student->save();
        return redirect('/list');
    }

    public function delete($id) {
        $student = Student::where('id', $id)->first();

        if(File::exists('storage/image/'. $student->image)) {
            File::delete('storage/image/'.$student->image);
        }
        $student->delete();
        return redirect('/list');
    }
}
