<?php
    include "estabConn.php";
    $email = $_POST['email'];
    $pass = $_POST['password'];
    $type = $_POST['type'];
    $getdata = "SELECT firstName, lastName, email, pass, contact, username FROM studentdata";
    $result = $conn->query($getdata, MYSQLI_STORE_RESULT);
    while(list($fname,$lname,$mail,$passw,$contact,$user) = $result->fetch_row()){ 
        if((strcmp($email,$mail)==0)&&(strcmp($pass,$passw)==0)){
                $fullname = $fname.' '.$lname;
                $username = $user;
                echo "
<!DOCTYPE html>
<html>
    <head>
        <title>
            Welcome $fname
        </title>
        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\" >
        <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js\"></script>
        <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\"></script>
        <link rel=\"stylesheet\" type=\"text/css\" href=\"../css/profile.css\" />
        <script src=\"../js/edit.js\"></script>
    </head>
    <body>
        <nav class=\"navbar navbar-default navbar-fixed-top mynavbar\" style=\"width: 100%;\">
            <div class=\"container\">
                <div class=\"navbar-header\">
                    <p class=\"navbar-btn\" >
                        <a href=\"../html/home.html\" class=\"navbar-brand\" style=\"font-size: 40px;margin-top: -15px;\">
                            <i class=\"glyphicon glyphicon-home\"></i>
                        </a>
                    </p>
                    <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#myNavBar\">
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                    </button>
                </div>
                <div class=\"collapse navbar-collapse navbar-right\" id=\"myNavBar\">
                    <ul class=\"nav navbar-nav\">
                        <li class=\"dropdown\" style=\"margin-top: 2px;\">
                            <div class=\"dropdown-toggle\" data-toggle=\"dropdown\" style=\"padding-top: 23px; padding-left: 14px;\">
                                <span class=\"glyphicon glyphicon-cog\"></span>
                            </div>
                            <ul class=\"dropdown-menu text-center\">
                                <li><a href=\"#\">Change Password</a></li>
                                <li><a href=\"#\">Delete Account</a></li>
                                <li><a href=\"#\">Upgrade</a></li> 
                            </ul>
                        </li>
                        <li class=\"dropdown\">
                            <div class=\"dropdown-toggle\" data-toggle=\"dropdown\" style=\"padding-top: 23px; padding-left: 14px;\">Details
                                <span class=\"caret\"></span>
                            </div>
                            <ul class=\"dropdown-menu text-center\">
                                <li><a href=\"#\">Personal</a></li>
                                <li><a href=\"#\">Order</a></li>
                                <li><a href=\"#\">Parent</a></li>
                                <li><a href=\"#\">Teachers</a></li>
                                <li><a href=\"#\">Courses</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href=\"../html/home.html\" class=\"navbar-btn\" style=\"display: inline-block;\">
                                Logout
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class=\"container-fluid\" style=\"height: 300px; background-color: #f8f8f8;opacity: 0.9;margin-bottom: 170px;\">
            <div class=\"row\" style=\"margin-top: 7%;\">
                <div class=\"col-xs-4 col-xs-offset-3 col-lg-2 col-lg-offset-1\" >
                    <div class=\"profile\" ></div>
                </div>
                <div class=\"col-xs-11 col-xs-offset-1 col-lg-6 col-lg-offset-1 name\" style=\"margin-top: 10%;\">
                    $fullname
                </div>
                <div class=\"col-xs-4 col-xs-offset-5 col-lg-offset-1 col-lg-2 username\">
                    @$username           
                </div>
            </div>
        </div>
        
        <div class=\"container-fluid\" style=\"opacity: 0.9;margin-bottom: 40px;\">
            <div class=\"row\" style=\"margin-top: -10px;\">
                <div class=\"col-lg-10 col-lg-offset-1 col-xs-12\">
                    <div class=\"panel container-fluid\">
                        <div class=\"panel-heading\" style=\"margin-top: -30px;\">
                            <div class=\"jumbotron text-center col-xs-12 \" style=\"margin-top: 5%; padding-right: -10px;\">
                                <h1>
                                    Personal Details
                                </h1>
                            </div>
                        </div>
                        <form action=\"update.php\" id=\"update\">
                        <div class=\"panel-body row\">
                            
                                <div class=\"col-lg-4\">
                                    
                                    <input type=\"text\" id=\"fname\" class=\"form-control panelText \" placeholder=\"$fname\"  readonly />
                                </div>
                                <div class=\"col-lg-4\">
                                
                                    <input type=\"text\" id=\"lname\" class=\"form-control panelText \" placeholder=\"$lname\"  readonly />
                                </div>
                                <div class=\"col-lg-4\">
                                    <input type=\"tel\" id=\"contact\" class=\"form-control panelText \"  placeholder=\"$contact\" readonly />
                                </div>
                                <div class=\"col-lg-4\">
                                    <input type=\"email\" id=\"email\" class=\"form-control panelText \"  placeholder=\"$email\" readonly />
                                </div>
                                <div class=\"col-lg-4\">
                                    <input type=\"text\" id=\"username\" class=\"form-control panelText \" placeholder=\"$user\" readonly />
                                </div>
                        </div>
                        <div class=\"panel-footer\" style=\"background-color: white;\">
                            <button type=\"button\" id=\"editbutton\" onclick=\"change()\"  class=\"btn btn-default\" style=\"float: right;margin-bottom: 30px;\">
                                Edit
                                <i class=\" glyphicon glyphicon-pencil\"></i>
                            </button>
                            <button type=\"button\" id=\"submit\" class=\"btn btn-default invisible \" style=\"display: inline-block;float: right;margin-bottom: 30px;\">Submit</button>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <footer>
            <div class=\"container\">
                <p align=\"center\">SMS &copy; Chitransh Vishwakarma. All Rights Reserved | Contact : +91 9922542931</p>
            </div>
        </footer>
    </body>
</html>

    ";
                break;
        }
    }
    
?>