<?php
        if(!isset($_COOKIE['key1'])){
            header('Location:html/login.html');
           }else{
            include 'php/database.php';
            $cuki=$_COOKIE['key1'];
            $sql="select * from user where phno='".$cuki."'";
            $result=mysqli_query($db,$sql);
            $result=mysqli_fetch_assoc($result);
        }
?>
<!DOCTYPE html>
<html>
<head>
	<title>loggedIn@PH</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<link rel="stylesheet" type="text/css" href="css/middlepage.css">
                        		<!-- Angular -->
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular-route.js"></script>

                                   <!-- morris chart -->

<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>
                               <!-- fonts -->
<link href="https://fonts.googleapis.com/css2?family=Baloo+Bhaina+2:wght@500&display=swap" rel="stylesheet">

</head>
<body >
	

     <div class="container-fluid" >
     	
     	<div class="row">

	        <div class="leftpart" >
	        	<div class="logo">
	        		PROGRAMMERS HUB
	        	</div>
	        	<div class="logo-small logo">
	        		PH
	        	</div>
     			<div class="profile">
     			 
     			  <div class="dropdown">
     			   	
                         <div class="dropdown">
                         	<img src="images/1.jpg" height="80px" width="80px" style="border-radius: 50px;position: relative;z-index: 2;border:4px solid grey; ">
                       <button type="button" class="btnn btn dropdown-toggle" data-toggle="dropdown">
                       	<?php echo $result['name'];?>
                       </button>
                       <div class="dropdown-menu">
                         <a class="dropdown-item" href="#">Profile</a>
                         <a class="dropdown-item" href="#">Rank</a>
                         <a class="dropdown-item" href="#">Settings</a>
                         <button  class="btn btn-danger ml-3" onclick="logout()">logout</button>
                         
                       </div>

                     </div>
                 </div>
     		</div> 
     		
             <div class="menu-items" >

                <div>
             	  <label class="menu-side-icn dashboard-side"></label>
                    	<div class="dashboard menu-icons">
                 		<span><i class="fa fa-home menu-icon"></i></span>
                 		<label class="fuck-off">&nbsp;Dashboard</label>
                 	</div>
                 </div>

                 <div>
                 	<label class="menu-side-icn projects-side"></label>
                 		<div class="projects menu-icons">
                 		<span><i class="fa fa-tasks menu-icon"></i></span>
                 		<label class="fuck-off">&nbsp;Projects</label>
                 	</div>
                  </div>

                  <div>
                 	<label class="menu-side-icn connections-side"></label>
                 	<div class="connections menu-icons">
                 		<span><i class="fa fa-television menu-icon"></i></span>
                 		<label class="fuck-off">&nbsp;Connections</label>
                 	</div>
                   </div> 

                   <div>
                 	<label class="menu-side-icn qa-side"></label>
                 	<a href="#/qa" class="link-unstyled">
                 	<div class="qa menu-icons">
                 		<span><i class="fa fa-question menu-icon"></i></span>
                 		<label class="fuck-off">&nbsp;Q/A</label>
                 	</div>
                 </a>
                 </div>

                 <div>
                 	<a href="#/about" class="link-unstyled">
                 	<label class="menu-side-icn About-side"></label>
                 	<div class="About menu-icons">
                 		<span><i class="fa fa-user menu-icon"></i></span>
                 		<label class="fuck-off">&nbsp;About</label>
                 	</div>
                 </a>
                 </div>

               </div>
                 <div class="log_out">
                 		<label><i class="fa fa-sign-out"></i></label>
                 </div>	
     	</div>

                             <!-- Right Part -->
     		<div class="rpmain">
     			
	          <div class="right-part">
	          	<div class="head-part-main">
	          	<div class="head-part">
	          	  &nbsp;&nbsp;&nbsp;<i class="fa fa-bars icn cp"></i>
     			   <i class="fa fa-bars icn1 cp"></i>

     			          
	                <div >
	                	<div class="search-bar">
	                	<input type="text" name="search-items" placeholder="search...." spellcheck="false" class="search-items">
	                	<span><i class="fa fa-search srhicn"></i></span>
	                	</div>
	                	<span class="right-head">
	                		<i class="fa fa-bell-o notification cp"></i><hr class="vl">
	                		<i class="fa fa-cog setting cp"></i>
	                	</span>
	                </div>
	           
	                </div>
	            </div>
	                 <div class="msg-container">
	                	 <span class="head-message">
	                		<i class="fa fa-comment-o msg-icn" style="font-size: 30px"></i>
	                	 </span>
	                	 <div class="msg-area">
	                	 	<div class="top-msgbar">
	                	 		<span class="msg-cancel">x</span>
	                	 		<center><label>My Chats</label></center> 
	                	 		<center><i class="fa fa-search chat-srh-icn"></i><input type="search" name="" class="chat-srh" placeholder="Search ..."></center> 
	                	 	</div>
	                	 	<div class="msg-body">
	                	 	
                                 <div class="msg-users">

                                 	<img src="images/login-page-bg.jpg" height="40px" width="40px">
                                 	<label>asas</label>
                                 	<div class="msg-lastseen">5 min ago</div>
                                 </div>
	                	 	</div>

	                	 </div>
	                	</div>

	                       <!-- Main Containt -->
                        <iframe src="php/main.php" height="90%" width="100%" id="main-content"></iframe>
	            
	          </div>
	        </div>
	     </div>
     </div>
     <div class="vv">
     	
     </div>

<script type="text/javascript">
	function logout(){
            document.cookie = "key1=;expires=Thu, 01 Jan 1970 00:00:00 GMT; path=/;";
			location.reload();
	}
</script>
</body>
<script type="text/javascript">
	$(document).ready(function(){
      $('.icn').click(function(){
      	 if($(window).width()>400){
		        $('.icn1').css({"display":"block","top":"-20px","left":"10px"});
			    $('.icn').css("display","none");
			    $('.btnn').css("display","none");
			    $('.leftpart').css({"width":"90px","z-index":"100"});
		  	    $('.rpmain').css("width","calc(100% - 90px)");
		  	    $('.head-part').css("width","calc(100% - 90px)");
		  	    $('.fuck-off').css({"display":"none"});
			    $('.menu-icon').css("font-size","2em");
			    $('.logo').css("display","none");
			     $('.logo-small').css("display","block");
		  }
		  else{
		  	$('.icn1').css({"display":"block","top":"-20px","left":"270px"});
			    $('.icn').css("display","none");
			    $('.btnn').css("display","block");
			    $('.leftpart').css({"width":"260px","z-index":"100"});
		  	    $('.rpmain').css("width","100%");
		  	    $('.head-part').css("width","calc(100% - 280px)");
		  	    $('.fuck-off').css({"display":"inline"});
			    $('.menu-icon').css("font-size","1em");
			    $('.logo').css("display","block");
			     $('.logo-small').css("display","none");
		  }
		});

		$('.icn1').click(function(){
			  if($(window).width() < 400){
		        $('.icn').css({"display":"block","top":"0","left":"10px"});
			    $('.icn1').css("display","none");
			    $('.btnn').css("display","block");
			    $('.leftpart').css({"width":"0px","z-index":"0"});
			    $('.rpmain').css("width","100%");
			    $('.head-part').css("width","calc(100% - 60px)");
			    $('.fuck-off').css({"display":"inline"});
			    $('.menu-icon').css("font-size","1em");
			    $('.logo').css("display","block");
			    $('.logo-small').css("display","none");
              }else{
		        $('.icn').css({"display":"block","top":"0","left":"10px"});
			    $('.icn1').css("display","none");
			    $('.btnn').css("display","block");
			    $('.leftpart').css("width","280px");
			    $('.rpmain').css("width","calc(100% - 280px)");
			    $('.head-part').css("width","calc(100% - 280px)");
			    $('.fuck-off').css("display","inline");
			    $('.menu-icon').css("font-size","1em");
			    $('.logo').css("display","block");
			    $('.logo-small').css("display","none");
              }
		});

		$('.head-message').click(function(){
			$('.msg-container').css("margin-right","240px");
		});
		$('.msg-cancel').click(function(){
			$('.msg-container').css("margin-right","0px");
		});
		$('menu-icon').click(function(){
			$('.fuck-off').css("display","block");
		});

                     /*    sidebar    */
         $('.dashboard').click(function(){
			$('.projects-side').hide();
			$('.projects').css('background-color','');
			$('.dashboard-side').show();
			$('.dashboard').css('background-color','rgba(255, 255, 255,.4)');
			$('.connections-side').hide();
		    $('.connections').css('background','none');
		    $('.qa-side').hide();
		    $('.qa').css('background','none');
		    $('.About-side').hide();
		    $('.About').css('background','none');
        });
// 
		$('.projects').click(function(){
			$('.projects-side').show();
			$('.projects').css('background-color','rgba(255, 255, 255,.4)');
			$('.dashboard-side').hide();
			$('.dashboard').css('background','none');
			$('.connections-side').hide();
		    $('.connections').css('background','none');
		    $('.qa-side').hide();
		    $('.qa').css('background','none');
		    $('.About-side').hide();
		    $('.About').css('background','none');
        });
       $('.connections').click(function(){
			$('.projects-side').hide();
			$('.projects').css('background','none');
			$('.dashboard-side').hide();
			$('.dashboard').css('background','none');
			$('.connections-side').show();
		    $('.connections').css('background-color','rgba(255, 255, 255,.4)');
		    $('.qa-side').hide();
		    $('.qa').css('background','none');
		    $('.About-side').hide();
		    $('.About').css('background','none');
        });
       	$('.qa').click(function(){
			$('.projects-side').hide();
			$('.projects').css('background','none');
			$('.dashboard-side').hide();
			$('.dashboard').css('background','none');
			$('.connections-side').hide();
		    $('.connections').css('background','none');
		    $('.qa-side').show();
		    $('.qa').css('background-color','rgba(255, 255, 255,.4)');
		    $('.About-side').hide();
		    $('.About').css('background','none');
        });
        $('.About').click(function(){
			$('.projects-side').hide();
			$('.projects').css('background','none');
			$('.dashboard-side').hide();
			$('.dashboard').css('background','none');
			$('.connections-side').hide();
		    $('.connections').css('background','none');
		    $('.qa-side').hide();
		    $('.qa').css('background','none');
		    $('.About-side').show();
		    $('.About').css('background-color','rgba(255, 255, 255,.4)');
        });
	});
</script>
                                    <!-- sidebar -->


<script>
	$('#sidemenu div').click(function(){
			$('#sidemenu div').css('color','#000');
			$(this).css('color','#00BCD4');
			document.myfrm.location.replace("html/"+($('span',this).html()).replace(/\s/g,"")+".html");
		});
	$('.dashboard').click(function(){
         $('#main-content').prop('src', "php/main.php");
	});
	$('.projects').click(function(){
         $('#main-content').prop('src',"php/projects.php");
	});
	$('.connections').click(function(){
		$('#main-content').prop('src',"php/connections.php");
	});
</script>
</html>
