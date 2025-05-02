
<!-- login.php -->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <!-- <link rel="stylesheet" href="login.css">   -->
   <style>
    /* styles1.css - For login.php */
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: 'Arial', sans-serif;
}

body {
  background: linear-gradient(135deg, #74ebd5, #ACB6E5);
  display: flex;
  justify-content: center;
  align-items: center;
  height: 100vh;
}


.container {
  background-color: #ffffff;
  border-radius: 8px;
  box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
  padding: 40px;
  width: 400px;
  max-width: 90%;
}

h2 {
  color: #333;
  margin-bottom: 30px;
  text-align: center;
  font-weight: 600;
}

form {
  display: flex;
  flex-direction: column;
}

label {
  color: #555;
  margin-bottom: 6px;
  font-size: 14px;
}

input {
  padding: 12px 15px;
  border: 1px solid #ddd;
  border-radius: 4px;
  margin-bottom: 20px;
  font-size: 16px;
  transition: border-color 0.3s;
}

input:focus {
  outline: none;
  border-color: #4a90e2;
}

button {
  background-color: #4a90e2;
  color: white;
  border: none;
  border-radius: 4px;
  padding: 12px;
  font-size: 16px;
  cursor: pointer;
  transition: background-color 0.3s;
}

button:hover {
  transform: scale(1.05);
  background-color: #3a7abd;
  box-shadow: 0 4px 20px rgba(74, 144, 226, 0.5);
}


   </style>

<!-- SweetAlert2 -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</head>
<body>

<?php
if (isset($_GET['login']) && $_GET['login'] == 'fail') {
    echo "<script>alert('Login Failed! ❌ Please check your email or password.');</script>";
}
?>
  

  <div class="container">
    <h2>Login</h2>
    <form action="login_process.php" method="POST">
      <label for="email">Email:</label>
      <input type="email" id="email" name="email" required>

      <label for="password">Password:</label>
      <input type="password" id="password" name="password" required>

      <button type="submit">Login</button>
          <div id="loader" style="display:none; text-align:center; margin-top: 10px;">
      <div class="spinner-border text-primary" role="status">
        <span class="visually-hidden">Loading...</span>
      </div>
</div>

    </form>
  </div>

  <script>
document.addEventListener('DOMContentLoaded', function () {
  const urlParams = new URLSearchParams(window.location.search);
  const loginStatus = urlParams.get('login');

  if (loginStatus === 'failed') {
    Swal.fire({
      icon: 'error',
      title: 'Login Failed!',
      text: 'Invalid email or password. Please try again.',
    });
  } else if (loginStatus === 'success') {
    Swal.fire({
      icon: 'success',
      title: 'Login Successful!',
      text: 'Welcome back!',
      timer: 2000,
      showConfirmButton: false
    });
  }
});
</script>

<script>
const form = document.querySelector('form');
form.addEventListener('submit', function () {
  document.getElementById('loader').style.display = 'block';
});
</script>

</body>
</html>


