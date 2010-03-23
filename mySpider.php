<html>
<head>
	<title>spider</title>
</head>

<body>
<?php
if (isset($_POST['url']) && !empty($_POST['url'])) {
	$myUrl = "http://www.mazen.ws";
	$text = $_POST['url'];
    echo $text;
}

?>
<h4>Enter URL</h4>
<form action="mySpider.php" method="post"> 
<input name="url" type="text" /> 
<input type="submit" />
</form>

</body>
</html>