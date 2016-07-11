<!-- TEMPLATE FOR THE WORK PAGE -->
<?php
/**
 * Template Name: Portfolio Work Page
 * Description: Work page for Ryan's Portfolio
 *
 */
?>

<?php get_template_part('templates/header'); ?>

<main class="body__work">
    <section class="project project--visual-quiz">
        <div class="project__container">
            <a href="http://lemonly.com/visual-quiz/" target="_blank"><img class="project__img" src="img/visual-quiz.png" srcset="img/visual-quiz.png 1x, img/visual-quiz_2x.png 2x" alt="Visual Quiz example img"/></a>
            <h3>Lemonly's Visual Quiz</h3>
            <p class="subtitle">Web Animation/UX/Interactive</p>
            <p class="description">The Visual Quiz is used by Lemonly to determine what services potential clients are interested in. It was designed by Ashton Dockendorf. I built the site, including logic engine and animation.</p>
        </div>
    </section>
    <section class="project project--map">
        <div class="project__container">
            <a href="http://kochhazard.com/interactive-map/index.html" target="_blank"><img class="project__img" src="img/map.png" srcset="img/map.png 1x, img/map_2x.png 2x" alt="Interactive Map example img"/></a>
            <h3>Koch Hazard Interactive Map</h3>
            <p class="subtitle">UX/Interactive</p>
            <p class="description">This is a draggable interactive map developed to give information on Koch Hazard’s current and past projects. It was designed by Ashton Dockendorf and built by myself.</p>
        </div>
    </section>
    <section class="project project--codepen">
        <img class="arrow arrow--left pen__arrow--left" src="img/arrow.svg"/>
        <img class="arrow arrow--right pen__arrow--right" src="img/arrow.svg"/>
        <div class="project__container">
            <div class="codepen-container codepen--movie">
                <div class="pen">
                    <p data-height="452" data-theme-id="dark" data-slug-hash="vNdgZZ" data-default-tab="result" data-user="LeKohrs" data-embed-version="2" class="codepen">See the Pen <a href="http://codepen.io/LeKohrs/pen/vNdgZZ/" target="_blank">Fort Lauderdale - Cinema Paradiso</a> by Ryan Leichliter (<a href="http://codepen.io/LeKohrs">@LeKohrs</a>) on <a href="http://codepen.io">CodePen</a>.</p>
                    <script async src="//assets.codepen.io/assets/embed/ei.js"></script>
                </div>
                <h3>Movie Goer</h3>
                <p class="subtitle">Greensock/SVG/Character Animation/Web Animation</p>
                <p class="description">Movie Goer is an example of character animation for an interactive infographic. It is an SVG image animated using Greensock/JS. Designed by Kiel Mutschelknaus</p>
            </div>
            <div class="codepen-container codepen--haunted">
                <div class="pen">
                    <p data-height="452" data-theme-id="dark" data-slug-hash="Lpdvvd" data-default-tab="result" data-user="LeKohrs" data-embed-version="2" class="codepen">See the Pen <a href="http://codepen.io/LeKohrs/pen/Lpdvvd/" target="_blank">Spellbound Tours - Salem</a> by Ryan Leichliter (<a href="http://codepen.io/LeKohrs">@LeKohrs</a>) on <a href="http://codepen.io">CodePen</a>.</p>
                    <script async src="//assets.codepen.io/assets/embed/ei.js"></script>
                </div>
                <h3>Haunted House</h3>
                <p class="subtitle">Greensock/SVG/Web Animation</p>
                <p class="description">Haunted House is an example of an animation for an interactive infographic. It is an SVG image animated using Greensock/JS. Designed by Chris Biewer</p>
            </div>
        </div>
    </section>
    <section class="project project--gif">
        <img class="arrow gif__arrow--left" src="img/arrow.svg"/>
        <img class="arrow gif__arrow--right" src="img/arrow.svg"/>
        <div class="project__container">
            <div class="gif-container gif--friends">
                <img class="gif" src="img/friends.gif" alt="friends on social media gif"/>
                <h3>Friends</h3>
                <p class="description">A gif I animated using After Effects for Lemonly’s Instagram feed. Designed by Alyssa McDowell</p>
            </div>
            <div class="gif-container gif--euro">
                <img class="gif" src="img/euro_languages.gif" alt="Number of languages people speak in europe"/>
                <h3>Europeans and their languages</h3>
                <p class="description">A gif I animated using After Effects for Lemonly’s Instagram feed. Designed by Alyssa McDowell</p>
            </div>
            <div class="gif-container gif--most-used">
                <img class="gif" src="img/most_used_apps.gif" alt="Most used apps on Itunes belong to two companies"/>
                <h3>Top Apps</h3>
                <p class="description">A gif I animated using After Effects for Lemonly’s Instagram feed. Designed by Alyssa McDowell</p>
            </div>
        </div>
    </section>
</main>

<?php get_template_part('templates/footer'); ?>