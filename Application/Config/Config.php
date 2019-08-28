<?php
/**
 * Created by IntelliJ IDEA.
 * User: richardmiles
 * Date: 10/29/17
 * Time: 11:14 AM
 */

// Template
const COMPOSER = 'Data' . DS . 'Vendors' . DS;
const TEMPLATE = COMPOSER . 'almasaeed2010' . DS . 'adminlte' . DS;

return [
    'DATABASE' => [   // 104.155.134.136

        'DB_HOST' => APP_LOCAL ? '127.0.0.1' : '35.224.229.250',      // Host and Database get put here # APP_LOCAL ? '127.0.0.1' :

        'DB_NAME' => 'BiologyAnswers',

        'DB_USER' => 'root',                // User

        'DB_PASS' =>  APP_LOCAL ? 'password' : 'goldteamrules',      // Password goldteamrules # APP_LOCAL ? 'password' :

        'DB_BUILD' => SERVER_ROOT . '/config/buildDatabase.php',

        'REBUILD' => false

    ],


    'VIEW' => [
        'VIEW' => 'Application/View/',  // This is where the MVC() function will map the HTML.PHP and HTML.HBS . See Carbonphp.com/mvc

        'WRAPPER' => 'biology/wrapper.php',     // View::content() will produce this
    ],

    'SITE' => [

        'CACHE_CONTROL' => [
            'ico|pdf|flv' => 'Cache-Control: max-age=29030400, public',
            'jpg|jpeg|png|gif|swf|xml|txt|css|js|woff2|tff' => 'Cache-Control: max-age=604800, public',
            'html|htm|php|hbs' => 'Cache-Control: max-age=0, private, public',
        ],

        // If youre trying to run this on your server, you'll need to change the domain directly below

        'URL' => 'biologyanswers.org',    // Evaluated and if not the accurate redirect. Local php server okay. Remove for any domain

        'ROOT' => SERVER_ROOT,     // This was defined in our ../index.php

        'ALLOWED_EXTENSIONS' => 'png|jpg|gif|jpeg|bmp|icon|js|css|woff|woff2|map|hbs|eotv',     // File ending in these extentions will be served

        'CONFIG' => __FILE__,      // Send to sockets

        'TIMEZONE' => 'America/Phoenix',    //  Current timezone TODO - look up php

        'TITLE' => 'Biology Answers • Prentice Hall',      // Website title

        'VERSION' => '5.2.0',       // Add link to semantic versioning

        'SEND_EMAIL' => 'no-reply@carbonphp.com',     // I send emails to validate accounts

        'REPLY_EMAIL' => 'support@carbonphp.com',

        'BOOTSTRAP' => 'Application/BiologyAnswers.php',     // This file is executed when the startApplication() function is called

        'HTTP' => true   // I assume that HTTP is okay by default
    ],

    'SOCKET' => [
        'PORT' => 8888,
        'DEV' => false,
        'SSL' => [
            'KEY' => '',
            'CERT' => ''
        ]
    ],
    'SESSION' => [
        'REMOTE' => true,             // Store the session in the SQL database

        'SERIALIZE' => ['user'],           // These global variables will be stored between session

        'CALLBACK' => function () {         // optional variable $reset which would be true if a url is passed to startApplication()

        },
    ],

    // ERRORS on point
    'ERROR' => [
        'LEVEL' => E_ALL | E_STRICT,  // php ini level

        'STORE' => APP_LOCAL,      // Database if specified and / or File 'LOCATION' in your system

        'SHOW' => !APP_LOCAL,       // Show errors on browser

        'FULL' => APP_LOCAL        // Generate custom stacktrace will high detail - DO NOT set to TRUE in PRODUCTION
    ],

    'MINIFY' => [
        'CSS' => [
            'OUT' => APP_ROOT . 'Application/View/Layout/style.css',
            APP_ROOT .'node_modules/admin-lte/bower_components/bootstrap/dist/css/bootstrap.min.css',
            APP_ROOT .'node_modules/admin-lte/dist/css/AdminLTE.min.css',
            APP_ROOT .'node_modules/admin-lte/dist/css/skins/_all-skins.min.css',
            APP_ROOT .'node_modules/admin-lte/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css',
            APP_ROOT .'node_modules/admin-lte/plugins/iCheck/all.css',
            APP_ROOT .'node_modules/admin-lte/bower_components/bootstrap-colorpicker/dist/css/bootstrap-colorpicker.min.css',
            APP_ROOT .'node_modules/admin-lte/bower_components/Ionicons/css/ionicons.min.css',
            APP_ROOT .'node_modules/admin-lte/plugins/bootstrap-slider/slider.css',
            APP_ROOT .'node_modules/admin-lte/dist/css/skins/skin-green.css',
            APP_ROOT .'node_modules/admin-lte/bower_components/select2/dist/css/select2.min.css',
            APP_ROOT .'node_modules/admin-lte/plugins/iCheck/flat/blue.css',
            APP_ROOT .'node_modules/admin-lte/bower_components/morris.js/morris.css',
            APP_ROOT .'node_modules/admin-lte/plugins/pace/pace.css',
            APP_ROOT .'node_modules/admin-lte/bower_components/jvectormap/jquery-jvectormap.css',
            APP_ROOT .'node_modules/admin-lte/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.css',
            APP_ROOT .'node_modules/admin-lte/bower_components/bootstrap-daterangepicker/daterangepicker.css',
            APP_ROOT .'node_modules/admin-lte/plugins/timepicker/bootstrap-timepicker.css',
            APP_ROOT .'node_modules/admin-lte/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css',
            APP_ROOT .'node_modules/admin-lte/bower_components/font-awesome/css/font-awesome.min.css',
            APP_ROOT .'node_modules/admin-lte/bower_components/fullcalendar/dist/fullcalendar.min.css'
        ],
        'JS' => [
            'OUT' => APP_ROOT . 'Application/View/Layout/javascript.js',
            APP_ROOT .'node_modules/admin-lte/bower_components/jquery/dist/jquery.min.js',
            APP_ROOT .'node_modules/jquery-pjax/jquery.pjax.js',
            CARBON_ROOT .'view/mustache/Layout/mustache.js',
            CARBON_ROOT .'helpers/Carbon.js',
            CARBON_ROOT .'helpers/asynchronous.js',
            APP_ROOT .'node_modules/jquery-form/src/jquery.form.js',
            APP_ROOT .'node_modules/admin-lte/bower_components/bootstrap/dist/js/bootstrap.min.js',
            APP_ROOT .'node_modules/admin-lte/bower_components/jquery-slimscroll/jquery.slimscroll.min.js',
            APP_ROOT .'node_modules/admin-lte/bower_components/fastclick/lib/fastclick.js',
            APP_ROOT .'node_modules/admin-lte/dist/js/adminlte.js',
        ],
    ],


];


/**
 * This is the full list of options you can send to CarbonPHP()
 * I omit the ones I don't use.
 *
 * @type $PHP = [
 *       'AUTOLOAD' => []                       // Provide PSR-4 namespace roots
 *       'SITE' => [
 *           'URL' => string '',                                  // Server Url name you do not need to chane in remote development
 *           'ROOT' => string '__FILE__',                         // This was defined in our ../index.php
 *           'ALLOWED_EXTENSIONS' => string 'jpg|png',            // File ending in these extensions will be served
 *           'CONFIG' => string __FILE__,                         // Send to sockets
 *           'TIMEZONE' => string 'America/Chicago',              // Current timezone TODO - look up php
 *           'TITLE' => string 'Carbon 6',                        // Website title
 *           'VERSION' => string /phpversion(),                   // Add link to semantic versioning
 *           'SEND_EMAIL' => string '',                           // I send emails to validate accounts
 *           'REPLY_EMAIL' => string '',
 *           'BOOTSTRAP' => string '',                            // This file is executed when the startApplication() function is called
 *           'HTTP' => bool true
 *       ],
 *       'DATABASE' => [
 *           'DB_DSN'  => string '',                        // Host and Database get put here
 *           'DB_USER' => string '',
 *           'DB_PASS' => string '',
 *           'DB_BUILD'=> string '',                        // Absolute file path to your database set up file
 *           'REBUILD' => bool false
 *       ],
 *       'SESSION' => [
 *           'REMOTE' => bool true,             // Store the session in the SQL database
 *           'SERIALIZE' => [],                 // These global variables will be stored between session
 *           'CALLBACK' => callable,            // a callable that is executed when StartAppliction() runs
 *       'SOCKET' => [
 *           'WEBSOCKETD' => bool false,        // Todo - remove websockets
 *           'PORT' => int 8888,
 *           'DEV' => bool false,
 *           'SSL' => [
 *               'KEY' => string '',
 *               'CERT' => string ''
 *           ]
 *       ],
 *       'ERROR' => [
 *           'LEVEL' => (int) E_ALL | E_STRICT,
 *           'STORE' => (bool) true,                // Database if specified and / or File 'LOCATION' in your system
 *           'SHOW' => (bool) true,                 // Show errors on browser
 *           'FULL' => (bool) true                  // Generate custom stacktrace will high detail - DO NOT set to TRUE in PRODUCTION
 *       ],
 *       'VIEW' => [
 *           'VIEW' => string '/',          // This is where the MVC() function will map the HTML.PHP and HTML.HBS . See Carbonphp.com/mvc
 *          'WRAPPER' => string '',         // View::content() will produce this
 *      ],
 * ]
 *
 *
 *
 *
 */
