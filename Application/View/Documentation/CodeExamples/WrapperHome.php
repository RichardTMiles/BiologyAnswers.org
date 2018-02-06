<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- PJAX Content Control -->
    <meta http-equiv="x-pjax-version" content='<?= $_SESSION['X_PJAX_Version'] ?>'>
    <script>
        /*! loadJS: load a JS file asynchronously. [c]2014 @scottjehl, Filament Group, Inc. (Based on http://goo.gl/REQGQ by Paul Irish). Licensed MIT */
        (function (w) {
            let loadJS;
            loadJS = function (src, cb) {
                "use strict";
                let ref = w.document.getElementsByTagName("script")[0];
                let script = w.document.createElement("script");
                script.src = src;
                script.async = true;
                ref.parentNode.insertBefore(script, ref);
                if (cb && typeof(cb) === "function")
                    script.onload = cb;

                return script;
            }; // commonjs
            if (typeof module !== "undefined") module.exports = loadJS;
            else w.loadJS = loadJS;
        }(typeof global !== "undefined" ? global : this));// Hierarchical PJAX Request


        /* This is you new Document ready
         * Code should be passed to it in a function
         * It will execute after jQuery & PJAX & Mustache & CarbonPHP are loaded
         * Ex:
         *      Carbon(function(){  YOUR_CODE_HERE  });
         *
         * Shorthand version:
         *      Carbon(()=> SINGLE_JAVASCRIPT_STATEMENTS );
         *
         *      Carbon(()=> { MULTILINE_JAVASCRIPT });
         */

        function Carbon(cb) {
            document.addEventListener("Carbon", function fn(event) {
                document.removeEventListener("Carbon", fn);
                cb(event);
            });
        }
    </script>
</head>
<body>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <div id="alert"></div>
    <article>
        <!-- /.content -->
    </article>
    <div class="clearfix"></div>

</div>
<!-- /.content-wrapper -->

<script>

    /* The function CarbonJS() takes three parameters
     *
     * a Jquery selector
     * your websocket address
     * and if you would like to default to websockets over ajax ( not recommended )
     */

    // JQuery
    loadJS('<?= $this->versionControl(COMPOSER . 'richardtmiles/carbonphp/Helpers/Jquery.min.js') ?>', function () {
        //-- Jquery Form -->
        loadJS('<?= $this->versionControl(COMPOSER . 'bower-asset/jquery-form/jquery.form.js')?>');

        loadJS('<?=  SITE . COMPOSER . 'bower-asset/jquery-pjax/jquery.pjax.js' ?>', () =>
            loadJS('<?=  SITE . COMPOSER . 'bower-asset/mustache.js/mustache.js' ?>', () =>
                loadJS('<?=  SITE . COMPOSER . 'richardtmiles/carbonphp/Helpers/Carbon.js'?>', () =>
                    CarbonJS('article', 'wss://example.com:8888/', false))));

    });
</script>
</body>
</html>