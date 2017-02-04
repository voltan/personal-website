<!DOCTYPE HTML>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <title>{dev} حسین عزیزآبادی فراهانی - Hossein Azizabadi Farahani</title>

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <link href="./css/bootstrap.min.css" media="screen" rel="stylesheet" type="text/css">
    <link href="./css/font-awesome.min.css" media="screen" rel="stylesheet" type="text/css">
    <link href="./css/locale.css" media="screen" rel="stylesheet" type="text/css">
    <link href="./css/style.css" media="screen" rel="stylesheet" type="text/css">
</head>
<body id="pi-system" class="pi-locale-fa">
<div class="container clearfix">
    <header class="pi-header clearfix page-header">
        <div class="col-md-3 col-xs-4">
            <img src="./image/avatar.png" alt="حسین عزیزآبادی فراهانی - Hossein Azizabadi Farahani" class="img-responsive img-circle">
        </div>
        <div class="col-md-9 col-xs-8">
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
            <li class="list-group-item col-md-6 col-xs-12">زبان برنامه نویسی PHP</li>
            <li class="list-group-item col-md-6 col-xs-12">زبان برنامه نویسی Java</li>
            <li class="list-group-item col-md-6 col-xs-12">فریم ورک Zend نسخه ۲</li>
            <li class="list-group-item col-md-6 col-xs-12">توسعه نرم افزار های اندروید</li>
            <li class="list-group-item col-md-6 col-xs-12">پایگاه داده های MySql و Sqlite</li>
            <li class="list-group-item col-md-6 col-xs-12">Html 5 / Css 3 / Bootstrap / jQuery / AngolarJs</li>
            <li class="list-group-item col-md-6 col-xs-12">کنترل نسخه Git و SVN</li>
            <li class="list-group-item col-md-6 col-xs-12">لینوکس : سنت او اس - فدورا</li>
            <li class="list-group-item col-md-6 col-xs-12">پیکربندی سرور وب لینوکس</li>
            <li class="list-group-item col-md-6 col-xs-12">پیکربندی کنترل پنل داریکت سی پنل و داریکت ادمین</li>
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
        <div class="pi-footer-copyright">۱۳۸۵ تا ۱۳۹۵</div>
    </footer>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
    ga('create', 'UA-91384236-1', 'auto');
    ga('send', 'pageview');
</script>
<script>
    (function() {

        var win = $(window);

        win.resize(function() {

            var win_w = win.width(),
                win_h = win.height(),
                $bg    = $("#bg");

            // Load narrowest background image based on
            // viewport width, but never load anything narrower
            // that what's already loaded if anything.
            var available = [
                1024, 1280, 1366,
                1400, 1680, 1920,
                2560, 3840, 4860
            ];

            var current = $bg.attr('src').match(/([0-9]+)/) ? RegExp.$1 : null;

            if (!current || ((current < win_w) && (current < available[available.length - 1]))) {

                var chosen = available[available.length - 1];

                for (var i=0; i<available.length; i++) {
                    if (available[i] >= win_w) {
                        chosen = available[i];
                        break;
                    }
                }

                // Set the new image
                $bg.attr('src', '/img/bg/' + chosen + '.jpg');

                // for testing...
                // console.log('Chosen background: ' + chosen);

            }

            // Determine whether width or height should be 100%
            if ((win_w / win_h) < ($bg.width() / $bg.height())) {
                $bg.css({height: '100%', width: 'auto'});
            } else {
                $bg.css({width: '100%', height: 'auto'});
            }

        }).resize();

    })(jQuery);
</script>
</body>
</html>