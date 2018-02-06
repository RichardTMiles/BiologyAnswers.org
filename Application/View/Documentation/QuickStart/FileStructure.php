<!-- Content Header (Page header) -->
<div class="content-header">
    <h1><a href="">
            Recommended Project Directory Structure</a>
        <small></small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> CarbonPHP</a></li>
        <li class="active">ZEND FRAMEWORK</li>
    </ol>
</div>

<!-- Main content -->
<div class="content body">

    <p class="lead">
        We decided <a href="https://framework.zend.com/manual/1.10/en/project-structure.project.html">Zend Framework</a> has a very
        intuitive and clear file architecture. We're going to use their recommended file hierarchy with a few tweaks. We do this because
        The <a href="https://en.wikipedia.org/wiki/Model–view–controller">Controller -> Model -> View (MVC, rolls off the tong better) coding pattern</a>
        is in alphabetical order. So in most editors you can think of it as top down. I recommend viewing the files,
    </p>
    <ol>Controllers - accepts input and converts it to commands for the model or view.
        <li>Our Controllers validate all user input.
            <ul>
                <li>If the controller returns false, or nothing, the model code layer will not be run.</li>
                <li>Data returned by will be passed as parameters to the model.</li>
            </ul>
        </li>
        <li>Models - may accept data from the controller
            <ul>
                <li>Models usually run functions provided in the Tables folder then work to prepare it for the view</li>
                <li>Tables should have a corresponding file of the same name.</li>
            </ul>
        </li>
        <li>Tables - Preform Database operations
            <ul>
                <li>Tables methods (which is   </li>
            </ul>
        </li>
    </ol>

    <div class="col-md-offset-4">
        <a href="Installation">
            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#modal-success">
                Automatically setup a new application!
            </button>
        </a>
    </div>

    <br>
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

    <section id="introduction">
        <p class="lead">
            <b>CarbonPHP</b> recommends using an MVC structure.<br>
            The following function is used for many <a href="Home">Stats.Coach</a> routes involving<a href="#"> user
                input</a>.
        <ul>
            <li>
                Hello
            </li>
        </ul>
        <br>
        <b><?= highlight('function MVC(string $class, string $method, array &$argv = [])
    {
        static $view = false;

        $controller = "Controller\\$class";
        $model = "Model\\$class";

        $run = function ($class, $argv) use ($method) {
            return call_user_func_array([new $class, "$method"],    // This automatically loads the file
                is_array($argv) ? $argv : [$argv]);
        };

        catchErrors(function () use ($run, $controller, $model, $argv) {
            if (!empty($argv = $run($controller, $argv))) $run($model, $argv);
        })();

        $view = $view ?: View::getInstance(false);     // Send the wrapper? only run once. (singleton)

        // This could cache or send
        $view->content("Public/$class/$method.php");  // but will exit(1);
    }') ?></b>

        The following function is made available when <?= highlight('Carbon::Application();') ?> is run.
        </p>
    </section><!-- /#introduction -->


</div><!-- /.content -->

