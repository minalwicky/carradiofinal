<!DOCTYPE html>
<html>
    <head>
    
    <meta name="viewport" content="width=device-width , initial-scale=1">
    <link rel="stylesheet" href="loginstyle.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Oswald:wght@500&display=swap" rel="stylesheet">
    <script src="loginpage.js"></script>
    </head>
    <body>
        <h1 id="loginheader">CARRADIO LOGIN</h1>
        <form action="logincheck.php" method="post" onsubmit="return validate(this)">
            
            <br>
            <br>
             
            
          
            <div class="container" id="loginback">
              <label for="email"><b>Email</b></label>
              <input type="text" placeholder="Enter email" name="email" required>
              <label for="uname"><b>Username</b></label>
              <input type="text" placeholder="Enter Username" name="uname" required>
          
              <label for="psw"><b>Password</b></label>
              <input type="password" placeholder="Enter Password" name="psw" required>
                  
              <button type="submit">Login</button>
              <label>
                <input type="checkbox" checked="checked" name="remember"> Remember me
              </label>
            </div>
          
            <div class="container" id="cancelback">
              <button type="button" class="newbtn" onclick="window.location.href='signup.php';">New account</button>
              <button type="button" class="cancelbtn" onclick="window.location.href='index.html';">Cancel</button>
              <span class="psw">Forgot <a href="#">password?</a></span>
              
            </div>
          </form> 
          

    </body>
</html>