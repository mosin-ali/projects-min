<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="\project sem_5\Contact.css?v=<?php echo time();?>">
</head>
<body>
<?php include $_SERVER['DOCUMENT_ROOT'].'/PROJECT SEM_5/header.php' ?>
<main>
<section>
    
    <div class="section-header">
      <div class="container">
        <h2>Contact Us</h2>
        <p>Searching for the  Agriculture captions? Look no further! We've compiled a list of the most captivating  for your Agriculture-related websaite posts. Choose from our curated collection and make your Agriculture posts shine.</p>
      </div>
    </div>
    
    <div class="container">
      <div class="row">
        
        <div class="contact-info">
          <div class="contact-info-item">
            <div class="contact-info-icon">
            </div>
            
            <div class="contact-info-content">
              <img src="address.png">
              <h4>Address</h4>
              <p>396445-Navsari,<br/> Gujrat,India</p>
            </div>
          </div>
          
          <div class="contact-info-item">
            <div class="contact-info-icon">
              <i class="fas fa-phone"></i>
            </div>
            
            <div class="contact-info-content">
            <img src="phone.png">
              <h4>Phone</h4>
              <p>971-477-20147</p>
            </div>
          </div>
          
          <div class="contact-info-item">
            <div class="contact-info-icon">
              <i class="fas fa-envelope"></i>
            </div>
            
            <div class="contact-info-content">
            <img src="email.png">
              <h4>Email</h4>
             <p>MB_Farm_Agriculture_110@gmail.com</p>
            </div>
          </div>
        </div>
        
        <div class="contact-form">
          <form action="c_1.php" id="contact-form" method="post">
            <h2>Send Message</h2>
            <div class="input-box">
            <label>Full Name</label>
              <input type="text" required="true" name="fn" required>
            </div>
            
            <div class="input-box">
            <label>Email</label>
              <input type="email" required="true" name="ce" required>
      
            </div>
            
            <div class="input-box">
            <label>Type your Message...</label>
              <input required="true" name="tm" required></input>
            </div>
            
            <div class="input-box">
              <input type="submit" value="Send" name="">
            </div>
          </form>
        </div>
        
      </div>
    </div>
  </section>
</main>
</body>
</html>