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
      width: 100%;
      margin: 0 auto;
      padding: 20px;
    }
    
    .application-heading {
      font-size: 28px;
      font-weight: bold;
      color: #333;
      text-align: center;
    }
  </style>
</head>
@include('commons.header');
<body>
  <div class="profiles-container">
    <h2 class="application-heading">Applicant Details</h2>
    <div class="table-responsive">
      <table class="table table-bordered table-striped">
        <thead>
          <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Contact No</th>
            <th>Business Title</th>
            <th>Description</th>
            <th>Potential Customers</th>
            <th>Competitors</th>
            <th>Survey</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($application_data as $data)
          <tr>
            <td>{{ $data->name }}</td>
            <td>{{ $data->email }}</td>
            <td>{{ $data->contact_no }}</td>
            <td>{{ $data->business_title }}</td>
            <td>{{ $data->description }}</td>
            <td>{{ $data->potential_customers }}</td>
            <td>{{ $data->competetors }}</td>
            <td>{{ $data->survey }}</td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
