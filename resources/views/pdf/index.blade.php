@extends('layouts.admin')
@section('content')
<html>
<head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
        google.charts.load('current', {'packages':['corechart']});
        google.charts.setOnLoadCallback(drawChart);
        function drawChart() {

            var data = google.visualization.arrayToDataTable([
                ['Task', 'Hours per Day'],
                    @foreach($atletas as $atleta)

                    ['oro',{{$atleta -> oro}}],
                ['plata',{{$atleta -> plata}}],
                ['bronce',{{$atleta -> bronce}}],



            @endforeach
            ]);

            var options = {
                title: 'Medallas',

                colors: ['yellow', 'gray', '#cd7f32']
            };

            var chart = new google.visualization.PieChart(document.getElementById('piechart'));

            chart.draw(data, options);
        }
    </script>
</head>
<body>
<div id="piechart" style="width: 900px; height: 500px;"></div>
</body>
</html>
@endsection