<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lora&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" href="style.css">
    <title>DB</title>
<body>
    <header>
        <img src="https://cdn-icons-png.flaticon.com/512/5448/5448104.png" alt="" srcset="">
        <nav>
            <ul>
                <li><a href="index.html">Home</a></li>
                <li><a href="db.php">DB</a></li>
                <li><a href="form2.html">Form</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <?php
            $db = new PDO('sqlite:example.db'); 

            $prep = $db->prepare('SELECT id, firstName, lastName, number FROM names');
            $prep->execute(array());
            $rows = $prep->fetchAll();

            echo "<table>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Number</th>
                </tr>
            ";
            foreach($rows as $row)
                echo "
                    <tr>
                        <td>".$row['id']."</td>
                        <td>".$row['firstName']." ".$row['lastName']."</td>
                        <td>".$row['number']."</td>
                    </tr>";
            echo "</table>";
        ?>
    </main>
</body>
</html>