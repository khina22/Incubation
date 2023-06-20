<!DOCTYPE html>
<html>
<head>
    <title>Responsive Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
        }
        
        .form-container {
            max-width: 600px;
            margin: 0 auto;
            background-color: #f2f2f2;
            padding: 20px;
        }
        
        .form-container h2 {
            text-align: center;
        }
        
        .form-group {
            margin-bottom: 20px;
        }
        
        .form-group label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
        }
        
        .form-group input,
        .form-group textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
            font-size: 16px;
        }
        
        .form-group textarea {
            height: 100px;
        }
        
        .form-group input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            cursor: pointer;
        }
        
        @media (max-width: 768px) {
            .form-container {
                max-width: 100%;
            }
        }
    </style>
</head>
@include('common.css');
@include('common.header');
<body>
    <div class="form-container">
        <h2>Application Form</h2>
        <form action="/applicationpost" method="POST"  enctype="multipart/form-data" >
            @csrf
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="contact_no">Contact Number</label>
                <input type="tel" id="contact_no" name="contact_no" required>
            </div>
            <div class="form-group">
                <label for="business_title">Business Title</label>
                <input type="text" id="business_title" name="business_title" required>
            </div>
            <div class="form-group">
                <label for="description">Description of your business idea</label>
                <textarea id="description" name="description" required></textarea>
            </div>
            <div class="form-group">
                <label for="potential_customers">Who are your potential customers? what marketing tools will you use to ell your products or service</label>
                <textarea type="text" id="potential_customers" name="potential_customers" required></textarea>
            </div>
            <div class="form-group">
                <label for="competitors">Are there competetors for this business? what is your unfair advantage?</label>
                <textarea type="text" id="competitors" name="competitors" required></textarea>
            </div>
            <div class="form-group">
                <label for="survey">Have you done a market and customer survey?if yes, briefly describe the method and results saperately for markey and consumer.</label>
                <textarea type="text" id="survey" name="survey" required></textarea>
            </div>
        
            <div class="form-group col-3 text-center mx-auto">
                <input type="submit" value="Submit">
            </div>
        </form>
          <!-- Display success message -->
      @if (session('success'))
        <div class="alert alert-success">
          {{ session('success') }}
        </div>
      @endif
    </div>
</body>
@include('common.footer');
</html>
