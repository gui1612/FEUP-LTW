<?php
    declare(strict_types = 1);

    require_once('database/connection.php');

    function userExists(string $username, string $password) : bool {
        $encPass = sha1($password);

        $db = getDatabaseConnection();
        $conn = $db->prepare('SELECT *
                              FROM users
                              WHERE
                                username = ? 
                              AND
                                password = ?'
        );

        $conn->execute(array($username, $encPass));

        $usersFound = $conn->fetchAll();

        return count($usersFound) != 0;
    }

    function usernameExists(string $username) : bool {
        $db = getDatabaseConnection();
        $conn = $db->prepare('SELECT *
                              FROM users
                              WHERE
                                username = ?'
        );
    
        $conn->execute(array($username));

        $userFound = $conn->fetchAll();

        return count($userFound) != 0;
    }
    
    function createUser(string $username, string $password, string $email) : void {
        $encPass = sha1($password);

        $db = getDatabaseConnection();

        $conn = $db->prepare('INSERT 
                              INTO users
                              VALUES(?, ?, ?)'
                            );

        $conn->execute(array($username, $encPass, $email));
    }
?>