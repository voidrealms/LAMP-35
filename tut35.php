<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
<head>
	<title>Untitled</title>
</head>

<body>

<?php

//const
class myclass
{
	const MaxUsers = 100;
	static $name = "Bryan";
	public $Val = 12;
	
	function Test()
	{
		echo self::MaxUsers . "<br>";
		echo self::$name . "<br>";
	}
}

//$myc = new myclass();
//$myc->Test();

echo myclass::MaxUsers . "<br>";

?>

</body>
</html>
