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
            <a style="color:#DCDCDC;" class="breadcrumb-item" aria-current="page" href="4thstage.php"><strong>תשלום חוב</strong></a>
            <a style="color:#DCDCDC;" class="breadcrumb-item" aria-current="page" href="4thstageA.php"><strong>קבלת החוב</strong></a>
            <a style="color:#DCDCDC;" class="breadcrumb-item" aria-current="page" href="#"><strong>אין ביכולתי לשלם את החוב</strong></a>
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
           <a style="color:#DCDCDC;" class="breadcrumb-item" aria-current="page" href="4thstage.php"><strong>תשלום חוב</strong></a>
           <a style="color:#DCDCDC;" class="breadcrumb-item" aria-current="page" href="4thstageA.php"><strong>קבלת החוב</strong></a>
           <a style="color:#DCDCDC;" class="breadcrumb-item" aria-current="page" href="#"><strong>אין ביכולתי לשלם את החוב</strong></a>
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
            <a style="color:#DCDCDC;" class="breadcrumb-item" aria-current="page" href="4thstage.php"><strong>תשלום חוב</strong></a>
            <a style="color:#DCDCDC;" class="breadcrumb-item" aria-current="page" href="4thstageA.php"><strong>קבלת החוב</strong></a>
            <a style="color:#DCDCDC;" class="breadcrumb-item" aria-current="page" href="#"><strong>אין ביכולתי לשלם את החוב</strong></a>
          </ol> -->
          <h1 style="text-align: center;">אין ביכולתי לשלם את החוב</h1>
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
               <input type="hidden" name="page" id="page" value="4ab" />
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
              <p class="lead" dir="rtl" align="center" style="font-size: 2.4em;color:#5E86F2;">כשל בהליכי הסדרת החוב</p><br>
              <p class="lead" dir="rtl" align="right">הליכי ההוצאה לפועל, מקנים לחייב אשר כשל בהליכי הסדרת החוב מול הזוכה במסגרת "הסדר חוב", אפשרויות שונות על מנת לפרוע את חובו לזוכה:</p><br>
              <button class="accordion">בקשה לפריסת החוב לתשלומים</button>
              <div class="panel2">
              <p class="lead" dir="rtl" align="right">שירות זה מאפשר לחייבים בהוצאה לפועל לבקש שינוי בפריסת החובות. לעיתים לטופס "האזהרה" אשר נמסר לחייב, מצרפת לשכת ההוצאה לפועל סך לתשלום חודשי ("צו תשלומים")
                המאפשר לחייב אשר אינו מסוגל לפרוע את חובו בתשלום יחיד, אפשרות נוספת לפריעת החוב בתשלומים ע"פ הסך אשר נקבע לו. אך לרוב החייב, שלמעשה מעוניין לשלם את חובו, אינו יכול לעמוד אף בצו התשלומים אשר נקבע לו.
              לפיכך, יהא על החייב בתוך 21 ימים מרגע שנמסרה לו האזהרה, להגיש בקשה לצו תשלומים, כאשר לבקשה עליו לצרף רשימת אסמכתאות המפרטות ותומכות במצבו הכלכלי: מענה לטופס שאלון, צילום תעודת זהות, צילום רישיונות רכב אשר בבעלות החייב או בני משפחתו, אישור על גובה ארנונה, צילום נסח טאבו עדכני של דירת המגורים, רשימת תכולת הדירה, העתק תשלומי חשבונות (מים, חשמל וכו), תדפיסי בנק, תדפיסי כרטיסי אשראי, אישור יתרות בנק וכדומה. </p></br>

              <p cla<br>
              </div>

              <button class="accordion">בקשה לשינוי הסדר התשלומים</button>
              <div class="panel2">
              <p class="lead" dir="rtl" align="right">יש להגיש בקשה מפורטת, אליה יש לצרף:</p>
              <p class="lead" dir="rtl" align="right">•	טופס 233 מודפס. עליכם לסמן X בבקשה מספר 50 (בקשה למתן צו חיוב בתשלומים או שינוי צו חיוב).</p>
              <p class="lead" dir="rtl" align="right">•	יש לצרף גם טופס 529 מודפס (שאלון וכתב ויתור על סודיות), יחד עם מסמכים נוספים שיש לצרף לטופס, המעידים על יכולת כלכלית.</p>
              <p class="lead" dir="rtl" align="right">•	הצעה הכוללת את התשלומים והזמנים לפריסת החוב, בהתאם ליכולת הכלכלית.</p>
              <p class="lead" dir="rtl" align="right">•	צילום תעודת זהות כולל ספח.</p>
              <p class="lead" dir="rtl" align="right">-	אם התעודה ביומטרית, יש לצלם את שני הצדדים.
               -	צילום תעודת זהות זמנית עבור מי שאינם אזרחים ישראלים.

              <p class="lead" dir="rtl" align="right">•	יש לצרף קבלה על תשלום ראשון בגובה התשלום החודשי המוצע ולא פחות מ 150 ₪. </p>
              <p class="lead" dir="rtl" align="right">-	בקשה ללא תשלום תטופל, אך מומלץ ורצוי לבצע תשלום ראשון בעת הגשת הבקשה</p>
              <p class="lead" dir="rtl" align="right">**דגשים לבקשה לצו תשלומים:</p>
              <p class="lead" dir="rtl" align="right">ההפרש בין הכנסות להוצאות מינוס הוצאות בלתי צפויות- זה התשלום המבוקש; לפרט את היעדר יכולתו הכלכלית של החייב; לבנות נראטיב משכנע; להשתדל להגביל ל- 2-1 עמודים, אלא אם יש טענות מורכבות; לגבות את כל הטענות העובדתיות במסמכים; להתחיל לשלם את תשלום המוצע ולצרף לבקשה שובר תשלום; תשלום מינימאלי – 150 ש"ח - לבקש שוברי תשלום בקופת ההוצל"פ או במענה הקולי שלהם.</p>
              <p class="lead" dir="rtl" align="right">**תוצאות הבקשה:</p>
              <p class="lead" dir="rtl" align="right">מזכירות ההוצאה לפועל יכולה: 1. לסרב לקבל את הבקשה כי אחד השאלונים חסר. 2. לקבל את הבקשה, אבל לבקש להשלים מסמכים שנראים לא ברורים.</p>
              <p class="lead" dir="rtl" align="right">רשם ההוצל"פ יכול: 1. לקבל את הבקשה. 2. לבקש המצאת מסמכים נוספים. 3. להזמין את החייב לחקירת יכולת. 4. לדחות את הבקשה.</p>
              <p cla<br>
              </div>
              <button class="accordion">בקשה לאיחוד תיקים</button>
              <div class="panel2">
              <p class="lead" dir="rtl" align="right">•כאשר מדובר בתשלום חוב שאינו מהווה את מלוא החוב בתיק, אך בגלל אותו חלק נפתח נגד החייב הליך מסוים (כגון: עיקול, בקשה לצו מאסר, צו הבאה וכו'):</p>
              <p class="lead" dir="rtl" align="right">•לאחר ביצוע התשלום בלשכת ההוצאה לפועל או בבנק הדואר יבוטל ההליך הספציפי הקשור לחוב (אך התיק לא ייסגר).</p>
              <p class="lead" dir="rtl" align="right">•במקרה שבו בוחר החייב לשלם ישירות לזוכה או לעורך דינו, על הזוכה להודיע על כך ללשכת ההוצאה לפועל תוך 7 ימים מיום התשלום.</p>
              <p class="lead" dir="rtl" align="right">•במקרה שמסיבה כלשהי לא בוטל ההליך, ניתן להגיש בקשה לביטול ההליך, למשל: בקשה לביטול עיקול, בקשה לביטול צו מאסר, בקשה לביטול צו הבאה וכיו"ב.</p>
              <p class="lead" dir="rtl" align="right">•הזוכה והחייב יכולים להגיע להסדר פשרה על תשלום החוב או חלקו, ובמקרה כזה על הזוכה להודיע על ההסדר ללשכת ההוצאה לפועל. הודעה זו תביא לעיכוב ההליכים נגד החייב. למידע נוסף ראו עיכוב הליכים בהוצאה לפועל לאחר הסכמה על הסדר.</p>

            </div>
            <button class="accordion">הגשת בקשה לאיחוד תיקים יזום</button>
            <div class="panel2">
              <p class="lead" dir="rtl" align="right">•	טופס הבקשה לאיחוד תיקים –טופס 222 + טופס 568 תדפיס רשימת תיקים ארצית לחייב + שאלון וויתור על סודיות.</p>
              <p class="lead" dir="rtl" align="right">•	תצהיר + תצלום תעודת זהות.</p>
              <p class="lead" dir="rtl" align="right">•	המסמכים המפורטים בטופס התצהיר</p>
              <p class="lead" dir="rtl" align="right">•	לצרף בקשה לעיכוב הליכים עד למתן הצו, ולאחר מתן הצו – בקשה לביטול ההליכים.</p>
              <p class="lead" dir="rtl" align="right">•	להגיש ללשכה בה מתנהלים מרבית התיקים של החייב.</p>
              <p class="lead" dir="rtl" align="right">•	לשלם %3 מסה"כ החובות – עם הגשת הבקשה וכן כל חודש עד להחלטה בבקשה – זהו תנאי לדיון בבקשה. אם לא - יכול להגיש בקשה לחייב מוגבל באמצעים.</p>
              <p class="lead" dir="rtl" align="right">•	טופס 7 - בקשה לאיחוד תיקים מעודכן נכון ליום ההגשה, חתום ומאומת על ידי עורך דין.  יש להדפיס את טופס הבקשה, לסמן ב-X את בקשה מספר 73.</p>
              <p class="lead" dir="rtl" align="right">•	טופס 529 - שאלון וכתב ויתור על סודיות, כולל המסמכים המעידים על יכולת כלכלית שיש לצרף.
                  -	אם חסרים מסמכים, יש לציין את הסיבה לפרטים או למסמכים החסרים.</p>
              <p class="lead" dir="rtl" align="right">•	צילום תעודת זהות (לרבות, צילום תעודת זהות זמנית למי שאינו אזרח ישראלי) </p>
              <p class="lead" dir="rtl" align="right">-	כולל ספח תעודה ביומטרית: יש לצרף צילום של שני צידי התעודה.</p>
              <p class="lead" dir="rtl" align="right">•	רשימת תיקים ארצית לפי מספר מזהה של החייב, והמעודכנת ליום ההגשה.</p>
              <p class="lead" dir="rtl" align="right">ג. חייב מוגבל באמצעים: חייב שאינו מסוגל לשלם את חובותיו במסגרת תיקי ההוצאה לפועל ו/או במסגרת תיק האיחוד (בסך מינימאלי של 3% מסך חובותיו לחודש). או כאשר החייב אינו יכול לפרוס את חובותיו ע"פ הפירוט הבא: סך חובות של עד 20,000 בתוך שנתיים; סך חובות של בין 20,000 ₪ ועד ל- 100,000 ₪ בתוך 3 שנים; סך של מעל 100,000 ₪ בתוך 4 שנים, יכריז רשם ההוצאה לפועל על החייב כ"מוגבל באמצעים" ויאפשר לחייב לפרוס את חובו בפריסה "נדיבה" יותר. הכרזה על חייב כמוגבל באמצעים יכולה לעשות לבקשת החייב או ביוזמת רשם ההוצאה לפועל. להכרזה על חייב כחייב מוגבל באמצעים יש משמעויות כגון: תיקי ההוצאה לפועל כנגדו יאוחדו לתיק איחוד; יינתן כנגדו צו עיכוב יציאה מן הארץ; חשבון הבנק של החייב יוגבל כמוגבל מיוחד בבנק ישראל; על החייב יאסר לעשות שימוש בכרטיסי אשראי; רישום במרשם החייבים המוגבלים;</p>
              <p class="lead" dir="rtl" align="right">התנאים להכרזה על חייב כמוגבל באמצעים הינם: </p>
              <p class="lead" dir="rtl" align="right">1.	החייב הגיש בקשה למתן צו תשלומים.</p>
              <p class="lead" dir="rtl" align="right">2.	החייב אינו יכול לשלם את חובו, בתקופות ארוכות מהתקופות המפורטות להלן:
              -	סכום החוב עד 20,000 ש"ח – תוך שנתיים.
              -	סכום החוב בין 100,000-20,000 ש"ח – תוך 3 שנים.
              -	חוב עולה על 100,000 ש"ח – תוך 4 שנים.
              </p>
              <p class="lead" dir="rtl" align="right">הגבלות על חייב מוגבל באמצעים (כבר בשלב הביניים):</p>
              <p class="lead" dir="rtl" align="right">א. עיכוב יציאתו של החייב מן הארץ. ב הגבלת החייב כלקוח מוגבל מיוחד על פי חוק שיקים ללא כיסוי. . ג הגבלת החייב מלעשות שימוש בכרטיס אשראי.
          בקשה לתיק אחוד מוגבל באמצעים - שירות זה מאפשר מאפשר לחייב ולזוכה להגיש בקשה כי החייב יוכרז כמוגבל באמצעים. עם אישור הבקשה ייפתח תיק איחוד, תוטלנה ההגבלות קבועות בחוק והחייב יוכרז כמוגבל באמצעים.</p>

              <p class="lead" dir="rtl" align="right">מוגבל באמצעים – אופן הגשת בקשה:</p>
              <p class="lead" dir="rtl" align="right">•	טופס 222 - יש לסמן ב-X את קוד בקשה 116.</p>
              <p class="lead" dir="rtl" align="right">•	צילום תעודת זהות וספח.</p>
              <p class="lead" dir="rtl" align="right">•	קבלה על תשלום ראשון בגובה התשלום החודשי המוצע על ידו ולא פחות מ-150 ₪</p>
              <p class="lead" dir="rtl" align="right">•	שאלון וכתב ויתור על סודיות על צרופותיו</p>
              <p class="lead" dir="rtl" align="right">•	את הבקשה יש להגיש בשני עותקים.</p>
              <p class="lead" dir="rtl" align="right">•	חייב המיוצג על ידי עורך דין נדרש להעביר עותק מבקשתו לזוכה.</p>
              <p class="lead" dir="rtl" align="right">*הפטר לחייב מוגבל באמצעים</p>
              <p class="lead" dir="rtl" align="right">הוראת שעה – מיום 6.9.2015 ול-4 שנים, עד 5.9.2019.
               לא חל על: מזונות, משכנתא, קנס פלילי/מנהלי וחוב ממרמה.</p>
              <p class="lead" dir="rtl" align="right">תנאים: 1. חייב מוגבל באמצעים מעל 4 שנים ברצף 2. סכום החובות אינו עולה על 800,000₪ 3. תשלום סדיר של צו חיוב בתשלומים ב- 3 השנים האחרונות שקדמו להגשת הבקשה 4. אין הליך פעיל של פשיטת רגל 5. אין לחייב נכסים בעלי ערך הניתנים לעיקול מכירה או מימוש.</p>
              <p class="lead" dir="rtl" align="right">שלב 1: הגשת הבקשה בלשכת ההוצל"פ (ע"י החייב) שלב 2: פרסום ברשומות ושליחת הודעות לכל הנושים (ע"י הוצל"פ) שלב 3: תקופה של 90 יום להגשת ההתנגדות להפטר (ע"י הנושים) שלב 4: דיון בפני רשם ההוצל"פ (במעמד הצדדים) שלב 5: קבלת החלטה סופית על ידי הרשם על מתן הפטר\אי מתן הפטר. </p>




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
              <p class="lead"><a target="_blank" href="https://www.toledano.co.il/wp-content/uploads/2019/01/%D7%98%D7%95%D7%A4%D7%A1-7-%D7%91%D7%A7%D7%A9%D7%94-%D7%9C%D7%90%D7%99%D7%97%D7%95%D7%93-%D7%AA%D7%99%D7%A7%D7%99%D7%9D.pdf">טופס 7 – בקשת חייב לאיחוד תיקים</a></p>
              <p class="lead"><a target="_blank" href="https://www.toledano.co.il/wp-content/uploads/2019/01/%D7%98%D7%95%D7%A4%D7%A1-222-%D7%91%D7%A7%D7%A9%D7%94-%D7%9C%D7%94%D7%9B%D7%A8%D7%96%D7%94-%D7%A2%D7%9C-%D7%97%D7%99%D7%99%D7%91-%D7%9E%D7%95%D7%92%D7%91%D7%9C-%D7%91%D7%90%D7%9E%D7%A6%D7%A2%D7%99%D7%9D.pdf">טופס 222- צו תשלומים/ חייב מוגבל/ איחוד תיקים</a></p>
              <p class="lead"><a target="_blank" href="https://www.toledano.co.il/wp-content/uploads/2019/01/%D7%98%D7%95%D7%A4%D7%A1-233-%D7%91%D7%A7%D7%A9%D7%94-%D7%9C%D7%A6%D7%95-%D7%97%D7%99%D7%95%D7%91-%D7%91%D7%AA%D7%A9%D7%9C%D7%95%D7%9E%D7%99%D7%9D-.pdf">טופס 233 -בקשה לצו חיוב בתשלומים</a></p>
              <p class="lead"><a target="_blank" href="https://www.gov.il/BlobFolder/generalpage/forms-eca-new-format-1/he/Forms_form529.pdf">טופס 529 - שאלון וכתב ויתור על סודיות</a></p>

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
     data:'page1=4ab',
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
    data:'page1=4ab',
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
