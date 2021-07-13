<?php 

require_once 'db_connect.php';




function addUser($data){
	$conn = db_conn();
    $selectQuery = "INSERT into user_info (Name, Email, Username, Password, Gender, DateOfBirth)
VALUES (:Name, :Email, :Username, :Password, :Gender, :DateOfBirth)";
    try{
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([
        	':Name' => $data['name'],
        	':Email' => $data['email'],
        	':Username' => $data['username'],
        	':Password' => $data['password'],
        	':Gender' => $data['gender'],
            ':DateOfBirth' => $data['dob']
        ]);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    
    $conn = null;
    return true;
}

function loginUser($data){
    $conn = db_conn();
    $selectQuery = "SELECT * FROM `user_info` WHERE username= :username AND password = :password ";

    try{
        $stmt = $conn->prepare($selectQuery);
         $stmt->execute([
            ':username' => $data['username'],
            ':password' => $data['password']
        ]);
    
        
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $rows;
}

function showUser($data){
    $conn = db_conn();
    $selectQuery = "SELECT * FROM `user_info` where username = ?";

    try {
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([$data]);
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
    $row = $stmt->fetch(PDO::FETCH_ASSOC);

    return $row;
}



function updateUser( $data){
    $conn = db_conn();
    $selectQuery = "UPDATE user_info set Name = ?, Email= ? where username = ?";
    try{
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([
        	$data['name'], $data['email'], $data['username']
        ]);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    
    $conn = null;
    return true;
}

function updatePassword( $data){
    $conn = db_conn();
    $selectQuery = "UPDATE user_info set Password = ? where username = ?";
    try{
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([
            $data['password'], $data['username']
        ]);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    
    $conn = null;
    return true;
}


