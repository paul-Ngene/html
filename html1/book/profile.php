<html> 

	<head>
		
		<title>Mybook | profile</title>
	</head>
	<style>
	#bluebar{
			height: 50px;
			background-color:#405d9b;
			color: #d9dfdb;
			}
#searchbox{
	width:400px;
	height:20px;
	border-radius:5px;
	border:none;
	padding:4px;
	font-size:14px;
	background-image: url(search.png);
	background-repeat:no-repeat;
	background-position:right;
	}
#profile_pic{
	width:150px;
	margin-top:-200px;
	border-radius:50%;
	border:solid 2px white;
	
	}
#menue_buttons{
	width:100px;
	background-color: none;
	margin:2px;
	
	
	}
#friends_img{
	width:45px;
	float:left;
	margin:8px;
	}
#friends_bar{
	background-color:white;
	min-height:400px;
	margin-top:20px;
	color:#aaa;
	padding:8px;
	padding-right:19px;
	}		
#friends{
	clear:both;
	font-size:12px;
	font-weight:bold;
	color:#405d9b;
	}
textarea{
	width:100%;
	border:none;
	font-family:tahoma;
	font-size:14;
	height:60px;
	}	
#post_btn{
	float:right;
	background-color:blue;
	border:none;
	color:white;
	padding:4px;
	font-size:14px;
	border-radius:2px;
	width:50px;
	}		
#post_bar{
	margin-top:20px;
	background-color:white;
	padding:10px;
	padding-top:20px;
	}	
#post{
	padding:4px;
	font-size:13px;
	display:flex;
	margin-bottom:20px;

	}
	</style>
	<body style="font-family:tahoma;background-color:#d0d8d4;">
		<!--top bar-->
		<div id="bluebar">
		<div style="width:800px;margin:auto;font-size:30px;">
			Mybook &nbsp &nbsp
			<input id="searchbox" type="text" placeholder="search for people">
			<img src="selfie.jpg" style="width:50px;float:right;">
			</div>
		</div>
		<!--cover area-->
		<div style="width:800px; margin:auto; min-height:400px;">
			<div style="background-color:white; text-align:center;color:#405d9b;">
				<img src="mountain.jpg" style="width:100%;">
				<img src="selfie.jpg" id="profile_pic">
				<br>
				<div  style="font-size:20px;">	Mary Banda</div>
				<br>
				 <div style="display: flex;align-items: center;justify-content:center;">
					<div id="menue_buttons">Timeline</div> 
					<div id="menue_buttons">About</div>  <div id="menue_buttons">Friends</div> 
					 <div id="menue_buttons">Photos</div>  <div id="menue_buttons" >Settings</div> 
				 </div>
		  </div>
		  <!--Below cover area-->
			<div style ="display:flex;">
				
				<!--friends area-->
				<div style ="min-height:400px; flex:1;">
					
					<div id="friends_bar">
						
						Friends<br>
						
						<div id="friends">
							<img id="friends_img"src="user1.jpg"><br>
							erty user
						</div>
						
						<div id="friends">
							<img id="friends_img"src="user2.jpg"><br>
							ert user
						</div>
						
						<div id="friends">
							<img id="friends_img"src="user3.jpg"><br>
							wertg user
						</div>
						
						<div id="friends">
							<img id="friends_img"src="user4.jpg"><br>
							ewrtr user
						</div>
						
						
					
					</div>
					
					
				</div>
				
				<!--post area-->
				<div style="min-height:400px; flex:2.5; padding:20px; padding-right:0px;">
					<div style="border:solid thin #aaa; padding:10px;background-color:white;">
						<textarea placeholder="What's on your mind?"></textarea>
						<input type="submit" id="post_btn"value="post">
						<br>
						<br>
					</div>
							<!--post area-->
							<div id="post_bar">
								<div id="post">
									<div>
									
										<img src="user1.jpg" style="width:75px; 	margin-right: 4px;">
									</div>
									<div>
										<div style ="font-weight:bold; color: 405d9b">First Guy</div>
									ryehaaaaaaaaaahrarahhhhhh<br>hhhhhhhhhhhhhhhhhh<br>hhhhhhhhhhhhhhhhhhhhhhhhhrahraerahaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa<br>aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa<br>
									<br>
									<a href="">Like </a>. <a href="">Comment </a>. <span style="color:#999;">Date</span>
									</div>
								
								</div>
								
								
								
										<div id="post">
									<div>
									
										<img src="user2.jpg" style="width:75px; 	margin-right: 4px;">
									</div>
									<div>
										<div style ="font-weight:bold; color: 405d9b">fgh Guy</div>
									ryehaaaaaaaaaahrarahhhhhh<br>hhhhhhhhhhhhhhhhhh<br>hhhhhhhhhhhhhhhhhhhhhhhhhrahraerahaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa<br>aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa<br>
									<br>
									<a href="">Like </a>. <a href="">Comment </a>. <span style="color:#999;">Date</span>
									</div>
								
								</div>
								
								
								
										<div id="post">
									<div>
									
										<img src="user3.jpg" style="width:75px; 	margin-right: 4px;">
									</div>
									<div>
										<div style ="font-weight:bold; color: 405d9b">gresfdwe Guy</div>
									ryehaaaaaaaaaahrarahhhhhh<br>hhhhhhhhhhhhhhhhhh<br>hhhhhhhhhhhhhhhhhhhhhhhhhrahraerahaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa<br>aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa<br>
									<br>
									<a href="">Like </a>. <a href="">Comment </a>. <span style="color:#999;">Date</span>
									</div>
								
								</div>
								
								
								
										<div id="post">
									<div>
									
										<img src="user4.jpg" style="width:75px; 	margin-right: 4px;">
									</div>
									<div>
										<div style ="font-weight:bold; color: 405d9b">wetgrfvdd Guy</div>
									ryehaaaaaaaaaahrarahhhhhh<br>hhhhhhhhhhhhhhhhhh<br>hhhhhhhhhhhhhhhhhhhhhhhhhrahraerahaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa<br>aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa<br>
									<br>
									<a href="">Like </a>. <a href="">Comment </a>. <span style="color:#999;">Date</span>
									</div>
								
								</div>
								
								
								
								
								
								
								
							</div>
							
							</div>
				</div>
		  </div>
		</div>
	</body>
	</html>
















