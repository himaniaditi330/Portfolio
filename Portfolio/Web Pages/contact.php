<!DOCTYPE html>
<html lang="en">
<head>
<title>Home</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<!-- css -->
<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />

<!-- header-->
<link type="text/css" rel="stylesheet" href="css/header.css">

<!-- side-->
<link type="text/css" rel="stylesheet" href="css/side.css">


<!-- Footer -->
<link type="text/css" rel="stylesheet" href="css/footer.css">




</head>
<body>

<!-- Include header bar-->
  <?php include 'header.php';?>


<!-- Include navigation bar-->
 <div class="navbar">
  <a href="home.php" ><i class="fa fa-fw fa-home"></i>&nbsp Home</a>
  <a href="reInt.php" ><i class="fa fa-fw fa-book"></i>&nbsp Reseach Interests</a>
  <a href="experience.php" ><i class='fa fa-fw fa-briefcase'></i>&nbsp Experience</a>
  <a href="edu.php"><i class="fa fa-fw fa-graduation-cap"></i>&nbsp Education</a>
  <a href="AP.php"><i class='fa fa-fw fa-trophy'></i>&nbsp Awards and Publications</a>
  <a href="CR.php" ><i class='fa fa-fw fa-handshake-o'></i>&nbsp Conferences & Reviews</a>
  <a href="talk.php"><i class='fa fa-fw fa-microphone'></i>&nbsp Talks</a>
  <a href="contact.php" class="active"><i class='fa fa-fw fa-phone'></i>&nbsp Contact Details</a>
  
</div>
 


<div class="row">

<!-- Include side bar-->
  <?php include 'side.php';?>
  
  <div class="main">
    
    
  </div>
</div>

<!-- Include footer bar-->
  <?php include 'footer.php';?>

</body>
</html>
