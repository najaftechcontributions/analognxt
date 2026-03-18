<?php
// Get the repeater field
$sections = get_field('sections');

if ($sections): ?>
    <div class="u-section-spacer"></div>
    <div class="u-section-spacer"></div>
    <div class="top-heading w-flex u-flex-column u-gap-4 u-align-center">
        <div id="button-container">
            <button class="primary-button">
                Illuminating Excellence
            </button>
        </div>
        <h1 class="global-h1 cstm-h1" style="text-align: center;"><?php the_field('main_heading'); ?></h1>
    </div>
    <div class="u-section-spacer"></div>
    <section class="u-container u-section u-gap-6">
        <div class="prjctinner-inner w-flex u-flex-column u-gap-6">
            <?php foreach ($sections as $index => $section):
                $number = $section['number'];
                $heading = $section['heading'];
                $text = $section['text'];

                // Alternate alignment: even index = left, odd index = right
                $alignment = ($index % 2 === 0) ? 'align-left' : 'align-right';
                ?>
                <div class="project-section <?php echo esc_attr($alignment); ?>">
                    <div class="project-section-inner">
                        <div class="heading-econ w-flex u-align-center">
                            <?php if ($number): ?>
                                <div class="section-number u-zindex-2">
                                    <?php echo esc_html($number); ?>
                                </div>
                            <?php endif; ?>

                            <?php if ($heading): ?>
                                <div class="global-h2 section-heading u-zindex-2">
                                    <?php echo wp_kses_post($heading); ?>
                                </div>
                            <?php endif; ?>
                        </div>

                        <div class="prjctinner-econ">
                            <?php if ($text): ?>
                                <p class="global-txt1 prjctinner-text"><?php echo wp_kses_post($text); ?></p>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </section>
    <div class="u-section-spacer"></div>
    <div class="u-section-spacer"></div>
<?php endif; ?>


<style>
    .section-heading {
        font-weight: 700;
        color: #F29740;
    }

    .project-section.align-left {
        text-align: left;
    }

    .project-section.align-right {
        text-align: left;
    }

    .project-section .section-number {
        display: inline-block;
        font-weight: bold;
        margin-right: 8px;
    }

    /* .prjctinner-text {
        width: 100%;
        max-width: 600px;
    } */

    /* For sections aligned left */
    .project-section.align-left .prjctinner-econ {
        justify-content: flex-start;
        /* text stays on the left */
    }

    /* For sections aligned right */
    .project-section.align-right .prjctinner-econ {
        justify-content: flex-end;
        /* text moves to the right */
    }

    /* Ensure flex works */
    .prjctinner-econ {
        display: flex;
    }

    /* .project-section.align-left {
        width: 50%;
    } */

    .project-section.align-right {
        display: flex;
        justify-content: flex-end;
    }

    .project-section-inner {
        width: 40%;
    }

    @media (max-width:768px) {
        .project-section-inner {
            width: 100% !important;
        }
    }

    .project-section.align-left .project-section-inner {
        animation: slideInLeft 1s cubic-bezier(0.68, -0.55, 0.265, 1.55) forwards;
    }

    .project-section.align-right .project-section-inner {
        animation: slideInRight 1s cubic-bezier(0.68, -0.55, 0.265, 1.55) forwards;
    }

    @keyframes slideInLeft {
        0% {
            opacity: 0;
            transform: translateX(-100px) scale(0.95);
        }

        60% {
            opacity: 1;
            transform: translateX(10px) scale(1.02);
        }

        80% {
            transform: translateX(-5px) scale(0.99);
        }

        100% {
            transform: translateX(0) scale(1);
        }
    }

    @keyframes slideInRight {
        0% {
            opacity: 0;
            transform: translateX(100px) scale(0.95);
        }

        60% {
            opacity: 1;
            transform: translateX(-10px) scale(1.02);
        }

        80% {
            transform: translateX(5px) scale(0.99);
        }

        100% {
            transform: translateX(0) scale(1);
        }
    }
</style>