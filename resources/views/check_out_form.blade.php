<html>
    <head>
        <title>FeriWala</title>
        <style>
            body{
                background-color: rgb(206, 204, 204);
            }
        </style>
       
        <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
      
      
         
        <link rel="stylesheet" type="text/css" href="{{ asset('asset/nav_up.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('asset/nav_down.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('asset/carousel_and_footer.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('asset/after_carousel.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('asset/signup_model.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('asset/about_us.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('asset/check out form.css') }}">  
    </head>
    <body>
    
      <form action={{"/checkoutdetail"}} onsubmit="return validationch()"  method="GET">
                       
        <div class="checkout">
        <div class="checkup">
        
            
            <div class="checkaddress">
                <h3>Billing Address</h3>
                <label for="carts">Item</label>
            <input type="text" id="carts" name="carts" value={{$name}} ><br><br>
            <label for="name"><i class="fa fa-user"></i> Full Name</label><br>
            <input type="text" id="name" name="name" placeholder="John M. Doe"><br><br>
            <label for="email"><i class="fa fa-envelope"></i> Email</label><br>
            <input type="text" id="email" name="email" placeholder="john@example.com"><br><br>
            <label for="adr"><i class="fa fa-address-card-o"></i> Address</label><br>
            <input type="text" id="adr" name="address" placeholder="542 W. 15th Street"><br><br>
            <label for="city"><i class="fa fa-institution"></i> City</label><br>
            <input type="text" id="city" name="city" placeholder="Ranchi"><br><br>

            <div class="row">
              <div class="state">
                <label for="state">State</label><br>
                <input type="text" id="state" name="state" placeholder="Jharkhand">
              </div>
              <div class="zip">
                <label for="Pin">Pin</label><br>
                <input type="text" id="pin" name="pin" placeholder="834001">
                <span id="errorpin" style="color: red;  margin-top: 20px; font-size: 15px; font-family:fantasy;"></span>
             
              </div>
                       
            </div>
            </div>
            <div class="payment">
                <h3>Payment</h3>
                <label for="amount">Amount</label>
            <input type="text" id="amount" name="amount" value={{$amount}}><br><br>
            <label for="fname">Accepted Cards</label><br>
            <div class="icon-container">
              <i class="fa fa-cc-visa" style="color:navy;"></i>
              <i class="fa fa-cc-amex" style="color:blue;"></i>
              <i class="fa fa-cc-mastercard" style="color:red;"></i>
              <i class="fa fa-cc-discover" style="color:orange;"></i>
            </div><br>
            <label for="cname">Name on Card</label><br>
            <input type="text" id="cname" name="cardname" placeholder="John More Doe"><br><br>
            <label for="ccnum">Credit card number</label><br>
            <input type="text" id="ccnum" name="cardnumber" placeholder="1111-2222-3333-4444">
            <span id="errorccnum" style="color: red; margin-top: 20px; font-size: 15px; font-family:fantasy;"></span><br><br>
                      
            <label for="expmonth">Exp Month</label><br>
            <input type="text" id="expmonth" name="expmonth" placeholder="September">
            <span id="errorexpmonth" style="color: red;  margin-top: 20px; font-size: 15px; font-family:fantasy;"></span><br><br>
                      

            <div class="row">
              <div class="year">
                <label for="expyear">Exp Year</label><br>
                <input type="text" id="expyear" name="expyear" placeholder="2018">
                <span id="errorexpyear" style="color: red;  margin-top: 20px; font-size: 15px; font-family:fantasy;"></span>
                      
              </div>
              <div class="cvv">
                <label for="cvv">CVV</label><br>
                <input type="text" id="cvv" name="cvv" placeholder="352">
                <span id="errorcvv" style="color: red; margin-top: 20px; font-size: 15px; font-family:fantasy;"></span>
                      
              </div>
            </div>
            </div>
            </div><br>
            <div class="checkbox">
                <input type="checkbox" checked="checked" name="sameadr">Shipping address same as billing</div>
              <br>
              <button class="submit" type="submit" value="Continue to checkout" class="btn">Continue to check out</button>
        </div>
        </form>
      
        <script type="text/javascript">
          const scriptURL = 'https://script.google.com/macros/s/AKfycbwRwBW08ufR_JgylGL2jcCR2am0yf-ptfbmXvM3xL_fkH6zc2C-VXh-otvQV-0dGCI_/exec'
      const form = document.forms['checkout_form_googlesheet']
      
      form.addEventListener('submit', e => {
       e.preventDefault()
       fetch(scriptURL, { method: 'POST', body: new FormData(form)})
         .then(response => alert("Payment Successfully !!"))
         .catch(error => console.error('Error!', error.message))
      })
      </script>
      <script>
        function validationch(){
        
       
        var pin = document.getElementById('pin').value;
        var ccnum = document.getElementById('ccnum').value;
        var expmonth = document.getElementById('expmonth').value;
        var expyear = document.getElementById('expyear').value;
        var cvv = document.getElementById('cvv').value;

        var pincheck = /^[0-9]{6}$/;
        var ccnumcheck = /^[0-9]{4}-[0-9]{4}-[0-9]{4}-[0-9]{4}$/;
        var expmonthcheck = /^[a-zA-Z]{3,10}$/;
        var expyearcheck = /^[0-9]{4}$/;
        var cvvcheck = /^[0-9]{3}$/;
        
      
        if (pincheck.test(pin)){
            document.getElementById('errorpin').innerHTML = " ";
    
        }
        else{
            document.getElementById('errorpin').innerHTML = "Invalid Pin";
            return false;
        }
        if (ccnumcheck.test(ccnum)){
            document.getElementById('errorccnum').innerHTML = " ";
    
        }
        else{
            document.getElementById('errorccnum').innerHTML = "Invalid Credit card number ";
            return false;
        }
        if (expmonthcheck.test(expmonth)){
            document.getElementById('errorexpmonth').innerHTML = " ";
    
        }
        else{
            document.getElementById('errorexpmonth').innerHTML = "Invalid Month";
            return false;
        }
        if (expyearcheck.test(expyear)){
            document.getElementById('errorexpyear').innerHTML = " ";
    
        }
        else{
            document.getElementById('errorpexpyear').innerHTML = "Invalid Year";
            return false;
        }
        if (cvvcheck.test(cvv)){
            document.getElementById('errorcvv').innerHTML = " ";
    
        }
        else{
            document.getElementById('errorcvv').innerHTML = "Invalid Cvv";
            return false;
        }
       
        
    }
    </script>
    </body>
</html>