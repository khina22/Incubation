<!DOCTYPE html>
<html>
<head>
  <title>Add Stakeholder</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
      display: flex;
      justify-content: center;
      align-items: center;
      min-height: 100vh;
      background-color: #f2f2f2;
    }

    .form-container {
      max-width: 600px;
      padding: 20px;
      border-radius: 5px;
      background-color: #fff;
      box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    }

    .form-container h2 {
      text-align: center;
      margin-bottom: 20px;
      color: #333;
    }

    .form-group {
      margin-bottom: 20px;
    }

    .form-group label {
      display: block;
      margin-bottom: 5px;
      font-weight: bold;
      color: #555;
    }

    .form-group input[type="text"],
    .form-group input[type="email"],
    .form-group textarea {
      width: 100%;
      padding: 10px;
      border: 1px solid #ccc;
      border-radius: 4px;
      font-size: 16px;
      color: #555;
    }

    .form-group textarea {
      resize: vertical;
      height: 120px;
    }

    .form-group button[type="submit"] {
      display: block;
      width: 100%;
      padding: 10px;
      margin-top: 10px;
      background-color: #007bff;
      color: #fff;
      border: none;
      border-radius: 4px;
      font-size: 16px;
      cursor: pointer;
    }

    .form-group button[type="submit"]:hover {
      background-color: #0056b3;
    }
  </style>
</head>
<body>
  <div class="form-container">
    <h2>Add Stakeholder</h2>
    <form action="/stakeholderpost" method="POST">
      @csrf
      <div class="form-group">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" placeholder="Enter stakeholder's name" required>
      </div>

      <div class="form-group">
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" placeholder="Enter stakeholder's email" required>
      </div>

      <div class="form-group">
        <label for="phone">Phone Number:</label>
        <input type="text" id="contact_no" name="phone" placeholder="Enter stakeholder's phone number" required>
      </div>

      <div class="form-group">
        <label for="organization">Organization:</label>
        <input type="text" id="organization" name="organization" placeholder="Enter stakeholder's organization">
      </div>

      <div class="form-group">
        <label for="designation">Designation:</label>
        <input type="text" id="designation" name="designation" placeholder="Enter stakeholder's designation">
      </div>


      <button type="submit">Add Stakeholder</button>
    </form>
  </div>
</body>
</html>
