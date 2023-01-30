<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nyamatusi Camp</title>
    <?php wp_head();?>
    <?php $hero = get_field('hero');?>


</head>
<body>
    
    <!-- This is my First section -->
    <section class="backimgsimba">
    
        <!-- Main navigation -->
<header>
            <!-- Navbar -->
            <nav class="navbar">
                <div class="brand-title"><span class="nav-text">Nyamatusi</span></div>
                <!-- Here is the toggle button -->
        
                <a href="#" class="toggle-button">
                    <span class="bar"></span>
                    <span class="bar"></span>
                    <span class="bar"></span>
                </a>
        
                <!-- Toggle ends here -->
                <div class="navbar-links">
                    <ul>
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Services</a></li>
                        <li><a href="#">Testimonials</a></li>
                    </ul>
                </div>
            </nav>  
            <hr class="border-bottom"> 
            <!-- END OF NAVBAR -->

            <div class="container">        
                            <div class=""> <span class="ind-txt"> <?php echo $hero['main_title'];?> </span></div>
                            <br>
                            
                            <h1 class="nature-bold"><?php echo $hero['small_title'];?></h1>
            </div>
            <!-- Social Icons -->
            <div class="icons-social">
                <div><img src="<?php echo get_template_directory_uri().'/assets/socials/facebook-app-symbol.png'; ?>" alt="" class="icon-1" /></div>
                <div><img src="<?php echo get_template_directory_uri().'/assets/socials/instagram.png'; ?>" alt="" class="icon-1" /></div>
                <div><img src="<?php echo get_template_directory_uri().'/assets/socials/twitter.png'; ?>" alt="" class="icon-1" /></div>
            </div>

            <div><a href="#oursection"><img src="<?php echo get_template_directory_uri().'/assets/images/down-arrow.png'; ?>" alt="" class="icon-1" /></a></div>
            <!-- End of Icons -->

</header>