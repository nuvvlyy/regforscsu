<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\People;
use App\PeopleRoom;

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

    public function getinroom($id,$room){
        $peopleroom = new PeopleRoom();
        $peopleroom->room_id = $room;
        $peopleroom->people_id = $id;
        $peopleroom->save();
        return response()->json([
            'status' => "Success"
        ]);
    }
    public function getTotal(){
        $people = People::all();
        $peopleroom = PeopleRoom::all();
        $allroom = 0;
        $room1 = 0;
        $room2 = 0;
        $room3 = 0;
        foreach ($people as $p) {
            if ($p['job'] == 'Teacher') {
                $allroom += $p['n_children'];
            }
        }
        foreach ($peopleroom as $pr){
            $people = People::find($pr['people_id']);
            if($people['job'] == 'Teacher'){
                if($pr['room_id'] == 1) {
                    $room1 += $people['n_children'];
                }
                else if($pr['room_id'] == 2) {
                    $room2 += $people['n_children'];
                }
                else if($pr['room_id'] == 3) {
                    $room3 += $people['n_children'];
                }
            }
        }
        $allroom += People::all()
            ->count();
        $room1 += PeopleRoom::where('room_id',1)
            ->count();
        $room2 += PeopleRoom::where('room_id',2)
            ->count();
        $room3 += PeopleRoom::where('room_id',3)
            ->count();

        $total = [
            'total_room' => $allroom,
            'total_room1' => $room1,
            'total_room2' => $room2,
            'total_room3' => $room3,
        ];
        return $total;
    }

    public  function getcountday(){
        $day1 = 0;
        $day2 = 0;
        $day3 = 0;
        $people1 = People::whereDate('created_at','=',date('2018-08-28'))
            ->get();
        $people2 = People::whereDate('created_at','=',date('2018-08-29'))
            ->get();
        $people3 = People::whereDate('created_at','=',date('2018-08-30'))
            ->get();
        //return $people1;
        foreach ($people1 as $p1){
            if($p1['job'] == 'Teacher'){

                $day1+=$p1['n_children'];
            }
        }
        foreach ($people2 as $p2){
            if($p2['job'] == 'Teacher'){
                $day2+=$p2['n_children'];
            }
        }
        foreach ($people3 as $p3){
            if($p3['job'] == 'Teacher'){
                $day3+=$p3['n_children'];
            }
        }
        $day1+=$people1
            ->count();
        $day2+=$people2
            ->count();
        $day3+=$people3
            ->count();
        $totalday = [
            'day1' => $day1,
            'day2' => $day2,
            'day3' => $day3,
        ];
        return $totalday;
    }
    public function getSelectDay($day){ // นับวันแรก แยกห้อง
        $people = People::whereDate('created_at','=','2018-08-'.$day)
            ->get();
//        return $people;
        $peopleroom = PeopleRoom::whereDate('created_at','=','2018-08-'.$day)
            ->get();
        //return $peopleroom;
        $allroom = 0;
        $room1 = 0;
        $room2 = 0;
        $room3 = 0;
        foreach ($people as $p) {
            if ($p['job'] == 'Teacher') {
                $allroom += $p['n_children'];
            }
        }
        foreach ($peopleroom as $pr){
            $people1 = People::find($pr['people_id']);
            //return $people1;
            if($people1['job'] == 'Teacher'){
                if($pr['room_id'] == 1) {
                    $room1 += $people1['n_children'];
                }
                else if($pr['room_id'] == 2) {
                    $room2 += $people1['n_children'];
                }
                else if($pr['room_id'] == 3) {
                    $room3 += $people1['n_children'];
                }
            }
        }
        $allroom += $people
            ->count();
//        return $allroom;
        $room1 += PeopleRoom::where('room_id',1)
            ->whereDate('created_at','=','2018-08-'.$day)
            ->count();
        $room2 += PeopleRoom::where('room_id',2)
            ->whereDate('created_at','=','2018-08-'.$day)
            ->count();
//        return $room2;
        $room3 += PeopleRoom::where('room_id',3)
            ->whereDate('created_at','=','2018-08-'.$day)
            ->count();
        $total = [
            'total_room' => $allroom,
            'total_room1' => $room1,
            'total_room2' => $room2,
            'total_room3' => $room3,
        ];
        return $total;
    }
    public function getShowroom($room){
        $peopleroom = PeopleRoom::where('room_id',$room)
            ->get();
        $show = [];
        foreach ($peopleroom as $pr) {
            $people = People::find($pr['people_id']);
            array_push($show,$people);
        }
        return view('show')
            ->with('people',$show);
    }
    public function getShow(){
        $people = People::all();
        // orderby('No','desc');
        return view('show')
            ->with('people',$people);
    }
}
