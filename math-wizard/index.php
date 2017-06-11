﻿
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>Math Wizard - Online math practice, math games and interactive math </title>

    <meta name="description" content="Math Wizard is one of the most interactive math practice apps. 
Math wizard is completely free online for studnets, teachers and schools.
Math wizard provides unlimited math practice to kids.
Math wizard provides a simple , intuitive learning system for kids with games , interactive actvities , making learning fun!
" />

    <script src="js/jquery-1.9.1.js"></script>
    <script src="js/jquery-ui-1.10.2.custom.js"></script>
    <script src="js/JavaScript.js"></script>
    <link href="style/common.css" rel="stylesheet" />
    <link href="style/StyleSheet.css" rel="stylesheet" />
    <script src="js/jquery.ui.touch-punch.js"></script>

    <style type="text/css">
        #center {
            height: 100%;
            width: 50%;
            float: left;
        }

        .grade-div {
            height: auto!important;
            width: 30%!important;
            float: left;
        }

        #right-text {
            margin-top: 1%;
            float: left;
            height: 90%;
            width: 50%;
            font-size: 18px;
        }
         #advertisement {
		position: absolute;

float: left;
height: 50%;
width: 45%;
font-size: 18px;
background: gray;
top: 37%;
left: 50%;
        }
      h2 {
            margin:0%;
            padding:0%;
         
           
        }

        .grade-div > p {
            height: auto;
            margin: 0 13px 0 15px;
            color: black;
            margin-top: 0%;
            font-size: 13px;
            text-align: left;
            letter-spacing: normal;
            word-spacing: normal;
           color:gray;
        }
        .grade-div > span {
            height: auto;
            margin: 0 13px 0 15px;
            color: black;
            margin-top: 0%;
            font-size: 13px;
            text-align: left;
            letter-spacing: normal;
            word-spacing: normal;
            color:gray;
        }
         .app-icon> p  {
            height: auto;
            margin: 0 13px 0 15px;
            color: black;
            margin-top: 0%;
            font-size: 13px;
            text-align: left;
            letter-spacing: normal;
            word-spacing: normal;
           color:gray;
        }
        .app-icon > span {
            height: auto;
            margin: 0 13px 0 15px;
            color: black;
            margin-top: 0%;
            font-size: 13px;
            text-align: left;
            letter-spacing: normal;
            word-spacing: normal;
            color:gray;
        }
        @media screen and (max-width:1024px) {
            #right-text {
                font-size: 15px;
            }
        }

        @media screen and (max-width:768px) {
            #right-text {
                font-size: 13px;
            }
        }

        @media screen and (max-width:480px) {
           
            #center {
                width: 98%;
                height: 60%;
                margin-left: 1%;
            }
            .grade-div {
                width:32.33% !important;
            }
            #right-text {
                width: 94%;
                height: 60%;
                margin-left: 4%;
                font-size: 13px;
            }
        }

        @media screen and (max-width:330px) {

            .grade-content-placer {
                height: 75%;
            }

            #center {
                width: 98%;
                height: 60%;
                margin-left: 1%;
            }

            #right-text {
                width: 96%;
                height: 60%;
                margin-top: 3%;
                margin-left: 2%;
                font-size: 10px;
            }

            .grade-div {
                width: 32.33%!important;
            }
        }
    </style>

    <!--[if lt IE 9]>
	 <script src="js/jquery-1.9.1.js"></script>

      <script type="text/javascript">
    $(document).ready(function(){
    window.location='use-ie-10.html';
      });
    </script>

<![endif]-->

</head>
<body>

    <div id="wraper">
        <div id="header">
            <a href="index.html">
                <button id="mathwizard">MathWizardApps.com</button>
            </a>
           <!-- <button id="header-desc">Math Activities and Games for Kids</button>-->
        </div>
        <div id="content">
            <div id="banner"></div>
            <div id="banner-icon">

                <div id="grade-scroll-placer">

                    <div id="center" title="Choose Your Grade">

                   <a href="mathwizard-grade-k-topic.html">   
                         <div class="grade-div">
                           
                            <div class="grade-content">
                                <div class="grade-content-placer w99CC00" id="grade-k"></div>

                                <button class="grade-content-taxt-placer"><h2>Grade-K</h2></button>
                                
                            </div>
                               <p style="text-align:justify"> 
Unlimited exercises for  practice of each skill of Grade K Math for kids is provided.
You are given set of 10 practice questions. After answering the questions you can check how you did in the report.
                                  
                               </p>
                            
                                
                        </div></a>

                    <a href="mathwizard-grade-1-topic.html">   <div class="grade-div">
                            <div class="grade-content">
                                <div class="grade-content-placer w00C3F7" id="grade-1"></div>
                                <button class="grade-content-taxt-placer"><h2>Grade-1</h2></button>
                            </div>
                         <p style="text-align:justify">
Unlimited exercises for  practice. Opportunity to master each skill of Grade 1 Math for kids is provided.
You are given set of 10 practice questions for each topic.
After answering the questions you can check how you did in the report.
                                  <br />  
                               </p>
                        </div></a>
                    <a href="#"> <div class="grade-div">
                            <div class="grade-content">
                                <div class="grade-content-placer light-blue" id="grade-2"></div>
                                <button class="grade-content-taxt-placer"><h2>Grade-2</h2></button>
                            </div>
                          <p>Counting, Addition, Subtraction, Shape Identification, Dissimilar Object, Ordering
                                    
                               </p>
                            
                        </div></a>
                        

                        <!--  <div class="grade-div">
                        <div class="grade-content">
                            <div class="grade-content-placer wFDBC00" id="grade-3" ></div>
                            <button class="grade-content-taxt-placer"><h2>Grade-3</h2></button>
                        </div>
                    </div>-->

                        <!-- <div class="grade-div">
                        <div class="grade-content">
                            <div class="grade-content-placer green" id="grade-4"></div>
                            <button class="grade-content-taxt-placer"><h2>Grade-4</h2></button>
                        </div>
                    </div>

                    <div class="grade-div">
                        <div class="grade-content">
                            <div class="grade-content-placer orange" id="grade-5"></div>
                            <button class="grade-content-taxt-placer"><h2>Grade-5</h2></button>
                        </div>
                    </div>


                    <div class="grade-div">
                        <div class="grade-content">
                            <div class="grade-content-placer light-pink" id="grade-6" ></div>
                            <button class="grade-content-taxt-placer"><h2>Grade-6</h2></button>
                        </div>
                    </div>-->

                    </div>
                    <div id="right-text">


                        <span style="font-family: chalkdust;text-align: justify;">Interactive <span class="text-light-pink" style="cursor: pointer;">Math Practice </span>, Activities and Games for Kids.</span></br>	
	Thousands of kids use <span class="text-green" style="cursor: pointer;text-align: justify;">Math Wizard iphone </span>and <span class="text-green" style="cursor: pointer;text-align: justify;">Math Wizard iPad </span>apps regularly to practice math skills.					</br>
	Now available on the internet for <span class="text-orange" style="cursor: pointer;text-align: justify;">all devices</span> and <span class="text-orange" style="cursor: pointer;text-align: justify;">browsers</span>.</br>	Available on all major platforms					

                    </div>
                  
                   <!-- <div id="advertisement">
                        <?php 
/*--------------------------------------------------------------*/ 
/* Millennial Media PHP Ad Coding, v.7.4.20                     */ 
/* Copyright Millennial Media, Inc. 2006                        */ 
/*                                                              */ 
/* The following code requires PHP >= 4.3.0 and                 */ 
/* allow_url_fopen 1 set in php.ini file.                       */ 
/*                                                              */ 
/* NOTE:                                                        */ 
/* It is recommended that you lower the default_socket_timeout  */ 
/* value in the php.ini file to 5 seconds.                      */ 
/* This will prevent network connectivity from affecting        */ 
/* page loading.                                                */ 
/*--------------------------------------------------------------*/ 

/*------- Publisher Specific Section -------*/ 
$mm_placementid = 140481; 
$mm_adserver = "ads.mp.mydas.mobi"; 

/* The default response will be echo'd on the page     */
/* if no Ad is returned, so any valid WML/XHTML string */
/* is acceptable.                                      */
$mm_default_response = "";

/*------------------------------------------*/

/*----------- BEGIN AD INITIALIZATION ----------*/
/*----- PLEASE DO NOT EDIT BELOW THIS LINE -----*/
$mm_id = "NONE";
$mm_ua = "NONE";
@$mm_ip = $_SERVER['REMOTE_ADDR'];

if (isset($_SERVER['HTTP_USER_AGENT'] )){
     $mm_ua = $_SERVER['HTTP_USER_AGENT'];
}

if (isset($_SERVER['HTTP_X_UP_SUBNO'])) {
          $mm_id = $_SERVER['HTTP_X_UP_SUBNO'];
} elseif (isset($_SERVER['HTTP_XID'])) {
          $mm_id = $_SERVER['HTTP_XID'];
} elseif (isset($_SERVER['HTTP_CLIENTID'])) {
          $mm_id = $_SERVER['HTTP_CLIENTID'];
} else {
          $mm_id = $_SERVER['REMOTE_ADDR'];
}

$mm_url = "http://$mm_adserver/getAd.php5?apid=$mm_placementid&auid="
          . urlencode($mm_id) . "&uip=" . urlencode($mm_ip) . "&ua="
          . urlencode($mm_ua);
/*------------ END AD INITIALIZATION -----------*/
?>

<?php
/* Place this code block where you want the ad to appear */
/*------- Reusable Ad Call -------*/
@$mm_response = file_get_contents($mm_url);
echo $mm_response != FALSE ? $mm_response : $mm_default_response;
/*--------- End Ad Call ----------*/
?>

                    </div>-->
                </div>
                <div id="jquery-slider-placer">
                    <div id="itune-placer"><span>Available on App Store</span></div>
                    <div id="appstore-app">
                        <a href="https://itunes.apple.com/us/app/sudoku-puzzles-for-all/id687267982?ls=1&mt=8" target="_newtab">
                            <div class="app-icon">
                                <div class="appstore-placer">
                                    <div class="grade-content-placer" id="sudoku-icon"></div>
                                    <button class="grade-content-taxt-placer">Sudoku</button>
                                </div>
                                  <p>
                               </p>
                            
                            </div>
                        </a>

                        <a href="https://itunes.apple.com/us/app/equalo-number-balance-game/id687280970?ls=1&mt=8" target="_newtab">
                            <div class="app-icon">
                                <div class="appstore-placer">
                                    <div class="grade-content-placer" id="equolo"></div>
                                    <button class="grade-content-taxt-placer">Equalo</button>
                                </div>
                                <p>
                               </p>
                            </div>
                        </a>

                        <a href="https://itunes.apple.com/us/app/mathwizard-grade-k-ipad-version/id509805446?ls=1&mt=8" target="_newtab">
                            <div class="app-icon">
                                <div class="appstore-placer">
                                    <div class="grade-content-placer" id="mathwiz-gradek"></div>
                                    <button class="grade-content-taxt-placer">Math Wizard Grade K</button>
                                </div>
                                <p>
                               </p>
                            </div>
                        </a>


                        <a href="https://itunes.apple.com/us/app/math-wizard-grade-1-ipad-version/id515636172?ls=1&mt=8" target="_newtab">
                            <div class="app-icon">
                                <div class="appstore-placer">
                                    <div class="grade-content-placer" id="mathwiz-grade1"></div>
                                    <button class="grade-content-taxt-placer">Math Wizard Grade 1</button>
                                </div>
                                <p>
                               </p>
                            </div>
                        </a>



                        <a href="https://itunes.apple.com/us/app/lion-mouse-interactive-storybook/id531665236?ls=1&mt=8" target="_newtab">
                            <div class="app-icon">
                                <div class="appstore-placer">
                                    <div class="grade-content-placer" id="lion-mouse"></div>
                                    <button class="grade-content-taxt-placer">Lion and Mouse</button>
                                </div>
                                <p>
                               </p>
                            </div>
                        </a>


                    </div>

                    <!--                 <a href="http://www.apple.com" target="_newtab"> <div id="sudoku-icon" class="picture-placer"></div></a> 
                  <a href="http://www.apple.com" target="_newtab">  <div id="equolo" class="picture-placer"></div></a> 
                  <a href="http://www.apple.com" target="_newtab">  <div id="mathwiz-gradek" class="picture-placer"></div></a> 
                  <a href="http://www.apple.com" target="_newtab">  <div id="mathwiz-grade1" class="picture-placer"></div></a> -->
                </div>
            </div>

        </div>
        <div id="footer">&copy;MathWizardApps.com <a href="sitemap.html"><button id="sitemap-div">Sitemap</button></a> <button id="header-desc">Math Activities and Games for Kids</button></div>
    </div>
</body>
</html>
