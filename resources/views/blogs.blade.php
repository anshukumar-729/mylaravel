<html>
    <head>
        <title>FeriWala</title>
        
       

        <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
      
       
        <link rel="stylesheet" type="text/css" href="{{ asset('asset/nav_up.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('asset/nav_down.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('asset/carousel_and_footer.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('asset/blogs.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('asset/signup_model.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('asset/about_us.css') }}"> 
        <style>
            body{
                background-color: rgb(221, 217, 217);
            }
        </style>
       
    </head>
    <body>
        <nav>
            <div class="up">
                
                <div class="logo">
                    <img src="img/logo.png" style="height: 35px; width: 35px; margin-top: 25px; margin-right: 20px;">
                    <a href="index.html">
                        <h1>FeriWala</h1>
                        <h2 class="glitch">It's Best &nbsp;&nbsp;<i class="fa fa-shopping-cart" aria-hidden="true"></i></h2>
                    </a>
                </div>
                
                <div class="search">
                    <input type="text" placeholder="Search for products, brands and more"><button><i class="fa fa-search" aria-hidden="true"></i></button>
                </div>
                <div class="select">
                    <!-- <button><h2>Login</h2></button> -->
                    <div class="login_option">
                        <button class="login_button"><b>Login&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-angle-down" aria-hidden="true"></i></b></button>
                        <div class="login_content">
                            <div class="signupme">
                                <button style="color: black; margin-left: 10px;"><h3>New Customer?</h3></button>
                                <button onclick="togglePopup()" style="color: blue; margin-left: 40px; "><h3>Sign up</h3></button>
                            </div>
                            <div class="link">
                                <div><a href="signin.html"><i class="fa fa-user-circle-o" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;My Profile</a></div>
                                <div><a href="#"><i class="fa fa-list-alt" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;My Orders</a></div>
                                <div><a href="address.html"><i class="fa fa-map-marker" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Manage Address</a></div>
                                  <div><a href="#"><i class="fa fa-id-card-o" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Gift Cards</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="more_option">
                        <h3> More &nbsp;&nbsp;<i class="fa fa-angle-down" aria-hidden="true"></i></h3>
                        <div class="more_content">
                            
                            <div class="more_link">
                                <div><a href="#"><i class="fa fa-btc" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Sell on FeriWala</a></div>
                                <div><a href="#"><i class="fa fa-newspaper-o" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Advertise</a></div>
                                <div><a href="#"><i class="fa fa-download" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Download App</a></div>
                                <div><a href="about us.html"><i class="fa fa-exclamation-circle" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;About Us</a></div>
                                <div><a href="blogs.html"><i class="fa fa-tags" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Blogs</a></div>

                            </div>
                        </div>
                    </div>
                    <div class="cart">
                        <button onclick="togglePopuplogin()"><h3><i class="fa fa-shopping-cart" aria-hidden="true"></i>&nbsp;&nbsp; Cart</h3></button>
                        
                    </div>
                </div>
            </div>
        </nav>
        <div class="blogs">
            
            <div class="blog">
                <div class="vline"></div>
                <div class="stmt">
                    <h1>--------Blog1----------:))))))</h1>
                </div>
            </div>
            <div class="blog">
                <div class="vline"></div>
                <div class="stmt">
                    <h1>--------Blog2----------:))))))</h1>
                </div>
            </div>
            <div class="blog">
                <div class="vline"></div>
                <div class="stmt">
                    <h1>--------Blog3----------:))))))</h1>
                </div>
            </div>
            <div class="blog">
                <div class="vline"></div>
                <div class="stmt">
                    <h1>--------Blog4----------:))))))</h1>
                </div>
            </div>
            <div class="blog">
                <div class="vline"></div>
                <div class="stmt">
                    <h1>--------Blog5----------:))))))</h1>
                </div>
            </div>
            
        </div>
            <div class="popup" id="popup1">
                <div class="overlay"></div>
                <div class="content">
                    <div class="bluepart">
                        <h2>Looks like you're new here!</h2>
                        <h3>Sign Up with your email to get started</h3>
                        <img src="img/logo.png" style="height: 110px; width: 140px; margin-top: 90px;">
                    </div>
                    <div class="whitepart">
                        <div class="form">
                            <!--Html form-->
                            
                            <form onsubmit="return validation()" name="submit-googlesheet" method="POST">
                                <input type="text" id="name" name="Name" placeholder="Name" ><br>
                                <span id="errorname" style="color: red; font-size: 10px;"></span>
                                
                                <input type="email" id="email" name="E-Mail" placeholder="Email Address"><br>
                                <span id="erroremail" style="color: red; font-size: 10px;"></span>
                                
                                <input type="password" id="password" name="New Password" placeholder="Password"><br>
                                <span id="errorpassword" style="color: red; font-size: 10px;"></span>
                               
                                <input type="text" id="cpassword" name="Confirm Password" placeholder="Confirm Password"><br>
                                <span id="errorcpassword" style="color: red; font-size: 10px;"></span>
                               
                                <input type="number" id="number" name="Mobile Number" placeholder="Contact nummber"><br>
                                <span id="errornumber" style="color: red; font-size: 10px;"></span>
                               
                               
                                 <br><br>
                                <h4>By Registering, you agree to FeriWala's <span>Terms of Use</span> and <span>Privacy Policy.</span></h4>
                                <button class="submit" type="submit">Register</button>
                                <div class="existing"><a href="signin.html" >Existing User? Log in</a></div>
            
                            
            
                            </form>
                        </div>
                    <div class="closebtn" onclick="togglePopup()">&times;</div>
                    </div>
                    
        
                </div>
            </div>
            
            
            <footer>
                <div class="care">
                      <div class="fflist">
                          <h4>OFFERS</h4>
                          <div class="flist">
                          <a href="products.html">Men</a>
                          <a href="products.html">Women</a>
                          <a href="products.html">Kids</a>
                          <a href="products.html">Electronics</a>
                          </div>
                      </div>
                      <div class="fflist">
                          <h4>ABOUT</h4>
                          <div class="flist">
                              <a href="tel:9060163599">Contact Us</a>
                              <a href="about us.html">About Us</a>
                              <a href="">Careers</a>
                              <a href="">Stories</a>
                              <a href="blogs.html">Blogs</a>
                              </div>
                      </div>
                      <div class="fflist">
                          <h4>HELP</h4>
                          <div class="flist">
                              <a href="">Payment</a>
                              <a href="">Shipping</a>
                              <a href="">Cancellation & Returns</a>
                              
                              </div>
                      </div>
                      <div class="fflist">
                          <h4>POLICY</h4>
                          <div class="flist">
                              <a href="">Return Policy</a>
                              <a href="">Terms of Use</a>
                              <a href="">Security</a>
                              <a href="">Privacy</a>
                              <a href="">Sitemap</a>
                              </div>
                      </div>
                      <div class="fflist">
                          <h4>SOCIALS</h4> 
                          <div class="flist">
                            <a href="https://www.facebook.com/profile.php?id=100029333530947">Facebook</a>
                            <a href="https://www.instagram.com/anshukumar93.40/">Instagram</a>
                            <a href="https://www.linkedin.com/in/anshu-kumar-363030203/">Linkedin</a>
                            
                              </div>
                      </div>
                      <div class="vline"></div>
                      <div class="ffdes">
                          <h4>Mail Us:</h4>
                          <div class="fdes">
                              <h4>Feriwala Private Limited, New Kishore Ganj, Road No-6/2, Pin-834001, Ranchi, Jharkhand, India</h4>
                              </div>
                      </div>
                      <div class="ffdes">
                          <h4>Registered Office Address</h4> 
                          <div class="fdes">
                              <h4>Feriwala Private Limited, New Kishore Ganj, Road No-6/2, Pin-834001, Ranchi, Jharkhand, India,
                                  Mobile No- <span style="color: rgb(9, 9, 70);">9060163599</span>
                              </h4>
                              
                              </div>
                      </div>
                      
                  </div>
                  <hr>
                  <div class="socials">
                          <a href=""><i class="fa fa-shopping-bag" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;Sell on FeriWala</a>
                          <a href=""><i class="fa fa-star" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;Advertise</a>
                          <a href=""><i class="fa fa-id-card-o" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;Gift Cards</a>
                          <a href=""><i class="fa fa-question-circle" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;Help Center</a>
                          <h2><i class="fa fa-copyright" aria-hidden="true"></i>&nbsp;&nbsp;2020-2021 Feriwala.com</h2>
                          <div class="pcards">
                              <img src="img/visa card.jpg">
                              <img src="img/rupay card.jpg">
                              <img src="img/master card.jpg">
                          </div>
                  </div>
            </footer>
            <script>
              function togglePopup(){
                  document.getElementById("popup1").classList.toggle("active");
              }
              
          </script>
         

         <script type="text/javascript" src="register.js"></script>

      </body>
  </html>