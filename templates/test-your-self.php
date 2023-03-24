<?php
defined("__secret__Constant__") or die('No Such File!'); ?>

<div class="test--your--self " style="margin-top: 10%;">
    <div class="d-flex justify-content-center p-5 border border-4 cdf" dir="rtl">
        <div id="wiz1" class="wizz-sty">
            <h3> هل لديك خبرة في العمل مع قواعد البيانات؟</h3>
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
        <div id="wiz2" class="d-none wizz-sty">
            
            <h3>هل تستطيع كتابة استعلامات SQL بسهولة؟</h3>
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
            
                <span class="next">
                    <button class="btn_ btn_1 btn-color" data-caller="open--tab" data-to-close="wiz2" data-to-open="wiz3">Next</button>
                </span>
                <span data-caller="open--tab" data-to-close="wiz2" data-to-open="wiz1"><i class="fs-4 cursor--pointer las la-arrow-left p-1 border border-4"></i></span>
            </div>
        </div>
        <div id="wiz3" class="d-none wizz-sty">
            
            <h3>هل تستطيع كتابة رمز PHP بسهولة وفهمه؟</h3>
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
            
                <span class="next">
                    <button class="btn_ btn_1" data-caller="open--tab" data-to-close="wiz3" data-to-open="wiz4">Next</button>
                </span>
                <span data-caller="open--tab" data-to-close="wiz3" data-to-open="wiz2"><i class="fs-4 cursor--pointer las la-arrow-left p-1 border border-4"></i></span>
            </div>
        </div>
        <div id="wiz4" class="d-none wizz-sty">
            
            <h3>هل لديك فهم جيد لبرمجة الخادم والشبكات؟</h3>
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
            <span class="next"><button class="btn_ btn_1">finish</button></span>
            <span data-caller="open--tab" data-to-close="wiz4" data-to-open="wiz3"><i class="fs-4 cursor--pointer las la-arrow-left p-1 border border-4"></i></span>
                
            </div>
        </div>
    </div>
</div>






