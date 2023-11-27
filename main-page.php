<?php 
    /* 
    Template Name:
        Main Page
    */
?>

<?php
    get_header();
?>

<!-- Welcome Info -->

<section id="welcome-info" class="welcome-info">
    <div class="container-md-v">
        <div class="welcome-info__content d-flex-column s-p-1">
            <div class="welcome-info__inner t-center">
                <h1 class="welcome-info__paragraph f-style-primary f-heading-xl c-primary" data-aos="zoom-in">Hi!</h1>
                <h1 class="welcome-info__paragraph f-style-primary f-heading-xl c-primary" data-aos="zoom-in">I'm Michał</h1>
                <h1 class="welcome-info__paragraph f-style-primary f-heading-xl c-optional-2" data-aos="zoom-in">Front-End Developer</h1>
            </div>
            <div class="welcome-info-cta d-flex-center" data-aos="zoom-in">
                <a href="/portfolio/#about-me" class="arrow-box"><i class="fas fa-arrow-down fa-2x"></i></a>
            </div>
        </div>
    </div>
</section>

<!-- About Me -->

<section id="about-me" class="about-me">
    <div class="container-md">
        <div class="section-title__content d-flex-column t-p-1">
            <div class="section-title__inner t-center">
                <h2 class="section-title__heading f-style-primary f-heading-l c-primary" data-aos="zoom-in">.aboutMe</h2>
                <h3 class="section-subtitle__heading f-style-primary f-heading-m c-secondary" data-aos="zoom-in">Some informations about me</h3>
            </div>
            <div class="welcome-info-cta d-flex-center" data-aos="zoom-in">
                <a href="/portfolio/#work-gallery" class="arrow-box"><i class="fas fa-arrow-down fa-2x"></i></a>
            </div>
        </div>
        <div class="about-me__content d-flex-between s-p-1">
            <div class="about-me__inner flex-40">
                <img src="/portfolio/wp-content/uploads/2023/11/about_me_image.webp" alt="Picture Of Me" class="section__image" data-aos="zoom-in">
            </div>
            <div class="about-me__inner flex-55">
                <h3 class="about-me__heading f-style-primary f-heading-m c-primary" data-aos="zoom-in">Hi!</h3>
                <p class="about-me__paragraph f-style-primary f-text c-secondary" data-aos="zoom-in">I am designing and creating websites.</p>
                <p class="about-me__paragraph f-style-primary f-text c-secondary" data-aos="zoom-in">It all started a few years ago when I begun with writing code and creating websites as freelancer.</p>
                <p class="about-me__paragraph f-style-primary f-text c-secondary" data-aos="zoom-in">Currently I'm working as a freelancer on projects in cooperation with programmers and graphic designers. I have also completed several projects based on Wordpress technology and projects written in pure programming languages.</p>
                <p class="about-me__paragraph f-style-primary f-text c-secondary" data-aos="zoom-in">I am part of the creative team of Freshcodeee. At the moment I am expanding my knowledge with new tools like mobile applications and I also started learning React.js.</p>
                <p class="about-me__paragraph f-style-primary f-text c-secondary" data-aos="zoom-in">Except of programming I enjoy playing drums and this is a constant part of my life. I love funk, jazz and salsa!</p>
            </div>
        </div>
    </div>
</section>

<!-- Work & Projects -->

<section id="work-gallery" class="work-gallery">
    <div class="container-md">
        <div class="section-title__content d-flex-column">
            <div class="section-title__inner t-center">
                <h2 class="section-title__heading f-style-primary f-heading-l c-primary" data-aos="zoom-in">.workAndProjects</h2>
                <h3 class="section-subtitle__heading f-style-primary f-heading-m c-secondary" data-aos="zoom-in">Commercial projects</h3>
            </div>
            <div class="welcome-info-cta d-flex-center" data-aos="zoom-in">
                <a href="/portfolio/#skills" class="arrow-box"><i class="fas fa-arrow-down fa-2x"></i></a>
            </div>
        </div>
        <div class="work-gallery__content s-p-1">

            <?php
                $work_gallery_posts = get_posts(array(
                    'category_name' => 'Projekty',
                    'posts_per_page'    => -1
                ));

                foreach($work_gallery_posts as $post):
                    setup_postdata($post);

                    work_gallery_render_post($post);

                endforeach;
                wp_reset_postdata();
            ?>

        </div>
    </div>
</section>

<!-- Skills -->

<section id="skills" class="skills">
    <div class="container-md">
        <div class="section-title__content d-flex-column">
            <div class="section-title__inner t-center">
                <h2 class="section-title__heading f-style-primary f-heading-l c-primary" data-aos="zoom-in">.mySkills</h2>
                <h3 class="section-subtitle__heading f-style-primary f-heading-m c-secondary" data-aos="zoom-in">Tools and technologies</h3>
            </div>
            <div class="welcome-info-cta d-flex-center" data-aos="zoom-in">
                <a href="/portfolio/#cv-zone" class="arrow-box"><i class="fas fa-arrow-down fa-2x"></i></a>
            </div>
        </div>
        <div class="skills__content d-flex-between s-p-1">
            <div class="skill-example" data-aos="zoom-in">
                <i class="fab fa-js-square fa-9x"></i>
            </div>
            <div class="skill-example" data-aos="zoom-in">
                <i class="fab fa-react fa-9x"></i>
            </div>
            <div class="skill-example" data-aos="zoom-in">
                <i class="fab fa-html5 fa-9x"></i>
            </div>
            <div class="skill-example" data-aos="zoom-in">
                <i class="fab fa-css3-alt fa-9x"></i>
            </div>
            <div class="skill-example" data-aos="zoom-in">
                <i class="fab fa-wordpress fa-9x"></i>
            </div>
            <div class="skill-example" data-aos="zoom-in">
                <i class="fab fa-git fa-9x"></i>
            </div>
        </div>
    </div>
</section>

<!-- CV Zone -->

<section id="cv-zone" class="cv-zone">
    <div class="container-md">
        <div class="section-title__content d-flex-column">
            <div class="section-title__inner t-center">
                <h2 class="section-title__heading f-style-primary f-heading-l c-primary" data-aos="zoom-in">.cvZone</h2>
                <h3 class="section-subtitle__heading f-style-primary f-heading-m c-secondary" data-aos="zoom-in">Commercial experience</h3>
            </div>
            <div class="welcome-info-cta d-flex-center" data-aos="zoom-in">
                <a href="/portfolio/#ask-me" class="arrow-box"><i class="fas fa-arrow-down fa-2x"></i></a>
            </div>
        </div>
        <div class="cv-zone__content d-flex-center s-p-1">
            <div class="cv-zone-download" data-aos="zoom-in">
                <a href="<?php the_field('cv_zone_download'); ?>" class="cv-zone__link f-style-primary f-text c-secondary"><i class="fa-solid fa-file-import fa-6x"></i>Download WebDev CV</a>
            </div>
            <div class="cv-zone-page" data-aos="zoom-in">
                <a href="/portfolio/cv/" class="cv-zone__link f-style-primary f-text c-secondary"><i class="fa-solid fa-file-code fa-6x"></i>WebDev CV Page</a>
            </div>
        </div>
    </div>
</section>

<!-- Ask Me -->

<section id="ask-me" class="ask-me">
    <div class="container-md">
        <div class="section-title__content d-flex-column s-p-1">
            <div class="section-title__inner t-center">
                <h2 class="section-title__heading f-style-primary f-heading-l c-primary">.askMe</h2>
                <h3 class="section-subtitle__heading f-style-primary f-heading-m c-secondary">Find me and ask on social media</h3>
            </div>
            <div class="welcome-info-cta d-flex-center">
                <a href="/portfolio/#footer" class="arrow-box"><i class="fas fa-arrow-down fa-2x"></i></a>
            </div>
        </div>
        <div class="ask-me__content d-flex-between s-p-1">
            <div class="ask-me-contact flex-55">
                <h2 class="contact__heading f-style-primary f-heading-m c-secondary"><i class="fa-regular fa-message"></i> If you would like to contact me, please use the contact form</h2>
                <h2 class="contact__heading f-style-primary f-heading-m c-secondary"><i class="fa-regular fa-message"></i> or directly my social media account</h2>
            </div>
            <div class="ask-me-form flex-40">
                <?php echo do_shortcode('[contact-form-7 id="a75c5b4" title="portfolio"]'); ?>
            </div>
        </div>
    </div>
</section>

<?php
    get_footer();
?>