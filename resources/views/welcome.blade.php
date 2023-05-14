<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="welcome.css">
    <title>Revving Up!</title>
</head>
<body>
<div class="container">
    <button class="centered-button" id="signup-button" onclick="toggleForm()">Click Me</button>
</div>
<div id="signup-form" class="signup-form">
  Add your sign-up form HTML code here
  <h2>Sign Up</h2>
  <form>
  Form fields and submit button
    <label for="name">Name:</label>
    <input type="text" id="name" name="name" required><br><br>

    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required><br><br>

    <label for="password">Password:</label>
    <input type="password" id="password" name="password" required><br><br>

    <button type="submit">Submit</button>
  </form>
</div>

<script>
    function toggleForm() {
      var button = document.getElementById('signup-button');
      var form = document.querySelector('.signup-form');

      if (form.style.display === 'none') {
        // Show the form and hide the button
        form.style.display = 'block';
        button.style.display = 'none';
      } else {
        // Hide the form and show the button
        form.style.display = 'none';
        button.style.display = 'block';
      }
    }
  </script>

</body>
</html> -->



<!-- The end -->

<!-- <!DOCTYPE html>
<html>
<head>
  <title>Button Example</title>
  <style>
    .signup-form {
      display: none;
      /* Add your styles for the sign-up form here */
    }
  </style>
 -->

 <!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="welcome.css">
</head>
<body>
<div class="container">
  <div class="button" onclick="openForm()">Click me</div>
  <div class="form-popup" id="myForm">
    <form action="/action_page.php" class="form-container">
      <h1>Sign Up</h1>
      <label for="email"><b>Email</b></label>
      <input type="text" placeholder="Enter Email" name="email" required>
      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="psw" required>
      <button type="submit" class="btn">Sign Up</button>
      <button type="button" class="btn cancel" onclick="closeForm()">Close</button>
    </form>
  </div>
</div>
  
  <script src="welcome.js"></script>
</body>
</html>

<!-- HTML code -->
