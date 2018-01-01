<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
	      content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Your Feedback</title>
</head>
<body>
<?php
	ini_set('display_errors',1);
//  这个人页面从html页面接受数据
//	将会接受：标题、姓名、Email、反映、评论并用$_POST提交
//	为新的变量赋值
	$title = $_POST['title'];
	$name = $_POST['name'];
	$response = $_POST['response'];
	$comments = $_POST['comments'];

	print "<p>Thank you, $title $name,for your comments.</p>
		   <p>You stated that you found this example to be '$response' and add:
		   <br/>$comments</p>";
?>
</body>
</html>