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

<form action="/eventpost" method="POST" class="my-form">
    <h2>Add Event</h2>
    @csrf

    <div class="form-group">
        <label for="title">Title:</label>
        <input type="text" id="title" name="title" class="form-control" required>
    </div>

    <div class="form-group">
        <label for="description">Description:</label>
        <textarea id="description" name="description" class="form-control" rows="4" required></textarea>
    </div>

    <div class="form-group">
        <label for="date">Date:</label>
        <input type="date" id="date" name="date" class="form-control" required>
    </div>

    <div class="form-group">
        <label for="venue">Venue:</label>
        <input type="text" id="venue" name="venue" class="form-control" required>
    </div>

    <div class="form-group">
        <label for="organizer">Organizer:</label>
        <input type="text" id="organizer" name="organizer" class="form-control" required>
    </div>

    <div class="form-group">
        <label for="profile_pic"> Picture:</label>
        <input type="file" id="profile_pic" name="event_pic" accept="image/*" class="form-control-file" required>
    </div>

    <button type="submit" class="btn btn-primary">Add Event</button>
</form>
