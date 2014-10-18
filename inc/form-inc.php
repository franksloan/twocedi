<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = trim($_POST["name"]);
  $email = trim($_POST["email"]);
  $request = trim($_POST["request"]);

  if ($name == "" OR $email == "" OR $request == "") {
  echo "Please give us your name and email";
  exit;
  }

  foreach( $_POST as $value ){
    if(stripos($value, 'Content-Type:') !== FALSE){
      echo "Please try again, there was a problem";
      exit;
    }
  }

  if ($_POST["address"] != ""){
    echo "Your form submission has an error";
    exit;
  }

  require_once("inc/class.phpmailer.php");
  $mail = new PHPMailer();

  if (!$mail->ValidateAddress($email)){
    echo "Please give us a valid email address.";
    exit;
  }

  $email_body = "";
  $email_body = $email_body . "Name: " . $name . "<br>";
  $email_body = $email_body . "Email: " . $email . "<br>";
  $email_body = $email_body . "Request or order: " . $request;
  // echo $email_body;

// Set up email with SMTP and Postmark

  $mail->IsSMTP();
  $mail->SMTPAuth = true;
  $mail->Host = "smtp.postmarkapp.com";
  $mail->Port = 25;
  $mail->Username = "1b20bf4d-ea6f-4f8a-a7ae-ef6b5e4d54fc";
  $mail->Password = "1b20bf4d-ea6f-4f8a-a7ae-ef6b5e4d54fc";

// Send email

  $address = "eli@twocedi.com";
  $mail->SetFrom($address,$name);
  $mail->AddAddress("twocedi@gmail.com", "two cedi");
  $mail->Subject = "Two Cedi Contact - " . $name;
  $mail->MsgHTML($email_body);

  if(!$mail->Send()) {
    echo "There was a problem sending the email: " . $mail->ErrorInfo;
    exit;
  } else {

    header("Location: contact-thanks.php");
    exit;
  }

  }
  ?>

<!-- FORM - pops up on click -->
    <div class="modal fade" id="textModal">
      <div class="modal-dialog">
        <div class="modal-content">

          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title">Email</h4>
          </div>

          <div class="modal-body">
            <form class="form" method="post">
              <div class="row">
                <div class="form-group col-xs-6">
                  <label class="sr-only" for="name">Name</label>
                  <input type="text" class="form-control" name="name" id="name" placeholder="Name">
                </div>

                <div class="form-group col-xs-6">
                  <label class="sr-only" for="email">Email</label>
                  <input type="email" class="form-control" name="email" id="email" placeholder="Email">
                </div>
                <div class="form-group col-xs-6" style="display: none">
                  <label class="sr-only" for="address">Address</label>
                  <input type="text" class="form-control" name="address" id="address" placeholder="Humans: Please leave blank">
                </div>
              </div>
              <div class="form-group">
                <label class="sr-only" for="request">Requests</label>
                <textarea type="text" class="form-control" name="request" id="request" placeholder="Please let us know what you think or submit an order and I will get back to you"></textarea>
              </div>
              <div class="form-group">
              </div>
              <button type="submit" class"btn btn-success"><i class="fa fa-envelope"></i> Send</button>
            </form>
          </div>

        </div>
      </div>
    </div>