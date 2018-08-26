@extends('temptest')
@section('content')


    <div id="print">
        {!! QrCode::size(150)->generate($people->id) !!}
        <br>
        ID : {{$people->id}}<br>
        ชื่อ : {{$people->firstname}}<br>
        นามสกุล : {{$people->lastname}}<br>
    </div><br>
<button onclick="printDiv('print')" type="button" class="btn btn-warning">Print QR</button>
    <a href="/" type="button" class="btn btn-warning">Done</a>
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