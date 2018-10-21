<?php
/*
    Template Name: Favorite Books

*/

get_header();

?>
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
        <?php  
get_footer();
?>