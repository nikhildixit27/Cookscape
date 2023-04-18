<?php

    if(isset($_POST['btn-send'])){

        $name = $_POST['name'];
        $email = $_POST['email'];
        $message = $_POST['message'];

        // $mailTo = 'dikshitabc@gmail.com';
        // $headers = 'From: '.$mailForm;
        // $txt = 'You have received an email from '.$name.'.\n\n'.$message;

        // mail($mailTo, $txt, $headers);

        $servername = "localhost";
        $username = "root";
        $password = "password";

        // Create connection
        $conn = new mysqli($servername, $username, $password);

        // Check connection
        if ($conn->connect_error)
        {
            die("Connection failed: " . $conn->connect_error);
        }
        $conn->query("USE cookscape;");
        $conn->query("INSERT INTO contact VALUES('". $name . "', '" . $email . "', '" . $message . "');");
        header('Location: index.html');
    }
?>