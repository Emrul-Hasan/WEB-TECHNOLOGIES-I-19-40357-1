<?php 

require_once 'db_connect.php';


function login($Data)
{
	$conn = db_conn();
	$selectQuery = "SELECT * FROM `turor` where username = :username AND  password= :password ";
    try {
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute(
		array(
		':username'=> $_POST["username"],
		':password'=> $_POST["password"],
		)		
		);
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
    

   $conn = null;
    return true;
}

function add($data){
	$conn = db_conn();
    $selectQuery = "INSERT into tutor (Username, Password, ContactNo, Email)
VALUES (:username, :password, :contactno ,:email)";
    try{
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([
        	':username' => $data['username'],
        	':password' => $data['password'],
        	':contactno' => $data['contactno'],
        	':email' => $data['email']
        ]);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    
    $conn = null;
    return true;
}


function showData($columnName)
{
	$conn = db_conn();
	$selectQuery = "SELECT * FROM `tutor` where username = ?";
    try {
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([$columnName]);
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
    $row = $stmt->fetch(PDO::FETCH_ASSOC);

    return $row;
}

function pass($username, $data){
    $conn = db_conn();
    $selectQuery = "UPDATE `tutor` set  password = ?,  where username = ?";
    try{
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([
        	 $data['password'], $username
        ]);
    }catch(PDOException $e){
        echo $e->getMessage();
    }    
    $conn = null;
    return true;
}

function profile($username, $data){
    $conn = db_conn();
    $selectQuery = "UPDATE `tutor` set   email = ?, contactno=?  where username = ?";
    try{
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([
        	  $data['email'],$data['contactno'],$username
        ]);
    }catch(PDOException $e){
        echo $e->getMessage();
    }    
    $conn = null;
    return true;
}

 
 ?>






