<?php
/**
 * Projects List Block
 *
 * ACF Gutenberg Block
 *
 * @package AnalogNXT
 */

// Get ACF fields
$section_title = get_field( 'section_title' ) ?: 'Our projects';
$projects = get_field( 'projects' );

// Default projects if none set
if ( ! $projects ) {
    $projects = array(
        array( 'name' => 'Art of Health', 'link' => '#' ),
        array( 'name' => 'CGV', 'link' => '#' ),
        array( 'name' => 'Dương Triệu', 'link' => '#' ),
        array( 'name' => 'Eiichiro Oda', 'link' => '#' ),
        array( 'name' => 'Frozen Project', 'link' => '#' ),
        array( 'name' => 'Gaming Universe', 'link' => '#' ),
        array( 'name' => 'Hyundai Showcase', 'link' => '#' ),
        array( 'name' => 'Innovation Hub', 'link' => '#' ),
    );
}
?>

<section class="projects-list-section u-section u-zindex-3">
    <div class="u-section-spacer"></div>
    
    <div class="projects-list-contain u-container">
        <div class="u-margin-bottom-6">
            <h2 class="u-text-style-h3"><?php echo esc_html( $section_title ); ?></h2>
        </div>
        
        <div class="projects-list">
            <?php foreach ( $projects as $index => $project ) : ?>
                <div class="project-item">
                    <a href="<?php echo esc_url( $project['link'] ); ?>" class="project-link w-inline-block">
                        <div class="project-link-inner">
                            <div class="project-name u-text-style-large">
                                <?php echo esc_html( $project['name'] ); ?>
                            </div>
                            <div class="project-arrow">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                    <path stroke="currentColor" stroke-linejoin="round" stroke-width="1.5" d="m8 16 8-8m0 0h-6m6 0v6"></path>
                                </svg>
                            </div>
                        </div>
                        <div class="project-divider"></div>
                    </a>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
    
    <div class="u-section-spacer"></div>
</section>
