<?php 




		try{
	// always try to include the file with the connection 
	  $dsn="mysql:host=localhost;dbname=kardystudio";
      $connection=new PDO($dsn,"root","");	 
      $connection->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
	  $sql="SELECT * FROM categories";
	  $query=$connection->query($sql);
	 
	  
	  
	
	  
	
	
	
	  
	  
}catch(Exception $e){
	$connection_error=$e->getMessage();
}
	
	




?>





<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	</head>
	<body>
	
	<h1>hello awoe</h1>
	<ul>

	<?php 

	while ($row=$query->fetch(PDO::FETCH_ASSOC)){?>
		<li>
		<?php echo $row["post"] ;?>
		</li>
		
		<?php
	}
	?>
	</ul>

	

<?php
if(isset($_POST["s"])){
	$var =$_POST["s"];
	$select='SELECT post FROM categories WHERE post LIKE "%'.$var.'%"';
	$found=$connection->query($select);
	
	while($row=$found->fetch()){
		echo "<li>";
		echo $row["post"];
		echo "</li>";
		
	}
	

	// the left join is the table on the left and its value vice-versa with the right join table 


}
$var ="hello";
$var2="baby";
$var3="holy";
echo "ksksks{$var}{$var2}{$var3}";
?>

</ul>
<?php

$n="select * from make AS make LEFT JOIN car as car ON car.make_id=make.make_id ";
$q=$connection->query($n);
$results=$q->fetch(PDO::FETCH_ASSOC);
echo $results["make_year"];




?>

<form method="POST" action="">
<input type="search" name="s" >
<input type ="submit" name="submit">
</form>
   <table>
	<?php 

	while ($row=$q->fetch(PDO::FETCH_ASSOC)){?>
	    <tr>
		<th>make type</th>
		<th>make year</th>
		
		</tr>
		
		<tr>
		<td><?php echo $row["make_type"] ;?></td>
		<td><?php echo $row["make_year"] ;?></td>
		
		
		</tr>
		
		<?php
	}
	?>
	</table>
	<a href="index">djdjd</a>

	</body>
	</html>
    

    
   