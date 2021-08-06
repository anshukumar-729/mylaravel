<html>
    <head>
        <title>FeriWala</title>


        <link rel="stylesheet" type="text/css" href="{{ asset('asset/address.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('asset/nav_other.css') }}">
        
        <style>
            body{
                background-color: rgb(206, 204, 204);
            }
        </style>
       
        <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
      
    </head>
    <body>
        
        <nav class="other" >
            <a href="index.html">
                <img src="img/logo.png">
                <h1>FeriWala</h1>
                <h2>It's Best &nbsp;&nbsp;<i class="fa fa-shopping-cart" aria-hidden="true"></i></h2>
            </a>
        </nav>
            <div class="acontent">
                <div class="bluepart">
                    <h2>Manage Your Address</h2>
                    <h3>We are on the way!!</h3>
                    <img src="img/logo.png" style="height: 110px; width: 140px; margin-top: 90px;">
                </div>
                <div class="whitepart">
                    <div class="form">
                        <!--Html form-->
                        
                        <form onsubmit="return validationadd()" name="address_form_googlesheet" method="POST">
                            
                             
                            <div class="checkaddress">
                               
                                <div class="row">
                            <label for="name"><i class="fa fa-user"></i> Full Name</label>
                            <input type="text" id="name" name="Name" placeholder="John M. Doe">
                            </div>
                            
                            <br><br>
                            <div class="row">
                            <label for="email"><i class="fa fa-envelope"></i> Email</label>
                            <input type="text" id="email" name="E-Mail" placeholder="john@example.com">
                            </div>
                            
                            <br><br>
                            <div class="row">
                            <label for="adr"><i class="fa fa-address-card-o"></i> Address</label>
                            <input type="text" id="adr" name="Address" placeholder="542 W. 15th Street">
                            </div>
                            
                            <br><br>
                            <div class="row">
                            <label for="city"><i class="fa fa-institution"></i> City</label>
                            <input type="text" id="city" name="City" placeholder="Ranchi">
                            </div>
                            <br>
                            <br>
                            <div class="row">
                              
                                <label for="state">State</label><br><br>
                                <input type="text" id="state" name="State" placeholder="Jharkhand">
                              </div>
                              <br>
                              
                              <div class="row">
                                <label for="Pin">Pin</label><br><br>
                                <input type="text" id="pin" name="Pin" placeholder="834001">
                              </div>
                              <span id="errorpin" style="color: red; margin-left: 320px; margin-top: 20px; font-size: 15px; font-family:fantasy;"></span>
                      
                            </div>
                            </div>  
                           
                            <div class="adddown"> 
                            <h4>By Continuing, you agree to FeriWala's <span style="color: blue;">Terms of Use</span> and <span style="color: blue;">Privacy Policy.</span></h4>
                            <button class="submit" type="submit">Register</button><br>
                          
                            <div class="newuser"><a href="signin.html"">New to FeriWala? Create an account</a></div>
                            </div>
                        
        
                        </form>
                    </div>
                </div>
        
                <script type="text/javascript">
                    const scriptURL = 'https://script.google.com/macros/s/AKfycbzblBTI3xnUIarWL_r4xtPfGNxKsYAPmCuuPPgZ6wA7Ikn0BYqiVlt2Zk9Rk1BY67Sv/exec'
                const form = document.forms['address_form_googlesheet']
                
                form.addEventListener('submit', e => {
                 e.preventDefault()
                 fetch(scriptURL, { method: 'POST', body: new FormData(form)})
                   .then(response => alert("Your address was added !!"))
                   .catch(error => console.error('Error!', error.message))
                })
                </script> 
                <script>
                    function validationadd(){
                    
                   
                    var pin = document.getElementById('pin').value;
                    var pincheck = /^[0-9]{6}$/;
                    
                  
                    if (pincheck.test(pin)){
                        document.getElementById('errorpin').innerHTML = " ";
                
                    }
                    else{
                        document.getElementById('errorpin').innerHTML = "Invalid Pin";
                        return false;
                    }
                   
                    
                }
                </script>
                
        
    </body>
</html>