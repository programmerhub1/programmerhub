<!DOCTYPE html>
<html>
<head>
	<title>Login@PH</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

  
                               <!-- font -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Kanit:ital@1&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@500&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
                     <!-- swal -->
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
                  <!--  css -->
<link href="css/login.css" rel="stylesheet" type="text/css">

</head>
<body>
  <div class="outer-back">
   <div class="container-fluid main-div">
    <div class="row">
   	  <div class="left-part col-md-5 col-sm-12" >
   	  	<center><h1>
   	  		Welcome&nbsp;Back&nbsp;!
   	  	</h1></center>
   	  	<p>
   	  		Programmer Hub Is A Online Plateform For learning , Working & Hiring For Your Work .
   	  	</p>
        <center><div class="logopart">
          <img src="images/logofinal.png">
        <div class="logoname">Programmers Hub</div>
        </div></center>
   	  </div>
   	  <div class="right-part col-md-7" style="">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-1"></div>
               <div class="col-md-11 form-main">
                  <h2>Login</h2>
   	               	<p> <xmp>login to start </></xmp> </p>

               <form id="loginform">
                      <div class=" col-sm-12 col-md-11">
                        <i class="fa fa-user usr-icn"></i>
                        <input type="text" id="email" class="" name="em" autocomplete="off" value="<?php if(isset($_COOKIE["user_email"])) {echo $_COOKIE["user_email"]; } else{ echo "";} ?>">
                        <label for="email" id="email-label">Enrollment&nbsp;/&nbsp;Phno.&nbsp;/&nbsp;Email&nbsp;</label>
                     </div>

                <br/>

                     <div class="col-sm-12 col-md-11">
                      <i class="fa fa-lock usr-lock"></i>
                        <input type="password" id="password" class="" name="ps" value="<?php echo (isset($_COOKIE["user_pass"]) ?  $_COOKIE["user_pass"] :"" )?>">
                       <label for="password" id="pass-label">Password</label>
                    </div>
                      <a href="html/forgetpass.php" id="fp">Forget Password ? </a><br>
                        <div class="form-check">
                              <!-- <input type="checkbox" class="form-check-input" id="rememberme">
                              <label class="form-check-label"></label> -->
                              <label class="container" class="form-check-label">Remember Me
                                <input type="checkbox" class="form-check-input" id="rememberme">
                                <span class="checkmark"></span>
                              </label>
                         </div>
                    <input type="submit" class="btn btn-primary btn-lg" id="login" value="Login"> 
                  </form>
                    <p >Don't Have an Account <a href="html/signup.php"> Sign Up Here</a></p>
              </div>
            </div>
         </div>
   	  </div>
    </div>
 </div>
</div>
</body>
<script>
  $(document).ready(function(){

      if(email.value.length > 0){
        $('#email-label').css({"color":"#fff","top":"-10px","left":"0px","font-size":".8em"});
        $('#pass-label').css({"color":"#fff","top":"-10px","left":"0px","font-size":".8em"});

      }
       $('#email').focus(function(){
       $('#email-label').css({"color":"#006699","top":"-10px","left":"0px","font-size":".8em"});
       $('.usr-icn').css({"color":"#006699"});
     });
     $('#email').blur(function(){
      $a = $('#email').val();
      if($a.length == 0){
       $('#email-label').css({"color":"lightgrey","top":"10px","left":"10px","font-size":"1em"});
       $('.usr-icn').css({"color":"lightgrey"});
      }
     });

     $('#password').focus(function(){
       $('#pass-label').css({"color":"#006699","top":"-10px","left":"0px","font-size":".8em"});
       $('.usr-lock').css({"color":"#006699"});
     });
     $('#password').blur(function(){
      $a = $('#password').val();
      if($a.length == 0){
       $('#pass-label').css({"color":"lightgrey","top":"10px","left":"10px","font-size":"1em"});
       $('.usr-lock').css({"color":"lightgrey"});
      }
     });
  });
</script>
</html>