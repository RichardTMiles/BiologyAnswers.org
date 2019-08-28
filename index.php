<?php
#phpinfo() and exit;

use CarbonPHP\CarbonPHP;
const DS = DIRECTORY_SEPARATOR; // All folder constants end in a trailing slash /

define('SERVER_ROOT', __DIR__ . DS);  // Set our root folder for the application

const APP_ROOT = SERVER_ROOT;         // I would like to change to only using app_root soon


if (false === (include SERVER_ROOT . 'vendor/autoload.php')) {     // Load the autoload() for composer dependencies located in the Services folder
    print '<h1>Loading Composer Failed. See Carbonphp.com for documentation.</h1>' and die;     // Composer autoload
}

try {
    CarbonPHP::make('Application/Config/Config.php');
} catch (Throwable $e) {
    /** @noinspection ForgottenDebugOutputInspection */
    APP_LOCAL and print_r($e->getMessage());
    print '<h1>Dang... CarbonPHP Failed!</h1>';
    exit(1);
}

/** At one point I returned the invocation of $app to show that
 * the application will not exit on completion, but rather return
 * back to this index file. This means you can still execute code
 * after $app(); I stopped returning the __invoke() because if false
 * is returned, the index will re-execute. This turns very bad quickly.
 */

CarbonPHP::run(App\BiologyAnswers::class);

return true;


