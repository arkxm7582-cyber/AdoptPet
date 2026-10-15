<?php
    session_start();
    if(!isset($_SESSION['userName'])){
        header('Location:login.html');
    }
    require 'config.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Post a Pet Advertisement</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
        }
        .form-container {
            width: 50%;
            margin: auto;
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 10px;
            box-shadow: 2px 2px 10px rgba(0, 0, 0, 0.1);
        }
        .form-group {
            margin-bottom: 15px;
            text-align: left;
        }
        label {
            font-weight: bold;
        }
        input[type="text"], input[type="email"], input[type="tel"], input[type="file"] {
            width: 100%;
            padding: 8px;
            margin-top: 5px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        .checkbox-group {
            display: flex;
            align-items: center;
        }
		select {
    width: 100%;
    padding: 10px;
     border: 1px solid #ccc;
     border-radius: 5px;
    background-color: #fff;
    font-size: 16px;
    cursor: pointer;
    outline: none;
    appearance: none; /* Removes default styling in some browsers */
}
        .btn {
            padding: 10px 20px;
            font-size: 16px;
            border: none;
            cursor: pointer;
            border-radius: 5px;
        }
        .btn-upload {
            background-color: #ff6600;
            color: white;
        }
        .btn-upload:hover {
            background-color:beige;
        }
        .btn-cancel {
            background-color:bisque;
            color: white;
        }
        .btn-cancel:hover {
            background-color: #ff6600;
        }
        .cute-img {
            width: 150px;
            margin-top: 20px;
        }
		 nav {
            display: flex;
            justify-content: center;
            background-color: #ff6600;
            padding: 10px;
        }
        nav a {
            color: white;
            text-decoration: none;
            margin: 0 15px;
            font-size: 18px;
        }
    </style>
</head>
<body>
	  <nav>
        <a href="index.html">Home</a>
        <a href="displaypets.php">Available Pets</a>
        <a href="displayMyPets.php">My Posts</a>
        <a href="#">Adoption Process</a>
        <a href="#">Contact Us</a>
		<a href="login.html">Login</a>
    </nav>
    <h1>Post a Pet Advertisement</h1>

    <img src="Images/icon2.png" alt="Cute Pet" class="cute-img">

    <div class="form-container">

        <form method="post" action="uploadPet.php" enctype="multipart/form-data">

            <div class="form-group">
                <label for="petName">Pet Name:</label>
                <input type="text" id="petName" name="petName" required>
            </div>
			 <div class="form-group">
                <label for="Breed">Breed:</label>
                <input type="text" id="petBreed" name="petBreed" required>
            </div>
			 <div class="form-group">
                <label for="">Type:</label>
                <select id="type" name="type">
                  <option value="Kitten">Kitten</option>
                  <option value="Puppy">Puppy</option>
                </select>
            </div>
            <div class="form-group">
                <label for="petImage">Upload Picture:</label>
                <input type="file" id="petImage" name="petImage" accept="image/*" required>
            </div>
           
            <div class="form-group checkbox-group">
                <input type="checkbox" id="publish" name="publish">
                <label for="publish">Make it public</label>
            </div>
            <button type="submit" name= "btnSubmit" class="btn btn-upload">Upload</button>
            <button type="reset" class="btn btn-cancel">Cancel</button>
        </form>
        
        <?php

            if(isset($_POST["btnSubmit"])){
               
                $pName = $_POST["petName"];
                $pBreed = $_POST["petBreed"];
                $pType = $_POST["type"];

                if(isset($_POST["publish"]))
                {
                    $status = 1;
                }
                else{
                    $status = 0;
                }

                $image = "uploads/".basename($_FILES["petImage"]["name"]);
                move_uploaded_file($_FILES["petImage"]["tmp_name"],$image);

                $sql = "INSERT INTO advertistment(adId,petName,breed,petType,petImage,upload) 
                VALUES(NULL,'$pName','$pBreed','$pType','$image','$status','{$_SESSION["userName"]}')";
                 
                 //execute query
                if(mysqli_query($conn,$sql)){

                    echo "Advertisment uploaded successfully";
                }
                else{
                    echo "Cannot upload the advertisement";
                }
            }
        ?>

    </div>
</body>
</html>
