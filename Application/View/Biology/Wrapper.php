<?php
$logged_in = $_SESSION['id'] ?? false;
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?= SITE_TITLE ?></title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

    <!-- PJAX Content Control -->
    <meta http-equiv="x-pjax-version" content="<?= $_SESSION['X_PJAX_Version'] ?>">
    <!-- Google -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-100885582-1"></script>

    <script>
        /*! loadJS: load a JS file asynchronously. [c]2014 @scottjehl, Filament Group, Inc. (Based on http://goo.gl/REQGQ by Paul Irish). Licensed MIT */
        (function (w) {
            let loadJS;
            loadJS = function (src, cb) {
                "use strict";
                let ref = w.document.getElementsByTagName("script")[0];
                let script = w.document.createElement("script");
                script.src = src;
                script.async = true;
                ref.parentNode.insertBefore(script, ref);
                if (cb && typeof(cb) === "function")
                    script.onload = cb;

                return script;
            }; // commonjs
            if (typeof module !== "undefined") module.exports = loadJS;
            else w.loadJS = loadJS;
        }(typeof global !== "undefined" ? global : this));// Hierarchical PJAX Request

        <?php if (defined('FACEBOOK_APP_ID') && !empty(FACEBOOK_APP_ID)): ?>
        // Facebook Analytics
        window.fbAsyncInit = function () {
            FB.init({
                appId: '<?=FACEBOOK_APP_ID?>',
                xfbml: true,
                version: 'v2.11'
            });
            FB.AppEvents.logPageView();
        };

        (function (d, s, id) {
            let js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) {
                return;
            }
            js = d.createElement(s);
            js.id = id;
            js.src = "https://connect.facebook.net/en_US/sdk.js";
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
        <?php endif; ?>

        // Document ready => jQuery => PJAX => CarbonPHP = loaded
        function OneTimeEvent(ev, cb){
            return document.addEventListener(ev, function fn(event) {
                document.removeEventListener(ev, fn);
                return cb(event);
            });
        }
        function Carbon(cb) {return OneTimeEvent("Carbon", cb)}
    </script>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style>
        .click a {
            display: block;
        }
    </style>
</head>

<!-- Full Width Column -->
<body class="hold-transition skin-green layout-top-nav">
<div class="wrapper" style="background-color: rgba(0, 0, 0, 0.7)">

    <header class="main-header">
        <nav class="navbar navbar-static-top">
            <div class="container">
                <div class="navbar-header">
                    <a href="<?= SITE ?>" class="navbar-brand" id="mytitle"><b>Biology</b>Answers.org</a>
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                            data-target="#navbar-collapse">
                        <i class="fa fa-bars"></i>
                    </button>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse pull-left" id="navbar-collapse">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="/Chapters">Chapters <span class="sr-only">(current)</span></a>
                        </li>
                    </ul>
                    <form class="navbar-form navbar-left" role="search">
                        <div class="form-group">
                            <input onkeyup="this.value.length && carbon.start('/Search/' + this.value)" type="text" class="form-control"
                                   id="navbar-search-input" placeholder="Search" name="Search">
                        </div>
                    </form>
                </div>
                <!-- /.navbar-collapse -->
                <!-- Navbar Right Menu -->
                <div class="navbar-custom-menu">
                    <ul class="nav navbar-nav">
                        <!-- Star Me-->
                        <li><a href="https://github.com/RichardTMiles/BiologyAnswers.org" target="_blank">Source Code<span class="sr-only">(current)</span></a></li>
                        <!-- /.github -->
                    </ul>
                </div>
                <!-- /.navbar-custom-menu -->
            </div>
            <!-- /.container-fluid -->
        </nav>
    </header>
    <script>
        Carbon(() => {

            let $menu = $('li');

            let activity = function () {
                $("li a").filter(function () {
                    $menu.removeClass('active');
                    return this.href === location.href.replace(/#.*/, "");
                }).parent().addClass("active");
            };

            activity();

            $menu.click(function () {
                $menu.removeClass('active');
                $(this).addClass('active');
            });

            $('#mytitle').click(function () {
                $menu.removeClass('active');
            });
        })
    </script>
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper" style="background: transparent">
        <!--  style="background: transparent"  Add this to use the backstretch fn-->
        <div id="alert"></div>
        <!-- content -->
        <div class="col-md-offset-1 col-md-10">
            <div id="pjax-content">
                <?= \CarbonPHP\View::$bufferedContent ?? '' ?>
            </div>
        </div>
        <!-- /.content -->

        <div class="clearfix"></div>
        <!-- /.container -->
    </div>
    <!-- /.content-wrapper -->
    <footer class="main-footer bg-black" style="border-top: 0">
        <div class="container">
            <div class="pull-right hidden-xs">
                <a href="/Privacy/">Privacy Policy</a> <b>Version</b> <?= SITE_VERSION ?>
            </div>
            <!--script type="text/javascript" src="https://cdn.ywxi.net/js/1.js" async></script-->
        </div>
        <!-- /.container -->
    </footer>
</div>
<noscript id="deferred-styles">
    <!-- REQUIRED STYLE SHEETS -->
    <!-- Bootstrap 3.3.6 -->
    <link rel="stylesheet" type="text/css" href="/node_modules/admin-lte/bower_components/bootstrap/dist/css/bootstrap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" type="text/css" href="/node_modules/admin-lte/dist/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
        folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" type="text/css" href="/node_modules/admin-lte/dist/css/skins/_all-skins.min.css">
    <!-- DataTables.Bootstrap -->
    <link rel="stylesheet" type="text/css" href="/node_modules/admin-lte/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" type="text/css" href="/node_modules/admin-lte/plugins/iCheck/all.css">
    <!-- Color Picker -->
    <link rel="stylesheet" type="text/css" href="/node_modules/bootstrap-colorpicker/dist/css/bootstrap-colorpicker.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" type="text/css" href="/node_modules/ionicons/dist/css/ionicons.min.css">
    <!-- bootstrap slider -->
    <link rel="stylesheet" type="text/css" href="/node_modules/bootstrap-slider/dist/css/bootstrap-slider.css">
    <!-- Back color -->
    <link rel="stylesheet" type="text/css" href="/node_modules/admin-lte/dist/css/skins/skin-green.css">
    <!-- Multiple input dynamic form -->
    <link rel="stylesheet" type="text/css" href="/node_modules/select2/dist/css/select2.min.css">
    <!-- Morris Chart -->
    <link rel="stylesheet" type="text/css" href="/node_modules/morris.js/morris.css">
    <!-- ajax refresh circle spinner -->
    <link rel="stylesheet" type="text/css" href="/node_modules/admin-lte/plugins/pace/pace.css">
    <!-- Jquery -->
    <link rel="stylesheet" type="text/css" href="/node_modules/jvectormap/jquery-jvectormap.css">
    <!-- datepicker -->
    <link rel="stylesheet" type="text/css" href="/node_modules/bootstrap-datepicker/dist/css/bootstrap-datepicker.css">
    <!-- date-range-picker -->
    <link rel="stylesheet" type="text/css" href="/node_modules/bootstrap-daterangepicker/daterangepicker.css">
    <link rel="stylesheet" type="text/css" href="/node_modules/admin-lte/plugins/timepicker/bootstrap-timepicker.css">
    <!-- Wysihtml -->
    <link rel="stylesheet" type="text/css" href="/node_modules/admin-lte/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" type="text/css" href="/node_modules/font-awesome/css/font-awesome.min.css">
    <!-- Full Calander -->
    <link rel="stylesheet" type="text/css" href="/node_modules/admin-lte/bower_components/fullcalendar/dist/fullcalendar.min.css">

</noscript>

<script src="/node_modules/jquery/dist/jquery.min.js"></script>
<script src="/node_modules/jquery-pjax/jquery.pjax.js"></script>
<script src="/node_modules/mustache/mustache.js"></script>
<script src="/vendor/richardtmiles/carbonphp/helpers/Carbon.js"></script>
<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>

<script>
    (adsbygoogle = window.adsbygoogle || []).push({
        google_ad_client: "ca-pub-7402031087678981",
        enable_page_level_ads: true
    });

    const TEMPLATE = '/node_modules/admin-lte/', APP_VIEW = '/Application/View/', COMPOSER = '/vendor/';

    const carbon = new CarbonPHP();

    carbon.invoke('#pjax-content'); // , 'ws://rootprerogative.com:8888/', false

    //-- Jquery Form -->
    carbon.js('/node_modules/jquery-form/src/jquery.form.js');

    //-- Bootstrap -->
    carbon.js('/node_modules/bootstrap/dist/js/bootstrap.min.js', () => {
    //-- Slim Scroll -->
    carbon.js('/node_modules/admin-lte/bower_components/jquery-slimscroll/jquery.slimscroll.min.js', () => {

        //-- Fastclick -->
        carbon.js('/node_modules/fastclick/lib/fastclick.js', () => {
            //-- Admin LTE -->
            carbon.js('/node_modules/admin-lte/dist/js/adminlte.min.js', () => {

                carbon.js('/vendor/richardtmiles/carbonphp/helpers/asynchronous.js', () => {
                    carbon.event("Carbon");

                    $(document).on('pjax:complete', function () {
                        let boxes = $(".box");

                            if (!boxes.exists()) {
                                return;
                            }

                            boxes.boxWidget({
                                animationSpeed: 500,
                                collapseTrigger: '[data-widget="collapse"]',
                                removeTrigger: '[data-widget="remove"]',
                                collapseIcon: 'fa-minus',
                                expandIcon: 'fa-plus',
                                removeIcon: 'fa-times'
                            });
                            $('#my-box-widget').boxRefresh('load');
                        });

                    $.load_backStretch('/Application/View/Img/Carbon.png');
                    $('.sidebar-menu').tree();
                });

                    //carbon.js(APP_VIEW + 'AdminLTE/Demo/demo.js');
                    //-- AJAX Pace -->
                    carbon.js('/node_modules/admin-lte/bower_components/PACE/pace.js', () => $(document).ajaxStart(() => Pace.restart()));

                })
            })
        })
    })


    <!-- Global site tag (gtag.js) - Google Analytics -->
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }

    gtag('js', new Date());

    gtag('config', 'UA-100885582-1');
</script>
</body>
</html>
