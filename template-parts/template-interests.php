<?php
/*
    Template Name: Interests

*/

get_header();



$interests_2 = new WP_Query( array(
    'post_type'         => 'interests_2',
    'post_status'       => 'published',
));

?>

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
                            <p class="secondary-txt"><?php echo $interest_title; ?></p>                            
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

<?php  

get_footer();
?>
