<!DOCTYPE html>
<html>
<head>
  <title>Profile Page</title>
  <meta charset="UTF-8">
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
      line-height: 1.5;
    }
    
    .profiles-container {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
      gap: 20px;
      max-width: 1200px;
      margin: 0 auto;
      padding: 20px;
    }
    
    .profile {
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      text-align: center;
      padding: 20px;
      margin-bottom: 20px;
    }
    
    .profile img {
      width: 150px;
      height: 150px;
      border-radius: 50%;
      object-fit: cover;
      margin-bottom: 10px;
      box-shadow: 0 0 5px rgba(0, 0, 0, 0.3);
    }
    
    .profile h1 {
      margin: 10px 0;
      font-size: 20px;
    }
    
    .profile p {
      margin: 5px 0;
      font-size: 16px;
    }

    .incubatee-heading {
      margin: 20px 0;
      font-size: 36px;
      font-weight: bold;
      color: #333;
      text-align: center;
    } 
  </style>
</head>
@include('common.header');
@include('common.css');
<body>
  <h2 class="incubatee-heading">Incubatees</h2>
  <div class="profiles-container">
    @foreach ($incubatee_data as $data)
      <div class="profile">
        <img src="/profile_pic/{{$data->pro_pic}}" alt="Profile Picture" width="150" height="150">
        <h1>{{ $data->name }}</h1>
        <p>{{ $data->email }}</p>
        <p>{{ $data->contact_no }}</p>
        <p>{{ $data->description }}</p>
      </div>
    @endforeach
  </div>
</body>
@include('common.footer');
</html>
