<!DOCTYPE html>
<html>
<head>
	<style type="text/css">
		
#main{
	background-color:#00CED1;
	position: absolute;
	top: 50%;
	left:50%;
	transform: translate(-50%,-50%);
	width:600px;
	padding: 30px;
	box-sizing: border-box;
	border-radius: 10px;
	box-shadow:0 15px 50px rgba(0,0,0,.2);
	
}
.body{
	background-color:"black";
}
#info{
	width:120px;
	height: 140px;
	
	border-radius: 50%;
	float:left;
	shape-outside:circle();
	margin: 60px 30px 30px 0; 
	box-shadow: 0 0 15px black;

}
p{
	margin:25px;
	padding: 10px;
	text-align: justify;
	line-height: 32px;
}
h1{
	margin: 0 0 20px;
	padding: 0;
	font-size: 30px;
}

img {
	   width:120px;
	height: 140px;
	
	border-radius: 50%;
        } 

 .nv ul{
 	float:right;
			list-style-type: none;
			margin-top: 25px;
			margin-right: 100px;
 }
 .nv ul li{
display:inline-block;
 }
 .nv ul li a{
 text-decoration: none;
			padding:5px 10px;
			border:1px solid black;
			border-width: 2px;
			transition: 0.6s ease;
			position: relative;
		    display: inline-block;
		    padding: 12px 36px;
		    margin: 10px 0;
		    text-decoration: none;
		    text-transform: uppercase;
		    font-size: 18px;
		    letter-spacing: 2px;
		    border-radius: 7px;
		    color: black;
		    
    
 }
 .nv ul li a:hover{
 	color: white;
 	background-color: #9dc5c3;
    background-image: linear-gradient(315deg, #9dc5c3 0%, #5e5c5c 74%);
		}

	</style>
	<title>About Me</title>
 
 
</head>
<body>
	<div  class="nv">
	<ul >
			<li class="active"><a  href="index.php" >Home</a></li> </ul></div>
	
			<div id="main">
				<div id="info">
                                   <img src="img/profile.png" class="img">
                                 </div>
				<p><h1>Hii ,Pooja here!</h1>I am a software engineer from Mgm college of engineering and technology
				kamothe.Now working as intern at 'THE SPARKS FOUNDATION'</p>
				
			  </p>

			</div>





</body>
</html>