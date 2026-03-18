<?php
/**
 * Project Section Block Template
 *
 * Uses ACF repeater fields: project_name, hover_image, project_link
 */

$projects = get_field('projects'); // returns an array of all projects

if ($projects): ?>
    <section class="projects-section u-section u-zindex-8" style="background-color: #fff; margin-bottom:60px;">
        <div class="project-section-inner w-flex u-flex-column u-container" style="gap: 140px;">

            <div class="heading-prjct w-flex u-justify-center u-align-center u-text-align-center">
                <h1 class="global-h1" style="color: #000;">Our projects</h1>
            </div>

            <div class="prjct-main">
                <?php foreach ($projects as $project):

                    $name = $project['project_name'] ?? '';
                    $image = $project['hover_image'] ?? null;
                    $link = $project['project_link'] ?? '';
                    $country = $project['project_country'] ?? '';
                    $img_url = $image ? $image['url'] : '';


                    ?>
                    <a href="<?php echo esc_url($link); ?>">
                        <div
                            class="my-prjcts w-flex u-flex-row u-justify-between u-align-center u-flex-column-m u-align-start-m u-gap-6">
                            <div class="myprjcts-left u-gap-5 w-flex u-flex-column">
                                <h2 class="global-h3"><?php echo esc_html($name); ?></h2>
                                <?php if ($country): ?>
                                    <p class="project-country global-text"><?php echo esc_html($country); ?></p>
                                <?php endif; ?>
                            </div>
                            <?php if ($img_url): ?>
                                <img class="prjct-img" src="<?php echo esc_url($img_url); ?>" alt="<?php echo esc_attr($name); ?>">
                            <?php endif; ?>
                            <div class="my-prjcts-right">
                                <i class="fa-solid fa-arrow-down fa-rotate-by fa-xs"
                                    style="color: #000000; font-size: 30px; --fa-rotate-angle: 220deg;"></i>
                            </div>
                        </div>
                    </a>

                <?php endforeach; ?>
            </div>

        </div>
    </section>
<?php endif; ?>

<style>
    .global-h3,
    .global-text {
        color: #959595;
        transition: color 0.3s ease;
        /* Add smooth transition */
    }

    /* Change color when parent div is hovered */
    .my-prjcts:hover .global-h3,
    .my-prjcts:hover .global-text {
        color: #000000;
    }

    .projects-section {
        padding: 65px 20px;
    }

    .my-prjcts {
        border-top: 1px solid rgba(149, 149, 149, 0.5);
        /* 50% opacity */
        border-bottom: 1px solid rgba(149, 149, 149, 0.5);
        /* 50% opacity */
        border-left: none;
        border-right: none;
        padding: 50px 0px;
    }

    .prjct-img {
        width: 100%;
        max-width: 500px;
        height: 350px;
        object-fit: cover;
    }

    @media (max-width: 1024px) {

        .prjct-img {
            max-width: 300px;
            height: 300px;
        }
    }

    @media (max-width: 767px) {
        .prjct-img {
            max-width: 200px !important;
            height: 200px !important;
            left: 80% !important;
        }
    }

    .projects-section {
        position: relative;
        overflow: visible;
        /* Important: allow content to overflow */
    }

    .my-prjcts {
        position: relative;
        z-index: 2;
        cursor: pointer;
    }

    /* Image positioned absolutely within the section */
    .prjct-img {
        position: absolute;
        top: 50%;
        left: 70%;
        transform: translate(-50%, -50%) scale(0.95);
        width: 100%;
        max-width: 500px;
        height: 350px;
        max-height: 700px;
        object-fit: cover;
        opacity: 0;
        pointer-events: none;
        z-index: 20;
        transition: all 0.6s cubic-bezier(0.34, 1.56, 0.64, 1);
        visibility: hidden;
        box-shadow: 0 20px 60px rgba(0, 0, 0, 0.3);
    }

    .my-prjcts:hover .prjct-img {
        opacity: 1;
        transform: translate(-50%, -50%) scale(1);
        visibility: visible;
    }

    .projects-section::before {
        content: '';
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        max-width: 500px;
        height: 350px;
        background: rgba(0, 0, 0, 0.5);
        opacity: 0;
        pointer-events: none;
        z-index: 15;
        transition: opacity 0.3s ease;
    }

    .my-prjcts:hover~.projects-section::before,
    .my-prjcts:hover .prjct-img+.projects-section::before {
        opacity: 1;
    }

    /* The color overlay that will grow from bottom */
    .my-prjcts::before {
        content: '';
        position: absolute;
        bottom: 0;
        left: 0;
        width: 100%;
        height: 0;
        /* Start with 0 height */
        background: rgba(128, 128, 128, 0.1);
        /* Very subtle gray */
        /* Your color */
        z-index: 0;
        transition: height 0.5s cubic-bezier(0.4, 0, 0.2, 1);
        transform-origin: bottom;
        /* Makes it grow from bottom */
    }

    /* On hover, fill from bottom to top */
    .my-prjcts:hover::before {
        height: 100%;
        /* Grows to full height */
    }

    /* Ensure text stays above the overlay */
    .myprjcts-left,
    .my-prjcts-right {
        position: relative;
        z-index: 1;
    }

    /* Heading styling */
    /* Base state for both elements */
    .myprjcts-left .global-h3,
    .project-country {
        display: inline-block;
        transform: translateX(0);
        transition: transform 0.35s cubic-bezier(0.4, 0, 0.2, 1);
        -webkit-transition: -webkit-transform 0.35s cubic-bezier(0.4, 0, 0.2, 1);
        -moz-transition: transform 0.35s cubic-bezier(0.4, 0, 0.2, 1);
    }

    /* Hover state for both elements - CORRECTED */
    .my-prjcts:hover .myprjcts-left .global-h3,
    .my-prjcts:hover .project-country {
        transform: translateX(20px);
    }

    @media (min-width:768px) {
        .my-prjcts-right .fa-solid {
            transition: transform 0.4s cubic-bezier(0.4, 0, 0.2, 1);
        }

        .my-prjcts:hover .my-prjcts-right .fa-solid {
            transform: rotate(45deg);
            /* Adjust angle as needed */
        }
    }

    @media (max-width:767px) {
        .my-prjcts-right .fa-solid {
            transition: transform 0.4s cubic-bezier(0.4, 0, 0.2, 1);
        }

        .my-prjcts:hover .my-prjcts-right .fa-solid {
            transform: rotate(270deg);
            /* Adjust angle as needed */
        }
    }
</style>