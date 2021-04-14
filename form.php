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
$age = $_POST['age'];
$gender = $_POST['gender'];
$place = $_POST['place'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$address = $_POST['address'];
$sql = "INSERT INTO `travelfrom`.`form` (`Name`, `Age`, `Gender`, `Place`, `E-Mail`, `Phone Number`, `Address`) VALUES ('$name', '$age', '$gender', '$place', '$email', '$phone', '$address'); ";

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
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>FORM|Fill The Form For Your Tour</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/form.css?<?php echo time(); ?>">
        <link rel="stylesheet" href="css/footer.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
        <link rel="stylesheet" href="assets/css/style.css">
        <link rel="stylesheet" href="css/scrollbar.css?<?php echo time(); ?>">
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
        <div class="form">
            <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                <input type="text" name="name" id = "name" placeholder="NAME"><br>
                <select id="age" name="age">
                    <option value="age">--AGE--</option>
                    <option value="">5</option>
                    <option value="">6</option>
                    <option value="">7</option>
                    <option value="">8</option>
                    <option value="">9</option>
                    <option value="">10</option>
                    <option value="">11</option>
                    <option value="">12</option>
                    <option value="">13</option>
                    <option value="">14</option>
                    <option value="">15</option>
                    <option value="">16</option>
                    <option value="">17</option>
                    <option value="">18</option>
                    <option value="19">19</option>
                    <option value="20">20</option>
                    <option value="21">21</option>
                    <option value="22">22</option>
                    <option value="23">23</option>
                    <option value="24">24</option>
                    <option value="25">25</option>
                    <option value="26">26</option>
                    <option value="">27</option>
                    <option value="">28</option>
                    <option value="">29</option>
                    <option value="">30</option>
                    <option value="">31</option>
                    <option value="">32</option>
                    <option value="">33</option>
                    <option value="">34</option>
                    <option value="">35</option>
                    <option value="">36</option>
                    <option value="">37</option>
                    <option value="">38</option>
                    <option value="">39</option>
                    <option value="">40</option>
                    <option value="">41</option>
                    <option value="">42</option>
                    <option value="">43</option>
                    <option value="">44</option>
                    <option value="">45</option>
                    <option value="">46</option>
                    <option value="">47</option>
                    <option value="">48</option>
                    <option value="">49</option>
                    <option value="50">50</option>
                    <option value="">51</option>
                    <option value="">52</option>
                </select><br>
                <select id="gender" name="gender">
                    <option value="Gender">Gender</option>
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                    <option value="transgender">Transgender</option>
                </select>
                <select id="place" name="place">
                    <option value="SelectPlace">---Select Place---</option>
                    <option value="Kedarnath">KEDARNATH</option>
                    <option value="manali">MANALI</option>
                    <option value="rishikesh">RISHIKESH</option>
                    <option value="dehradun">DEHRADUN</option>
                </select>
                <input type="text" name="email" id = "email" placeholder="E-MAIL"><br><br>
                <input type="tel" name="phone" id = "phone" placeholder="PHONE NUMBER" maxlength="10"><br><br>
                <input type="text" name="address" id = "address" placeholder="ADDRESS"><br><br>
                <input type="submit" class="btn" id = "btn" value = "CHECK OUT"></input>
            </form>
        </div>
        <div class="footer-dark">
            <footer>
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6 col-md-3 item">
                            <h3>Services</h3>
                            <ul>
                                <li><a href="#">Tour & Travels</a></li>
                                <li><a href="#">Web Development</a></li>
                                <li><a href="#">Rail Tickets</a></li>
                            </ul>
                        </div>
                <div class="col-sm-6 col-md-3 item">
                    <h3>About</h3>
                    <ul>
                        <li><a href="#">Company</a></li>
                        <li><a href="#">Team</a></li>
                        <li><a href="#">Careers</a></li>
                    </ul>
                </div>
                <div class="col-md-6 item text">
                    <h3>Ghumte Raho</h3>
                    <p>Praesent sed lobortis mi. Suspendisse vel placerat ligula. Vivamus ac sem lacus. Ut vehicula rhoncus elementum. Etiam quis tristique lectus. Aliquam in arcu eget velit pulvinar dictum vel in justo.</p>
                </div>
                <div class="col item social"><a href="#"><i class="icon ion-social-facebook"></i></a><a href="#"><i class="icon ion-social-twitter"></i></a><a href="#"><i class="icon ion-social-snapchat"></i></a><a href="#"><i class="icon ion-social-instagram"></i></a></div>
                </div>
                <p class="copyright">Ghumte Raho © 2021</p>
            </div>
        </footer>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>
    </body>
</html>



