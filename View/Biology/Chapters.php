<div class="col-md-offset-3 col-md-6" style="margin-top: 50px"> <!-- login-box -->
    <?php global $chapters;
    /**
     * @link https://github.com/kalessil/phpinspectionsea/blob/master/docs/types-compatibility.md#foreach-source-to-iterate-over
     * @var $chapters string[][] <- the fix, $string type will be correctly recognized as `string`
     * */
    foreach($chapters as $chapter): ?>
    <div class="col-md-12 col-sm-12 col-xs-12">
        <a href="<?=SITE?>Chapter/<?=$chapter['ChapterNumber']?>">
        <div class="info-box">
            <span class="info-box-icon bg-green"><?=$chapter['ChapterNumber']?></span>

            <div class="info-box-content">
                <span class="info-box-text"></span>
                <span class="info-box-number"><?=$chapter['ChapterTitle']?></span>
            </div>
            <!-- /.info-box-content -->
        </div></a>
        <!-- /.info-box -->
    </div>
    <?php endforeach; ?>
</div>

