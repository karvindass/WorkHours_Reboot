<!DOCTYPE html>
<html>
<head>
    <title>Plan Overview - Torajo</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- jQuery link -->
    <script src="https://code.jquery.com/jquery.js"></script>
    <!-- Bootstrap Links -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <!-- Bootstrap theme -->
    <link href="https://maxcdn.bootstrapcdn.com/bootswatch/3.3.5/paper/bootstrap.min.css" rel="stylesheet" />
    <!-- Link to Theme: https://bootswatch.com/paper/ -->

    <!-- Chart.js -->
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/1.0.2/Chart.min.js"></script> -->
    <script src="https://cdnjs.com/libraries/chart.js"></script>

    <!-- D3.js -->
    <script src="http://d3js.org/d3.v3.min.js" charset="utf-8"></script>
    
    <style>
        .axis path, .axis line
        {
            fill: none;
            stroke: #777;
            shape-rendering: crispEdges;
        }
        
        .axis text
        {
            font-family: 'Arial';
            font-size: 13px;
        }
        .tick
        {
            stroke-dasharray: 1, 2;
        }
        .bar
        {
            fill: FireBrick;
        }
        
       
    </style>
</head>
<body>
    <?php session_start(); ?>
    <nav class="navbar navbar-inverse">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-2">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">Torajo Workhours</a>
            </div>

            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-2">
                <ul class="nav navbar-nav">
                    <li><a href="../Dashboard/">Dashboard</a></li>
                    <li class="active"><a href="../overview">Plan<span class="sr-only">(current)</span></a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="https://login.microsoftonline.com/">Office 365</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="row">
        <div class="col-md-2">
            <div class="list-group">
                <a href="#" class="list-group-item active">Ticker</a>
                <a href="" class="list-group-item disabled">Breakdown</a>
                <a href="" class="list-group-item disabled">View 3</a>
            </div>
        </div>
        <div class="col-md-10">
        <div class="col-md-5">
            <div class="panel panel-primary">
                <div class="panel-heading">The next 5 working days</div>
                <div class="panel-body">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <?php
                            include 'scripts/nextDays.php';
                            include 'scripts/hoursTaken.php';
                            ?>
                            <th><?php echo $Day1s; ?></th>
                            <th><?php echo $Day2s; ?></th>
                            <th><?php echo $Day3s; ?></th>
                            <th><?php echo $Day4s; ?></th>
                            <th><?php echo $Day5s; ?></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Hours booked: <?php echo callHours($Day1); ?></td>
                            <td>Hours booked: <?php echo callHours($Day2); ?></td>
                            <td>Hours booked: <?php echo callHours($Day3); ?></td>
                            <td>Hours booked: <?php echo callHours($Day4); ?></td>
                            <td>Hours booked: <?php echo callHours($Day5); ?></td>
                        </tr>
                    </tbody>
                </table>
                </div>
            </div>
        </div>
        <div class="col-md-5">
            <div class="panel panel-primary">
                <div class="panel-heading">2 Week Plan</div>
            <canvas id="chart1"></canvas>
            <script>
                var ctx = document.getElementById("chart1").getContext("2d");
                
                var data = {
                    labels: ["<?php echo $Day1; ?>",
                        "<?php echo nextDs($Day1); $DayOut = nextD($Day1); ?>",
                        "<?php echo nextDs($DayOut); $DayOut = nextD($DayOut); ?>",
                        "<?php echo nextDs($DayOut); $DayOut = nextD($DayOut); ?>",
                        "<?php echo nextDs($DayOut); $DayOut = nextD($DayOut); ?>",
                        "<?php echo nextDs($DayOut); $DayOut = nextD($DayOut); ?>",
                        "<?php echo nextDs($DayOut); $DayOut = nextD($DayOut); ?>",
                        "<?php echo nextDs($DayOut); $DayOut = nextD($DayOut); ?>",
                        "<?php echo nextDs($DayOut); $DayOut = nextD($DayOut); ?>", 
                        "<?php echo nextDs($DayOut); ?>"],
                    datasets: [
                        
                    ]
                };
                new Chart(ctx).Bar(data,options);
            </script>
            </div>
        </div>
        <div class="col-md-5">
            <div class="panel panel-primary">
                <div class="panel-heading">Factbox</div>
                <div class="panel-body">
                    <div class="col-xs-6">
                        <h5>Today's Date</h5>
                        <p><?php echo $Day1s; ?></p>
                    </div>
                    <div class="col-xs-6">
                        <h5>Today's Workhours</h5>
                        <p><?php echo callHours($Day1) . " Hours Assigned"; ?></p>
                    </div>
                    <div class="col-xs-6">
                        <h5>Today's Capacity</h5>
                        <input type="number" min='0' name="tcap" id="tcap">
                    </div>
                    <script>
                    </script>
                    <div class="col-xs-6">
                        <h5>Spare Capacity Today</h5>
                        <p>Num</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-5">
            <div class="panel panel-primary">
                <div class="panel-heading">1 Month Outlook</div>
                    <div class="panel-body">
                            <svg id="visualisation" height="300" width="500"></svg>
                        <script>
                    InitChart();
                    function InitChart() {

                      var barData = [{
                        'x': "<?php echo $Day1; ?>",
                        'y': "<?php echo callHours($Day1); ?>"
                      }, {
                        'x': "<?php echo $Day2; ?>",
                        'y': "<?php echo callHours($Day1); ?>"
                      }, {
                        'x': 40,
                        'y': 10
                      }, {
                        'x': 60,
                        'y': 40
                      }, {
                        'x': 80,
                        'y': 5
                      }, {
                        'x': 100,
                        'y': 60
                      }];

                      var vis = d3.select('#visualisation'),
                        WIDTH = 500,
                        HEIGHT = 300,
                        MARGINS = {
                          top: 20,
                          right: 20,
                          bottom: 20,
                          left: 50
                        },
                        xRange = d3.scale.ordinal().rangeRoundBands([MARGINS.left, WIDTH - MARGINS.right], 0.1).domain(barData.map(function (d) {
                          return d.x;
                        })),


                        yRange = d3.scale.linear().range([HEIGHT - MARGINS.top, MARGINS.bottom]).domain([0,
                          d3.max(barData, function (d) {
                            return d.y;
                          })
                        ]),

                        xAxis = d3.svg.axis()
                          .scale(xRange)
                          .tickSize(5)
                          .tickSubdivide(true),

                        yAxis = d3.svg.axis()
                          .scale(yRange)
                          .tickSize(5)
                          .orient("left")
                          .tickSubdivide(true);


                      vis.append('svg:g')
                        .attr('class', 'x axis')
                        .attr('transform', 'translate(0,' + (HEIGHT - MARGINS.bottom) + ')')
                        .call(xAxis);

                      vis.append('svg:g')
                        .attr('class', 'y axis')
                        .attr('transform', 'translate(' + (MARGINS.left) + ',0)')
                        .call(yAxis);

                      vis.selectAll('rect')
                        .data(barData)
                        .enter()
                        .append('rect')
                        .attr('x', function (d) {
                          return xRange(d.x);
                        })
                        .attr('y', function (d) {
                          return yRange(d.y);
                        })
                        .attr('width', xRange.rangeBand())
                        .attr('height', function (d) {
                          return ((HEIGHT - MARGINS.bottom) - yRange(d.y));
                        })
                        .attr('fill', 'grey')
                        .on('mouseover',function(d){
                          d3.select(this)
                            .attr('fill','blue');
                        })
                        .on('mouseout',function(d){
                          d3.select(this)
                            .attr('fill','grey');
                        });

                    };
                        </script>
                </div>
            </div>
        </div>
        <div class="col-md-5">
            <div class="panel panel-primary">
                <div class="panel-heading">Empty Panel</div>
                <div class="panel-body">Content Example</div>
            </div>
        </div>
        </div>
    </div>
</body>
</html>