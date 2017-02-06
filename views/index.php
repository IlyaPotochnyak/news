<!--<!DOCTYPE html>-->
<!--<html>-->
<!--  <head>-->
<!--    <meta charset="utf-8">-->
<!--    <title></title>-->
<!--  </head>-->
<!--  <body>-->
<!---->
<!--    --><?php //foreach ($items as $item):  ?>
<!--      <h1>  --><?php //echo $item['title'] ; ?><!--</h1><br>-->
<!--      <div>-->
<!--        --><?php //echo $item['text']; ?>
<!--      </div>-->
<!--      <br>-->
<!--      <div>-->
<!--        --><?php //echo $item['date']; ?>
<!--      </div>-->
<!---->
<!--    --><?php //endforeach; ?>
<!---->
<!--    <div class="">-->
<!--      <br>-->
<!--      <a href="/views/add.php">Добавить новость</a>-->
<!--    </div>-->
<!--    --><?php //echo date("d.m.Y H : i : s"); ?>
<!--  </body>-->
<!--</html>-->

<?php //var_dump($items);
//die; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
<div id="wrapper">
    <div id="header">
        <div class="container clearfix">
            <div id="logo">
                <a href="#"><img src="img/Logo-Treehouse.png" alt="" width="79px" height="28px"></a>
            </div>
            <ul class="nav">
                <li><a href="#">Home</a></li>
                <li><a href="#">Services</a></li>
                <li><a href="#">Portfolio</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
        </div>
    </div>
    <div id="home">
        <div class="container clearfix">
            <h3>Welcome To Our Studio!</h3>
            <h1>It’s nice to Meet you</h1>
            <button class="btn">Tell Me More</button>
        </div>
    </div>
    <div id="services">
        <div class="container">
            <h2 class="title">Services</h2>
            <p class="descrp">Proin iaculis purus consequat sem cure.</p>
            <div class="serv-wrapper clearfix">
                <div class="serv-item commerse">
                    <h5 class="title">E-Commerce</h5>
                    <p class="serv-descrp">Proin iaculis purus consequat sem cure digni ssim. Donec porttitora entum
                        suscipit </p>
                </div>
                <div class="serv-item web">
                    <h5 class="title">Responsive Web</h5>
                    <p class="serv-descrp">Proin iaculis purus consequat sem cure digni ssim. Donec porttitora entum
                        suscipit </p>
                </div>
                <div class="serv-item security">
                    <h5 class="title">Web Security</h5>
                    <p class="serv-descrp">Proin iaculis purus consequat sem cure digni ssim. Donec porttitora entum
                        suscipit </p>
                </div>
            </div>
        </div>
    </div>
    <div id="portfolio">
        <div class="container">
            <h2 class="title">Our portfolio</h2>
            <p class="descrp">Proin iaculis purus consequat sem cure.</p>
            <div class="portfolio-wrapper clearfix">
                <div class="port-item">
                    <a href="#"><img src="img/port-1.png" alt="" width="291px" height="301px"></a>
                    <div class="port-item-footer">
                        <h5 class="title">Ebony &amp; Ivory</h5> <span>Branding</span></div>
                </div>
                <div class="port-item">
                    <a href="#"><img src="img/port-2.png" alt="" width="291px" height="301px"></a>
                    <div class="port-item-footer">
                        <h5 class="title">Ebony &amp; Ivory</h5> <span>Branding</span></div>
                </div>
                <div class="port-item">
                    <a href="#"><img src="img/port-3.png" alt="" width="291px" height="301px"></a>
                    <div class="port-item-footer">
                        <h5 class="title">Ebony &amp; Ivory</h5> <span>Branding</span></div>
                </div>
                <div class="port-item">
                    <a href="#"><img src="img/port-4.png" alt="" width="291px" height="301px"></a>
                    <div class="port-item-footer">
                        <h5 class="title">Ebony &amp; Ivory</h5> <span>Branding</span></div>
                </div>
                <div class="port-item">
                    <a href="#"><img src="img/port-5.png" alt="" width="291px" height="301px"></a>
                    <div class="port-item-footer">
                        <h5 class="title">Ebony &amp; Ivory</h5> <span>Branding</span></div>
                </div>
                <div class="port-item">
                    <a href="#"><img src="img/port-6.png" alt="" width="291px" height="301px"></a>
                    <div class="port-item-footer">
                        <h5 class="title">Ebony &amp; Ivory</h5> <span>Branding</span></div>
                </div>
            </div>
        </div>
    </div>
    <div id="about">
        <div class="container">
            <h2 class="title">About Us</h2>
            <p class="descrp">Proin iaculis purus consequat sem cure.</p>
            <div class="about-wrapper clearfix">

                <?php foreach ($items as $item):
//                    echo $item['id'] % 2;
//die;
                    if ($item['id'] % 2 !== 0) {
                        ?>
                        <div class="clear">
                            <div class="about-text left">
                                <h5 class="title"><?php echo $item['title'];
                                    ?>
                                </h5>
                                <p class="text-align-right"> <?php echo $item['text']; ?>
                                    <br></p>
                            </div>

                            <div class="about-img left"><img src="img/about-1.png" alt="" width="" height=""></div>
                        </div>   <?php
                    } else {?>


                    <div class="clear">

                        <div class="about-text right">
                            <h5 class="title text-align-left"><?php echo $item['title']; ?></h5>
                            <p><?php echo $item['text']; ?> <br></p>
                        </div>

                        <div class="about-img right"><img src="img/about-2.png" alt="" width="" height=""></div>
                    </div>
                <?php }
                endforeach; ?>
<!--                <div class="clear">-->
<!--                    <div class="about-text left">-->
<!--                        <h5 class="title">DECEMBER 2012 <br>-->
<!--                            Enter The Dark Days</h5>-->
<!--                        <p class="text-align-right">Proin iaculis purus consequat sem cure digni ssim. Donec porttitora-->
<!--                            entum suscipit aenean rhoncus posuere odio in tincidunt. Proin iaculis purus consequat sem-->
<!--                            cure digni.</p>-->
<!--                    </div>-->
<!--                    <div class="about-img left"><img src="img/about-3.png" alt="" width="" height=""></div>-->
<!--                </div>-->
<!--                <div class="clear">-->
<!--                    <div class="about-text right">-->
<!--                        <h5 class="title text-align-left">FEBRUARY 2014 <br>-->
<!--                            Our Triumph</h5>-->
<!--                        <p>Proin iaculis purus consequat sem cure digni ssim. Donec porttitora entum suscipit aenean-->
<!--                            rhoncus posuere odio in tincidunt. Proin iaculis purus consequat sem cure digni ssim. Donec-->
<!--                            porttitora entum suscipit aenean.</p>-->
<!--                    </div>-->
<!--                    <div class="about-img right"><img src="img/about-4.png" alt="" width="" height=""></div>-->
                </div>
                <a href="#" class="about-link">Our <br> Story <br> Continues <br> ...</a></div>
        </div>
    </div>
    <div id="team">
        <div class="container">
            <h2 class="title">our amazing team</h2>
            <p>Proin iaculis purus consequat sem cure.</p>
            <div class="team-wrapper clearfix">
                <div class="team-item"><img src="img/team-img.png" alt="" height="220px" width="220px">
                    <h6>Kimberly Thompson</h6> <span>Marketer</span>
                    <div class="social"><a href="#" class="icon-tw">&nbsp;</a> <a href="#" class="icon-fb">&nbsp;</a> <a
                                href="#" class="icon-pn">&nbsp;</a></div>
                </div>
                <div class="team-item"><img src="img/team-img.png" alt="" height="220px" width="220px">
                    <h6>Rico Massimo</h6> <span>Coder</span>
                    <div class="social"><a href="#" class="icon-tw">&nbsp;</a> <a href="#" class="icon-fb">&nbsp;</a> <a
                                href="#" class="icon-gp">&nbsp;</a></div>
                </div>
                <div class="team-item"><img src="img/team-img.png" alt="" height="220px" width="220px">
                    <h6>Uku Mason</h6> <span>Graphic Designer</span>
                    <div class="social"><a href="#" class="icon-fb">&nbsp;</a> <a href="#" class="icon-pn">&nbsp;</a>
                    </div>
                </div>
            </div>
            <p>Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit
                <br> aenean rhoncus posuere odio in tincidunt proin iaculis.</p>
        </div>
    </div>
    <div id="brand">
        <div class="container">
            <a href="#"><img src="img/envato.jpg" alt=""></a>
            <a href="#"><img src="img/Tuts.jpg" alt=""></a>
            <a href="#"><img src="img/WordPress.jpg" alt=""></a>
            <a href="#"><img src="img/Microlancer.jpg" alt=""></a>
        </div>
    </div>
    <div id="contact" name="contact">
        <div class="container">
            <h2 class="title">Contact us</h2>
            <p>Proin iaculis purus consequat sem cure.</p>
            <form action="" id="form">
                <div class="clearfix">
                    <div class="left-contact">
                        <input type="text" placeholder="YOUR NAME *">
                        <input type="text" placeholder="YOUR E-MAIL *">
                        <input type="text" placeholder="SUBJECT"></div>
                    <div class="right-contact">
                        <textarea name="" id="" cols="0" rows="0" placeholder="YOUR MESSAGE *"></textarea>
                    </div>
                </div>
                <input type="submit" value="Send Message" class="btn"></form>
        </div>
    </div>
    <div id="copyright">
        <div class="container">
            <p>&copy; Copyright 2014 FreebiesXpress.com</p>
            <div class="social">
                <a href="#" class="icon-tw black">&nbsp;</a>
                <a href="#" class="icon-fb black">&nbsp;</a>
                <a href="#" class="icon-pn black">&nbsp;</a>
                <a href="#" class="icon-gp black">&nbsp;</a>
            </div>
        </div>
    </div>
</body>

</html>