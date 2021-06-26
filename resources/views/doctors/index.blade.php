@extends('layouts.master')
@section('page_title','Patient Chart')
@section('content')

<script>

var patients_data = [['date', 'patients']];
</script>

@foreach($patients as $patient)

<script>
patients_data.push(['<?= $patient->date; ?>', Number('<?= $patient->patient_count; ?>')]);

</script>

@endforeach
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">

      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        console.log(patients_data);
        var data = google.visualization.arrayToDataTable(patients_data);

        var options = {
          title: 'Company Performance',
          hAxis: {title: 'Year',  titleTextStyle: {color: '#333'}},
          vAxis: {minValue: 0}
        };

        var chart = new google.visualization.AreaChart(document.getElementById('chart_div'));
        chart.draw(data, options);
      }
    </script>


<div class="right_col" role="main">
    <div class="">
        <div class="row">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Patient Chart </h2>
                    {{session('msg')}}
                        <ul class="nav navbar-right panel_toolbox">
                    </ul>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <div id="chart_div" style="width: 100%; height: 500px;"></div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection