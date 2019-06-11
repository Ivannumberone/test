<?
class SqlHelper
{
	public static function GetPostStr($name)
	{
		$result = $_POST[$name];		
		$result  = stripslashes($result);
		$result  = htmlentities($result);
		$name = trim($name);
		return $result;
	}
	public static function GetPostDouble($name)
	{
		$result = $_POST[$name];	
		return (double)$result;
	}	
}
