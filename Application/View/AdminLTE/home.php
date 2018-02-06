<!-- Content Header (Page header) -->
<div class="content-header col-lg-10">
    <br>
    <br>
    <h1>
        C6 & CarbonPHP Documentation
        <small>Version Dev-Master</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Documentation</li>
    </ol>
</div>

<!-- Main content -->
<div class="content body">
    <p class="lead">
        This documentation is for CarbonPHP & C6 (Carbon-6), a <b>PHP 7.1+</b> backend application framework.
        If you are looking for AdminLTE documentation, AKA this user interface and layout, <a
                href="https://adminlte.io/docs">click
            here</a>.
    </p>

    <section id="introduction">
        <h2 class="page-header"><a href="#introduction">Introduction</a></h2>
        <p class="lead">
            <b>CarbonPHP</b> is a open source library for <u>quickly creating web applications.</u>
            We feature PSR-4 Accolading, Larval style URL mapping, Zend style file structure, PHP PDO Databases,
            and (with the Carbon.js file) real-time communication using Named Pipes & Sockets. We also provide a
            beautiful feature to create <a href="Singleton">seemingly-stateless PHP class objects</a>. PJAX, a javascript library
            for inner content refreshing, is supported in the configuration however you must manually include
            their JS. This is only the case if you choose to use CarbonPHP independently of C6. CarbonPHP has
            many other features.
            <br><br>

            <b>C6 (Carbon-6)</b> is a production ready web-app that fully incorporates
            <b>CarbonPHP</b>, <b>AdminLTE</b>, <b>PJAX</b>, and <b>jQuery</b>. In fact,
            this website is C6. If you create a new project using composer you will be greeted with this website!
            C6 allows you to <u>exclusively develop in PHP and HTML.</u> We also support and recommend <b>Google Cloud
                App Engine</b>
            to store and serve your next application.
        </p>
    </section><!-- /#introduction -->


    <!-- ============================================================= -->

    <section id="download">
        <h2 class="page-header"><a href="#download">Download</a></h2>
        <p class="lead">
            C6 includes all the bells and whistles, but if your hardcore (or something..) you can use CarbonPHP without
            other libraries.
        </p>
        <div class="row">
            <div class="col-sm-6">
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">Ready (C6)</h3>
                        <span class="label label-primary pull-right"><i class="fa fa-html5"></i></span>
                    </div><!-- /.box-header -->
                    <div class="box-body">
                        <p>This is recommended for new projects and new members of the CarbonPHP crew. <b>So choose this
                                one...</b></p>
                        <a href="https://adminlte.io/download/AdminLTE-dist" class="btn btn-primary"><i
                                    class="fa fa-download"></i> Download</a>
                    </div><!-- /.box-body -->
                </div><!-- /.box -->
            </div><!-- /.col -->
            <div class="col-sm-6">
                <div class="box box-danger">
                    <div class="box-header with-border">
                        <h3 class="box-title">Raw (CarbonPHP)</h3>
                        <span class="label label-danger pull-right"><i class="fa fa-database"></i></span>
                    </div><!-- /.box-header -->
                    <div class="box-body">
                        <p>But you do you.. This option installs CarbonPHP on an existing project <b>using Composer.</b>
                        </p>
                        <a href="https://adminlte.io/download/AdminLTE" class="btn btn-danger"><i class="fa fa-download"></i> Download</a>
                    </div><!-- /.box-body -->
                </div><!-- /.box -->
            </div><!-- /.col -->
        </div><!-- /.row -->
    </section>
        <pre class="hierarchy bring-up"><code class="language-bash" data-lang="bash">File Hierarchy of C6

      C6/
      ├── Application/
      │   ├── Controller/
      │   │     └──       Validate user input (type checks)
      │   ├── Model/
      │   │     └──       Validate against database + other database operations
      │   ├── Tables/
      │   │     └──       Every table in you database should implement iEntity
      │   ├── View/
      │   │     └──       HTML goes here (mostly likely a php file)
      │   ├── Route.php
      ├── config/
      │   ├── Config.php
      │   │     └──       CarbonPHP's configuration file
      │   └── setting.yml
      │         └──       Google App Engine Support (ignore if you do not host with google)
      │
      └── Data/
          ├── Indexes/
          │     └──       For lists, like state in the US..
          ├── Sessions/
          │     └──       You can choose where to store sessions in Config.php
          ├── Temp/
          ├── Uploads/
          └── Vendors/    Libraries like CarbonPHP will be stored here by Composer
</code></pre>
    </section>


    <!-- ============================================================= -->
    <br>
    <section id="dependencies">
        <h2 class="page-header"><a href="#dependencies">Dependencies</a></h2>
        <p class="lead">CarbonPHP and C6 must be downloaded with Composer.<br>C6 is
            compiled with the following libraries while CarbonPHP is not.</p>
        <ul class="bring-up">
            <li><a href="#" target="_blank">jQuery 3.2.1</a></li>
            <li><a href="#" target="_blank">Mustache</a></li>
            <li><a href="#" target="_blank">AdminLTE</a></li>
            <li><a href="#" target="_blank">LoadJS</a></li>
            <li><a href="#" target="_blank">Facebook SDK (login support)</a></li>
            <li><a href="#" target="_blank">Google SDK (login & Cloud support)</a></li>
        </ul>
    </section>


    <!-- ============================================================= -->
    <br>
    <section id="advice">
        <h2 class="page-header"><a href="#advice">A Word of Advice</a></h2>
        <p class="lead">
            Before you start your new awesome application, here are few tips on how to familiarize yourself with C6:
        </p>

        <ul>
            <li><b>AdminLTE is our preferred UI based on <a href="http://getbootstrap.com/" target="_blank">Bootstrap
                        3</a>.</b> If you
                are unfamiliar with Bootstrap, visit their website and read through the documentation. All of Bootstrap
                components have been modified to fit the style of AdminLTE and provide a consistent look throughout the
                template. This way, we guarantee you will get the best of AdminLTE. You can view the full AdminLTE
                documentation
                here.
            </li>
            <li><b>Go through the pages that are bundled with the C6.</b> Most of the pages contain
                quick tips on how to create or use a component which can be really helpful when you need to create
                something on the fly.
            </li>
            <li><b>Documentation.</b> We are trying our best to make your experience with C6 smooth. One way to
                achieve that is to provide documentation and support. If you think that something is missing from the
                documentation, please do not hesitate to create an issue to tell us about it.
            </li>
            <li><b>Start with <a href="#" target="_blank">C6</a>.</b> If you intend to use CarbonPHP on an
                existing project, download and play with C6 to familiarise yourself first.
            </li>
            <li><b>Hosted on <a href="https://github.com/richardtmiles/c6/" target="_blank">GitHub</a>.</b> Visit
                our GitHub repository to view issues, make requests, or contribute to the project.
            </li>
        </ul>
        <p>
            <b>Note:</b> Classes are (slowly) being commented according to the PSR standard.
        </p>
    </section>


    <!-- ============================================================= -->
    <br>
    <section id="layout">
        <h2 class="page-header"><a href="#layout">The Basic Flow</a></h2>
        <p class="lead">Click each list item for an in-depth overview. </p>
        <ul>
            <li>Index <code>Carbon\Carbon::Application($options)();</code> The first parenthsis configures our session
                and constants while the second starts the applications routing file.
            </li>
            <li>Route <code>startApplication($uri);</code> Starts the route file from line one.</li>
            <li>Request <code>$this->post('username')->alnum();</code> Extend the Request class for easy data
                validation.
            </li>
            <li>View <code>View::contents($file);</code> Contains the page header and content.</li>
        </ul>
        <br>
        <div class="callout callout-info lead">
            <h4>Tip!</h4>
            <p><a href="../starter.html"><code>startApplication()</code></a> will change the url in the browser
                if PJAX is included.</p>
            <p></p>
        </div>
    </section>
    <br><br>
    <section>
        <h2><a href="#layout">C6 loads .CSS and .JS files in an ordered asynchronous manner</a></h2>
        <p class="lead">Carbon.js requires the libraries Jquery, PJAX, and Mustache be loaded before procesing.
            <small><a>See loadJs()</a></small>
        <p>Javascript functions present in you content can no longer rely on document-ready if they dependent on
            remotefiles.
            Solve this issue by wrapping Javascript and jQuery functions in a one time event listener.
            The following code is placed in the head of C6 applications and is recommendedd for CarbonPHP users. </p>
        <pre class="prettyprint">
                <code>
                    function Carbon(cb) {
                        document.addEventListener("Carbon", function fn(event) {
                            document.removeEventListener("Carbon", fn);
                            cb(event);
                        });
                    }
                </code>
            </pre>
</div>

<div class="col-lg-12">
    <div class="callout callout-info">
        <h4>After adding the code above to our Head...</h4>
        <p>Javascript functions should be wrapped a carbon callback</p>
        <pre class="prettyprint">Carbon(()=> { 'Your code here' });</pre>
    </div>
</div>
</div>


<!-- ============================================================= -->

<section id="adminlte-options">
    <h2 class="page-header"><a href="#adminlte-options">CarbonPHP Options</a></h2>
    <p class="lead">Modifying the options of AdminLTE's app.js can be done using one of the following ways.</p>
    <pre class="prettyprint">
            <?= highlight(SERVER_ROOT . COMPOSER . 'richardtmiles/carbonphp/Extras/exOptions.php') ?>
            </pre>
</section>

</section>
</div>
<!-- /.content -->
