<html>
<head>
	<title>spider</title>
</head>

<body>
<?php
if (isset($_POST['url']) && !empty($_POST['url'])) {
	$myUrl = 'http://www.mazen.ws';
	$text = $_POST['url'];
    $myfile = "text.txt";
    $file_read = fopen($myfile,'r');
    $thedata = fread($file_read, filesize($myfile));
    fclose($file_read);
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