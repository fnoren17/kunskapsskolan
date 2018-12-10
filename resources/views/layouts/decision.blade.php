@extends("layouts/master")

@section("pageheader")
    <head>
        <style>

            .rectangle {
                fill: steelblue;
            }
            .rectangle:hover {
                fill: orange;
            }
            .axis {
                font: 10px sans-serif;
            }

            .axis path,
            .axis line {
                fill: none;
                stroke: #000;
                shape-rendering: crispEdges;
            }
        </style>
        <title>Decisions Support Tool</title>
    </head>

@endsection
@section("body")
    <body style="margin-top: 10%; text-align: center">
    <div style="margin: auto">
        <div>

            <div style="display: inline-block; background-color: #01383f; margin: 5px; padding: 10px; border-radius: 3px"><a style="color: white;" href="/decisiontool/strategy">Statistics for Strategy</a></div>
            <div style="display: inline-block; background-color: #01383f; margin: 5px; padding: 10px; border-radius: 3px"><a style="color: white;" href="/decisiontool/school">Statistics for School</a></div>
        </div>
        @yield("graph")

    </div>

    </body>

@endsection