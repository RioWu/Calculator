<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>Calculator</title>
</head>

<body>
<?php
$first=$_POST["first"];
$a=$_POST["a"];
$second=$_POST["second"];
if($v=="+")
{echo"���Ϊ".($first+$second);
elseif($v=="-")
{echo"���Ϊ".($first-$second);
elseif($v=="*")
{echo"���Ϊ".($first*$second);
elseif($v=="/")
{if($second==)
{echo"��������Ϊ0";
else{
echo"���Ϊ".($first/$second);
}
?>
</body>
</html>
