<!DOCTYPE html>
<html>
<head>
  <title>Feedback</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
      display: flex;
      justify-content: center;
      align-items: center;
      min-height: 30vh;
      background-color: #f2f2f2;
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
  </style>
</head>
<body>
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
</body>
</html>
