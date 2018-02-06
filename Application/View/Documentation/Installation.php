<article>
    <!-- Content Header (Page header) -->
    <header class="content-header container-fluid">
        <div class="row">
            <div class="col-lg-8">
                <h1 class="content-max-width">Installation</h1>
            </div>
        </div>
    </header>

    <!-- Main content -->
    <div class="content container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <section class="content-max-width">
                    <section id="installation">
                        <p>
                            To use the quick application setup script you must move to the new website's root in a shell (
                            <b>Terminal</b> ) prompt. If you are already lost, <a href="N00B"> lets step back.</a>
                            CarbonPHP requires <b>PHP 7+</b> as well as other PHP modules and extension.
                            Please be sure to check the <a href="Dependencies">dependencies section</a>
                            before continuing.
                        </p>

                        <h3>Application Builder</h3>

                        <h4># Shell</h4>
                        <li>
                         Move to your websites root in a shell. We recommend starting with an empty directory.<br>
                        </li>

                        <br>
                        <div class="callout callout-info">
                            <?= highlight('wget http://CarbonPHP.com/InstallCarbon.sh -O - | sh') ?>
                        </div>

                        <h3>Download Library </h3>
                        <h4># Download Directly</h4>
                        <p>
                            <a href="https://github.com/RichardTMiles/CarbonPHP/releases" class="btn btn-primary"
                               target="_blank">
                                Download Latest Release
                            </a>
                        </p>

                        <h4># Via Composer</h4>
                        <p></p>
                        <li>
                            The fxp/composer-asset-plugin allows us to install bower components via composer.<br>
                        </li>
                        <div class="callout callout-info"><?= highlight('composer global require "fxp/composer-asset-plugin:~1.3"
 composer require “richardtmiles/carbonphp:dev-master”') ?>
                        </div>
                        <p></p>

                        <h4># Setup Composer and CarbonPHP without extras</h4>
                        <p>
                        </p>
                        <li>
                            We install composer under our data folder, however this is just preference.
                        </li>
                        <div class="callout callout-info" style="overflow-x: scroll"><?= highlight("php -r \"copy('https://getcomposer.org/installer', 'composer-setup.php');\"
php -r \"if (hash_file('SHA384', 'composer-setup.php') === '544e09ee996cdf60ece3804abc52599c22b1f40f4323403c44d44fdfdd586475ca9813a858088ffbc1f233e9b180f061') { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;\"
php composer-setup.php
php -r \"unlink('composer-setup.php');\"
php -f composer.phar global require \"fxp/composer-asset-plugin:~1.3\"
php -f composer.phar require “richardtmiles/carbonphp:dev-master\”
") ?></div>
                        <p></p>

                        <h4># Via Git</h4>
                        <ul>
                            <li>Fork the repository (<a href="https://help.github.com/articles/fork-a-repo/">guide</a>).
                            </li>



                        </ul>
                        <div class="callout callout-info">
                            Clone to your machine. <br><br>
                            <?= highlight('git clone https://github.com/YOUR_USERNAME/CarbonPHP.git') ?>
                        </div>
                    </section>
                </section>
            </div>
        </div>
        <!-- /.content -->
</article>