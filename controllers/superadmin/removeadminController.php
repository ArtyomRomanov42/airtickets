<?php
require_once '../../models/database_connect.php';
    session_start();
    if(!isset($_SESSION['loggedinuser']))
	{
		header("Location:../../views/Login.php");
    }
    function getAllAdmin()
	{
		$query ="SELECT * FROM users WHERE utype='admin'";
		$admin = get($query);
		return $admin;
    }

    function removeAdmin($id)
	{
        $query ="DELETE FROM users WHERE userid=$id";
        execute($query);
		header("Location:../../views/superadmin/removeadmin.php");
    }
    if(isset($_POST['submit2'])){
        session_start();
        if (isset($_SESSION['loggedinuser']))
        {
          unset($_SESSION['loggedinuser']);
        }
        session_destroy();
        header("location:../../views/Login.php");
        exit();
        }
?>