@extends('layouts.master')

@section('content')

<title>Chart</title>
<div class="main">
    <div class="main-content">
        <div class="container-fluid">
            <div class="row">
                <!-- Chart 1 -->
                <div class="col-md-6">
                    <div class="panel">
                        <div id="chart-1"></div>
                    </div>
                    <!-- End Chart 1 -->
                    <!-- TODO LIST -->
                    <div class="panel">
                        <div class="panel-heading">
                            <h3 class="panel-title">To-Do List</h3>
                            <div class="right">
                                <button type="button" class="btn-toggle-collapse"><i class="lnr lnr-chevron-up"></i></button>
                                <button type="button" class="btn-remove"><i class="lnr lnr-cross"></i></button>
                            </div>
                        </div>
                        <div class="panel-body">
                            <ul class="list-unstyled todo-list">
                                @foreach ($schedule as $schedule)
                                <li>
                                    <label class="control-inline fancy-checkbox">
                                        <input type="checkbox"><span></span>
                                    </label>
                                    <p>
                                        <span class="short-description">{{$schedule -> course_initial}} - {{$schedule -> session_name}}</span>
                                        <span class="date">{{$schedule -> date_time}}</span>
                                    </p>
                                    <div class="controls">
                                        <a href="#"><i class="icon-software icon-software-pencil"></i></a> <a href="#"><i class="icon-arrows icon-arrows-circle-remove"></i></a>
                                    </div>
                                </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                    <!-- END TODO LIST -->
                </div>


                <!-- Chart 2 -->
                <div class="col-md-6">
                    <div class="panel">
                        <div id="chart-2"></div>
                    </div>
                    <!-- End Chart 2 -->

                </div>
            </div>
        </div>

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
                    categories: {
                        !!json_encode($categories) !!
                    },
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
                        name: 'odd',
                        data: {
                            !!json_encode($data) !!
                        },
                    },
                    {
                        name: 'even',
                        data: {
                            !!json_encode($data_1) !!
                        },
                    }
                ]
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
                    categories: {
                        !!json_encode($courses) !!
                    },
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
                    backgroundColor: Highcharts.defaultOptions.legend.backgroundColor || 'white',
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
                    data: {
                        !!json_encode($unapprove) !!
                    },
                }, {
                    name: 'Approve',
                    data: {
                        !!json_encode($approve) !!
                    },
                }, ]
            });
        </script>
        @stop