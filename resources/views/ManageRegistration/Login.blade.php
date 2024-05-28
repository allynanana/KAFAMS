<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
       .form-container {
            max-width: 500px;
            margin: auto;
            background-color: #d9e7c1; /* Added background color */
            padding: 50px; /* Added padding */
            border-radius: 8px; /* Optional: add rounded corners */
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); /* Optional: add a slight shadow */
        }
        .header-image {
            display: block;
            margin: 20px auto;
            max-width: 100px;
        }

       

    </style>
</head>
<body>
    <div class="container mt-5 form-container">
        <img src="{{ asset('assets/logo2.png') }}" alt="Header Image" class="header-image" width="600" height="100" >
        <h2 class="text-left">Login</h2>
        <form>
            
            <div class="form-group">
                <label for="ICNumber">IC Number:</label>
                <input type="text" class="form-control" id="ICNumber" name="ICNumber">
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" class="form-control" id="password" name="password">
            </div>
          
      
            <div class="form-row">
                
                    <button type="submit" class="btn btn-primary btn-block">Login</button>
               
                    <a href="ForgotPassword.php" class="btn btn-link btn-block">Forgot Password?</a>

                    <hr style="width: 100%; height: 2px; background-color: #808080; border: none;">

                    <button type="button" class="btn btn-success btn-block">Create new account ?</button>
                
            </div>
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
