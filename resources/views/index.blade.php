>
    <head>
        <meta charset="utf-8">
        <meta name="veiwport" content="width=device-width, initial-scale=1.0">
        <title>FeriWala</title>
         <!--owl carousel-->
         <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.css" integrity="sha512-UTNP5BXLIptsaj5WdKFrkFov94lDx+eBvbKyoe1YAfjeRPC+gT5kyZ10kOHCfNZqEui1sxmqvodNUx3KbuYI/A==" crossorigin="anonymous" />


                <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap-theme.min.css" integrity="sha384-6pzBo3FDv/PJ8r2KRkGHifhEocL+1X2rVCTTkUfGk7/0pbek5mMa1upzvWbrUbOZ" crossorigin="anonymous">


        <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
      
        <link rel="stylesheet" type="text/css" href="{{ asset('asset/nav_up.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('asset/nav_down.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('asset/carousel_and_footer.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('asset/after_carousel.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('asset/signup_model.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('asset/about_us.css') }}"> 
        <style>
            body{
                background-color: rgb(235, 233, 233);
            }
        </style>
        
    </head>
    <body>
        <nav>
            <div class="up">
                
                <div class="logo">
                    <a onclick="togglePopuplogo()"><img src="img/logo.png" style="height: 35px; width: 35px; margin-top: 25px; margin-right: 20px;"></a>
                    <a href={{"index"}}>
                        <h1>FeriWala</h1>
                        <h2>It's Best &nbsp;&nbsp;<i class="fa fa-shopping-cart" aria-hidden="true"></i></h2>
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
                                <button  style="color: black; margin-left: 10px;"><h3>New Customer?</h3></button>
                                <button onclick="togglePopup()" style="color: blue; margin-left: 40px; "><h3>Sign up</h3></button>
                            </div>
                            <div class="link">
                                <div><a href={{"signin"}}><i class="fa fa-user-circle-o" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;My Profile</a></div>
                                <div><a href={{"products"}}><i class="fa fa-list-alt" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;My Orders</a></div>
                                <div><a href={{"address"}}><i class="fa fa-map-marker" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Manage Address</a></div>
                                <div><a href={{"products"}}><i class="fa fa-id-card-o" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Gift Cards</a></div>
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
                                <div><a href={{"about us"}}><i class="fa fa-exclamation-circle" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;About Us</a></div>
                                <div><a href={{"blogs"}}><i class="fa fa-tags" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Blogs</a></div>

                            </div>
                        </div>
                    </div>
                    <div class="cart">
                        <button onclick="togglePopuplogin()"><h3><i class="fa fa-shopping-cart" aria-hidden="true"></i>&nbsp;&nbsp; Cart</h3></button>
                        
                    </div>
                </div>
            </div>
            <div class="down">
                <div class="offers">
                    <img src={{"img/gift.png"}} style="height: 70px; width: 130px;">
                    <a href={{"products"}}><h2>Top Offers</h2></a>
                </div>
                <div class="grocary"><img src="img/grocary.png" style="height: 70px; width: 110px;">
                    <a href={{"products"}}><h2 class="grocary">Grocary</h2></a>
                </div>
                <div class="mobile"><img src="img/mobile.png" style="height: 70px; width: 100px;">
                    <h2 class="mobile">Mobile &nbsp;&nbsp;<i class="fa fa-angle-down" aria-hidden="true"></i></h2>
                    <div class="mobile_content">
                            
                        <div class="mobile_name">
                            <div><a href={{"products"}}>iPhone</a></div>
                            <div><a href={{"products"}}>Samsung</a></div>
                            <div><a href={{"products"}}>Oneplus</a></div>
                            <div><a href={{"products"}}>Realme</a></div>
                            <div><a href={{"products"}}>Redmi</a></div>
                            <div><a href={{"products"}}>Vivo</a></div>
                            <div><a href={{"products"}}>Oppo</a></div>
                            
                           
                        </div>
                    </div>
                </div>
                <div class="fashion"><img src="img/fashion.png" style="height: 70px; width: 80px;">
                    <h2>Fashion &nbsp;&nbsp;<i class="fa fa-angle-down" aria-hidden="true"></i></h2>
                    <div class="fashion_content">
                            
                        <div class="fashion_name">
                            <div><a href={{"products"}}>T-Shirt</a></div>
                            <div><a href={{"products"}}>Shirt</a></div>
                            <div><a href={{"products"}}>Saree</a></div>
                            <div><a href={{"products"}}>Jeans</a></div>
                            <div><a href={{"products"}}>Lower</a></div>
                            <div><a href={{"products"}}>Suit</a></div>
                            <div><a href={{"products"}}>Salwar</a></div>
                            <div><a href={{"products"}}>Serwani</a></div>
                            <div><a href={{"products"}}>Coat-Pant</a></div>
                            <div><a href={{"products"}}>Blazor</a></div>
                            <div><a href={{"products"}}>Lehanga</a></div>
                            <div><a href={{"products"}}>Kurta</a></div>
                            <div><a href={{"products"}}>Kid's Wear</a></div>
                            
                           
                        </div>
                    </div>

                </div>
                <div class="electronics"><img src="img/electronics.png" style="height: 70px; width: 100px;">
                    <h2>Electronics &nbsp;&nbsp;<i class="fa fa-angle-down" aria-hidden="true"></i></h2>
                    <div class="electronics_content">
                            
                        <div class="electronics_name">
                            <div><a href={{"products"}}>Television</a></div>
                            <div><a href={{"products"}}>Refrigerator</a></div>
                            <div><a href={{"products"}}>Washing Machine</a></div>
                            <div><a href={{"products"}}>Mixer</a></div>
                            <div><a href={{"products"}}>cooler</a></div>
                            <div><a href={{"products"}}>Air-Conditioner</a></div>
                            <div><a href={{"products"}}>Microwave-Oven</a></div>
                            
                           
                        </div>
                    </div>

                </div>
                <div class="home"><img src="img/furniture.png" style="height: 70px; width: 100px;">
                    <h2 class="home">Home &nbsp;&nbsp;<i class="fa fa-angle-down" aria-hidden="true"></i></h2>
                    <div class="home_content">
                            
                        <div class="home_name">
                            <div><a href={{"products"}}>Bedding</a></div>
                            <div><a href={{"products"}}>Furniture</a></div>
                            <div><a href={{"products"}}>Sofa</a></div>
                            <div><a href={{"products"}}>Table</a></div>
                            <div><a href={{"products"}}>Chair</a></div>
                            <div><a href={{"products"}}>Paint</a></div>
                            <div><a href={{"products"}}>Almirah</a></div>
                            
                           
                        </div>
                    </div>
                </div>
                <div class="beauty"><img src="img/beauty.png" style="height: 70px; width: 100px;">
                    <a href={{"products"}}><h2 class="beauty">Beauty</h2></a>
                </div>
            </div>
        </nav>


        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
              <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
              <li data-target="#carousel-example-generic" data-slide-to="1"></li>
              <li data-target="#carousel-example-generic" data-slide-to="2"></li>
              <li data-target="#carousel-example-generic" data-slide-to="3"></li>
              <li data-target="#carousel-example-generic" data-slide-to="4"></li>
            </ol>
          
            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
              <div class="item active">
                <div class="carousel-4-img">
                    <h1><i class="fa fa-windows" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;Microsoft</h1>
                </div>
                <div class="carousel-caption">
                  Ambassador 1
                </div>
              </div>
              <div class="item">
                <div class="carousel-4-img">
                    <img src="img/threat prism.png" alt="" style="width: 1000px; height: 200px; padding-left: 500px; padding-top: 80px;">
                </div>
                <div class="carousel-caption">
                    Ambassador 2
                </div>
              </div>
              <div class="item">
                <div class="carousel-4-img">
                    <img src="img/apsis.png" alt="" style="width: 1000px; height: 200px; padding-left: 500px; padding-top: 80px;">
                </div>
                <div class="carousel-caption">
                    Ambassador 3
                </div>
              </div>
              <div class="item">
                <div class="carousel-4-img">
                    <img src="img/autodesk.png" alt="" style="width: 1000px; height: 200px; padding-left: 500px; padding-top: 80px;">
                </div>
                <div class="carousel-caption">
                    Ambassador 4
                </div>
              </div>
              <div class="item">
                <div class="carousel-4-img">
                    <img src="img/indiabound.png" alt="" style="width: 1000px; height: 200px; padding-left: 500px; padding-top: 80px;">
                </div>
                <div class="carousel-caption">
                    Ambassador 5
                </div>
              </div>
            </div>
          
            <!-- Controls -->
            <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
              <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
              <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
    <div class="aftercarousel">
        <div class="owlcarousel">
                  <div class="dealday">
                      <h2><b>Deal Of The Day</b></h2>
                      <a href={{"products"}}><button>Veiw All</button></a>
                  </div>
                  <hr style="border:1px solid rgb(134, 130, 130); width:98%; margin-left:5px; margin-top:0px;">

                
            <div class="owl-carousel owl-theme">
                <div class="item"><h2>Deal 1
                    <br>Price = 200
                </h2>
                    <div class="buyandcart">
                   <!-- {{ $email=session('email')}} -->
                        <a href={{"beforecheck/"."Deal1/"."200"}}><button class="buy"><i class="fa fa-inr" aria-hidden="true"></i>&nbsp;&nbsp;Buy Now</button></a>
                        <a href={{"addedcart/"."Deal1/"."200"}}> <button class="cart" onclick="addedtocart()">&nbsp;&nbsp;Add to Cart</button></a>
                    </div>
                </div>
                <div class="item"><h2>Deal 2
                <br>Price = 230
                </h2>
                    <div class="buyandcart">
                        <a href={{"beforecheck/"."Deal2/"."230"}}><button class="buy"><i class="fa fa-inr" aria-hidden="true"></i>&nbsp;&nbsp;Buy Now</button></a>
                        <a href={{"addedcart/"."Deal2/"."230"}}> <button class="cart" onclick="addedtocart()">&nbsp;&nbsp;Add to Cart</button></a>
                    </div>
                </div>
                <div class="item"><h2>Deal 3
                <br>Price = 207
                </h2>
                    <div class="buyandcart">
                        <a href={{"beforecheck/"."Deal3/"."207"}}><button class="buy"><i class="fa fa-inr" aria-hidden="true"></i>&nbsp;&nbsp;Buy Now</button></a>
                        <a href={{"addedcart/"."Deal3/"."207"}}> <button class="cart" onclick="addedtocart()"> &nbsp;&nbsp;Add to Cart</button></a>
                    </div>
                </div>
                <div class="item"><h2>Deal 4
                <br>Price = 270
                </h2>
                    <div class="buyandcart">
                        <a href={{"beforecheck/"."Deal4/"."270"}}><button class="buy"><i class="fa fa-inr" aria-hidden="true"></i>&nbsp;&nbsp;Buy Now</button></a>
                        <a href={{"addedcart/"."Deal4/"."270"}}> <button class="cart" onclick="addedtocart()"> &nbsp;&nbsp;Add to Cart</button></a>
                    </div>
                </div>
                <div class="item"><h2>Deal 5
                <br>Price = 500
                </h2>
                    <div class="buyandcart">
                        <a href={{"beforecheck/"."Deal5/"."500"}}><button class="buy"><i class="fa fa-inr" aria-hidden="true"></i>&nbsp;&nbsp;Buy Now</button></a>
                        <a href={{"addedcart/"."Deal5/"."500"}} ><button class="cart" onclick="addedtocart()"> &nbsp;&nbsp;Add to Cart</button></a>
                    </div>
                </div>
                <div class="item"><h2>Deal 6
                <br>Price = 700
                </h2>
                    <div class="buyandcart">
                        <a href={{"beforecheck/"."Deal6/"."700"}}><button class="buy"><i class="fa fa-inr" aria-hidden="true"></i>&nbsp;&nbsp;Buy Now</button></a>
                        <a href={{"addedcart/"."Deal6/"."700"}}> <button class="cart" onclick="addedtocart()"> &nbsp;&nbsp;Add to Cart</button></a>
                    </div>
                </div>
               
            

            </div>
        </div>
              <div class="temp1">
                  <h2>Offer 1
                  <br>Price = 2000
                  </h2>
                  <div class="buyandcart">
                  <a href={{"beforecheck/"."Offer1/"."2000"}}><button class="buy"><i class="fa fa-inr" aria-hidden="true"></i>&nbsp;&nbsp;Buy Now</button></a>
                    <a href={{"addedcart/"."Offer1/"."2000"}}> <button class="cart" onclick="addedtocart()"><i class="fa fa-shopping-cart" aria-hidden="true"></i>>&nbsp;&nbsp;Add to Cart</button></a>
                  </div>
              </div>
    </div>
    <div class="cards">
        <div class="card"><h1>Poster 1</h1></div>
        <div class="card"><h1>Poster 2</h1></div>
        <div class="card"><h1>Poster 3</h1></div>
    </div>
    <div class="aftercarousel">
        <div class="owlcarousel">
                  <div class="dealday">
                      <h2><b>Deal Of The Day</b></h2>
                      <a href={{"products"}}><button>Veiw All</button></a>
                  </div>
                  <hr style="border:1px solid rgb(134, 130, 130); width:98%; margin-left:5px; margin-top:0px;">

                
            <div class="owl-carousel owl-theme">
                <div class="item"><h2>Deal 7
                <br>Price = 500
                </h2>
                    <div class="buyandcart">
                        <a href={{"beforecheck/"."Deal7/"."500"}}><button class="buy"><i class="fa fa-inr" aria-hidden="true"></i>&nbsp;&nbsp;Buy Now</button></a>
                        <a href={{"addedcart/"."Deal7/"."500"}}> <button class="cart" onclick="addedtocart()"> &nbsp;&nbsp;Add to Cart</button></a>
                    </div>
                </div>
                <div class="item"><h2>Deal 8
                <br>Price = 400
                </h2>
                    <div class="buyandcart">
                        <a href={{"beforecheck/"."Deal8/"."400"}}><button class="buy"><i class="fa fa-inr" aria-hidden="true"></i>&nbsp;&nbsp;Buy Now</button></a>
                        <a href={{"addedcart/"."Deal8/"."400"}}> <button class="cart" onclick="addedtocart()"> &nbsp;&nbsp;Add to Cart</button></a>
                    </div>
                </div>
                <div class="item"><h2>Deal 9
                <br>Price = 290
                </h2>
                    <div class="buyandcart">
                        <a href={{"beforecheck/"."Deal9/"."290"}}><button class="buy"><i class="fa fa-inr" aria-hidden="true"></i>&nbsp;&nbsp;Buy Now</button></a>
                        <a href={{"addedcart/"."Deal9/"."290"}}> <button class="cart" onclick="addedtocart()"> &nbsp;&nbsp;Add to Cart</button></a>
                    </div>
                </div>
                <div class="item"><h2>Deal 10
                <br>Price = 260
                </h2>
                    <div class="buyandcart">
                        <a href={{"beforecheck/"."Deal10/"."260"}}><button class="buy"><i class="fa fa-inr" aria-hidden="true"></i>&nbsp;&nbsp;Buy Now</button></a>
                        <a href={{"addedcart/"."Deal10/"."260"}}> <button class="cart" onclick="addedtocart()" >&nbsp;&nbsp;Add to Cart</button></a>
                    </div>
                </div>
                <div class="item"><h2>Deal 11
                <br>Price = 900
                </h2>
                    <div class="buyandcart">
                        <a href={{"beforecheck/"."Deal11/"."900"}}><button class="buy"><i class="fa fa-inr" aria-hidden="true"></i>&nbsp;&nbsp;Buy Now</button></a>
                        <a href={{"addedcart/"."Deal11/"."900"}}> <button class="cart" onclick="addedtocart()" >&nbsp;&nbsp;Add to Cart</button></a>
                    </div>
                </div>
                <div class="item"><h2>Deal 12
                <br>Price = 800
                </h2>
                    <div class="buyandcart">
                        <a href={{"beforecheck/"."Deal12/"."800"}}><button class="buy"><i class="fa fa-inr" aria-hidden="true"></i>&nbsp;&nbsp;Buy Now</button></a>
                        <a href={{"addedcart/"."Deal12/"."800"}}> <button class="cart" onclick="addedtocart()" >&nbsp;&nbsp;Add to Cart</button></a>
                    </div>
                </div>
               
            

            </div>
            
        </div>
        <div class="temp1">
            <h2>Offer 2
            <br>Price = 2080
            </h2>
            <div class="buyandcart">
            <a href={{"beforecheck/"."Offer2/"."2080"}}><button class="buy"><i class="fa fa-inr" aria-hidden="true"></i>&nbsp;&nbsp;Buy Now</button></a>
              <a href={{"addedcart/"."Offer2/"."2080"}}> <button class="cart" onclick="addedtocart()"><i class="fa fa-shopping-cart" aria-hidden="true"></i>>&nbsp;&nbsp;Add to Cart</button></a>
            </div>
        </div>
</div>
    <!-- < sign up form > -->
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
                    
                    <form action="psignup" onsubmit="return validationr()"  method="GET">
                        <input type="text" id="name" name="name" placeholder="Name" ><br>
                        <span id="errorname" style="color: red; font-size: 15px; font-family:fantasy;"></span>
                        
                        <input type="email" id="email" name="email" placeholder="Email Address"><br>
                        <span id="erroremail" style="color: red; font-size: 15px; font-family:fantasy;"></span>
                        
                        <input type="password" id="password" name="password" placeholder="Password"><br>
                        <span id="errorpassword" style="color: red; font-size: 15px; font-family:fantasy;"></span>
                       
                        <input type="text" id="cpassword" name="cpassword" placeholder="Confirm Password"><br>
                        <span id="errorcpassword" style="color: red; font-size: 15px; font-family:fantasy;"></span>
                       
                        <input type="number" id="number" name="number" placeholder="Contact nummber"><br>
                        <span id="errornumber" style="color: red; font-size: 15px; font-family:fantasy;"></span>
                       
                       
                         <br><br>
                        <h4>By Registering, you agree to FeriWala's <span>Terms of Use</span> and <span>Privacy Policy.</span></h4>
                        <button class="submit" type="submit">Register</button>
                        <div class="existing"><a href="signin"" >Existing User? Log in</a></div>
    
                    
    
                    </form>
                </div>
            <div class="closebtn" onclick="togglePopup()">&times;</div>
            </div>
            

        </div>
    </div>
   
    
    <div class="popuplogo" id="popup1logo">
        <div class="overlay"></div>
        <div class="content">
            <img src="img/logo.png" style="height: 100%; width: 80%; margin-left: 30px;">
            
            <div class="closebtn" onclick="togglePopuplogo()">&times;</div>
        </div>
    </div>
   
    
   
        
          <footer>
              <div class="care">
                    <div class="fflist">
                        <h4>OFFERS</h4>
                        <div class="flist">
                        <a href={{"products"}}>Men</a>
                        <a href={{"products"}}>Women</a>
                        <a href={{"products"}}>Kids</a>
                        <a href={{"products"}}>Electronics</a>
                        </div>
                    </div>
                    <div class="fflist">
                        <h4>ABOUT</h4>
                        <div class="flist">
                            <a href="tel:9060163599">Contact Us</a>
                            <a href="about us">About Us</a>
                            <a href="">Careers</a>
                            <a href="">Stories</a>
                            <a href="blogs">Blogs</a>
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
                            <img src={{"img/visa card.jpg"}}>
                            <img src={{"img/rupay card.jpg"}}>
                            <img src={{"img/master card.jpg"}}>
                        </div>
                </div>
          </footer>
          <script>
            function togglePopup(){
                document.getElementById("popup1").classList.toggle("active");
            }
            
        </script>
        
        <script>
            function addedtocart(){
             if ({{(session()->has('email'))}}){
                alert ("The item was added to cart !!");
             }
            }
        </script>
          <script>function togglePopuplogo(){
            document.getElementById("popup1logo").classList.toggle("active");
           
        }</script>





<script>
    function validationr(){
    
    var password = document.getElementById('password').value;
    var cpassword = document.getElementById('cpassword').value;
    var number = document.getElementById('number').value;

    var passwordcheck = /^(?=.*[0-9])(?=.*[!@#$%^&*])[A-Za-z0-9_!@#$%^&*]{8,16}$/;
     var numbercheck = /^[6789][0-9]{9}$/;
    
    if (passwordcheck.test(password)){
        document.getElementById('errorpassword').innerHTML = " ";
    }
    else{
        document.getElementById('errorpassword').innerHTML = "Password should be minimum 8 characters and have atleast 1 digit and 1 special character ";
               return false;
    }
    if (cpassword.match(password)){
        document.getElementById('errorcpassword').innerHTML = " ";

    }
    else{
        document.getElementById('errorcpassword').innerHTML = "Password not matched";
        return false;
    }
    if (numbercheck.test(number)){
        document.getElementById('errornumber').innerHTML = " ";

    }
    else{
        document.getElementById('errornumber').innerHTML = "Invalid Number";
        return false;
    }
   
    
}
</script>

          <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ" crossorigin="anonymous"></script>
    <!-- Latest compiled and minified JavaScript -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.js" integrity="sha512-gY25nC63ddE0LcLPhxUJGFxa2GoIyA5FLym4UJqHDEMHjp8RET6Zn/SHo1sltt3WuVtqfyxECP38/daUc/WVEA==" crossorigin="anonymous"></script> 

<script>$('.owl-carousel').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:3
        },
        1000:{
            items:5
        }
    }
})</script>

    </body>
<>


