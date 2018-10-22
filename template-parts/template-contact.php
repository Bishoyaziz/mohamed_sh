<?php
/*
    Template Name: Contact

*/

get_header();

?>

    <section id="contact">

        <div class="contact__main_section">
            <div class="container">
                <div class="row">
                    <div class="section_heading">
                        <img src="<?php  echo bloginfo('template_directory');  ?>/assets/images/icons/Asset 11-8.png" width="80" alt="<?php echo get_the_title(); ?>">
                        <h3><?php echo __('Contact') ?></h3>
                    </div>
                </div>
                <div class="row">
                    <div class="container">
                        <form>
                            <div class="form-group col-md-8">
                                <input type="name" class="form-control" id="name" placeholder="Name">
                            </div>
                            <div class="form-group col-md-8">
                                <input type="email" class="form-control" id="email" placeholder="Email">
                            </div>
                            <div class="form-group col-md-8">
                                <input type="phone" class="form-control" id="phone" placeholder="Phone No.">
                            </div>
                            <div class="form-group col-md-8">
                                <textarea class="contact-form-textarea" name="" id="" cols="30" rows="10" placeholder="Say Hi"></textarea>
                            </div>
                            <div class="send-btn text-center">
                                <button class="hero_section_btn" href="#">Send</button>
                            </div>
                    </form>
                </div>
            </div>
        </div>
        </div>
    </section>

    <?php  
get_footer();
?>