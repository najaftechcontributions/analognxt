# Homepage Blocks Documentation

## Overview

The homepage has been restructured into modular, reusable blocks that can be easily converted to ACF (Advanced Custom Fields) blocks in the future. Each block is a self-contained template part that can be used independently on different pages.

## Block Structure

All blocks are located in `wp-content/themes/analognxt/template-parts/blocks/`

### Available Blocks

1. **hero.php** - Hero Section
2. **about.php** - About Section
3. **stats.php** - Statistics/Parallax Section
4. **featured-clients.php** - Featured Clients Section
5. **marquee.php** - Animated Marquee Section
6. **scaling-cta.php** - Scaling Call-to-Action Section
7. **services.php** - Services Section
8. **works.php** - Portfolio/Works Section
9. **final-cta.php** - Final Call-to-Action Section

## Current Implementation

### Static Content
All blocks currently contain static (hardcoded) content. This approach allows you to:
- Understand the structure before making it dynamic
- Test the design and functionality
- Prepare for ACF field mapping

### Image URLs
All images use the proper PHP function with the required URL pattern:
```php
$theme_url = get_template_directory_uri() . '/analogNXTTheme';
<img src="<?php echo esc_url($theme_url . '/images/hero-image.jpg'); ?>" alt="Hero Image">
```

## Converting to ACF Blocks

### Step 1: Register ACF Block
Create a new file in `wp-content/themes/analognxt/inc/acf-blocks.php`:

```php
<?php
function analognxt_register_acf_blocks() {
    if (function_exists('acf_register_block_type')) {
        // Example: Hero Block
        acf_register_block_type(array(
            'name'              => 'hero',
            'title'             => 'Hero Section',
            'description'       => 'Homepage hero section with video background',
            'render_template'   => 'template-parts/blocks/hero.php',
            'category'          => 'zeitblocks',
            'icon'              => 'cover-image',
            'keywords'          => array('hero', 'banner', 'video'),
            'mode'              => 'preview',
            'supports'          => array(
                'align' => false,
                'mode'  => false,
                'jsx'   => true
            )
        ));
    }
}
add_action('acf/init', 'analognxt_register_acf_blocks');
```

### Step 2: Create ACF Field Groups

For each block, create ACF field groups in the WordPress admin:

#### Example: Hero Block Fields
- **Heading** (Text)
- **Background Video URL** (URL)
- **Background Image** (Image)
- **Featured Project** (Group)
  - Title (Text)
  - Client (Text)
  - Image (Image)
  - Link (URL)
- **Social Links** (Repeater)
  - Platform (Text)
  - URL (URL)

### Step 3: Update Block Templates

Replace static content with ACF fields:

**Before:**
```php
<h1 class="u-text-style-h1">Art Comes First — Creative Aboves All</h1>
```

**After:**
```php
<?php 
$heading = get_field('heading');
if ($heading) : 
?>
    <h1 class="u-text-style-h1"><?php echo esc_html($heading); ?></h1>
<?php endif; ?>
```

### Step 4: Add to Block Pattern/Page Builder

Once converted, blocks can be:
- Added via the WordPress Block Editor
- Used in different page templates
- Reordered and customized per page
- Exported/imported between sites

## Usage Examples

### Using Blocks in Templates

**Current static usage (homepage-content.php):**
```php
<?php get_template_part('template-parts/blocks/hero'); ?>
```

**Future ACF block usage:**
```php
<!-- wp:acf/hero {
    "data": {
        "heading": "Custom heading",
        "background_video": "https://..."
    }
} /-->
```

### Reusing Blocks on Other Pages

Once converted to ACF blocks, they can be used on any page:

**Services Page:**
```php
<?php get_template_part('template-parts/blocks/services'); ?>
```

**About Page:**
```php
<?php get_template_part('template-parts/blocks/about'); ?>
<?php get_template_part('template-parts/blocks/stats'); ?>
```

## Block-Specific Notes

### Hero Block
- Contains video background player
- Includes featured project showcase
- Has social media links
- **Future ACF Fields**: heading, video_url, background_image, featured_project (group), social_links (repeater)

### About Block
- Simple text content with CTA
- **Future ACF Fields**: eyebrow_text, heading, description, cta_text, cta_url

### Stats Block
- Parallax effect on scroll
- Three statistics cards
- **Future ACF Fields**: background_image, stats (repeater with number, description)

### Featured Clients Block
- Animated text display
- Desktop and mobile versions
- **Future ACF Fields**: clients_text (textarea or wysiwyg)

### Marquee Block
- Animated horizontal scroll
- Includes images and text
- Contains scaling video element
- **Future ACF Fields**: marquee_items (repeater with type, text/image), video_url

### Scaling CTA Block
- Large animated text
- Includes CTA button
- **Future ACF Fields**: heading_lines (repeater), button_text, button_url

### Services Block
- Sticky card scroll effect
- Four service items
- **Future ACF Fields**: services (repeater with number, title, description, image)

### Works Block
- Portfolio grid display
- Six work items
- **Future ACF Fields**: works (relationship field to custom post type or repeater)

### Final CTA Block
- 3D canvas animation
- Fallback video for mobile
- **Future ACF Fields**: heading_lines (repeater), canvas_video_url

## Best Practices

### When Adding New Blocks

1. **Keep it Modular**: Each block should be self-contained
2. **Use Semantic HTML**: Proper heading hierarchy and ARIA labels
3. **Follow Naming Conventions**: Use descriptive class names
4. **Image Optimization**: Always use responsive images with srcset
5. **Accessibility**: Include alt text and proper ARIA attributes
6. **Performance**: Lazy load images and videos where appropriate

### Code Style

```php
<?php
/**
 * Block Name
 * 
 * Brief description of what this block does
 * 
 * @package AnalogNXT
 */

$theme_url = get_template_directory_uri() . '/analogNXTTheme';

// Future: Get ACF fields here
// $heading = get_field('heading');
?>

<section class="block-name-section">
    <!-- Block content -->
</section>
```

### CSS Classes

- Use BEM methodology where appropriate
- Maintain existing utility classes (u-*, w-*)
- Keep animation classes for GSAP/Lenis
- Preserve data attributes for JavaScript functionality

## Migration Checklist

When converting a block to ACF:

- [ ] Create ACF field group
- [ ] Add all necessary fields
- [ ] Set field location rules
- [ ] Update block template to use ACF functions
- [ ] Add default values/fallbacks
- [ ] Test in block editor
- [ ] Document fields in this README
- [ ] Create preview/example content

## File Structure

```
template-parts/
├── blocks/
│   ├── README.md (this file)
│   ├── hero.php
│   ├── about.php
│   ├── stats.php
│   ├── featured-clients.php
│   ├── marquee.php
│   ├── scaling-cta.php
│   ├── services.php
│   ├── works.php
│   └── final-cta.php
├── homepage-content.php (main file that includes all blocks)
├── inline-styles.php (global styles)
└── footer-content.php (footer template)
```

## Support & Resources

- ACF Documentation: https://www.advancedcustomfields.com/resources/
- Block Editor Handbook: https://developer.wordpress.org/block-editor/
- WordPress Coding Standards: https://developer.wordpress.org/coding-standards/

## Changelog

### Version 1.0 (Current)
- Initial block structure created
- All sections separated into individual blocks
- Image URLs updated to use proper PHP functions
- Static content preserved for structure
- Documentation created

### Future Updates
- Convert blocks to ACF blocks
- Add custom post types for Works/Services
- Create block patterns
- Add block variations
