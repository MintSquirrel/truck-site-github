<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Connection to database
include('config/db_connect.php');
//Requirements!
require 'vendor/phpmailer/phpmailer/src/Exception.php';
require 'vendor/phpmailer/phpmailer/src/PHPMailer.php';
require 'vendor/phpmailer/phpmailer/src/SMTP.php';

// Setting up variables to send to SQL
$cname = $address = $city = $state =
  $zip = $phone = $email = $bill_info = $credit = '';

$errors = array('cname' => '', 'address' => '',
'city' => '', 'state' => '', 'zip' => '',
'phone' => '', 'email' => '', 'bill_info' => '','credit' => '');

// Some minor error checking
// we could use an array and a loop for this couldn't we..
if(isset($_POST['submit'])){

  if(empty($_POST['cname'])){
    $errors['cname'] = 'Entering a name is required.';
  } else {
    $cname = $_POST['cname'];
  }

  if(empty($_POST['address'])){
    $errors['address'] = 'Entering a address is required.';
  } else {
    $address = $_POST['address'];
  }

  if(empty($_POST['city'])){
    $errors['city'] = 'Entering a city is required.';
  } else {
    $city = $_POST['city'];
  }

  if(empty($_POST['state'])){
    $errors['state'] = 'Entering a state is required.';
  } else {
    $state = $_POST['state'];
  }

  if(empty($_POST['zip'])){
    $errors['zip'] = 'Entering a zip is required.';
  } else {
    $zip = $_POST['zip'];
  }

  if(empty($_POST['phone'])){
    $errors['phone'] = 'Entering a phone number is required.';
  } else {
    $zip = $_POST['phone'];
  }

  if(empty($_POST['email'])){
    $errors['email'] = 'Entering a email is required.';
  } else {
    $zip = $_POST['email'];
  }

  if(empty($_POST['bill_info'])){
    $errors['bill_info'] = 'Entering bill info is required.';
  } else {
    $zip = $_POST['bill_info'];
  }

  if(empty($_POST['credit'])){
    $errors['credit'] = 'Entering credit info is required.';
  } else {
    $zip = $_POST['credit'];
  }


  // Send to database if there's no error
  if(array_filter($errors)){
    //error!!!
    mysqli_close($conn); // close connection if there's issues
  } else{

    //get rid of characters that shouldnt' be here
    $cname = mysqli_real_escape_string($conn, $_POST['cname'] );
    $address = mysqli_real_escape_string($conn, $_POST['address'] );
    $city = mysqli_real_escape_string($conn, $_POST['city'] );
    $state = mysqli_real_escape_string($conn, $_POST['state'] );
    $zip = mysqli_real_escape_string($conn, $_POST['zip'] );
    $phone = mysqli_real_escape_string($conn, $_POST['phone'] );
    $email = mysqli_real_escape_string($conn, $_POST['email'] );
    $bill_info = mysqli_real_escape_string($conn, $_POST['bill_info'] );
    $credit = mysqli_real_escape_string($conn, $_POST['credit'] );

    //create sql to send to server
    $sql = "INSERT INTO customers(cname,address,city,state,zip,phone,email,bill_info,credit) VALUES('$cname',
      '$address','$city','$state','$zip','$phone','$email','$bill_info','$credit')";

      //send to db and then check it by sending to testing page
      if(mysqli_query($conn,$sql)){
        //successful!
        mysqli_close($conn);
        header('Location: successful_submission.php');


        //Send create and send email to admin
        $mail = new PHPMailer();
        $mail->IsSMTP();
        $mail->Mailer = "smtp";
        $mail->SMTPDebug  = 1;
        $mail->SMTPAuth   = TRUE;
        $mail->SMTPSecure = "tls";
        $mail->Port       = 587;
        $mail->Host       = "smtp.gmail.com";
        //The gmail username and password
        $mail->Username   = "roadrunnersemaildemount@gmail.com";
        $mail->Password   = "Roadrunners!1";
        $mail->IsHTML(true);
        //recipient address
        //MORE CAN BE ADDED
        //$mail->AddAddress("recipientemail", "recipient-name");
        $mail->AddAddress("roadrunnersemaildemount@gmail.com", "recipient-name");
        //sender name
        $mail->SetFrom("roadrunnersemaildemount@gmail.com", "Roadrunners");
        // Reply link (probably not needed)
        $mail->AddReplyTo("roadrunnersemaildemount@gmail.com", "do-not-reply");
        //Subject
        $mail->Subject = $cname . " 's Customer Application";
        //Email content
        $content = "
        <b>First Name + Last Name: </b>$cname <br>
        <b>Address: </b>$address <br>
        <b>City: </b>$city <br>
        <b>State: </b>$state <br>
        <b>Zip Code: </b>$zip <br>
        <b>Phone Number: </b>$phone <br>
        <b>Email: </b>$email <br>
        <b>Billing: </b>$bill_info <br>
        <b>Credit: </b>$credit
        ";

        $mail->MsgHTML($content);
        if(!$mail->Send()) {
          //error happened when sending mail
        } else {
          //mail sent successfully
        }

      } else {
        echo 'query error: ' . mysqli_error($conn);
        mysqli_close($conn);
      }

    }
  }
?>
<!--apply page for customers to rent a truck -->

<!DOCTYPE html>
<html>
    <?php include('templates/header.php'); ?>
        <title></title>
        <link rel="stylesheet" type="text/css" href="css/style.css" />
    </head>
    <style>
        .customer{
  color: #FFFFFF;
  font-family: calibri;
  border: 10px grey;
  font-size: 30px;
  text-align: center;
  background: #7399D5;
}

      .label{
        font-size: 20px;
        color: #000000;
        text-align: left;
        display: block;
      }


      .apply-form {
        width: 50%;
        margin: 0 auto;
        font-family: Tahoma, Geneva, sans-serif;
      }
    </style>
    <body>
    <div class="customer">
      Customer Information Sheet
    </div>
        <form class="apply-form" action="applycustomer.php" method="POST">
          <br>
            <label for="cname" class="label">Name:</label>
            <input type="text" id="cname" name="cname"  value="<?php echo htmlspecialchars($cname) ?>" ><br><br>
            <div class="red-text"><?php echo $errors['cname']; ?></div>

            <label for="address" class="label">Address:</label>
            <input type="text" id="address" name="address" value="<?php echo htmlspecialchars($address) ?>" ><br><br>
            <div class="red-text"><?php echo $errors['address']; ?></div>

            <label for="city" class="label">City:</label>
            <input type="text" id="city" name="city" value="<?php echo htmlspecialchars($city) ?>" ><br><br>
            <div class="red-text"><?php echo $errors['city']; ?></div>

            <label for="state" class="label">State:</label>
            <input type="text" id="state" name="state" value="<?php echo htmlspecialchars($state) ?>" ><br><br>
            <div class="red-text"><?php echo $errors['state']; ?></div>

            <label for="address" class="label">Zip Code:</label>
            <input type="number" id="zip" name="zip" value="<?php echo htmlspecialchars($zip) ?>" ><br><br>
            <div class="red-text"><?php echo $errors['zip']; ?></div>

            <label for="phone" class="label">Phone Number:</label>
            <input type="tel" id="phone" name="phone" value="<?php echo htmlspecialchars($phone) ?>" ><br><br>
            <div class="red-text"><?php echo $errors['phone']; ?></div>

            <label for="email" class="label">Email Address:</label>
            <input type="email" id="email" name="email" value="<?php echo htmlspecialchars($email) ?>" ><br><br>
            <div class="red-text"><?php echo $errors['email']; ?></div>

            <label for="bill_info" class="label">Billing Info:</label>
            <input type="text" id="bill_info" name="bill_info" value="<?php echo htmlspecialchars($bill_info) ?>" ><br><br>
            <div class="red-text"><?php echo $errors['bill_info']; ?></div>

            <label for="credit" class="label">Credit Info:</label>
            <input type="text" id="credit" name="credit" value="<?php echo htmlspecialchars($credit) ?>" ><br><br>
            <div class="red-text"><?php echo $errors['credit']; ?></div>

            <center><input type="submit" name="submit" class="btn brand z-depth-0" value="Submit"></center><br>
        </form>
    </body>

    <?php include('templates/footer.php'); ?>



</html>
