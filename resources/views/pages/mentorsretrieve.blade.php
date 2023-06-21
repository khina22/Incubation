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

    .mentor-heading {
      margin: 20px 0;
      font-size: 28px;
      font-weight: bold;
      color: #333;
      text-align: center;
    }

    .custom-section {
      display: flex;
      justify-content: center;
    }

    .mentor-description {
      margin-bottom: 20px;
      text-align: center;
    }

  </style>
</head>
<body>
@include('common.header')
@include('common.css')

<section class="custom-section">
  <div class="container">
    <h2 class="mentor-heading">Mentors</h2>

    <div class="mentor-description">
      <p>
        Mentors are experienced professionals who provide guidance, advice, and support to startups and entrepreneurs within an incubation center. They possess in-depth knowledge and expertise in various areas such as business development, industry-specific insights, entrepreneurship, marketing, technology, finance, and more. Mentors bring their wealth of experience and network to assist early-stage companies in navigating challenges and making informed decisions.
      </p>
      <p>
        The primary objective of mentors is to mentor and coach startup founders, sharing their wisdom, lessons learned, and best practices. They provide valuable feedback, constructive criticism, and strategic insights to help startups refine their business models, develop effective strategies, and overcome obstacles. Mentors often have a vast network of industry connections, which they leverage to open doors for startups, facilitate partnerships, and identify potential investors or customers.
      </p>
    </div>

    <div class="profiles-container">
      @foreach ($mentors_data as $data)
        <div class="profile">
          <img src="/profile_pic/{{$data->pro_pic}}" onerror="this.src='/template/img/carousel-3.png'" alt="User profile picture" style="width: 150px; height: 150px;">
          <h4>{{ $data->name }}</h4>
          <p>{{ $data->designation }}</p>
          <p>{{ $data->affiliation }}</p>
        </div>
      @endforeach
    </div>
  </div>
</section>

@include('common.footer')
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
