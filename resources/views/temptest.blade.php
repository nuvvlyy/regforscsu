<html>
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
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
<div class="text-center" style="margin-top: 3%; margin-bottom: 50px;"><a>@yield ('content')</a></div>
<div class="container">

    <div class="col-lg-3">
    </div>
    <div class="col-lg-4">
        <div id ="students">@yield('student')</div>
        <div id ="teachers">@yield('teacher')</div>
        <div id ="peoples">@yield('people')</div>
    </div>
    <div class="col-lg-3">
    </div>

</div>
{{--<div class ="text-center" >@yield ('bottonshow')</div>--}}




</body>
</html>