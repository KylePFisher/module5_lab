<!DOCTYPE html>
<html>

<head lang="en">
   <meta charset="utf-8">
   <title>Age Entry</title>
   <link rel="stylesheet" href="reset.css" />
   <link rel="stylesheet" href="age.css" />
</head>

<body>

<header>
  <hgroup>
     <h1>Get advice for your age</h1>
  </hgroup>

</header>

<article>

<form action="age-msg-controller.php" method="POST">
    <p>Enter your age:</p>
    <input type="text" name="age">
    <input type="submit" value="Submit">
</form>
 
</article>

<?php require 'age-footer.php';?> 

</body>
</html>