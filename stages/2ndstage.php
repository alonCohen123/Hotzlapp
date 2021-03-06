
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
     <link rel="shortcut icon" href="/images/favicon.ico" type="image/x-icon" />
     <link rel="apple-touch-icon" href="/images/apple-touch-icon.png">

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
    <!-- <br /><br /><br /><br /> -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container" >
        <a class="navbar-brand" href="../index.php">Wisely</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto" style="float:right;">
            <ol style="margin-top:13px;margin-right: 5px;">
              <a style="color:#DCDCDC;" class="breadcrumb-item" aria-current="page" href="#"><strong>פתיחת תיק בהוצאה לפועל</strong></a>
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
            </li>
          </ul>
        </div>
      </div>
      <?php if($user != ""){
              echo '<label dir="rtl" style="color:white;position:block;right:5;">שלום '.$user.'</label>';
            }
      ?>
      </nav>


    <div class="container">

        <div class="tab-wrap">
          <div class="container" style="text-align: center;" >
            <h1 style="text-align: center;">פתיחת תיק בהוצאה לפועל</h1>
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
               <input type="hidden" name="page" id="page" value="2nd" />
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
            <p class="lead" dir="rtl" align="center" style="font-size: 2.4em;color:#5E86F2;"> תנאים לקבלת השירות</p><br>

            <br>
            <p class="lead" dir="rtl" align="right">המטרה בפתיחת תיק היא להוציא לפועל פסקי דין שניתנו בהליך שיפוטי. ולבצע אותם כפי שנכתב ונדרש על פי החוק. על מגיש הבקשה להחזיק בפסק דין</p>
            <br>

            <button class="accordion">פתיחת תיק בהוצאה לפועל</button>
            <div class="panel2">
              <p class="lead" dir="rtl" align="right">יש לוודא כי בקשת הביצוע תוגש בחלוף 30 יום ממתן פסק הדין או מיום המצאתו לנתבע, אם כך חויב בפסק הדין. אם צוין מועד אחר, יש להגיש את הבקשה בהתאם</p>
              <p class="lead" dir="rtl" align="right">במידה ובוצע תיקון טכני בפסק הדין, כמו עדכון שם או מספר תעודת זהות, אין צורך להמתין 30 יום ממועד התיקון וניתן לפתוח את התיק כבר מיום פסק הדין המקורי. </p>
              <p class="lead" dir="rtl" align="right" style="text-decoration: underline;">גופים הרשאים לתת פסקי דין שניתן להגיש בגינם בקשת ביצוע:</p>
              <p class="lead" dir="rtl" align="right">•בית משפט השלום, מחוזי, עליון או לענייני משפחה.</p>
              <p class="lead" dir="rtl" align="right">•בית דין לעבודה, רבני, שרעי, נוצרי, דרוזי, צבאי או משמעתי של לשכת עורכי הדין.המפקח על המקרקעין</p>
              <p class="lead" dir="rtl" align="right">•רשם האגודות השיתופיות, או רשם הפטנטים
              <p class="lead" dir="rtl" align="right">•החלטת רשם ההוצאה לפועל או בורר במסגרת תיק תביעות קטנות או ועדה לתכנון בנייה לחיוב בכפל אגרה</p><br>
              <p cla<br>
            </div>

            <button class="accordion">?מתי ניתן לפתוח תיק</button>
            <div class="panel2">
              <p class="lead" dir="rtl" align="right">יש לוודא כי בקשת הביצוע תוגש בחלוף 30 יום ממתן פסק הדין או מיום המצאתו לנתבע, אם כך חויב בפסק הדין. אם צוין מועד אחר, יש להגיש את הבקשה בהתאם</p>
              <p class="lead" dir="rtl" align="right">במידה ובוצע תיקון טכני בפסק הדין, כמו עדכון שם או מספר תעודת זהות, אין צורך להמתין 30 יום ממועד התיקון וניתן לפתוח את התיק כבר מיום פסק הדין המקורי. </p>
              <p class="lead" dir="rtl" align="right" style="text-decoration: underline;">גופים הרשאים לתת פסקי דין שניתן להגיש בגינם בקשת ביצוע:</p>
              <p class="lead" dir="rtl" align="right">•בית משפט השלום, מחוזי, עליון או לענייני משפחה.</p>
              <p class="lead" dir="rtl" align="right">•בית דין לעבודה, רבני, שרעי, נוצרי, דרוזי, צבאי או משמעתי של לשכת עורכי הדין.המפקח על המקרקעין</p>
              <p class="lead" dir="rtl" align="right">•רשם האגודות השיתופיות, או רשם הפטנטים
              <p class="lead" dir="rtl" align="right">•החלטת רשם ההוצאה לפועל או בורר במסגרת תיק תביעות קטנות או ועדה לתכנון בנייה לחיוב בכפל אגרה</p><br>
              <p cla<br>
            </div>

            <button class="accordion">?אילו מסמכים נדרשים להגשת הבקשה</button>
            <div class="panel2">
              <p class="lead" dir="rtl" align="right">טופס בקשה לביצוע פסק דין כספי
              <p class="lead" dir="rtl" align="right">•מסמכי עילת החוב: פסק דין מקורי או נאמן למקור הנושא את מספרי הזהות של הצדדים, מאושר וחתום על ידי מזכירות בית המשפט. לחילופין, ניתן לצרף מסמך מתיק בית המשפט, הנושא את המספר המזהה של הנתבע, חתום ומאושר על ידי מזכירות בית המשפט</p>
              <p class="lead" dir="rtl" align="right">•אסמכתה לחשבון לזיכוי - אישור ניהול חשבון/צילום שיק/צילום כרטיס אשראי</p>
              <p class="lead" dir="rtl" align="right">•ייפוי כוח – במקרים שבהם הזוכה מיוצג על ידי עורך דין</p>
              <p class="lead" dir="rtl" align="right">•אישור מסירת פסק הדין – במקרים שבהם נדרש האישור בפסק הדין</p><br>
              <p class="lead" dir="rtl" align="right" style="font-size: 1.8em;color:#21222E;">הגשת הבקשה</p>
              <p class="lead" dir="rtl" align="right">יש למלא את הבקשה לפתיחת תיק פסק דין כספי בהוצאה לפועל, לצרף את המסמכים הנדרשים, ולהגיש בכל אחת מלשכות ההוצאה לפועל</p><br><br><br>

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


<br><br>

<p class="lead" dir="rtl" align="left"></p><br>

<br><br><br><br>
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

<!--<a href="https://wa.me/whatsappphonenumber/?text=urlencodedtext">here</a>-->
</div>

          <div class="tab__content" align="center">
            <!-- <h3>טפסים ולינקים חיצוניים</h3> -->
            <hr>
                <p class="lead" style="font-size: 2.4em;color:#5E86F2;">מידע נוסף</p><br>
                <p class="lead"><a target="_blank" href="https://www.gov.il/he/service/opening_alimony_file">פתיחת תיק מזונות בהוצאה לפועל</a></p>
                <p class="lead"><a target="_blank" href="https://www.gov.il/he/service/opening_pawn_file">פתיחת תיק משכון בהוצאה לפועל</a></p>
                <p class="lead"><a target="_blank" href="https://www.gov.il/he/service/opening_monetary_verdict_file">פתיחת תיק פסק דין כספי בהוצאה לפועל</a></p>
                <p class="lead"><a target="_blank" href="https://www.gov.il/he/service/opening_promissory_notes_and_checks_file">פתיחת תיק פסק דין צו עשה בהוצאה לפועל</a></p>
                <p class="lead"><a target="_blank" href="https://www.gov.il/he/service/opening_promissory_notes_and_checks_file">פתיחת תיק שטרות והמחאות בהוצאה לפועל</a></p>
<br>

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
     data:'page1=2nd',
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
    data:'page1=2nd',
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
