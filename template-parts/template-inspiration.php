<?php
/*
    Template Name: Inspiration

*/

get_header();

$inspiration_img                     =  get_field ('inspiration_img',get_queried_object_id());
$inspiration_title                   =  get_field ('inspiration_title',get_queried_object_id());
$inspiration_author                  =  get_field ('inspiration_author',get_queried_object_id());



$inspiration_2  = new WP_Query(array(
    'post_type'   => 'inspiration_2',
    'post_status' => 'publish'
))

?>

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
                                <p><?php echo $inspiration_author; ?></p>
                            </div>                    
                        <?php endwhile; ?>
                    </div>
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
                    </div> -->
                    <!-- End Row -->

                </div>
            </div>

        </div>
        </div>
    </section>

<?php  
get_footer();
?>

