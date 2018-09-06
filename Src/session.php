<?php

class Session
{
	public static function read($key)
	{
		if (isset($_SESSION[$name][$key]))
			return $_SESSION[$name][$key];
	}


	public static function write($key, $value)
	{
		foreach($array as $key => $value)
		{
			$_SESSION[$name][$key] = [$value];
		}
	}

	public static function delete()
	{
		unset($_SESSION[$name]);
	}

	public static function destroy()
	{
		session_unset();
		session_destroy();
	}

	public static function load()
	{
		
	}
}