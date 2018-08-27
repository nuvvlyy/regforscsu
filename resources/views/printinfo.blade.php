@extends('temptest')
@section('content')
<script>
    function printDiv(divName) {
        var printContents = document.getElementById(divName).innerHTML;
        var originalContents = document.body.innerHTML;
        document.body.innerHTML = printContents;
        window.print();
        document.body.innerHTML = originalContents;
    }
</script>
    @endsection
<!DOCTYPE html>
<html lang="en">
<head>
    <title>ID: {{$people->firstname." ".$people->lastname}} </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<div class="container" style= "margin-top: 50px;">
    <div class="text-center" ><h1>QR CODE</h1></div>
    <div class="jumbotron" style="background-color:#f9f9f9">
        <div class="text-center" >
            <div id="print">
                {!! QrCode::size(150)->generate($people->id) !!}
                <br>
                ID : {{$people->id}}<br>
                ชื่อ : {{$people->firstname}}<br>
                นามสกุล : {{$people->lastname}}<br>
            </div><br>
            <button onclick="printDiv('print')" type="button" class="btn btn-warning">Print QR</button>
            <a href="/" type="button" class="btn btn-warning">Done</a>
        </div>
    </div>

</div>

</body>
</html>
