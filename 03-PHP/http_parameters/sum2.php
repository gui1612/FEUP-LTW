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

    <?php
        $firstName = $_GET['firstName'];
        $lastName = $_GET['lastName'];
        $sum = $_GET['num1'] + $_GET['num2'];

        $db = new PDO('sqlite:example.db');

        $prep = $db->prepare('SELECT id, firstName, lastName, number FROM names WHERE firstName = ? and lastName = ?');

        $prep->execute(array($firstName, $lastName));

        $rows = $prep->fetch();

        if (!$rows) {
            $prep = $db->prepare('INSERT INTO names (firstName, lastName, number) VALUES (?, ?, ?)');

            $prep->execute(array($firstName, $lastName, $sum));

            header("Location: index.html");
        } else {
            echo "
                <main>
                    <div class='center'>
                        <p id='warning'>
                            The user <span>$firstName $lastName</span> has already been registered!
                        </p>
                    </div>
                </main>
            ";
        }
    ?>
</body>
</html>