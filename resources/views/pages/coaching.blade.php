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

<form action="/coachingpost" method="POST" enctype="multipart/form-data" class="my-form">
        <h2>Add Tools</h2>
    @csrf

    <div class="form-group">
        <label for="pic">Picture</label>
        <input type="file" id="pic" name="pro_pic" accept="image/*" class="form-control-file" required>
    </div>

    <div class="form-group">
        <label for="name">Coaching Tools</label>
        <textarea id="coaching" name="coaching" class="form-control" rows="4" required></textarea>
    </div>

    <div class="form-group">
        <label for="texts">Facilities </label>
        <textarea id="facility" name="designation" class="form-control" rows="4" required></textarea>
    </div>


    <button type="submit" class="btn btn-primary">Submit</button>
</form>
