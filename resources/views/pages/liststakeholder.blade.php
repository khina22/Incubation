<!DOCTYPE html>
<html>
<head>
  <title>Profile Page</title>
  <style>
    body {
  font-family: Arial, sans-serif;
  margin: 0;
  padding: 0;
  background-color: #f5f5f5;
}

.profiles-container {
  max-width: 1200px;
  margin: 0 auto;
  padding: 20px;
  background-color: #ffffff;
  border-radius: 6px;
  box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
}

table {
  width: 100%;
  border-collapse: collapse;
}

th,
td {
  padding: 12px;
  text-align: left;
  border-bottom: 1px solid #ddd;
}

th {
  background-color: #f2f2f2;
  font-weight: bold;
}

.profile-actions {
  display: flex;
  align-items: center;
  justify-content: flex-end;
}

.button-container {
  text-align: right;
  margin-bottom: 20px;
  margin-right: 20px;
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
  text-decoration: none;
  transition: background-color 0.3s ease;
}

.button:hover {
  background-color: #45a049;
}

.profile-pic {
  width: 100px;
  height: 100px;
  object-fit: cover;
  border-radius: 50%;
  box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
}

  </style>
</head>
@include('commons.header');
<body>
<div class="button-container">
<button class="button">
        <a href="/stakeholder">
        Add Stakeholder </a> </button>
</div>
<div class="profiles-container">
  <table>
    <thead>
      <tr>
        <th>Profile Picture</th>
        <th>Email</th>
        <th>organization</th>
        <th>Designation</th>
        <th>Actions</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($stakeholder_data as $data)
        <tr>
        <td><img src="/profile_pic/{{$data->pro_pic}}" onerror="this.src='/template/img/carousel-3.png'" alt="User profile picture" style="height: 50px;  width: 100px;">
          </td>
          <td>{{ $data->email}}</td>
          <td>{{ $data->organization }}</td>
          <td>{{ $data->designation }}</td>
          <td class="profile-actions">
          <button class="button" > <a href="/edit_stakeholder/{{$data->id}}">Edit </a> </button>
            <button class="button" > <a href="/delete_stakeholder/{{$data->id}}">Delete </a> </button>
          </td>
        </tr>
      @endforeach
    </tbody>
  </table>
</div>
</body>
</html>
