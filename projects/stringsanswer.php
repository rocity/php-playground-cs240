<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
	<title>untitled</title>
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
	<meta name="generator" content="Geany 1.28" />
	<style>
	body {
		text-align: center;
	}
	</style>
</head>

<body>
	<?php
	$fullname = $_GET["yourName"];
	$comma = strpos($fullname,",");
	list($last, $first) = explode(',', $fullname);
	$length = strlen($fullname);
	print "The field length is: $length<br>";
	print "The comma is at: $comma<br>";
    print "First name is: $first <br>";
    print "Last name is: $last <br>";
    print "$first $last";
	?>
</body>

</html>
