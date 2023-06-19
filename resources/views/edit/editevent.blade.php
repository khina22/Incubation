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

<form action="/update_event" method="POST" class="my-form" enctype="multipart/form-data" >
    <h2>Edit Event</h2>
    @csrf

    <div class="form-group">
        <label for="title">Title:</label>
        <input type="text" id="title" name="title" class="form-control" value="{{$data->title}}" required>
    </div>

    <div class="form-group">
        <label for="description">Description:</label>
        <textarea id="description" name="description" class="form-control" rows="4" required> {{$data->description}}</textarea>
    </div>

    <div class="form-group">
        <label for="date">Date:</label>
        <input type="date" id="date" name="date" class="form-control" value="{{$data->date}}" required>
    </div>

    <div class="form-group">
        <label for="venue">Venue:</label>
        <input type="text" id="venue" name="venue" class="form-control" value="{{$data->venue}}" required>
    </div>

    <div class="form-group">
        <label for="organizer">Organizer:</label>
        <input type="text" id="organizer" name="organizer" class="form-control" value="{{$data->organizer}}" required>
    </div>

    <div class="form-group">
        <label for="event_pic"> Picture:</label>
        <img src="/profile_pic/{{$data->pro_pic}}" onerror="this.src='/template/img/carousel-3.png'" alt="User profile picture" style="height: 50px;  width: 100px;">
        <input type="hidden" name="existing_image" accept="image/*" class="form-control-file" value="{{$data->event_pic}}" required>
    </div>
        <input type="file" id="profile_pic" name="event_pic" accept="image/*" class="form-control-file" required>
        <input type="hidden" id="name" name="record_id" value="{{$data->id}}" class="form-control-file" required>

    <button type="submit" class="btn btn-primary">Edit Event</button>
</form>
