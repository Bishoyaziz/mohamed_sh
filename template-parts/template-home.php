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

$choose_education_type      =  get_field ('choose_education_type',get_queried_object_id());

$education  = new WP_Query(array(
    'post_type'   => 'education',
    'post_status' => 'publish',
    'order'       => 'asc'
));

$experience  = new WP_Query(array(
    'post_type'   => 'experience',
    'post_status' => 'publish',
    'order'       => 'asc'
));

$interests_2 = new WP_Query( array(
    'post_type'   => 'interests_2',
    'post_status' => 'published',
    'order'       => 'asc'
));

$inspiration_2  = new WP_Query(array(
    'post_type'   => 'inspiration_2',
    'post_status' => 'publish'
));

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
                    <a href="<?php echo $left_button_link ?>" class="hero_section_btn left-btn">
                        <?php echo $left_button_text; ?>
                    </a>
                    <a href="<?php echo $right_button_link ?>" class="hero_section_btn right-btn">
                        <?php echo $right_button_text; ?>
                    </a>
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
                                <a href="#" class="hero_section_btn left-btn">
                                    <?php echo __('Academic'); ?>
                                </a>
                            </div>
                            <div class="section_content">

                                <?php while($education->have_posts()): $education->the_post(); ?>
                                    <?php
                                   $education_item_id               =  get_the_id();
                                   $education_title                 =  get_field ('education_title',get_the_id());
                                   $education_description           =  get_field ('education_description',get_the_id());
                                   $education_period_from           =  get_field ('education_period_from',get_the_id());
                                   $education_period_to             =  get_field ('education_period_to',get_the_id());
                                   $education_choose_education_type =  get_field ('education_choose_education_type',get_the_id());

                                   if($education_choose_education_type == 'academic') {

                               ?>

                                        <div class="inner_content">
                                            <div class="education_point_icon">
                                                <i class="fa fa-plus"></i>
                                                <a href="#id<?php echo $education_item_id; ?>" data-toggle="collapse" data-target="#id<?php echo $education_item_id; ?>" class="secondary-txt">
                                                    <?php echo $education_title; ?>
                                                </a>
                                            </div>
                                            <p id="id<?php echo $education_item_id; ?>" class="collapse hidden">
                                                <?php echo $education_description; ?>
                                            </p>
                                            <p>
                                                <?php echo $education_period_from; ?> -
                                                    <?php echo $education_period_to; ?>
                                            </p>
                                        </div>
                                        <?php } ?>
                                            <?php endwhile; ?>
                            </div>
                        </div>

                        <div class="col-sm-12 col-md-6">
                            <div class="inner_section_heading">
                                <a href="#" class="hero_section_btn left-btn">
                                    <?php echo __('Training'); ?>
                                </a>
                            </div>
                            <div class="section_content">

                                <?php while($education->have_posts()): $education->the_post(); ?>

                                    <?php
                                    $education_item_id               =  get_the_id();
                                    $education_title                 =  get_field ('education_title',get_the_id());
                                    $education_description           =  get_field ('education_description',get_the_id());
                                    $education_period_from           =  get_field ('education_period_from',get_the_id());
                                    $education_period_to             =  get_field ('education_period_to',get_the_id());
                                    $education_choose_education_type =  get_field ('education_choose_education_type',get_the_id());

                                    if($education_choose_education_type !== 'academic') {
                                ?>

                                        <div class="inner_content">
                                            <div class="education_point_icon">
                                                <i class="fa fa-plus"></i>
                                                <a href="#id<?php echo $education_item_id; ?>" data-toggle="collapse" data-target="#id<?php echo $education_item_id; ?>" class="secondary-txt">
                                                    <?php echo $education_title; ?>
                                                </a>
                                            </div>
                                            <p id="id<?php echo $education_item_id; ?>" class="collapse hidden">
                                                <?php echo $education_description; ?>
                                            </p>
                                            <p>
                                                <?php echo $education_period_from; ?> -
                                                    <?php echo $education_period_to; ?>
                                            </p>
                                        </div>

                                        <?php } ?>

                                            <?php endwhile; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <!-- <section id="experience">
        <div class="container">
            <div class="row">
                <div class="section_heading">
                    <img src="<?php  echo bloginfo('template_directory');  ?>/assets/images/icons/Asset 4-8.png" width="80" alt="<?php echo get_the_title(); ?>">
                    <h3><?php echo __('Experience') ?></h3>
                </div>
            </div>
            <div class="row experience_content">
                <div class="col-sm-12 col-md-6">
                    <div class="inner_section_heading">
                        <a href="" class="hero_section_btn left-btn">
                            <?php echo __('Work'); ?>
                        </a>
                    </div>
                    <div class="section_content">
                        <div class="inner_content">

                            <?php while($experience->have_posts()): $experience->the_post(); 
                                           $experience_item_id                =  get_the_id();
                                           $experience_company_name           =  get_field ('experience_company_name',get_the_id());
                                           $experience_address                =  get_field ('experience_address',get_the_id());
                                           $experience_job_title              =  get_field ('experience_job_title',get_the_id());
                                           $experience_from                   =  get_field ('experience_from',get_the_id());                                    
                                           $experience_to                     =  get_field ('experience_to',get_the_id());                                    
                                           $experience_responsbilities        =  get_field ('experience_responsbilities',get_the_id());                                    
                                           $experience_type                   =  get_field ('experience_type',get_the_id());

                                        if($experience_type == 'work') {
                                    ?>

                                <div class="experience_point_icon">
                                    <i class="fa fa-plus"></i>
                                    <a href="#id <?php echo $experience_item_id; ?>" data-toggle="collapse" data-target="#id<?php echo $experience_item_id ?>" class="secondary-txt">
                                        <?php echo $experience_company_name; ?>
                                            </h4>
                                </div>
                                        <p id="id<?php echo $experience_item_id ?>" class="collapse hidden">
                                            <?php echo $experience_address; ?>
                                        </p>
                                        <p>
                                            <?php echo $experience_from; ?> -
                                                <?php echo $experience_to; ?>
                                        </p>
                                        <?php if ($experience_responsbilities) { ?>
                                            <ul>
                                                <li>
                                                    <?php echo $experience_responsbilities; ?>
                                                </li>
                                            </ul>
                                            <?php } ?>
                                        </div>
                                        <?php } ?>
                                            <?php endwhile; ?>

                                <div class="col-sm-12 col-md-6">
                                    <div class="inner_section_heading">
                                        <a href="" class="hero_section_btn left-btn">
                                            <?php echo __('Volunteering'); ?>
                                        </a>
                                    </div>
                                    <div class="section_content">

                                        <div class="inner_content">

                                            <?php while($experience->have_posts()): $experience->the_post(); 
                                                        $experience_item_id                =  get_the_id();
                                                        $experience_company_name           =  get_field ('experience_company_name',get_the_id());
                                                        $experience_address                =  get_field ('experience_address',get_the_id());
                                                        $experience_job_title              =  get_field ('experience_job_title',get_the_id());
                                                        $experience_from                   =  get_field ('experience_from',get_the_id());                                    
                                                        $experience_to                     =  get_field ('experience_to',get_the_id());                                    
                                                        $experience_responsbilities        =  get_field ('experience_responsbilities',get_the_id());                                    
                                                        $experience_type                   =  get_field ('experience_type',get_the_id());

                                                        if($experience_type !== 'work') {
                                                ?>

                                                <div class="experience_point_icon">
                                                    <i class="fa fa-plus"></i>
                                                    <a href="#id <?php echo $experience_item_id; ?>" data-toggle="collapse" data-target="#id<?php echo $experience_item_id ?>" class="secondary-txt">
                                                        <?php echo $experience_company_name; ?>
                                                    </a>
                                                    <p id="id<?php echo $experience_item_id ?>" class="collapse hidden">
                                                        <?php echo $experience_address; ?>
                                                    </p>

                                                    <?php if ($experience_from != "" && $experience_to != "") { ?>
                                                        <p>
                                                            <?php echo $experience_from; ?> -
                                                                <?php echo $experience_to; ?>
                                                        </p>
                                                        <?php } ?>

                                                            <?php if ($experience_responsbilities) { ?>
                                                                <ul>
                                                                    <?php echo $experience_responsbilities; ?>
                                                                </ul>
                                                            <?php } ?>
                                                    </div>
                                                </div>
                                        <?php } ?>
                                            <?php endwhile; ?>
                                            

                                    </div>
                                </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->

    <section id="skills">
        <div class="skills_main_section">
            <div class="container">
                <div class="row">
                    <div class="section_heading">
                        <img src="<?php  echo bloginfo('template_directory');  ?>/assets/images/icons/Asset 5-8.png" width="80" alt="<?php echo get_the_title(); ?>">
                        <h3><?php echo __('Skills') ?></h3>
                    </div>
                </div>
                <div class="skills_content">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="inner_section_heading">
                                    <a href="" class="hero_section_btn left-btn">Graphics</a>
                                    <div class="skills_item_section">
                                        <div class="skills_item_inner_section">
                                            <span class="skills_title">Photoshop</span>
                                            <span class="skills_progress_bar"></span>
                                        </div>
                                        <div class="skills_item_inner_section">
                                            <span class="skills_title">Illustrator</span>
                                            <span class="skills_progress_bar"></span>
                                        </div>
                                        <div class="skills_item_inner_section">
                                            <span class="skills_title">InDesign</span>
                                            <span class="skills_progress_bar"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="inner_section_heading">
                                    <a href="" class="hero_section_btn left-btn">Motion Graphics</a>
                                    <div class="skills_item_section">
                                        <div class="skills_item_inner_section">
                                            <span class="skills_title">After Effects</span>
                                            <span class="skills_progress_bar"></span>
                                        </div>
                                        <div class="skills_item_inner_section">
                                            <span class="skills_title">Premiere</span>
                                            <span class="skills_progress_bar"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="inner_section_heading">
                                    <a href="" class="hero_section_btn left-btn">MS Office</a>
                                    <div class="skills_item_section">
                                        <div class="skills_item_inner_section">
                                            <span class="skills_title">MS Word</span>
                                            <span class="skills_progress_bar"></span>
                                        </div>
                                        <div class="skills_item_inner_section">
                                            <span class="skills_title">MS Office</span>
                                            <span class="skills_progress_bar"></span>
                                        </div>
                                        <div class="skills_item_inner_section">
                                            <span class="skills_title">MS Powerpoint</span>
                                            <span class="skills_progress_bar"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="inner_section_heading">
                                    <a href="" class="hero_section_btn left-btn">UI/UX</a>
                                    <div class="skills_item_section">
                                        <div class="skills_item_inner_section">
                                            <span class="skills_title">Adobe XD</span>
                                            <span class="skills_progress_bar"></span>
                                        </div>
                                        <div class="skills_item_inner_section">
                                            <span class="skills_title">Sketch</span>
                                            <span class="skills_progress_bar"></span>
                                        </div>
                                        <div class="skills_item_inner_section">
                                            <span class="skills_title">InVision</span>
                                            <span class="skills_progress_bar"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="inner_section_heading">
                                    <a href="" class="hero_section_btn left-btn">3D</a>
                                    <div class="skills_item_section">
                                        <div class="skills_item_inner_section">
                                            <span class="skills_title">Blender 3D</span>
                                            <span class="skills_progress_bar"></span>
                                        </div>
                                        <div class="skills_item_inner_section">
                                            <span class="skills_title">Dimention</span>
                                            <span class="skills_progress_bar"></span>
                                        </div>
                                        <div class="skills_item_inner_section">
                                            <span class="skills_title">Sketchup</span>
                                            <span class="skills_progress_bar"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="inner_section_heading">
                                    <a href="" class="hero_section_btn left-btn">DSLR Camera</a>
                                    <div class="skills_item_section">
                                        <div class="skills_item_inner_section">
                                            <span class="skills_title">Photography</span>
                                            <span class="skills_progress_bar"></span>
                                        </div>
                                        <div class="skills_item_inner_section">
                                            <span class="skills_title">Videography</span>
                                            <span class="skills_progress_bar"></span>
                                        </div>
                                        <div class="skills_item_inner_section">
                                            <span class="skills_title">Typography</span>
                                            <span class="skills_progress_bar"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
    </section>

    <section id="interests_section">
        <div class="contact_main_section">
            <div class="container">
                <div class="row">
                    <div class="section_heading">
                        <img src="<?php  echo bloginfo('template_directory');  ?>/assets/images/icons/Asset 7-8.png" width="80" alt="<?php echo get_the_title(); ?>">
                        <h3><?php echo __('Interests') ?></h3>
                    </div>
                </div>
                <div class="container interests-container">
                    <div class="row">
                        <?php while($interests_2-> have_posts()): $interests_2->the_post();?>
                            <?php 
                        $interest_title  =  get_field ('interest_title',get_the_ID());
                        $interest_img    =  get_field ('interest_img',get_the_ID());
                    ?>
                                <div class="col-md-3 interests_images">
                                    <img src="<?php echo $interest_img['url'] ?>" alt="<?php echo $interest_img['alt'] ?>">
                                    <p class="secondary-txt">
                                        <?php echo $interest_title; ?>
                                    </p>
                                </div>
                                <?php endwhile; ?>
                    </div>

                    <!-- <div class="row">
                    <div class="interests_images">
                        <img src="https://via.placeholder.com/200x200" alt="">
                        <p class="secondary-txt">Test</p>
                    </div>
                    <div class="interests_images">
                        <img src="https://via.placeholder.com/200x200" alt="">
                        <p class="secondary-txt">Test</p>
                    </div>
                </div> -->
                </div>
            </div>
    </section>

    <section id="inspiration_section">
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
                                        <p>
                                            <?php echo $inspiration_author; ?>
                                        </p>
                                </div>
                                <?php endwhile; ?>
                    </div>
                    <!-- End Row -->
                    <div class="row inspiration_row_margin">
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
                    </div>
                    <!-- End Row -->
                </div>
            </div>
        </div>
        </div>
    </section>

    <section id="hero_section">
        <div class="favorite-books__main_section align-center">
            <div class="section_heading">
                <div class="heading-icon">
                    <i class="fa fa-icon"></i>
                    <h3 class="secondary-txt"><?php echo __('Favorite Books') ?></h3>
                    <q> Books can be dangerous. The best ones should be labeled “This could change your life. </q>
                    <p>Helen Exley</p>
                </div>
            </div>
            <div class="container fav-books-container">
                <div class="row">
                    <div class="col-sm-12 col-md-4 fav_books_images">
                        <img src="https://via.placeholder.com/350x350" alt="">
                        <div class="overlay">
                            <div class="text align-center">Hello World</div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-4 fav_books_images">
                        <img src="https://via.placeholder.com/350x350" alt="">
                        <div class="overlay">
                            <div class="text align-center">Hello World</div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-4 fav_books_images">
                        <img src="https://via.placeholder.com/350x350" alt="">
                        <div class="overlay">
                            <div class="text align-center">Hello World</div>
                        </div>
                    </div>

                </div>
            </div>
    </section>

    <?php get_footer(); ?>