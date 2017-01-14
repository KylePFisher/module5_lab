<!DOCTYPE html>
<html>
<head lang="en">
   <meta charset="utf-8">
   <title>Age Message</title>
   <link rel="stylesheet" href="reset.css" />
   <link rel="stylesheet" href="age.css" />
</head>

<body>
    
<header>
  <hgroup>
     <h1>Personalized advice just for you</h1>
  </hgroup>
</header>

<article>

<?php
  session_start();
 
 echo "<p>" . $_SESSION['ageMessage'] . "</p>";
  
?>

</article>

<!-- TODO:  Add code to render the same footer as it appears on the home page. -->
<?php
include "age-footer.php";
?>

</body>
</html>