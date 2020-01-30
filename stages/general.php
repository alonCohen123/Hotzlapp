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
  <body style="background-color:#EEEEEE;min-height: auto;
  position: relative;">
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" style="position:fixed top;">
    <div class="container">
      <a class="navbar-brand" href="../index.php">Wisely</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive" >
        <ul class="navbar-nav ml-auto" style="float:right;">
          <ol style="margin-top:13px;margin-right: 5px;">
            <a style="color:#DCDCDC;" class="breadcrumb-item" aria-current="page" href="#"><strong>הגדרות ומידע כללי</strong></a>
          </ol>
          <li class="nav-item">
            <a class="nav-link" href="../index.php">Home
            </a>
          </li>
          <li class="nav-item active">
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

    <!-- <br /><br /><br /><br /> -->

    <!-- <div class="container" style="position:fixed; left:13%;height:100%;"> -->
    <div class="container">

      <div class="tab-wrap">
          <div class="container" style="text-align: center;" >
            <h1 style="text-align: center;">הגדרות ומידע כללי</h1>
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
            <div class="container" align="center">
             <form method="POST" id="comment_form">
              <div class="form-group">
               <input hidden name="comment_name" id="comment_name" value='<?php echo $user?>' />
              </div>
              <div class="form-group">
               <textarea dir= "rtl" name="comment_content" id="comment_content" class="form-control" placeholder="הכנס תגובתך כאן" rows="3" style="max-width: 700px;"></textarea>
              </div>
              <div class="form-group">
               <input type="hidden" name="comment_id" id="comment_id" value="0" />
               <input type="hidden" name="page" id="page" value="general" />
               <input type="submit" name="submit" id="submit" class="btn btn-info" value="Submit" />
               <input type="button" name="cancel" id="cancel" class="btn btn-secondary" value="Cancel" />
              </div>
             </form>
             <span id="comment_message"></span>
             <br />
             <div id="display_comment"></div>
            </div>


        </div>

          <div class="tab__content" style="height: 100%;" dir="rtl">
            <br>
            <p class="lead" dir="rtl" align="center" style="font-size: 2.4em;color:#5E86F2;">הוצאה לפועל</p><br>
            <p class="lead" dir="rtl" align="right">הוצאה לפועל (הוצל"פ) היא הליך המשמש אדם לשם מימוש פסק דין שניתן לטובתו על ידי בית משפט או בית דין המוסמך לכך, וכן למימוש מסמכים המקנים זכויות כספיות שתוקפן דומה לתוקפו של פסק דין, כגון שטר משכנתה, שטר חוב או המחאה (שיק). מסמכים אלו מקנים לרוב זכות לקבלת סכום כסף, אך לעיתים מדובר בסעד לביצוע פעולה מסוימת, כגון סילוק יד מדירה.</p>
            <p class="lead" dir="rtl" align="right">הליך ההוצאה לפועל מוסדר באמצעות דיני ההוצאה לפועל. לשם קיום דינים אלו הוקמה במדינת ישראל מערכת של הוצאה לפועל, הדואגת למימושם של פסקי הדין והמסמכים האחרים המוגשים לה לביצוע. החיקוק העיקרי העוסק בהוצאה לפועל הוא חוק ההוצאה לפועל, התשכ"ז-1967, והתקנות שהותקנו מכוחו.</p><br>
           <div align ="right"><iframe width="100%" height="315" src="https://www.youtube.com/embed/YIT90BprJOI" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div><br><br>
           <button class="accordion">מבנה מערכת הוצאה לפועל במדינת ישראל</button>
           <div class="panel2">
             <p class="lead" dir="rtl" align="right">במדינת ישראל ישנו מספר רב של לשכות הוצאה לפועל, הפועלות במקביל לבית משפט השלום, בראשן עומד רשם הוצאה לפועל

תפקידו של רשם ההוצאה לפועל הוא לרוב מנהלי, והוא עוסק בדרכים בהן יש למלא אחר פסקי הדין והמסמכים האחרים המוגשים לביצוע. אין זה מתפקידו להרהר אחר האמור בפסקי הדין, אלא לקבוע את ההסדרים לביצועם, בכלים כגון עיקול, צו תשלום, פקודת מאסר וכיוצא בזה.

תפקיד נוסף הוא תפקידו של "מנהל לשכת הוצאה לפועל", הממונה על ידי שר המשפטים ואשר מתפקידו לבצע בפועל את הוראותיו של רשם ההוצאה לפועל.</p><br>

           </div>

           <button class="accordion">גדר סמכות דיני ההוצאה לפועל</button>
           <div class="panel2">
             <p class="lead" dir="rtl" align="right">ישנם חיובים אשר מטבעם אינם ניתנים לביצוע בהוצאה לפועל, שכן הם דורשים מידה של פיקוח שאינה אפשרית על ידי בית המשפט. כך, למשל, חיוב הנובע מצו עשה או צו מניעה שנתן בית המשפט, החורג מגדר החיוב הרגיל של תשלום כסף או העברת חזקה בנכס, לא ניתן לבצע בהוצאה לפועל. לשם כך קיימת מערכת דינים מקבילה- דיני בזיון בית המשפט. לבית הדין הרבני סמכויות רבות בנוגע לאכיפתם של פסקי דין לגירושין שאף הם אינם בגדר סמכות דיני ההוצאה לפועל.

             מערכת דיני פשיטת הרגל היא דרך נוספת לגביית חובות. במקרה שהחייב מוכרז כפושט רגל מעוכבים כנגדו הליכי ההוצאה לפועל, ולאחר קבלת צו ההפטר בהליכים אלו, לא ניתן להמשיך בהליכי הגבייה בתיק ההוצאה לפועל.</p><br>

           </div>

           <button class="accordion">הצדדים בהליכי ההוצאה לפועל</button>
           <div class="panel2">
             <p class="lead" dir="rtl" align="right">בתיקי ההוצאה לפועל ישנו זוכה- האדם שהגיש את פסק הדין או את השטר לביצוע. מולו ניצב החייב- האדם כנגדו הוגש פסק הדין או השטר. אם ישנו גורם נוסף שחייב כספים לחייב, או שמחזיק בנכסים השייכים לו, וברצון הזוכה לקבל כספים או נכסים אלו, יכול הזוכה לבצע עיקול אצל צד ג' זה, ובמקרה זה נקרא אותו צד ג' מחזיק.</p>
             <p class="lead" dir="rtl" align="right">ההליכים העומדים לטובת החייב</p>
               <p class="lead" dir="rtl" align="right">התנגדות לביצוע שטר - ישנם שטרות שאינם בני ביצוע. כך, למשל, ניתן להעלות טענת כישלון תמורה מלא כלפי צד ישיר לשטר (אדם שרכש סחורה, שילם עבורה בהמחאה ולא קיבל אותה, יכול לטעון כי אין עליו לפרוע את ההמחאה, אם הוא הוגש באופן ישיר על ידי ספק הסחורה ולא הוסב לצד ג'). במקרה של הגשת התנגדות בפרק זמן של עד 30 יום מהמצאת האזהרה מעוכבים לרוב הליכי ההוצאה לפועל עד בירור העניין בתחילה אצל רשם בית המשפט, ולאחר מכן אם נראה שיש ממש בהתנגדות, על ידי בית המשפט המוסמך.
             טענת פרעתי - כנגד פסק דין ניתן להעלות טענת "פרעתי". שלא כמובן מפירוש מילולי של הטענה, אין המדובר בטענה לפרעון חוב, אלא בטענה לכל מצב עניינים העומד לטובת החייב לאחר מתן פסק הדין. למשל טענה כי החוב נפרע, הנכס נמסר, הזוכה מחל על החוב, וכיוצא בזה. בטענה זו דן ראש ההוצאה לפועל, ובמסגרת זו תפקידו אינו מינהלי כי אם שיפוטי.
             איחוד תיקים - אדם שנפתחו כנגדו תיקי הוצאה לפועל על ידי גורמים שונים, יכול לבקש לאחדם ולשלם סכום חודשי קבוע לממונה על איחוד התיקים, המחלק אותו בין הזוכים השונים. סכום זה נקבע כך שהחוב ישולם במלואו בתוך זמן קצוב.
             חייב מוגבל באמצעים - חייב המודיע כי אינו יכול לשלם את החוב בתוך פרק זמן הקבוע בחוק (בין שנתיים לארבע שנים לפי סכום החוב) יכול להיות מוכרז כחייב מוגבל באמצעים. חייב זה עובר הליך של חקירת יכולת בידי ראש ההוצאה לפועל, הקובע צו תשלומים, שיכול להביא לפריסת החוב לתשלומים קטנים במשך שנים רבות. חייב כזה מוגן בפני הליכי הוצאה לפועל כגון עיקול כל עוד הוא משלם את הסכום החודשי. עם זאת, חייב כזה אינו יכול לצאת מן הארץ, נחשב כלקוח מוגבל מיוחד בבנק, אינו יכול לעשות שימוש בכרטיס אשראי, ומנוע מלנהל חברה.</p>

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


<br><br><br><br>
<p class="lead" dir="rtl" align="left"></p><br><b>שתפו  : </b>

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


            </div>

          <div class="tab__content" align="center">
            <!-- <h3>טפסים ולינקים חיצוניים</h3> -->
            <hr>
            <p class="lead" style="font-size: 2.4em;color:#5E86F2;">מידע נוסף</p><br>
            <p class="lead"><a target="_blank" href="https://www.toledano.co.il/%D7%98%D7%A4%D7%A1%D7%99%D7%9D-%D7%94%D7%95%D7%A6%D7%9C%D7%A4/">	 הוצאה לפועל טפסים להורדה מעודכנים לשנת 2019 </a></p>
            <p class="lead"><a target="_blank" href="https://www.gov.il/he/Departments/Guides/execution_debtors_guide?chapterIndex=5">	רשות האכיפה והגבייה </a></p>
        </div>

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

 $('#cancel').on('click', function(event){
   event.preventDefault();
   $('#comment_form')[0].reset();
   $('#comment_id').val('0');
   $('#comment_content').focus();
   $('#comment_content').attr("placeholder", "הכנס תגובתך כאן");
 });

 load_comment();

 function load_comment()
 {
  if ($(window).width() > 1000) {
    $.ajax({
     url:"../includes/fetch_comment.php",
     method:"POST",
     data:'page1=general',
     success:function(data)
     {
      $('#display_comment').html(data);
        //$page;
     }
   })
 }
 else{
   $.ajax({
    url:"../includes/fetch_comment_mobile.php",
    method:"POST",
    data:'page1=general',
    success:function(data)
    {
     $('#display_comment').html(data);
      //$page;
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
      alert(date);
    }
   });
  });

  setInterval(function(){
      load_comment();
  },5000);

 });
 </script>
 <script src="../js/topnav.js"></script>
 <script src="../js/rating_help.js"></script>
