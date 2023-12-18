<!-- login.html -->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <title>Login</title>
  <style>
    /* body {
      background-color: black;
      color: white;
    } */

    

 
   
  </style>
</head>

<body>
<div class="container">
  <!-- Content here -->
</div>
  <nav class="navbar navbar-expand-lg text-bg-secondary py-3  ">
   
      <b class="navbar-brand   text-white  px-2">
        My Website
      </b>
    
  </nav>

  <div class="container p-5">
    <div class="row justify-content-center  p-5">
      <div class="col-lg-4 col-md-6 col-sm-8 border   mb-2 text-bg-dark p-3">
        <h1>Login</h1>
        <form>
          <div class="mb-3">
            <label for="email" class="form-label">Email address</label>
            <input type="email" class="form-control" id="email">
          </div>
          <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" id="password">
          </div>
          <button type="submit" class="btn btn-primary">Submit</button>
        </form>
        <hr>
        <p>Don't have an account? <a href="account.php">Create one</a></p>
      </div>
    </div>
  </div>

  <footer class="footer text-bg-secondary text-center">
    <div class="container p-3">
      <p>&copy; 2023 My Website. All rights reserved.</p>
    </div>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>