<?php
try
{
	$bdd = new PDO('mysql:host=localhost;dbname=sare;charset=utf8', 'root', 'Xd32!a&5ekk0');
}
catch(Exception $e)
{
        die('Error : '.$e->getMessage());
}

