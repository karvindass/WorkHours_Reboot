<!DOCTYPE html>
<head>
    <title>Project Reboot - Landing Page</title>
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
                    <li class="active"><a href="#">Dashboard<span class="sr-only">(current)</span></a></li>
                    <li><a href="../../overview/">Plan</a></li>
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
                <a href="../" class="list-group-item">Home View</a>
                <a href="../table" class="list-group-item active">Project Table</a>
                <a href="../add" class="list-group-item">Add Project</a>
            </div>
        </div>
        <div class="col-md-8">
            <div class="panel panel-default">
                <div class="panel-heading">Recorded Projects</div>
                <table class="table table-hover table-bordered">
                    <thead>
                        <tr>
                            <th>Project Name</th>
                            <th>Client ID</th>
                            <th>Starting Date</th>
                            <th>Daily Workhours</th>
                            <th>Deadline</th>
                            <th>Total Workhours</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        include '../scripts/connectdb.php';
                        $query = "SELECT * FROM projects WHERE username='"
                                . $_SESSION['login_user'] . "'";
                        $result = mysqli_query($link, $query);
                        if (!$result) {
                            $error = 'Error fetching projects:' . mysqli_error($link);
                            echo $error;
                        }

                        while ($row = mysqli_fetch_array($result)) {
                            $projects[] = array('id' => $row['id'], 'title' => $row['title'],
                                'startdate' => $row['startdate'], 'enddate' => $row['enddate'],
                                'client' => $row['clientid'], 'sumwh' => $row['sumwh'],
                                'whperday' => $row['whperday']);
                        }

                        include '../scripts/printgeneraltable.html.php';
                        ?>
                    </tbody>
                </table>
            </div>

        </div>
</body>