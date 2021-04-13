<?php
    define("DB_SERVER","localhost");
    define("DB_USER","root");
    define("DB_PASSWORD","");
    define("DB_NAME","baigiamasis");

    $mysqli = new mysqli(DB_SERVER, DB_USER , DB_PASSWORD ,DB_NAME);
    if($mysqli->connect_error) {
        echo "Sorry, website encountered a problem. \n";
        echo 'Error: ' . $mysqli->connect_error . '\n';
        exit();
    }

    mysqli_query($mysqli, "INSERT INTO clients (name, surname, email, subject, message)
    VALUES('$_POST[name]' , '$_POST[surname]', '$_POST[email]', '$_POST[subject]', ' $_POST[message]')");

echo '<script src="js/popup.js"></script>';