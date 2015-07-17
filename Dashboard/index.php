<!DOCTYPE html>
<html>
<head>
    <title>Torajo - Dashboard</title>
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

    <?php
    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }
    ?>
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
                    <li><a href="../overview/index.php">Plan</a></li>
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
                <a href="" class="list-group-item active">Home View</a>
                <a href="../Dashboard/table" class="list-group-item">Project Table</a>
                <a href="../Dashboard/add" class="list-group-item">Add Project</a>
            </div>
        </div>
        <div class="col-md-6">
            <div class="panel panel-primary">
                <div class="panel-heading">Mock up of "Dashboard" Home View</div>
                <div class="panel-body">
            <?php
            include 'scripts/connectdb.php';
            $query = "SELECT * FROM projects " . "WHERE username='"
                    . $_SESSION['login_user'] . "' LIMIT 5";
            $result = mysqli_query($link, $query);
            if (!$result) {
                $error = 'Error fetching projects:' . mysqli_error($link);
                echo $error;
            }

            while ($row = mysqli_fetch_array($result)) {
                $projects[] = array('title' => $row['title'], 'startdate' => $row['startdate'], 'id' => $row['id'],
                    'client' => $row['clientid']);
            }

            include 'scripts/printprojects.html.php';
            ?>
                </div>
            </div>
            

        </div>
</body>
    </html>