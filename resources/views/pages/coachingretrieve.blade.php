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
      border: none;
      background-color: transparent;
    }
    
    .profile img {
      width: 150px;
      height: 150px;
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

    .coaching-tools-heading {
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

<section class="custom-section">
  <div class="container">
    <h2 class="coaching-tools-heading">Coaching Tools and Facility</h2>

    <div class="coaching-tools-container">
      <div class="coaching-tools-description">
        <p>
          Coaching tools and facilities refer to the resources, programs, and physical spaces provided by an incubation center to support startups in their growth and development through coaching and mentoring. These tools and facilities are designed to enhance the learning, skill development, and overall progress of the startups.
        </p>
      </div>

      <div class="row justify-content-center">
        @foreach ($coaching_data as $data)
          <div class="col-md-4">
            <div class="profile">
              <img src="/profile_pic/{{$data->pic}}" onerror="this.src='/template/img/carousel-3.png'" alt="User profile picture" style="height: 150px; width: 150px;">
              <p>{{ $data->coachingtools }}</p>
              <p>{{ $data->facilitytools }}</p>
            </div>
          </div>
        @endforeach
      </div>
    </div>
  </div>
</section>

@include('common.footer')
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
