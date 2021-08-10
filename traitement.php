<?php

	try
		{
			$bdd = new PDO('mysql:host=localhost;dbname=ogourmetdata;charset=utf8', 'root', '');
		}
		catch (Exception $e)
		{
        	die('Erreur : ' . $e->getMessage());
      	}

    $login=$_POST["login"];
    //$pass=password_hash($_POST['pass'], PASSWORD_DEFAULT);
    $pass=$_POST['pass'];
    $req=$bdd->query("SELECT * FROM client NATURAL JOIN contact WHERE email LIKE '$login' ");
    $rep=$req->fetch();

    if($rep>=1){

    	//echo json_encode($pass);
    	$req=$bdd->query("SELECT * FROM client NATURAL JOIN contact WHERE email LIKE '$login' AND pass LIKE '$pass' ");
    	$rep=$req->fetch();

    	if($rep>=1){
    		session_start();
    		$_SESSION['id']=$rep['idContact'];
    		$_SESSION['email']=$rep['email'];

			header("Location:loggedpage.php");
    		exit();
    	}
    	else {
    		header("Location:login.html");
    		exit();
    	}

    }
    else{
    	header("Location:login.html");
    		exit();
    	
    }

?>