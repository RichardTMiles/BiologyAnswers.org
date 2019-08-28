<div class="col-md-offset-3 col-md-6" style="margin-top: 50px"> <!-- login-box -->
    <?php global $question; ?>

    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="info-box">
            <span class="info-box-icon bg-green"><?= $question['QuestionNumber'] ?></span>
            <div class="info-box-content">
                <span class="info-box-text"><?= $question['Question'] ?></span>
                <span class="info-box-number"><?= $question['Answer'] ?></span>
            </div>
            <!-- /.info-box-content -->
        </div><!-- /.info-box -->
    </div>

</div>
