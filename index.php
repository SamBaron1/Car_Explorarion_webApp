<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="stylesheet" href="fontawesome-free-6.4.2-web/css/all.min.css">
    <!-- <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-8Z+Xj1zVJ3+U6vYJf2Ywz5t7K1L9x9h0Q6vJ8yZtXv7HlqLsQO2jKmG9gRb5rZsWxW8yLrBdQq4fVl3vz1+2jA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-..." crossorigin="anonymous" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet"> -->
    <title>Car Exploration Web App</title>
    <link rel="stylesheet" href="style.css">
    <script src="script.js" defer></script>
</head>

<body>
    <div class="welcome-hero">
    <div class="header">
        <div id="loginLinks">

            <div class="links">
                <a href="login.php" id="login">Login</a>
                <a href="sign_up.php" id="signUp">Sign Up</a>
            </div>
            <div class="navbaricons">
                <i class="fa-solid fa-bars" id="opennavbtn"></i>
                <i class="fa-solid fa-xmark" id="closenavbtn" style="display: none;"></i>
            </div>

        </div>

        <!-- <div id="searchContainer">
            <input type="text" id="searchInput" placeholder="Search for cars...">
            <button id="searchButton">Search</button>
        </div> -->
    </div>
    <div class="container">
        <div class="row">
            
            <div class="icon">
                
                    <img src="images/images/featured-cars/Bugatti.jpeg" alt="icon">
            </div>
     
        </div>
        <div class="navbar">
            <ul class="nav-list">
                <li><a href="#home">HOME</a></li>
                <li><a href="#models">FEATURED</a></li>
                <li><a href="#types">SERVICES</a></li>
                <li><a href="#clients">CLIENTS</a></li>
                <li><a href="#logos">BRANDS</a></li>
                <li><a href="#contacts">CONTACTS</a></li>
            </ul>
            
            <div class="profile">
                <div class="dashboard">
                    <div class="profile_pic">
                        <img src="images/images/featured-cars/alphard.jpeg" alt="">
                    </div>
                        <div class="profile_others">
                    <ul>
                        <li id="debug"><a href="dashboard.php">Dashboard</a></li>
                        <li>Logout</li>
                    </ul>
                        </div>
                </div>
            </div>
        </div>
    </div>

    <div class="home-container" id="home">
        <div class="welcome-hero-txt">
            <h2>get your desired car in resonable price</h2>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore   magna aliqua. 
            </p>
            <button class="welcome-btn" onclick="window.location.href='#'">contact us</button>
        </div>
    </div>
</div>
    


<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="model-search-content">
                <div class="row">
                    <div class="col-md-offset-1 col-md-2 col-sm-12">
                        <div class="single-model-search">
                            <h2>select year</h2>
                            <div class="model-select-icon">
                                <select class="form-control">

                                      <option value="default">year</option><!-- /.option-->

                                      <option value="2018">2018</option><!-- /.option-->

                                      <option value="2017">2017</option><!-- /.option-->
                                      <option value="2016">2016</option><!-- /.option-->

                                </select><!-- /.select-->
                            </div><!-- /.model-select-icon -->
                        </div>
                        <div class="single-model-search">
                            <h2>body style</h2>
                            <div class="model-select-icon">
                                <select class="form-control">

                                      <option value="default">style</option><!-- /.option-->

                                      <option value="sedan">sedan</option><!-- /.option-->

                                      <option value="van">van</option><!-- /.option-->
                                      <option value="suv">suv</option><!-- /.option-->

                                </select><!-- /.select-->
                            </div><!-- /.model-select-icon -->
                        </div>
                    </div>
                    <div class="col-md-offset-1 col-md-2 col-sm-12">
                        <div class="single-model-search">
                            <h2>select make</h2>
                            <div class="model-select-icon">
                                <select class="form-control">

                                      <option value="default">make</option><!-- /.option-->

                                      <option value="toyota">toyota</option><!-- /.option-->

                                      <option value="land-rover">land-rover</option><!-- /.option-->
                                      <option value="mercedes-benz">mercedes-benz.</option><!-- /.option-->

                                </select><!-- /.select-->
                            </div><!-- /.model-select-icon -->
                        </div>
                        <div class="single-model-search">
                            <h2>car condition</h2>
                            <div class="model-select-icon">
                                <select class="form-control">

                                      <option value="default">condition</option><!-- /.option-->
                                      <option value="new">new</option><!-- /.option-->
                                      <option value="used">used</option><!-- /.option-->
                                      <option value="old">old</option><!-- /.option-->
                                </select><!-- /.select-->
                            </div><!-- /.model-select-icon -->
                        </div>
                    </div>
                    <div class="col-md-offset-1 col-md-2 col-sm-12">
                        <div class="single-model-search">
                            <h2>select model</h2>
                            <div class="model-select-icon">
                                <select class="form-control">

                                      <option value="default">model</option><!-- /.option-->
                                      <option value="subaru">subaru</option><!-- /.option-->
                                      <option value="bmw">bmw</option><!-- /.option-->
                                      <option value="ford">ford</option><!-- /.option-->

                                </select><!-- /.select-->
                            </div><!-- /.model-select-icon -->
                        </div>
                        <div class="single-model-search">
                            <h2>select price</h2>
                            <div class="model-select-icon">
                                <select class="form-control">

                                      <option value="default">price</option><!-- /.option-->
                                      <option value="$20000.00">$20000.00</option><!-- /.option-->
                                      <option value="$8000.00">$80000.00</option><!-- /.option-->
                                      <option value="$90000.00">$90000.00</option><!-- /.option-->

                                </select><!-- /.select-->
                            </div><!-- /.model-select-icon -->
                        </div>
                    </div>
                    <div class="col-md-2 col-sm-12">
                        <div class="single-model-search text-center">
                            <button class="welcome-btn model-search-btn" onclick="window.location.href='#'">
                                search
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


    <div id="slider_container">
        <div id="slider">
            <div id="car_picture">
            </div>
            <div id="description">
                <h2 id="car_name">one</h2>
                <br>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                    Excepturi autem ea, consequatur soluta voluptatum laboriosam expedita quos ex!
                    Nam molestias hic quisquam et magnam accusamus maiores sapiente
                    omnis est aspernatur.</p>
            </div>
        </div>
    </div>

    <div class="body-h1">
        <h1>Featured CARS...</h1>
    </div>
    <div class="car-details" id="models">
        <div class="car-container">
            <img src="images/images/featured-cars/suzuki.jpeg" alt="Car Image1">
            <ul>
                <li>Name: SUZUKI</li>
                <li>Date of Manufacture: 2022-01-01</li>
                <li>Country of Origin: Japan</li>
                <li>Mileage: 10,000 km</li>
            </ul>
        </div>
    
        <div class="car-container">
            <img src="images/images/featured-cars/blueranger.jpeg" alt="Car Image2">
            <ul>
                <li>Name: FORDRANGER</li>
              <li>Date of Manufacture: 2022-01-01</li>
              <li>Country of Origin: Japan</li>
              <li>Mileage: 10,000 km</li>
            </ul>
        </div>
       
        <div class="car-container">
            <img src="images/images/featured-cars/defender.jpeg" alt="Car Image3">
            <ul>
                <li>Name: DEFENDER</li>
                <li>Date of Manufacture: 2022-01-01</li>
                <li>Country of Origin: Japan</li>
                <li>Mileage: 10,000 km</li>
            </ul>
        </div>
        
        <div class="car-container">
            <img src="images/images/featured-cars/newfortuner.jpeg" alt="Car Image4">
            <ul>
                <li>Name: FORTUNER</li>
                <li>Date of Manufacture: 2022-01-01</li>
                <li>Country of Origin: Japan</li>
                <li>Mileage: 10,000 km</li>
            </ul>
        </div>
        
        <div class="car-container">
            <img src="images/images/featured-cars/fordeverest.jpeg" alt="Car Image5">
            <ul>
                <li>Name: FORDEVEREST</li>
                <li>Date of Manufacture: 2022-01-01</li>
                <li>Country of Origin: Japan</li>
                <li>Mileage: 10,000 km</li>
            </ul>
        </div>
        
        <div class="car-container">
            <img src="images/images/featured-cars/forester.jpeg" alt="Car Image6">
            <ul>
                <li>Name: FORESTER</li>
                <li>Date of Manufacture: 2022-01-01</li>
                <li>Country of Origin: Japan</li>
                <li>Mileage: 10,000 km</li>
            </ul>
        </div>
        
        <div class="car-container">
            <img src="images/images/featured-cars/newaudi.jpeg" alt="Car Image7">
            <ul>
                <li>Name: AUDI</li>
                <li>Date of Manufacture: 2022-01-01</li>
                <li>Country of Origin: Japan</li>
                <li>Mileage: 10,000 km</li>
            </ul>
        </div>
        
        <div class="car-container">
            <img src="images/images/featured-cars/fordranger.jpeg" alt="Car Image8">
            <ul>
                <li>Name: RANGER</li>
                <li>Date of Manufacture: 2022-01-01</li>
                <li>Country of Origin: Japan</li>
                <li>Mileage: 10,000 km</li>
            </ul>
        </div>
        
        <div class="car-container">
            <img src="images/images/featured-cars/toyotacrown.jpeg" alt="Car Image8">
            <ul>
                <li>Name: TOYOTA CROWN</li>
                <li>Date of Manufacture: 2022-01-01</li>
                <li>Country of Origin: Japan</li>
                <li>Mileage: 10,000 km</li>
            </ul>
        </div>
        <div class="car-container">
            <img src="images/images/featured-cars/lexus2.jpeg" alt="Car Image8">
            <ul>
                <li>Name: LEXUS</li>
                <li>Date of Manufacture: 2022-01-01</li>
                <li>Country of Origin: Japan</li>
                <li>Mileage: 10,000 km</li>
            </ul>
        </div>
        <div class="car-container">
            <img src="images/images/featured-cars/newtx.jpeg" alt="Car Image8">
            <ul>
                <li>Name: LANDCRUISER TX</li>
                <li>Date of Manufacture: 2022-01-01</li>
                <li>Country of Origin: Japan</li>
                <li>Mileage: 10,000 km</li>
            </ul>
        </div>
        <div class="car-container">
            <img src="images/images/featured-cars/isuzudmux.jpeg" alt="Car Image8">
            <ul>
                <li>Name: ISUZU DMUX</li>
                <li>Date of Manufacture: 2022-01-01</li>
                <li>Country of Origin: Japan</li>
                <li>Mileage: 10,000 km</li>
            </ul>
        </div>
        <div class="car-container">
            <img src="images/images/featured-cars/discovery.jpeg" alt="Car Image8">
            <ul>
                <li>Name: DISCOVERY</li>
                <li>Date of Manufacture: 2022-01-01</li>
                <li>Country of Origin: Japan</li>
                <li>Mileage: 10,000 km</li>
            </ul>
        </div>
        <div class="car-container">
            <img src="images/images/featured-cars/rangerover2.jpeg" alt="Car Image8">
            <ul>
                <li>Name: RANGE ROVER</li>
                <li>Date of Manufacture: 2022-01-01</li>
                <li>Country of Origin: Japan</li>
                <li>Mileage: 10,000 km</li>
            </ul>
        </div>
        <div class="car-container">
            <img src="images/images/featured-cars/pajero.jpeg" alt="Car Image8">
            <ul>
                <li>Name: PAJERO</li>
                <li>Date of Manufacture: 2022-01-01</li>
                <li>Country of Origin: Japan</li>
                <li>Mileage: 10,000 km</li>
            </ul>
        </div>
        <div class="car-container">
            <img src="images/images/featured-cars/alphard.jpeg" alt="Car Image8">
            <ul>
                <li>Name: ALPHARD</li>
                <li>Date of Manufacture: 2022-01-01</li>
                <li>Country of Origin: Japan</li>
                <li>Mileage: 10,000 km</li>
            </ul>
        </div>
        <div class="car-container">
            <img src="images/images/featured-cars/matatuhiace.jpeg" alt="Car Image8">
            <ul>
                <li>Name: HIACE</li>
                <li>Date of Manufacture: 2022-01-01</li>
                <li>Country of Origin: Japan</li>
                <li>Mileage: 10,000 km</li>
            </ul>
        </div>
        <div class="car-container">
            <img src="images/images/featured-cars/chrysler.jpg" alt="Car Image8">
            <ul>
                <li>Name: CHRYSLER</li>
                <li>Date of Manufacture: 2022-01-01</li>
                <li>Country of Origin: Japan</li>
                <li>Mileage: 10,000 km</li>
            </ul>
        </div>
        <div class="car-container">
            <img src="images/images/featured-cars/damemobius.jpeg" alt="Car Image8">
            <ul>
                <li>Name: MOBIUS</li>
                <li>Date of Manufacture: 2022-01-01</li>
                <li>Country of Origin: Japan</li>
                <li>Mileage: 10,000 km</li>
            </ul>
        </div>
        <div class="car-container">
            <img src="images/images/featured-cars/gwagon.jpeg" alt="Car Image8">
            <ul>
                <li>Name: G-WAGON</li>
                <li>Date of Manufacture: 2022-01-01</li>
                <li>Country of Origin: Japan</li>
                <li>Mileage: 10,000 km</li>
            </ul>
        </div>
        <div class="car-container">
            <img src="images/images/featured-cars/mercedes1.jpeg" alt="Car Image8">
            <ul>
                <li>Name: MERCEDES BENZ</li>
                <li>Date of Manufacture: 2022-01-01</li>
                <li>Country of Origin: Japan</li>
                <li>Mileage: 10,000 km</li>
            </ul>
        </div>
        <div class="car-container">
            <img src="images/images/featured-cars/bmw2.jpeg" alt="Car Image8">
            <ul>
                <li>Name: BMW NEWMODEL</li>
                <li>Date of Manufacture: 2022-01-01</li>
                <li>Country of Origin: Japan</li>
                <li>Mileage: 10,000 km</li>
            </ul>
        </div>
        <div class="car-container">
            <img src="images/images/featured-cars/lexus1.jpeg" alt="Car Image8">
            <ul>
                <li>Name: LEXUS L600</li>
                <li>Date of Manufacture: 2022-01-01</li>
                <li>Country of Origin: Japan</li>
                <li>Mileage: 10,000 km</li>
            </ul>
        </div>
        <div class="car-container">
            <img src="images/images/featured-cars/volkswagen.jpeg" alt="Car Image8">
            <ul>
                <li>Name: VOLKSWAGEN</li>
                <li>Date of Manufacture: 2022-01-01</li>
                <li>Country of Origin: Japan</li>
                <li>Mileage: 10,000 km</li>
            </ul>
        </div>
        <div class="car-container">
            <img src="images/images/featured-cars/lc200.jpeg" alt="Car Image8">
            <ul>
                <li>Name: LANDCRUISER LC200</li>
                <li>Date of Manufacture: 2022-01-01</li>
                <li>Country of Origin: Japan</li>
                <li>Mileage: 100,000 km</li>
            </ul>
        </div>
    </div>




    <div class="body-h1">
        <h1>Our Services</h1>
    </div>
            <!--service start -->
            <div id="service" class="service">
                <div class="service-container">
                        
                        <div class="single-service-item">
                            <div class="single-service-image">
                                <img src="images/maintenance.png" alt="icon1">
                            </div>
                            <div class="single-service-h2">
                                <h2><a href="#">Automated Garage</a></h2>
                            </div>
                            <div class="single-service-p">
                                <p>
                                    Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut den fugit sed quia.  
                                </p>
                            </div>
                        </div>

                        <div class="single-service-item">
                            <div class="single-service-image">
                                <img src="images/bigdealer.jpg" alt="icon1">
                            </div>
                            <div class="single-service-h2">
                                <h2><a href="#">largest dealership <span> of</span> cars</a></h2>
                            </div>
                            <div class="single-service-p">
                                <p>
                                    Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut den fugit sed quia.  
                                </p>
                            </div>
                        </div>
                  
                        <div class="single-service-item">
                            <div class="single-service-image">
                                <img src="images/phone.png" alt="icon2">
                            </div>
                            <div class="single-service-h2">
                                <h2><a href="#">unlimited repair warranty</a></h2>
                            </div>
                            <div class="single-service-p">
                                <p>
                                    Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut den fugit sed quia.  
                                </p>
                            </div>
                        </div>
               
                 
                        <div class="single-service-item">
                            <div class="single-service-image">
                                <img src="images/car-insurance.png" alt="icon3">
                            </div>
                            <div class="single-service-h2">
                                <h2><a href="#">insurance support</a></h2>
                            </div>
                            <div class="single-service-p">
                                <p>
                                    Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut den fugit sed quia. 
                                </p>
                            </div>
                        </div>
                    
				
                    
                </div><!--/.container-->
            </div>

            <div class="body-h1">
                <h1>What Our Clients Say</h1>
            </div>
    		<!-- clients-say strat -->
            <div class="clients-say" id="clients">
                    <div class="testimonials">
                        <div class="testimonial-box">
                            <div class="testimonial-img">
                                <img src="images/images/clients/client3.jpeg" alt="Image of Client" />
                            </div>
                            <div class="testimonial-person">
                                <h2><a href="#">Yobra Nim</a></h2>
                                <h4>New York</h4>
                            </div>
                            <div class="testimonial-comment">
                                <p>
                                    Sed ut pers unde omnis iste natus error sit voluptatem accusantium dolor laudan rem aperiam, eaque ipsa quae ab illo inventore verit.
                                </p>
                            </div>
                        </div>
                        <div class="testimonial-box">
                            <div class="testimonial-img">
                                <img src="images/images/clients/client2.jpeg" alt="Image of Client" />
                            </div>
                            <div class="testimonial-person">
                                <h2><a href="#">Eddie Gathenge</a></h2>
                                <h4>London</h4>
                            </div>
                            <div class="testimonial-comment">
                                <p>
                                    Sed ut pers unde omnis iste natus error sit voluptatem accusantium dolor laudan rem aperiam, eaque ipsa quae ab illo inventore verit.
                                </p>
                            </div>
                        </div>
                        <div class="testimonial-box">
                            <div class="testimonial-img">
                                <img src="images/images/clients/client1.jpeg" alt="Image of Client" />
                            </div>
                            <div class="testimonial-person">
                                <h2><a href="#">Maina AKA Lawre</a></h2>
                                <h4>Washington</h4>
                            </div>
                            <div class="testimonial-comment">
                                <p>
                                    Sed ut pers unde omnis iste natus error sit voluptatem accusantium dolor laudan rem aperiam, eaque ipsa quae ab illo inventore verit.
                                </p>
                            </div>
                        </div>

                    </div>
            </div>
		<!-- clients-say end -->
        <div class="body-h1">
            <h1>Our Brands</h1>
        </div>
		<!--brand strat -->
		<section id="brand"  class="brand">
			<div class="brand-container" id="logos">
				<div class="brand-area">
						<div class="item">
							<a href="#">
								<img src="images/images/brand/fordlogo.png" alt="brand-image" />
							</a>
						</div><!--/.item-->
						<div class="item">
							<a href="#">
								<img src="images/images/brand/benzcars.png" alt="brand-image" />
							</a>
						</div><!--/.item-->
						<div class="item">
							<a href="#">
								<img src="images/images/brand/toyotabrand.jpeg" alt="brand-image" />
							</a>
						</div><!--/.item-->

						<div class="item">
							<a href="#">
								<img src="images/images/brand/audi.png" alt="brand-image" />
							</a>
						</div><!--/.item-->
                        <div class="item">
							<a href="#">
								<img src="images/images/brand/mitsu.png" alt="brand-image" />
							</a>
						</div><!--/.item-->
				</div><!--/.clients-area-->

			</div><!--/.container-->

		</section><!--/brand-->	
		<!--brand end -->
        <div class="footer-message">
            <p>YEAH WE FELL IN LOVE WITH MACHINES!!!!!!</P>
        </div>
    <footer class="grid-container">
        <div class="footer-row">
            <h3>Get in Touch</h3>
            <p><i class="fa fa-phone" aria-hidden="true"></i> +254-7483-742-57</p>
            <p><i class="fa fa-envelope" aria-hidden="true"></i> Email Us:smartcars1@gmail.com</p>
            <p><i class="fa fa-globe" aria-hidden="true"></i> www.smartcars.com</p>
            <p><i class="fa fa-map-marker" aria-hidden="true"></i> Nairobi, Kenya</p>
            <p>Follow us:</p>
        </div>
    
        <div class="footer-row">
            <h3>Recent Posts</h3>
            <p>Events</p>
            <p>Latest Cars</p>
            <p>Car Prices</p>
            <p>Highest Rated Cars</p>
        </div>
    
        <div class="footer-row" id="contact">
            <h3>Site Links</h3>
            <p>Contact Us</p>
            <p>About Us</p>
            <p>Directions</p>
            <p>Car Wallpapers</p>
            <p>Promotions</p>
            <p>Blog</p>
            <p>FAQs</p>
        </div>
    
        <div class="social-icons">
            <i class="fa-brands fa-whatsapp" aria-hidden="true"></i>
            <i class="fa-brands fa-facebook" aria-hidden="true"></i>
            <i class="fa-brands fa-twitter" aria-hidden="true"></i>
            <i class="fa-brands fa-telegram" aria-hidden="true"></i>
            <i class="fa-brands fa-instagram" aria-hidden="true"></i>
            <i class="fa-brands fa-youtube-play" aria-hidden="true"></i>
        </div>
    
        <div class="copyright">
            <p> Copyright &copy; 2023 Car Exploration </p>
            <p> All Rights Reserved </p>
            <p> Terms of service </p>
            <p>Privacy policy<p></p>
            <p> Contact Us </p>
        </div>
    </footer>
    
    
</body>

</html>