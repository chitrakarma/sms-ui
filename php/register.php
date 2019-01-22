<?php
    include "estabConn.php";
    
        //declaring variables
        $fname = $_POST['fname'];               //stores firstname 
        $lname = $_POST['lname'];               //stores lastname
        $email = $_POST['email'];               //stores email address
        $contact = $_POST['contact'];           //stores contact number
        $pass = $_POST['password'];             //stores password
        $user = $_POST['username'];             //stores username
        $type = $_POST['type'];                 //sotes type of person
        $fullname=$fname.' '.$lname;             
        if($conn->connect_error){
            echo "connection error";
        }
        else{
            
                    $ins = "INSERT INTO studentdata(firstName,lastName,contact,email,pass,username) VALUES('$fname','$lname','$contact','$email','$pass','$user');";
                    $conn->query($ins);
                    $getdata = "SELECT firstName, lastName, contact, email, username from studentdata";
                    $result = $conn->query($getdata, MYSQLI_STORE_RESULT);
                    while(list($firstname,$lastname,$mail,$password,$cont,$usern) = $result->fetch_row()){ 
                    echo "
    <!DOCTYPE html>
<html>
    <head>
        <title>
            Welcome
        </title>
        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\" >
        <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js\"></script>
        <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\"></script>
        <link rel=\"stylesheet\" type=\"text/css\" href=\"../css/profile.css\" />
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
        <div class=\"container-fluid\" style=\"height: 300px; background-color: #f8f8f8;\">
            <div class=\"row\" style=\"margin-top: 7%;\">
                <div class=\"col-xs-4 col-xs-offset-3 col-lg-2 col-lg-offset-2\" >
                    <div class=\"profile\"></div>
                </div>
                <div class=\"col-xs-11 col-xs-offset-1 col-lg-6 col-lg-offset-1 name\" style=\"margin-top: 10%;\">
                    $fullname
                </div>
                <div class=\"col-xs-4 col-xs-offset-5 col-lg-offset-1 col-lg-2 username\">
                    @$user          
                </div>
            </div>
        </div>
        
        <div class=\"container-fluid\">
            <div class=\"row\" style=\"margin-top: -10px;\">
                <div class=\"col-lg-10 col-lg-offset-1 col-xs-12\">
                    <div class=\"panel container-fluid\">
                        <div class=\"panel-heading\">
                            <div class=\"jumbotron text-center col-xs-12 \" style=\"margin-top: 5%; padding-right: -10px;\">
                                <h1>
                                    Personal Details
                                </h1>
                            </div>
                        </div>
                        <div class=\"panel-body row\">
                            <div class=\"col-lg-4\">
                                
                                <input type=\"text\" class=\"form-control panelText\" placeholder=\"$fname\"  readonly />
                            </div>
                            <div class=\"col-lg-4\">
                                
                                <input type=\"text\" class=\"form-control panelText\" placeholder=\"$mname\"  readonly />
                            </div>
                            <div class=\"col-lg-4\">
                            
                                <input type=\"text\" class=\"form-control panelText\" placeholder=\"$lname\"  readonly />
                            </div>
                            <div class=\"col-lg-4\">
                                <input type=\"tel\" class=\"form-control panelText\"  placeholder=\"$contact\" readonly />
                            </div>
                            <div class=\"col-lg-4\">
                                <input type=\"email\" class=\"form-control panelText\"  placeholder=\"$email\" readonly />
                            </div>
                            <div class=\"col-lg-4\">
                                <input type=\"text\" class=\"form-control panelText\" placeholder=\"$user\" readonly />
                            </div>
                        </div>
                        <div class=\"panel-footer\" style=\"background-color: white;\">
                            <button type=\"button\" class=\"btn btn-default\" style=\"float: right;margin-bottom: 30px;\">
                                Edit
                                <i class=\" glyphicon glyphicon-pencil\"></i>
                            </button>
                        </div>
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
        }}
?>