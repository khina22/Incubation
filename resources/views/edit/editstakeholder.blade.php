<!DOCTYPE html>
<html>
<head>
  <title>Add Stakeholder</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
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

    .form-group label {
      font-weight: bold;
      color: #555;
    }

    .form-group input[type="text"],
    .form-group input[type="email"],
    .form-group input[type="file"],
    .form-group textarea {
      color: #555;
    }
  </style>
</head>
<body>
  <div class="form-container">
    <h2>Edit Stakeholder</h2>
    <form action="/update_stakeholder" method="POST" enctype="multipart/form-data" class="needs-validation" novalidate>
      @csrf

      <div class="form-group">
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" class="form-control" placeholder="Enter stakeholder's email" value="{{$data->email}}" required>
      </div>

      <div class="form-group">
        <label for="organization">Organization:</label>
        <input type="text" id="organization" name="organization" class="form-control" placeholder="Enter stakeholder's organization" value="{{$data->organization}}"  required>
      </div>

      <div class="form-group">
        <label for="designation">Designation:</label>
        <input type="text" id="designation" name="designation" class="form-control" placeholder="Enter stakeholder's designation" value="{{$data->designation}}" required>
      </div>

      <div class="form-group">
        <label for="profile_pic">Profile Picture:</label>
        <img src="/profile_pic/{{$data->pro_pic}}" onerror="this.src='/template/img/carousel-3.png'" alt="User profile picture" style="height: 50px;  width: 100px;">
        <input type="hidden" name="existing_image" accept="image/*" class="form-control-file" value="{{$data->pro_pic}}" required>
    </div>
        <input type="file" id="pro_pic" name="pro_pic" accept="image/*" class="form-control-file" required>
        <input type="hidden" id="name" name="record_id" value="{{$data->id}}" class="form-control-file" required>

      <button type="submit" class="btn btn-primary">Update Stakeholder</button>
    </form>
  </div>

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></
