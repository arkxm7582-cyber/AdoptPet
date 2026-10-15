<?php
    require 'config.php';
?>

<?php
    if(isset($_POST["btnSubmit"])){
               
        $uName = $_POST["txtUserName"];
        $uEmail = $_POST["txtEmail"];
        $uContact = $_POST["txtContactNo"];
        $uPwd = $_POST["txtPassword"];
       
        $sql = "INSERT INTO user(user_id,user_name,user_email,user_pwd,user_contact) VALUES(NULL,'$uName','$uEmail','$uPwd','$uContact')";
         
       
        if(mysqli_query($conn,$sql)){

            echo "User Account created successfully";
        }
        else{
            echo "Cannot create the account";
        }
    }

    header('Location:login.html');
?>