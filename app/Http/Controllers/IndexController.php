<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\People;

class indexcontroller extends Controller
{
   public  function getindex(){
        return view('index');
    }
    public function postCreatePeople(Request $request){
        $people = [
            'firstname' => $request->firstname,
            'lastname' =>  $request->lastname,
            'gender' =>  $request->gender,
            'age' =>  $request->age,
            'school' =>  "-",
            'grade' =>  "-",
            'job' =>  $request->job,
            'n_children' =>  0
            ,];
        $person = People::create($people);

        return redirect('/show/'.$person->id);
    }

    public function postCreateTeacher(Request $request){
        $people = [
            'firstname' => $request->firstname,
            'lastname' =>  $request->lastname,
            'gender' =>  $request->gender,
            'age' =>  $request->age,
            'school' =>  $request->school,
            'grade' =>  "-",
            'job' =>  "Teacher",
            'n_children' =>  $request->n_children
            ,];
        $person = People::create($people);

        return redirect('/show/'.$person->id);
    }

    public function postCreateStudent(Request $request){

        $people = [
            'firstname' => $request->firstname,
            'lastname' =>  $request->lastname,
            'gender' =>  $request->gender,
            'age' =>  0,
            'school' =>  $request->school,
            'grade' =>  $request->class,
            'job' =>  "student",
            'n_children' =>  0
        ,];
        $person = People::create($people);

        return redirect('/show/'.$person->id);
    }

    public  function getPeople($id){
        $people =People::find($id);
        return view('printinfo')
            ->with('people',$people);
    }


}
