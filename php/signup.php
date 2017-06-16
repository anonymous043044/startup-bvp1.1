<?php session_start();?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <title>SignUp</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" type="image/x-icon" href="hom.ico" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
    body{
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
     color: #85C1E9 !important;
   }
   .navbar-nav li a:hover, .navbar-nav li.active a {
     // color: #6F1EF4 !important;
     color: black !important;
     background-color: #FCFAFF !important;
     font-size: 16px;
   }
   .navbar-default .navbar-toggle {
     border-color: transparent;
     color: #85C1E9 !important;
   }
   .submitbutton{
     margin-top: 20px;
     margin-left: 20px;
     margin-bottom: 10px;
   }
               .username{
                    
                  }
                  .username:focus{
                    outline: 0;
                  }
                  .box{
                    margin-bottom: 4%;
                    border: solid;
                    border-color: #58778A;
                    border-radius: 2px;
                    padding-bottom: 1%;
                    background-color: white;
                    margin-bottom: 100px;
                  }
                  .box:hover {
                    box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);
                  }
                  .submitbutton{
                    background-color:#85C1E9;
                    border-radius: 3px; 
                  }
  
                  @media  screen  and (min-width:750px){
                    .box{
                      margin-top: 10%;
                      width: 40%;
                    }
                  }
                  @media  screen  and (min-width:850px){
                    .box{
                      margin-top: 10%;
                      width: 33.3%;
                    }
                  }
                  @media  screen  and (max-width:750px){
                    .box{
                      margin-top: 20%;
                    }
                  }

  form .row:first-child .form-item{border-top:1px solid #fff;}
.form-item{position:relative;margin-bottom:10px;margin-left:15px;margin-top:10px;margin-right:25px;padding-bottom:10px;border-bottom: 2px solid #ccc;}
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
                <!-- navbar sccript here -->
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
              <body style="background-color: #95C7E8;"> 

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
                 <li><a href="../signup/signin.php">SIGN IN</a></li>
                 <li><a href="signup.php">SIGN UP</a></li>
                 <li><a href="logout.php">LOG OUT</a></li>
               </ul>
             </div>
           </div>
         </nav>
         <!-- navbar ended -->
         <div class="row container-fluid" id="navup">
          <div class="col-sm-4">

          </div>
          <div class="box col-sm-4 slideanim">
           <?php 
           require 'connToDB.php';
           $universal="";
           $usernameERR=$passwordERR=$emailERR=$phoneNoERR="";
           $username=$password=$email=$phoneNo="";
           if($_SERVER["REQUEST_METHOD"]=="POST"){
            if(empty($_POST["username"])){
             $usernameERR="Field Cannot Be Left Empty";
           }
           else{
             $username=$_POST["username"];
           }
           if(empty($_POST["email"])){
             $emailERR="Field Cannot Be Left Empty";
           }
           else{
             if(!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)){
              $emailERR="Invalid email id"; 
            }
            else{
              $email=$_POST["email"];
            }
          }
          if(empty($_POST["phoneNo"])){
           $phoneNoERR="Field Cannot Be Left Empty";
         }
         else{
           if(!is_numeric($_POST["phoneNo"])){
            $phoneNoERR="Invalid Phone Number ";
          }
          else{
            $phoneNo=$_POST["phoneNo"];
          }
        }
        if(empty($_POST["password"])){
         $passwordERR="Field Cannot Be Left Empty";
       }
       else{
         if(strlen($_POST["password"])<=5){
          $passwordERR="Password should be more than 5 characters";
        }
        else{
          $password=$_POST["password"];
        }
      }
      if($usernameERR=="" && $passwordERR=="" && $phoneNoERR=="" && $emailERR==""){
       $sql=$conn->prepare("SELECT * FROM user_details where username='$username'");
       $sql->execute();
       $sqlResult=$sql->fetch(PDO::FETCH_ASSOC);
       if($sqlResult){
        $universal="Username Exists Already ";
      }
      else{
        try{
         $sql=$conn->prepare("INSERT INTO user_details(username,user_email,user_password,user_phone_number,user_session_variable) VALUES (?,?,?,?,?)");
         $sql->execute(array($username,$email,$password,$phoneNo,2));
         $universal="Form submitted successfully check your email for a link to activate your account";
             //sending an email to verify
         $code="this is testing of mail sending from startup-bvp website ";
         $message = "Your Activation Code is ";
         $to=$email;
         $subject="Activation Code For startup-bvp";
         $from = 'vaibhavchellani223@gmail.com';
         $body='Your Activation Code is '.$code;
         $headers = "From:".$from;
         $retval=mail($to,$subject,$body,$headers);
         if( $retval == true ) {
          echo "Message sent successfully...";
          $_SESSION["session_var"]=1;
          $_SESSION["login_message"]="                      WELCOME  ";
          $_SESSION["username"]=$username;
          $_SESSION["user_email"]=$email;
          ?><script type="text/javascript">
          window.location = "http://localhost/startup-bvp1.1/index.php";
        </script>  
        <?php
                //todo add email verification part
      }else {
       echo "Message could not be sent...";
     }
   }
   catch(PDOexception $e){
    $universal="NOT SUCESSFUL";
  }
}
}
}
?>
<?php echo $universal ; ?><br>
<!-- forms to be styled -->
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]) ;?>"> 
   <div class="form-item">
   <label for="fname">Username</label>
 <input type="text" class="username" name="username" placeholder="username" autocomplete="off"><?php echo $usernameERR; ?><br>
 </div>
   <div class="form-item">
   <label for="fname">Email</label>
 <input type="text" class="username" name="email" placeholder="email" autocomplete="off"><?php echo $emailERR;?><br>
 </div>
   <div class="form-item">
   <label for="fname">Phone</label>
 <input type="text" class="username" name="phoneNo" placeholder="Phone Number" autocomplete="off"><?php echo $phoneNoERR;?><br>
 </div>
   <div class="form-item">
   <label for="fname">Registration</label>
 <input type="text" class="username" name="registration" placeholder="Registration Number"><?php echo $passwordERR;?><br>
 </div>
   <div class="form-item">
<label for="fname">Password</label>
 <input type="password" class="username" name="password" placeholder="Password"><?php echo $passwordERR;?><br>
 </div>

   

 <input type="submit" class="submitbutton btn  btn-lg"  name="signup" value="Sign Up">
</form>
<?php  echo $username." ".$password . " ". $email." ". $phoneNo ;?>
</div>
<div class="col-sm-4">

</div>
</div>
<!-- navbar start -->

<!-- navbar ended -->
<script src="jquery.counterup.min.js"></script> 
<script>

    $(window).scroll(function() {
      $(".slideanim").each(function(){
        var pos = $(this).offset().top;

        var winTop = $(window).scrollTop();

        if (pos < winTop + 600) {
          $(this).addClass("slide");
        }
      });
    });
  </script>

  
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