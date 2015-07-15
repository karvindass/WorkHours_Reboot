<!DOCTYPE html>
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/1.0.2/Chart.min.js"></script>

</head>
<body>
    <nav class="navbar navbar-inverse">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-2">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">WorkHours Project</a>
            </div>

            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-2">
                <ul class="nav navbar-nav">
                    <li><a href="../Dashboard/">Dashboard</a></li>
                    <li class="active"><a href="../overview">Plan<span class="sr-only">(current)</span></a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="#">Action</a></li>
                            <li><a href="#">Another action</a></li>
                            <li><a href="#">Something else here</a></li>
                            <li class="divider"></li>
                            <li><a href="#">Separated link</a></li>
                        </ul>
                    </li>
                </ul>
                <form class="navbar-form navbar-right" role="search">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Search">
                    </div>
                    <button type="submit" class="btn btn-default">Submit</button>
                </form>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="#">Link</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="row">
        <div class="col-md-2">
            <div class="list-group">
                <a href="#" class="list-group-item active">Ticker</a>
                <a href="" class="list-group-item">Breakdown</a>
                <a href="" class="list-group-item">View 3</a>
            </div>
        </div>
        <div class="col-md-6">
            <div class="panel panel-default">
                <div class="panel-heading">The next 5 working days</div>
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
            <canvas id="canvas"></canvas>
            <script>
                var dData = function () {
                    return Math.round(Math.random() * 90) + 10
                };

                var barChartData = {
                    labels: ["<?php echo $Day1s; ?>",
                        "<?php echo nextDs($Day1); $DayOut = nextD($Day1); ?>",
                        "<?php echo nextDs($DayOut); $DayOut = nextD($DayOut); ?>",
                        "<?php echo nextDs($DayOut); $DayOut = nextD($DayOut); ?>",
                        "<?php echo nextDs($DayOut); $DayOut = nextD($DayOut); ?>",
                        "<?php echo nextDs($DayOut); $DayOut = nextD($DayOut); ?>",
                        "<?php echo nextDs($DayOut); $DayOut = nextD($DayOut); ?>",
                        "<?php echo nextDs($DayOut); $DayOut = nextD($DayOut); ?>",
                        "<?php echo nextDs($DayOut); $DayOut = nextD($DayOut); ?>", 
                        "<?php echo nextDs($DayOut); ?>"],
                    datasets: [{
                            fillColor: "rgba(0,60,100,1)",
                            strokeColor: "black",
                            data: [<?php echo callHours($Day1); ?>, 
                                <?php $DayOut = nextD($Day1); echo callHours($DayOut); ?>,
                                <?php $DayOut = nextD($DayOut); echo callHours($DayOut); ?>,
                                <?php $DayOut = nextD($DayOut); echo callHours($DayOut); ?>,
                                <?php $DayOut = nextD($DayOut); echo callHours($DayOut); ?>,
                                <?php $DayOut = nextD($DayOut); echo callHours($DayOut); ?>,
                                <?php $DayOut = nextD($DayOut); echo callHours($DayOut); ?>,
                                <?php $DayOut = nextD($DayOut); echo callHours($DayOut); ?>,
                                <?php $DayOut = nextD($DayOut); echo callHours($DayOut); ?>,
                                <?php $DayOut = nextD($DayOut); echo callHours($DayOut); ?>]
                        }]
                }

                var index = 11;
                var ctx = document.getElementById("canvas").getContext("2d");
                var barChartDemo = new Chart(ctx).Bar(barChartData, {
                    responsive: true,
                    barValueSpacing: 2
                });
//                setInterval(function () {
//                    barChartDemo.removeData();
//                    barChartDemo.addData([dData()], "dD " + index);
//                    index++;
//                }, 3000);
        </script>
        </div>
    </div>