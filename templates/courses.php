<?php defined('__secret__Constant__') or die('not found!'); ?>

<section class="Material">
    <div class="container">

        <button class="btn-style">
            الرؤية والرسالة والأهداف</button>
        <div class="accordion edit-accord" id="accordionPanelsStayOpenExample">
            <div class="accordion-item">
                <h2 class="accordion-header text-center" id="panelsStayOpen-headingOne">
                    <button class="accordion-button accordionButtonEdit text-center" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
                        <h5 class="text-center"><?= l_college_vision ?>
                        </h5>
                    </button>
                </h2>
                <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-headingOne">
                    <div class="accordion-body accordionBodyEdit text-center accordionBodyEdit">
                        <p><?= l_college_vision_child ?></p>

                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header text-center" id="panelsStayOpen-headingTwo">
                    <button class="accordion-button accordionButtonEdit collapsed text-center" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
                        <h5> <?= l_Program_vision ?>
                        </h5>
                    </button>
                </h2>
                <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingTwo">
                    <div class="accordion-body  accordionBodyEdit text-center">
                        <p>
                        <?= l_Program_vision_child ?>
                        </p>


                    </div>
                </div>
            </div>
            <div class="accordion-item ">
                <h2 class="accordion-header" id="panelsStayOpen-headingThree">
                    <button class="accordion-button accordionButtonEdit collapsed text-center" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
                        <h5><?= l_College_message ?> 
                        </h5>
                    </button>
                </h2>
                <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingThree">
                    <div class="accordion-body accordionBodyEdit text-center">
                        <p>
                        <?= l_College_message_child ?>
                        </p>
                    </div>
                </div>
            </div>
            <div class="accordion-item ">
                <h2 class="accordion-header" id="panelsStayOpen-headingFour">
                    <button class="accordion-button accordionButtonEdit collapsed text-center" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseFour" aria-expanded="false" aria-controls="panelsStayOpen-collapseFour">
                        <h5><?=l_program_message  ?> 
                        </h5>
                    </button>
                </h2>
                <div id="panelsStayOpen-collapseFour" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingFour">
                    <div class="accordion-body accordionBodyEdit text-center">
                        <p>
                        <?= l_program_message_child ?>
                         </p>
                    </div>
                </div>
            </div>
            <div class="accordion-item ">
                <h2 class="accordion-header" id="panelsStayOpen-headingFive">
                    <button class="accordion-button  accordionButtonEdit collapsed text-center" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseFive" aria-expanded="false" aria-controls="panelsStayOpen-collapseFive">
                        <h5><?= l_Program_objectives ?>
                        </h5>
                    </button>
                </h2>
                <div id="panelsStayOpen-collapseFive" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingFive">
                    <div class="accordion-body accordionBodyEdit text-center">
                        <ul class="styleFirstUl">
                            <li><?= l_Program_objectives_child_one ?></li>
                            <li><?= l_Program_objectives_child_two ?></li>
                            <li><?= l_Program_objectives_child_three ?></li>
                            <li><?= l_Program_objectives_child_four ?></li>
                            <li><?= l_Program_objectives_child_five ?></li>
                            <li><?= l_Program_objectives_child_six ?></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- according terms (Section materials)
        <button class="btn-style">
            مواد القسم خلال الأربع سنوات </button>
        <div class="row justify-content-center mtb article-Text">
            <div class="col-md-7 col-lg-12 col-xl-12">
                <div id="accordion" class=" accordion myaccordion w-100 ">
                    <div class=" cardAccord accordion-item">
                        <div class="card-header p-0" id="headingOne">
                            <button class="d-flex px-4 py-3 align-items-center justify-content-between btn btn-link accordion-button  collapsed" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                <span class="headingAccord  d-flex align-items-center">
                                    <h3 class="mb-0"><span> 01</span> <span>Your first academic year</span></h3>
                                </span>

                            </button>
                        </div>
                        <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion" style="">
                            <div class="card-body p-0 py-3">
                                <ul>
                                    <li>
                                        <p class="termNumClass">الترم الأول</p>
                                        <a href="#" class="d-flex">
                                            <span class="icon ion-ios-checkmark-circle-outline"></span>
                                            <p>
                                                <ul class="text-center m-auto">
                                                    <li>الكترونيات</li>
                                                    <li>رياضة متجهات </li>
                                                    <li>طرق برمجة </li>
                                                    <li>نظرية الدوائر الكهربية </li>
                                                    <li> أجهزة قياس </li>
                                                </ul>


                                            </p>
                                        </a>
                                    </li>
                                    <li>
                                        <p class="termNumClass">الترم الثاني</p>
                                        <a href="#" class="d-flex">
                                            <span class="icon ion-ios-checkmark-circle-outline"></span>

                                            <ul class="text-center m-auto">
                                                <li>خوارزميات</li>
                                                <li>دوائر إلكترونية </li>
                                                <li> دوائر توافقية </li>
                                                <li>رياضة </li>
                                                <li> مجالات كهرومغناطيسية
                                                </li>
                                            </ul>

                                        </a>
                                    </li>

                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class=" cardAccord accordion-item">
                        <div class="card-header p-0" id="headingTwo">
                            <button class="d-flex px-4 py-3 align-items-center justify-content-between btn btn-link collapsed accordion-button " data-toggle="collapse" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                <span class="headingAccord  d-flex align-items-center">
                                    <h3 class="mb-0"><span> 02</span> <span>The second academic year</span></h3>
                                </span>

                            </button>
                        </div>
                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                            <div class="card-body p-4">
                                <ul>
                                    <li>
                                        <p class="termNumClass">الترم الأول</p>

                                        <a href="#" class="d-flex">
                                            <span class="icon ion-ios-checkmark-circle-outline"></span>


                                            <ul class="text-center m-auto">
                                                <li> هندسة نظم وإشارات </li>
                                                <li>رياضة تحويلات </li>
                                                <li> برمجة شيئية </li>
                                                <li> دوائر متكاملة </li>
                                                <li> الآت تعاقبية </li>
                                            </ul>
                                        </a>
                                    </li>
                                    <li>
                                        <p class="termNumClass">الترم الثاني</p>

                                        <a href="#" class="d-flex">
                                            <span class="icon ion-ios-checkmark-circle-outline"></span>
                                            <p>

                                                <ul class="text-center m-auto">
                                                    <li> تحكم آلي </li>
                                                    <li>دوائر منطقية </li>
                                                    <li> تحليل عددي </li>
                                                    <li> الآت كهربية </li>
                                                </ul>

                                        </a>
                                    </li>

                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class=" cardAccord accordion-item">
                        <div class="card-header p-0" id="headingThree">
                            <button class="d-flex px-4 py-3 align-items-center justify-content-between btn btn-link collapsed accordion-button" data-toggle="collapse" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                <span class="headingAccord  d-flex align-items-center">
                                    <h3 class="mb-0"><span> 03</span> <span>Third academic year</span></h3>
                                </span>

                            </button>
                        </div>
                        <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                            <div class="card-body p-4">
                                <ul>
                                    <li>
                                        <p class="termNumClass">الترم الأول</p>

                                        <a href="#" class="d-flex">
                                            <span class="icon ion-ios-checkmark-circle-outline"></span>

                                            <ul class="text-center m-auto">
                                                <li> أنظمة انتقالية و آليات </li>
                                                <li>نظم اتصالات </li>
                                                <li> تحكم آلي </li>
                                                <li> نظرية طوابير </li>
                                                <li> مشغلات دقيقة </li>
                                            </ul>


                                        </a>
                                    </li>
                                    <li>
                                        <p class="termNumClass">الترم الثاني</p>

                                        <a href="#" class="d-flex">
                                            <span class="icon ion-ios-checkmark-circle-outline"></span>

                                            <ul class="text-center m-auto">
                                                <li> نظم تشغيل </li>
                                                <li>قواعد بيانات </li>
                                                <li> قوى كهربية </li>
                                                <li> مجسات </li>
                                                <li> هندسة إدارة </li>
                                            </ul>



                                        </a>
                                    </li>

                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="cardAccord accordion-item">
                        <div class="card-header p-0" id="headingFour">
                            <button class="d-flex px-4 py-3 align-items-center justify-content-between btn btn-link collapsed accordion-button" data-toggle="collapse" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                <div class="headingAccord  d-flex align-items-center">
                                    <h3 class="mb-0"><span> 04</span> <span>Fourth academic year</span></h3>
                                </div>

                            </button>
                        </div>
                        <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordion">
                            <div class="card-body p-4">
                                <ul>
                                    <li>
                                        <p class="termNumClass">الترم الأول</p>

                                        <a href="#" class="d-flex">
                                            <span class="icon ion-ios-checkmark-circle-outline"></span>

                                            <ul class="text-center m-auto">
                                                <li> بنية حاسب </li>
                                                <li> شبكات وبرمجياتها </li>
                                                <li> التصميم والتصنيع بالحاسب </li>
                                                <li> مترجمات </li>
                                                <li> مقرر اختياري:
                                                    برمجة متقدمة أو
                                                    <br> أمن الشبكات
                                                </li>
                                            </ul>



                                        </a>
                                    </li>
                                    <li>
                                        <p class="termNumClass">الترم الثاني</p>

                                        <a href="#" class="d-flex">
                                            <span class="icon ion-ios-checkmark-circle-outline"></span>

                                            <ul class="text-center m-auto">
                                                <li> أنظمة مدمجة </li>
                                                <li> أنظمة ذكية </li>
                                                <li> نظم موائمة </li>
                                                <li> هندسة برمجة </li>
                                                <li> نظم اتصالات رقمية </li>

                                            </ul>


                                        </a>
                                    </li>

                                </ul>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div> -->

                    <!-- help:
                    https://preview.colorlib.com/theme/bac/accordion-10/
                 -->
        <section class="Department-subjects">
            <div class="main-title onhover accord"> Department subjects</div>
            <div class="accordion2">
                <div class="accordion-item2 ">
                    <div class="accordion-header2">First year</div>
                    <div class="accordion-content2">
                        <ul>
                            <li>The Holy Quran</li>
                            <li>Measuring Devices</li>
                            <li>English Language</li>
                            <li>Electronics</li>
                            <li>Laboratory</li>
                            <li>Programming Methods</li>
                            <li>Mathematics (Vectors and Matrices)</li>
                            <li>Theory of Electrical Circuits</li>
                            <li>Electronic Circuits</li>
                            <li>Biography of the Prophet and the history of successors</li>
                            <li>Algorithms and Data Structure</li>
                            <li>Electromagnetic and Photochemical Fields</li>
                            <li>Mathematics (Differential Equations)</li>
                            <li>Combinational Circuits</li>
                        </ul>

                    </div>

                </div>
                <div class="accordion-item2 ">
                    <div class="accordion-header2">Second year</div>
                    <div class="accordion-content2">
                        <ul>
                            <li>The Holy Quran</li>
                            <li>Integrated Circuits</li>
                            <li>System Engineering &amp; Signals</li>
                            <li>Sequential Machines</li>
                            <li>Object-Oriented Programming</li>
                            <li>Mathematics (Functions and Transform Functions)</li>
                            <li>Laboratory</li>
                            <li>Interpretation</li>
                            <li>English Language</li>
                            <li>Numerical Analysis</li>
                            <li>Mathematics (Statistics and Probability)</li>
                            <li>Logic Circuits</li>
                            <li>Automatic Control</li>
                            <li>Electrical Machines</li>
                        </ul>

                    </div>

                </div>
                <div class="accordion-item2 ">
                    <div class="accordion-header2">Third year</div>
                    <div class="accordion-content2">
                        <ul>
                            <li>The Holy Quran</li>
                            <li>Communication Systems</li>
                            <li>Mathematics (Queuing Theory and Modeling)</li>
                            <li>Hadith</li>
                            <li>Digital Control</li>
                            <li>Laboratory 3</li>
                            <li>Automata</li>
                            <li>Microprocessors</li>
                            <li>Operating Systems</li>
                            <li>Electric Power Systems</li>
                            <li>Database Management Engineering and Project Managing</li>
                            <li>Sensors and Power Converters</li>
                        </ul>

                    </div>

                </div>
                <div class="accordion-item2 ">
                    <div class="accordion-header2">Fourth year</div>
                    <div class="accordion-content2">
                        <ul>
                            <li> Computer Networks and its Programming</li>
                            <li>Computer Aided Design</li>
                            <li>Laboratory 4
                            </li>
                            <li>Project
                            </li>
                            <li> Computer Architecture</li>
                            <li>Compilers </li>
                            <li>Elective Course 1</li>
                            <li> Embedded Systems’ Measurements </li>
                            <li> Interfacing Systems</li>
                            <li> Software Engineering </li>
                            <li> Intelligent Systems</li>
                            <li> Elective Course 2</li>
                        </ul>

                    </div>

                </div>


            </div>
        </section>

    </div> <!-- end of container-->

</section>