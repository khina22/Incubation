<style>
    .my-form {
        max-width: 400px;
        margin: 0 auto;
        padding: 20px;
        border: 1px solid #ccc;
        border-radius: 5px;
    }

    .my-form label {
        display: block;
        margin-bottom: 5px;
        font-weight: bold;
    }

    .my-form .form-control {
        width: 100%;
        padding: 8px;
        border: 1px solid #ccc;
        border-radius: 4px;
    }

    .my-form textarea.form-control {
        resize: vertical;
    }

    .my-form button[type="submit"] {
        display: block;
        width: 100%;
        padding: 10px;
        margin-top: 10px;
        background-color: #007bff;
        color: #fff;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }

    .my-form button[type="submit"]:hover {
        background-color: #0056b3;
    }
</style>

<form action="/advisorypost" method="POST" enctype="multipart/form-data" class="my-form">
        <h2>Add Advisory Board</h2>
    @csrf

    <div class="form-group">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" class="form-control" value="{{$data->name}}" required>
    </div>

    <div class="form-group">
        <label for="text">Designation:</label>
        <textarea id="designation" name="designation" class="form-control" rows="4" required>{{$data->designation}} </textarea>
    </div>

    <div class="form-group">
        <label for="text">Affiliation:</label>
        <textarea id="affiliation" name="affiliation" class="form-control" rows="4" required>{{$data->affiliation}} </textarea>
    </div>

    <div class="form-group">
        <label for="profile_pic">Profile Picture:</label>
        <img src="/profile_pic/{{$data->pro_pic}}" onerror="this.src='/template/img/carousel-3.png'" alt="User profile picture" style="height: 50px;  width: 100px;">
        <input type="file" id="profile_pic" name="advisory_pic" accept="image/*" class="form-control-file" required>
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
</form>
