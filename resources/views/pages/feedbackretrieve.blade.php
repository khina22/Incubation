<!DOCTYPE html>
<html>
<head>
  <title>Feedback</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
      background-color: #f2f2f2;
    }
    
    .container {
      width: auto;
      margin: 0 auto;
      padding: 20px;
      background-color: #fff;
      border-radius: 8px;
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }
    
    table {
      width: 100%;
      border-collapse: collapse;
    }
    
    th, td {
      padding: 10px;
      text-align: left;
      border-bottom: 1px solid #ddd;
    }
    
    th {
      background-color: #f2f2f2;
    }
    .feedback-heading {
      font-size: 28px;
      font-weight: bold;
      color: #333;
      text-align: center;
    }
  </style>
</head>
@include('commons.header');
<body>

  <div class="container">
  <h2 class="feedback-heading">Feedback</h2>
    <table>
      <thead>
        <tr>
          <th>Name</th>
          <th>Contact Number</th>
          <th>Email</th>
          <th>Feedback</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($feedback_data as $data)
        <tr>
          <td>{{ $data->name }}</td>
          <td>{{ $data->contact_no }}</td>
          <td>{{ $data->email }}</td>
          <td>{{ $data->feedback }}</td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</body>
</html>
