<!-- Content Header (Page header) -->
<div class="content-header">
    <h1>
        Urls and Namespaces
        <small>Routing</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="<?=SITE?>"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active"> Upgrade</li>
    </ol>
</div>

<!-- Main content -->
<div class="content body">
    <p class="lead">
        This documentation is for versions 2.3 and under.
        If you are looking for documentation for version 2.4 and above,
        please visit <a href="https://adminlte.io/docs">our online documentation</a>.
    </p>

    <?= highlight('<?php

use Carbon\Route;
use Carbon\View;

const CONTENT = SERVER_ROOT . \'Public\' . DS;

$url = new class extends Route        // Start the route with the structure of the default route const
{
    public function defaultRoute(): void   // If the uri is empty this will be executed and the script will exit
    {
        View::contents(CONTENT . \'Carbon.php\') and die;   // Our caching condition: cache = (HTTP || HTTPS)
    }
};


// On match run function
$url->match(\'CarbonPHP/\', function (){
    View::contents(CONTENT . \'CarbonPHP.php\');
});

$html = function (string $fileName) {
    View::contents(CONTENT . $fileName .\'.php\'); };') ?>

    <!-- ============================================================= -->




</div><!-- /.content -->
