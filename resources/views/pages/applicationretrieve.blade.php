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
      max-width: 1200px;
      margin: 0 auto;
      padding: 20px;
    }
    
    table {
      width: 100%;
      border-collapse: collapse;
    }
    
    th, td {
      padding: 8px;
      text-align: left;
      border-bottom: 1px solid #ddd;
    }
    
    th {
      background-color: #f2f2f2;
    }
    
    .profile-actions {
      display: flex;
      justify-content: center;
    }
    
    .button {
      margin: 0 5px;
      padding: 10px 20px;
      background-color: #4CAF50;
      color: white;
      font-size: 16px;
      border: none;
      border-radius: 4px;
      cursor: pointer;
    }
    .application-heading {
    margin: 20px 0;
    font-size: 28px;
    font-weight: bold;
    color: #333;
    text-align: center;
  }

  </style>
</head>
<body>
    <h2 class="application-heading"> Applicant Details </h2>
<div class="profiles-container">
  <table>
    <thead>
      <tr>
        <th>Name</th>
        <th>Email</th>
        <th>Contact_no</th>
        <th>Business Title</th>
        <th>Description</th>
        <th>Potential Customers</th>
        <th>Competetors</th>
        <th>Survey</th>

      </tr>
    </thead>
    <tbody>
    @foreach ($application_data as $data)
        <tr>
          <td>{{ $data->name }}</td>
          <td>{{ $data->email }}</td>
          <td>{{ $data->contact_no }}</td>
          <td>{{ $data->business_title  }}</td>
          <td>{{ $data->description  }}</td>
          <td>{{ $data->potential_custimers  }}</td>
          <td>{{ $data->competetors  }}</td>
          <td>{{ $data->survey  }}</td>
        </tr>
      @endforeach
    </tbody>
  </table>
</div>
</body>
</html>
