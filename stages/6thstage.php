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

     <link rel="stylesheet" type="text/css" href="../rate.css">

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
            <a style="color:#DCDCDC;" class="breadcrumb-item" aria-current="page" href="#"><strong>הגבלות ואמצעי גבייה</strong></a>
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
           <a style="color:#DCDCDC;" class="breadcrumb-item" aria-current="page" href="#"><strong>הגבלות ואמצעי גבייה</strong></a>
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
          <h1 style="text-align: center;">הגבלות ואמצעי גבייה</h1>
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
               <input type="hidden" name="page" id="page" value="6th" />
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
            <br>
            <p class="lead" dir="rtl" align="center"  style="font-size:2.4em;color:#5E86F2;">הגבלות ואמצעי גבייה </p><br>
          <p class="lead" dir="rtl" align="right">•	מוגבל באמצעים = הגבלה "פטרנליסטית": החייב טעון השגחה למניעת יצירתם של עוד חובות. ניתן להסיר רק "מטעמים מיוחדים שיירשמו" (סעיף 69ח לחוק).
          <br>  •	הגבלות על חייב משתמט = סנקציה שנועדה להחזיר לתלם. לרשם יש שיקול דעת רחב בהטלה ובהסרה (סעיף 66 ד(ב) לחוק)
          <br>  הגבלה על רישיון הנהיגה קיימת רק בהגבלות העונשיות בהיותה עונשית ולא מונעת יצירת חובות.
          </p>
          <p class="lead" dir="rtl" align="right"><u>ס' 66 לחוק:</u></p>
          <p class="lead" dir="rtl" align="right">ישנם תנאי סף מחייבים על פי החוק לצורך הטלת הגבלות על החייב בהליך הוצאה לפועל. הרשם רשאי להטיל את ההגבלות באחד מהמצבים הבאים:
          <br>  •	החייב הובא בפני הרשם שקבע שהוא בעל יכולת המשתמט מתשלום החוב – במצב שבו הרשם מצא שהחייב מתחמק מתשלום החוב, אינו ממלא אחר צו תשלומים, אינו מתייצב לחקירת יכולת, אינו משתף פעולה ואינו נותן הסבר סביר להתנהלותו.
          <br>  •	במצב שבו החייב לא הובא בפני הרשם, יוטלו ההגבלות באחד משני המקרים הבאים:
          <br>  1.	החוב עולה על 2,500 ₪ וחלפה חצי שנה ממועד המצאת האזהרה בתיק.
          <br>  2.	החוב עולה על 500 ₪ וחלפה שנה ממועד המצאת האזהרה בתיק.
          <br>  •	החוב הוא חוב מזונות לבן או בת הזוג של החייב, ילדו או ההורה שלו. לא כולל חובות מזונות שגובה המוסד לביטוח לאומי לפי חוק המזונות (הבטחת תשלום).
          <br>  •	החייב הוכרז על ידי רשם ההוצאה לפועל כחייב מוגבל באמצעים

          <table class="table table-bordered"  dir="rtl" align="right">
            <thead>
              <tr dir="rtl" align="right">
                <td scope="col" dir="rtl" align="right">קטגוריה</td>
                <td scope="col" dir="rtl" align="right">סכום החוב</td>
                <td scope="col" dir="rtl" align="right">מועד הטלת ההגבלה</td>
              </tr>
            </thead>
            <tbody>
              <tr dir="rtl" align="right">
                <td>חייב שהובא או בא בפני בעל הרשם והוכח כי הינו "בעל יכולת משתמט" מבלי לתת הסבר סביר לאי התשלום.</td>
                <td>מעל 500 ש"ח</td>
                <td>בכל עת</td>
              </tr>
              <tr dir="rtl" align="right">
                <td rowspan="2">חזקה כי החייב הוא "בעל יכולת משתמט"</td>
                <td>מעל 500 ש"ח</td>
                <td>חלפה שנה ממועד המצאת האזהרה</td>
              </tr>
              <tr dir="rtl" align="right">
                <td>מעל 2500 ש"ח</td>
                <td>חלפו 6 חודשים ממועד המצאת האזהרה</td>
              </tr>
              <tr dir="rtl" align="right">
                <td>חייב מזונות</td>
                <td>ללא הגבלה</td>
                <td>בכל עת</td>
              </tr>
            </tbody>
          </table>
          </p>
          <p class="lead" dir="rtl" align="right" style="font-size: 1.8em;color:#21222E;">סוגי ההגבלות (לבחון כל אמצעי לפי המטרות שבבסיסו)</p>
          <p class="lead" dir="rtl" align="right">
            •	הגבלה בהחזקת דרכון או תעודת מעבר – הרשם מוסמך להגביל את החייב בהחזקת דרכון או תעודת מעבר וכן להימנע מלהאריך את התוקף שלהם.  הגבלה זו תוטל באופן שלא ימנע מהחייב לשוב לישראל אם הוא אינו נמצא בה. בנוסף, לא ייעשה שימוש בהגבלה הזו כאשר הרשם שוכנע שיציאת החייב מהארץ דרושה מטעמי בריאותו או בריאות בן משפחתו התלוי בו.
          <br>  •	עיכוב יציאה מהארץ –  הרשם יכול להגביל את יציאת החייב לחוץ לארץ ותהיה לו נטייה להטיל את ההגבלה הזו בייחוד כאשר ישנו חשש שהחייב ינסה לצאת מהארץ מבלי לפרוע את חובו (ס' 14(א) לחוק). הגבלה זו לא תוטל אם שוכנע רשם ההוצאה לפועל שהיציאה מישראל דרושה מטעמי בריאותו של החייב או של בן משפחה התלוי בו.
          <br>  •	הגבלה על ייסוד תאגיד או כהונה בתאגיד – הרשם רשאי להגביל את פעילות החייב בתאגידים ובין היתר להגביל את החייב מלייסד תאגיד או לשמש בתאגיד כבעל עניין, במישרין או בעקיפין. חייב שהוטלה עליו הגבלה זו לא יוכל, בין היתר, לכהן כדירקטור או כמנכ"ל בתאגיד או להחזיק למעלה מ-5% מהון המניות המונפק או מכוח ההצבעה בו.
          <br>  •	הגבלה בשימוש בכרטיסי חיוב – הרשם רשאי להטיל על החייב הגבלות בשימוש בכרטיסי חיוב כדוגמת כרטיסי אשראי או "בנקט". ההגבלה מבטלת את כרטיסיו הקיימים של החייב ומגבילה אותו מהוצאת כרטיסים חדשים. הגבלה זו לא תוטל אם הערך הכספי שניתן לטעון בכרטיס הוא רק של גמלה של המוסד לביטוח לאומי או תשלומים אחרים שאינם ניתנים לעיקול על פי חוק (כגון: תשלום סיוע בשכר דירה ממשרד הבינוי והשיכון), וכל זאת בתנאי שהחוב של החייב אינו בגין מזונות.
          <br>  •	הגבלה בקבלת, החזקת וחידוש רישיון נהיגה – רשם ההוצאה לפועל רשאי להגביל או שלא לחדש את רישיון הנהיגה של חייב. החוק קובע כי הרשם לא יטיל את ההגבלה על רישיון הנהיגה כאשר הטלת ההגבלה עלולה לפגוע פגיעה ממשית בעיסוקו של החייב וביכולתו לשלם את החוב או כאשר רישיון הנהיגה חיוני לחייב, עקב נכותו או עקב נכות בן משפחה התלוי בו.
          <br>  •	לקוח מוגבל מיוחד - במקרים שבהם רואים את החייב כבעל יכולת המשתמט מתשלום חובותיו או במקרה של חוב שמקורו בתשלום מזונות לבן זוגו, לילדיו או להוריו של החייב, רשאי רשם ההוצאה לפועל להגביל אותו מול הבנק כלקוח מוגבל מיוחד.
          <br>  -	משמעות ההגבלה היא שהחייב יהיה מנוע מלמשוך שיקים מחשבונותיו הפעילים, וכמו כן חסום בכל הבנקים מלפתוח חשבון בנק חדש
        </p><br>
          <p class="lead" dir="rtl" align="right" style="font-size: 1.8em;color:#21222E;">התראה על הגבלה</p>
          <p class="lead" dir="rtl" align="right">סעיף 66ג קובע כי לא תיכנס הגבלה לתוקף אלא לאחר שמנהל לשכת ההוצאה לפועל שלח לחייב בדואר התראה וחלפו 30 ימים מיום המצאת ההתראה. בהתראה יצוין כי רשם ההוצאה לפועל הטיל על החייב הגבלה וכי היא תיכנס לתוקף בתום 30 ימים מיום המצאתה, אלא אם כן ייפרע חוב, או שהחייב יתייצב לחקירת יכולת בלשכת ההוצאה לפועל )נפתחת לחייב הזדמנות נוספת להתייצבות( וישכנע את רשם ההוצאה לפועל כי הוא אינו בעל יכולת המשתמט מתשלום חובותיו. יכולת ההתייצבות של החייב יכול ותהיה בלשכה באזור מגוריו. הטלת הגבלה במעמד החייב נכנסת לתוקף מידית.</p>

          <br><br><br><br>
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
            <p class="lead" style="font-size: 2.4em;color:#5E86F2;">מידע נוסף</p><br>
            <p class="lead"><a target="_blank" href="https://www.gov.il/he/service/imposition_of_restrictions">בקשה להטלת הגבלות על חייבים</a></p>
          </div>

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
     data:'page1=6th',
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
    data:'page1=6th',
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
