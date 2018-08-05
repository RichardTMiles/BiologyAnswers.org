<!DOCTYPE html>
<html>
<?php
include_once SERVER_ROOT . APP_VIEW . 'Layout/Head.php';
$logged_in = $_SESSION['id'] ?? false;
?>
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
                        <li class="active"><a href="<?= SITE ?>Chapters">Chapters <span class="sr-only">(current)</span></a>
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
                <a href="<?= SITE ?>Privacy/">Privacy Policy</a> <b>Version</b> <?= SITE_VERSION ?>
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

<script>
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

                    $.load_backStretch('/Application/View/img/Carbon.png');
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
