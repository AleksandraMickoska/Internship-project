<?php
require_once 'header.php';
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Contact Us</title>
  </head>
  <body>
    <div class="container-fluid text-center">
        <h3 class="m-3 p-2 text-white bg-success rounded-pill">Contact Us</h3>
        <hr>
        <form action="" method="POST" class="bg-light p-2">
            <label for="fname" class="p-3 bg-success text-white fw-bold mb-2 rounded">First Name</label>
            <input type="text" id="fname" name="firstname"  class="p-2" placeholder="Your name.."><br><br>

            <label for="lname"  class="p-3 bg-success text-white fw-bold rounded">Last Name</label>
            <input type="text" id="lname" name="lastname"  class="p-2" placeholder="Your last name.."><br>
            <br>
            <label for="email"  class="p-3 bg-success text-white fw-bold rounded">Email</label>
            <input type="email" id="email" name="email"  class="p-2 " placeholder="Your email.."><br>
            <br>
            <!-- <label for="subject"  class="p-3 bg-success text-white fw-bold rounded">Message</label><br> -->
            <textarea id="subject" name="subject" placeholder="Your message.." cols="40" rows="5"></textarea><br>
            <br>
            <input type="submit" value="Send your message" class="mb-2 btn bg-success text-white fw-bold">
        </form>   
    </div>
    
  </body>
</html>








<?php require_once 'footer.php'; ?>
