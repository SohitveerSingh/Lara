<?php

include "../connection.php";


$id = "";
$username = "";
$email = "";
$password = "";
$number = "";

$errorMsg = "";
$successMsg = "";

if ($_SERVER["REQUEST_METHOD"] == "GET") {

    if (!isset($_GET["id"])) {
        header("Location: ../index.php");
        exit();
    }
    else{

        $id = $_GET["id"];

        $fetching_user = $connection->prepare("SELECT * FROM formdb WHERE id = ? ");
        $fetching_user->bind_param('s', $id); 
        $fetching_user->execute();
        $fetching_user->bind_result($id, $username, $email, $password, $number);
        $result = $fetching_user->get_result();


        $row = $result->fetch_assoc();

        if (!$row) {
            header("Location: index.php");
            exit();
        }
        $id = $row["id"];
        $username = $row["username"];
        $email = $row["email"];
        $password = $row["password"];
        $number = $row["number"];
    }
}
else {
    
    $id = $_POST['id'];
    $username =  $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $number = $_POST['number'];
        
    do {
        if (empty($id) || empty($username) || empty($email) || empty($password) || empty($number)) {
            $errorMsg = "All fields are required";
            break;
        }
        // add new user to database
        else{
            $updating_user = $connection->prepare("UPDATE formdb SET username=?, email=?, password=?, number=? WHERE id=?");
            $updating_user->bind_param('ssssi', $username, $email, $password, $number , $id ); 
            $updating_user->execute(); 

            $successMsg = "User updated successfully";

            // redirect to index.php    
            header("Location: ../index.php");
            exit();
        }
    } while (false);
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .alert{
            position: absolute;
            top: 50%;
            left: 50%;
            z-index: 2;  
        }
    </style>
</head>
<body>
    <?php if (!empty($errorMsg)) {
        echo "<div class='alert'>
        $errorMsg
        </div>";
    }
    else if (!empty($successMsg)) {
        echo "<div class='alert'>
        $successMsg
        </div>";
    }
    ?>
    <form method="post">

    <label for="id"> </label>
    <input type="text" name="id" value="<?php echo $id ?>" placeholder="id" >

        <label for="username"> </label>
        <input type="text" name="username" value="<?php echo $username ?>" placeholder="username" >
       
        <label for="email"></label>
        <input type="email"  name="email" value="<?php echo $email ?>" id="" placeholder="email" >

        <label for="password"></label>
        <input type="password" name="password" value="<?php echo $password ?>"  id="" placeholder="password" >

        <label for="number"></label>
        <input type="number" name="number" value="<?php echo $number ?>" id="" placeholder="Mobile Number">

        <button type="submit">Submit</button>
    </form>
</body>
</html>