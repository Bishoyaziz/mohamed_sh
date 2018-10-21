<?php
/*
    Template Name: Experience

*/

get_header();


?>

    <section id="experience">
        <div class="experience_main_section align-center">
            <div class="section_heading">
                <img src="<?php  echo bloginfo('template_directory');  ?>/assets/images/icons/Asset 4-8.png" width="80" alt="<?php echo get_the_title(); ?>">
                <h3 class="secondary-txt"><?php echo __('Experience') ?></h3>
            </div>
            <div class="experience_content">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12 col-md-6">
                            <div class="inner_section_heading">
                                <a href="" class="hero_section_btn left-btn">Academic</a>
                            </div>
                            <div class="academic_content">
                                <div class="inner_content">
                                    <div class="experience_point_icon">
                                        <i class="fa fa-plus"></i>
                                    </div>
                                    <a href="#collapse1" data-toggle="collapse" class="secondary-txt">B.A. of marketing & e-commerce</a>
                                    <p id="collapse1">Sadat academy for management sciences</p>
                                </div>
                                <div class="inner_content">
                                    <div class="experience_point_icon">
                                        <i class="fa fa-plus"></i>
                                    </div>
                                    <h4 class="secondary-txt">Egyptian High School Diploma “Thanawya Ammaa”</h4>
                                    <p>Port Said Military High School</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6">
                            <div class="inner_section_heading">
                                <a href="#" class="hero_section_btn left-btn">Training</a>
                            </div>
                            <div class="training_content">
                                <div class="inner_content">
                                    <div class="experience_point_icon">
                                        <i class="fa fa-plus"></i>
                                    </div>
                                    <h4 class="secondary-txt">Filmmaking workshop with Sayed Badreya</h4>
                                    <p>Egypt Public Library</p>
                                </div>
                                <div class="inner_content">
                                    <div class="experience_point_icon">
                                        <i class="fa fa-plus"></i>
                                    </div>
                                    <h4 class="secondary-txt">Adobe Graphics course</h4>
                                    <p>Egyptian Applied Arts Union</p>
                                </div>
                                <div class="inner_content">
                                    <div class="experience_point_icon">
                                        <i class="fa fa-plus"></i>
                                    </div>
                                    <h4 class="secondary-txt">Cinematography workshop with Victor Credi</h4>
                                    <p>Cinepotion Film House</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php  
get_footer();
?>