<!-- TEMPLATE FOR THE FRONT PAGE -->
<?php
/**
 * Template Name: Portfolio Home Page
 * Description: Home page for Ryan's Portfolio
 *
 */
?>

<?php get_template_part('templates/header'); ?>

<main class="body__main">
    <object class="pronunciation" type="image/svg+xml" data="<?php echo get_template_directory_uri(); ?>/img/pronuciation.svg"></object>
    <section class="intro">
        <div class="intro__title">
            <h1>Ryan Leichliter</h1>
            <h2>Web Development <span>|</span> Animation</h2>
            <p>I’m a web developer and animator from Omaha, NE. I have a passion for animation and love the challenge of making web animation functional as well as fun.</p>
        </div>
    </section>
    <section class="build">
        <div class="header header--build">
            <object class="build__icons" type="image/svg+xml" data="<?php echo get_template_directory_uri(); ?>/img/icons-build.svg"></object>
            <h3>Build it.</h3>
        </div>
        <p>I excel at taking designs and making them look good on the web on multiple platforms for the latest technologies.</p>
    </section>
    <section class="move">
        <div class="header header--move">
            <h3>Move it.</h3>
            <object class="move__icons" type="image/svg+xml" data="<?php echo get_template_directory_uri(); ?>/img/icons-move.svg"></object>
        </div>
        <p>My real passion is adding movement to your web experience either through gif or javascript. I excel at anything from character animation to functional informative UX. I also love to create gifs to enhance the experience of your website or help boost your social media presence.</p>
    </section>
    <section class="work">
        <div class="header header--work">
            <object class="work__icons" type="image/svg+xml" data="<?php echo get_template_directory_uri(); ?>/img/icons-work.svg"></object>
            <h3>Work it.</h3>
        </div>
        <p>I’m currently available for hire. If you need to talk about anything Web / Animation / Geek drop me a line. Or just press this button.</p>
        <img class="arrow arrow--down" src="<?php echo get_template_directory_uri(); ?>/img/arrow.svg"/>
        <a href="mailto:ryan.leichliter@icloud.com?Subject=I%20am%20interested%20in%20hiring%20you!"><img class="email email--alt" src="<?php echo get_template_directory_uri(); ?>/img/button-email.svg"/></a>
    </section>
</main>

<?php get_template_part('templates/footer'); ?>