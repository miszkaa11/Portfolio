<?php

?>

<section id="gallery-template-1" class="gallery-template-1">
    <div class="container-md">
        <div class="section-title__content d-flex-column t-p-1">
            <div class="section-title__inner t-center">
                <a href="<?php the_field('template_anchor'); ?>" class="template__link f-style-primary f-heading-l c-primary" data-aos="zoom-in"><?php the_field('template_title'); ?></a>
                <h3 class="section-subtitle__heading f-style-primary f-heading-m c-secondary" data-aos="zoom-in">Some informations about project</h3>
            </div>
            <div class="welcome-info-cta d-flex-center" data-aos="zoom-in">
                <a href="/portfolio/#work-gallery" class="arrow-box"><i class="fa-solid fa-backward-step fa-2x"></i></a>
            </div>
        </div>
        <div class="gallery-template-1__content">
            <div class="gallery-template-1-header d-flex-around">
                <div class="customer">
                    <h3 class="gallery-template-1__heading f-style-primary f-heading-m c-primary" data-aos="zoom-in">Customer:</h3>
                    <p class="gallery-template-1__paragraph f-style-primary f-text c-secondary"><?php the_field('template_customer'); ?></p>
                </div>
                <div class="date">
                    <h3 class="gallery-template-1__heading f-style-primary f-heading-m c-primary" data-aos="zoom-in">Date:</h3>
                    <p class="gallery-template-1__paragraph f-style-primary f-text c-secondary"><?php the_field('template_date'); ?></p>
                </div>
                <div class="task">
                    <h3 class="gallery-template-1__heading f-style-primary f-heading-m c-primary" data-aos="zoom-in">Task:</h3>
                    <p class="gallery-template-1__paragraph f-style-primary f-text c-secondary"><?php the_field('template_task'); ?></p>
                </div>
            </div>

            <div class="options" data-aos="zoom-in">
                <div class="option active" style="--optionBackground: url(<?php the_field('template_gallery_image_1'); ?>);">
                    <div class="label">
                        <div class="icon">
                            <i class="fa-solid fa-desktop"></i>
                        </div>
                        <div class="info">
                            <div class="main"><?php the_field('template_gallery_info_1'); ?></div>
                        </div>
                    </div>
                </div>
                <div class="option" style="--optionBackground: url(<?php the_field('template_gallery_image_2'); ?>);">
                    <div class="label">
                        <div class="icon">
                            <i class="fa-solid fa-desktop"></i>
                        </div>
                        <div class="info">
                            <div class="main"><?php the_field('template_gallery_info_2'); ?></div>
                        </div>
                    </div>
                </div>
                <div class="option" style="--optionBackground: url(<?php the_field('template_gallery_image_3'); ?>);">
                    <div class="label">
                        <div class="icon">
                            <i class="fa-solid fa-desktop"></i>
                        </div>
                        <div class="info">
                            <div class="main"><?php the_field('template_gallery_info_3'); ?></div>
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