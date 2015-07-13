<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Project Reboot - Landing Page</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Bootstrap -->
        <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" />
        <link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet" />

        <link href='http://fonts.googleapis.com/css?family=Abel|Open+Sans:400,600' rel='stylesheet'>

        <style>
            html {
                background: url(images/background-1.jpg) no-repeat center center fixed; 
                -webkit-background-size: cover;
                -moz-background-size: cover;
                -o-background-size: cover;
                background-size: cover;
            }

            body {
                padding-top: 20px;
                font-size: 16px;
                font-family: "Open Sans",serif;
                background: transparent;
            }

            h1 {
                font-family: "Abel", Arial, sans-serif;
                font-weight: 400;
                font-size: 40px;
            }

            /* Override B3 .panel adding a subtly transparent background */
            .panel {
                background-color: rgba(255, 255, 255, 0.9);
            }

            .margin-base-vertical {
                margin: 40px 0;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-xs-10 col-xs-offset-2 col-md-6 col-md-offset-3 panel panel-default">

                    <h1 class="margin-base-vertical">Login to the Page</h1>
                    <form action="scripts/login.php" method="post">
                        <div class="form-group">
                            <label for="username">Username</label>
                            <input type="text" name="username" id="username" placeholder="Email Address">
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" name="password" id="password" placeholder="***********">
                        </div>
                        <input name="submit" type="submit" value="Login" class="btn btn-primary">
                    </form>
                    <br>
                    <br>
                </div>
            </div>
        </div>
    </body>
</html>
