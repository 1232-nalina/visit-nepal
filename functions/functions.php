<?php
$server="localhost";
	$user="root";
	$pass="";
	$dbname="book_db";
	$con=mysqli_connect($server,$user,$pass) or die(mysqli_error());
	mysqli_select_db($con,$dbname) or die(mysqli_error());

function display_home()
{
	global $con;
	$sql="select *from home_tbl";
	$qry=mysqli_query($con,$sql) or die(mysqli_error());
	$i=0;
	while($row=mysqli_fetch_array($qry))
	{
		$id=$row['id'];
		$title=$row['title'];
		$img=$row['image'];
		$desc=$row['description'];
		
		echo "<div class='image'>
				<img src='images/$img'>
	 			</div>	
	 				<div class='content'>
						<h3>$title</h3>
						<p>$desc</p>
						
						
	 			</div>";	
			$i++;
		//<a href='book.php' class='btn'>book now</a>

}
}
function display_service()
{
	global $con;
	$servicesql="select *from service_tbl";
	$serviceqry=mysqli_query($con,$servicesql) or die(mysqli_error());
	$i=0;
	while($servicerow=mysqli_fetch_array($serviceqry))
	{
		$serviceid=$servicerow['id'];
		$servicetitle=$servicerow['title'];
		$serviceimg=$servicerow['image'];
		$servicedesc=$servicerow['description'];
		
		echo "<div class='image'>
				<img src='images/$serviceimg'>
	 			</div>	
	 				<div class='content'>
						<h3>$servicetitle</h3>
						<p>$servicedesc</p>
						
						
	 			</div>";
				 //<a href='book.php' class='btn'>book now</a>
			$i++;
			
	}
}

function display_package()
{
	global $con;
	$sql="select *from package_tbl";
	$qry=mysqli_query($con,$sql) or die(mysqli_error());
	$i=0;
	while($row=mysqli_fetch_array($qry))
	{
		$id=$row['id'];
		$title=$row['title'];
		$img=$row['image'];
		$desc=$row['description'];
		$price=$row['price'];
		
		echo "<div class='image'>
				<img src='images/$img'>
	 			</div>	
	 				<div class='content'>
						<h3>$title</h3>
						<p>$desc</p>
						<a href='book.php' class='btn'>book now</a>
						
						
						
						<a class='btn'>$price</a>
						
						
	 			</div>";	
			$i++;
		

}
}

function display_packagee()
{
	global $con;
	$sql="select *from packagee_tbl";
	$qry=mysqli_query($con,$sql) or die(mysqli_error());
	$i=0;
	while($row=mysqli_fetch_array($qry))
	{
		$id=$row['id'];
		$title=$row['title'];
		$img=$row['image'];
		$desc=$row['description'];
		$price=$row['price'];
		
		echo "<div class='image'>
				<img src='images/$img'>
	 			</div>	
	 				<div class='content'>
						<h3>$title</h3>
						<p>$desc</p>
						<a href='book.php' class='btn'>book now</a>
						
						
						<a class='btn'>$price</a>
						
						
	 			</div>";	
			$i++;
		

}
}

function getUsersdata($id)
{
	$array = array();
	$qry=mysql_query("select *from `book_form` WHERE `id`=".$id);
	while($row = mysqli_fetch_assoc($qry) )
	{
		$array['id'] = $row['id'];
		$array['date'] = $row['date'];
		$array['package'] = $row['package'];

	}
return $array;
}
?>