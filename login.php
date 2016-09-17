<?php
include "connection.php";

if(isset($_POST["submit"])){
    $username = $_POST["username"];
    $password = $_POST["password"];
    
    $login = $dbh->prepare("SELECT * FROM users WHERE username = :input1 AND password = :input2");
	$login->bindParam(":input1", $username);
	$login->bindParam(":input2", $password);
	$login->execute();
	$data = $login->fetch(PDO::FETCH_ASSOC);

	if($username == $data["username"] && $password == $data["password"]) {
		if($data["perm"] == 0){
            session_start();
            $_SESSION["name"] = $data["ID"];
		header('Location: index.php');
		} else {

		echo "regular!";
			
		}

	}
	else{
		 $message = "Your Login Name or Password is invalid";
        echo "<script type='text/javascript'>alert('$message');</script>";
       
	}
     
}
?>