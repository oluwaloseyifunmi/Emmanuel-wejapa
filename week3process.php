

<?php

  $firstname_error = $lastname_error = $email_error = $dob_error = $favcolor_error = $gender_error
  = $department_error = $password_error = $cpassword_error = "";
  $firstname = $lastname = $email = $dob = $favcolor = $gender = $department = $password = $cpassword = $success = "";

  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["firstname"])) {
      $firstname_error = "Field cannot be blank";
    } else {
      $firstname = test_input($_POST["firstname"]);
      if (!preg_match("/^[a-zA-Z]*$/", $firstname)) {
        $firstname_error = "Only letters are allowed";
      }
    }

    if (empty($_POST["lastname"])) {
       $lastname_error = "Field cannot be blank";
    } else {
      $lastname = test_input($_POST["lastname"]);
      if (!preg_match("/^[a-zA-Z]*$/", $lastname)) {
        $lastname_error = "Only letters are allowed";
      }
     }

     if (empty($_POST["email"])) {
      $email_error = "Email is required";
    } else {
       $email = test_input($_POST["email"]);
      if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
         $email_error = "Please enter a valid email";
       }
    }

     if (empty($_POST["dob"])) {
       $dob_error = "Please select date";
     } else {
      $dob = test_input($_POST["dob"]);
      }

    if (empty($_POST["favcolor"])) {
       $favcolor_error = "Please select a colour";
    } else {
      $favcolor = test_input($_POST["favcolor"]);
      }
      
    if (empty($_POST["checklist"])) {
      $gender_error = "You must select one option";
    } else {
      $gender = test_input($_POST["checklist"]);
      }

    if (empty($_POST["department"])) {
      $department_error = "You must select one option";
    } else {
      $department = test_input($_POST["department"]);
      }


    if (empty($_POST["password"])) {
      $password_error = "Please provide a password";
    } else {
      $password = test_input($_POST["password"]);
      if (!preg_match('/^(?=.*\d)(?=.*\d)(?=.*[A-Za-z])[0-9A-Za-z!@#$%]{8,50}$/', $password)) {
         $password_error = "Password not strong enough. Must be at least 8 characters long and a combination of letter, number and !@#$%";
      }
    }

    if (empty($_POST["cpassword"])) {
       $cpassword_error = "Please confirm password";
    } else {
      $cpassword = test_input($_POST["cpassword"]);
      if ($password != $cpassword) {
        $cpassword_error = "Those passwords didn't match. Please type carefully.";
      }
    }

    if ($firstname_error == '' and $lastname_error == '' and $email_error == '' and $dob_error == '' and $favcolor_error == '' and $gender_error
      == '' and $department_error == '' and $password_error == '' and $cpassword_error == '') {
         header("Location:success.php?firstname=".$_POST['firstname']."&favcolor=".$_POST['favcolor']);
      }
        
        
        
        
        // {
        //   $message_body = '';
        //   unset($_POST['submit']);
        //   foreach ($_POST as $key => $value) {
        //     $message_body .= "$key: $value\n";
        //   }
        //   $success = "Profile Submitted Successfully! Thank You";
        //   $firstname = $lastname = $email = $dob = $favcolor = $gender = $department = $password = $cpassword = "";

          // $to = $email;
          // $subject = "Geekland Account Verification";
          // // if (mail($to, $subject, $message_body)) 
          // if {
          //   $success = "Profile Submitted Successfully! Check Your Mail For Confirmation.";
          //   $firstname = $lastname = $email = $dob = $favcolor = $gender = $department = $password = $cpassword = "";
          // } 


        // }
  }

  function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }
?>