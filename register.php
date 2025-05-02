<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Register - CareerPath</title>
  <!-- <link rel="stylesheet" href="register.css"> -->
   <style>
    /* styles2.css - For register.php */
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: 'Arial', sans-serif;
}


body {
  display: flex;
  background: linear-gradient(135deg, #74ebd5, #ACB6E5);
  flex-direction: column;
  display: flex;
  justify-content: center;
  align-items: center;
  min-height: 100vh;
  padding: 20px;
 
}


h2 {
  color: #333;
  margin-bottom: 30px;
  text-align: center;
  font-weight: 600;
}

form {
  background-color: #ffffff;
  border-radius: 8px;
  box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
  padding: 40px;
  width: 450px;
  max-width: 100%;
}

label {
  display: block;
  color: #555;
  margin-bottom: 6px;
  font-size: 14px;
  font-weight: 500;
}

input {
  width: 100%;
  padding: 12px 15px;
  border: 1px solid #ddd;
  border-radius: 4px;
  margin-bottom: 5px;
  font-size: 16px;
  transition: border-color 0.3s;
}

input:focus {
  outline: none;
  border-color: #4a90e2;
}

button {
  width: 100%;
  background-color: #4a90e2;
  color: white;
  border: none;
  border-radius: 4px;
  padding: 12px;
  font-size: 16px;
  cursor: pointer;
  margin-top: 15px;
  transition: background-color 0.3s;
}

button:hover {
  background-color: #3a7abd;
}

/* Remove the <br> spacing and use margin instead */
input + label {
  margin-top: 15px;
}

   </style>
</head>
<body>
  <h2>Create an Account</h2>
  <form action="register_process.php" method="POST">
    <label for="email">Email:</label>
    <input type="email" name="email" id="email" required><br><br>

    <label for="password">Password:</label>
    <input type="password" name="password" id="password" required><br><br>

    <label for="name">Full Name:</label>
    <input type="text" name="name" id="name" required><br><br>

    <button type="submit">Register</button>
  </form>
</body>
</html>
