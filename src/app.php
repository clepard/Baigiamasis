<?php
    if(isset($_POST['submit'])) {
        
        $name= trim($_POST['name']);
        $surname = trim($_POST['surname']);
        $email = trim($_POST['email']);
        $subject = trim($_POST['subject']);
        $message = trim($_POST['message']);

        if(!empty($name) && !empty($surname) && !empty($email && !empty($subject) && !empty($message))){
            if(filter_var($email,FILTER_VALIDATE_EMAIL)){
                
                echo "<script>alert('Thank you for submitting $name!'); </script>";
                
            }
        }

        include('db.php');
}



