<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <title>SIGN IN</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" type="image/x-icon" href="home.ico" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>



  <style>
    body{
      background-color: #6CEC83;
      overflow-x: hidden;
    }
    .navbar {
      margin-bottom: 0;
      
      background-color: #292c2f;
      z-index: 9999;
      border: 0;
      font-size: 12px !important;
      line-height: 1.42857143 !important;
      letter-spacing: 4px;
      border-radius: 0;
      font-weight: bold;
    }
    .navbar li a, .navbar .navbar-brand {
      color: #fff !important;
    }
    .navbar-nav li a:hover, .navbar-nav li.active a {
     // color: #6F1EF4 !important;
     color: black !important;
     background-color: #FCFAFF !important;
     font-size: 16px;
   }
   .navbar-default .navbar-toggle {
    border-color: transparent;
    color: #fff !important;
}
            .username{
                  font-size: 25px;
                  width: 80%;
                  padding: 1px 0px 0px 0px;
                  margin: 5px 5px 5px 5px;
                  box-sizing: border-box;
                  border: none;
                  border-bottom: 2px solid #ccc;
            }
            .username:focus{
              outline: 0; 
            }
             .password{
                  font-size: 25px;
                  width: 80%;
                  padding: 1px 0px 0px 0px;
                  margin: 0px 5px 5px 5px;
                  box-sizing: border-box;
                  border: none;
                  border-bottom: 2px solid #ccc;
            }
            .password:focus{
              outline: 0; 
            }
            .submitbutton{
                  margin-left: 20px;
                  margin-bottom: 10px;
                  border-radius: 2px;
                  background-color: #6CEC83;
            }
            .box{
                  margin-top: 3%;
                  border: solid;
                  border-width: 2px;

                  border-color: #292c2f;
                  border-radius: 0px;
                  padding-bottom: 10px;
                  margin-left: auto;
                  margin-right: auto;
            }
            .box:hover {
    box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);
}
            .box1{
              margin-left: auto;
                  margin-right: auto;
              width: 33.3%;
                  border: solid;
                  border-radius: 0px;
                  border-width: 2px;
                  margin-top:  10px;
                  border-color: #292c2f;
                  background-color: white;
            }
            .box1:hover {
    box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);
}
            @media  screen  and (min-width:750px){
              .box1{
                margin-left: auto;
                  margin-right: auto;
              width: 33.3%;
              }
              .box1 span{
                  font-size: 20px;
            }
            .box1 a{
                  font-size: 18px;
            }
            }
             @media  screen  and (max-width:750px){
              .box1{
                width: 100%;
                margin-left: auto;
                margin-right: auto;
              }
              .box1 span{
                  font-size: 20px;
            }
            .box1 a{
                  font-size: 18px;
            }
             }

             form .row:first-child .form-item{border-top:1px solid #fff;
}
.form-item{position:relative;margin-bottom:0px;margin-left:20px;margin-top:10px;margin-right:30px;padding-bottom:10px;border-bottom:2px solid #ccc;
}
.form-item input, .form-item textarea{z-index:1;position:relative;padding-right:0;
  padding-left:0px;border:0;border-radius:0;font-size:1.5em;background:0 0;
  box-shadow:none!important;resize:none;width:100%;}
.form-item input:focus, .form-item textarea:focus{outline:0}
.form-item label{display:block;z-index:0;position:relative;top:2em;
  margin:0;font-size:.85em;line-height:1.764705882em;
  vertical-align:middle;vertical-align:baseline;
  opacity:0;
  -webkit-transition:top .3s ease,opacity .3s ease;transition:top .3s ease,opacity .3s ease;}
.form-item-filled label{top:0;opacity:1;color:#aaa;}
.form-item-focused label{color:#292c2f;}


</style>
         <script>
    $(document).ready(function(){
      $("#navup").click(function(){
        $(".collapse").slideUp("slow");
      });
      $(".navbar .navbar-header").click(function(){
        $(".collapse").slideToggle("slow");
      });
    });
  </script>         

        </head>

        <body>  
          <!-- navbar start -->
          <nav class="navbar navbar-default navbar-fixed-top">
            <div class="container">
              <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>                        
                </button>
                <a class="navbar-brand" href="#myPage">Logo</a>
              </div>
              <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav navbar-right">

                  <li><a href="../index.php">HOME</a></li>
                  <li><a href="signin.php">SIGN IN</a></li>
                  <li><a href="../php/signup.php">SIGN UP</a></li>
                  <li><a href="../php/logout.php">LOG OUT</a></li>
                </ul>
              </div>

            </div>
          </nav>
          <!-- navbar end
           -->
<?php session_start(); 
  //user not found =2 , logged in =1 , logged out =0
if(!isset($_SESSION["session_var"])){
  $_SESSION["session_var"]=0;
}
if($_SESSION["session_var"]==1){
  //means user is signed in 
}
elseif($_SESSION["session_var"]==0){
  echo 'display login form';
  require '../php/connToDB.php';
  $EmailORUsername=$Password="";
  $EmailORUsernameERR=$PasswordERR=$universalERR="";
  $user=$passwordinput=2;
  if($_SERVER["REQUEST_METHOD"]=="POST"){
    if(empty($_POST["EmailORUsername"])){
      $EmailORUsernameERR="Cannot leave empty bruh";
    }
    else{
      $EmailORUsername=$_POST["EmailORUsername"];
      if (!filter_var($EmailORUsername, FILTER_VALIDATE_EMAIL)) {
                //triggered when user inputs username
        $user=1; 
      }
      else{
                //triggered when user enters email
        $user=0;
      }
    }
    if(empty($_POST["Password"])){
      $PasswordERR="Cannot be left empty";
    }
    else{
      $passwordinput=1;
      $Password=$_POST["Password"];
    }
  }
  if($user==1 && $passwordinput==1){
            //make sql statement contaning username and password to check  //if user exists
    $sql=$conn->prepare("SELECT * FROM user_details where username='$EmailORUsername'");
    $sql->execute();
    $sqlResult=$sql->fetch(PDO::FETCH_ASSOC);
    if(!$sqlResult){
      $universalERR="Username Not found";
    }
    else {
      if($Password==$sqlResult["user_password"]){
        $universalERR="Welcome ".$EmailORUsername;
        $_SESSION["username"]=$sqlResult["username"];
        $_SESSION["user_email"]=$sqlResult["user_email"];
        $_SESSION["session_var"]=1;
        $_SESSION["login_message"]="                      WELCOME  ";
        ?><script type="text/javascript">
        window.location = "http://localhost/startup-bvp1.1/index.php";
      </script>  
      <?php
              //todo alter user_session variable and redirect to site page
    }
    else{
      $universalERR="Incorrect Credentials";
    }
  }
}
elseif($user==0 && $passwordinput==1) {
            //makes sql statement contaning email and password to check if //user exists
  $sql=$conn->prepare("SELECT * FROM user_details where user_email='$EmailORUsername'");
  $sql->execute();
  $sqlResult=$sql->fetch(PDO::FETCH_ASSOC);
  if(!$sqlResult){
    $universalERR="Email Not found";
  }
  else {
    if($Password==$sqlResult["user_password"]){
      $universalERR="Welcome ".$EmailORUsername;
      $_SESSION["username"]=$sqlResult["username"];
      $_SESSION["user_email"]=$sqlResult["user_email"];
      $_SESSION["session_var"]=1;
      $_SESSION["login_message"]="                      WELCOME  ";
      ?><script type="text/javascript">
      //todo to change before putting on server
      window.location = "http://localhost/startup-bvp1.1/index.php";
    </script>  
    <?php
              //todo alter user_session variable and redirect to site page
  }
  else{
    $universalERR="Incorrect Credentials";
  }
}
}
echo '
<div class="text-center" style="margin-top: 70px;">
<h2>Sign in to "company"</h2>
</div>    
<div class="row container-fluid " >
  <div class="col-sm-4">
  </div>
  <div class="box col-sm-4" style="background-color: white;"">
    
    <span>'.$universalERR.'</span>
    <form method="post" action="'.htmlspecialchars($_SERVER["PHP_SELF"]).'">
    <div class="form-item">
    <label for="fname">Email</label>
     <input type="text" class="username" name="EmailORUsername" placeholder="Enter Email" value="">'.$EmailORUsernameERR.'
     </div><br>
     <div class="form-item">
     <label for="fname">Password</label>
     <input type="password" class="password" name="Password" placeholder="Enter password" value="">'.$PasswordERR.'
     </div><br><br>
     <input type="submit" class="submitbutton btn btn-success btn-lg" name="Submit">
   </form>
   '.$EmailORUsername. ' ' .$Password .'

 </div>
 <div class="col-sm-4">
 </div>
</div>
<div class="row container-fluid">
  <div class="col-sm-4">
  </div>
  <div class="col-sm-4 box1 text-center" style="float: left;">
    <form method="POST" action="../php/signup.php">
     <span>Click Here</span>
     <a href="http://localhost/startup-bvp1.1/php/signup.php" style="text-decoration: none;">&nbsp;  &nbsp;  New Users</a>
   </form>
 </div>
 <div class="col-sm-4">
 </div>
</div>';
}
else{
  echo 'nothing sleected';
}
?>
   <script src="jquery.counterup.min.js"></script>
  <script>
    $(function() {$("body")
      .on("input propertychange", ".form-item",function(e) {
        $(this).toggleClass("form-item-filled",!! $(e.target).val());})
      .on("focus", ".form-item",function() {
        $(this).addClass("form-item-focused");})
      .on("blur", ".form-item",function() {
        $(this).removeClass("form-item-focused");});
    });

  </script>





        </body>
        </html>