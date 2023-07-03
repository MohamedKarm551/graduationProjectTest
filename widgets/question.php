<?php
/**
 * @var $path_id
 */
$where = "path_id = '".$path_id."'";
$questions = get__question($where);
foreach ($questions as $question) { ?>
    <div id="wiz1" class="wizz-sty">
        <h3><?=$question["body"];?></h3>
        <form action="">
            <label>
                <input type="radio" name="yes" id="radio">
                <span>نعم</span>
            </label>
            <label>
                <input type="radio" name="yes" id="radio">
                <span>لا</span>
            </label>
        </form>
        <div class="d-flex align-items-center">
            <span class="next"><button class="btn_ btn_1 " data-caller="open--tab" data-to-close="wiz1" data-to-open="wiz2">Next</button></span>
        </div>
    </div>
<?php } ?>
