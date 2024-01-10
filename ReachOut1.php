<?php
session_start();
?>
    <html lang="en">

    <head>
    <link rel="icon" type="image/x-icon" href="favicon.ico">
  
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- button -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
   
    <title>Reach Out To Us</title>
    <link href="./styles/mainn-styles.css" rel="stylesheet">
    <link href="./styles/contact-styles.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <!-- do not disturb  -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Nunito+Sans:wght@300&family=Poppins&display=swap" rel="stylesheet">

    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer"
    /> -->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/brands.min.css" integrity="sha512-9YHSK59/rjvhtDcY/b+4rdnl0V4LPDWdkKceBl8ZLF5TB6745ml1AfluEU6dFWqwDw9lPvnauxFgpKvJqp7jiQ==" crossorigin="anonymous" referrerpolicy="no-referrer"
    />
    

    <!-- <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"> -->


    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css">
    
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.min.js"></script> -->
</head>
    <body>
    <nav class="navbar navbar-expand-md bg-light">
        <div>
            <img src="./Images/logo-go.png" width="120px" height="60px" id="logo-img" class="d-inline-block align-top mr-2" alt="">
        </div>
        <!-- <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button> -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon">
            <span class="line"></span>
            <span class="line"></span>
            <span class="line"></span>
          </span>    
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <!-- <div class="container-fluid"> -->
            <ul class="navbar-nav mx-auto ml-auto">
                <li class="nav-item active mx-3">
                    <a class="nav-link" href="home.html">Home </a>
                </li>
                <li class="nav-item mx-3">
                    <a class="nav-link" href="achivement.html">Achievement</a>
                </li>
                <li class="nav-item mx-3">
                    <a class="nav-link" href="team.html">Team</a>
                </li>
                <li class="nav-item mx-3">
                    <a class="nav-link" href="Gallery.html">Gallery</a>
                </li>
                <li class="nav-item mx-3">
                    <a class="nav-link" href="ReachOut1.html">Contact</a>
                </li>
            </ul>
            <div class="btn-group pr-2" role="group" aria-label="Basic example">
                <button type="button" id="themeButton" class="btn btn-secondary"></button>

            </div>
            <!-- </div> -->
        </div>
    </nav>

        <div class="container">
            <div class="content">
                <div class="left-side">
                    <div class="address details">
                        <i class="fas fa-map-marker-alt icon"></i>
                        <div class="topic">Address</div>
                        <div class="text-one">Stallion Karting & Efficycle workshop, Shrimati Kashibai Navale College of Engineering, </div>
                        <div class="text-two">Ambegaon BK, Pune, Maharashtra 411041</div>
                    </div>
                    <div class="phone details">
                        <i class="fas fa-phone-alt icon"></i>
                        <div class="topic">Phone</div>
                        <div class="text-one">+91 9370228331</div>
                        <div class="text-two">+91 9634345678</div>
                    </div>
                    <div class="email details">
                        <i class="fas fa-envelope icon"></i>
                        <div class="topic">Email</div>
                        <div class="text-one">stallionefficycle16@gmail.com</div>
                    </div>
                </div>
                <div class="right-side">
                    <div class="topic-text">Send us a message</div>
                    <p>Thank you for reaching out to us.Feel free to drop us a message, and we'll get back to you as soon as we can.Your input is valuable to us, and we look forward to connecting with you.</p>
                    <div class="form-container">

                        <?php
                        if (isset($_SESSION['notification'])) {
                            echo $_SESSION['notification'];
                            unset($_SESSION['notification']);
                        }
                        ?>

                            <form id="myForm" method="post" action="mail_process.php">
                                <div class="form-group">
                                    <label for="name">Your Name:</label>
                                    <input type="text" class="form-control" id="name" name="name" required>
                                </div>

                                <div class="form-group">
                                    <label for="email">Your Email:</label>
                                    <input type="email" class="form-control" id="email" name="email" required>
                                </div>

                                <div class="form-group">
                                    <label for="phone">Phone Number:</label>
                                    <input type="text" class="form-control" id="phone" name="phone" required>
                                </div>

                                <div class="form-group">
                                    <label for="message">Message:</label>
                                    <textarea class="form-control" id="message" name="message" required></textarea>
                                </div>
<!-- 
                                <button type="submit" class="btn btn-primary" id="submitBtn" onclick="sendMail()">Submit</button> -->
                                <div class="button">
                                    <button type="submit" class="send" id="send" onclick="sendMail()">Send Now</button>
                                </div>
                            </form>
                    </div>
                </div>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.min.js"></script>
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
        <script type="module" src="./JS/theme2.js"></script>
        <script type="module" src="./JS/contact.js"></script>
        <script>
            $(document).ready(function() {
                var notification = $(".alert-dismissible");
                if (notification.length > 0) {
                    setTimeout(function() {
                        notification.alert('close');
                    }, 3000);
                }
            });
        </script>
       
    </body>

    </html>