<html>
<head>
	<title>spider</title>
</head>

<body>
<?php
if (isset($_POST['url']) && !empty($_POST['url'])) {
	$myurl = $_POST['url'];
    $file_read = fopen($myurl,'r');
    $thedata = fread($file_read, filesize($myurl));
    fclose($file_read);
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