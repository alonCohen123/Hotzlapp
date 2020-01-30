<?php
$user="";
session_start();
if(isset($_SESSION['user'])){
  $user = $_SESSION['user'];
}
 ?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Wisely Hotzlapp</title>

  <!-- Bootstrap core CSS -->
  <link href="bootstrap/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <!-- <link href="bootstrap/css/business-frontpage.css" rel="stylesheet"> -->
<!---------added--->
<!-- Favicons
<link href="images/img/favicon.png" rel="icon">
<link href="images/img/apple-touch-icon.png" rel="apple-touch-icon">
<link rel="shortcut icon" href="/images/favicon.ico" type="image/x-icon" />
<link rel="apple-touch-icon" href="/images/apple-touch-icon.png">-->

<!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,400i,600,700|Raleway:300,400,400i,500,500i,700,800,900" rel="stylesheet">

<!-- Bootstrap CSS File -->
<link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

<!-- Libraries CSS Files -->
<link href="lib/nivo-slider/css/nivo-slider.css" rel="stylesheet">
<link href="lib/owlcarousel/owl.carousel.css" rel="stylesheet">
<link href="lib/owlcarousel/owl.transitions.css" rel="stylesheet">
<link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
<link href="lib/animate/animate.min.css" rel="stylesheet">
<link href="lib/venobox/venobox.css" rel="stylesheet">

<!-- Nivo Slider Theme -->
<link href="css/css1/nivo-slider-theme.css" rel="stylesheet">

<!-- Main Stylesheet File -->
<link href="css/css1/style.css" rel="stylesheet">

<!-- Responsive Stylesheet File -->
<link href="css/css1/responsive.css" rel="stylesheet">

<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"> -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body style="text-align: center;">
  <style>
  #content-mobile {display: none;}
  .footer{
     margin-right: -200x;
     left: 0;
     bottom: 0;
     width: 100%;
     background-color: grey;
     color: white;
     text-align: center;
  }
  #myCarousel {
    width:100%;
  }
  #navigationD {float:right;}
  #carusalDesktopB {font-size: 5em;}
  @media screen and (max-width: 800px) {
    #carusalDesktopB {font-size: 2em;}
    #carusalDesktop {font-size: 1em;}
    #myCarousel {
      width:100%;
    }
  #content-mobile {display: block;}
  #content-desktop {display: none;}
  #navigationD {float:left;}
  }
  </style>
  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">

      <a class="navbar-brand" href="index.php">Wisely</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse navDiv" id="navbarResponsive" >
        <ul id="navigationD" class="navbar-nav ml-auto" >
          <li class="nav-item active">
            <a class="nav-link" href="">Home
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="stages/general.php">Main</a>
          </li>
          <!-- <li class="nav-item"> -->
        <!--   <a class="nav-link" href="#">General</a>-->
        <?php if( (!isset($_SESSION['user'])) || ($_SESSION['user'] == "") )
                  echo "
                  <li class='nav-item'>
                  <a class='nav-link' href='login.html'>Login</a>
                  </li>
                    <li class='nav-item'>
                  <a class='nav-link' href='signUp.html'>Sign Up</a>
                  </li>
                  ";
                else {
                  echo "
                  <li>
                  <a class='nav-link' href='visit_profile.php?visitUser=".$user."'>My Profile</a>
                  </li>
                  <li class='nav-item'>
                  <a class='nav-link' href='includes/logout.inc.php'>Logout</a>
                  </li>
                  ";
                }
         ?>
          <!-- </li> -->
          <li class='nav-item' style="color :grey;">
            <a id="content-mobile" class="nav-link" href="#" onclick="window.open('Wizely-Hotzlapp.apk')">Download APK For Android!</a>
          </li>
        </ul>
      </div>
    </div>
    <?php if($user != ""){
            echo '<label dir="rtl" style="color:white;position:block;right:5;">שלום '.$user.'</label>';
          }
    ?>
  </nav>
<div class="container" style="background-color: #f0f5f5;">
  <div id="myCarousel" class="carousel slide" data-ride="carousel" style="float:center;margin:auto;" align="center">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" width="75%">

      <div class="item active" align="center">
        <img src="images/img/slider/slider111.jpg" >
        <div class="carousel-caption">
          <h1 id="carusalDesktopB" style="color:white;">Welcome to Wisely</h1>
          <h3 id="carusalDesktop" style="color:white;">הצטרפו לקהילה שלנו</h3>
        </div>
      </div>

      <div class="item" align="center">
        <img src="images/img/slider/slider222.jpg">
        <div class="carousel-caption">
          <h1 id="carusalDesktopB" style="color:white;">רכשו ידע</h1>
          <h3 id="carusalDesktop" style="color:white;">עיינו במידע ובטפסים השונים</h3>
        </div>
      </div>

      <div class="item" align="center">
      <img src="images/img/slider/slider333.jpg">
        <div class="carousel-caption">
          <h1 id="carusalDesktopB" style="color:white;">השפיעו</h1>
          <h3 id="carusalDesktop" style="color:white;">שתפו את סיפורכם האישי ורכשו חברים לחיים</h3>
        </div>
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
</div>
  <!-- Page Content -->



          <div class="row"  >
            <div class="col-md">
              <div class="">
                <div class="section-headline text-center">
                  <br>
                  <h2>מה אנחנו מציעים</h2>
                  <div>
                <p style="text-align:center;font-size: 1.3em"> אנשים העוברים תהליך של הוצאה לפועל לעיתים קרובות נכנסים למערבולת רגשות וחובות שאינם מסוגלים להתמודד איתם. הפיתרון שלנו היא מערכת שתשלב תמיכה נפשית ומקצועית על ידי אנשים שעברו חוויות דומות או אנשי מקצוע</p>
                  </div>
                </div>
              </div>
            </div>
          </div>

        <div class="section-headline text-center">
            <br>
            <h2>איך זה עובד</h2>
        </div>

          <div class="row" style="text-align:center;" dir="rtl">
                  <div class="col-md-4 mb-5">
                      <div >
                        <img id="" src="images/timeline.png"  height="175" width="175" alt="">
                          <br>
                        <h3>בחרו באחד משלבי הוצאה לפועל</h3>
                      </div>
                    </div>



                    <div class="col-md-4 mb-5">
                        <div>
                          <img id="" src="images/info.png"  height="175" width="175" alt="">
                          <br>
                          <h3>עיינו במידע ושתפו את סיפורכם האישי</h3>
                          <br>
                        </div>
                    </div>

                    <div class="col-md-4 mb-5">
                      <div >
                        <img id="" src="images/share.png"  height="175" width="175" alt="">
                          <br>

                        <h3>קבלו עזרה ורכשו חברים לחיים</h3>
                      </div>
                    </div>
          </div>

    <hr>
    <br>
    <h2 id="Timeline">Timeline</h2>
    <br>

    <!-- ======================================================================-->
    <!-- <div class="container"> -->
      <div class="row" dir="rtl">

        <div class="col-md-4 mb-5">
          <div class="card">
            <a href="stages/2ndstage.php">
            <img class="card-img-top" src="images/timeline/2.jpg" alt="" height="190"></a>
            <!-- <div class="card-body" dir="rtl">
              <h4 class="card-title" dir="rtl"></h4>
            </div> -->
            <div class="card-footer" style="text-align:center;">
              <a href="stages/2ndstage.php" class="btn btn-primary" style="width:225px;">פתיחת תיק בהוצאה לפועל</a>
            </div>
          </div>
        </div>

        <div class="col-md-4 mb-5">
          <br id="content-desktop">
          <img id="content-desktop" src="images/rightDownArrow1.png"  height="auto" width="130" style="margin-left: 120px;-webkit-transform: scaleX(-1);
          transform: scaleX(-1);">
          <br id="content-desktop">
          <div class="card">
            <a href="stages/3rdstage.php">
            <img class="card-img-top" src="images/timeline/1.jpg" alt="" height="190"></a>
            <!-- <div class="card-body">
              <h4 class="card-title">קבלת אזהרה</h4>
            </div> -->
            <div class="card-footer" style="text-align:center;">
              <a href="stages/3rdstage.php" class="btn btn-primary" style="width:225px;">קבלת אזהרה</a>
            </div>
          </div>
            <!-- <img id="content-desktop" src="images/timeline/arrow_down.png" align="right" height="42" width="42" alt="">
            <br> -->
        </div>

        <div class="col-md-4 mb-5">
          <br id="content-desktop"><br id="content-desktop"><br id="content-desktop"><br id="content-desktop"><br id="content-desktop"><br id="content-desktop">
          <img id="content-desktop" src="images/rightDownArrow1.png"  height="auto" width="130" style="margin-left: 120px;-webkit-transform: scaleX(-1);
          transform: scaleX(-1);">
          <br id="content-desktop">
          <div class="card">
            <a href="stages/4thstage.php">
            <img class="card-img-top" src="images/timeline/4.jpg" alt="" height="190"></a>
            <!-- <div class="card-body">
              <h4 class="card-title">תשלום חוב</h4>
            </div> -->
            <div class="card-footer" style="text-align:center;">
              <a href="stages/4thstage.php" class="btn btn-primary" style="width:225px;">תשלום חוב</a>
            </div>
          </div>
        </div>

      </div>

      <div class="row" dir="rtl">

        <div class="col-md-4 mb-5">
          <br id="content-desktop"><br id="content-desktop"><br id="content-desktop"><br id="content-desktop"><br id="content-desktop"><br id="content-desktop">
          <img id="content-desktop" src="images/rightDownArrow1.png"  height="auto" width="130" style="margin-right: 120px;">
          <br id="content-desktop">
          <div class="card">
            <a href="stages/7thstage.php">
            <img class="card-img-top" src="images/timeline/6.jpg" alt="" height="190"></a>
            <!-- <div class="card-body">
              <h4 class="card-title">הליכי ערר וערעור</h4>
            </div> -->
            <div class="card-footer" style="text-align:center;">
              <a href="stages/7thstage.php" class="btn btn-primary" style="width:225px;">הליכי ערר וערעור</a>
            </div>
          </div>
        </div>

        <div class="col-md-4 mb-5">
          <br id="content-desktop">
          <img id="content-desktop" src="images/rightDownArrow1.png"  height="auto" width="130" style="margin-right: 120px;">
          <br id="content-desktop">
          <div class="card">
            <a href="stages/6thstage.php">
            <img class="card-img-top" src="images/timeline/5.jpg" alt="" height="190"></a>
            <!-- <div class="card-body">
              <h4 class="card-title">הגבלות ואמצעי גבייה</h4>
            </div> -->
            <div class="card-footer" style="text-align:center;">
              <a href="stages/6thstage.php" class="btn btn-primary" style="width:225px;">הגבלות ואמצעי גבייה</a>
            </div>
          </div>
        </div>

          <div class="col-md-4 mb-5">
            <div class="card">
              <a href="stages/5thstage.php">
              <img class="card-img-top" src="images/timeline/3.jpg" alt="" height="190"></a>
              <!-- <div class="card-body">
                <h4 class="card-title">התנגדות לתשלום החוב</h4>
              </div> -->
              <div class="card-footer" style="text-align:center;">
                <a href="stages/5thstage.php" class="btn btn-primary" style="width:225px;">התנגדות לתשלום החוב</a>
              </div>
          </div>
      </div>
    </div>
<!-- ============================================================================ -->

<div>
<hr>
<div class="section-headline text-center">
  <h2>פוסטים פופולאריים</h2>
</div>
<div class="testimonials-area">
  <div class="testi-inner area-padding">
    <div class="testi-overly"></div>
    <div class="container ">
      <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
          <!-- Start testimonials Start -->
          <div class="testimonial-content text-center">
            <a class="quate" href="#"><i class="fa fa-quote-right"></i></a>
            <!-- start testimonial carousel -->
            <div class="testimonial-carousel">
              <div class="single-testi">
                <div class="testi-text">
                  <p align="center">
   יש לי חובות , ובחסכונות שלי יש מספיק בכדי לשלם אותם. אך חסמו לי את האפשרות לפתוח אותם. מה אני יכולה לעשות<br>                  </p>
                  <h6>יעל</h6>
                </div>
              </div>
              <!-- End single item -->
              <div class="single-testi">
                <div class="testi-text">
                    <p align="center">
                      בדיון בנוגע להתנגדות לביצוע שטר, בו שני הצדדים לא מיוצגים,ניתנה החלטה ע"י הרשם לקבלת<br> ההתנגדות והתיק יידון בסדר דין מהיר, בנוסף המשיבה תגיש תצהיר והשלמת מסמכים מטעמה<br>
                      ", בהתאם להוראות תקנה 214ב1 לתקנות סדר הדין האזרחי, “הגשתי טענות מהצד שלי אך הרשם ענה כי התצהיר אינו ערוך כדין.<br>
                      בתקנה כתוב על תצהיר שערוך לפי טופס 17א  אך בו לא ראיתי מקום לטענות ונספחים וגם מחייב חתימת עורך דין (אני לא מיוצג)<br>
                                              מה זה אומר? איך עלי לרשום לו את טענות</p>

                  </p>
                  <h6>דויד</h6>
                </div>
              </div>
              <!-- End single item -->
              <div class="single-testi">
                <div class="testi-text">
                  <p>
                    אני יכול להגיש במרץ הפטר מוגבל באמצעים אהיה 4 שנים מוגבל אין לי נכסים אני נשוי פלוס 2 משכורת ממוצעת שלי<br> ושל אישתי 12 בחודש הוצאות בערך 8 9 בחודש גם אישתי מוגבלת באמצעים שלוש שנים מה האחוזים בסוף כן לקבל הפטר<br> על מה בעיקר מסתכל הרשם בהוצאה לפועל
                  </p>
                  <h6>כפיר</h6>
                </div>
              </div>
              <!-- End single item -->
            </div>
          </div>
          <!-- End testimonials end -->
        </div>
        <!-- End Right Feature -->
      </div>
    </div>
  </div>
</div>
<!-- End Testimonials -->



<div id="blog" class="blog-area">
  <div class="blog-inner area-padding">
    <div class="blog-overly"></div>
    <!-- <div class="container "> -->
      <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="section-headline text-center">
            <h2>חדשות ועדכונים</h2>
          </div>
        </div>
      </div>
      <div class="row">
        <!-- Start Left Blog -->
        <div class="col-md-4 col-sm-4 col-xs-12">
          <div class="single-blog">
            <div class="single-blog-img">
              <a href="blog.html">
                  <img src="images/info1.jpg" alt="">
                </a>
            </div>
            <div class="blog-meta">
              <!-- <span class="comments-type">
                  <i class="fa fa-comment-o"></i>
                  <a href="#">13 comments</a>
                </span> -->
              <span class="date-type">
                  <i class="fa fa-calendar"></i>2019-12-25 / 18:10:23
                </span>
            </div>
            <div class="blog-text">
              <h4>
               <a href="blog.html">משלמים חובות, קנסות ואגרות בכרטיס אשראי בקלות ובמהירות</a>
                </h4>
              <p>
                קיבלתם חוב או קנס? רוצים לשלם אגרת פתיחת תיק או ביצוע הליך בקלות ובמהירות? רשות האכיפה והגבייה מאפשרת לבצע תשלומים בכרטיס אמצעות אתר התשלומים הממשלתי
              </p>
            </div>
            <span>
                <a href="https://www.gov.il/he/departments/news/debts-and-fines-payment-campaign" class="ready-btn">מידע נוסף</a>
              </span>
          </div>
          <!-- Start single blog -->
        </div>
        <!-- End Left Blog-->
        <!-- Start Left Blog -->
        <div class="col-md-4 col-sm-4 col-xs-12">
          <div class="single-blog">
            <div class="single-blog-img">
              <a href="blog.html">
                  <img src="images/info2.jpg" alt="">
                </a>
            </div>
            <div class="blog-meta">
              <!-- <span class="comments-type">
                  <i class="fa fa-comment-o"></i>
                  <a href="#">130 comments</a>
                </span> -->
              <span class="date-type">
                  <i class="fa fa-calendar"></i>2019-03-05 / 09:10:16
                </span>
            </div>
            <div class="blog-text">
              <h4>
              <a href="blog.html">רשות האכיפה והגבייה</a>
                </h4>
              <p>
              הודעה לעיתונות- בשל הבחירות, הוראת השעה למתן הפטר בהוצאה לפועל מוארכת עד ליום 16.6.2020.עד כה הוגשו 7,705 בקשות למתן הפטר ונתנו 2,232 הפטרים על ידי רשמי ההוצאה לפועל.
              </p>
            </div>
            <span>
                <a href="https://www.gov.il/he/departments/news/povision_of_time_for_the_dismissal" class="ready-btn">מידע נוסף</a>
              </span>
          </div>
          <!-- Start single blog -->
        </div>
        <!-- End Left Blog-->
        <!-- Start Right Blog-->
        <div class="col-md-4 col-sm-4 col-xs-12">
          <div class="single-blog">
            <div class="single-blog-img">
              <a href="blog.html">
                  <img src="images/info3.jpg" alt="">
                </a>
            </div>
            <div class="blog-meta">
              <!-- <span class="comments-type">
                  <i class="fa fa-comment-o"></i>
                  <a href="#">10 comments</a>
                </span> -->
              <span class="date-type">
                  <i class="fa fa-calendar"></i>2020-01-05 / 12:10:16
                </span>
            </div>
            <div class="blog-text">
              <h4>
                                      <a href="blog.html">שירות חדש המאפשר חיפוש שיקים שלא נפדו במערכת הוצאה לפועל</a>
                </h4>
              <p>
              שירות חדש המאפשר לבדוק במאגר האם קיים שיק שלא נפדה ששולם על ידי מערכת ההוצאה לפועל ולקבל החזר כספי.
              </p>
            </div>
            <span>
                <a href="https://www.gov.il/he/departments/news/service_allows_check_not_cashed" class="ready-btn">מידע נוסף</a>
              </span>
          </div>
        </div>
        <!-- End Right Blog-->
      </div>
    </div>
  </div>
</div>


<!-- Start contact Area -->

<div style="background-color: lightblue;">
  <h2>מותאם לכל המכשירים שלך</h2>
  <img src="images/RESPONSIVE.png" alt="" height="300" width="400" >
</div>



<div id="contact" class="contact-area">
  <div class="contact-inner area-padding">
    <div class="contact-overly"></div>
    <!-- <div class="container "> -->
      <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="section-headline text-center">
            <h2>פרטי התקשרות</h2>
          </div>
        </div>
      </div>

      <div class="row">
        <!-- Start contact icon column -->
        <div class="col-md-4 col-sm-4 col-xs-12">
          <div class="contact-icon text-center">
            <div class="single-icon">
              <i class="fa fa-mobile"></i>
              <p>
                Office : 04-8222233<br>
                <span></span>
              </p>
            </div>
          </div>
        </div>
        <!-- Start contact icon column -->
        <div class="col-md-4 col-sm-4 col-xs-12">
          <div class="contact-icon text-center">
            <div class="single-icon">
              <i class="fa fa-envelope-o"></i>
              <p>
               Zarimaosinov@gmail.com<br>
                <span> Aloncohen@gmail.com</span>
              </p>
            </div>
          </div>
        </div>
        <!-- Start contact icon column -->
        <div class="col-md-4 col-sm-4 col-xs-12">
          <div class="contact-icon text-center">
            <div class="single-icon">
              <i class="fa fa-map-marker"></i>
              <p>
                University of Haifa<br>
                <span>Haifa,Israel</span>
              </p>
            </div>
          </div>
        </div>
      </div>
      <div class="row">

        <!-- Start Google Map -->
        <div class="col-md-6 col-sm-6 col-xs-12">
          <!-- Start Map -->
          <iframe id="content-desktop" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3355.1622314315964!2d35.01732971406915!3d32.76142958097674!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x151dbab83f7be8ab%3A0x475fdbcf84359ab8!2sUniversity%20of%20Haifa!5e0!3m2!1sen!2sbg!4v1579869996703!5m2!1sen!2sbg" width="400" height="300" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
          <!-- End Map -->
        </div>
        <!-- End Google Map -->

        <!-- Start  contact -->
        <div class="col-md-6 col-sm-6 col-xs-12">
          <div class="form contact-form">
            <div id="sendmessage">Your message has been sent. Thank you!</div>
            <div id="errormessage"></div>
            <form action="mailto:Zarimaosinov@gmail.com" method="post" role="form" class="contactForm" dir="rtl">
              <div class="form-group">
                <input type="text" name="name" class="form-control" id="name" placeholder="שם פרטי" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                <div class="validation"></div>
              </div>
              <div class="form-group">
                <input type="email" class="form-control" name="email" id="email" placeholder="מייל" data-rule="email" data-msg="Please enter a valid email" />
                <div class="validation"></div>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="נושא" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                <div class="validation"></div>
              </div>
              <div class="form-group">
                <textarea type="text" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="הודעה"></textarea>
                <div class="validation"></div>
              </div>
              <div class="text-center"><button type="submit">שליחת הודעה</button></div>
            </form>
          </div>
        </div>
        <!-- End Left contact -->
      </div>
    </div>
  </div>
</div>
<!-- End Contact Area -->







  <!-- Footer -->
  <footer class="footer">
    <div >
      <p class="m-0 text-center text-white">Copyright &copy; Zarima Osinov and Alon Cohen</p>
    </div>
    <!-- /.container -->
  </footer>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
