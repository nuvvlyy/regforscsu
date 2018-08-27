<html>

<head >
    <title>#sciweek2018 </title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <style>
        @page {
            size: 59mm 125cm;
        }
    </style>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script>
        $(document).ready(function(){
            $("#teachers").hide();
            $("#peoples").hide();
            $("#students").show();
            $("#student").click(function(){
                $("#teachers").hide();
                $("#peoples").hide();
                $("#students").show();
            });
            $("#teacher").click(function(){
                $("#teachers").show();
                $("#peoples").hide();
                $("#students").hide();
            });
            $("#people").click(function(){
                $("#teachers").hide();
                $("#peoples").show();
                $("#students").hide();
            });
        });
    </script>

</head>

<body>

<div class="container ">
    <div class="row" >
    <div class="col-lg-3"style="margin-top: 10%;">
        <div class="text-center"  ">@yield ('content')</div>
    </div>
    <div class="col-lg-4" style="margin-top: 5%;">
        <div id ="students">@yield('student')</div>
        <div id ="teachers">@yield('teacher')</div>
        <div id ="peoples">@yield('people')</div>
    </div>
    <div class="col-lg-3">
    </div>
</div>
</div>
{{--<div class ="text-center" >@yield ('bottonshow')</div>--}}




</body>
</html>