<!DOCTYPE html>
<html>
<?php include 'inc/form-process.php';?>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="description" content="Web Development Portfolio">
    <meta name="keywords" content="HTML, CSS, JavaScript, Portfolio, Web, Development, Dev, Netmatters, SCS, Scheme, Scion, Coalition">
    <meta name="author" content="Liam Wylie">

    
    <title>Liam Wylie Portfolio</title>
    <link rel="stylesheet" type="text/css" href="css/Normalize.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="apple-touch-icon" sizes="180x180" href="fonts/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="fonts/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="fonts/favicon/favicon-16x16.png">
    <link rel="manifest" href="fonts/favicon/site.webmanifest">
</head>

<body>
    <header>
        <div class="banner">
            <div class="banner-container">
                <img alt="Background image" src="img/placeholder-bg2.png">
                <div class="banner-text">
                  <a href="index.php"><h1>Liam Wylie</h1></a>  
                  <p>Web Developer</p>
                </div>
            </div>
        </div>
    </header>

    <div onclick="handleNav()" class="nav-burger">
      <span class="icon-menu"></span>
    </div>
    <div class="sidenav">
        <div class="nav-container">
            <div class="initials-container">
              <a href="index.php"><h1>LW</h1></a>
            </div>
            <div class="nav-link-container">
              <a class="nav-link" href="about-me.html"><h2>About me</h2></a>
              <a class="nav-link" href="index.php#project-list"><h2>Portfolio</h2></a>
              <a class="nav-link" href="coding-examples.html"><h2>Coding Examples</h2></a>
              <a class="nav-link" href="scs-scheme.html"><h2>SCS Scheme</h2></a>
              <a class="nav-link" href="#contact-me"><h2>Contact Me</h2></a>
            </div>
        </div>
    </div>



    <div class="main">
        <div class="inner">
            
            <!--Projects-->
            <div>
                <div class="latest-projects content-container clearfix">
                  <div class="bar">
                    <div class="container">
                      <div class="headings-container">
                        <h1 class="article-header">
                          <strong>Latest Projects</strong>
                        </h1>
                        <h3 class="float-right-sm hidden-xs">
                          <a href="my-portfolio.html">View All <strong>
                              <em class="icon-arrow_forward"></em>
                            </strong>
                          </a>
                        </h3>
                      </div>
                    </div>
                  </div>


                    <div class="container">
                      <div class="project-list" id="project-list">
                        <div class="row">
                        <!--Project 1-->
                        <div class="project-card col-lg-4 col-sm-6">
                            <div class="item webpage">
                              <div class="img-container">
                                <a href="https://netmatters.liam-wylie.netmatters-scs.co.uk/" target="_blank" class="category btn-tooltip"> Website </a>
                                <a class="img">
                                    <img src="img/portfolio-netmatters.png" class="img-responsive" alt="Netmatters website reflection project">
                                </a>
                              </div>
                              <div class="block">
                                <h3>
                                  <a href="https://netmatters.liam-wylie.netmatters-scs.co.uk/" target="_blank"> Website Reflection <br> Netmatters </a>
                                </h3>
                                <p class="webpage"><span class="icon-html5 language-icon"></span> <span class="icon-css3 language-icon"></span> <span class="icon-javascript language-icon"></span></p>
                              </div>
                            </div>
                        </div>

                        <!--Project 2-->
                        <div class="project-card col-lg-4 col-sm-6">
                            <div class="item javascript">
                              <a class="project-link" href="#"></a>
                              <a></a>
                              <div class="img-container">
                                <a></a>
                                <a href="https://js-array.liam-wylie.netmatters-scs.co.uk/" class="category btn-tooltip"> JavaScript </a>
                                <a class="img">
                                  <picture>
                                    <img src="img/js-array.png" class="img-responsive" alt="Javascript image sender">
                                  </picture>
                                </a>
                              </div>
                              <div class="block">
                                <h3>
                                  <a href="https://js-array.liam-wylie.netmatters-scs.co.uk/"> JavaScript Array <br> Demonstration </a>
                                </h3>
                                <p class="javascript"><span class="icon-html5 language-icon"></span> <span class="icon-css3 language-icon"></span> <span class="icon-javascript language-icon"></span></p>
                              </div>
                            </div>
                        </div>

                        <!--Project 3-->
                        <div class="project-card col-lg-4 col-sm-6">
                            <div class="item placeholder">
                              <a class="project-link" href="#"></a>
                              <a></a>
                              <div class="img-container">
                                <a></a>
                                <a href="#" class="category btn-tooltip"> Coming soon </a>
                                <a class="img">
                                  <img src="img/coming-soon.jpg" class="img-responsive" alt="More Projects Coming Soon!">
                                </a>
                              </div>
                              <div class="block">
                                <h3>
                                  <a href="#"> Other Project <br> Coming soon </a>
                                </h3>
                                <p>Soon I will have more content, involving HTML, CSS, SASS, JS, C#, and much more.</p>
                              </div>
                            </div>
                        </div>

                          <!--Project 4-->
                        <div class="project-card col-lg-4 col-sm-6">
                            <div class="item placeholder">
                              <a class="project-link" href="#"></a>
                              <a></a>
                              <div class="img-container">
                                <a></a>
                                <a href="#" class="category btn-tooltip"> Coming soon </a>
                                <a class="img">
                                  <picture>
                                    <img src="img/coming-soon.jpg" class="img-responsive" alt="More Projects Coming Soon!">
                                  </picture>
                                </a>
                              </div>
                              <div class="block">
                                <h3>
                                  <a href="#"> Other Project <br> Coming soon </a>
                                </h3>
                                <p>Soon I will have more content, involving HTML, CSS, SASS, JS, C#, and much more.</p>
                              </div>
                            </div>
                        </div>

                          <!--Project 5-->
                        <div class="project-card col-lg-4 col-sm-6">
                          <div class="item placeholder">
                            <div class="img-container">
                              <a href="#" class="category btn-tooltip"> Coming soon </a>
                              <a class="img">
                                  <img src="img/coming-soon.jpg" class="img-responsive" alt="More Projects Coming Soon!">
                              </a>
                            </div>
                            <div class="block">
                              <h3>
                                <a href="#"> Other Project <br> Coming soon </a>
                              </h3>
                              <p>Soon I will have more content, involving HTML, CSS, SASS, JS, C#, and much more.</p>
                            </div>
                          </div>
                        </div>

                        <!--Project 6-->
                        <div class="project-card col-lg-4 col-sm-6">
                          <div class="item placeholder">
                            <a class="project-link" href="#"></a>
                            <a></a>
                            <div class="img-container">
                              <a></a>
                              <a href="#" class="category btn-tooltip"> Coming soon </a>
                              <a class="img ">
                                <img src="img/coming-soon.jpg" class="img-responsive" alt="More Projects Coming Soon!">
                              </a>
                            </div>
                            <div class="block">
                              <h3>
                                <a href="#"> Other Project <br> Coming soon </a>
                              </h3>
                              <p>Soon I will have more content, involving HTML, CSS, SASS, JS, C#, and much more.</p>
                            </div>
                          </div>
                        </div>

                        </div>
                      </div>
                    </div>

                  <!--View all below projects on small devices-->
                  <div class="container view-all visible-xs">
                    <h3>
                      <a href="my-portfolio.html">View All 
                        <strong><em class="icon-arrow_forward"></em></strong>
                      </a>
                    </h3>
                  </div>
                </div>
            </div>
            
            <hr class="rounded">

            <!--Contact me form-->
            <div>
            <div class="container-contact-form content-container clearfix" id="contact-me">
              <div class="row">
                

                <div class="contact-info col-lg-6 col-md-6">
                    <div class="contact-details">
                      <h1 class="article-header">My contact info:</h1>
                      <div class="row">
                        <h3><span class="icon-users hidden-xs"><br></span> Liam Wylie</h3>
                        <a href="mailto:Liamswork@yahoo.co.uk"><span class="icon-pencil hidden-xs"></span> Liamswork@yahoo.co.uk</a>
                        <a href="tel:07427126403"><span class="icon-phone hidden-xs"></span> 07427126403</a>
                      </div>
                    </div>
                    <div class="contact-social">
                      <h2> Follow me on: </h2>
                      <div class="social-logos">

                        <div class="logo-box">
                          <a class="facebook btn" target="_blank" href="https://www.facebook.com/liam.t.wylie">
                              <span class="icon-facebook"></span>
                          </a>
                        </div>

                        <div class="logo-box">
                          <a class="btn linkedin" target="_blank" href="https://www.linkedin.com/in/liam-wylie-18374613b/">
                            <span class="icon-linkedin"></span>
                          </a>
                        </div>

                        <div class="logo-box">
                          <a class="btn twitter" target="_blank" href="https://twitter.com/LiamWylieDev">
                            <span class="icon-twitter"></span>
                          </a>
                        </div>

                        <div class="logo-box">
                          <a class="btn instagram" target="_blank" href="https://www.instagram.com/liamwylie/">
                            <span class="icon-instagram"></span>
                          </a>
                        </div>

                        <div class="logo-box">
                          <a class="btn treehouse" target="_blank" href="https://teamtreehouse.com/profiles/liamwylie2">
                            <span class="icon-treehouse"></span>
                          </a>
                        </div>
                        
                        <div class="logo-box">
                          <a class="btn github" target="_blank" href="https://github.com/liamswork">
                            <span class="icon-github"></span>
                          </a>
                        </div>
                      </div>
                    </div>
                </div>

                <div class="contact-form col-lg-6 col-md-6">
                  <div class="container">
                    <h1 class="article-header">Contact me:</h1>
                    <form id="contact-form" method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                      <label class="hidden" for="fname">First Name</label>
                      <input type="text" class="form-control <?php if($fnameErr){echo "has-error";}?>" id="fname" name="fname" placeholder="First Name..." value="<?php if($fname){echo $fname;}?>">
                  
                      <label class="hidden" for="lname">Last Name</label>
                      <input type="text" class="form-control <?php if($lnameErr){echo "has-error";}?>" id="lname" name="lname" placeholder="Last Name..." value="<?php if($lname){echo $lname;}?>">

                      <label class="hidden" for="email">Email</label>
                      <input type="email" class="form-control <?php if($emailErr){echo "has-error";}?>" id="email" name="email" placeholder="Your Email..." value="<?php if($email){echo $email;}?>">
                  
                      <label class="hidden" for="telephone">Mobile</label>
                      <input type="text" class="form-control <?php if($telephoneErr){echo "has-error";}?>" id="telephone" name="telephone" placeholder="Your Telephone..." value="<?php if($telephone){echo $telephone;}?>">


                      <textarea id="message" class="form-control <?php if($messageErr){echo "has-error";}?>" name="message" placeholder="Write your message here.." style="height:200px"><?php if($message){echo $message;}?></textarea>
                  
                      <button href="#contact-form" id="formsubmit" name="submit" class="btn">Send Enquiry</button>
                      <h3 class="<?php 
                      if($success_message){
                          echo "success";
                        }else if($fnameErr || $lnameErr || $telephoneErr || $emailErr ){
                          echo "error";
                        }
                        ?>">
                        <!--Status message-->
                        <?php 
                      if($success_message){
                        echo $success_message;
                        } else if($fnameErr || $lnameErr || $telephoneErr || $emailErr ){
                        echo $errorMessage;
                        }else{
                        echo "All form fields are required.";
                        }?>
                      </h2>
                    </form>
                  </div>
                </div>



              </div>
            </div>
          </div>
        </div>   <!--End of inner tag-->


    
    <!--Footer-->
    <footer>
        <!--Footer Main-->

        <!--Footer Bottom-->
        <div class="footer-bottom">
                <div class="inner">
                  <div class="nav-link-container">
                    <a class="nav-link" href="about-me.html"><h2>About me</h2></a>
                    <a class="nav-link" href="index.php#project-list"><h2>My Portfolio</h2></a>
                    <a class="nav-link" href="coding-examples.html"><h2>Coding Examples</h2></a>
                    <a class="nav-link" href="scs-scheme.html"><h2>SCS Scheme</h2></a>
                    <a class="nav-link" href="index.php#contact-me"><h2>Contact Me</h2></a>
                  </div>
                </div>
            </div>
    </footer> 
    </div> <!--End of main tag.-->

    <script src="js/jquery-3.7.0.min.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/typewrite.js"></script>
    <script src="js/app.js"></script>
    <script src="js/validation.js"></script>

</body>

</html>