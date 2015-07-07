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
        <div class="col-md-2">
            <div class="list-group">
                <a href="../" class="list-group-item">Home View</a>
                <a href="../table" class="list-group-item">Project Table</a>
                <a href="" class="list-group-item active">Add Project</a>
            </div>
        </div>
        <div class="col-md-4">
            <form>
                <div class="form-group">
                    <label for="projectTitle">Project Title</label>
                    <input type="email" class="form-control" id="projectTitle" placeholder="e.g. Renovation Work on Paragon Building">
                </div>
                <div class="form-group">
                    <label for="clientID">Client ID</label>
                    <select class="form-control" id="ClientID">
                        <option>ICE</option>
                        <option>NDY - Adelaide</option>
                        <option>NDY - Brisbane</option>
                        <option>NDY - Melbourne</option>
                        <option>NDY - Sydney</option>
                        <option> ------------------- </option>
                        <option>NDY - London</option>
                        <option>NDY - Singapore</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="payOrder">Pay Order</label>
                    <input type="text" class="form-control" id="payOrder" placeholder="Email">
                </div>
                <div class="form-group">
                    <label for="projectTitle">Start Date</label>
                    <input type="date" class="form-control" id="exampleInputEmail1" placeholder="Email">
                </div>
                <div class="form-group">
                    <label for="projectTitle">Deadline</label>
                    <input type="date" class="form-control" id="exampleInputEmail1" placeholder="Email">
                </div>
                <div class="form-group">
                    <label for="projectTitle">Workhours Required</label>
                    <input type="number" class="form-control" min="0" step="5" id="sumWH" placeholder="e.g. 215">
                </div>
                <div class="form-group">
                    <label for="projectTitle">Comments/Description</label>
                    <textarea class="form-control" id="exampleInputEmail1" placeholder="e.g. Timeline, Progress,Specifications"></textarea>
                </div>
                <button type="submit" class="btn btn-primary" style="float: right;">Submit</button>
            </form>

        </div>
</body>