<?php



if (isset($_GET["id"])) {

include "../connection.php";

// Check connection
if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
} 
else{
    $id = $_GET["id"];
    $sql = "DELETE FROM formdb WHERE id='$id'";
    $result = $connection->query($sql); 
    if (!$result) {
        die("Query failed: " . $connection->error);
    } else {
        // redirect to index.php    
        header("Location: ../index.php");
        exit();
    }
}   
}
?>