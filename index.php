<!DOCTYPE HTML>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <title>{dev} حسین عزیزآبادی فراهانی - Hossein Azizabadi Farahani</title>

    <link href="./css/bootstrap.min.css" media="screen" rel="stylesheet" type="text/css">
    <link href="./css/font-awesome.min.css" media="screen" rel="stylesheet" type="text/css">
    <link href="./css/locale.css" media="screen" rel="stylesheet" type="text/css">
    <link href="./css/style.css" media="screen" rel="stylesheet" type="text/css">

    <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
        ga('create', 'UA-91384236-1', 'auto');
        ga('send', 'pageview');
    </script>
</head>
<body id="pi-system" class="pi-locale-fa">
<div class="container clearfix">
    <header class="pi-header clearfix page-header">
        <div class="col-xs-3">
            <img src="./image/avatar.png" alt="حسین عزیزآبادی فراهانی - Hossein Azizabadi Farahani" class="img-responsive img-circle">
        </div>
        <div class="col-xs-9">
            <div class="pi-header-title clearfix">
                <h1>حسین عزیزآبادی فراهانی</h1>
                <h2>Hossein Azizabadi Farahani</h2>
            </div>
        </div>
    </header>
    <section class="pi-section">
        <h3>تحصیلات</h3>
        <ul class="list-group">
            <li class="list-group-item">کارشناسی مهندسی نساجی گرایش تکنولوژی دانشگاه آزاد واحد کاشان</li>
            <li class="list-group-item">کارشناسی ارشد مهندسی نساجی تکنولوژی دانشگاه آزاد واحد علوم و تحقیقات</li>
        </ul>
        <h3>تخصص</h3>
        <ul class="list-group">
            <li class="list-group-item col-xs-6">زبان برنامه نویسی PHP</li>
            <li class="list-group-item col-xs-6">زبان برنامه نویسی Java</li>
            <li class="list-group-item col-xs-6">فریم ورک Zend نسخه ۲</li>
            <li class="list-group-item col-xs-6">توسعه نرم افزار های اندروید</li>
            <li class="list-group-item col-xs-6">پایگاه داده های MySql و Sqlite</li>
            <li class="list-group-item col-xs-6">Html 5 / Css 3 / Bootstrap / jQuery / AngolarJs</li>
            <li class="list-group-item col-xs-6">کنترل نسخه Git و SVN</li>
            <li class="list-group-item col-xs-6">لینوکس : سنت او اس - فدورا</li>
            <li class="list-group-item col-xs-6">پیکربندی سرور وب لینوکس</li>
            <li class="list-group-item col-xs-6">پیکربندی کنترل پنل داریکت سی پنل و داریکت ادمین</li>
        </ul>
    </section>
    <footer class="pi-footer">
        <div class="pi-footer-body clearfix">
            <div class="col-xs-12">
                <div class="pi-footer-contact"> تماس از طریق <a href="mailto:hossein@azizabadi.ir">hossein[at]azizabadi[dot]ir</a></div>
            </div>
            <div class="col-xs-12">
                <div class="pi-footer-social">
                    <a href="https://www.github.com/voltan" target="_blank"><i class="fa fa-github"></i></a>
                    <a href="https://www.linkedin.com/in/azizabadi" target="_blank"><i class="fa fa-linkedin"></i></a>
                </div>
            </div>
        </div>
        <div class="pi-footer-copyright">۱۳۸۵ تا <?php
            $dateFormater = new IntlDateFormatter(
                'fa_IR',
                IntlDateFormatter::FULL,
                IntlDateFormatter::FULL,
                'Asia/Tehran',
                IntlDateFormatter::TRADITIONAL,
                'yyyy'
            );
            echo $dateFormater->format(time());  ?></div>
    </footer>
</div>
</body>
</html>
