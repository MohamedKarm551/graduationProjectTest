<?php
defined("__secret__Constant__") or die('No Such File!'); ?>

<div class="test--your--self" style="margin-top: 10%;">
    <div class="d-flex justify-content-center p-5 border border-4">
        <div id="wiz1">
            <h3>hello from wizard 1 page</h3>
            <div>
                <input class="" type="radio" id="exampleRadios1" name="answers">
                <label for="exampleRadios1">
                    Default radio
                </label>
            </div>
            <div>
                <input class="" type="radio" id="exampleRadios1" name="answers">
                <label for="exampleRadios1">
                    Default radio
                </label>
            </div>
            <div class="d-flex align-items-center">
                <span class="mt-3"><button class="btn_ btn_1" data-caller="open--tab" data-to-close="wiz1" data-to-open="wiz2">go to wiz2</button></span>
            </div>
        </div>
        <div id="wiz2" class="d-none">
            <span data-caller="open--tab" data-to-close="wiz2" data-to-open="wiz1"><i class="fs-4 cursor--pointer las la-arrow-left"></i></span>
            <h3>iam wiz 2 page, fak u</h3>
            <div class="d-flex align-items-center">
                <span class="">
                    <button class="btn_ btn_1" data-caller="open--tab" data-to-close="wiz2" data-to-open="wiz3">go to wiz3</button>
                </span>
            </div>
        </div>
        <div id="wiz3" class="d-none">
            <span data-caller="open--tab" data-to-close="wiz3" data-to-open="wiz2"><i class="fs-4 cursor--pointer las la-arrow-left"></i></span>
            <h3>wiz num3</h3>
            <div class="d-flex align-items-center">
                <span><button class="btn_ btn_1">finish</button></span>
            </div>
        </div>
    </div>
</div>
