<!DOCTYPE html>
<html>
<head>
  <title>Profile Page</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
    }
    
    .profiles-container {
      display: flex;
      flex-wrap: wrap;
      justify-content: space-between;
      max-width: 1200px;
      margin: 0 auto;
      padding: 20px;
    }
    
    .profile {
      flex-basis: calc(33.33% - 20px);
      text-align: center;
      padding: 20px;
      margin-bottom: 20px;
      background-color: #f2f2f2;
    }
    
    .profile img {
      width: 150px;
      height: 150px;
      border-radius: 50%;
      object-fit: cover;
      margin-bottom: 10px;
    }
    
    .profile h1 {
      margin: 0;
      font-size: 24px;
    }
    
    .profile p {
      margin: 0;
      font-size: 18px;
    }
  </style>
</head>
<body>
<div class="profiles-container">
  @foreach ($event_data as $data)
    <div class="profile">
      <img src="{{ asset('storage/profile_pictures/' . $data->pro_pic) }}" alt="Profile Picture">
      <h1>{{ $data->title }}</h1>
      <p>{{ $data->description }}</p>
      <p>{{ $data->date }}</p>
      <p>{{ $data->venue }}</p>
      <p>{{ $data->organizer }}</p>
    </div>
  @endforeach
</div>
</body>
</html>
