<?php
defined("__secret__Constant__") or die('No Such File!'); ?>

<div class="test--your--self " style="margin-top: 6%;">
    <div class="p-5 border border-4 cdf" >
        <div>
            <select class="form-select" name="" id="paths">
                <option value=""><?="select path";?></option>
                <?php
                $paths = get__path();
               
                foreach ($paths as $path) { ?>
                    <option value="<?=$path["path_id"];?>"><?=$path["title"];?></option>
                <?php } ?>
            </select>
        </div>
        <div id="questions--results" class="quiz-grid">

        </div>

        <div id="quiz-result"></div>

    </div>
</div>






