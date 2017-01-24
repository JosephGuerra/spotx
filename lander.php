<?php require_once(getcwd().'/backend/loadContent.php'); ?>
<!DOCTYPE html>
<html lang="en">
    <head>
       <meta charset="utf-8">
       <meta http-equiv="X-UA-Compatible" content="IE=edge">
       <meta name="viewport" content="width=device-width, initial-scale=1">
       <meta name="author" content="Joe Guerra">
       <meta name="date" content="2017-01-01">
       <meta name="description" content="Spot X ">
       <meta name="robots" content="noindex, nofollow">
       <meta property="og:title" content="Spot X by Globalstar ">
       <meta property="og:type" content="Website">
       <meta property="og:url" content="http://usdev.findmespot.com/spotXMicrosite/lander.php">
       <meta property="og:image" content="http://usdev.findmespot.com/spotXMicrosite/img/logo-header.png">
       <title>Spot X</title>
       <link href="img/favicon.png" rel="icon" type="image/png">        
       <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
       <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
       <link rel="stylesheet" href="css/main.css" >
       <link rel="stylesheet" href="css/navbar-top-animated.css" >
       <link rel="stylesheet" href="css/triangle.css">
       <link rel="stylesheet" href="css/spotx360.css">
       <link rel="stylesheet" href="css/carousel.css">
       <link rel="stylesheet" href="css/unique.css">
       <link rel="stylesheet" href="css/price-cover.css">
       <link rel="stylesheet" href="css/whyspotx.css">
       <link rel="stylesheet" href="css/media.css">
       <link rel="stylesheet" href="css/support.css">
       <link rel="stylesheet" href="css/howtogetspotx.css">
       <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:300,300italic,400,400italic,600,600italic,800,800italic">
       <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Oswald:400,300">
    </head>
    
    <body>
        <!-- navigation bar -->
        <nav class="navbar-default navbar navbar-fixed-top gradient" id="main-navigation" role="navigation">
            <div id="top" class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapse"
                            data-toggle="collapse" data-target="#expand-nav">
                        <span class="sr-only">toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a href="#" class="pull-left"><img src="img/smalllogo.jpg" height="50px"></a>
                </div>
                <div class="collapse navbar-collapse" id="expand-nav">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="#whyspotx">WHY SPOT X?</a></li>
                        <li><a href="#spotxunique">WHAT MAKES SPOT X UNIQUE?</a></li>
                        <li><a href="#servicecoverage">SERVICE PRICING AND COVERAGE</a></li>
                        <li><a href="#techsupport">TECH AND SUPPORT</a></li>
                        <li><a href="#News">IN THE NEWS</a></li>                
                        <li><a href="#howtogetspotx">HOW TO GET SPOT X</a></li>
                    </ul>
                </div>                    
            </div>
        </nav>
        
        <!-- Begin page content -->
        
        <!-- Section 1 - Hero carousel -->
    <div >
        <br>
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                  <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                  <li data-target="#myCarousel" data-slide-to="1"></li>
                  <li data-target="#myCarousel" data-slide-to="2"></li>
                </ol>

                <!-- Wrapper for slides -->
              <div class="carousel-inner" role="listbox">
                <div class="item active">
                    <img id="0" src="img/top_marque_mt.jpg" alt="SpotX_Redefine">
                    <div class="oswald carousel-caption col-xs-12">
                        <h2 class="carousel1">REDEFINE YOUR<br/> <br/>ADVENTURES WITH<br/> <br/>THE ALL NEW</h2>
                        <h1 class="carousel2">SPOT X</h1>
                        <hr class="bigrow carousel3" /><br />
                        <h3 class="carousel4">2-Way Satellite Text Messenger</h3>
                    </div>
                </div>
                <div id="1" class="item">
                    <img src="img/top_marque.jpg" alt="SpotX_Redefine">
                </div>
                <div id="2" class="item">
                    <img src="img/top_marque.jpg" alt="SpotX_Redefine">
                </div>
            </div>
                  
        </div>
    </div>
            
        <!-- Section 1 SPOT X 360 -->
        <section id="spotx360">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-6 text360 opensans pull-right text-left">
                        <h4 id="first360" >Thanks to the proven and reliable satellite technology of SPOT,
                        your adventures are no longer defined by time, place, distance, or cell service.</h4>
                        <h5 id="second360" >SPOT X - the ultimate outdoor necessity provides the familiar reliability of 2-way texting,
                        allowing you to easily stay connected even when you're outside of cellular range. Now you can keep your adventures going and discover
                        a whole new world with the peace of mind only SPOT X can provide.</h5>
                        <div class="price-var third360">
                            $199.99 <br />
                        </div>
                        <div  class="third360 price-var-txt " >at participating retailer</div><br />

                        <div id="fourth360"class='price-msrp '>
                            $249.99 <span class="price-msrp-txt">MSRP</span>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 col-xl-6 imgDiv " >
                        <img id="image360" class="image img-responsive pull-left" src="img/spotx_frontback.png">
                    </div>
                </div>
            </div>
                
        </section>

        <!-- Section 2 Why Spot X? -->
        <section id="whyspotx">
                <div id="whyspotxheading" class="oswald text-center whyspotx-header">
                  <h2>WHY SPOT X?</h2>
                  <hr class="whyspotx-underline row-fluid">
                </div>
                <h4 class="text-center whyspotx-header-headercopy"> 
                  With SPOT X, you can still do all of these things (and more) even when you don't have cell service:
                </h4> 
                <div class="row">
                    <div class="col-sm-5 hidden-xs-down" >
                        <img class="img-responsive textmsg" id="whyspotximage" src="img/product_hand.jpg">
                            <!--<span id="bkg" class="arrow-right"></span>-->
                    </div>
                    <div class="col-sm-7 col-xs-12">
                        <div class="row">
                            <div class="col-sm-6 col-xs-12 ">
                                <div class="row">
                                    <div class="col-xs-12 col-sm-6">
                                        <img id="texticon" class="textmsg whyspotx-icon" src="img/text_icon.png"> 
                                    </div>
                                    <div class="col-xs-12 col-sm-6">
                                        <span class="block textmsg">
                                            <dt>TEXT</dt>
                                             <dd>Send and receive 140-character text messages and emails
                                                 with family and friends from virtually anywhere in the world.
                                                 SPOT even provides you with your own mobile text number
                                                 so others can reach you anytime.
                                             </dd> 
                                        </span>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-12 col-sm-6">
                                       <img class="sos whyspotx-icon" src="img/sos_icon.png">                               
                                    </div>
                                    <div class="col-xs-12 col-sm-6">
                                        <span class="block sos">
                                            <dt>S.O.S.</dt>
                                            <dd>Direct 2-Way text communication with 24/7 Search & Rescue
                                                services in case of a life-threatening emergency.
                                            </dd>
                                        </span>
                                    </div>
                                </div>                                
                                <div class="row">
                                    <div class="col-xs-12 col-sm-6">
                                        <img class="track whyspotx-icon" src="img/track_icon.png">
                                    </div>
                                    <div class="col-xs-12 col-sm-6">
                                        <span class="block track">
                                            <dt>TRACK</dt>
                                            <dd>Track your progress at intervals of 2 1/2, 5, 10, 30, or 60 
                                                minutes and share your pinpoints with SPOT's easy-to-use Google Maps interface.
                                            </dd>
                                        </span>
                                    </div>
                                </div>                                
                                <div class="row">
                                    <div class="col-xs-12 col-sm-6">
                                        <img class="checkin whyspotx-icon" src="img/checkin_icon.png">
                                    </div>
                                    <div class="col-xs-12 col-sm-6">
                                        <span class="block checkin">
                                            <dt>CHECK IN</dt>
                                            <dd>Quickly and easily let everyone know you're OK with the simple
                                                push of a button.
                                            </dd>
                                        </span>
                                    </div>
                                </div>                                
                                <div class="row">
                                    <div class="col-xs-12 col-sm-6">
                                        <img class="social whyspotx-icon" src="img/postsocial_icon.png">
                                    </div>
                                    <div class="col-xs-12 col-sm-6">
                                        <span class="block social">
                                            <dt>POST TO SOCIAL</dt>
                                            <dd>Link your Facebook and Twitter accounts to keep your friends and
                                                family in the know wherever you go.
                                            </dd>
                                        </span>
                                    </div>
                                </div>                                
                                <div class="row">
                                    <div class="col-xs-12 col-sm-6">
                                        <img class="sov whyspotx-icon" src="img/sov_icon.png">
                                    </div>
                                    <div class="col-xs-12 col-sm-6">
                                        <span class="block sov">
                                            <dt>HELP/SPOT S.O.V.</dt>
                                            <dd>Alert personal contacts that help is needed in non-life-threatening
                                                situations, or use SPOT S.O.V. for professional services on land.
                                            </dd>
                                        </span>
                                    </div>
                                </div>                                
                                <div class="row">
                                    <div class="col-xs-12 col-sm-6">
                                        <img class="navigate whyspotx-icon" src="img/navigate_icon.png">
                                    </div>
                                    <div class="col-xs-12 col-sm-6">
                                        <span class="block navigate">
                                            <dt>NAVIGATE</dt>
                                            <dd>Built-in compass and waypoints to help you navigate during your adventures.</dd>
                                        </span>
                                    </div>

                                </div>                                

                            </div>
                           
                        </div>
                        
                    </div>
                </div>

                    
        </section>

           
        <!-- What makes spotX unique section -->
        <section id="spotxunique" class="orangebg space">
            <div class=" container unique-container">
                <div class="row">
                    <div id="spotxunique-header" class="oswald text-center header-inverse col-xs-12">
                        <h2>WHAT MAKES SPOT X UNIQUE?</h2>
                    </div><br />
                </div>
                <div class="row">
                    <div><hr id="spotxunique-underline" class="underline-inverse"><br /></div>    
                </div>
                <div id="spotxunique-container" class="col-xs-12 col-md-12 col-lg-12 col-xl-12 row-fluid">
                    
                    <img id="spotxunique-img" class="img-fluid" src="img/spotx_frontback.png"/>
                    
                    <div id="chipantenna"     class="circle">
                        <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" preserveAspectRatio="xMinYMin meet" class=" svg-content isHidden"> 
                            <path id="svgchipantenna" stroke-width="1.5" stroke="#FFF" fill="none" d="m0.5,70.7l96,-24" />
                        </svg>
                        <div id="chipantenna-text" class="opensans isHidden spotxfeature chipantenna">CHIP ANTENNA</div>  
                    </div>
                    <div id="impactresistant" class="circle">
                        <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" class="isHidden"> 
                            <path id="svgimpactresistant" stroke-width="1.5" stroke="#FFF" fill="none" d="m1.5,24.7l81,28" />
                        </svg>
                        <div id="impactresistant-image" class="opensans isHidden spotxfeature">
                            <img id="impact-img" src="img/waterproof_icon.png" class="featureimage mini-icon "/>
                        </div>
                        <div id="impactresistant-text" class="opensans isHidden spotxfeature">
                            IMPACT RESISTANT & WATERPROOF(IP67)
                        </div>
                    </div>

                    <div id="rechargeable" class="circle">
                        <svg xmlns="http://www.w3.org/2000/svg" width="200" height="100" class="isHidden" > 
                            <path id="svgrechargeable" stroke-width="1.5" stroke="#FFF" fill="none" d="m-1.5,2.7l188,48" />
                        </svg>
                        <div id="rechargeable-image" class="opensans isHidden spotxfeature">
                            <img id="rechargeable-img" src="img/battery_icon.png" class="featureimage mini-icon"/>
                        </div>
                        <div id="rechargeable-text" class="opensans isHidden spotxfeature">
                            RECHARGEABLE LITHIUM BATTERY
                            <H6 CLASS="strong">UP TO 50 DAYS STANDBY BATTERY LIFE*</H6>
                        </div>                          
                    </div>
                    
                    <div id="audionotify" class="circle">
                        <svg xmlns="http://www.w3.org/2000/svg" width="200" height="100" class="isHidden" > 
                            <path id="svgaudionotify" stroke-width="1.5" stroke="#FFF" fill="none" d="m-1.5,2.7l188,48" />
                        </svg>
                        <div id="audionotify-image" class="opensans isHidden spotxfeature">
                            <img id="audionotify-img" src="img/audio_icon.png" class="featureimage mini-icon"/>
                        </div> 
                        <div id="audionotify-text" class="opensans isHidden spotxfeature">
                            AUDIO NOTIFICATIONS
                        </div>
                    </div>
                    <div id="hours360" class="circle">
                        <svg xmlns="http://www.w3.org/2000/svg" width="200" height="250" class="isHidden"> 
                            <path id="svghours360" stroke-width="1.5" stroke="#FFF" fill="none"  d="m15.5,14.7l152,356" />
                        </svg>
                        <div id="hours360-image" class="opensans isHidden spotxfeature">
                            <img id="hours360-img" src="img/tracking_icon.png" class="featureimage mini-icon"/>
                        </div>   
                        <div id="hours360-text" class="opensans isHidden spotxfeature">
                            <h6>360 HOURS(15 DAYS)</h6>
                            OF BATTERY LIFE IN CONTINUOUS 10-MINUTE TRACKING MODE*
                        </div>
                    </div>
                    <div id="usbport" class="circle">
                        <svg xmlns="http://www.w3.org/2000/svg" width="200" height="50" class="isHidden"> 
                            <path id="svgusbport" stroke-width="1.5" stroke="#FFF" fill="none"  d="m190.5,3.7l-136,28" />
                        </svg>
                        <div id="usbport-text" class="opensans isHidden spotxfeature">
                            MICRO USB PORT    <img id="usbport-img" src="img/usb_icon.png" class="featureimage mini-icon"/>
                        </div>                          
                    </div>
                    <div id="qwerty" class="circle">
                        <svg xmlns="http://www.w3.org/2000/svg" width="200" height="50" class="isHidden"> 
                            <path id="svgqwerty" stroke-width="1.5" stroke="#FFF" fill="none"  d="m190.5,3.7l-136,28" />
                        </svg>
                        <div id="qwerty-image" class="opensans isHidden spotxfeature">
                            <img id="qwerty-img" src="img/keyboard_icon.png" class="featureimage mini-icon"/>
                        </div> 
                        <div id="qwerty-text" class="opensans isHidden spotxfeature">
                            LIT QWERTY KEYBOARD
                        </div>
                    </div>
                    <div id="hours240" class="circle">
                        <svg xmlns="http://www.w3.org/2000/svg" width="200" height="50" class="isHidden"> 
                            <path id="svghours240" stroke-width="1.5" stroke="#FFF" fill="none"  d="m182.5,35.7l-116,-18" />
                        </svg>
                        <div id="hours240-text" class="opensans isHidden spotxfeature"><h6 class=" opensans strong">240 HOURS (10 DAYS)</h6>
                            OF BATTERY LIFE IN <br />CONTINUOUS S.O.S. MODE
                        </div>                          
                    </div>
                    <div id="thin" class="circle">
                        <svg xmlns="http://www.w3.org/2000/svg" width="200" height="50" class="isHidden"> 
                            <path id="svgthin" stroke-width="1.5" stroke="#FFF" fill="none"  d="m174.5,37.7l-88,-18"  />
                        </svg>
                        <div id="thin-image" class="opensans isHidden spotxfeature">
                            <IMG SRC="img/feather_icon.png"/>
                        </div> 
                        <div id="thin-text" class="opensans isHidden spotxfeature">
                            THIN & LIGHTWEIGHT
                        </div>
                    </div>
                    <div id="backlitdisplay" class="circle">
                        <svg xmlns="http://www.w3.org/2000/svg" width="200" height="50" class="isHidden"> 
                            <path id="svgbacklitdisplay" stroke-width="1.5" stroke="#FFF" fill="none"  d="m186.5,33.7l-179,-18"   />
                        </svg>
                        <div id="backlitdisplay-text" class="opensans isHidden spotxfeature">2.7" BACKLIT <br />E-PAPER DISPLAY</div>                               
                    </div>
                </div>
            </div>
                <div id="chipantenna-mobile" class="opensans isHidden spotxfeature chipantenna ">CHIP ANTENNA</div>  
                <div id="impactresistant-mobile" class="opensans isHidden spotxfeature impactresistant">
                    <img src="img/waterproof_icon.png" class="featureimage mini-icon impactresistant "/>IMPACT RESISTANT & WATERPROOF(IP67)
                </div>                          
                <div id="rechargeable-mobile" class="opensans isHidden spotxfeature rechargeable">
                    <div id="rechargeable-mobile-image">
                        <img src="img/battery_icon.png" class="featureimage mini-icon rechargeable "/>
                    </div>
                    <div id="rechargeable-mobile-text">
                        RECHARGEABLE LITHIUM BATTERY
                        <H6 CLASS="strong ">UP TO 50 DAYS STANDBY BATTERY LIFE*</H6>
                    </div>
                </div>                          
                <div id="audionotify-mobile" class="opensans isHidden spotxfeature audionotify">
                    <img src="img/audio_icon.png" class="featureimage mini-icon audionotify"/>AUDIO NOTIFICATIONS
                </div>                          
                <div id="hours360-mobile" class="opensans isHidden spotxfeature hours360">
                    <div id="hours360-mobile-image">
                        <img id="hours360-img" src="img/tracking_icon.png" class="featureimage mini-icon"/>
                    </div>
                    <div id="hours360-mobile-text">
                        <h6>360 HOURS(15 DAYS)</h6>OF BATTERY LIFE IN CONTINUOUS 10-MINUTE TRACKING MODE*
                    </div>
                </div>                          
                <div id="usbport-mobile" class="opensans isHidden spotxfeature usbport">
                    <img id="usbport-img" src="img/usb_icon.png" class="featureimage mini-icon"/>&nbsp;MICRO USB PORT
                </div>                          
                <div id="qwerty-mobile" class="opensans isHidden spotxfeature qwerty">
                    <div id="qwerty-mobile-image">
                        <img id="qwerty-img" src="img/keyboard_icon.png" class="featureimage mini-icon"/>
                    </div>
                    <div id="qwerty-mobile-text">
                        LIT QWERTY<br /> KEYBOARD
                    </div>
                </div>                          
                <div id="hours240-mobile" class="opensans isHidden spotxfeature hours240"><h5 class="strong">240 HOURS (10 DAYS)</h5>
                    OF BATTERY LIFE IN <br />CONTINUOUS S.O.S. MODE
                </div>                          
                <div id="thin-mobile" class="opensans isHidden spotxfeature thin">
                    <IMG SRC="img/feather_icon.png"/>&nbsp;&nbsp;THIN & LIGHTWEIGHT
                </div>                          
                <div id="backlitdisplay-mobile" class="opensans isHidden spotxfeature backlitdisplay">2.7" BACKLIT E-PAPER DISPLAY</div>                               


        </section>
        
        <!-- Service Pricing and Coverage -->
        <section id="price-cover" class='space'>
            <div id="servicecoverage-header" class="oswald text-center ">
              <h2>SERVICE PRICING AND COVERAGE</h2>
            </div>
            <hr id="servicecoverage-underline">
            <h5 id="servicecoverage-header-headercopy" class="text-center "> 
                Regardless of how far off the grid you go for work or pleasure, SPOT X allows
                you to select from a variety of Service Plans to best suit your adventure.
            </h5> 
            <h6 id="servicecoverage-header-headercopy2" class="text-center ">
                With the recommended Adventurer Service Plan, you can send and receive unlimited text messages with friends, family
                and Search and Rescues, as well as take advantage of all tracking intervals SPOT X has to offer. Simply pick your 
                adventure level and payment preference and be on your way!
            </h6>
                <!-- Monthly Pricing Table -->
            <div class="row">
                <div id="monthly-service" class="col-xs-12 oswald">
                    <div class="column col-xs-4">
                        <ul class="plan">
                            <li class="header">WEEKENDER</li>
                            <li class="service-fee ">MONTHLY SERVICE FEE
                              <div class="price">$15.99</div>
                            </li>
                            <li class="content">25 Messages</li>
                            <li class="content">10 Minute <br />Unlimited Tracking</li>
                            <li class="content">25&#162; per Additional<br /> Text Message</li>
                            <li class="content">$15.00 Activation Fee</li>
                        </ul>
                    </div>
                    <div class="column col-xs-4">
                        <ul class="plan">
                          <li class="header">TRAVELER</li>
                          <li class="service-fee">MONTHLY SERVICE FEE
                            <div class="price">$29.99</div>
                          </li>
                          <li class="content">100 Messages</li>
                          <li class="content">5, 10, 30 and 60 Minute<br /> Unlimited Tracking</li>
                          <li class="content">25&#162; per Additional<br /> Text Message</li>
                          <li class="content">$15.00 Activation fee</li>
                        </ul>
                    </div>
                    <div class="column col-xs-4">
                      <ul class="plan">
                        <li class="header">ADVENTURER</li>
                        <li class="service-fee">MONTHLY SERVICE FEE
                          <div class="price">$49.99</div>
                        </li>
                        <li class="content">UNLIMITED MESSAGES</li>
                        <li class="content">2.5, 5, 10, 30 and 60 Minute<br /> Unlimited Tracking</li>
                        <li class="content" style="font-weight:bold;">FREE<br /><br /></li>
                        <li class="content">$15.00 Activation Fee</li>
                      </ul>
                    </div>
                </div>
            </div> <!-- END ROW -->
                <div class="row">
                    <div id="annual-service" class="col-xs-12 oswald">
                        <div class="column col-xs-4">
                            <ul class="plan">
                              <li class="header">WEEKENDER</li>
                              <li class="service-fee">ANNUAL SERVICE FEE
                                <div class="price">$189</div>
                              </li>
                              <li class="content">300 Messages</li>
                              <li class="content">10 Minute <br />Unlimited Tracking</li>
                              <li class="content">25&#162; per Additional<br /> Text Message</li>
                              <li class="content">$15.00 Activation Fee</li>
                            </ul>
                        </div>
                        <div class="column col-xs-4">
                            <ul class="plan">
                              <li class="header">TRAVELER</li>
                              <li class="service-fee">ANNUAL SERVICE FEE
                                <div class="price">$359</div>
                              </li>
                              <li class="content">1200 Messages</li>
                              <li class="content">5, 10, 30 and 60 Minute<br /> Unlimited Tracking</li>
                              <li class="content">25&#162; per Additional<br /> Text Message</li>
                              <li class="content">$15.00 Activation Fee</li>
                            </ul>
                        </div>
                        <div class="column col-xs-4">
                            <ul class="plan">
                              <li class="header">ADVENTURER</li>
                              <li class="service-fee">ANNUAL SERVICE FEE
                                <div class="price">$599</div>
                              </li>
                              <li class="content" style="font-weight:bold;">UNLIMITED Messages</li>
                              <li class="content">2.5, 5, 10, 30 and 60 Minute<br /> Unlimited Tracking</li>
                              <li class="content" style="font-weight:bold;">FREE<br /><br /></li>
                              <li class="content">$15.00 Activation Fee</li>
                            </ul>
                        </div>                        
                    </div>     
                </div>
                <span id="moreinfo" class="fa fa-plus-circle fa-3x" aria-hidden="true">
                    <span class="opensans additional-info" >ADDITIONAL INFORMATION</span>
                    <div id ="modal-moreinfo" class="modal">
                        
                        <div class="modal-content">
                            <span class="close">&times;</span>
                            <p><h3>Additional Information</h3>
                            <ul>
                                <li>12-month term applies to all SPOT X Service Plans.</li>
                                <li>Additional fees of up to 25&#162 per message may be charged for international text messages.</li>
                                <li>Monthly Plans: Unused text messages will not be rolled over to the next month (billing cycle).</li>
                                <li>Annual Plans: Receive plan's text messages up front and use them whenever you like during the year. Text messages expire after 12 months. </li>
                                <li>Your Service Plan is for personal, recreational or non-commercial use only.</li>
                            </ul>
                            </p>
                        </div>
                    </div>
            </div>
            <div class="row">
                <div class="col-xs-12">
                    <img id="coveragemap-img" class="col-sm-12 img-fluid" alt="coverage" src="img/coverage_map.png">
                </div>
            </div>
        </section>
        
        <!--Tech and support -->
        <section id="techsupport" class="space">
            <div class="support-bg support-container">
                <h3 id="support-header" class="text-center">TECH AND SUPPORT</h3>
                <hr id="support-underline" class="black-underline  text-center">
                <DIV class="row">
                    <div class="col-xs-12 support-included">
                        <h5 id="support-included-hdr" class="opensans">WHAT'S INCLUDED WITH SPOT X</h5>
                    </div>
                </div>
                <div  id="support-items-container" class="row-fluid whitebg container-fluid">
                    
                    <div class="col-xs-12 col-sm-4 carabiner pull-left">
                        <span class="support-included-item support-strap"> Strap and Carabiner</span>
                        <img  class="support-strap" src="img/strap.jpg"/>
                    </div>
                    <div class="col-xs-12 col-sm-4 datacable pull-center">
                        <img class="support-datacable" src="img/data_cable.jpg">
                        <span class="support-included-item support-datacable-text">18" Micro USB Data/Power Cable</span>    
                    </div>
                    <div class="col-xs-12 col-sm-4 adapter pull-right">
                        <span class="support-included-item support-walladapter">AC (Wall) 12V Power Adapter</span>  
                        <img class="support-walladapter" src="img/wall_adapter.jpg">
                    </div>
                </div>
                <DIV class="row">
                    <div id="support-spotx" class="col-sm-12">
                        <h4>SPOT X SUPPORT</h4>
                    </div>
                </div>
                <div class="support-bg container">
                    <div class="col-sm-3 col-xs-12 support-text support-qsg ">
                        <h5 class="support-item-hdr">SPOT X QUICK<br /> START GUIDE</h5>
                        <i class="fa fa-file-pdf-o fa-5x support-qsg"></i>
                        <div class="support-text">
                            <h5 class="support-item-ftr">DOWNLOAD PDF</h5>
                        </div>
                    </div>
                    <div class="col-sm-3 col-xs-12 support-text support-userguide ">
                        <h5 class="support-item-hdr">SPOT X <br />USER GUIDE</h5>
                        <i class="fa fa-file-pdf-o fa-5x support-userguide"></i>
                        <div class="support-text">
                            <h5 class="support-item-ftr">DOWNLOAD PDF</h5>
                        </div>
                    </div>
                    <div class="col-sm-3 col-xs-12 support-text support-firmware ">
                        <h5 class="text-center">SPOT X <br />FIRMWARE UPDATE</h5>
                        <img class="firmware-img" src="img/firmware_icon.png">
                        <div class="support-text">
                            <h5 class="support-item-ftr text-center">DOWNLOAD THE <br />LATEST SPOT X FIRMWARE</h5>
                        </div>
                    </div>
                    <div class="col-sm-3 col-xs-12 support-support support-text">
                        <h5 class="supportheader">CUSTOMER CARE <br />SUPPORT</h5>
                        <img class="support-img" src="img/support_icon.png">
                        <div class="support-text">
                            <h5 class="supportfooter ">OUR TEAM IS<br /> AVAILABLE 24/7</h5>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        <!-- IN THE NEWS -->
        <section id="inthenews">
             <div id="inthenews-header" class="oswald text-center ">
                <h2>IN THE NEWS</h2>
             </div>
            <hr id="inthenews-underline">
                <div id="newscontainer" >
                    <div class="row">
                        <div class="col-xs-4">
                            <img id="wired-logo" src="img/wired_logo.png">
                        </div>
                        <div class="col-xs-8">
                            <h4>
                                News Headline
                            </h4>
                            <p>
                                This is where actual news will go.This is where actual news will go.
                                This is where actual news will go.This is where actual news will go.
                                This is where actual news will go.This is where actual news will go.
                            </p>
                            <a href="data/news">Read More...</a>
                        </div>
                    </div>
                    <hr class="news-separator">
                </div>
                <button id="presskit" class="btn btn_contact_me oswald">DOWNLOAD SPOT X PRESS KIT</button>

        </section>

        <!-- FORM Start -->
        <section class="bg" id="howtogetspotx">
            <div class="col-xs-12">
                <h2 id="getspotx-header" class="oswald text-center">
                    HOW TO GET SPOT X. 
                </h2>
                <div id="getspotx-underline" class="col-xs-12">
                    <hr class="black-underline-howtogetspotx" />
                </div>
                <div class="col-xs-12">
                    <h4 id="getspotx-headercopy" class="oswald text-center">
                        SPOT X IS COMING SOON. NOTIFY ME WHEN IT&#39S AVAILABLE.
                    </h4>
                </div>
            </div>
            
            <!--Form Container-->
            <div class="row">
                <div class="col-xs-12 theForm">
                    <div class=" container formContents">

                        <!--<Begin form>-->
                        <form id="contactus_form" name="contactus_form" method="post" action="<?php echo $submit; ?>" onSubmit="return validateForm();">
                            <fieldset>
                                <p>
                                    <label class="opensans label" for="name">NAME*</label><br />
                                    <input class="form-control" id="name" name="name" minlength='2' type="text" size="71" required>
                                </p>
                                <p>
                                    <label class="opensans label"for="email">EMAIL ADDRESS*</label><br />
                                    <input class="form-control email" id="email" name="email" type="email" size="71" required>
                                </p>
                                <div class="row">
                                    
                                </div>
                                <div class="row adventure">
                                    <div class="col-xs-12 col-sm-3">
                                        <label class="label" for="adventure">WHAT'S YOUR ADVENTURE?</label>
                                    </div>
                                    
                                    <div class="col-xs-12 col-sm-9">
                                        <select id="adventurePick" class="form-control">
                                            <option hidden>Choose Your Adventure</option>
                                            <option value="hiking">Hiking/Backpacking</option>
                                            <option value="camping">Camping</option>
                                            <option value="kayaking">Kayaking/Canoeing</option>
                                            <option value="flying">Flying</option>
                                            <option value="boating">Boating</option>
                                            <option value="fishing">Fishing</option>
                                            <option value="motorcycling">Motorcycling</option>
                                            <option value="snowsports">Snow Sports</option>
                                            <option value="watersports">Watersports</option>
                                            <option value="extremesports">Extreme Sports</option>
                                            <option value="hunting">Hunting</option>
                                            <option value="biking">Biking</option>
                                            <option value="other">Other</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row country">
                                    <div class="col-xs-12 col-sm-3">
                                        <label class="label" for="adventure">COUNTRY*</label>
                                    </div>

                                    <div class="col-xs-12 col-sm-9">
                                        <select id="country" class="form-control">
                                            <option hidden>Choose Your Country</option>
                                            <option value='Albania'>Albania</option>
                                            <option value='Algeria'>Algeria</option>
                                            <option value='American Samoa'>American Samoa</option>
                                            <option value='Andorra'>Andorra</option>
                                            <option value='Angola'>Angola</option>
                                            <option value='Anguilla'>Anguilla</option>
                                            <option value='Antarctica'>Antarctica</option>
                                            <option value='Antigua and Barbuda'>Antigua and Barbuda</option>
                                            <option value='Argentina'>Argentina</option>
                                            <option value='Armenia'>Armenia</option>
                                            <option value='Aruba'>Aruba</option>
                                            <option value='Australia'>Australia</option>
                                            <option value='Austria'>Austria</option>
                                            <option value='Azerbaijan'>Azerbaijan</option>
                                            <option value='Bahamas'>Bahamas</option>
                                            <option value='Bahrain'>Bahrain</option>
                                            <option value='Bangladesh'>Bangladesh</option>
                                            <option value='Barbados'>Barbados</option>
                                            <option value='Belarus'>Belarus</option>
                                            <option value='Belgium'>Belgium</option>
                                            <option value='Belize'>Belize</option>
                                            <option value='Benin'>Benin</option>
                                            <option value='Bermuda'>Bermuda</option>
                                            <option value='Bhutan'>Bhutan</option>
                                            <option value='Bolivia'>Bolivia</option>
                                            <option value='Bosnia and Herzegovina'>Bosnia and Herzegovina</option>
                                            <option value='Botswana'>Botswana</option>
                                            <option value='Bouvet Island'>Bouvet Island</option>
                                            <option value='Brazil'>Brazil</option>
                                            <option value='British Indian Ocean Territory'>British Indian Ocean Territory</option>
                                            <option value='Brunei'>Brunei</option>
                                            <option value='Bulgaria'>Bulgaria</option>
                                            <option value='Burkina'>Burkina</option>
                                            <option value='Burundi'>Burundi</option>
                                            <option value='Cambodia'>Cambodia</option>
                                            <option value='Cameroon'>Cameroon</option>
                                            <option value='Canada'>Canada</option>
                                            <option value='Cape Verde'>Cape Verde</option>
                                            <option value='Cayman Islands'>Cayman Islands</option>
                                            <option value='Central African Republic'>Central African Republic</option>
                                            <option value='Chad'>Chad</option>
                                            <option value='Chile'>Chile</option>
                                            <option value='China'>China</option>
                                            <option value='Christmas Island'>Christmas Island</option>
                                            <option value='Cocos (Keeling) Islands'>Cocos (Keeling) Islands</option>
                                            <option value='Colombia'>Colombia</option>
                                            <option value='Comoros'>Comoros</option>
                                            <option value='Congo (DRC) - Kinshasa'>Congo (DRC) - Kinshasa</option>
                                            <option value='Congo - Brazzaville'>Congo - Brazzaville</option>
                                            <option value='Cook Islands'>Cook Islands</option>
                                            <option value='Costa Rica'>Costa Rica</option>
                                            <option value='Croatia'>Croatia</option>
                                            <option value='Ctte d'Ivoire'>Ctte d'Ivoire</option>
                                            <option value='Cyprus'>Cyprus</option>
                                            <option value='Czech Republic'>Czech Republic</option>
                                            <option value='Denmark'>Denmark</option>
                                            <option value='Djibouti'>Djibouti</option>
                                            <option value='Dominica'>Dominica</option>
                                            <option value='Dominican Republic'>Dominican Republic</option>
                                            <option value='East Timor'>East Timor</option>
                                            <option value='Ecuador'>Ecuador</option>
                                            <option value='Egypt'>Egypt</option>
                                            <option value='El Salvador'>El Salvador</option>
                                            <option value='Equatorial Guinea'>Equatorial Guinea</option>
                                            <option value='Eritrea'>Eritrea</option>
                                            <option value='Estonia'>Estonia</option>
                                            <option value='Ethiopia'>Ethiopia</option>
                                            <option value='Falkland Islands (Malvinas)'>Falkland Islands (Malvinas)</option>
                                            <option value='Faroe Islands'>Faroe Islands</option>
                                            <option value='Fiji'>Fiji</option>
                                            <option value='Finland'>Finland</option>
                                            <option value='France'>France</option>
                                            <option value='French Guiana'>French Guiana</option>
                                            <option value='French Polynesia'>French Polynesia</option>
                                            <option value='French Southern Territories'>French Southern Territories</option>
                                            <option value='Gabon'>Gabon</option>
                                            <option value='Gambia'>Gambia</option>
                                            <option value='Georgia'>Georgia</option>
                                            <option value='Germany'>Germany</option>
                                            <option value='Ghana'>Ghana</option>
                                            <option value='Gibraltar'>Gibraltar</option>
                                            <option value='Greece'>Greece</option>
                                            <option value='Greenland'>Greenland</option>
                                            <option value='Grenada'>Grenada</option>
                                            <option value='Guadeloupe'>Guadeloupe</option>
                                            <option value='Guam'>Guam</option>
                                            <option value='Guatemala'>Guatemala</option>
                                            <option value='Guinea'>Guinea</option>
                                            <option value='Guinea-Bissau'>Guinea-Bissau</option>
                                            <option value='Guyana'>Guyana</option>
                                            <option value='Haiti'>Haiti</option>
                                            <option value='Heard and McDonald Islands'>Heard and McDonald Islands</option>
                                            <option value='Honduras'>Honduras</option>
                                            <option value='Hong Kong'>Hong Kong</option>
                                            <option value='Hungary'>Hungary</option>
                                            <option value='Iceland'>Iceland</option>
                                            <option value='India'>India</option>
                                            <option value='Indonesia'>Indonesia</option>
                                            <option value='Iraq'>Iraq</option>
                                            <option value='Ireland'>Ireland</option>
                                            <option value='Israel'>Israel</option>
                                            <option value='Italy'>Italy</option>
                                            <option value='Jamaica'>Jamaica</option>
                                            <option value='Japan'>Japan</option>
                                            <option value='Jordan'>Jordan</option>
                                            <option value='Kazakhstan'>Kazakhstan</option>
                                            <option value='Kenya'>Kenya</option>
                                            <option value='Kiribati'>Kiribati</option>
                                            <option value='Korea, South (ROK)'>Korea, South (ROK)</option>
                                            <option value='Kuwait'>Kuwait</option>
                                            <option value='Kyrgyzstan'>Kyrgyzstan</option>
                                            <option value='Laos'>Laos</option>
                                            <option value='Latvia'>Latvia</option>
                                            <option value='Lebanon'>Lebanon</option>
                                            <option value='Lesotho'>Lesotho</option>
                                            <option value='Liberia'>Liberia</option>
                                            <option value='Libya'>Libya</option>
                                            <option value='Liechtenstein'>Liechtenstein</option>
                                            <option value='Lithuania'>Lithuania</option>
                                            <option value='Luxembourg'>Luxembourg</option>
                                            <option value='Macao'>Macao</option>
                                            <option value='Macedonia'>Macedonia</option>
                                            <option value='Madagascar'>Madagascar</option>
                                            <option value='Malawi'>Malawi</option>
                                            <option value='Malaysia'>Malaysia</option>
                                            <option value='Maldives'>Maldives</option>
                                            <option value='Mali'>Mali</option>
                                            <option value='Malta'>Malta</option>
                                            <option value='Marshall Islands'>Marshall Islands</option>
                                            <option value='Martinique'>Martinique</option>
                                            <option value='Mauritania'>Mauritania</option>
                                            <option value='Mauritius'>Mauritius</option>
                                            <option value='Mayotte'>Mayotte</option>
                                            <option value='Mexico'>Mexico</option>
                                            <option value='Micronesia'>Micronesia</option>
                                            <option value='Moldova'>Moldova</option>
                                            <option value='Monaco'>Monaco</option>
                                            <option value='Mongolia'>Mongolia</option>
                                            <option value='Montserrat'>Montserrat</option>
                                            <option value='Morocco'>Morocco</option>
                                            <option value='Mozambique'>Mozambique</option>
                                            <option value='Myanmar'>Myanmar</option>
                                            <option value='Namibia'>Namibia</option>
                                            <option value='Nauru'>Nauru</option>
                                            <option value='Nepal'>Nepal</option>
                                            <option value='Netherlands'>Netherlands</option>
                                            <option value='Netherlands Antilles'>Netherlands Antilles</option>
                                            <option value='New Caledonia'>New Caledonia</option>
                                            <option value='New Zealand'>New Zealand</option>
                                            <option value='Nicaragua'>Nicaragua</option>
                                            <option value='Niger'>Niger</option>
                                            <option value='Nigeria'>Nigeria</option>
                                            <option value='Niue'>Niue</option>
                                            <option value='Norfolk Island'>Norfolk Island</option>
                                            <option value='Northern Mariana Islands'>Northern Mariana Islands</option>
                                            <option value='Norway'>Norway</option>
                                            <option value='Oman'>Oman</option>
                                            <option value='Pakistan'>Pakistan</option>
                                            <option value='Palau'>Palau</option>
                                            <option value='Palestinian Territory, Occupied'>Palestinian Territory, Occupied</option>
                                            <option value='Panama'>Panama</option>
                                            <option value='Papua New Guinea'>Papua New Guinea</option>
                                            <option value='Paraguay'>Paraguay</option>
                                            <option value='Peru'>Peru</option>
                                            <option value='Philippines'>Philippines</option>
                                            <option value='Pitcairn'>Pitcairn</option>
                                            <option value='Poland'>Poland</option>
                                            <option value='Portugal'>Portugal</option>
                                            <option value='Puerto Rico'>Puerto Rico</option>
                                            <option value='Qatar'>Qatar</option>
                                            <option value='Reunion'>Reunion</option>
                                            <option value='Romania'>Romania</option>
                                            <option value='Russia'>Russia</option>
                                            <option value='Rwanda'>Rwanda</option>
                                            <option value='Saint Helena'>Saint Helena</option>
                                            <option value='Saint Kitts and Nevis'>Saint Kitts and Nevis</option>
                                            <option value='Saint Lucia'>Saint Lucia</option>
                                            <option value='Saint Pierre and Miquelon'>Saint Pierre and Miquelon</option>
                                            <option value='Saint Vincent and the Grenadines'>Saint Vincent and the Grenadines</option>
                                            <option value='Samoa'>Samoa</option>
                                            <option value='San Marino'>San Marino</option>
                                            <option value='Saudi Arabia'>Saudi Arabia</option>
                                            <option value='Sco Tomi and Prmncipe'>Sco Tomi and Prmncipe</option>
                                            <option value='Senegal'>Senegal</option>
                                            <option value='Serbia and Montenegro'>Serbia and Montenegro</option>
                                            <option value='Seychelles'>Seychelles</option>
                                            <option value='Sierra Leone'>Sierra Leone</option>
                                            <option value='Singapore'>Singapore</option>
                                            <option value='Slovakia'>Slovakia</option>
                                            <option value='Slovenia'>Slovenia</option>
                                            <option value='Solomon Islands'>Solomon Islands</option>
                                            <option value='Somalia'>Somalia</option>
                                            <option value='South Africa'>South Africa</option>
                                            <option value='South Georgia and South Sandwich Islands'>South Georgia and South Sandwich Islands</option>
                                            <option value='Spain'>Spain</option>
                                            <option value='Sri Lanka'>Sri Lanka</option>
                                            <option value='Suriname'>Suriname</option>
                                            <option value='Svalbard and Jan Mayen'>Svalbard and Jan Mayen</option>
                                            <option value='Swaziland'>Swaziland</option>
                                            <option value='Sweden'>Sweden</option>
                                            <option value='Switzerland'>Switzerland</option>
                                            <option value='Taiwan, Republic of China'>Taiwan, Republic of China</option>
                                            <option value='Tajikistan'>Tajikistan</option>
                                            <option value='Tanzania'>Tanzania</option>
                                            <option value='Thailand'>Thailand</option>
                                            <option value='Togo'>Togo</option>
                                            <option value='Tokelau'>Tokelau</option>
                                            <option value='Tonga'>Tonga</option>
                                            <option value='Trinidad and Tobago'>Trinidad and Tobago</option>
                                            <option value='Tunisia'>Tunisia</option>
                                            <option value='Turkey'>Turkey</option>
                                            <option value='Turkmenistan'>Turkmenistan</option>
                                            <option value='Turks and Caicos Islands'>Turks and Caicos Islands</option>
                                            <option value='Tuvalu'>Tuvalu</option>
                                            <option value='Uganda'>Uganda</option>
                                            <option value='Ukraine (except Crimea)'>Ukraine (except Crimea)</option>
                                            <option value='United Arab Emirates'>United Arab Emirates</option>
                                            <option value='United Kingdom'>United Kingdom</option>
                                            <option value='United States Minor Outlying Islands'>United States Minor Outlying Islands</option>
                                            <option value='United States of America'>United States of America</option>
                                            <option value='Uruguay'>Uruguay</option>
                                            <option value='Uzbekistan'>Uzbekistan</option>
                                            <option value='Vanuatu'>Vanuatu</option>
                                            <option value='Vatican City'>Vatican City</option>
                                            <option value='Venezuela'>Venezuela</option>
                                            <option value='Vietnam'>Vietnam</option>
                                            <option value='Virgin Islands, British'>Virgin Islands, British</option>
                                            <option value='Virgin Islands, U.S.'>Virgin Islands, U.S.</option>
                                            <option value='Wallis and Futuna'>Wallis and Futuna</option>
                                            <option value='Western Sahara'>Western Sahara</option>
                                            <option value='Yemen'>Yemen</option>
                                            <option value='Zambia'>Zambia</option>
                                            <option value='Zimbabwe'>Zimbabwe</option>
                                        </select>
                                    </div>
                                </div>
                                    
                                    <input type="checkbox" name="TandC" id="i_agree"  value="Terms and Conditions" required> 
                                    <a data-target="#terms_conditions_modal" role="button" data-toggle="modal" style="color:#333333" href="#">
                                        <label for="TandC" class="label tandc" >I AGREE TO TERMS & CONDITIONS *</label>
                                    </a>
                                <div id='error_msg_info_form' style='color:red;'></div>
                                <div class="col-sm-2 col-xs-2" ><em>(*REQUIRED)</em></div>

                            <div class="text-center" >
                                <div class="row">
                                    <div class="col-xs-12 requestinfo-button"><br>
                                        <button type="submit" class="btn_contact_me btn btn-primary oswald">NOTIFY ME</button>
                                    </div>
                                </div>
                            </div>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <footer>
          <div class="container">
            <div class="row">
              <div class="col-lg-12">
                <a href="http://www.findmespot.com/" title="Globalstar.com" target="_blank">
                    <img  class="img-responsive center-block" src="img/spotx_logo.png">
                </a><br>
                *Battery life is based on a full charge during initial device usage and ideal operating temperature of 77&deg; clear view of the sky and no obstructions.<br /><br /><br />
                <p>
                    &copy; 2016 SPOT LLC. All Rights Reserved. All Rights Reserved. All SPOT products described on this website are the products of SPOT LLC, which is not
                    affiliated in any manner with Spot Image of Toulouse, France or Spot Image Corporation of Chantilly, Virginia.
                </p>
              </div>
              <div id="social-media" class="col-lg-12 social-media">
                <a href="https://www.facebook.com/SPOTLLC" title="Facebook" target="_blank">
                  <i class="fa fa-5x fa-facebook-square"></i>
                </a>
                <a href="https://www.twitter.com/SPOT_LLC" title="Twitter" target="_blank">
                  <i class="fa fa-5x fa-twitter-square"></i>
                </a>
                <a href="https://www.youtube.com/user/spotarchive" title="YouTube" target="_blank">
                  <i class="fa fa-5x fa-youtube-square"></i>
                </a>
                <a href="https://instagram.com/spot_llc/" target="_blank" onClick="track_link('Footer - Instagram');">
                    <i class="fa fa-instagram fa-5x" aria-hidden="true"></i>
                </a>
              </div>
            </div>
           </div>
        </footer>
 
        <script src="https://code.jquery.com/jquery-2.2.2.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

    `        <!-- GreenSock animation platform -->
       <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.19.0/TweenMax.min.js"></script>
       <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.19.0/TimelineMax.min.js"></script>
       <script src="//cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.3/ScrollMagic.js"></script>
       <script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.3/plugins/animation.gsap.js"></script>       
       <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.15.0/jquery.validate.min.js"></script>       
       <script src="js/main.js"></script>
       <script src="js/modal.js"></script>
       <script src="js/scrollup.js"></script>
       <script src="js/spotXunique.js"></script>
       
    </body>
    
</html>
