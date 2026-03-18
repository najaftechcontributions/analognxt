<?php
/**
 * Homepage Helper Functions
 *
 * Utility functions to help with homepage development
 *
 * @package AnalogNXT
 */

/**
 * Get theme asset URL
 *
 * @param string $path Path relative to analogNXTTheme folder.
 * @return string Full URL to the asset.
 */
function analognxt_theme_asset( $path ) {
    return esc_url( get_template_directory_uri() . '/analogNXTTheme/' . ltrim( $path, '/' ) );
}

/**
 * Get theme image URL
 *
 * @param string $filename Image filename.
 * @return string Full URL to the image.
 */
function analognxt_theme_image( $filename ) {
    return analognxt_theme_asset( 'images/' . $filename );
}

/**
 * Get theme media URL (videos)
 *
 * @param string $filename Media filename.
 * @return string Full URL to the media file.
 */
function analognxt_theme_media( $filename ) {
    return analognxt_theme_asset( 'media/' . $filename );
}

/**
 * Get theme font URL
 *
 * @param string $filename Font filename.
 * @return string Full URL to the font file.
 */
function analognxt_theme_font( $filename ) {
    return analognxt_theme_asset( 'fonts/' . $filename );
}

/**
 * Output responsive image with srcset
 *
 * Usage:
 * analognxt_responsive_image(
 *     '68dbcc66334ebfc0c3340eb4_hero.avif',
 *     'Hero Image',
 *     array(
 *         '500'  => 'hero-p-500.avif',
 *         '800'  => 'hero-p-800.avif',
 *         '1080' => 'hero-p-1080.avif'
 *     )
 * );
 *
 * @param string $default_src   Default image filename.
 * @param string $alt           Alt text for the image.
 * @param array  $srcset        Array of width => filename pairs.
 * @param string $sizes         Sizes attribute (optional).
 * @param string $class         CSS class (optional).
 */
function analognxt_responsive_image( $default_src, $alt = '', $srcset = array(), $sizes = '100vw', $class = '' ) {
    $default_url = analognxt_theme_image( $default_src );
    
    $srcset_string = '';
    if ( ! empty( $srcset ) ) {
        $srcset_array = array();
        foreach ( $srcset as $width => $filename ) {
            $srcset_array[] = analognxt_theme_image( $filename ) . ' ' . $width . 'w';
        }
        $srcset_string = implode( ', ', $srcset_array );
    }
    
    printf(
        '<img src="%s" alt="%s"%s%s%s loading="lazy">',
        $default_url,
        esc_attr( $alt ),
        ! empty( $srcset_string ) ? ' srcset="' . esc_attr( $srcset_string ) . '"' : '',
        ! empty( $sizes ) ? ' sizes="' . esc_attr( $sizes ) . '"' : '',
        ! empty( $class ) ? ' class="' . esc_attr( $class ) . '"' : ''
    );
}

/**
 * Output background image with inline style
 *
 * @param string $filename Image filename.
 * @param string $additional_styles Additional CSS styles (optional).
 * @return string Style attribute string.
 */
function analognxt_bg_image_style( $filename, $additional_styles = '' ) {
    $url = analognxt_theme_image( $filename );
    $style = 'background-image: url(' . $url . ');';
    
    if ( ! empty( $additional_styles ) ) {
        $style .= ' ' . $additional_styles;
    }
    
    return 'style="' . esc_attr( $style ) . '"';
}

/**
 * Output SVG icon from analogNXTTheme
 *
 * @param string $icon_name Icon identifier.
 * @return void
 */
function analognxt_svg_icon( $icon_name ) {
    $icons = array(
        'arrow-right' => '<svg xmlns="http://www.w3.org/2000/svg" width="100%" viewBox="0 0 58 58" fill="none" class="nav_menu_icon-svg"><path fill="#fff" d="m36.756 49-4.694-4.714 11.899-11.95H0v-6.667h43.962l-11.9-11.955L36.755 9l19.912 20.001L36.756 49Z"></path></svg>',
        'play' => '<svg xmlns="http://www.w3.org/2000/svg" width="100%" viewBox="0 0 20 20" fill="none"><path fill="#fff" d="M18.5 9.134a1 1 0 0 1 0 1.732l-12 6.928a1 1 0 0 1-1.5-.866V3.072a1 1 0 0 1 1.5-.866l12 6.928Z"></path></svg>',
        'bubble-arrow' => '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="100%"><polyline points="18 8 18 18 8 18" fill="none" stroke="currentColor" stroke-miterlimit="10" stroke-width="1.5"></polyline><line x1="18" y1="18" x2="5" y2="5" fill="none" stroke="currentColor" stroke-miterlimit="10" stroke-width="1.5"></line></svg>',
    );
    
    if ( isset( $icons[ $icon_name ] ) ) {
        echo $icons[ $icon_name ]; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
    }
}

/**
 * Get social media links
 *
 * @return array Social media links.
 */
function analognxt_get_social_links() {
    return array(
        'facebook'  => array(
            'url'   => 'https://www.facebook.com/ZeitMediaVN',
            'label' => 'Facebook',
        ),
        'instagram' => array(
            'url'   => 'https://www.instagram.com/zeitmedia.vn',
            'label' => 'Instagram',
        ),
        'tiktok'    => array(
            'url'   => 'https://www.tiktok.com/@zeitmedia.vn',
            'label' => 'Tiktok',
        ),
        'behance'   => array(
            'url'   => 'https://www.behance.net/ZeitMediaVN',
            'label' => 'Behance',
        ),
    );
}

/**
 * Output video player element
 *
 * @param string $video_filename Video filename.
 * @param string $poster_filename Poster image filename (optional).
 * @param array  $attributes Additional video attributes.
 */
function analognxt_video_player( $video_filename, $poster_filename = '', $attributes = array() ) {
    $video_url = analognxt_theme_media( $video_filename );
    $poster_url = ! empty( $poster_filename ) ? analognxt_theme_image( $poster_filename ) : '';
    
    $default_attributes = array(
        'preload'     => 'metadata',
        'playsinline' => true,
        'class'       => 'video-player',
    );
    
    $attributes = wp_parse_args( $attributes, $default_attributes );
    
    printf(
        '<video src="%s"%s%s>',
        esc_url( $video_url ),
        ! empty( $poster_url ) ? ' poster="' . esc_url( $poster_url ) . '"' : '',
        analognxt_build_attributes( $attributes )
    );
    echo '</video>';
}

/**
 * Build HTML attributes string from array
 *
 * @param array $attributes Key-value pairs of attributes.
 * @return string HTML attributes string.
 */
function analognxt_build_attributes( $attributes ) {
    $output = '';
    
    foreach ( $attributes as $key => $value ) {
        if ( is_bool( $value ) ) {
            if ( $value ) {
                $output .= ' ' . esc_attr( $key );
            }
        } else {
            $output .= ' ' . esc_attr( $key ) . '="' . esc_attr( $value ) . '"';
        }
    }
    
    return $output;
}

/**
 * Example usage in templates:
 *
 * // Simple image
 * <img src="<?php echo analognxt_theme_image( 'hero.avif' ); ?>" alt="Hero">
 *
 * // Responsive image
 * <?php
 * analognxt_responsive_image(
 *     'hero.avif',
 *     'Hero Image',
 *     array(
 *         '500' => 'hero-p-500.avif',
 *         '800' => 'hero-p-800.avif'
 *     ),
 *     '100vw',
 *     'hero-image'
 * );
 * ?>
 *
 * // Background image
 * <div <?php echo analognxt_bg_image_style( 'bg.jpg', 'background-size: cover;' ); ?>>
 *
 * // Video
 * <?php analognxt_video_player( 'video.mp4', 'poster.jpg' ); ?>
 *
 * // SVG Icon
 * <?php analognxt_svg_icon( 'arrow-right' ); ?>
 */
