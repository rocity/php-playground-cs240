
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
	<title>untitled</title>
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
	<meta name="generator" content="Geany 1.28" />
	<style>
.title {
  box-sizing: content-box;
  border: none;
  border-radius: 100px;
  font: normal 72px/1 "Courier New", monospace;
  color: #00ff00;
  text-align: center;
  text-overflow: ellipsis;
  letter-spacing: 8px;
  white-space: pre-line;
  background: rgba(0,0,0,1);
  text-shadow: 0 0 8px rgba(20,255,20,0.7) ;
}
</style>
</head>

<body>
	<h1 class="title"><?php

echo '<pre>'; // just to make it human readable

for ($i = 1; $i <= 100; $i++) {

    // is it a multiple of 3?
    $f = $i % 3 ? '' : 'fizz';

    // is it a multiple of 5?
    $b = $i % 5 ? '' : 'buzz';

    // if the concatenation yields anything, 
    // show the concatenated value otherwise, 
    // just show the iterator
    echo $f . $b ? $f . $b : $i;

    // a delimiter wasn't specified, so I chose new 
    // line to make human readable
    echo PHP_EOL;
}

?></h1>
</body>

</html>
