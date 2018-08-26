

@extends('temptest')
@section('content')

    <button  style="background:#2b542c; " type="button" class="btn btn-default"><a href="/show" style="color:#c4e3f3; " >show</a></button>
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div id ="student"><a>นักเรียน</a></div>
            </div>
            <div class="col-lg-4">


                <div id ="teacher"><a>คุณครู</a></div>

            </div>
            <div class="col-lg-4">
                <div id ="people"><a>บุคคลธรรมดา</a></div>
            </div>
        </div>
    </div>
    {{--{!! QrCode::size(150)->generate("654") !!}--}}
@endsection()

@section('student')
    <h4>นักเรียน</h4>
    <form action="/Student" method="post">
        ชื่อ :&nbsp;&nbsp;&nbsp;&nbsp;<input  style=" margin-top:1%; width:80%" type="text" name="firstname" >
        <br>
        <div style="margin-top:20;">นามสกุล :
            <input type="text" name="lastname"></div>
        <br>
        <label for="gender">เพศ</label><br>
        <input name="gender" type="radio" value="male" id="gender"> ชาย <br>
        <input name="gender" type="radio" value="female" id="gender"> หญิง
        <br>
        <div style="margin-top:20;">โรงเรียน :&nbsp;&nbsp;&nbsp;&nbsp;
            <input type="text" name="school"></div>
        <br>
        <div style=" "> ระดับการศึกษา :
            <select style=" margin-top:1%; width:80%" name="class"><option selected="selected" disabled="disabled" hidden="hidden" value=""> โปรดระบุ</option><option value="P1">อนุบาล 1</option><option value="P2">อนุบาล 2</option><option value="P3">อนุบาล 3</option><option value="G1">ประถมศึกษาชั้นปีที่ 1</option><option value="G2">ประถมศึกษาชั้นปีที่ 2</option><option value="G3">ประถมศึกษาชั้นปีที่ 3</option><option value="G4">ประถมศึกษาชั้นปีที่ 4</option><option value="G5">ประถมศึกษาชั้นปีที่ 5</option><option value="G6">ประถมศึกษาชั้นปีที่ 6</option><option value="G7">มัธยมศึกษาปีที่ 1</option><option value="G8">มัธยมศึกษาปีที่ 2</option><option value="G9">มัธยมศึกษาปีที่ 3</option><option value="G10">มัธยมศึกษาปีที่ 4</option><option value="G11">มัธยมศึกษาปีที่ 5</option><option value="G12">มัธยมศึกษาปีที่ 6</option><option value="B1">ปริญญาตรี</option><option value="B2">ปริญญาโท</option><option value="B3">ปริญญาเอก</option></select>
        </div><br> <br>
        <input type="submit" name="Submit" value = "ลงทะเบียน">
        {{csrf_field()}}
    </form>
@endsection
@section('teacher')
    <h4>คุณครู</h4>
    <form action="/Teacher" method="post">
        ชื่อ :&nbsp;&nbsp;&nbsp;&nbsp;<input  style=" margin-top:1%; width:80%" type="text" name="firstname" >
        <br>
        <div style="margin-top:20;">นามสกุล :&nbsp;&nbsp;&nbsp;&nbsp;
            <input type="text" name="lastname"></div>
        <br>
        <label for="gender">เพศ</label><br>
        <input name="gender" type="radio" value="male" id="gender"> ชาย <br>
        <input name="gender" type="radio" value="female" id="gender"> หญิง
        <br>
        <div style="margin-top:20;">โรงเรียน :&nbsp;&nbsp;&nbsp;&nbsp;
            <input type="text" name="school"></div>
        <br>

        <div >จำนวนนักเรียนที่พามา :&nbsp;&nbsp;&nbsp;&nbsp;
            <input type="text" name="n_children"></div>
        <br>
        <br>
        <input type="submit" name="Submit" value = "ลงทะเบียน">
        {{csrf_field()}}

    </form>
@endsection
@section('people')
    <h4>บุคคลธรรมดา</h4>
    <form action="/People" method="post">
        ชื่อ :&nbsp;&nbsp;&nbsp;&nbsp;<input  style=" margin-top:1%; width:80%" type="text" name="firstname" >
        <br>
        <div style="margin-top:20;">นามสกุล :&nbsp;&nbsp;&nbsp;&nbsp;
            <input type="text" name="lastname"></div>
        <br>
        <label for="gender">เพศ</label>:&nbsp;&nbsp;&nbsp;&nbsp;
        <input name="gender" type="radio" value="male" id="gender"> ชาย &nbsp;&nbsp;&nbsp;
        <input name="gender" type="radio" value="female" id="gender"> หญิง
        <br>
        <div style="margin-top:20;">อายุ :&nbsp;&nbsp;&nbsp;&nbsp;
            <input type="number" name="age"></div>
        <br>
        <div >อาชีพ :&nbsp;&nbsp;&nbsp;&nbsp;
            <input type="text" name="job"></div>
        <br>
        <br>
        <input type="submit" name="Submit" value = "ลงทะเบียน">
        {{csrf_field()}}
    </form>
@endsection