 <!DOCTYPE html>

<html ng-app="SimpleApp">
<head>
<meta charset="UTF-8">
<link rel="stylesheet" type="text/css" href="hotelcss.css">
<title>The Best Hotels</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>
<script src = "listofhotels.js"></script>

</head>

<body>
	<div id="navigationbar">
		<ul class="linklist">
			<img src="hotelslogo.png" width="78" height="77">
		 	<li class="links"><a href="http://www.thebesthotels.net16.net/contactus.html" >Contact Us</a></li>
		 	<li class="links"><a href="http://www.thebesthotels.net16.net/aroundyou.html" >Around Me</a></li>
		 	<li class="links"><a href="http://www.thebesthotels.net16.net/hotels.html" >Hotels</a></li>
		 	<li class="links"><a href="http://www.thebesthotels.net16.net/home.html" class="Home" >Home</a></li>
				
	 	</ul>
 	</div>

 	<div class="contentcaesar" ng-controller="SimpleController">
 	<h1>Caesars Place</h1>

 	<img src="hotel24.jpg" class="caesarhotel">
 	<p class="hoteltext">t is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).
 

	Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.</p>
	 	

   	<h2 class="commentheader">Comments</h2>
<?php
if($_POST)
{
	$name=$_POST['name'];
	$comment=$_POST['comment'];

	$connect = mysql_connect("a6630130_local","a6630130_root","qwer1234");

	if($connect)
	{
		mysql_select_db("comments",$connect);
		$query="insert into data(Name,Comment) values('$name','$comment') ";
		if(mysql_query($query))
		{
		
		}
		else
		{
			die("Failed:" .mysql_error());
		}
	}
	else
	{
		die("Failed to connect to mysql".mysql_error());
	}
}

$connect = mysql_connect("a6630130_local","a6630130_root","qwer1234");
	if ($connect) 
	{
		mysql_select_db("comments",$connect);
		$query7="select * from data";
		$result = mysql_query($query7);
		while($row = mysql_fetch_array($result))
		{
			?> <p class="name"><?php echo $row['Name'] ."<br> "; ?></p><?php
			?> <p class="comment"><?php echo $row['Comment']; ?></p><?php
		}
	}
	else
	{
		die("Failed to connect to mysql ". mysql_error());
	}
	
?>

<form action="" method="POST">
    	Name<br>
    	<input class="inputcomment" type="text" name="name"><br>
    	Comment<br>
    	<textarea class="textcomment" name="comment" rows="10" cols="40"></textarea><br><br>
    	<input class="buttoncomment"type="submit" value="Post Comment">	
    </form>
</div>


 	<script>
	$(window).scroll(function() {

		if($(window).scrollTop()> 100) 
		{  
	        
	        $("#navigationbar").css({"opacity":"0.4","transition-duration": "2s"});
	        } 
	        else
	         {
	           
	        $("#navigationbar").css({opacity:1});
	        }

		});
 	</script>

 	
</body>

</html>  
