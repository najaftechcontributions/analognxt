# Quick Reference Guide - Homepage Template Development

## Helper Functions

The theme includes helper functions to make development easier. All functions are in `inc/homepage-helpers.php`.

## Common Tasks

### 1. Display an Image

**Original HTML:**
```html
<img src="images/hero.avif" alt="Hero Image">
```

**WordPress Template (Simple):**
```php
<img src="<?php echo analognxt_theme_image( 'hero.avif' ); ?>" alt="Hero Image">
```

**WordPress Template (Responsive with srcset):**
```php
<?php
analognxt_responsive_image(
    'hero.avif',                    // Default image
    'Hero Image',                   // Alt text
    array(                          // Responsive versions
        '500'  => 'hero-p-500.avif',
        '800'  => 'hero-p-800.avif',
        '1080' => 'hero-p-1080.avif'
    ),
    '100vw',                        // Sizes attribute
    'hero-image'                    // CSS class
);
?>
```

### 2. Background Image

**Original HTML:**
```html
<div style="background-image: url('images/bg.jpg')">
```

**WordPress Template:**
```php
<div <?php echo analognxt_bg_image_style( 'bg.jpg' ); ?>>
```

**With additional styles:**
```php
<div <?php echo analognxt_bg_image_style( 'bg.jpg', 'background-size: cover; background-position: center;' ); ?>>
```

### 3. Video

**Original HTML:**
```html
<video src="media/video.mp4" poster="images/poster.jpg" preload="metadata" playsinline>
```

**WordPress Template:**
```php
<?php analognxt_video_player( 'video.mp4', 'poster.jpg' ); ?>
```

**With custom attributes:**
```php
<?php
analognxt_video_player(
    'video.mp4',
    'poster.jpg',
    array(
        'autoplay' => true,
        'muted'    => true,
        'loop'     => true,
        'class'    => 'hero-video'
    )
);
?>
```

### 4. SVG Icons

**WordPress Template:**
```php
<div class="icon-wrapper">
    <?php analognxt_svg_icon( 'arrow-right' ); ?>
</div>
```

Available icons:
- `arrow-right`
- `play`
- `bubble-arrow`

### 5. Links

**Original HTML:**
```html
<a href="/">Home</a>
<a href="/about">About</a>
```

**WordPress Template:**
```php
<a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a>
<a href="<?php echo esc_url( home_url( '/about' ) ); ?>">About</a>
```

### 6. Social Media Links

**WordPress Template:**
```php
<?php
$social_links = analognxt_get_social_links();
foreach ( $social_links as $platform => $data ) :
    ?>
    <a href="<?php echo esc_url( $data['url'] ); ?>" 
       target="_blank" 
       rel="noopener" 
       aria-label="<?php echo esc_attr( $data['label'] ); ?>">
        <?php echo esc_html( $data['label'] ); ?>
    </a>
    <?php
endforeach;
?>
```

## Complete Section Example

### Original HTML Section

```html
<section class="hero-section">
    <div class="hero-background" style="background-image: url('images/hero-bg.jpg')">
        <video src="media/hero-video.mp4" poster="images/hero-poster.jpg" playsinline muted autoplay loop></video>
    </div>
    <div class="hero-content">
        <img src="images/logo.svg" alt="Logo" class="hero-logo"
             srcset="images/logo-p-500.svg 500w, images/logo-p-800.svg 800w">
        <h1>Welcome to Zeit Media</h1>
        <p>Art Comes First</p>
        <a href="/contact" class="button">Contact Us</a>
    </div>
</section>
```

### WordPress Template Version

```php
<section class="hero-section">
    <div class="hero-background" <?php echo analognxt_bg_image_style( 'hero-bg.jpg' ); ?>>
        <?php
        analognxt_video_player(
            'hero-video.mp4',
            'hero-poster.jpg',
            array(
                'playsinline' => true,
                'muted'       => true,
                'autoplay'    => true,
                'loop'        => true
            )
        );
        ?>
    </div>
    <div class="hero-content">
        <?php
        analognxt_responsive_image(
            'logo.svg',
            'Logo',
            array(
                '500' => 'logo-p-500.svg',
                '800' => 'logo-p-800.svg'
            ),
            '(max-width: 768px) 100vw, 50vw',
            'hero-logo'
        );
        ?>
        <h1>Welcome to Zeit Media</h1>
        <p>Art Comes First</p>
        <a href="<?php echo esc_url( home_url( '/contact' ) ); ?>" class="button">Contact Us</a>
    </div>
</section>
```

## WordPress Best Practices

### 1. Always Escape Output

```php
<?php echo esc_url( $url ); ?>          // For URLs
<?php echo esc_html( $text ); ?>        // For text
<?php echo esc_attr( $attribute ); ?>   // For HTML attributes
```

### 2. Translation Ready

```php
<h1><?php esc_html_e( 'Welcome', 'analognxt' ); ?></h1>
<p><?php esc_html_e( 'Art Comes First', 'analognxt' ); ?></p>
```

### 3. Conditional Content

```php
<?php if ( is_front_page() ) : ?>
    <div class="homepage-only">...</div>
<?php endif; ?>
```

### 4. WordPress Loops (for dynamic content)

```php
<?php
$args = array(
    'post_type'      => 'projects',
    'posts_per_page' => 6,
);
$projects = new WP_Query( $args );

if ( $projects->have_posts() ) :
    while ( $projects->have_posts() ) :
        $projects->the_post();
        ?>
        <div class="project-item">
            <?php if ( has_post_thumbnail() ) : ?>
                <?php the_post_thumbnail( 'large', array( 'class' => 'project-thumbnail' ) ); ?>
            <?php endif; ?>
            <h3><?php the_title(); ?></h3>
            <div><?php the_excerpt(); ?></div>
            <a href="<?php the_permalink(); ?>">View Project</a>
        </div>
        <?php
    endwhile;
    wp_reset_postdata();
endif;
?>
```

## File Paths Reference

```
Theme Root: /wp-content/themes/analognxt/
  ├── analogNXTTheme/
  │   ├── images/       → analognxt_theme_image( 'filename' )
  │   ├── media/        → analognxt_theme_media( 'filename' )
  │   ├── fonts/        → analognxt_theme_font( 'filename' )
  │   ├── css/          → Auto-loaded via functions.php
  │   └── js/           → Auto-loaded via functions.php
```

## Common Patterns

### Pattern: Section with Image Grid

```php
<section class="image-grid">
    <div class="container">
        <div class="grid">
            <?php
            $images = array(
                'image1.avif',
                'image2.avif',
                'image3.avif',
            );
            
            foreach ( $images as $image ) :
                ?>
                <div class="grid-item">
                    <img src="<?php echo analognxt_theme_image( $image ); ?>" 
                         alt="Gallery Image" 
                         loading="lazy">
                </div>
                <?php
            endforeach;
            ?>
        </div>
    </div>
</section>
```

### Pattern: Conditional Video/Image

```php
<div class="media-container">
    <?php if ( wp_is_mobile() ) : ?>
        <img src="<?php echo analognxt_theme_image( 'mobile-image.jpg' ); ?>" alt="Mobile View">
    <?php else : ?>
        <?php analognxt_video_player( 'desktop-video.mp4', 'video-poster.jpg' ); ?>
    <?php endif; ?>
</div>
```

### Pattern: Dynamic Navigation

```php
<nav class="main-nav">
    <ul>
        <?php
        $menu_items = array(
            array( 'url' => '/', 'text' => 'Home' ),
            array( 'url' => '/about', 'text' => 'About' ),
            array( 'url' => '/works', 'text' => 'Works' ),
            array( 'url' => '/contact', 'text' => 'Contact' ),
        );
        
        foreach ( $menu_items as $item ) :
            $current_class = ( home_url( $item['url'] ) === get_permalink() ) ? ' class="current"' : '';
            ?>
            <li<?php echo $current_class; ?>>
                <a href="<?php echo esc_url( home_url( $item['url'] ) ); ?>">
                    <?php echo esc_html( $item['text'] ); ?>
                </a>
            </li>
            <?php
        endforeach;
        ?>
    </ul>
</nav>
```

## Debugging Tips

### Display Variable Contents
```php
<?php
echo '<pre>';
var_dump( $your_variable );
echo '</pre>';
?>
```

### Check if Function Exists
```php
<?php if ( function_exists( 'analognxt_theme_image' ) ) : ?>
    <!-- Function is available -->
<?php endif; ?>
```

### WordPress Debug Mode
Add to `wp-config.php`:
```php
define( 'WP_DEBUG', true );
define( 'WP_DEBUG_LOG', true );
define( 'WP_DEBUG_DISPLAY', false );
```

Check debug log at: `/wp-content/debug.log`

## Next Steps

1. Open `wp-content/themes/analognxt/analogNXTTheme/index.html`
2. Copy content sections one by one
3. Paste into `wp-content/themes/analognxt/template-parts/homepage-content.php`
4. Replace all file paths using the helper functions above
5. Test on your local WordPress installation
6. Refine and adjust as needed

## Resources

- WordPress Template Hierarchy: https://developer.wordpress.org/themes/basics/template-hierarchy/
- Template Tags: https://developer.wordpress.org/reference/functions/
- Escaping: https://developer.wordpress.org/apis/security/escaping/
