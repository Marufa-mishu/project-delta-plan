<?php
include "include/dbcon.php";
$fname=$email=$nationality=$comment=$status="";

if($_SERVER["REQUEST_METHOD"] == "POST")
{
    if(!empty($_POST['name']))
    {
        $fname=$_POST['name'];
    }

    if(!empty($_POST['email']))
    {
        $email=$_POST['email'];
    }

    if(!empty($_POST['nationality']))
    {
        $nationality=$_POST['nationality'];
    }

    if(!empty($_POST['comment']))
    {
        $comment=$_POST['comment'];
    }

    $query="INSERT INTO `comments` (`id`, `full_name`, `email`, `nationality`, `comment`) VALUES (NULL, '$fname', '$email', '$nationality', '$comment')";
    mysqli_query($conn,$query);

    $status="Feedback Sent.";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BDP 2100 Feedback</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>


    <div class="topnav" id="myNav">
        <a href="index.html">Home</a>
        <a href="vision.html">Vision</a>
        <a href="strategy.html">Strategy & Plan</a>
        <a href="opportunity.html">Opportunity</a>
        <a href="#" class="active">Feedback</a>
        <a href="javascript:void(0);" class="icon" onclick="toggleMenu()">
          <i class="fa fa-bars"></i> </a>
    </div>


      <div class="general-section">
        <h1>Feedback and Review</h1>
      </div>
      <div class="container">
        <p class="para">
            Please let us know what is your opinion about Bangladesh Delta Plan 2100. 
            What other steps do you think the government of Bangladesh should take for the proper implementation of this plan?
            Your every comment is important to us.
            Give your feedback by filling out the following information to save your valuable feedback.  
        </p>

        <hr>
        </div>
        <form method="post" action="feedback.php">
        <div class="review">
            <form action="form.php" method="post">
                <h4 style="color: green;"><?php echo $status; ?> </h4>
                <label for="Full Name" >Full Name :</label><br>
                <input type="text" name="name" id="Full Name" placeholder="Enter your full name" required>
                <p></p>
                <label for="E-mail ID" >E-mail ID :</label><br>
                <input type="email" name="email" id="E-mail ID" placeholder="Enter your E-mail address" required>
                <p></p>
                <label for="Nationality" >Nationality :</label><br>
                <input type="text" name="nationality" id="Nationality" placeholder="Enter your nationality" required>
                <p></p>
                <label for="Comment" >Comment :</label><br>
                <textarea name="comment" id="Comment" placeholder="Write your comment here" required></textarea>
                <p></p>
                <input type="submit" value="Send">
                <input type="reset" value= "Reset">

            </form>

          </div>
          <div class="footer">
            <p>Developed by &copy; <i>Marufa Yeasmin Mishu</i></p>
        </div>
        <script src="/scripts/index.js"></script>
</body>
</html>