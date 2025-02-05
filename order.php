<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="\project sem_5\order.css?v=<?php echo time();?>">
</head>
<body>
<?php include $_SERVER['DOCUMENT_ROOT'].'/PROJECT SEM_5/header.php' ?>
<main>
<section>
    
    <div class="section-header">
      <div class="container">
        <h2>Order_now</h2>
        <p>Searching for the  Agriculture captions? Look no further! We've compiled a list of the most captivating  for your Agriculture-related websaite posts. Choose from our curated collection and make your Agriculture posts shine.</p>
      </div>
    </div>
    
    <div class="container">
      <div class="row">
      
        <div class="contact-form">
          <form action="o_1.php" id="contact-form" method="post">
            <h2>Order_details</h2>
            <div class="input-box">
            <label>Full Name</label>
              <input type="text" name="fname">
            </div>
            
            <div class="input-box">
            <label>Email</label>s
              <input  type="text" name="email"required >
            </div>
            
            <div class="input-box">
            <label>Address</label>
              <input type="text"  name="address" required ></input>
            </div>
            
            <div class="input-box">
            <label>City</label>
              <input  type="text"  name="city"  required></input>
            </div>

            <div class="input-box">
            <label>state</label>
              <input  type="text"  name="state"  required></input>
            </div>

            <div class="input-box">
            <label>pin</label>
              <input  type="text" name="pin" required></input>
            </div>
            <div class="input-box">
            <label>product_name</label>
                  <select name="pn" id="pn">
                    <option value="Onion">Onion</option>
                    <option value="Tomato">Tomato</option>
                    <option value="Cauliflowerl">Cauliflower</option>
                    <option value="Capsicum">Capsicum</option>
                    <option value="Cabbage">Cabbage</option>
                    <option value="Potato">Potato</option>
                    <option value="Banana ">Banana</option>
                    <option value="Mango">Mango</option>
                    <option value="Apple">Apple</option>
                    <option value="Grape">Grape</option>
                    <option value="Watermelon">Watermelon</option>
                    <option value="Cherry">Cherry</option>
                    <option value="Dahlia">Dahlia</option>
                    <option value="Lavender">Lavender</option>
                    <option value="Jasmine">Jasmine</option>
                    <option value="Rose">Rose</option>
                    <option value="Sunflower">Sunflower</option>
                    <option value="Jasmine red">Jasmine red</option>
                    <option value="Compound">Compound</option>
                    <option value="Manure">Manure</option>
                    <option value="Compost">Compost</option>
                    <option value="Potassium">Potassium</option>
                    <option value="Phosphorus">Phosphorus</option>
                    <option value="Chambal Fert">Chambal Fert</option>
                  </select>
            </div>
            <br>
            <div class="input-box">
            <label>payment</label>
                  <select name="pm" id="pm">
                    <option value="Cash">Cash</option>
                  </select>
            </div>
            <br><br>
             <button type="submit">Order</button>
    
          </form>
        </div>
        
      </div>
    </div>
  </section>
</main>
</body>
</html>