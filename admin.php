  
<html>
<head>
<title></title>
<link href="style.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
</head>
<body>

<section>
    <h4> Admin Login</h4>
    <form class="form" action="login.php" method="POST">
      <label for="name">Name:</label>
      <input type="text" placeholder="Enter Username" name="name"><br>

      <label for="email">Email address:</label>
      <input type="email" class="form-control" placeholder="Enter email" name="email"><br>
  
      <label for="password">Password:</label>
      <input type="password" class="form-control" placeholder="Enter password" name="pass" >
  <div class="form-check">
    
    <label class="form-check-label">
      <input class="form-check-input" type="checkbox"> Remember me
    </label>

    <input type="submit" name="submit"  class="btn btn-primary" style="width: 250px;">
  </div>&nbsp;&nbsp;
 
</form>
<br>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>

</body>