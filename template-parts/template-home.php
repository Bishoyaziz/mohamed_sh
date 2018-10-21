<?php

/*
    Template Name: Home 

*/
get_header();

// Custom Fields
$home_image                 =  get_field ('home_image',get_queried_object_id());
$name                       =  get_field ('name:',get_queried_object_id());
$summary                    =  get_field ('summary',get_queried_object_id());
$controls_heading           =  get_field ('controls_heading',get_queried_object_id());
$left_button_text           =  get_field ('left_button_text',get_queried_object_id());
$left_button_link           =  get_field ('left_button_link',get_queried_object_id());
$right_button_text          =  get_field ('right_button_text',get_queried_object_id());
$right_button_link          =  get_field ('right_button_link',get_queried_object_id());
$social_icon                =  get_field ('social_icon',get_queried_object_id());
$social_link                =  get_field ('social_link',get_queried_object_id());
$social_link                =  get_field ('social_link',get_queried_object_id());

?>
    <!-- Hero Section -->
    <section id="hero_section">
        <div class="home__main_section">
            <div class="hero_section--main-heading">
                <div class="circle-img">
                    <img src="<?php echo $home_image['url'] ?>" alt="<?php echo $home_image['alt'] ?>">
                </div>
                <h3 class="primary-txt"><?php echo $name; ?></h3>
                <p class="secondary-txt">
                    <?php echo $summary; ?>
                </p>
            </div>
            <div class="hero_section--button">
                <p class="secondary-txt">
                    <?php echo $controls_heading; ?>
                </p>
                <div class="hero_section__btns">
                    <a href="<?php echo $left_button_link ?>" class="hero_section_btn left-btn"><?php echo $left_button_text; ?></a>
                    <a href="<?php echo $right_button_link ?>" class="hero_section_btn right-btn"><?php echo $right_button_text; ?></a>
                </div>
                <div class="social_icons">
                    <li><a href="<?php echo $social_link; ?>"><i class="fa fa-<?php echo $social_icon; ?>" aria-hidden="true"></i></a></li>
                    <li><a href="<?php echo $social_link; ?>"><i class="fa fa-<?php echo $social_icon; ?>" aria-hidden="true"></i></a></li>
                    <li><a href="<?php echo $social_link; ?>"><i class="fa fa-<?php echo $social_icon; ?>" aria-hidden="true"></i></a></li>
                    <li><a href="<?php echo $social_link; ?>"><i class="fa fa-<?php echo $social_icon; ?>" aria-hidden="true"></i></a></li>
                    <li><a href="<?php echo $social_link; ?>"><i class="fa fa-<?php echo $social_icon; ?>" aria-hidden="true"></i></a></li>
                    <li><a href="<?php echo $social_link; ?>"><i class="fa fa-<?php echo $social_icon; ?>" aria-hidden="true"></i></a></li>
                </div>
            </div>
        </div>
    </section>
    <!-- End Hero Section -->

    <section id="education">
        <div class="education_main_section">        
                <div class="container">
                    <div class="row">
                        <div class="section_heading">
                        <img src="<?php  echo bloginfo('template_directory');  ?>/assets/images/icons/Asset 3-8.png" width="80" alt="<?php echo get_the_title(); ?>">
                        <h3 class="secondary-txt"><?php echo __('Education') ?></h3>
                    </div>
                    </div>
                        <div class="education_content">
                    <div class="row">
                        <div class="col-sm-12 col-md-6">
                            <div class="inner_section_heading">
                                <a href="#" class="hero_section_btn left-btn">Academic</a>
                            </div>
                            <div class="academic_content">
                                <div class="inner_content">
                                    <div class="education_point_icon">
                                        <i class="fa fa-plus"></i>
                                    <a href="#education-collapse1" data-toggle="collapse" data-target="#education-collapse1" class="secondary-txt">B.A. of marketing & e-commerce</h4>
                                    </div>
                                    <p id="education-collapse1" class="collapse hidden">Sadat academy for management sciences</p>
                                </div>
                                <div class="inner_content">
                                    <div class="education_point_icon">
                                        <i class="fa fa-plus"></i>
                                    <a href="#education-collapse2" data-toggle="collapse" data-target="#education-collapse2" class="secondary-txt">B.A. of marketing & e-commerce</h4>
                                    </div>
                                    <p id="education-collapse2" class="collapse hidden">Sadat academy for management sciences</p>
                                </div>                               
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6">
                            <div class="inner_section_heading">
                                <a href="#" class="hero_section_btn left-btn">Training</a>
                            </div>
                            <div class="academic_content">
                                <div class="inner_content">
                                    <div class="education_point_icon">
                                        <i class="fa fa-plus"></i>
                                    <a href="#education-collapse3" data-toggle="collapse" data-target="#education-collapse3" class="secondary-txt">B.A. of marketing & e-commerce</h4>
                                    </div>
                                    <p id="education-collapse3" class="collapse hidden">Sadat academy for management sciences</p>
                                </div>
                                <div class="inner_content">
                                    <div class="education_point_icon">
                                        <i class="fa fa-plus"></i>
                                    <a href="#education-collapse4" data-toggle="collapse" data-target="#education-collapse4" class="secondary-txt">B.A. of marketing & e-commerce</h4>
                                    </div>
                                    <p id="education-collapse4" class="collapse hidden">Sadat academy for management sciences</p>
                                </div>                               
                            </div>
                        </div>
                    </div>  
                </div>
            </div>
        </div>
    </section>

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


    <?php get_footer(); ?>