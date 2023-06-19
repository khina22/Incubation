<style>
    .feedback-form {
        max-width: 500px;
        margin: 0 auto;
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 5px;
        background-color: #f9f9f9;
        margin-top: 50px;
    }

    .feedback-form h2 {
        text-align: center;
        margin-bottom: 20px;
        color: #333;
    }

    .feedback-form label {
        display: block;
        margin-bottom: 10px;
        font-weight: bold;
    }

    .feedback-form input[type="text"],
    .feedback-form input[type="email"],
    .feedback-form input[type="tel"],
    .feedback-form textarea {
        width: 100%;
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 4px;
        font-size: 16px;
        color: #555;
    }

    .feedback-form textarea {
        resize: vertical;
        height: 120px;
    }

    .feedback-form button[type="submit"] {
        display: block;
        padding: 10px;
        margin-top: 10px;
        background-color: #007bff;
        color: #fff;
        border: none;
        border-radius: 4px;
        font-size: 16px;
        cursor: pointer;
    }

    .feedback-form button[type="submit"]:hover {
        background-color: #0056b3;
    }
</style>
@include('common.header')
@include('common.css')

<form action="/feedbackpost" method="POST" class="feedback-form">
    <h2>Feedback </h2>
    @csrf

    <div class="form-group">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" placeholder="Enter your name" required>
    </div>

    <div class="form-group">
        <label for="contact_no">Contact Number:</label>
        <input type="tel" id="contact_no" name="contact_no" placeholder="Enter your contact number" required>
    </div>

    <div class="form-group">
        <label for="email">Email Address:</label>
        <input type="email" id="email" name="email" placeholder="Enter your email address" required>
    </div>

    <div class="form-group">
        <label for="feedback">Your Feedback:</label>
        <textarea id="feedback" name="feedback" placeholder="Enter your feedback" required></textarea>
    </div>
    
    <button type="submit">Submit Feedback</button>
</form>
@include('common.footer')

