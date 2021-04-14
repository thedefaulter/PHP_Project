<?php
if(isset($_POST['name'])){
$server = "localhost";
$username = "root";
$password = "";

$con = mysqli_connect($server, $username, $password);

if(!$con){
    die("connection to this database failed due to". mysqli_connect_error());
}
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
/*$sql = "INSERT INTO `travelfrom`.`form` (`Name`, `E-Mail`, `message`) VALUES ('$name',  '$email',  '$message'); ";
*/
$sql = "INSERT INTO `contact_us`.`form` (`Name`, `Email`, `Message`) VALUES ('$name',  '$email',  '$message');";

if($con->query($sql) == true){
    //echo $sql;
}
else{
    echo "Error: $sql <br> $con->error";
}
$con->close();
}
?>

<!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
  <title>CONTACT US | FEEL FREE TO SHOUT US</title>
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
  <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
  <link href="https://fonts.googleapis.com/css?family=Oswald:700|Patua+One|Roboto+Condensed:700" rel="stylesheet">
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
  <link rel="stylesheet" href="css/contact.css?<?php echo time(); ?>">
</head>
<body>
    <div class="header">
        <img src="https://i.postimg.cc/mg4rWBmv/logo.png" alt="">
        <ul>
            <li><a href="index.php">HOME</a></li>
            <li><a href="aboutUs.php">ABOUT</a></li>
            <li><a href="newcontact2.php">CONTACT</a></li>
        </ul>
    </div>
<section id="contact" class="content-section text-center">
        <div class="contact-section">
            <div class="container">
              <h2>Contact Us</h2>
              <p>Feel free to shout us by feeling the contact form or visiting our social network sites like Fackebook,Whatsapp,Twitter.</p>
          <form method="POST">
              <div class="row">
                <div class="col-md-8 col-md-offset-2">
                  <form class="form-horizontal">
                    <div class="form-group">
                      <label for="exampleInputName2">Name</label>
                      <input type="text" class="form-control" name="name" id="exampleInputName2" placeholder="YOUR NAME">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail2">Email</label>
                      <input type="email" class="form-control" name="email" id="exampleInputEmail2" placeholder="YOUR E-MAIL">
                    </div>
                    <div class="form-group ">
                      <label for="exampleInputText">Your Message</label>
                     <textarea  class="form-control" name="message" placeholder="Description"></textarea> 
                    </div>
                    <button type="submit" class="btn btn-default">Send Message</button>
                  </form>
          </form>
                  <hr>
                    <h3>Our Social Sites</h3>
                  <ul class="list-inline banner-social-buttons">
                    <li><a href="#" class="btn btn-default btn-lg"><i class="fa fa-twitter"> <span class="network-name">Twitter</span></i></a></li>
                    <li><a href="#" class="btn btn-default btn-lg"><i class="fa fa-facebook"> <span class="network-name">Facebook</span></i></a></li>
                    <li><a href="#" class="btn btn-default btn-lg"><i class="fa fa-youtube-play"> <span class="network-name">Youtube</span></i></a></li>
                  </ul>
                </div>
              </div>
            </div>
        </div>
      </section>




</body>
</html>