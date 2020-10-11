<!DOCTYPE html>
<html>
<head>
	  <link
	    rel="stylesheet"
	    href="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/css/bootstrap.min.css"
	  />
	  <script src="https://cdn.staticfile.org/jquery/2.1.1/jquery.min.js"></script>
	  <script src="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<title>11</title>
</head>
<body>
<!-- 	<table border="1">
	<tr> -->
	<?php
	// $a = '123';
	// echo $a;
	
	// for($i=1; $i<=33; $i++){ 
	// 	$array = array('code' => $i, );
	// 	// echo "学号：".$i."</br>";
	// 	//echo $array['code']."</br>";
		
	// 	echo (rand(1,33))."<br>";

	// }
		$arr=array();
		while(count($arr)<33)
		{
		 $arr[]=rand(1,33);
		 $arr=array_unique($arr);
		}
		//echo implode(" ",$arr);
		
		echo "<table class='table table-bordered table-hover table-condensed' align='center' >";
		echo "<tr>";
		echo "<td>第一组：</td>";
		for ($i=0; $i <=7 ; $i++){
			$arr1=array(); 
			$arr1[$i]=$arr[$i];
		
			echo "<td>".$arr1[$i]."</td>";
		}
		echo "</tr>";
		// echo "</table>";
		
		// echo "<table border=1>";
		echo "<tr>";
		echo "<td>第二组：</td>";
		for ($i=8; $i <=15 ; $i++){
			$arr1=array(); 
			$arr1[$i]=$arr[$i];

			echo "<td>".$arr1[$i]."</td>";
		}
		echo "</tr>";
		// echo "</table>";
		
		// echo "<table border=1>";
		echo "<tr>";
		echo "<td>第三组：</td>";
		for ($i=16; $i <=23; $i++){
			$arr1=array(); 
			$arr1[$i]=$arr[$i];

			echo "<td>".$arr1[$i]."</td>";

		}
		echo "</tr>";
		// echo "</table>";
		
		// echo "<table border=1>";
		echo "<tr>";
		echo "<td>第四组：</td>";
		for ($i=24; $i <= 31; $i++){
			$arr1=array(); 
			$arr1[$i]=$arr[$i];
			echo "<td>".$arr1[$i]."</td>";
		}
		echo "</tr>";
		echo "<tr>";
		echo "<td>第五组：</td>";
		$arr1[32] = $arr[32];
		echo "<td>".$arr1[32]."</td>";
		echo "</tr>";
?>

</table>
</body>
</html>