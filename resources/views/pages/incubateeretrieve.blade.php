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

    .incubatee-heading {
      margin: 20px 0;
      font-size: 28px;
      font-weight: bold;
      color: #333;
      text-align: center;
    } 

  </style>
</head>
@include('common.header')
@include('common.css')
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
@include('common.footer')
</html>
