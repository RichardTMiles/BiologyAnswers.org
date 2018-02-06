<!-- Content Header (Page header) -->
<div class="content-header">
    <h1>
        Server
        <small>Composer.</small>
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


    <!-- ============================================================= -->

    <section id="dependencies">
        <h2 class="page-header"><a href="#dependencies">Socket Communication</a></h2>
        <p class="lead"><b>HTML 5 Web Sockets</b> allow us to communicate real-time with users. When the user connects
            to the browser via HTTP or HTTPS a script is sent back instructing the browser to maintain a
            persistent connection. All network capable devices connect to the internet via a <b>Port System.</b>
            Similar to a shipping or boat dock, this website was transmitted on port 80 to your wireless
            chip.

            <br><br>The request is processed on our servers and the response is sent back to you. All <b>HTTP requests
                are sent through port 80 while
                HTTPS requests are usually made on port 443</b>. These Ports are reserved and standardised so every
            computer knows how to communicate with every other computer. The ports you may choose range from 1024 -
            65535
            inclusively. It's worth mentioning that some of these may <a
                    href="https://stackoverflow.com/questions/10476987/best-tcp-port-number-range-for-internal-applications">
                be taken by other applications running on your computer.</a> CarbonPHP will default to port <b>'8080'
                when using Sockets.</b>

            <br>
        </p>
        <br>
    </section>


</div><!-- /.content -->
