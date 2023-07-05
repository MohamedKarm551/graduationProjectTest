<?php
/**
 * @var $path_id
 */
$where = "path_id = '".$path_id."'";
$questions = get__question($where);
// var_dump(count($questions));//total
// $total=count($questions);
// $result=0;
 foreach ($questions as $question) { ?>
    <div id="wiz1" class="wizz-sty">
        <h3><?= $question["body"]; ?></h3>
        <form>
            <label>
                <input type="radio" name="<?= $question["body"]; ?>" value="yes">
                <span>Yes</span>
            </label>
            <label>
                <input type="radio" name="<?= $question["body"]; ?>" value="no">
                <span>No</span>
            </label>
        </form>
        <div class="feedback"></div>
    </div>
<?php } ?>

<!-- Add a button element with onclick attribute -->
<button type="button" class="btn btn-primary" onclick="calculateQuizResult()">Submit</button>


