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
        <div class="col-md-2 col-xs-12">
            <div class="list-group">
                <a href="../" class="list-group-item">Home View</a>
                <a href="../table" class="list-group-item">Project Table</a>
                <a href="" class="list-group-item active">Add Project</a>
            </div>
        </div>
        <div class="col-md-4 col-xs-12">
            <div class="well well-lg">
                <h2>Project Input Form</h2>
                <br>
                <form method="POST">
                    <div class="form-group">
                        <label for="projectTitle">Project Title</label>
                        <input type="text" class="form-control" id="projectTitle" name="projectTitle" 
                               placeholder="e.g. Renovation Work" required>
                    </div>
                    <div class="form-group">
                        <label for="clientID">Client ID</label>
                        <select class="form-control" id="clientID" name="clientID">
                            <option>ICE</option>
                            <option disabled>------------------- </option>
                            <option>NDY - Adelaide</option>
                            <option>NDY - Brisbane</option>
                            <option>NDY - Canberra</option>
                            <option>NDY - Darwin</option>
                            <option>NDY - Gold Coast</option>
                            <option>NDY - Melbourne</option>
                            <option>NDY - Perth</option>
                            <option>NDY - Sydney</option>
                            <option disabled>------------------- </option>
                            <option>NDY - Auckland</option>
                            <option>NDY - Wellington</option>
                            <option>NDY - Christchurch</option>
                            <option disabled>------------------- </option>
                            <option>NDY - Dubai</option>
                            <option>NDY - London</option>
                            <option>NDY - Kuala Lumpur</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="payOrder">Pay Order</label>
                        <input type="text" class="form-control" id="payOrder" name="payOrder" placeholder="e.g. 90210">
                    </div>
                    <div class="form-group">
                        <label for="startDate">Start Date</label>
                        <input type="date" class="form-control" id="startDate" name="startDate">
                    </div>
                    <div class="form-group">
                        <label for="endDate">Deadline (Please make sure this occurs on or after the Start Date)</label>
                        <input type="date" class="form-control" id="endDate" name="endDate">
                    </div>
                    <div class="form-group">
                        <label for="sumWH">Workhours Required</label>
                        <input type="number" class="form-control" min="0" id="sumWH" name="sumWH" placeholder="e.g. 215">
                    </div>
                    <div class="form-group">
                        <label for="comments">Comments/Description</label>
                        <textarea class="form-control" id="comments" name="comments" placeholder="e.g. Timeline, Progress,Specifications"></textarea>
                    </div>
                    <input type="hidden" id="username" name="username" value="<?php echo $_SESSION['login_user']; ?>" >
                    <input type="submit" name="submit" value="Add Project" class="btn btn-primary pull-right">
                </form>
                <br><br>
                <?php
                include '../scripts/addProject.php';
                ?>
            </div>
            <?php
            if (isset($notepop)) {
                echo $notepop;
            }
            ?>
        </div>
    </div>
</body>