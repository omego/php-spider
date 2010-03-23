<html>
<head>
	<title>spider</title>
</head>

<body>
<?php
if (isset($_POST['url']) && !empty($_POST['url'])) {
	$myurl = $_POST['url'];
	$thedata = file_get_contents($myurl);
	echo "<h2>URL: $myurl</h2><hr />";
    echo $thedata;
}
?>
<h4>Enter URL</h4>
<form action="mySpider.php" method="post"> 
<input name="url" type="text" /> 
<input type="submit" />
</form>

</body>
</html>