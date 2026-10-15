<?php
    require 'config.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pet Adoption | Home</title>
    <link href="CSS/style.css" rel="stylesheet"> 

</head>
<body>
    <header>🐶🐱 Adopt a Pet Today! 🐶🐱</header>
    
    <nav>
        <a href="#">Home</a>
        <a href="displaypets.php">Available Pets</a>
        <a href="#">My Posts</a>
        <a href="uploadPet.php">Adoption Process</a>
        <a href="#">Contact Us</a>
		<a href="login.html">Login</a>
    </nav>

<?php
    $sql = "SELECT * FROM advertistment";
    $result = mysqli_query($conn,$sql);

    if(mysqli_num_rows($result)> 0){
        while($row = mysqli_fetch_assoc($result)){
        
?>
    <div class="pet-container">
        <div class="pet-card">
            <img src="<?php echo $row["petImage"]; ?>">
            <h3><?php echo $row["petName"]; ?></h3>
            <p>Breed: <?php echo $row["breed"]; ?> </p>
            <div class="links">
                <a href = "">Edit Post</a> | <a href ="">Delete Post</a>
            </div>
        </div>
    </div>
<?php
    }}
?>



    <footer>
        <p>&copy; 2025 Pet Adoption. All rights reserved. | <a href="#">Copyright</a></p>
        <p>Follow us on: <a href="#">Instagram</a> | <a href="#">Facebook</a></p>
    </footer>
</body>
</html>  