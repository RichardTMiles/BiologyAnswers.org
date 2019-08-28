<div class="col-md-offset-1 col-md-10" style="margin-top: 50px"> <!-- login-box -->
    <div class="col-md-12 col-sm-12 col-xs-12">

        <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
        <!-- chapterSelect -->
        <ins class="adsbygoogle"
             style="display:block"
             data-ad-client="ca-pub-7402031087678981"
             data-ad-slot="4596150160"
             data-ad-format="auto"
             data-full-width-responsive="true"></ins>
        <script>
            (adsbygoogle = window.adsbygoogle || []).push({});
        </script>
    </div>

    <?php global $question; ?>

    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="info-box">
            <span class="info-box-icon bg-green"><?= $question['QuestionNumber'] ?></span>
            <div class="info-box-content">
                <div class="callout callout-info">
                    <h2>
                    <?= $question['Question'] ?></h2>
                </div>
                <div class="callout callout-success">
                    <h2>
                    <?= $question['Answer'] ?></h2>
                </div>
            </div>

            <!-- /.info-box-content -->
        </div><!-- /.info-box -->
        <div class="row">
            <div class="col-md-6 col-sm-12 col-xs-12">
                <a href="<?=$question['last']?>" class="btn btn-danger btn-block"><b>Previous Question</b></a>
            </div>
            <div class="col-md-6 col-sm-12 col-xs-12">
                <a href="<?=$question['next']?>" class="btn btn-success btn-block"><b>Next Question</b></a>
            </div>
        </div>
    </div>

</div>
