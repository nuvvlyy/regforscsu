@extends('temptest')

@section('content')
    <div class="container">
        <br>
        <div class="row">
            <div class="col-md-6"><h2><B>รายชื่อผู้เข้าร่วมงาน</B></h2></div>
            <div class="col-md-2"></div>
            <div class="col-md-4"><a href="/showroom/1" class="btn btn-info">Room1</a>
                <a href="/showroom/2" class="btn btn-info">Room2</a>
                <a href="/showroom/3" class="btn btn-info">Room3</a>
                <a href="/show" class="btn btn-info">Allroom</a>
            </div>
        </div>

        {{--<p>The .table-bordered class adds borders to a table:</p>--}}
        <table class="table table-bordered">
            <thead>
            <tr>
                <th>หมายเลข</th>
                <th>ชื่อ</th>
                <th>นามสกุล</th>
                <th>เพศ</th>
                <th>อายุ</th>
                <th>โรงเรียน</th>
                <th>อาชีพ</th>
                <th>จำนวนคนที่พามา</th>
                <th>ระดับการศึกษา</th>
            </tr>
            </thead>
            <tbody>
            @foreach($people as $p)
                <tr>
                    <td>{{$p['id']}}</td>
                    <td>{{$p['firstname']}}</td>
                    <td>{{$p['lastname']}}</td>
                    <td>{{$p['gender']}}</td>
                    <td>{{$p['age']}}</td>
                    <td>{{$p['school']}}</td>
                    <td>{{$p['job']}}</td>
                    <td>{{$p['n_children']}}</td>
                    <td>{{$p['grade']}}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

@endsection()