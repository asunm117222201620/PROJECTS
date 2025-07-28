<?php

   include("connection.php");

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Email and Password Verification</title>
  
</head>
<body>
  <div class="form-container">
    <h2>Login</h2>
    <form id="loginForm">
      <div class="form-group">
        <label for="email">Email:</label>
        <input type="email" id="email" placeholder="Enter your email" required>
        <span id="emailError" class="error"></span>
      </div>
      <div class="form-group">
        <label for="password">Password:</label>
        <input type="password" id="password" placeholder="Enter your password" required>
        <span id="passwordError" class="error"></span>
      </div>
      <button type="submit">Login</button>
    </form>
    <div id="successMessage" class="success"></div>
  </div>
  <style>
    /* General styles */
body {
  font-family: Arial, sans-serif;
  background: linear-gradient(to bottom, pink, white);
  display: flex;
  justify-content: center;
  align-items: center;
  height: 100vh;
  margin: 0;
}

.form-container {
  background: #fff;
  padding: 30px;
  border-radius: 10px;
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
  width: 300px;
}

h2 {
  text-align: center;
  margin-bottom: 20px;
}

.form-group {
  margin-bottom: 15px;
}

label {
  display: block;
  margin-bottom: 5px;
}

input {
  width: 100%;
  padding: 8px;
  border: 1px solid #ccc;
  border-radius: 4px;
  font-size: 14px;
}

button {
  width: 100%;
  padding: 10px;
  background-color: #007bff;
  color: white;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

button:hover {
  background-color: #0056b3;
}

.error {
  color: red;
  font-size: 12px;
  margin-top: 5px;
}

.success {
  color: green;
  text-align: center;
  margin-top: 10px;
}
</style>

<script>
document.getElementById("loginForm").addEventListener("submit", function (e) {
  e.preventDefault();

  // Clear previous messages
  document.getElementById("emailError").textContent = "";
  document.getElementById("passwordError").textContent = "";
  document.getElementById("successMessage").textContent = "";

  // Get input values
  const email = document.getElementById("email").value.trim();
  const password = document.getElementById("password").value.trim();

  let isValid = true;

  // Email validation
  const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
  if (!emailRegex.test(email)) {
    document.getElementById("emailError").textContent = "Invalid email format.";
    isValid = false;
  }

  // Password validation (at least 8 characters, 1 number)
  const passwordRegex = /^(?=.*[0-9]).{8,}$/;
  if (!passwordRegex.test(password)) {
    document.getElementById("passwordError").textContent =
      "Password must be at least 8 characters long and contain at least 1 number.";
    isValid = false;
  }

  // If valid, show success and redirect
  if (isValid) {
    document.getElementById("successMessage").textContent = "Login successful!";
    setTimeout(() => {
      window.location.href = "welcome.php"; // Redirect to the homepage
    }, 1000);
  }
});
</script>  

    
</body>
</html>