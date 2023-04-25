<div class="container">
    <div class="article">
        <h2 class="main-title onhover accord"><?=l_An_Introductory_Article;?></h2>
    </div>
    <!-- المفروض   article-Text info-hide -->


    <div class="article-Text m-5">

        <!-- -->
        <div class="accordion" id="accordionPanelsStayOpenExample">
            <div class="accordion-item text-center">
                <h2 class="accordion-header text-center" id="panelsStayOpen-headingOne">
                    <button class="accordion-button text-center" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
                        <h5 class="text-center"> <?=l_Important_Introduction;?>
                        </h5>
                    </button>
                </h2>
                <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-headingOne">
                    <div class="accordion-body text-center">
                        <strong><?=l_About_the_Department;?></strong>
                        <br>
                        <p> <?=l_About_the_Department_define;?>
                        </p>

                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header text-center" id="panelsStayOpen-headingTwo">
                    <button class="accordion-button collapsed text-center" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
                        <h5> <?=l_The_most_famous_tracks;?>
                        </h5>
                    </button>
                </h2>
                <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingTwo">
                    <div class="accordion-body text-center">
                        <p>
                        <?=l_The_most_famous_tracks_define;?>
                        </p>

                        <ul class="styleFirstUl">
                            <li><?=l_The_most_famous_tracks_li_one;?></li>
                            <li><?=l_The_most_famous_tracks_li_two;?></li>
                            <li><?=l_The_most_famous_tracks_li_three;?></li>
                            <li><?=l_The_most_famous_tracks_li_four;?></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="accordion-item text-center">
                <h2 class="accordion-header" id="panelsStayOpen-headingThree">
                    <button class="accordion-button collapsed text-center" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
                        <h5> <?=l_Important_note;?>
                        </h5>
                    </button>
                </h2>
                <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingThree">
                    <div class="accordion-body text-center"><?=l_Important_note_define;?>
                        <br>
                        <p class="bg-danger"> <?=l_self_study;?>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <!-- <p>
            هو من الأقسام التي تقوم بربط علوم الحاسب بمجالات العمل المختلفة،
            لذلك فهو يناسب الطلاب الذين يريدون اكتشاف مهاراتهم وقدراتهم على تحليل نظم المعلومات والبيانات في أي منظمة أو شركة.

            فمن أشهر مجالات ووظائف هذا القسم : حسب تعريف دكتور أشرف المراكبي الرئيس السابق للقسم
        </p>
        <ul>
            <li>شبكات الحاسب</li>
            <li>البرمجة</li>
            <li>التحكم الآلي</li>
            <li>الهاردوير</li>
        </ul>
        <h2>
            القسم يهتم بتعليم الأساسيات وهو معتمد على التعلم الذاتي self study
        </h2> -->
        <br />
        <!-- <h3 class="center-ele">من أسماء القسم</h3> -->
        <!-- <h3 class="title-section">من أسماء القسم</h3> -->
        <button class="btn-style"><?=l_Department_Names;?></button>

        <ul class="departmentName">
            <li><?= l_Al_Azhar_University; ?></li>
            <li><?= l_Cairo_University; ?></li>
            <li><?= l_Mansoura_University; ?></li>
            <li><?= l_Zagazig_University; ?></li>
        </ul>
        <!-- <h3 class="center-ele">من مجالات العمل</h3> -->
        <!-- <h3 class="title-section">من مجالات العمل</h3> -->
        <button class="btn-style"><?= l_job_tracks; ?></button>


        <ul class="fields">
            <li><?= l_software_development; ?></li>
            <li><?= l_embedded_system; ?></li>
            <li><?= l_web_developer; ?></li>
            <li><?= l_mobile_android_developer; ?></li>
            <li><?= l_Data_Engineer; ?></li>
            <li><?= l_Algorithms_Engineer; ?></li>
            <li><?= l_Machine_Learning_Engineer; ?></li>
            <li><?= l_Big_Data_Engineer ?></li>
            <li>Computer Vision Engineer</li>
            <li>Image Processing Engineer</li>
            <li>ETL Developer</li>
            <li>Business Intelligence (BI) Developer</li>
            <li><?= l_Network_Engineer; ?></li>
            <li><?= l_Security_Engineer; ?></li>
            <li><?= l_Digital_or_analog_design; ?></li>
            <li><?= l_Electronics; ?></li>
            <li><?= l_Control_Systems; ?></li>
        </ul>


        <hr />
        <!-- <div class="shape">
            <p><span>Help</span> explainer <br>videos</p>
        </div> -->
        <!-- <p class="center-ele">فيديو تعريفي بالقسم من رئيس القسم السابق</p> -->
        <!-- <h3 class="title-section">فيديو تعريفي بالقسم من رئيس القسم السابق </h3> -->
        <button class="btn-style"><?= l_An_introductory_video_one; ?></button>

        <br />
        <iframe width="560" height="315" src="https://www.youtube.com/embed/FQ9XigMfnG4" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        <hr />
        <!-- <p class="center-ele">فيديو تعريفي بالقسم من طالب سابق</p> -->
        <!-- <h3 class="title-section">فيديو تعريفي بالقسم من طالب سابق </h3> -->
        <button class="btn-style"><?= l_An_introductory_video_two; ?></button>

        <br />
        <iframe width="560" height="315" src="https://www.youtube.com/embed/JAVKXLhRGiw" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        <!--  -->
        <br />

        <!-- <p class="center-ele">
            وهذه هي المواد المهمة التي ستقابلها في أعوام دراستك في القسم :
        </p> -->
        <!-- <h3 class="title-section"> وهذه هي المواد المهمة التي ستقابلها في أعوام دراستك في القسم
        </h3> -->
        <button class="btn-style">
            <a href="/courses"><?= l_An_introductory_video_three; ?></a>
        </button>

        <!-- according terms (Section materials) -->
        <!-- <div class="row justify-content-center mtb">
            <div class="col-md-7 col-lg-6 col-xl-5">
                <div id="accordion" class=" accordion myaccordion w-100">
                    <div class=" cardAccord accordion-item">
                        <div class="card-header p-0" id="headingOne">
                            <button class="d-flex px-4 py-3 align-items-center justify-content-between btn btn-link collapsed accordion-button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
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
                            <button class="d-flex px-4 py-3 align-items-center justify-content-between btn btn-link collapsed accordion-button" data-toggle="collapse" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
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

        <hr />
    </div>
</div>