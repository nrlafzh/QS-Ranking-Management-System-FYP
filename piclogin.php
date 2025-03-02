<!DOCTYPE html>
<html lang="en">

<head>

    <link rel="stylesheet" href="login.css">

    <title>Login</title>
    <link rel = "icon" href = "qs.jpeg" type = "image/x-icon">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" charset="utf-8"></script>
</head>



<body class="align">

    <div class="grid">
  
      <form action="/" method="post" class="form login" action="">
        
        <header class="login__header">
            <div class="imgcontainer">
                <img src="logoqs.jpeg" alt="Avatar" class="avatar">
            </div>
          <h3 class="login__title">Login</h3>
        </header>
        
        <div class="login__body">
  
          <div class="form__field">
            <input type="username" name="user" placeholder="Username">
          </div>
  
          <div class="form__field">
            <input type="password" name= "pass" placeholder="Password">
          </div>
  
        </div>
  
        <footer class="login__footer">
          <button type="submit" value="Login"><a href="picdashboard.php">Login</button>
        </footer>
  
      </form>
  
    </div>
  
  </body>

</html>