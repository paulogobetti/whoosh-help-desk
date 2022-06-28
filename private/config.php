<?php

    $dbHost = 'mysql:host=localhost;dbname=whoosh';
    $dbUser = 'webmaster';
    $dbPass = '&mN7du9y9Z*DhLiKKC';

    try {

        $dbConnection = new PDO($dbHost, $dbUser, $dbPass);

        $dbQuery = '
            CREATE TABLE IF NOT EXISTS app_users(
                id      int         not null        primary key     auto_increment,
                name    varchar(45) not null,
                email   varchar(90) not null,
                pass    varchar(32) not null
            )
        ';

        $dbCreationReturn = $dbConnection->exec($dbQuery);

        $dbQuery = '
            CREATE TABLE IF NOT EXISTS app_tickets(
                id      int             not null    primary key     auto_increment,
                name    varchar(45)     not null
            )
        ';

        $dbCreationReturn = $dbConnection->exec($dbQuery);

        // echo $dbCreationReturn;

        $dbQuery = '
                INSERT INTO IF NOT EXISTS app_users    (name, email, pass)
                VALUES  ("Naruto Uzumaki", "naruto@email", "123"),
                        ("Sasuke Uchiha", "sasuke@email", "123"),
                        ("Sakura Haruno", "sakura@email", "123"),
                        ("Kakashi Hatake", "kakashi@email", "123")
        ';

        $dbCreationReturn = $dbConnection->exec($dbQuery);

        // echo $dbCreationReturn;

    }

    catch(PDOException $dbConnectionError) {

        echo 'Error: ' . $dbConnectionError->getCode() . '<br>Message: ' . $dbConnectionError->getMessage();

    }
