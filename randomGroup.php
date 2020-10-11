<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	  <link
	    rel="stylesheet" href="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/css/bootstrap.min.css"/>
	  <script src="https://cdn.staticfile.org/jquery/2.1.1/jquery.min.js"></script>
	  <script src="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<title>分组小程序</title>
</head>
	<body>
		<h1 align="center">分组小程序</h1>
		<center>
	<div style="width:200px" align="center">
		<form id="form1" action="" method="post">
			<div>
			<input type="text" name="min" class= "form-control" placeholder="请输入起始学号 如：1">
			</div>
		</br>
			<div>
			<input type="text" name="max" class= "form-control" placeholder="请输入终止学号 如：33">
			</div>
		</br>
			<div>
			<input type="text" name="group" class= "form-control" placeholder="请输入每组人数 如：8">
			</div>
		</br>
			<input type="submit" name="submit" class= "btn btn-success btn-block" value="提交">

		</form>	
	</div>
	</center>
	<?php 
		function randomGroup($min,$max,$group){
			$arr=array();
			while(count($arr) < ($max-$min+1))	//arr数组和学号区间中的数量相同时跳出循环
			{
			 $arr[]=rand($min,$max);	//随机生成min~max区间的数字并放入数组
			 $arr=array_unique(array)($arr); 	//数组去重 筛出重复的随机数 直到无重复
			}
			echo "<table class='table table-bordered table-hover table-condensed' align='center'>";
			$k = 0;
			//两种情况：即当多出一组人不够时 保持组数的准确性
			//外循环控制组数
			for ($j=1; $j <= ((($max-$min+1) % $group == 0) ? (($max-$min+1) / $group) : (($max-$min+1) / $group + 1)); $j++) { 
				echo "<tr>";
				echo "<td>第".$j."组</td> ";
				//内循环控制
				for ($i=1; $i <= $group ; $i++){
				$arr1=array(); //创建新数组以容纳随机数
				$arr1[$i]=$arr[$k];//取出随机数遍历
				echo "<td>".$arr1[$i]."</td>";
				$k++;
				}
				echo "</tr>";
				
			}
			echo "</table>";
			echo "<hr style='FILTER: alpha(opacity=100,finishopacity=0,style=3)' width='80%' color=#000000 SIZE=3>";
		}
		// randomGroup(1,33,8);
		// randomGroup(1,24,8);
		$max = $_POST['max'];//传输终值
		$min = $_POST['min'];//传输起始值
		$group = $_POST['group'];//传输没组人数
		if (isset($_POST['submit'])) {//判断按钮是否被按下
			// !empty($max) && !empty($min) && !empty($group)
			if(is_int($max) && is_int($min) && is_int($group)){//判断输入类型是否准确
				if($max<$min){//判断是否输入了非法值
					echo "<h1 align = 'center'>初始学号不能大于终止学号！请重新输入！</h1>";
				}else{
					randomGroup($min,$max,$group);//执行函数
				}
			}else{
				echo "<h1 align = 'center'>请输入正确的数值！</h1>";
			}
		}else{
			echo "<h1 align = 'center'>请在按照提示在输入框内输入数值！</h1>";
		}

	?>
</body>
</html>
