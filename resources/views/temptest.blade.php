<html>
<html lang="en">
<head >
    <title>#sciweek2018 </title>
    <style>

        * {
            box-sizing: border-box;
        }

        body {
            font: 16px Arial;
        }

        .autocomplete {
            /*the container must be positioned relative:*/
            position: relative;
            display: inline-block;
        }

        input , select{
            border: 1px solid transparent;
            background-color: #f1f1f1;

            font-size: 16px;
        }

        input[type=text] {
            background-color: #f1f1f1;

        }
        .autocomplete-items  {
            position: absolute;
            border: 1px solid #d4d4d4;
            border-bottom: none;
            border-top: none;
            z-index: 99;
            /*position the autocomplete items to be the same width as the container:*/
            top: 100%;
            left: 0;
            right: 0;
        }

        .autocomplete-items div {
            padding: 10px;
            cursor: pointer;
            background-color: #fff;
            border-bottom: 1px solid #d4d4d4;
        }

        .autocomplete-items div:hover , .select-selected.select-arrow-active:after {
            /*when hovering an item:*/
            background-color: #e9e9e9;
        }

        .autocomplete-active {
            /*when navigating through the items using the arrow keys:*/
            background-color: #954120 !important;
            color: #ffffff;
        }

    </style>
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

<div class="container ">
    <div class="row" >
    <div class="col-lg-3"style="margin-top: 10%;">
        <div class="text-center">@yield ('content')</div>
    </div>
    <div class="col-lg-4" style="margin-top: 5%;">
        <div id ="students">
            @yield('student')
        </div>
        <div id ="teachers">
            @yield('teacher')
        </div>
        <div id ="peoples">
            @yield('people')
        </div>
    </div>
    <div class="col-lg-3">
    </div>
</div>
</div>


</body>
</html>