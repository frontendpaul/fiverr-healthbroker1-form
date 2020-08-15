<?php

  if(isset($_POST['email']) && $_POST['email'] != ''){
    $firstName = $_POST['first-name'];
    $lastName = $_POST['last-name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
  
    $to = "info@virtualityconcepts.com";
    $subject = $firstName." ".$lastName. "\r\n"." just signed up!";
    $body = "The following person just signed up:". "\r\n"."\r\n". 
      "Name: ".$firstName." ".$lastName. "\r\n".
      "Email: ".$email. "\r\n".
      "Mobile number: ".$phone;
  
    mail($to, $subject, $body);
  } 

?>


<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./styles.css">
  <title>Virtual Real Estate Tours - VirtualityConcepts</title>
  <script>
    const date = 'July 29th ar 1pm';
    document.addEventListener("DOMContentLoaded", function(){
      const dateContainer = document.querySelector('#date');
      dateContainer.innerText = date;
    });
  </script>
</head>
<body>
  <div class="container">
    <header class="header">
      <div class="logo">
        <img src="./assets/vc-logo.png" alt="" class="logo__img">
      </div>
      <div class="part-1">
        <img src="./assets/rooms.png" alt="" class="part-1__bg">
        <div class="attention"><h2>Attention Realtors!</h2></div>
        <p class="header-text">In these tough times and days ahead of
          Covid-19, most states require real estate
          professionals to not hold open houses and
          urge the use of contact-less Virtual walk thru
          technology. We do just that.</p>
        <p class="header-text">We invite you to a 30-minute Zoom session to
          find out how to maximize and implement
          virtual reality for all listings and have
          "coffee on us" with a <span class="bold">$5 Sturbucks gift card!</span></p>
        <div class="join">
          <p>Join Us: <a href="https://www.virtualityconcepts.com/">www.virtualityconcepts.com</a></p>
        </div>
      </div>
    </header>
    <section class="discover">
      <div class="left">
        <h3>Discover why key industry leaders in Real Estate are saying:</h3>
        <p class="quote">"A Virtual Tour allows potential clients to see a property on the Internet before they see it in person." - Bright MLS</p>
        <p class="quote">"Virtual Reality: How Tech Is Changing the Way You Buy and Sell a House" - NVAR</p>
        <p class="quote">"With no open houses and buyers, sellers or real estate agents uncomfortable with in-person showings, quality photos, video or 3D tours have become more important than ever." Lending Tree</p>
      </div>

      <div class="right">
        <form action="index.php" method="POST" class="form">
          <div class="row">
            <input type="text" id="first-name" name="first-name" placeholder="First name" required>
            <input type="text" id="last-name" name="last-name" placeholder="Last name" required>
          </div>
          <input type="email" id="email" name="email" placeholder="Email address" required>
          <input type="number" id="phone" name="phone" placeholder="Mobile number" required>          
          <button type="submit" id="submit" class="submit">Sign Up Here</button>
        </form>
      </div>
    </section>

    <section class="features">
      <div class="left">
        <h3>Find out how</h3>
        <p>- "WOW", your clients implementing virtual reality technology</p>
        <p>- How customizing virtual tours and highlighting key features in your listing</p>
        <p>- Branding your name/broker</p>
        <p>- How to win your prospects to clients durign listing presentations</p>
      </div>
      <div class="devider"></div>
      <div class="right">
        <h3>We'll go over some of the top reasons to use Virtual Tours for all your listings:</h3>
        <p>- Increased Cells</p>
        <p>- How affordable virtual reality tours are</p>
        <p>- Increased Engagement</p>
        <p>- Increased Website traffic</p>
      </div>
    </section>

    <div class="starbucks">
      <p>Please join us on <span class="white" id="date">July 29th ar 1pm</span> to a new and exciting way to promote your listings virtually and <span class="white">receive a $5 Starbucks gift</span> on us at the end of the session.</p>
      <img src="./assets/starbucks.png" alt="" class="starbucks-logo">
    </div>

    <div class="contact">
      <div class="contact-group">
        <img src="./assets/phone.png" alt="" class="contact-icon">
        <p class="white">703-650-9900</p>
      </div>
      <div class="contact-group">
        <img src="./assets/phone.png" alt="" class="contact-icon">
        <a href="mailto:info@virtualityconcepts.com" class="white">info@virtualityconcepts.com</a>
      </div>
      <div class="contact-group">
        <img src="./assets/phone.png" alt="" class="contact-icon">
        <a href="https://www.virtualityconcepts.com/" class="white">www.virtualityconcepts.com</a>
      </div>
    </div>

    <div class="corner">
      <img src="./assets/mockup.png" alt="" class="mockup">
    </div>
  </div>
</body>
</html>