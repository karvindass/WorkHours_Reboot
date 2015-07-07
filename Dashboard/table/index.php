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
                    <li class="active"><a href="#">Dashboard<span class="sr-only">(current)</span></a></li>
                    <li><a href="#">Add Project</a></li>
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
        <div class="col-md-2"
    <ul class="list-group">
        <a href="../" class="list-group-item">Home View</a>
        <a href="#" class="list-group-item active">Project Table</a>
        <li class="list-group-item">
            <span class="badge">1</span>
            View 3
        </li>
    </ul>
    </div>
        <div class="col-md-6">
            <div class="panel panel-default">
                <div class="panel-heading">List of all Projects</div>
                <table class="table">
                    <thead>
                        <tr>
                            <th>Project Name</th>
                            <th>Client ID</th>
                            <th>Total Workhours</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        include '../scripts/connectdb.php';
                        $query = 'SELECT * FROM projects';
                        $result = mysqli_query($link, $query);
                        if (!$result) {
                            $error = 'Error fetching projects:' . mysqli_error($link);
                            echo $error;
                        }

                        while ($row = mysqli_fetch_array($result)) {
                            $projects[] = array('title' => $row['title'], 'startdate' => $row['startdate'], 'id' => $row['id'],
                                'client' => $row['clientid'], 'sumwh' => $row['sumwh']);
                        }

                        include '../scripts/printgeneraltable.html.php';
                        ?>
                    </tbody>
                </table>
            </div>
        
    </div>
</body>