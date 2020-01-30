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
            <a style="color:#DCDCDC;" class="breadcrumb-item" aria-current="page" href="#"><strong>הליכי ערר וערעור</strong></a>
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
         <!--<ol style="margin-top:13px;margin-left: 5px;">
           <a style="color:#DCDCDC;" class="breadcrumb-item" aria-current="page" href="#"><strong>הליכי ערר וערעור</strong></a>
         </ol>-->
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
            <h1 style="text-align: center;">הליכי ערר וערעור</h1>
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
               <input type="hidden" name="page" id="page" value="7th" />
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
            <p class="lead" dir="rtl" align="center" style="font-size: 2.4em;color:#5E86F2;">הליכי ערר וערעור בהוצאה לפועל</p><br>
            <button class="accordion">?מהו הליך ערר</button>
            <div class="panel2">
              <p class="lead" dir="rtl" align="right"> </b>ערר הינו הליך שבאמצעותו ניתן לתקוף פעולה של רשות מינהלית אחת בפני רשות מינהלית גבוה יותר. בהליכי הוצאה לפועל, הכוונה היא לתקיפת פעולה או החלטה של מנהל לשכת הוצאה לפועל או עובד מערכת ההוצאה לפועל. לפיכך, אם בעל הדין ראה את עצמו נפגע על ידי החלטה או פעולה כלשהי של מנהל לשכת ההוצאה לפועל, רשאי הוא להגיש תוך 3 ימים מהיום שבו נודע לו על הפעולה או קיבל את ההחלטה לידיו, ערר לרשם ההוצאה לפועל .  יצוין כי הגשת ערר – אינה פוגעת בזכות העתידית לערעור.</p>
              <p cla<br>
            </div>
            <button class="accordion">?מהו הליך ערעור</button>
            <div class="panel2">
              <p class="lead" dir="rtl" align="right"> </b>ערעור הינו אח התאום של הערר. אולם, בניגוד לערר, מטרת הערעור היא לתקוף החלטות של רשם ההוצאה לפועל. יש לשים לב, כי רשם ההוצאה לפועל מתפקד גם כרשות מנהלית וגם כרשות שיפוטית. הליך ערעור מהותו פנייה לבית המשפט לטובת התערבותו בהחלטת המוציא לפועל. כאשר ההוצאה לפועל לובשת את הכובע המנהלי – הערעור יוגש ברשות ראש ההוצאה לפועל ו/או שופט בית המשפט המחוזי, תוך 15 ימים ממתן הרשות כאמור. כאשר ההוצאה לפועל לובשת את הכובע השיפוטי – בכגון דא, מדובר בהחלטה שיפוטית לכל דבר ועניין ומכך ניתן לערער עליה ללא רשות, לבית משפט המחוזי לו מוקנית סמכות לדון בערעור. </p>
              <p class="lead" dir="rtl" align="right"><b>א.	ערעור על החלטת ראש ההוצאה בהחלטה מנהלית – ערעור ברשות</b>צווים והחלטות של ראש ההוצאה לפועל לרבות החלטות בערר, ניתנים לערעור ברשות ראש ההוצאה לפועל או שופט בית המשפט המחוזי. מכאן שאם ראש ההוצאה לפועל מסרב לאפשר רשות לערער על המבקש לבחור בחלופה השנייה ולהגיש את בקשתו לבית המשפט המחוזי תוך 15 ימים מיום קבלת ההחלטה (עליה הוא מעוניין לערער).
                <br>  אם וכאשר ניתנת הרשות לערער, יוגש הערעור גופו גם הוא תוך 15 ימים ממתן ההיתר.
              </p>
              <p class="lead" dir="rtl" align="right"><b>ב.	ערעור על החלטת ראש ההוצאה לפועל בהחלטה שיפוטית – ערעור בזכות</b>כאמור, ראש ההוצאה לפועל מחזיק שני כובעים, האחד מנהלי והשני שיפוטי, כאשר פועל הוא במסגרת תפקידו השיפוטי – ניתן לערער על החלטותיו כאילו ניתנו בבית משפט השלום – וזאת גם ללא רשות.
              </p>
              <p class="lead" dir="rtl" align="right"><u>מתי פועל ראש ההוצאה לפועל כרשות שיפוטית?</u></p>
              <p class="lead" dir="rtl" align="right">•	כאשר הוא דן בטענת פרעתי, על פי סעיף 19 לחוק ההוצאה לפועל.
              <br>  •	כאשר הוא מחייב נאמן של החייב בתשלום חוב.
              <br>  •	כאשר הוא מחייב צד ג' (למשל מי שקנה דירה מהחייב, והוטל עליה עיקול) בתשלום חוב.
              <br>  •	כאשר הוא מחייב כונס נכסים בתשלום חוב.
              <br>  במקרים הללו– ניתן לערער על החלטת ראש ההוצאה לפועל – בזכות – ערעור זה יוגש תוך 15 יום מקבלת ההחלטה בעניין הנדון.
              </p>
              <p class="lead" dir="rtl" align="right"><u>ערעור על החלטה בביצוע פסק דין בענייני משפחה </u></p>
              <p class="lead" dir="rtl" align="right">כאשר מדובר בחוב מזונות, או בהחלטה אחרת של ראש ההוצאה לפועל הניתנת לאור פסק דין חלוט בעניין משפחתי כזה או אחר. הערעור תמיד יהא בזכות והוא יובא לפני בית המשפט לענייני משפחה או בית המשפט המחוזי והכול לפי הנסיבות שבו נתקבל פסק הדין המקורי.
              </p>
            </div>
            <button class="accordion">?מי יכול להגיש ערר/ערעור</button>
            <div class="panel2">
              <p class="lead" dir="rtl" align="right"></br>כל אדם הרואה עצמו נפגע מהחלטת ראש ההוצאה לפועל, הדבר כולל כמובן חייבים, נושים ואף צדדים שלישיים המושפעים מהחלטות שנתקבלו בעניין הנוגע אליהם.
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
            <p class="lead"><a target="_blank" href="https://www.gov.il/he/departments/general/appeal-of-resolution">הליכי ערר וערעור</a></p>
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
     data:'page1=7th',
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
    data:'page1=7th',
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
