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
@yield ('content')

<div class="container">
    <div class="row">
        <div class="col-lg-4">
        </div>
        <div class="col-lg-4">
            <div id ="students">@yield('student')</div>
            <div id ="teachers">@yield('teacher')</div>
            <div id ="peoples">@yield('people')</div>
        </div>
        <div class="col-lg-4">
        </div>
    </div>
</div>





</body>
</html>