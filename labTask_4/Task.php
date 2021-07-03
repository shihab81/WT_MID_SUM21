<?php
   if(isset($_POST['btn'])){
         $name =$_POST['name'];
         $subject  =$_POST['subject'];
         $email =$_POST['email'];
         $message=$_POST['message'];
        
         //Error Checking
         $error = [];

         if(empty($_POST['name'])){
             $error['name'] = 'Insert Your Name';
         }
         if(empty($_POST['subject'])){
            $error['subject'] = 'Insert Your Subject';
        }
        if(empty($_POST['email'])){
            $error['email'] = 'Insert Your email';
        }
        if(empty($_POST['message'])){
            $error['message'] = 'Insert Your message';
        }

       
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Contact Form</title>
</head>
<body>
    <div class="main">
        <form action="" method="POST">
            <div class="single-form">
                <label>Name</label>
                <input type="text" name="name" placeholder="Your Name" value="<?php if (isset($name)) echo $name;
                ?>">
                <span>
                    <?php
                         if(isset($error['name'])){
                             echo $error['name'];
                         }
                    ?>
                </span>
            </div>
            <div class="single-form">
                <label>Subject</label>
                <input type="text" name="subject"placeholder="Your Subject"value="<?php if (isset($subject)) echo $subject;
                ?>">
                <span>
                    <?php
                         if(isset($error['subject'])){
                             echo $error['subject'];
                         }
                    ?>
                </span>
            </div>
            <div class="single-form">
                <label>Email</label>
                <input type="email" name="email" placeholder="Your Email"value="<?php if (isset($email)) echo $email;
                ?>">
                <span>
                    <?php
                         if(isset($error['email'])){
                             echo $error['email'];
                         }
                    ?>
                </span>
            </div>
            <div class="single-form">
                <label>Message</label>
                <textarea name="message" placeholder="Your Message" value="<?php if (isset($message)) echo $message;
                ?>"></textarea>
                <span>
                    <?php
                         if(isset($error['message'])){
                             echo $error['message'];
                         }
                    ?>
                </span>
            </div>
            <div class="single-form">
                <label>Name</label>
                <input type="submit" value="Send Message"name="btn">
            </div>
        </form>
    </div>
</body>

</html>