<?php
$pageAboutID = get_field('about_link', 'page_link')->ID;
$aboutLink = get_permalink($pageAboutID);
$sectionTitleAbout = get_field('section_whoweare_title', $pageAboutID);
$sectionSubTitleAbout = get_field('section_whoweare_subtitle', $pageAboutID);
$sectionAboutSortDescription = get_field('about_sort_description_', $pageAboutID);
$sectionAboutGallery = get_field('about_gallery', $pageAboutID);
?>
<section id="about" class="about" data-scroll-section>
    <div class="container-fluid section-padding">
        <div class="row">
            <div class="col-md-6">
                <p class="section-subtitle" data-scroll data-scroll-speed="1"><?php echo $sectionSubTitleAbout ?></p>
                <h2 class="section-title" data-scroll data-scroll-speed="1"><?php echo $sectionTitleAbout ?></h2>
                <div class="section-content" data-scroll data-scroll-speed="1.5">
                    <?php echo $sectionAboutSortDescription; ?>
                </div>
            </div>
            <div class="col-md-6" data-scroll data-scroll-speed="1.5">
                <h3 class="section-subtitle">Basic Skill</h3>
                <div class="progress-circle">
                    <div class="progress-circle__wrapper">
                        <div class="progressHTML circleprogress" data-percent="86" data-label="HTML"></div>
                        <label class="progress-circle__label" for="progress-circle__label">HTML</label>
                    </div>
                    <div class="progress-circle__wrapper">
                        <div class="progressCSS circleprogress" data-percent="90" data-label="CSS"></div>
                        <label class="progress-circle__label" for="progress-circle__label">CSS</label>
                    </div>

                    <div class="progress-circle__wrapper">
                        <div class="progressJS circleprogress" data-percent="100" data-label="JS"></div>
                        <label class="progress-circle__label" for="progress-circle__label">JS</label>
                    </div>

                    <!-- <div class="progressdiv" data-percent="86">
                        <svg class="progress" width="178" height="178" viewport="0 0 100 100" version="1.1" xmlns="http://www.w3.org/2000/svg">
                            <circle r="80" cx="89" cy="89" fill="transparent" stroke-dasharray="502.4" stroke-dashoffset="0"></circle>
                            <circle class="bar" r="80" cx="89" cy="89" fill="transparent" stroke-dasharray="502.4" stroke-dashoffset="0"></circle>
                        </svg>
                    </div> -->
                </div>

                <h3 class="section-subtitle">Additional Skill</h3>
                <div class="skill-bar-container">
                    <p class="skillName">HTML</p>
                    <div class="skillbar">
                        <div class="progress default" data-fill="85"></div>
                    </div>
                    <p class="skillName">PHP</p>
                    <div class="skillbar">
                        <div class="progress default" data-fill="40"></div>
                    </div>
                    <p class="skillName">JavaScript</p>
                    <div class="skillbar">
                        <div class="progress default" data-fill="60"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>