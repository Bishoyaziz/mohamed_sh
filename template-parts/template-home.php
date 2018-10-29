<?php

/*
    Template Name: Home 

*/
get_header();

// Custom Fields
$home_image                         =  get_field ('home_image',get_the_id());
$name                               =  get_field ('name:',get_the_id());
$summary                            =  get_field ('summary',get_the_id());
$left_button_text                   =  get_field ('left_button_text',get_the_id());
$left_button_link                   =  get_field ('left_button_link',get_the_id());
$right_button_text                  =  get_field ('right_button_text',get_the_id());
$right_button_link                  =  get_field ('right_button_link',get_the_id());

$education_type                     =  get_field ('education_type',get_the_id());

// Contact Info
$contact_email                      =  get_field ('contact_email',16);
$contact_phone_1                    =  get_field ('contact_phone_1',16);
$contact_phone_2                    =  get_field ('contact_phone_2',16);

$barcode_image                      = get_field ('barcode_image',16);

// Education
$education  = new WP_Query(array(
    'post_type'   => 'education',
    'post_status' => 'publish',
    'order'       => 'asc'
));

// Experience
$experience  = new WP_Query(array(
    'post_type'   => 'experience',
    'post_status' => 'publish',
    'order'       => 'asc'
));

// Skills
$skills_2  = new WP_Query(array(
    'post_type'   => 'skills_2',
    'post_status' => 'publish',
    'order'       => 'asc'
));

// Interests
$interests_2 = new WP_Query( array(
    'post_type'   => 'interests_2',
    'post_status' => 'published',
    'order'       => 'asc'
));

// Inspiration
$inspiration_2  = new WP_Query(array(
    'post_type'   => 'inspiration_2',
    'post_status' => 'publish',
    'order'       => 'asc'
));

$favorite_books_2  = new WP_Query(array(
    'post_type'   => 'favorite_books_2',
    'post_status' => 'publish',
    'order'       => 'asc'
));
$social_media_2  = new WP_Query(array(
    'post_type'   => 'social_media_2',
    'post_status' => 'publish',
    'order'       => 'asc'
));

?>

    <div class="sidebar">
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="toggle-wrapper">
                <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="toggle-menu-icon"></span>
                    <span class="toggle-menu-icon"></span>
                    <span class="toggle-menu-icon"></span>
                </button>
            </div>
            <div id="navbarNavDropdown" class="sidebar-navbar-collapse collapse hidden">
                <div class="menu-item-wrapper">
                    <a href="#" class="menu-wrapper">
                        <div class="menu-item">
                            <img class="menu_icon" src="/mohamed_sh/wp-content/themes/mohamed_sh/assets/images/icons/Asset 2-8.png">
                        </div>
                    </a>
                    <a href="#" class="menu_txt">about</a>
                </div>
                <div class="menu-item-wrapper">
                    <a href="#education" class="menu-wrapper">
                        <div class="menu-item">
                            <img class="menu_icon" src="/mohamed_sh/wp-content/themes/mohamed_sh/assets/images/icons/Asset 3-8.png">
                        </div>
                    </a>
                    <a href="#education" class="menu_txt">education</a>
                </div>
                <div class="menu-item-wrapper">
                    <a href="#experience" class="menu-wrapper">
                        <div class="menu-item">
                            <img class="menu_icon" src="/mohamed_sh/wp-content/themes/mohamed_sh/assets/images/icons/Asset 4-8.png">
                        </div>
                    </a>
                    <a href="#experience" class="menu_txt">experience</a>
                </div>
                <div class="menu-item-wrapper">
                    <a href="#skills" class="menu-wrapper">
                        <div class="menu-item">
                            <img class="menu_icon" src="/mohamed_sh/wp-content/themes/mohamed_sh/assets/images/icons/Asset 5-8.png">
                        </div>
                    </a>
                    <a href="#skills" class="menu_txt">skills</a>
                </div>
                <div class="menu-item-wrapper">
                    <a href="#portfolio" class="menu-wrapper">
                        <div class="menu-item">
                            <img class="menu_icon" src="/mohamed_sh/wp-content/themes/mohamed_sh/assets/images/icons/Asset 6-8.png">
                        </div>
                    </a>
                    <a href="#portfolio" class="menu_txt">portfolio</a>
                </div>
                <div class="menu-item-wrapper">
                    <a href="#interests" class="menu-wrapper">
                        <div class="menu-item">
                            <img class="menu_icon" src="/mohamed_sh/wp-content/themes/mohamed_sh/assets/images/icons/Asset 7-8.png">
                        </div>
                    </a>
                    <a href="#interests" class="menu_txt">interests</a>
                </div>
                <div class="menu-item-wrapper">
                    <a href="#inspiration" class="menu-wrapper">
                        <div class="menu-item">
                            <img class="menu_icon" src="/mohamed_sh/wp-content/themes/mohamed_sh/assets/images/icons/Asset 8-8.png">
                        </div>
                    </a>
                    <a href="#inspiration" class="menu_txt">inspiration</a>
                </div>
                <div class="menu-item-wrapper">
                    <a href="#favorite_books" class="menu-wrapper">
                        <div class="menu-item">
                            <img class="menu_icon" src="/mohamed_sh/wp-content/themes/mohamed_sh/assets/images/icons/Asset 9-8.png">
                        </div>
                    </a>
                    <a href="#favorite_books" class="menu_txt">books</a>
                </div>
                <div class="menu-item-wrapper">
                    <a href="#contact" class="menu-wrapper">
                        <div class="menu-item">
                            <img class="menu_icon" src="/mohamed_sh/wp-content/themes/mohamed_sh/assets/images/icons/Asset 11-8.png">
                        </div>
                    </a>
                    <a href="#contact" class="menu_txt">let's talk</a>
                </div>
        </nav>
        </div>
        <!-- Hero Section -->
        <section id="hero_section">
            <div class="right_social_icons pull-right">
                <div class="container">
                    <ul class="hero_section_social_icons">
                        <?php while( $social_media_2->have_posts() ) : $social_media_2-> the_post();                
                        $social_media_title                 =  get_field ('social_media_title',get_the_id());
                        $social_media_link                  =  get_field ('social_media_link',get_the_id());
                        $social_media_icon                  =  get_field ('social_media_icon',get_the_id());
                    ?>
                            <li><a href="<?php echo $social_media_link ?>"><i class="fa fa-<?php echo $social_media_icon ?>"></i></a></li>
                            <?php endwhile; ?>
                    </ul>
                </div>
            </div>
            <div class="home__main_section">
                <div class="hero_section--main-heading">
                    <div class="circle-img">
                        <img src="<?php echo $home_image['url'] ?>" alt="<?php echo $home_image['alt'] ?>">
                    </div>
                    <h3 class="primary-txt wow fadeIn"><?php echo $name; ?></h3>
                    <p class="secondary-txt wow fadeIn" data-wow-delay="0.3s"">
                        <?php echo $summary; ?>
                    </p>
                </div>
                <div class="hero_section--button">
                    <div class="hero_section__btns wow fadeIn" data-wow-delay="0.5s">
                        <a href="" class="hero_section_btn wow fadeIn" data-toggle="modal" data-target="#videoResume">
                            <?php echo $left_button_text; ?>
                        </a>
                        <div class="modal fade" id="videoResume" tabindex="-1" role="dialog" aria-labelledby="videoResume">
                            <div class="modal-dialog modal-popup" role="document" id="videoResume">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <!-- <iframe id="ifram" width="700" height="315"  src="<?php echo $left_button_link ?>" frameborder="0" allowfullscreen></iframe>                                      -->
                                    </div>
                                </div>
                            </div>
                        </div>

                        <a target="_blank" href="<?php echo $right_button_link['url'] ?>" class="hero_section_btn wow fadeIn right-btn">
                            <?php echo $right_button_text; ?>
                        </a>
                    </div>

                </div>
            </div>
        </section>
        <!-- End Hero Section -->

        <section id="education">
            <div class="education_main_section">
                <div class="container">
                    <div class="row">
                        <div class="section_heading wow bounceIn">
                            <img src="<?php  echo bloginfo('template_directory');  ?>/assets/images/icons/icons blue-02.png" width="100" alt="<?php echo get_the_title(); ?>">
                            <h3><?php echo __('Education') ?></h3>
                        </div>
                    </div>
                    <div class="education_content">
                        <div class="row">

                            <div class="col-sm-12 col-md-6">
                                <div class="inner_section_heading wow fadeInLeft">
                                    <span class="hero_section_btn wow fadeIn">
                                    <?php echo __('Academic'); ?>
                                </span>
                                </div>
                                <div class="section_content">

                                    <?php while($education->have_posts()): $education->the_post(); ?>
                                        <?php
                                   $education_item_id               =  get_the_id();
                                   $education_title                 =  get_field ('education_title',get_the_id());
                                   $education_description           =  get_field ('education_description',get_the_id());
                                   $education_period_from           =  get_field ('education_period_from',get_the_id());
                                   $education_period_to             =  get_field ('education_period_to',get_the_id());
                                   $education_type                  =  get_field ('education_type',get_the_id());

                                   if($education_type == 'academic') {

                               ?>

                                            <div class="inner_content wow fadeInLeft">
                                                <div class="education_point_icon ">
                                                    <i class="fa fa-plus"></i>
                                                    <a href="#id<?php echo $education_item_id; ?>" data-toggle="collapse" data-target="#id<?php echo $education_item_id; ?>" class="secondary-txt">
                                                        <?php echo $education_title; ?>
                                                    </a>
                                                </div>
                                                <p id="id<?php echo $education_item_id; ?>" class="collapse show">
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
                                <div class="inner_section_heading wow fadeInRight">
                                    <span class="hero_section_btn wow fadeIn">
                                    <?php echo __('Training'); ?>
                                </span>
                                </div>
                                <div class="section_content">

                                    <?php while($education->have_posts()): $education->the_post(); ?>

                                        <?php
                                    $education_item_id               =  get_the_id();
                                    $education_title                 =  get_field ('education_title',get_the_id());
                                    $education_description           =  get_field ('education_description',get_the_id());
                                    $education_period_from           =  get_field ('education_period_from',get_the_id());
                                    $education_period_to             =  get_field ('education_period_to',get_the_id());
                                    $education_type                  =  get_field ('education_type',get_the_id());

                                    if($education_type !== 'academic') {
                                ?>

                                            <div class="inner_content wow fadeInRight">
                                                <div class="education_point_icon ">
                                                    <i class="fa fa-plus"></i>
                                                    <a href="#id<?php echo $education_item_id; ?>" data-toggle="collapse" data-target="#id<?php echo $education_item_id; ?>" class="secondary-txt">
                                                        <?php echo $education_title; ?>
                                                    </a>
                                                </div>
                                                <p id="id<?php echo $education_item_id; ?>" class="collapse show">
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

        <section id="experience">
            <div class="container">
                <div class="section_heading wow bounceIn">
                    <img src="<?php  echo bloginfo('template_directory');  ?>/assets/images/icons/icons blue-03.png" width="100" alt="<?php echo get_the_title(); ?>">
                    <h3 class="white"><?php echo __('Experience') ?></h3>
                </div>
                <div class="experience_content">

                    <div class="row">
                        <div class="col-sm-12 col-md-6">
                            <div class="inner_section_heading wow fadeInLeft">
                                <span class="hero_section_btn wow fadeInDown">
                                    <?php echo __('Work'); ?>
                                </span>
                            </div>

                            <div class="section_content">
                                <?php while($experience->have_posts()): $experience->the_post(); 
                                           $experience_item_id                =  get_the_id();
                                           $experience_company_name           =  get_field ('experience_company_name',get_the_id());
                                           $experience_address                =  get_field ('experience_address',get_the_id());
                                           $experience_inspiration_job_title              =  get_field ('experience_inspiration_job_title',get_the_id());
                                           $experience_from                   =  get_field ('experience_from',get_the_id());                                    
                                           $experience_to                     =  get_field ('experience_to',get_the_id());                                    
                                           $experience_responsbilities        =  get_field ('experience_responsbilities',get_the_id());                                    
                                           $experience_type                   =  get_field ('experience_type',get_the_id());

                                        if($experience_type == 'work') {
                                    ?>

                                    <div class="inner_content wow fadeInLeft">
                                        <div class="experience_point_icon">
                                            <i class="fa fa-plus"></i>
                                            <a href="#id<?php echo $experience_item_id; ?>" data-toggle="collapse" data-target="#id<?php echo $experience_item_id; ?>" class="secondary-txt">
                                                <?php echo $experience_company_name; ?>
                                            </a>
                                        </div>
                                        <div id="id<?php echo $experience_item_id; ?>" class="collapse show">
                                            <span><?php echo $experience_address; ?></span>
                                            <p>
                                                <?php echo $experience_inspiration_job_title; ?>
                                            </p>
                                        </div>
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
                                    <?php } ?>
                                        <?php endwhile; ?>
                            </div>
                        </div>

                        <div class="col-sm-12 col-md-6">
                            <div class="inner_section_heading wow bounceIn">
                                <span class="hero_section_btn wow fadeInRight">
                                <?php echo __('Volunteering'); ?>
                            </span>
                            </div>
                            <div class="section_content">

                                <?php while($experience->have_posts()): $experience->the_post(); 
                                           $experience_item_id                =  get_the_id();
                                           $experience_company_name           =  get_field ('experience_company_name',get_the_id());
                                           $experience_address                =  get_field ('experience_address',get_the_id());
                                           $experience_inspiration_job_title  =  get_field ('experience_inspiration_job_title',get_the_id());
                                           $experience_from                   =  get_field ('experience_from',get_the_id());                                    
                                           $experience_to                     =  get_field ('experience_to',get_the_id());                                    
                                           $experience_responsbilities        =  get_field ('experience_responsbilities',get_the_id());                                    
                                           $experience_type                   =  get_field ('experience_type',get_the_id());

                                        if($experience_type == 'volunteering') {
                                    ?>

                                    <div class="inner_content wow fadeInRight">
                                        <div class="education_point_icon">
                                            <i class="fa fa-plus"></i>
                                            <a href="#id<?php echo $experience_item_id; ?>" data-toggle="collapse" data-target="#id<?php echo $experience_item_id; ?>" class="secondary-txt">
                                                <?php echo $experience_company_name; ?>
                                            </a>
                                        </div>
                                        <div id="id<?php echo $experience_item_id; ?>" class="collapse show">
                                            <span><?php echo $experience_address; ?></span>
                                            <p>
                                                <?php echo $experience_inspiration_job_title; ?>
                                            </p>
                                        </div>
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

                                    <?php } ?>

                                        <?php endwhile; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>
    </section>

    <section id="skills">
        <div class="skills_main_section">
            <div class="container">
                <div class="row">
                    <div class="section_heading wow bounceIn">
                        <img src="<?php  echo bloginfo('template_directory');  ?>/assets/images/icons/icons blue-04.png" width="100" alt="<?php echo get_the_title(); ?>">
                        <h3><?php echo __('Skills') ?></h3>
                    </div>
                </div>
                <div class="skills_content">
                    <div class="container-fluid">
                        <div class="row">
                            <?php while($skills_2->have_posts()): $skills_2->the_post();
                                        $skill_category_name                =  get_field ('skill_category_name',get_the_id());
                                        $skill_1                           =  get_field ('skill_1',get_the_id());
                                        $skill_1_percentage                =  get_field ('skill_1_percentage',get_the_id());

                                        $skill_22                          =  get_field ('skill_22',get_the_id());
                                        $skill_2_percentage                =  get_field ('skill_2_percentage',get_the_id());

                                        $skill_3                           =  get_field ('skill_3',get_the_id());
                                        $skill_3_percentage                =  get_field ('skill_3_percentage',get_the_id());

                                        $skill_4                           =  get_field ('skill_4',get_the_id());
                                        $skill_4_percentage                =  get_field ('skill_4_percentage',get_the_id());

                                        $skill_5                           =  get_field ('skill_5',get_the_id());
                                        $skill_5_percentage                =  get_field ('skill_5_percentage',get_the_id());

                                        $skill_6                           =  get_field ('skill_6',get_the_id());
                                        $skill_6_percentage                =  get_field ('skill_6_percentage',get_the_id());

                                        $skill_7                           =  get_field ('skill_7',get_the_id());
                                        $skill_7_percentage                =  get_field ('skill_7_percentage',get_the_id());
                                    ?>
                                <div class="col-sm-4 skill_content_wrapper">

                                    <div class="inner_section_heading wow pulse">
                                        <span class="heading_btn hero_section_btn">
                                            <?php echo $skill_category_name; ?>
                                        </span>
                                        <div class="skills_item_section">
                                            <div class="skills_item_inner_section">
                                                <span class="skills_title"><?php echo $skill_1; ?> </span>
                                                <div class="progress">
                                                    <span style="width:<?php echo $skill_1_percentage; ?>" class="skills_progress_bar"></span>
                                                </div>
                                            </div>
                                            <div class="skills_item_inner_section">
                                                <span class="skills_title"><?php echo $skill_22; ?> </span>
                                                <div class="progress">
                                                    <span style="width:<?php echo $skill_2_percentage; ?>" class="skills_progress_bar"></span>
                                                </div>
                                            </div>

                                            <?php if($skill_3) { ?>
                                                <div class="skills_item_inner_section">
                                                    <span class="skills_title"><?php echo $skill_3; ?></span>
                                                    <div class="progress">
                                                        <span style="width:<?php echo $skill_3_percentage; ?>" class="skills_progress_bar"></span>
                                                    </div>
                                                </div>
                                                <?php } ?>

                                                <?php if($skill_4) { ?>
                                                    <div class="skills_item_inner_section">
                                                        <span class="skills_title"><?php echo $skill_4; ?></span>
                                                        <div class="progress">
                                                            <span style="width:<?php echo $skill_4_percentage; ?>" class="skills_progress_bar"></span>
                                                        </div>
                                                    </div>
                                                <?php } ?>
                                                    <?php if($skill_5) { ?>
                                                        <div class="skills_item_inner_section">
                                                            <span class="skills_title"><?php echo $skill_5; ?></span>
                                                            <div class="progress">
                                                                <span style="width:<?php echo $skill_5_percentage; ?>" class="skills_progress_bar"></span>
                                                            </div>
                                                        </div>
                                                        <?php } ?>
                                                            <?php if($skill_6) { ?>
                                                                <div class="skills_item_inner_section">
                                                                    <span class="skills_title"><?php echo $skill_6; ?></span>
                                                                    <div class="progress">
                                                                        <span style="width:<?php echo $skill_6_percentage; ?>" class="skills_progress_bar"></span>
                                                                    </div>
                                                                </div>
                                                    <?php } ?>
                                                        <?php if($skill_7) { ?>
                                                            <div class="skills_item_inner_section">
                                                                <span class="skills_title"><?php echo $skill_7; ?></span>
                                                                <div class="progress">
                                                                    <span style="width:<?php echo $skill_7_percentage; ?>" class="skills_progress_bar"></span>
                                                                </div>
                                                            </div>
                                                    <?php } ?>
                                        </div>
                                    </div>
                                </div>
                                <?php endwhile; ?>
                        </div>
                        <div class="language_section">
                            <div class="inner_section_heading wow fadeIn">
                                <a href="" class="heading_btn">
                                    <?php echo __('Language'); ?>
                                </a>
                            </div>
                            <div class="row">
                                <div class="col-sm-12 col-md-4 language_inner_section">
                                    <h2>Arabic</h2>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                </div>
                                <div class="col-sm-12 col-md-4 language_inner_section">
                                    <h2>English</h2>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star"></span>
                                </div>
                                <div class="col-sm-12 col-md-4 language_inner_section">
                                    <h2>French</h2>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>

    <section id="portfolio">
        <div class="section_heading wow bounceIn">
            <img src="<?php  echo bloginfo('template_directory');  ?>/assets/images/icons/icons blue-05.png" width="100" alt="<?php echo get_the_title(); ?>">
            <h3 class="white"><?php echo __('Portfolio') ?></h3>
        </div>
        <div class="container">
            <div class="row text-center">
                <div class="col-md-1">
                </div>
                <div class="col-md-10 mx-auto">

                    <?php 
             echo do_shortcode('[af-portfolio]');
        ?>
                </div>
                <div class="col-md-1">
                </div>
            </div>
        </div>
    </section>

    <section id="interests">
        <div class="container interests_main_section">
            <div class="row">
                <div class="section_heading wow bounceIn">
                    <img src="<?php  echo bloginfo('template_directory');  ?>/assets/images/icons/icons blue-06.png" width="100" alt="<?php echo get_the_title(); ?>">
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
                            <div class="col-md-4 interests_images">
                                <img class="wow bounceIn" src="<?php echo $interest_img['url'] ?>" alt="<?php echo $interest_img['alt'] ?>">
                                <div class="interests_txt">
                                    <p>
                                        <?php echo $interest_title; ?>
                                    </p>
                                </div>
                            </div>
                            <?php endwhile; ?>
                </div>
            </div>
    </section>

    <section id="inspiration">
        <div class="row">
            <div class="section_heading wow bounceIn">
                <img src="<?php  echo bloginfo('template_directory');  ?>/assets/images/icons/icons blue-07.png" width="100" alt="<?php echo get_the_title(); ?>">
                <h3 class="white"><?php echo __('Inspiration') ?></h3>
            </div>
        </div>
        <div class="container inspiration_inner_content">
            <div class="row inspiration_row_margin">
                <?php while( $inspiration_2->have_posts() ) : $inspiration_2 -> the_post(); 
                                $inspiration_img                    =  get_field ('inspiration_img',get_the_id());
                                $inspiration_name                   =  get_field ('inspiration_name',get_the_id());
                                $inspiration_job_title              =  get_field ('inspiration_job_title',get_the_id());                        
                            ?>

                    <div class="inspiration_content wow pulse">
                        <img src="<?php echo $inspiration_img['url'] ?>" alt="<?php get_the_title(); ?>">
                        <h3><?php echo $inspiration_name; ?></h3>
                        <p>
                            <?php echo $inspiration_job_title; ?>
                        </p>
                    </div>
                    <?php endwhile; ?>
            </div>
            <!-- End Row -->
        </div>
        </div>
        </div>
        </div>
    </section>

    <section id="favorite_books">
        <div class="favorite-books__main_section">
            <div class="container">
                <div class="row">
                    <div class="section_heading wow bounceIn">
                        <img src="<?php  echo bloginfo('template_directory');  ?>/assets/images/icons/icons blue-08.png" width="100" alt="<?php echo get_the_title(); ?>">
                        <h3><?php echo __('Favorite Books') ?></h3>
                        <q><?php  echo __('Books can be dangerous. The best ones should be labeled “This could change your life')?></q>
                        <p>
                            <?php  echo __('Helen Exley')?>
                        </p>
                    </div>
                </div>

                <div class="container fav-books-container">
                    <div class="row">
                        <?php while( $favorite_books_2->have_posts() ) : $favorite_books_2 -> the_post(); 
                            $book_image       =      get_field('book_image', get_the_id());                
                            $book_title       =      get_field('book_title', get_the_id());                            
                        ?>

                            <div class="col-sm-12 col-md-4 fav_books_images wow fadeIn">
                                <img src="<?php echo $book_image['url'] ?>" alt="<?php echo $book_title['alt'] ?>">
                                <div class="overlay">
                                    <div class="text align-center">
                                        <?php echo $book_title; ?>
                                    </div>
                                </div>
                            </div>
                            <?php endwhile; ?>
                    </div>
                </div>
            </div>
    </section>

    <section id="contact">
        <div class="contact__main_section">
            <div class="container">
                <div class="row">
                    <div class="section_heading wow bounceIn">
                        <img src="<?php  echo bloginfo('template_directory');  ?>/assets/images/icons/icons blue-09.png" width="100" alt="<?php echo get_the_title(); ?>">
                        <h3 class="white"><?php echo __("Let's Talk") ?></h3>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-md-7 wow fadeInLeft">
                            <?php 
                            if(ICL_LANGUAGE_CODE=='en'){
                                echo do_shortcode('[contact-form-7 id="55" title="Contact form 1"]');
                            }else {
                                echo do_shortcode('[contact-form-7 id="55" title="Contact form 1"]'); 
                            }
                            ?>
                        </div>
                        <div class="col-md-1"></div>
                        <div class="col-md-4 contact_info_wrapper wow fadeInRight">
                            <div class="contact_info ">
                                <span class="heading_btn"><?php echo __('Contact info') ?></span>
                            </div>
                            <div class="contact_info_details">
                                <p><span>Email: </span>
                                    <?php echo $contact_email ?>
                                </p>
                                <p><span>UAE: </span>
                                    <?php echo $contact_phone_1 ?>
                                </p>
                                <p><span>Egypt: </span>
                                    <?php echo $contact_phone_2 ?>
                                </p>
                            </div>
                            <div class="scanner ">
                                <div class="barcode_txt">
                                    <span class="barcode_txt--first-line">Save my contact</span>
                                    <span>card on your phone</span>
                                </div>
                                <img src="<?php echo $barcode_image['url'] ?>" alt="<?php echo $barcode_image['alt'] ?> ">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php get_footer(); ?>