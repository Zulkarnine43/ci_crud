<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Restaurant</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"
        integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA=="
        crossorigin="anonymous" />
    <link href="https://fonts.googleapis.com/css2?family=Handlee&family=Montserrat&family=Roboto&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="style.css">

<link href="assets/css/style.css" rel="stylesheet">


</head>

<body>
    <div class="container">

        <!-- header starts  -->
        <header>
            <div class="row">
                <div class="col-lg-4 col-md-12">                   
                   <div class="logo-div">
                        <a href="#">
                            <i class="logo fas fa-utensils fa-3x"></i>
                        </a>
                   </div>                   
                </div>
                <div class="col-lg-8 col-md-12">
                    <nav class="topnav" id="myTopnav">
                        <ul>
                            <li>
                                <a href="javascript:void(0);" class="icon" onclick="myFunction()">
                                    <i class="fa fa-bars fa-2x"></i>
                                </a>
                            </li>
                            <li><a href="#">Home</a></li>
                            <li><a href="#about-us">About us</a></li>
                            <li><a href="#menu-section">Food Menu</a></li>
                            <li><a href="#contact-section">Contact</a></li>
                            
                        </ul>
                    </nav>
                </div>
            </div>
        </header>
        <!-- header ends  -->

        <!-- banner starts here  -->
        <main>
            <section id="banner-section">
                <div class="banner-contents">
                    <h1>Spicy King Restaurant</h1>
                    <p>20% discounts for Take away</p>
                    <button class="btn" id="orderButton">Order Now</button>
                </div>
            </section>

            <section id="about-us">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="about-us-contents">
                            <h3>About us</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse nostrum atque dolor? Sit
                                voluptates ea soluta quam? Dignissimos perferendis adipisci, dolorem, neque debitis
                                cumque consequuntur placeat ratione suscipit nam illo expedita qui quisquam in est.
                                Quibusdam maxime quo mollitia totam, praesentium error commodi atque dolores temporibus
                                accusamus aspernatur sed in voluptatum expedita iure, numquam dicta qui facilis.
                                Deserunt mollitia dolores fugiat quia itaque optio veniam doloribus tempore, quis non a
                                tenetur incidunt earum sapiente eos unde dignissimos laboriosam expedita facilis?</p>
                        </div>
                    </div>
                </div>
            </section>
            <!-- banner ends here  -->

            <!-- food menu starts here  -->

    

            <section id="menu-section">
                <div class="row">
                     <?php foreach ($data as $row) { ?>
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="card">
                            <div class="card-body">
                                <img src="<?php echo $row['image'] ?>" alt="food1">
                                <div class="item-desc">
                                    <h3 class="item-name"><?php echo $row['product_name'] ?></h3>
                                    <p>Item No: <?php echo $row['product_categorie'] ?></p>
                                    <p>Stock: <?php echo $row['unit_in_stock'] ?></p>
                                    <p>Description: <?php echo $row['description'] ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                     <?php  } ?> 
                </div>
            </section>

            
            <!-- food menu ends here  -->

            <!-- contact starts here  -->
            <section id="contact-section">
                <div class="row">
                    <div class="col-lg-8">
                        <iframe class="map"
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3618.945448178661!2d91.90112830144764!3d24.89984233395701!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x375054aeedc809bb%3A0x60b5f614c843a3bf!2sTilagor%2C%20Sylhet%2C%20Bangladesh!5e0!3m2!1sen!2sfi!4v1603751552543!5m2!1sen!2sfi"
                            frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false"
                            tabindex="0"></iframe>
                    </div>
                    <div class="col-lg-4">
                        <div class="contact-details">
                            <h3>Contact Details</h3> <br>

                            <div>
                                <h5>Spicy King Restaurant</h5>
                                <address>
                                    192 London Avenue,
                                    Manor park,
                                    London
                                </address> <br>
                            </div>

                            <div>
                                <h5>Phone : </h5>
                                <p>+8801710444700</p><br>
                            </div>
                            <div>
                                <h5>Opening hours :</h5>
                                <p>
                                    Tue-Sun: 5PM to 11PM <br>
                                    Inc. Bank Holidays
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- contact ends here  -->
        </main>

        <footer>
            <div class="row">
                <div class="col-lg-6">
                    <p>&copy; All right reserved by Spicy King</p>
                </div>
                <div class="col-lg-6">
                    <div class="social-menus">
                        <a href="#"><i class="icon-style fas fa-arrow-up"></i></a>
                        <a href="#"><i class="icon-style fab fa-facebook-f"></i></a>
                        <a href="#"><i class="icon-style  fab fa-youtube"></i></a>
                        <a href="#"><i class="icon-style  fab fa-twitter"></i></a>
                        <a href="#"><i class="icon-style  fab fa-instagram"></i></a>

                        <form method="POST" action="<?php echo base_url() ?>data_save">
                        	<label>Email</label>
                        	<input type="email" name="email">
                        	<input type="submit" name="" value="submit">
                        </form>

                    </div>
                </div>
            </div>
        </footer>

    </div>


    <script>
        function myFunction() {
            var x = document.getElementById("myTopnav");
            if (x.className === "topnav") {
                x.className += " responsive";
            } else {
                x.className = "topnav";
            }
        }
    </script>
</body>

</html>