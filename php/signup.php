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

  
<link href="../css/signup.css" rel="stylesheet" type="text/css">

</head>
<body>
  <div class="outer-back">
   <div class="container-fluid main-div">
    <div class="row">
   	  <div class="left-part col-md-5 col-sm-12" >
   	  	<h1>
          Welcome !
   	  	</h1>
   	  	<p>
   	  		Programmer Hub Is A Online Plateform For learning , Working & Hiring For Your Work .
   	  	</p>
        <center><div class="logopart">
          <img src="..\images\logofinal.png" >
        <div class="logoname">Programmers&nbsp;Hub</div></div></center>
   	  </div>
   	  <div class="right-part col-md-7">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-1"></div>
               <div class="col-md-11 form-main">
                <form id="signupform">
                  <h2>Sign Up</h2>
   	               	<p> <xmp>Sign Up Here</xmp> </p>
                  
   	               	<div class=" col-sm-12 col-md-12">
                      <div class="row">

                        <div class="col-md-5 col-sm-10">
                         <input type="text" id="fname" name="sup-fname">
                         <label for="fname" id="fname-label">Full Name</label>
                        </div>

                      <div class="col-md-5 col-sm-10">
                        <input type="text" id="uname" name="sup-lname">
                        <label for="uname" id="uname-label">User id</label>
                      </div>

                       </div>
                     </div>

                      <div class=" col-sm-12 col-md-10">
                        <input type="email" id="email" class="" name="sup-em">
                        <label for="email" id="email-label">Email Id</label>
                     </div>

                     <div class=" col-sm-12 col-md-10">
                      <textarea id="address" class="col-sm-12" name="sup-address"></textarea>
                        <label for="address" id="address-label">address</label>
                     </div>
                     <?php
                        $countryobject = file_get_contents('../json/countries/countries.json');
                        $countrylist = json_decode($countryobject);
                        for ($i=0; $i <246 ; $i++) { 
                          $countries =  $countrylist->countries[$i]->name;
                          
                        }
                       

                       //  foreach($country as $data){
                       //     // print_r($data["name"]);
                       // }
                       ?>
                    <div class="col-sm-12 col-md-12">
                      <div class="row">
                       <div class="col-sm-12 col-md-5">
                        <input type="text" id="country" class="" name="sup-country">
                       <label for="country" id="country-label">Country</label>
                      </div>

                      <div class="col-sm-12 col-md-5">
                        <input type="text" id="city" class="">
                       <label for="city" id="city-label">City</label>
                      </div>
                     </div> 
                    </div>

                    <div class="col-sm-12 col-md-12">
                      <div class="row">
                       <div class="col-sm-12 col-md-5">
                        <input type="number" id="pincode" class="" name="sup-pin">
                       <label for="pincode" id="pincode-label">Pin Code</label>
                      </div>
                      <div class="col-sm-12 col-md-5">
                        <input type="number" id="contact" class="">
                       <label for="contact" id="contact-label">Contact Number</label>
                      </div>
                     </div> 
                    </div>

                    <div class="col-sm-12 col-md-12">
                      <div class="row">
                       <div class="col-sm-12 col-md-5">
                        <input type="password" id="password" class="" name="sup-ps">
                       <label for="password" id="pass-label">Password</label>
                      </div>
                      <div class="col-sm-12 col-md-5">
                        <input type="password" id="repassword" class="">
                       <label for="repassword" id="repass-label">Retype Password</label>
                       <span id="pass-verify" style="color: #fff">status</span>
                      </div>

                     </div> 
                    </div>
                
                      
                    <button class="btn btn-primary btn-lg" id="signup"> Submit </button>
                    <p >Already Have an Account <a href="../index.php"> Login Here</a></p>
                  </form>
              </div>
            </div>
         </div>
   	  </div>
    </div>
 </div>
</div>
</body>
<script src="../js/signup.js"></script>
<script type="text/javascript">

  $(document).ready(function(){

    $("#repassword,#password").keyup(function(){
     $pass = $('#password').val();
     $repass = $('#repassword').val();
     if($pass == $repass){
        $("#pass-verify").html("<font color='green'>Password Matched </font>");
     }
     else{
        $("#pass-verify").html("hiiaaa");
     }
    });
  });
</script>
</html>