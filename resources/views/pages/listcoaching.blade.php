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
  </style>
</head>
<body>
<div class="button-container">
<button class="button">
        <a href="/coaching">
        Add Coaching </a> </button>
</div>
<div class="profiles-container">
  <table>
    <thead>
      <tr>
        <th> Picture</th>
        <th>Coaching Tools</th>
        <th>Facility Tools</th>
        <th>Actions</th>
      </tr>
    </thead>
    <tbody>
    @foreach ($coaching_data as $data)
        <tr>
          <td>
        <img src="/profile_pic/{{$data->pic}}" onerror="this.src='/template/img/carousel-3.png'" alt="User profile picture" style="height: 50px;  width: 100px;">
          </td>
          <td>{{ $data->coachingtools}}</td>
          <td>{{ $data->facilitytools }}</td>
          <td class="profile-actions">
            <button class="button">Edit</button>
            <button class="button" > <a href="/delete_coaching/{{$data->id}}">Delete </a> </button>
          </td>
        </tr>
      @endforeach
    </tbody>
  </table>
</div>
</body>
</html>
