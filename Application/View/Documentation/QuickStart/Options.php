<!-- Content Header (Page header) -->
<div class="content-header">
    <h1>
        Options
        <small>The index file</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="<?=SITE?>"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active"> Index & Options</li>
    </ol>
</div>

<!-- Main content -->
<div class="content body">

    <button type="button" class="btn btn-info" data-toggle="modal" data-target="#modal-info">
        If you do not install with our shell script, you'll need to define a server root!
    </button>
    <br><br>
    The following variables will be defined for you.



    <div class="col-md-6">
        <div class="box box-solid">
            <div class="box-header with-border">
                <h3 class="box-title">Global Variables</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <div class="box-group" id="accordion">
                    <!-- we are adding the .panel class so bootstrap.js collapse plugin detects it -->
                    <div class="panel box box-primary">
                        <div class="box-header with-border">
                            <h4 class="box-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                                    A call to <?=highlight('Carbon::Application()')?> will define the
                                    following variables.
                                </a>
                            </h4>
                        </div>
                        <div id="collapseOne" class="panel-collapse collapse in">
                            <div class="box-body">
                                <ul>
                                    <li>DS</li>
                                    <li>CARBON_ROOT</li>
                                    <li>VENDOR</li>
                                    <li>SERVER_ROOT</li>
                                    <li>REPORTS</li>
                                    <li>AUTOLOAD</li>
                                    <li>SOCKET</li>
                                    <li></li>
                                </ul>


                            </div>
                        </div>
                    </div>
                    <div class="panel box box-danger">
                        <div class="box-header with-border">
                            <h4 class="box-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" >
                                    If the <?=highlight('DATABASE = []')?> option is set.
                                </a>
                            </h4>
                        </div>
                        <div id="collapseTwo" class="panel-collapse collapse">
                            <div class="box-body">
                                <ul>
                                    <li>DB_HOST</li>
                                    <li>DB_NAME/li>
                                    <li>DB_USER/li>
                                    <li>DB_PASS/li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="panel box box-success">
                        <div class="box-header with-border">
                            <h4 class="box-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
                                    Collapsible Group Success
                                </a>
                            </h4>
                        </div>
                        <div id="collapseThree" class="panel-collapse collapse">
                            <div class="box-body">
                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3
                                wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum
                                eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla
                                assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred
                                nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer
                                farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus
                                labore sustainable VHS.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.box-body -->
        </div>
        <!-- /.box -->
    </div>






    <br><br>
    <br><br>
    <?=highlight(SERVER_ROOT . 'Data/vendor/richardtmiles/carbonphp/Extras/exIndex.php');?>

    <!-- ============================================================= -->




</div><!-- /.content -->
