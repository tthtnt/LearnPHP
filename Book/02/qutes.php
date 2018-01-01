<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
	      content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Quotes</title>
</head>
<body>
<?php
//	在这里可以使用单引号，又可以使用双引号。
	$first_name = 'Larry';
	$last_name = "Ullman";

//	这里单引号和双引号的作用不同
	$name1 = '$first_name $last_name';
	$name2 = "$first_name $last_name";

//	这里单引号和双引号的作用不同
	print "<h1>Double Quotes</h1><p>name1 is $name1 <br/>
		   name2 is $name2</p>";
	print '<h1>Double Quotes</h1><p>name1 is $name1 <br/>
		   name2 is $name2</p>';
//	单引号指明需要打印的是变量的名称
//  双引号指明需要打印的是变量的值
//  创建新行(\n)、回车(\r)和制表符(\t)的快捷方式都必须在双引号内使用已达到预期的效果
?>
</body>
</html>
