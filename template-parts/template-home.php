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
$inspiration_img            =  get_field ('inspiration_img',get_queried_object_id());
$inspiration_title          =  get_field ('inspiration_title',get_queried_object_id());
$inspiration_author         =  get_field ('inspiration_author',get_queried_object_id());



$inspiration_2  = new WP_Query(array(
    'post_type'   => 'inspiration_2',
    'post_status' => 'publish'
))


?>
    <!-- Hero Section -->
    <section id="hero_section">
        <div class="right_social_icons pull-right">
            <div class="container">
                <ul class="hero_section_social_icons">
                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                    <li><a href="#"><i class="fa fa-behance"></i></a></li>
                    <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                    <li><a href="#"><i class="fa fa-vimeo"></i></a></li>                
                </ul>
            </div>
        </div>
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
     <div class="experience_main_section">        
                <div class="container">
                    <div class="row">
                        <div class="section_heading">
                        <img src="<?php  echo bloginfo('template_directory');  ?>/assets/images/icons/Asset 4-8.png" width="80" alt="<?php echo get_the_title(); ?>">
                        <h3><?php echo __('Experience') ?></h3>
                    </div>
                </div>
                <div class="experience_content">
                    <div class="row">
                        <div class="col-sm-12 col-md-6">
                            <div class="inner_section_heading">
                                <a href="" class="hero_section_btn left-btn">Work</a>
                            </div>
                            <div class="academic_content">
                                <div class="inner_content">
                                        <div class="education_point_icon">
                                            <i class="fa fa-plus"></i>
                                        <a href="#experience-collapse" data-toggle="collapse" data-target="#experience-collapse" class="secondary-txt">B.A. of marketing & e-commerce</h4>
                                        </div>
                                        <p id="experience-collapse" class="collapse hidden">Sadat academy for management sciences</p>
                                    </div>
                                    <div class="inner_content">
                                        <div class="experience_point_icon">
                                            <i class="fa fa-plus"></i>
                                        <a href="#experience-collapse0" data-toggle="collapse" data-target="#experience-collapse0" class="secondary-txt">B.A. of marketing & e-commerce</h4>
                                        </div>
                                        <p id="experience-collapse0" class="collapse hidden">Sadat academy for management sciences</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-6">
                            <div class="inner_section_heading">
                                <a href="#" class="hero_section_btn left-btn">Volunteering</a>
                            </div>
                            <div class="training_content">
                            <div class="inner_content">
                                    <div class="experience_point_icon">
                                        <i class="fa fa-plus"></i>
                                        <a href="#experience-collapse1" data-toggle="collapse" data-target="#experience-collapse1" class="secondary-txt">B.A. of marketing & e-commerce</h4>
                                    </div>
                                    <p id="experience-collapse1" class="collapse hidden">Sadat academy for management sciences</p>
                                </div>
                                <div class="inner_content">
                                    <div class="experience_point_icon">
                                        <i class="fa fa-plus"></i>
                                    <a href="#experience-collapse2" data-toggle="collapse" data-target="#experience-collapse2" class="secondary-txt">B.A. of marketing & e-commerce</h4>
                                    </div>
                                    <p id="experience-collapse2" class="collapse hidden">Sadat academy for management sciences</p>
                                </div>
                                <div class="inner_content">
                                    <div class="experience_point_icon">
                                        <i class="fa fa-plus"></i>
                                    <a href="#experience-collapse3" data-toggle="collapse" data-target="#experience-collapse3" class="secondary-txt">B.A. of marketing & e-commerce</h4>
                                    </div>
                                    <p id="experience-collapse3" class="collapse hidden">Sadat academy for management sciences</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


   <!-- <section id="inspiration_section">
        <div class="inspiration__main_section">
            <div class="section_main_heading">
                <div class="heading-icon">
                    <i class="fa fa-icon"></i>
                    <h3 class="secondary-txt"><?php echo __('Inspiration') ?></h3>
                </div>

                <div class="container inspiration_inner_content">
                    <div class="row inspiration_row_margin">
                        <?php while($inspiration_2->have_posts()): $inspiration_2->the_post();?>
                        <?php $inspiration_title                   =  get_field ('inspiration_title',get_the_ID());
                        ?>
                            <div class="inspiration_content">
                                <?php the_post_thumbnail('full',array('class'=>'img-fluid','alt'=>get_the_title())) ?>
                                <h3 class="secondary-txt"><?php echo $inspiration_title;  ?></h3>
                                <p><?php echo $inspiration_author; ?></p>
                            </div>                    
                        <?php endwhile; ?>
                    <!-- End Row -->
                    <!-- <div class="row inspiration_row_margin">
                        <div class="inspiration_content">
                            <img src="https://via.placeholder.com/350x150" alt="">
                            <h3 class="secondary-txt">Martin Scorsese</h3>
                            <p>Film Director</p>
                        </div>
                        <div class="inspiration_content">
                            <img src="https://via.placeholder.com/350x150" alt="">
                            <h3 class="secondary-txt">Martin Scorsese</h3>
                            <p>Film Director</p>
                        </div>
                        <div class="inspiration_content">
                            <img src="https://via.placeholder.com/350x150" alt="">
                            <h3 class="secondary-txt">Martin Scorsese</h3>
                            <p>Film Director</p>
                        </div>
                        <div class="inspiration_content">
                            <img src="https://via.placeholder.com/350x150" alt="">
                            <h3 class="secondary-txt">Martin Scorsese</h3>
                            <p>Film Director</p>
                        </div>
                        <div class="inspiration_content">
                            <img src="https://via.placeholder.com/350x150" alt="">
                            <h3 class="secondary-txt">Martin Scorsese</h3>
                            <p>Film Director</p>
                        </div>
                    </div>  -->
                </div>
            </div>

        </div>
        </div>
    </section> -->

    <?php get_footer(); ?>