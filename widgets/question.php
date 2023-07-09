<?php
/**
 * @var $path_id
 */
$where = "path_id = '".$path_id."'";
$questions = get__question($where);
// var_dump(count($questions));//total
// $total=count($questions);
// $result=0;
 foreach ($questions as $i=>$question) { ?>
 <div class="to--close <?=$i!==0 ?"d-none":""; ?>" id="wiz<?=$i;?>" >
 <div  class="wizz-sty ">
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
    <div class="d-flex align-items-center justify-content-evenly m-2">
    <?php 
              if($i!=(count($questions)-1)){?>
                <span  ><button class="btn_ next " data-caller="open--tab"  data-to-open="wiz<?=$i+1;?>">Next</button></span>
                <?php } ?>
              <?php 
              if($i>0){?>
  <span  ><button class="btn_ previous" data-caller="open--tab"  data-to-open="wiz<?=$i-1;?>">previous</button></span>
              <?php } ?>
            
            </div>
            <?php 
              if($i==(count($questions)-1)){?>
<!-- Add a button element with onclick attribute -->
<button type="button" class="submit btn btn-primary" onclick="calculateQuizResult()">Submit</button>
      <?php } ?>  
</div>
      
<?php } ?>




