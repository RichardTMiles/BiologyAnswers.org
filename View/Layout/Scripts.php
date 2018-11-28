
<script src="/node_modules/admin-lte/bower_components/jquery/dist/jquery.min.js"></script>
<script src="/node_modules/jquery-pjax/jquery.pjax.js"></script>
<script src="/node_modules/mustache/mustache.js"></script>
<script src="/vendor/richardtmiles/carbonphp/helpers/Carbon.js"></script>
<script src="/node_modules/jquery-form/src/jquery.form.js"></script>
<script src="/node_modules/admin-lte/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="/node_modules/admin-lte/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<script src="/node_modules/admin-lte/bower_components/fastclick/lib/fastclick.js"></script>
<script src="/node_modules/admin-lte/dist/js/adminlte.min.js"></script>
<script src="/vendor/richardtmiles/carbonphp/helpers/asynchronous.js"></script>

<script>
    const TEMPLATE = "/node_modules/admin-lte/", APP_VIEW = "/View/", COMPOSER = "/vendor/";

    const carbon = new CarbonPHP('#pjax-content', 'wss://rootprerogative.com:8888/', false);

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
    <link rel="stylesheet" type="text/css"
          href="/node_modules/admin-lte/bower_components/bootstrap/dist/css/bootstrap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" type="text/css" href="/node_modules/admin-lte/dist/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
        folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" type="text/css" href="/node_modules/admin-lte/dist/css/skins/_all-skins.min.css">
    <!-- DataTables.Bootstrap -->
    <link rel="stylesheet" type="text/css"
          href="/node_modules/admin-lte/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" type="text/css" href="/node_modules/admin-lte/plugins/iCheck/all.css">
    <!-- Color Picker -->
    <link rel="stylesheet" type="text/css"
          href="/node_modules/admin-lte/bower_components/bootstrap-colorpicker/dist/css/bootstrap-colorpicker.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" type="text/css"
          href="/node_modules/admin-lte/bower_components/Ionicons/css/ionicons.min.css">
    <!-- bootstrap slider -->
    <link rel="stylesheet" type="text/css" href="/node_modules/admin-lte/plugins/bootstrap-slider/slider.css">
    <!-- Back color -->
    <link rel="stylesheet" type="text/css" href="/node_modules/admin-lte/dist/css/skins/skin-green.css">
    <!-- Multiple input dynamic form -->
    <link rel="stylesheet" type="text/css"
          href="/node_modules/admin-lte/bower_components/select2/dist/css/select2.min.css">
    <!-- Check Ratio Box -->
    <link rel="stylesheet" type="text/css" href="/node_modules/admin-lte/plugins/iCheck/flat/blue.css">
    <!-- Morris Chart -->
    <link rel="stylesheet" type="text/css" href="/node_modules/admin-lte/bower_components/morris.js/morris.css">
    <!-- ajax refresh circle spinner -->
    <link rel="stylesheet" type="text/css" href="/node_modules/admin-lte/plugins/pace/pace.css">
    <!-- Jquery -->
    <link rel="stylesheet" type="text/css"
          href="/node_modules/admin-lte/bower_components/jvectormap/jquery-jvectormap.css">
    <!-- datepicker -->
    <link rel="stylesheet" type="text/css"
          href="/node_modules/admin-lte/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.css">
    <!-- date-range-picker -->
    <link rel="stylesheet" type="text/css"
          href="/node_modules/admin-lte/bower_components/bootstrap-daterangepicker/daterangepicker.css">

    <link rel="stylesheet" type="text/css" href="/node_modules/admin-lte/plugins/timepicker/bootstrap-timepicker.css">
    <!-- Wysihtml -->
    <link rel="stylesheet" type="text/css"
          href="/node_modules/admin-lte/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" type="text/css"
          href="/node_modules/admin-lte/bower_components/font-awesome/css/font-awesome.min.css">
    <!-- Full Calander -->
    <link rel="stylesheet" type="text/css"
          href="/node_modules/admin-lte/bower_components/fullcalendar/dist/fullcalendar.min.css">
</noscript>