<!DOCTYPE html>
<html>
<head>
  <title>Login Form</title>
  <style>
    /* Add your custom CSS styles here */
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 20px;
      background-color: #f4f4f4;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }
    
    h1 {
      color: #333;
      text-align: center;
    }
    
    .form-container {
      width: 500px; /* Increase the max-width value */
      background-color: #fff;
      padding: 30px;
      border: 1px solid #ccc;
      border-radius: 5px;
    }
    
    .form-group {
      margin-bottom: 20px;
    }
    
    .form-group label {
      display: block;
      margin-bottom: 5px;
      font-weight: bold;
    }
    
    .form-group input[type="text"],
    .form-group input[type="password"] {
      width: 100%;
      padding: 10px;
      font-size: 16px;
      border: 1px solid #ccc;
      border-radius: 3px;
    }
    
    .form-group button {
      padding: 10px 20px;
      font-size: 16px;
      cursor: pointer;
      background-color: #4CAF50;
      color: white;
      border: none;
      border-radius: 3px;
    }
    
    .form-group button:hover {
      background-color: #45a049;
    }
    
    /* Add logo styles */
    .logo-container {
      text-align: center;
      margin-bottom: 20px;
    }
    
    .logo-container img {
      width: 150px; /* Adjust the width as needed */
    }
  </style>
</head>
<body>
  <div class="form-container">
    <div class="logo-container">
      <img src="template/img/carousel-3.png" alt="Logo">
    </div>
    <h1>Login</h1>
    
    <form action="/userlogin" method="post">
      @csrf
      <div class="form-group">
        <label for="username">Email</label>
        <input type="text" id="username" name="email" required>
      </div>
      <div class="form-group">
        <label for="password">Password</label>
        <input type="password" id="password" name="password" required>
      </div>
      
      <div class="form-group">
        <button type="submit">Login</button>
      </div>
    </form>
  </div>
</body>
</html>
