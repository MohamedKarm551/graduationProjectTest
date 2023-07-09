<div class="container">
    <div class="article">
        <h2 class="main-title onhover accord"><?=l_An_Introductory_Article;?></h2>
    </div>


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
                        <!-- <p>
                        <?=l_The_most_famous_tracks_define;?>
                        </p> -->

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
                        
                        <a href="/paths"><p class="text-primary"> <?=l_self_study;?>
                </p></a>
                    </div>
                </div>
            </div>
        </div>

        <button class="btn-style"><?=l_Department_Names;?></button>

        <ul class="departmentName">
            <li><a href="https://eng-azhar.net/User/Department?filter=9" target="_blank"><?= l_Al_Azhar_University; ?></a> </li>
            <li><a href="https://cu.edu.eg/ar/CU-Faculty-Profile-1.html" target="_blank"><?= l_Cairo_University; ?></a>  </li>
            <li><a href="https://csifac.mans.edu.eg/" target="_blank"><?= l_Mansoura_University; ?></a> </li>
            <li><a href="http://www.eng.zu.edu.eg/faculty/sector_info?d=1563" target="_blank"><?= l_Zagazig_University; ?></a> </li>
            <li><a href="https://eng.asu.edu.eg/ar/departments/CSE" target="_blank"><?= l_Ean_shams_University; ?></a> </li>
            <li><a href="https://eng.alexu.edu.eg/index.php/departments/computer" target="_blank"><?= l_ALEXANDRIA_University; ?></a> </li>
            <li><a href="https://eng.tanta.edu.eg/Automated_Control/Default.aspx" target="_blank"><?= l_Tanta_University; ?></a> </li>
            <li><a href="engh.helwan.edu.eg/?p=11626" target="_blank"><?= l_Helwan_University; ?></a> </li>
            <li><a href="https://mu.menofia.edu.eg/FEE/SCE/Home/ar" target="_blank"><?= l_Menoufia_University; ?></a> </li>
            <li><a href="https://departments.minia.edu.eg//Home/GetDepartmentProfile/140" target="_blank"><?= l_Minia_University; ?></a> </li>
        </ul>

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
            <li><?= l_Computer_Vision_Engineer ?></li>
            <li><?= l_Image_Processing_Engineer ?></li>
            <li><?= l_ETL_Developer ?></li>
            <li><?= l_Business_Intelligence ?></li>
            <li><?= l_Network_Engineer; ?></li>
            <li><?= l_Security_Engineer; ?></li>
            <li><?= l_Digital_or_analog_design; ?></li>
            <li><?= l_Electronics; ?></li>
            <li><?= l_Control_Systems; ?></li>
        </ul>


        <hr />

        <button class="btn-style"><?= l_An_introductory_video_one; ?></button>

        <br />
        <iframe width="560" height="315" src="https://www.youtube.com/embed/FQ9XigMfnG4" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        <hr />

        <button class="btn-style"><?= l_An_introductory_video_two; ?></button>

        <br />
        <iframe width="560" height="315" src="https://www.youtube.com/embed/JAVKXLhRGiw" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        <!--  -->
        <br />

 
        <button class="btn-style">
            <a href="/courses"><?= l_An_introductory_video_three; ?></a>
        </button>

     

        <hr />
    </div>
</div>