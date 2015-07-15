<!DOCTYPE html>
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
                <a class="navbar-brand" href="#">WorkHours Project</a>
            </div>

            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-2">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="#">Dashboard<span class="sr-only">(current)</span></a></li>
                    <li><a href="../overview/index.php">Plan</a></li>
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
                <a href="" class="list-group-item active">Home View</a>
                <a href="../Dashboard/table" class="list-group-item">Project Table</a>
                <a href="../Dashboard/add" class="list-group-item">Add Project</a>
            </div>
        </div>
        <div class="col-md-6">

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
</body>