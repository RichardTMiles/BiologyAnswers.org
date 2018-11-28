<?php global $question, $next, $last; ?>
<div class="callout callout-info" style="margin-top: 20px">
    <h4>Question <?= $question['QuestionNumber'] ?></h4>

    <p><?= $question['Question'] ?></p>
</div>

<div class="callout callout-success">
    <h4>BiologyAnswers.org</h4>

    <p><?= $question['Answer'] ?></p>
</div>


<div class="row">
    <div class="col-md-6">
        <a href="<?=$last?>" class="btn btn-app col-md-12">
            <i class="fa fa-backward"></i> Previous Question
        </a>
    </div>
    <div class="col-md-6">
        <a href="<?=$next?>" class="btn btn-app col-md-12">
            <i class="fa fa-forward"></i> Next Question
        </a>
    </div>
</div>