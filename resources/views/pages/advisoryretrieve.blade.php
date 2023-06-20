<!DOCTYPE html>
<html>
<head>
  <title>Profile Page</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
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

    .advisory-board-heading {
      margin: 20px 0;
      font-size: 28px;
      font-weight: bold;
      color: #333;
      text-align: center;
    }
  </style>
</head>
<body>
@include('common.header')
@include('common.css')

<h2 class="advisory-board-heading">Advisory Board</h2>
<div class="container">
  <div class="row">
    @foreach ($advisory_data as $data)
      <div class="col-md-4">
        <div class="profile">
          <img src="/profile_pic/{{$data->pro_pic}}" onerror="this.src='/template/img/carousel-3.png'" alt="User profile picture" style="height: 150px; width: 150px;">
          <h4>{{ $data->name }}</h4>
          <p>{{ $data->designation }}</p>
          <p>{{ $data->affiliation }}</p>
        </div>
      </div>
    @endforeach
  </div>
</div>

@include('common.footer')
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
