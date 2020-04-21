  $(document).ready(function(){
     
     $('#fname').focus(function(){
       $('#fname-label').css({"color":"#006699","top":"-10px","left":"0px","font-size":".8em"});
     });
     $('#fname').blur(function(){
      $a = $('#fname').val();
      if($a.length == 0){
       $('#fname-label').css({"color":"lightgrey","top":"10px","left":"10px","font-size":"1em"});
      }
     });
     $('#uname').focus(function(){
       $('#uname-label').css({"color":"#006699","top":"-10px","left":"0px","font-size":".8em"});
     });
     $('#uname').blur(function(){
      $a = $('#uname').val();
      if($a.length == 0){
       $('#uname-label').css({"color":"lightgrey","top":"10px","left":"10px","font-size":"1em"});
      }
     });

     $('#email').focus(function(){
       $('#email-label').css({"color":"#006699","top":"-10px","left":"0px","font-size":".8em"});
     });
     $('#email').blur(function(){
      $a = $('#email').val();
      if($a.length == 0){
       $('#email-label').css({"color":"lightgrey","top":"10px","left":"10px","font-size":"1em"});
      }
     });

     $('#password').focus(function(){
       $('#pass-label').css({"color":"#006699","top":"-10px","left":"0px","font-size":".8em"});
     });
     $('#password').blur(function(){
      $a = $('#password').val();
      if($a.length == 0){
       $('#pass-label').css({"color":"lightgrey","top":"10px","left":"10px","font-size":"1em"});
      }
     });
     $('#repassword').focus(function(){
       $('#repass-label').css({"color":"#006699","top":"-10px","left":"0px","font-size":".8em"});
     });
     $('#repassword').blur(function(){
      $a = $('#repassword').val();
      if($a.length == 0){
       $('#repass-label').css({"color":"lightgrey","top":"10px","left":"10px","font-size":"1em"});
      }
     });

     $('#address').focus(function(){
       $('#address-label').css({"color":"#006699","top":"-10px","left":"0px","font-size":".8em"});
     });
     $('#address').blur(function(){
      $a = $('#address').val();
      if($a.length == 0){
       $('#address-label').css({"color":"lightgrey","top":"10px","left":"10px","font-size":"1em"});
      }
     });

     $('#country').focus(function(){
       $('#country-label').css({"color":"#006699","top":"-10px","left":"0px","font-size":".8em"});
     });
     $('#country').blur(function(){
      $a = $('#country').val();
      if($a.length == 0){
       $('#country-label').css({"color":"lightgrey","top":"10px","left":"10px","font-size":"1em"});
      }
     });

      $('#city').focus(function(){
       $('#city-label').css({"color":"#006699","top":"-10px","left":"0px","font-size":".8em"});
     });
     $('#city').blur(function(){
      $a = $('#city').val();
      if($a.length == 0){
       $('#city-label').css({"color":"lightgrey","top":"10px","left":"10px","font-size":"1em"});
      }
     });

     $('#pincode').focus(function(){
       $('#pincode-label').css({"color":"#006699","top":"-10px","left":"0px","font-size":".8em"});
     });
     $('#pincode').blur(function(){
      $a = $('#pincode').val();
      if($a.length == 0){
       $('#pincode-label').css({"color":"lightgrey","top":"10px","left":"10px","font-size":"1em"});
      }
     });

     $('#contact').focus(function(){
       $('#contact-label').css({"color":"#006699","top":"-10px","left":"0px","font-size":".8em"});
     });
     $('#contact').blur(function(){
      $a = $('#contact').val();
      if($a.length == 0){
       $('#contact-label').css({"color":"lightgrey","top":"10px","left":"10px","font-size":"1em"});
      }
     });

  });