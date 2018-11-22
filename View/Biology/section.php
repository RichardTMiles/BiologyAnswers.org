<div class="col-md-offset-3 col-md-6" style="margin-top: 50px"> <!-- login-box -->
    <?php global $questions;
    /**
     * @link https://github.com/kalessil/phpinspectionsea/blob/master/docs/types-compatibility.md#foreach-source-to-iterate-over
     * @var $sections string[][] <- the fix, $string type will be correctly recognized as `string`
     * */
    foreach ($questions as $question): ?>
        <div class="col-md-12 col-sm-12 col-xs-12">
            <a href="<?=SITE?>Question/<?=$question['ChapterNumber']?>/<?=$question['SectionNumber']?>/<?=$question['QuestionNumber']?>">
            <div class="info-box">
                <span class="info-box-icon bg-green"><?= $question['QuestionNumber'] ?></span>

                <div class="info-box-content">
                    <span class="info-box-text"></span>
                    <span class="info-box-number"><?= $question['Question'] ?></span>
                </div>
                <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
        </div>
        </a>
    <?php endforeach; ?>
</div>
