
<head>


</head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
    .pointer {cursor: pointer;}
    .vertical-menu {
        width: 200px;
    }

    .vertical-menu a {
        background-color: #ffffff;
        color: #101010;
        display: block;
        padding: 12px;

    }

    .vertical-menu a:hover {
        background-color: #ffff;
        color: #eee;
    }

    .vertical-menu a.active {

        color: #808080;
    }
</style>

@extends('temptest')
@section('bottonshow')
    <button  style="background:#2b542c; " type="button" class="btn btn-default"><a href="/show" style="color:#c4e3f3; " >show</a></button>
@endsection()
@section('content')
    <div class="vertical-menu">
        <div id ="student"><a href="#">นักเรียน</a></div>
        <div id ="teacher"><a href="#">คุณครู</a></div>
        <div id ="people"><a href="#">บุคคลธรรมดา</a></div>
    </div>

@endsection()

@section('student')

    <h4>นักเรียน</h4>
    <hr>
    <form action="/Student" method="post">
        ชื่อ :&nbsp;&nbsp;<input  style=" margin-top:1%; width:80%" type="text" name="firstname" >
        <br>
        <div style="margin-top:20;">นามสกุล :&nbsp;&nbsp;
            <input type="text" name="lastname"> </div>
        <br>
        <label for="gender" style="font-weight: normal;" >เพศ</label> :&nbsp &nbsp
        <input name="gender" type="radio" value="male" id="gender"> ชาย &nbsp;&nbsp;
        <input name="gender" type="radio" value="female" id="gender"> หญิง
        <br>
        <div style="margin-top:20;">สถานศึกษา :&nbsp;&nbsp;
            <input type="text" name="school"></div>
        <br>

        <div style=" "> ระดับการศึกษา :&nbsp;&nbsp;
          <select style=" margin-top:1%; width:80%" name="class"><option selected="selected" disabled="disabled" hidden="hidden" value=""> โปรดระบุ</option><option value="P1">อนุบาล 1</option><option value="P2">อนุบาล 2</option><option value="P3">อนุบาล 3</option><option value="G1">ประถมศึกษาชั้นปีที่ 1</option><option value="G2">ประถมศึกษาชั้นปีที่ 2</option><option value="G3">ประถมศึกษาชั้นปีที่ 3</option><option value="G4">ประถมศึกษาชั้นปีที่ 4</option><option value="G5">ประถมศึกษาชั้นปีที่ 5</option><option value="G6">ประถมศึกษาชั้นปีที่ 6</option><option value="G7">มัธยมศึกษาปีที่ 1</option><option value="G8">มัธยมศึกษาปีที่ 2</option><option value="G9">มัธยมศึกษาปีที่ 3</option><option value="G10">มัธยมศึกษาปีที่ 4</option><option value="G11">มัธยมศึกษาปีที่ 5</option><option value="G12">มัธยมศึกษาปีที่ 6</option><option value="B1">ปริญญาตรี</option><option value="B2">ปริญญาโท</option><option value="B3">ปริญญาเอก</option></select>
        </div>
            {{csrf_field()}} <br> <br>
    <input class="btn btn-warning" type="submit" name="Submit" value = "ลงทะเบียน">
    </form>

@endsection
@section('teacher')
    <h4>คุณครู</h4>
    <hr>
    <form action="/Teacher" method="post">
        ชื่อ :&nbsp;&nbsp;<input  style=" margin-top:1%; width:80%" type="text" name="firstname" >
        <br>
        <div style="margin-top:20;">นามสกุล :&nbsp;&nbsp;
            <input type="text" name="lastname"></div>
        <br>
        <label for="gender" style="font-weight: normal;" >เพศ</label> :&nbsp;&nbsp;
        <input name="gender" type="radio" value="male" id="gender"> ชาย &nbsp;&nbsp;
        <input name="gender" type="radio" value="female" id="gender"> หญิง
        <br>
        <div style="margin-top:20;">สถานศึกษา :&nbsp;&nbsp;
            <input type="text" name="school"></div>
        <br>

        <div >จำนวนนักเรียนที่พามา :&nbsp;&nbsp;
            <input type="text" name="n_children"></div>
        <br>
        <br>{{csrf_field()}}
        <input class="btn btn-warning" type="submit" name="Submit" value = "ลงทะเบียน">


    </form>
@endsection
@section('people')
    <h4>บุคคลธรรมดา</h4>
    <hr>
    <form action="/People" method="post">

        ชื่อ :&nbsp;&nbsp;<input  style=" margin-top:1%; width:80%" type="text" name="firstname" >
        <br>
        <div style="margin-top:20;">นามสกุล :&nbsp;&nbsp;
            <input type="text" name="lastname"></div>
        <br>
        <label for="gender" style="font-weight: normal;">เพศ</label>:&nbsp;&nbsp;
        <input name="gender" type="radio" value="male" id="gender"> ชาย &nbsp;&nbsp;&nbsp;&nbsp;
        <input name="gender" type="radio" value="female" id="gender"> หญิง
        <br>
        <div style="margin-top:20;">อายุ :&nbsp;&nbsp;
            <input type="number" name="age"></div>
        <br>
        <div >อาชีพ :&nbsp;&nbsp;
            <input type="text" name="job"></div>
        <br>
        <br>{{csrf_field()}}
        <input class="btn btn-warning" type="submit" name="Submit" value = "ลงทะเบียน">

    </form>
@endsection