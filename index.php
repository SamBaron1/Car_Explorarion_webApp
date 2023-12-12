<?php 
    require_once 'database/connection.php';

    $carsquery="SELECT * FROM cars";
    $carsresult=mysqli_query($conn,$carsquery);

    $makesquery="SELECT * FROM carmakes";
    $makesresults=mysqli_query($conn,$makesquery);

    $caryearquery="SELECT DISTINCT manufactureyear FROM cars";
    $yearresult=mysqli_query($conn,$caryearquery);

    $carmakequery="SELECT DISTINCT make FROM cars";
    $makeresult=mysqli_query($conn,$carmakequery);

    $carmodelquery="SELECT DISTINCT model FROM cars";
    $modelresult=mysqli_query($conn,$carmodelquery);

    $carpricequery="SELECT DISTINCT price FROM cars";
    $priceresult=mysqli_query($conn,$carpricequery);

    $carconditionquery="SELECT DISTINCT carcondition FROM cars";
    $conditionresult=mysqli_query($conn,$carconditionquery);

    $carbodystylequery="SELECT DISTINCT bodytype FROM cars";
    $bodystyleresult=mysqli_query($conn,$carbodystylequery);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="stylesheet" href="fontawesome-free-6.4.2-web/css/all.min.css">
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet">
    <title>Car Exploration Web App</title>
    <link rel="stylesheet" href="style.css">
    <script src="script.js" defer></script>
</head>

<body>
    <div class="welcome-hero">
        <div class="header">
            <div id="loginLinks">

                <?php if(!isset($_SESSION['user-email'])):?>
                    <div class="links">
                        <a href="login.php" id="login">Login</a>
                        <a href="sign_up.php" id="signUp">Sign Up</a>
                    </div>
                <?php endif?>
                <div class="navbaricons">
                    <i class="fa-solid fa-bars" id="opennavbtn"></i>
                    <i class="fa-solid fa-xmark" id="closenavbtn" style="display: none;"></i>
                </div>

            </div>

            <!--<div id="searchContainer">
                <input type="text" id="searchInput" placeholder="Search for cars...">
                <button id="searchButton">Search</button>
            </div>--> 
        </div> 
        
        <div class="nav-container">

            <div class="navbar">
                <div class="email">
                    <p>@Smartcars.com</p>
                </div>
                <ul class="nav-list">
                    <li><a href="#home">HOME</a></li>
                    <li><a href="#featured">FEATURED</a></li>
                    <li><a href="#services">SERVICES</a></li>
                    <li><a href="#clients">CLIENTS</a></li>
                    <li><a href="#brands">BRANDS</a></li>
                    <li><a href="#contacts">CONTACTS</a></li>
                </ul>
            
                <?php
                        if(isset($_SESSION['user-email'])): ?>
                <div class="profile">
                    <div class="dashboard">
                        <div class="profile_pic">
                            <?php
                            $image=$_SESSION['user-email'];
                            $image_query="SELECT profilepic FROM users WHERE email='$image'";
                            $image_results=mysqli_query($conn,$image_query);
                            $image_db=mysqli_fetch_assoc($image_results);
                            $profilepic=$image_db['profilepic'];
                            echo '<img src="'.$profilepic .'"alt="">';
                            ?>
                        </div>
                            <div class="profile_others">
                                <ul>
                                    <li id="debug"><a href="dashboard.php">Dashboard</a></li>
                                    <li><a href="<?=ROOT_URL.'logout.php' ?>">Logout</a></li>
                                </ul>
                            </div>
                    </div>
                </div>
                <?php endif?>
            </div>
        </div>

        <div class="home-container" id="home">
            <div class="welcome-hero-txt">
                <h2>get your desired car in resonable price</h2>
                <p>
                    Pre-loved vehicles from smartcars dealers. A real-time guaranteed traders.
                </p>
                <button class="welcome-btn" onclick="window.location.href='#'">contact us</button>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="model-search-content">
                    <form action="<?=ROOT_URL?>search.php" method="post">
                    <div class="row">
                        <div class="col-md-offset-1 col-md-2 col-sm-12">
                            <div class="single-model-search">
                                <h2>select year</h2>
                                <div class="model-select-icon">
                                    <select class="form-control" name="year">
                                            <option>0</option>
                                        <?php while($car=mysqli_fetch_assoc($yearresult)) :?>
                                            <option><?=$car['manufactureyear']?></option>
                                        <?php endwhile?>
                                    </select>
                                </div>
                            </div>
                            <div class="single-model-search">
                                <h2>body style</h2>
                                <div class="model-select-icon">
                                    <select class="form-control" name="bodystyle">
                                            <option>0</option>
                                        <?php while($car=mysqli_fetch_assoc($bodystyleresult)) :?>
                                            <option><?=$car['bodytype']?></option>
                                        <?php endwhile?>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-offset-1 col-md-2 col-sm-12">
                            <div class="single-model-search">
                                <h2>select make</h2>
                                <div class="model-select-icon">
                                    <select class="form-control" name="make">
                                            <option>0</option>
                                        <?php while($car=mysqli_fetch_assoc($makeresult)) :?>
                                            <option><?=$car['make']?></option>
                                        <?php endwhile?>
                                    </select>
                                </div>
                            </div>
                            <div class="single-model-search">
                                <h2>car condition</h2>
                                <div class="model-select-icon">
                                    <select class="form-control" name="condition">
                                            <option>0</option>
                                        <?php while($car=mysqli_fetch_assoc($conditionresult)) :?>
                                            <option><?=$car['carcondition']?></option>
                                        <?php endwhile?>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-offset-1 col-md-2 col-sm-12">
                            <div class="single-model-search">
                                <h2>select model</h2>
                                <div class="model-select-icon">
                                    <select class="form-control" name="model">
                                            <option>0</option>
                                        <?php while($car=mysqli_fetch_assoc($modelresult)) :?>
                                            <option><?=$car['model']?></option>
                                        <?php endwhile?>
                                    </select>
                                </div>
                            </div>
                            <div class="single-model-search">
                                <h2>select price</h2>
                                <div class="model-select-icon">
                                    <select class="form-control" name="price">
                                            <option>0</option>
                                        <?php while($car=mysqli_fetch_assoc($priceresult)) :?>
                                            <option><?=$car['price']?></option>
                                        <?php endwhile?>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2 col-sm-12">
                            <div class="single-model-search text-center">
                                <input class="welcome-btn model-search-btn" type="submit" name="search" >
                            </div>
                        </div>
                    </div>
                    </form>
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
                <p>
                "Explore Unrivaled Performance and Elegance: 
                    Our curated selection of cars combines cutting-edge technology,
                     sophisticated design, and powerful performance.
                      Discover a range of vehicles that redefine driving experience.
                 Excellence in every model, yours to explore."
                </p>
            </div>
        </div>
    </div>


    <h1 class="sub-title">Featured <span>Cars.</span></h1>
    <div class="car-details" id="featured">
        <?php while($car=mysqli_fetch_assoc($carsresult)) : ?>

            <div class="car-container">
                <a href="<?=ROOT_URL?>car.php?id=<?=$car['id']?>">
                    <img src="<?=$car['frontview'] ?>" alt="Car Image1">
                </a>
                    <ul>
                        <li>Name: <?=$car['make']. " " .$car['model']?></li>
                        <li>Price: Kshs <?=$car['price']?></li>
                    </ul>
            </div>
        <?php endwhile?>
    </div>



            <!--service start -->
            <div class="service" id="services">
                <h1 class="sub-title">Our <span>Services.</span></h1>
                <div class="service-container">
                        <div class="single-service-item">
                            <div class="single-service-image">
                                <img src="images/maintenance.png" alt="icon1">
                            </div>
                            <div class="single-service-h2">
                                <h2>Automated Garage</h2>
                                <p>
                                   Our automated garage takes the hassle out of parking.Experience convenience at its best with state-of-the-art technology, ensuring seamless parking and retrieval. 
                                </p>
                            </div>
                        </div>

                        <div class="single-service-item">
                            <div class="single-service-image">
                                <img src="images/bigdealer.jpg" alt="icon1">
                            </div>
                            <div class="single-service-h2">
                                <h2>largest dealership <span> of</span> cars</h2>
                                <p>
                                  Home to the widest selection.Your journey begins with the largest slection in the market.
                            </div>
                        </div>
                  
                        <div class="single-service-item">
                            <div class="single-service-image">
                                <img src="images/phone.png" alt="icon2">
                            </div>
                            <div class="single-service-h2">
                                <h2>unlimited repair warranty</h2>
                                <p>
                                 Our unlimited repair ensures worry-free ownership. Drive with confidence, knowing that we stand behind the quality of our service and repairs."  
                                </p>
                            </div>
                        </div>
               
                 
                        <div class="single-service-item">
                            <div class="single-service-image">
                                <img src="images/car-insurance.png" alt="icon3">
                            </div>
                            <div class="single-service-h2">
                                <h2>insurance support</h2>
                                <p>
                                From personalized policies to prompt claims assistance, we've got you safeguarded on your journey. Drive with confidence, knowing we have your back."
                                </p>
                            </div>
                        </div>
                    
				
                    
                </div><!--/.container-->
            </div>

    		<!-- clients-say strat -->
            <div class="clients-say" id="clients">
                <h1 class="sub-title">What Our <span>Clients Say.</span></h1>
                    <div class="testimonials">
                        <div class="testimonial-box">
                            <div class="testimonial-img">
                                <img src="images/images/clients/client3.jpeg" alt="Image of Client" />
                            </div>
                            <div class="testimonial-person">
                                <h2><a href="#">Yobra Nim</a></h2>
                                <h4>Murang'a 027</h4>
                            </div>
                            <div class="testimonial-comment">
                                <p>
                                The diverse range of vehicles exceeded my expectations, and the service throughout the buying process was seamless. Couldn't be happier with my purchase!"
                                </p>
                            </div>
                        </div>
                        <div class="testimonial-box">
                            <div class="testimonial-img">
                                <img src="images/images/clients/client2.jpeg" alt="Image of Client" />
                            </div>
                            <div class="testimonial-person">
                                <h2><a href="#">Eddie Gathenge</a></h2>
                                <h4>Kiambu 026</h4>
                            </div>
                            <div class="testimonial-comment">
                                <p>
                                From the impressive selection of top-notch vehicles to the after-sales service, every aspect is a testament to their commitment to excellence. 
                                </p>
                            </div>
                        </div>
                        <div class="testimonial-box">
                            <div class="testimonial-img">
                                <img src="images/images/clients/client1.jpeg" alt="Image of Client" />
                            </div>
                            <div class="testimonial-person">
                                <h2><a href="#">Maina AKA Lawre</a></h2>
                                <h4>Nyandarua 018</h4>
                            </div>
                            <div class="testimonial-comment">
                                <p>
                                "Unmatched Quality and Support: The attention to detail in both the cars and customer care is unmatched. Proud to be part of the SmartCars family!"
                                </p>
                            </div>
                        </div>

                    </div>
            </div>
		<!-- clients-say end -->

		<!--brand strat -->
		<section id="brands"  class="brand">
        <h1 class="sub-title">Our <span>Brands.</span></h1>
			<div class="brand-container" id="logos">
				<div class="brand-area">
                    <?php while($make=mysqli_fetch_assoc($makesresults)) : ?>
						<div class="item">
							<a href="<?=ROOT_URL?>make.php?id=<?=$make['id']?>">
								<img src="<?=$make['logo'] ?>" alt="brand-image" />
							</a>
                            <div class="description">
                                <p><?=$make['makename']?></p>
                            </div>
						</div><!--/.item-->
                    <?php endwhile?>
				</div><!--/.clients-area-->

                </div><!--/.container-->

            </section><!--/brand-->	
            <!--brand end -->
        <footer>
            <div class="footer" id="contacts">
                <div class="grid-container">
                    <div class="footer-row">
                        <h3>Get in Touch</h3>
                        <p><i class="fa fa-phone" aria-hidden="true"></i> +254-7483-742-57</p>
                        <p><i class="fa fa-envelope" aria-hidden="true"></i> Email Us:smartcars1@gmail.com</p>
                        <p><i class="fa fa-globe" aria-hidden="true"></i> www.smartcars.com</p>
                        <p><i class="fa fa-map-marker" aria-hidden="true"></i> Nairobi, Kenya</p>
                        <p>Follow us:</p>
                        <div class="social-icons">
                            <i class="fa-brands fa-whatsapp" aria-hidden="true"></i>
                            <i class="fa-brands fa-facebook" aria-hidden="true"></i>
                            <i class="fa-brands fa-twitter" aria-hidden="true"></i>
                            <i class="fa-brands fa-telegram" aria-hidden="true"></i>
                            <i class="fa-brands fa-instagram" aria-hidden="true"></i>
                            <i class="fa-brands fa-youtube" aria-hidden="true"></i>
                        </div>
                    </div>
                
                    <div class="footer-row2">
                        <h3>Recent Posts</h3>
                        <p>Events</p>
                        <p>Latest Cars</p>
                        <p>Car Prices</p>
                        <p>Highest Rated Cars</p>
                        <div class="final">
                            Automotives No Limit!!!
                        </div>
                    
                    </div>
                
                    <div class="footer-row3" id="contact">
                        <h3>Site Links</h3>
                        <p>Contact Us</p>
                        <p>About Us</p>
                        <p>Directions</p>
                        <p>Car Wallpapers</p>
                        <p>Promotions</p>
                        <p>Blog</p>
                        <p>FAQs</p>
                    </div>
                </div>
            </div>
        
            
        </footer>
        <div class="last-text">
            <p>Developed with much Honour by CS BOYS &copy; 2023. Car Exploration. All Rights Reserved.
                Terms of service. Privacy policy.
            </p>

        </div>
        <a href="#" class="top"><i class="bx bx-up-arrow-alt"></i> </a>
        
    
</body>

</html>
