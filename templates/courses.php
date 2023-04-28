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
            <div class="main-title onhover accord"> <?= l_Department_subjects ?></div>
            <div class="accordion2">
                <div class="accordion-item2 ">
                    <div class="accordion-header2"><?= l_First_year ?></div>
                    <div class="accordion-content2">
                        <ul>
                            <li><?= l_The_Holy_Quran ?></li>
                            <li><?= l_Measuring_Devices ?></li>
                            <li><?= l_English_Language ?></li>
                            <li><?= l_Electronics ?></li>
                            <li><?= l_Laboratory ?></li>
                            <li><?= l_Programming_Methods ?></li>
                            <li><?= l_Mathematics_Vectors_and_Matrices ?></li>
                            <li><?= l_Theory_of_Electrical_Circuits ?></li>
                            <li><?= l_Electronic_Circuits ?></li>
                            <li><?= l_Biography_of_the_Prophet ?></li>
                            <li><?= l_Algorithms_and_Data_Structure ?></li>
                            <li><?= l_Electromagnetic_and_Photochemical_Fields ?></li>
                            <li><?=  l_Mathematics_Differential_Equations?></li>
                            <li><?= l_Combinational_Circuits ?></li>
                        </ul>

                    </div>

                </div>
                <div class="accordion-item2 ">
                    <div class="accordion-header2"><?=  l_Second_year?></div>
                    <div class="accordion-content2">
                        <ul>
                            <li><?= l_The_Holy_Quran ?></li>
                            <li><?= l_Integrated_Circuits ?></li>
                            <li><?= l_System_Engineering_and_Signals ?></li>
                            <li><?= l_Sequential_Machines ?></li>
                            <li><?= l_Object_Oriented_Programming ?></li>
                            <li><?= l_Mathematics_Functions_and_Transform_Functions ?></li>
                            <li><?= l_Laboratory ?></li>
                            <li><?= l_Interpretation ?></li>
                            <li><?= l_English_Language ?></li>
                            <li><?= l_Numerical_Analysis ?></li>
                            <li><?= l_Mathematics_Statistics_and_Probability ?></li>
                            <li><?= l_Logic_Circuits ?></li>
                            <li><?= l_Automatic_Control ?></li>
                            <li><?= l_Electrical_Machines ?></li>
                        </ul>

                    </div>

                </div>
                <div class="accordion-item2 ">
                    <div class="accordion-header2"><?= l_Third_year ?></div>
                    <div class="accordion-content2">
                        <ul>
                            <li><?= l_The_Holy_Quran ?></li>
                            <li><?= l_Communication_Systems ?></li>
                            <li><?= l_Mathematics_Queuing_Theory_and_Modeling ?></li>
                            <li><?= l_Hadith ?></li>
                            <li><?= l_Digital_Control ?></li>
                            <li><?= l_Laboratory ?></li>
                            <li><?= l_Automata ?></li>
                            <li><?= l_Microprocessors ?></li>
                            <li><?= l_Operating_Systems ?></li>
                            <li><?= l_Electric_Power_Systems ?></li>
                            <li><?= l_Database_Management_Engineering_and_Project_Managing ?></li>
                            <li><?= l_Sensors_and_Power_Converters ?></li>
                        </ul>

                    </div>

                </div>
                <div class="accordion-item2 ">
                    <div class="accordion-header2"><?= l_Fourth_year ?></div>
                    <div class="accordion-content2">
                        <ul>
                            <li><?= l_Computer_Networks ?></li>
                            <li><?= l_Computer_Aided_Design ?></li>
                            <li><?= l_Laboratory ?></li>
                            <li><?= l_Project ?></li>
                            <li><?= l_Computer_Architecture ?></li>
                            <li><?= l_Compilers ?> </li>
                            <li><?= l_Elective_Course_one ?></li>
                            <li> <?= l_Embedded_Systems_Measurements ?> </li>
                            <li> <?= l_Interfacing_Systems ?></li>
                            <li> <?= l_Software_Engineering ?> </li>
                            <li> <?= l_Intelligent_Systems ?></li>
                            <li> <?= l_Elective_Course_two ?></li>
                        </ul>

                    </div>

                </div>


            </div>
        </section>

    </div> <!-- end of container-->

</section>