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
<body class="hold-transition skin-green layout-top-nav" style="height: auto; min-height: 1086px; background-color: transparent; ">
<div class="wrapper" style="background-color: rgba(0, 0, 0, 0.7)">

    <header class="main-header">
        <nav class="navbar navbar-static-top">
            <div class="container">
                <div class="navbar-header">
                    <a href="/" class="navbar-brand" id="mytitle"><b>Biology</b>Answers.org</a>
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                            data-target="#navbar-collapse">
                        <i class="fa fa-bars"></i>
                    </button>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse pull-left" id="navbar-collapse">
                    <ul class="nav navbar-nav">
                        <li class="active">
                            <a href="https://github.com/RichardTMiles/BiologyAnswers.org" target="_blank">Source Code<span class="sr-only">(current)</span></a>
                        </li>
                    </ul>
                    <form class="navbar-form navbar-left" onsubmit="return false;" role="search">
                        <div class="form-group">
                            <input type="text"
                                   class="form-control"
                                   id="navbar-search-input" placeholder="Search" name="Search">
                        </div>
                    </form>


                </div>
                <!-- /.navbar-collapse -->
                <!-- Navbar Right Menu -->
                <div class="navbar-custom-menu">
                    <ul class="nav navbar-nav">
                        <!-- Star Me-->
                        <li>
                            <a href="/Chapters">Chapters <span class="sr-only">(current)</span></a>
                        </li>
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
            // pjax error on search every letter, so created a buffer to wait.
            //setup before functions
            let typingTimer;                //timer identifier
            let doneTypingInterval = 500;  //time in ms (half second)
            const $search = $('#navbar-search-input');

            //on keyup, start the countdown
            $search.keyup(function(){
                clearTimeout(typingTimer);
                if ($search.val()) {
                    typingTimer = setTimeout(doneTyping, doneTypingInterval);
                }
            });

            //user is "finished typing," do something
            function doneTyping () {
                carbon.start('/Search/' + $search.val())
            }
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
<script src="/Application/View/Layout/javascript.js"></script>
<script>
    const TEMPLATE = "/node_modules/admin-lte/", APP_VIEW = "/Application/View/", COMPOSER = "/vendor/";

    // const carbon = new CarbonPHP('#pjax-content', 'wss://rootprerogative.com:8888/', false);

    const carbon = new CarbonPHP('#pjax-content');

    carbon.event("Carbon");

    $(document).on('pjax:complete', function () {
        // TODO - remove alerts here?

        let boxes = $(".box");

        if (boxes.length) {
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

    $.load_backStretch(APP_VIEW + 'Img/Carbon-green.png');

    $('.sidebar-menu').tree();


    //carbon.js(APP_VIEW + 'AdminLTE/Demo/demo.js');
    //-- AJAX Pace -->
    carbon.js('/node_modules/admin-lte/bower_components/PACE/pace.js', () => $(document).ajaxStart(() => Pace.restart()));


    <!-- Global site tag (gtag.js) - Google Analytics -->
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }

    gtag('js', new Date());

    gtag('config', 'UA-100885582-1');
</script>
<noscript id="deferred-styles">
    <!-- REQUIRED STYLE SHEETS -->
    <!-- Bootstrap 3.3.6 -->
    <link rel="stylesheet" type="text/css" href="/Application/View/Layout/style.css">
</noscript>
</body>
</html>
