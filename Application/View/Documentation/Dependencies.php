<article>
    <!-- Content Header (Page header) -->
    <header class="content-header container-fluid">
        <div class="row">
            <div class="col-lg-8">
                <h1 class="content-max-width">Dependencies &amp; Plugins</h1>
            </div>
        </div>
    </header>

    <!-- Main content -->
    <div class="content container-fluid">
        <div class="row">
            <div class="col-lg-8">
                <section class="content-max-width">
                    <section id="dependencies">
                        <h2 class="page-header first"><a href="#dependencies">Dependencies</a></h2>
                        <p><b>CarbonPHP can be configured to do nothing</b> so Javascript components and classes are not
                            technically required. Carbon does comes with <a href="http://jquery.com/" target="_blank">jQuery v3.2.1</a>. The <b>View class acts as our interpreter for the Pjax + Ajax content refresh.</b>
                            Our Javascript implementation of Websockets (sockets) require JSON encoded strings to be returned from
                            the server. If JSON data is received then it is passed to the Mustache JS library otherwise it is
                            printed to the server. Composer will automatically download these libraries, so you don't have to!</p>

                        <div class="callout callout-danger">CarbonPHP only true dependency is PHP 7+ and Apache</div>
                        <div class="callout callout-info">We use `fxp/composer-asset-plugin` to download from the bower
                            repository. This is installed automatically wit our shell script! Otherwise you can add it with <br>
                        <?=highlight('composer global require "fxp/composer-asset-plugin:~1.3"')?></div>


                        <ul class="bring-up">
                            <li><a href="https://jquery-form.github.io/form/">jquery-form</a></li>
                            <li><a href="https://pjax.herokuapp.com">jquery-pjax</a></li>
                            <li><a href="http://mustache.github.io">mustache.js</a></li>
                        </ul>
                    </section>

                    <section id="plugins">
                        <h2 class="page-header"><a href="#plugins">Recommended Plugins</a></h2>
                        <div class="callout callout-info"><a href="Installation">Installing using our script </a>will install and setup the following plugins</div>

                        <p><a href="AdminLTE.php">AdminLTE</a>  depends on <a href="http://getbootstrap.com" target="_blank">Bootstrap 3</a> and
                            <a href="http://jquery.com/" target="_blank">jQuery 1.11+</a> and comes includes the following
                            plugins. For documentation, updates or license
                            information, please visit
                            the provided links.</p>

                        <div class="row">
                            <div class="col-sm-3">
                                <ul class="list-unstyled">
                                    <li><h4>Charts</h4></li>
                                    <li><a href="http://www.chartjs.org/" target="_blank">ChartJS</a></li>
                                    <li><a href="http://www.flotcharts.org/" target="_blank">Flot</a></li>
                                    <li><a href="http://morrisjs.github.io/morris.js/" target="_blank">Morris.js</a></li>
                                    <li><a href="http://omnipotent.net/jquery.sparkline/" target="_blank">Sparkline</a></li>
                                </ul>
                            </div><!-- /.col -->
                            <div class="col-sm-3">
                                <ul class="list-unstyled">
                                    <li><h4>Form Elements</h4></li>
                                    <li><a href="https://github.com/seiyria/bootstrap-slider/">Bootstrap Slider</a></li>
                                    <li><a href="http://ionden.com/a/plugins/ion.rangeSlider/en.html" target="_blank">Ion
                                            Slider</a>
                                    </li>
                                    <li><a href="http://bootstrap-datepicker.readthedocs.org/" target="_blank">Date
                                            Picker</a></li>
                                    <li><a href="http://www.daterangepicker.com/" target="_blank">Date Range Picker</a>
                                    </li>
                                    <li><a href="http://mjolnic.com/bootstrap-colorpicker/" target="_blank">Color
                                            Picker</a></li>
                                    <li><a href="https://github.com/jdewit/bootstrap-timepicker/" target="_blank">Time
                                            Picker</a></li>
                                    <li><a href="http://fronteed.com/iCheck/" target="_blank">iCheck</a></li>
                                    <li><a href="https://github.com/RobinHerbots/jquery.inputmask/" target="_blank">Input
                                            Mask</a></li>
                                </ul>
                            </div><!-- /.col -->
                            <div class="col-sm-3">
                                <ul class="list-unstyled">
                                    <li><h4>Editors</h4></li>
                                    <li><a href="https://github.com/bootstrap-wysiwyg/bootstrap3-wysiwyg/"
                                           target="_blank">Bootstrap
                                            WYSIHTML5</a></li>
                                    <li><a href="http://ckeditor.com/" target="_blank">CK Editor</a></li>
                                </ul>
                            </div><!-- /. col -->
                            <div class="col-sm-3">
                                <ul class="list-unstyled">
                                    <li><h4>Other</h4></li>
                                    <li><a href="https://datatables.net/examples/styling/bootstrap.html"
                                           target="_blank">DataTables</a>
                                    </li>
                                    <li><a href="http://fullcalendar.io/" target="_blank">Full Calendar</a></li>
                                    <li><a href="http://jqueryui.com/" target="_blank">jQuery UI</a></li>
                                    <li><a href="http://jquery-backstretch.com" target="_blank">Backstretch</a></li>
                                    <li><a href="http://anthonyterrien.com/knob/" target="_blank">jQuery Knob</a></li>
                                    <li><a href="http://jvectormap.com/" target="_blank">jVector Map</a></li>
                                    <li><a href="http://rocha.la/jQuery-slimScroll/" target="_blank">Slim Scroll</a>
                                    </li>
                                    <li><a href="http://github.hubspot.com/pace/docs/welcome/" target="_blank">Pace</a>
                                    </li>
                                </ul>
                            </div><!-- /.col -->
                        </div><!-- /.row -->
                    </section>
                </section>
            </div>

        </div>
        <!-- /.content -->
</article>