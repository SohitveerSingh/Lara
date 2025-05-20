
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .container{
            height: 100vh;
            width: 100vw;
            display: flex;
            flex-direction: column;
        }
        header{
            height: 50px;
            width: 100%;
            background-color: #f0f0f0;
            display: flex;
            justify-content: center;
            align-items: center;
        }
    </style>
</head>
<body>
    <div class="container">
        <header><a href="./Form.php">Add User</a></header>
        <div>
            
            <table border="1">
            <thead>
                <tr>
                    <th>id</th>
                    <th>username</th>
                    <th>email</th>
                    <th>password</th>
                    <th>number</th>
                    <th>action</th>
                </tr>
            </thead>
            <tbody>
                <?php
               include './connection.php';

                
                $fetching_user = $connection->prepare("SELECT * FROM formdb ");
                // $fetching_user->bind_param('s', $id); 
                $fetching_user->execute();
                $fetching_user->bind_result($id, $username, $email, $password, $number);
                $result = $fetching_user->get_result();



                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>
                        <td>$row[id]</td>
                        <td>$row[username] </td>
                        <td>$row[email]</td>
                        <td>$row[password]</td>
                        <td>$row[number]</td>
                        <td>

                        <a href='./actions/delete.php?id=$row[id]'>Delete</a>
                        <a href='./actions/edit.php?id=$row[id]'>Edit</a>
                        </td>
                        
                        </tr>";
                    };
                    $fetching_user->close();
                
                ?>
            </tbody>
            </table>
        </div>
    </div>
</body>
</html>