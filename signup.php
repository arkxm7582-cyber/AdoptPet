<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up | Pet Adoption</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f8f9fa;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .signup-container {
            background-color: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            text-align: center;
            width: 350px;
        }
        .signup-container h2 {
            margin-bottom: 10px;
        }
        .signup-container img {
            width: 100px;
            height: auto;
            margin-bottom: 10px;
        }
        .signup-container input {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        .signup-container button {
            background-color: #ff6600;
            color: white;
            border: none;
            padding: 10px;
            width: 100%;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }
        .signup-container button:hover {
            background-color: #ff4500;
        }
    </style>
</head>
<body>
    <div class="signup-container">
        <img src="Images/icon5.png" alt="Cute Pet">
        <h2>Sign Up</h2>
        <form method = "POST" action = "registrationHandler.php">
            <input type="text" name="txtUserName" placeholder="Username" required>
            <input type="email" name="txtEmail" placeholder="Email" required>
            <input type="text" name="txtContactNo" placeholder="Contact Number" required>
            <input type="password" name="txtPassword" placeholder="Password" required>
            <input type="password" placeholder="Confirm Password" required>
            <button type="submit" name="btnSubmit">Sign Up</button><br>
			 <a href="index.html">Home</a>
        </form>
    </div>
</body>
</html>
