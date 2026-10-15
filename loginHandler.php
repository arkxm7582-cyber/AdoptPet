<?php
    require 'config.php';
?>
<?php 
session_start();

				if(isset($_POST["btnSubmit"]))
                {				
				$uEmail = $_POST["txtEmail"];
				$uPwd =  $_POST["txtPassword"];
	
                $sql = "SELECT * FROM `user`
                 WHERE `user_email`='".$uEmail."' AND `user_pwd`='".$uPwd."'";

				$results = mysqli_query($conn,$sql);

				if(mysqli_num_rows($results)>0)
				{
					$_SESSION["userName"] = $uEmail;
					//header('Location:dashboard.php');
				}
				else
				{ 
					header('Location:login.html');
				}
			}
		?>





