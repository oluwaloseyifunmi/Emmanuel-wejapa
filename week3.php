<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <!-- <script src="https://kit.fontawesome.com/e95c32af56.js" crossorigin="anonymous"></script> -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script type="text/javascript">
    $(document).ready(function() {
      $('.check').click(function() {
        $('.check').not(this).prop('checked', false);
      });
    });
  </script>

<?php include('week3process.php');?>
  <link href="week3style.css"
        rel="stylesheet"/>
  <style>
    .success {
      color:<?php echo $favcolor;?>;
    }
  </style>
</head>
<body>
  <div class="container">
    <div class="header">
      <h2>Create Account</h2>
    </div>
    <div class="success"><?= $success; ?></div>
    <form class="form" method="post" id="form" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
      <div class="form-control">
        <label for="user">First Name</label>
        <input type="text"
               placeholder="First Name" 
               id="firstname"
               name="firstname" 
               value="<?php echo $firstname; ?>">
        <small class="error"> <?php echo $firstname_error;?></small>
      </div>

      <div class="form-control">
        <label for="user">Last Name</label>
        <input type="text"
               placeholder="Last Name" 
               id="lastname" 
               name="lastname"
               value="<?php echo $lastname; ?>"/>
       <small class="error"> <?php echo $lastname_error;?></small>
      </div>

      <div class="form-control">
        <label for="user">Email</label>
        <input type="text"
               placeholder="Email" 
               id="email"
               name="email"
               value="<?php echo $email; ?>"/>
       
        <small class="error"> <?php echo $email_error;?></small>
      </div>

      <div class="form-control">
        <label for="user">Date of Birth</label>
        <input type="date" 
               id="dob"
               name="dob"
               value="<?php echo $dob; ?>"/>
        
        <small class="error"> <?php echo $dob_error;?></small>
      </div>

      <div class="selcolor">
        <label for="user">Favourite Colour</label><br>
        <input type="color" 
               id="favcolor"
               name="favcolor"
               value="<?php echo $favcolor; ?>"/>
        
        <small class="success"> <?php echo $favcolor;?></small><br>
      </div>

      <div class="selgender">
        <label for="user">Gender:</label>
          <span><input type="checkbox" name="checklist" class="check" value="female">Female
          <input type="checkbox" name="checklist" class="check" value="male">Male
          <input type="checkbox" name="checklist" class="check" value="other">Other<br>
          <small class="error"> <?php echo $gender_error;?></small></span><br>
      </div>

      <div class="form-control">
        <label for="user">Department</label>
        <select id = "department" name="department" value="<?php echo $department; ?>">
                  <option value="">None</option>
                  <option value="IT">IT</option>
                  <option value="HR">HR</option>
                  <option value="Operations">Operations</option>
        </select>
        <small class="error"> <?php echo $department_error;?></small>
      </div>

      <div class="form-control">
        <label for="user">Password</label>
        <input type="password" placeholder="Password" id="password" name="password"/>
        <small class="error"> <?php echo $password_error;?></small>
      </div>

      <div class="form-control">
        <label for="user">Confirm Password</label>
        <input type="password" placeholder="Confirm Password" id="cpassword" name="cpassword"/>
        <small class="error"> <?php echo $cpassword_error;?></small>
      </div>


      <button type="submit" name="submit" id="contact-submit" data-submit="...Sending">
        Submit
      </button>

    </form>
  </div>
</body>
</html>