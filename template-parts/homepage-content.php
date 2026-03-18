<?php
/**
 * Homepage Main Content Template Part
 *
 * This file includes all homepage blocks that can be converted to ACF blocks in the future
 * Each section is now separated into its own block file for better organization and reusability
 *
 * @package AnalogNXT
 */

$theme_url = get_template_directory_uri() . '/analogNXTTheme';
?>

<!-- Fixed Position Styles -->
<div class="u-position-fixed">
    <style>
        html.lenis {
            height: auto;
        }

        .lenis.lenis-smooth {
            scroll-behavior: auto;
        }

        .lenis.lenis-smooth [data-lenis-prevent] {
            overscroll-behavior: contain;
        }

        .lenis.lenis-stopped {
            overflow: hidden;
        }

        body ::-webkit-scrollbar {
            display: none;
        }

        body {
            -ms-overflow-style: none;
        }

        html {
            scrollbar-width: none;
        }

        /* .loader_wrap {
            display: flex;
        } */

        .contact_image_wrap {
            width: 0%;
        }
    </style>
</div>

<!-- Global Styles Embed -->
<div class="u-position-fixed">
    <div class="w-embed">
        <?php get_template_part('template-parts/inline-styles'); ?>
    </div>
</div>

<!-- Grid Guide (Only visible in design mode) -->
<div class="guide_wrap">
    <div class="w-embed">
        <style>
            html.wf-design-mode .guide_wrap {
                display: block;
            }

            .guide_layout {
                counter-reset: gridguides;
            }

            .guide_layout>div::before {
                counter-increment: gridguides;
                content: counter(gridguides);
            }
        </style>
    </div>
    <div class="guide_contain u-container">
        <div class="guide_layout">
            <?php for ($i = 0; $i < 24; $i++) : ?>
                <div class="guide_column"></div>
            <?php endfor; ?>
        </div>
    </div>
</div>

<!-- Main Page Content -->
<main id="main" class="page_main">
    
    <?php 
    /**
     * HERO SECTION
     * Block: hero.php
     * Purpose: Main hero section with video background, title, and featured project
     * ACF Ready: Can be converted to use ACF fields for content
     */
    get_template_part('template-parts/blocks/hero'); 
    ?>
    
    <?php 
    /**
     * ABOUT SECTION
     * Block: about.php
     * Purpose: Brief introduction about the company
     * ACF Ready: Can be converted to use ACF fields for heading, text, and CTA
     */
    get_template_part('template-parts/blocks/about'); 
    ?>
    
    <?php 
    /**
     * STATS SECTION
     * Block: stats.php
     * Purpose: Display company statistics with parallax effect
     * ACF Ready: Can be converted to use ACF repeater for stats
     */
    get_template_part('template-parts/blocks/stats'); 
    ?>
    
    <?php 
    /**
     * FEATURED CLIENTS SECTION
     * Block: featured-clients.php
     * Purpose: Showcase client logos and names
     * ACF Ready: Can be converted to use ACF textarea or repeater for clients
     */
    get_template_part('template-parts/blocks/featured-clients'); 
    ?>
    
    <?php 
    /**
     * MARQUEE SECTION
     * Block: marquee.php
     * Purpose: Animated marquee with text and images, plus scaling video
     * ACF Ready: Can be converted to use ACF fields for marquee items and video
     */
    get_template_part('template-parts/blocks/marquee'); 
    ?>
    
    <?php 
    /**
     * SCALING CTA SECTION
     * Block: scaling-cta.php
     * Purpose: Large text CTA with scaling animation
     * ACF Ready: Can be converted to use ACF fields for heading and button
     */
    get_template_part('template-parts/blocks/scaling-cta'); 
    ?>
    
    <?php 
    /**
     * SERVICES SECTION
     * Block: services.php
     * Purpose: Showcase services with sticky card effect
     * ACF Ready: Can be converted to use ACF repeater for services
     */
    get_template_part('template-parts/blocks/services'); 
    ?>
    
    <?php
    /**
     * TRANSFORMING SPACES SECTION
     * Block: transforming-spaces.php
     * Purpose: Large impactful text section
     * ACF Ready: Can be converted to use ACF fields for heading
     */
    get_template_part('template-parts/blocks/transforming-spaces');
    ?>

    <?php
    /**
     * WORKS SECTION
     * Block: works.php
     * Purpose: Display selected portfolio/case studies
     * ACF Ready: Can be converted to use ACF relationship field or custom post type
     */
    get_template_part('template-parts/blocks/works');
    ?>

    <?php
    /**
     * PRECISION CRAFTED SECTION
     * Block: precision-crafted.php
     * Purpose: Highlight attention to detail and craftsmanship
     * ACF Ready: Can be converted to use ACF fields for heading
     */
    get_template_part('template-parts/blocks/precision-crafted');
    ?>

    <?php
    /**
     * PROJECTS LIST SECTION
     * Block: projects-list.php
     * Purpose: Display list of all projects with links
     * ACF Ready: Can be converted to use ACF repeater for projects
     */
    get_template_part('template-parts/blocks/projects-list');
    ?>

    <?php
    /**
     * FINAL CTA SECTION
     * Block: final-cta.php
     * Purpose: Final call-to-action with 3D animation
     * ACF Ready: Can be converted to use ACF fields for heading and video
     */
    get_template_part('template-parts/blocks/final-cta');
    ?>

</main>

