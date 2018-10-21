<?php
/*
    Template Name: Contact

*/

get_header();

?>

   <section id="hero_section">
        <div class="contact__main_section align-center">
            <div class="section_heading">
                <div class="heading-icon">
                    <i class="fa fa-icon"></i>
                    <h3 class="secondary-txt"><?php echo __("Let's Talk") ?></h3>
                </div>
            </div>
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
                <button class="hero_section_btn left-btn" href="#">Send</button>
                    </div>
                </form>
            </div>    
        </div>
    </section>


<?php  
get_footer();
?>
