
<?php
$user="";
$forum_key="g";
session_start();
if(isset($_SESSION['user'])){
  $user = $_SESSION['user'];
}

 ?>
 <!DOCTYPE html>
 <html style="background-color:#EEEEEE;">
  <head>

    <style>
  .accordion {
    background-color: #eee;
    color: #444;
    cursor: pointer;
    padding: 18px;
    width: 100%;
    border: none;
    text-align: right;
    outline: none;
    font-size: 15px;
    transition: 0.4s;
    margin-bottom: 0 !important;
  }

  .active, .accordion:hover {
    background-color: #ccc;
  }

  .panel2 {
    padding: 0 18px;
    background-color: white;
    max-height: 0;
    overflow: hidden;
    transition: max-height 0.2s ease-out;
    margin-bottom: 0 !important;
  }
  </style>

   <title>Wizely Hotzlapp</title>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

     <!-- Basic -->
     <meta charset="utf-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">

     <!-- Mobile Metas -->
     <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">

      <!-- Site Metas -->
     <title>Wisely Hotzlapp</title>



     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

     <!-- Site Icons -->
     <link rel="shortcut icon" href="../images/favicon.ico" type="image/x-icon" />
     <link rel="apple-touch-icon" href="../images/apple-touch-icon.png">

     <!-- Bootstrap CSS -->

     <link rel="stylesheet" href="../css/bootstrap.min.css">
     <!-- Site CSS -->
     <link rel="stylesheet" href="../css/style.css">
     <!-- Colors CSS -->
     <link rel="stylesheet" href="../css/colors.css">
     <!-- ALL VERSION CSS -->
     <link rel="stylesheet" href="../css/versions.css">
     <!-- Responsive CSS -->
     <link rel="stylesheet" href="../css/responsive.css">
     <!-- Custom CSS -->
     <link rel="stylesheet" href="../css/custom.css">

     <!-- CSS -->
     <link href="../css/tabs2.css" rel="stylesheet">

     <!-- Fonts  -->
     <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700,400italic,600italic,600,700italic' rel='stylesheet' type='text/css'>


     <!-- <header class="header header_style_01" style="position:relative;">

     </header> -->

 </head>
  <body class="seo_version" style="background-color:#EEEEEE;min-height: auto;
  position: relative;">

  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="../index.php">Wisely</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto" style="float:right;">
          <ol style="margin-top:13px;margin-right: 5px;">
            <a style="color:#DCDCDC;" class="breadcrumb-item" aria-current="page" href="3rdstage.php"><strong>קבלת אזהרה</strong></a>
            <a style="color:#DCDCDC;" class="breadcrumb-item" aria-current="page"><strong>חקירת יכולת כלכלית</strong></a>
          </ol>
          <li class="nav-item active">
            <a class="nav-link" href="../index.php">Home
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../stages/general.php">Main</a>
          </li>
          <li class="nav-item">
        <!--   <a class="nav-link" href="#">General</a>-->
        <?php if( (!isset($_SESSION['user'])) || ($_SESSION['user'] == "") )
                  echo "
                  <a class='nav-link' href='../login.html'>Login</a>
                  </li>
                    <li class='nav-item'>
                  <a class='nav-link' href='../signUp.html'>Sign Up</a>
                  </li>
                  ";
                else {
                  echo "
                  <a class='nav-link' href='../visit_profile.php?visitUser=".$user."'>My Profile</a>
                  </li>
                  <li class='nav-item'>
                  <a class='nav-link' href='../includes/logout.inc.php'>Logout</a>
                  </li>
                  ";
                }
         ?>
         <!-- <ol style="margin-top:13px;margin-left: 5px;">
           <a style="color:#DCDCDC;" class="breadcrumb-item" aria-current="page" href="3rdstage.php"><strong>קבלת אזהרה</strong></a>
           <a style="color:#DCDCDC;" class="breadcrumb-item" aria-current="page"><strong>חקירת יכולת כלכלית</strong></a>
         </ol> -->
          </li>
        </ul>
      </div>
    </div>
    <?php if($user != ""){
            echo '<label dir="rtl" style="color:white;position:block;right:5;">שלום '.$user.'</label>';
          }
    ?>
    </nav>
    <!-- <br /><br /><br /><br /> -->

    <div class="container">

      <div class="tab-wrap">
        <div class="container" style="text-align: center;" >
          <!-- <ol style="margin-top:13px;margin-left: 5px;">
            <a style="color:#DCDCDC;" class="breadcrumb-item" aria-current="page" href="3rdstage.php"><u>קבלת אזהרה</u></a>
            <a style="color:#DCDCDC;" class="breadcrumb-item" aria-current="page"><strong>חקירת יכולת כלכלית</strong></a>
          </ol> -->
          <h1 style="text-align: center;">חקירת יכולת כלכלית</h1>
        </div>
      </div>

        <div class="tab-wrap" >

          <input type="radio" id="tab1" name="tabGroup1" class="tab" checked>
          <label for="tab1">פורום</label>

          <input type="radio" id="tab2" name="tabGroup1" class="tab">
          <label for="tab2">מידע רלוונטי</label>

          <input type="radio" id="tab3" name="tabGroup1" class="tab">
          <label for="tab3">טפסים ולינקים חיצוניים</label>

          <div class="tab__content" style="height: 100%;">
            <!-- <h3 align="right">בפורום זה תוכלו לדון בנושאים השונים של הוצאה לפועל ובפרט בקשיים בהם נתקלתם מול המערכת. מטרת הפורום היא לבנות קהילה תומכת שבה תוכלו להתייעץ עם עורכי ן וגם אנשים שעברו את אותם קשיים ובעיות כמוכם ובין היתר תוכלו בעצמכם לשתף מידע חב </h3> -->

            <br />
            <div class="container" align="center" style="width:100%;">
             <form method="POST" id="comment_form">
              <div class="form-group">
               <input hidden name="comment_name" id="comment_name" value='<?php echo $user?>' />
              </div>
              <div class="form-group">
               <textarea dir= "rtl" name="comment_content" id="comment_content" class="form-control" placeholder="הכנס תגובתך כאן" rows="3" style="max-width: 700px;"></textarea>
              </div>
              <div class="form-group">
               <input type="hidden" name="comment_id" id="comment_id" value="0" />
               <input type="hidden" name="page" id="page" value="3rd" />
               <input type="submit" name="submit" id="submit" class="btn btn-info" value="Submit" />
               <input type="button" name="cancel" id="cancel" class="btn btn-secondary" value="Cancel" />
              </div>
             </form>
             <span id="comment_message" style="width:105%;"></span>
             <br />
             <div id="display_comment"></div>
            </div>


        </div>

          <div class="tab__content" style="height: 100%;">
            <p class="lead" dir="rtl" align="center" style="font-size: 2.4em;color:#5E86F2;">קבלת אזהרה</p><br>
<br>

                        <button class="accordion">?מהי אזהרה</button>
                        <div class="panel2">
                          <p class="lead" dir="rtl" align="right">אזהרה היא המסמך הראשון הנשלח לחייב עם פתיחת תיק ההוצאה לפועל. האזהרה מכילה הודעה על כך שנפתח כנגדו תיק הוצאה לפועל ועומד לרשותו פרק זמן להתגונן או להגיע להסדר (30 יום בתיקי תובענות על סכום קצוב ובשטרות ו-21 יום בשאר התיקים). לא ניתן להתחיל בהליכי גבייה מבלי שהחייב קיבל אזהרה וחלפו הימים הקבועים בחוק המאפשרים לו להתנגד לעצם החוב או להתייצב בפני רשם כדי לחלק את החוב לתשלומים על פי יכולתו הכלכלית.</p>
                          <p class="lead" dir="rtl" align="right">המצאת אזהרה לחייב היא תנאי מוקדם לקיומם של הליכי הוצאה לפועל</p>
                          <p class="lead" dir="rtl" align="right">תוכן האזהרה: א.לשלם את החוב או להגיש בקשה לצו תשלומים (ראו בהמשך הסבר – ס' ד.א צו תשלומים) בתוך תקופה של 20 ימים מיום המצאת האזהרה. ב.במידה ואין יכולת כלכלית לשלם את החוב - להתייצב לחקירת יכולת בתוך21  ימים מיום מהמצאת האזהרה.</p><br>

                          <p cla<br>
                        </div>

                        <button class="accordion">חקירת יכולת כלכלית</button>
                        <div class="panel2">
                          <p class="lead" dir="rtl" align="right">חקירה זו נערכת ע"י רשם ההוצאה לפועל, מיוזמתו או לפי בקשת הזוכה או החייב. השירות מאפשר להגיש בקשה לחקירת יכולתו הכלכלית של החייב לעמוד בהסדרי התשלומים. חקירת יכולת הינה חקירת מצבו של החייב, הכנסותיו וחובותיו, לצורך בירור יכולתו למלא אחר פסק הדין או צו התשלומים שניתן נגדו.  ואולם גם הזוכה יכול להוסיף מידע חדש, אם וכאשר מגיע לידיו מידע כזה. רק בסיום החקירה נקבעת היכולת של החייב להחזיר חובות וכן צורת הגבייה הרצויה (עיקול, סכום אחד, חלוקה לתשלומים). חייב שלא התייצב לחקירת יכולת יראו אותו כבעל יכולת המשתמט מתשלום חובותיו (ראו בהמשך הסבר – חייב משתמט מתשלום). משמע, ניתן לנקוט כנגדו בהליכים מבצעיים לגביית החוב, לרבות עיקולים ,הטלת הגבלות, מסירת מידע ועוד.</p><br>
                          <p cla<br>
                        </div>

                        <button class="accordion">?איך להגיש בקשה לחקירת יכולת</button>
                        <div class="panel2">
                          <p class="lead" dir="rtl" align="right"> •	יש להדפיס ולמלא את טופס 400 – בקשה זימון לדיון או לחקירת יכולת, עליכם לסמן ב-X את קוד הבקשה 159.
                          <br> •	החייב יכול להגיש את הבקשה בכל אחת מלשכות ההוצאה לפועל.
                          <br> •	הזוכה יכול להגיש את הבקשה בלשכה בה מתנהל התיק.
                          <br> •	בעת הגשת הבקשה בלשכה יש להזדהות באמצעות תעודת זהות או תעודה רשמית אחרת מטעם רשויות המדינה.
                          <br>  -	אם ברשותכם תעודת זהות בלויה, שלא מאפשרת זיהוי באמצעותה, תידרשו להמציא תעודה אחרת נושאת תמונה, המאפשרת זיהוי והצלבת מידע עם הנתונים שבתעודת הזהות.
                          </p>

                        </div>

                        <script>
                        var acc = document.getElementsByClassName("accordion");
                        var i;

                        for (i = 0; i < acc.length; i++) {
                          acc[i].addEventListener("click", function() {
                            this.classList.toggle("active");
                            var panel = this.nextElementSibling;
                            if (panel.style.maxHeight) {
                              panel.style.maxHeight = null;
                            } else {
                              panel.style.maxHeight = panel.scrollHeight + "px";
                            }
                          });
                        }
                        </script>



<br><br><br>


      <p class="lead" dir="rtl" align="left"></p><br>
                    <!-- Email -->
                    <a href="mailto:?Subject=Simple Share Buttons&amp;Body=I%20saw%20this%20and%20thought%20of%20you!%20 https://simplesharebuttons.com">
                        <img src="https://simplesharebuttons.com/images/somacro/email.png" alt="Email" />
                    </a>

                    <!-- Facebook -->
                    <a href="http://www.facebook.com/sharer.php?u=https://simplesharebuttons.com" target="_blank">
                        <img src="https://simplesharebuttons.com/images/somacro/facebook.png" alt="Facebook" />
                    </a>

                    <!-- Google+ -->
                    <a href="https://plus.google.com/share?url=https://simplesharebuttons.com" target="_blank">
                        <img src="https://simplesharebuttons.com/images/somacro/google.png" alt="Google" />
                    </a>

                    <!-- Twitter -->
                    <a href="https://twitter.com/share?url=https://simplesharebuttons.com&amp;text=Simple%20Share%20Buttons&amp;hashtags=simplesharebuttons" target="_blank">
                        <img src="https://simplesharebuttons.com/images/somacro/twitter.png" alt="Twitter" />
                    </a>
                    <b>: שתפו</b>
          </div>

          <div class="tab__content" align="center">
            <!-- <h3>טפסים ולינקים חיצוניים</h3> -->
            <hr>
                      <p class="lead" style="font-size: 2.4em;color:#5E86F2;">מידע נוסף-לינקים</p><br>
            <p class="lead"><a target="_blank" href="https://www.gov.il/BlobFolder/service/ability_investigation/he/%D7%98%D7%95%D7%A4%D7%A1%20400%20-%20%D7%96%D7%99%D7%9E%D7%95%D7%9F%20%D7%9C%D7%93%D7%99%D7%95%D7%9F%20%D7%90%D7%95%20%D7%9C%D7%97%D7%A7%D7%99%D7%A8%D7%AA%20%D7%99%D7%9B%D7%95%D7%9C%D7%AA.pdf">טופס 400</a></p>
        </div>

  </body>
 </html>


 <script>
 $(document).ready(function(){

 $('#comment_form').on('submit', function(event){
  event.preventDefault();
  var form_data = $(this).serialize();
  $.ajax({
   url:"../includes/add_comment.php",
   method:"POST",
   data:form_data,
   dataType:"JSON",
   success:function(data)
   {
    if(data.error != '')
    {
     $('#comment_form')[0].reset();
     $('#comment_message').html(data.error);
     $('#comment_id').val('0');
     load_comment();
    }
   }
  })
 });

 load_comment();

 function load_comment()
 {
  if ($(window).width() > 1000) {
    $.ajax({
     url:"../includes/fetch_comment.php",
     method:"POST",
     data:'page1=3rd',
     success:function(data)
     {
      $('#display_comment').html(data);
      $page;
     }
   })
 }
 else{
   $.ajax({
    url:"../includes/fetch_comment_mobile.php",
    method:"POST",
    data:'page1=3rd',
    success:function(data)
    {
     $('#display_comment').html(data);
     $page;
    }
  })
 }
 }

 $( window ).resize(function() {
    load_comment();
});

 $(document).on('click', '.reply', function(){
  var comment_id = $(this).attr("id");
  $('#comment_id').val(comment_id);
  $('#comment_content').focus();
  $('#comment_content').attr("placeholder", "Please write your reply here");
 });

 $(document).on('click', '.delete', function(){
  var comment_id = $(this).attr("id");
  if(confirm('Are you sure you want to delete ?')){
  $.ajax({
   url:"../includes/delete_comment.inc.php",
   method:"POST",
   data:{comment_id:comment_id},
   success:function(data)
   {
     load_comment();
     alert("Your comment deleted successfully");
   }
  });
  }
 });

 $(document).on('click', '.rating', function(){
  var index = $(this).data("index");
  var business_id = $(this).data('business_id');
  //alert(business_id+" "+index);
  $.ajax({
   url:"../includes/rating.inc.php",
   method:"POST",
   data:{index:index, business_id:business_id},
   success:function(data)
   {
     load_comment();
     alert(data);
   }
  });
 });

 $('#cancel').on('click', function(event){
   event.preventDefault();
   $('#comment_form')[0].reset();
   $('#comment_id').val('0');
   $('#comment_content').focus();
   $('#comment_content').attr("placeholder", "הכנס תגובתך כאן");
 });

 setInterval(function(){
     load_comment();
 },5000);
 });
 </script>
 <script src="../js/topnav.js"></script>
 <script src="../js/rating_help.js"></script>
