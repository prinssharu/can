<?php

$servername = "localhost";
$username = "root"; 
$password = "diru1234"; 
$dbname = "canteen";


$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


if (isset($_GET['id'])) {
    $message_id = intval($_GET['id']); 

    
    $sql = "DELETE FROM contact_form WHERE message_id = ?";

    
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $message_id);

    if ($stmt->execute()) {
        
        header("Location: admin_contact.php?message=Message deleted successfully.");
        exit();
    } else {
        
        header("Location: admin_contact.php?error=Failed to delete the message.");
        exit();
    }
} else {
   
    header("Location: admin_contact.php?error=Invalid request.");
    exit();

}



?>