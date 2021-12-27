@extends('layouts.master')

@section('content')

<title>Dashboard</title>
<div class="main"> 
  <div class="main-content">
    <div class="container-fluid">

        @if(session('user_role') == "Mahasiswa")
        <div class="col-sm-6">
            <div class="panel">
              <div class="panel-heading">
                <h3 class="panel-title">Welcome to SISTEN</h3>
                <div class="center">
                </div>
              </div>
            </div>
          </div>
            @else
          <!-- Chart 1 -->
        <div class="col-md-6">
                <div class="panel">
                <div id="chart-1"></div>
                </div>
            	</div>
                
	<!-- End Chart 1 -->

                <!-- Chart 2 -->
                <div class="col-md-6">
							<div class="panel">
								
									<div id="chart-2"></div>
                                    </div>
							</div>
							<!-- End Chart 2 -->

            	</div>
                </div>
                </div>
                </div>
                @endif
                

@stop

@section('footer')
<script src="https://code.highcharts.com/highcharts.js"></script>
<script>
Highcharts.chart('chart-1', {
    chart: {
        type: 'column'
    },
    title: {
        text: 'Total Teaching Assistant'
    },
    subtitle: {
        text: 'for each Program Study'
    },

    xAxis: {
        categories: {!!json_encode($categories)!!},
        crosshair: true
    },
    yAxis: {
        min: 0,
        title: {
            text: 'Number of students'
        }
    }, 
    tooltip: {
        headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
        pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
            '<td style="padding:0"><b>{point.y}</b></td></tr>',
        footerFormat: '</table>',
        shared: true,
        useHTML: true
    },

    plotOptions: {
        column: {
            pointPadding: 0.2,
            borderWidth: 0,
            dataLabels: {
                enabled: true
            }
        }
    },
    series: [{
        name: 'Odd',
        data:  {!!json_encode($data)!!},

    },
    {
        name: 'Even',
        data:  {!!json_encode($data_1)!!},

    }]
});
              
</script>


<script>
Highcharts.chart('chart-2', {
    chart: {
        type: 'column'
    },
    title: {
        text: 'Total Log Activity Report'
    },
    xAxis: {
        categories: {!!json_encode($courses)!!},
    },
    yAxis: {
        min: 0,
        title: {
            text: 'Number of reports'
        },
        stackLabels: {
            enabled: true,
            style: {
                fontWeight: 'bold',
                color: ( // theme
                    Highcharts.defaultOptions.title.style &&
                    Highcharts.defaultOptions.title.style.color
                ) || 'gray'
            }
        }
    },
    legend: {
        align: 'right',
        x: 10,
        verticalAlign: 'top',
        y: 20,
        floating: true,
        backgroundColor:
            Highcharts.defaultOptions.legend.backgroundColor || 'white',
        borderColor: '#CCC',
        borderWidth: 1,
        shadow: false
    },
    tooltip: {
        headerFormat: '<b>{point.x}</b><br/>',
        pointFormat: '{series.name}: {point.y}<br/>Total: {point.stackTotal}'
    },
    plotOptions: {
        column: {
            stacking: 'normal',
            dataLabels: {
                enabled: true
            }
        }
    },
    series: [{
        name: 'Unapprove',
        data: {!!json_encode($unapprove)!!},
    }, {
        name: 'Approve',
        data: {!!json_encode($approve)!!},
    },]
});

</script>
@stop