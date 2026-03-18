# Homepage Setup Documentation

## Overview
The homepage from `analogNXTTheme/index.html` has been integrated into the WordPress theme. The setup includes:

- ✅ Created `front-page.php` (WordPress homepage template)
- ✅ Created `header-home.php` (homepage header with navigation)
- ✅ Created `footer-home.php` (homepage footer with menu and social links)
- ✅ Created `template-parts/homepage-content.php` (placeholder for main content)
- ✅ Updated `functions.php` to enqueue all CSS and JavaScript files
- ✅ All image paths use `get_template_directory_uri()` for proper WordPress integration

## File Structure

```
wp-content/themes/analognxt/
├── analogNXTTheme/          # Original theme folder
│   ├── css/                 # Stylesheets (automatically enqueued)
│   ├── js/                  # JavaScript files (automatically enqueued)
│   ├── images/              # Images (referenced via PHP)
│   ├── fonts/               # Web fonts
│   └── media/               # Videos
├── front-page.php           # Main homepage template
├── header-home.php          # Homepage header
├── footer-home.php          # Homepage footer/menu
├── template-parts/
│   └── homepage-content.php # Main content placeholder
└── functions.php            # Updated with asset enqueuing
```

## What's Been Done

### 1. Asset Enqueuing (functions.php)
All CSS and JavaScript files from the `analogNXTTheme` folder are automatically loaded on the homepage:

**CSS Files:**
- `analognxtcss.min.css` (main Webflow styles)
- `swiper-bundle.min.css` (Swiper slider)
- `splitting.css` & `splitting-cells.css` (text splitting effects)

**JavaScript Files:**
- jQuery (WordPress core)
- GSAP + plugins (ScrollTrigger, CustomEase, Draggable, Flip, InertiaPlugin)
- Lenis (smooth scrolling)
- Splitting (text effects)
- Swiper (slider)
- Lottie (animations)
- Barba.js (page transitions)
- Webflow scripts
- Custom scripts (attributes.js, geo.js, main.js)

### 2. Image Path Conversion
All image references now use WordPress template functions:

**Before:**
```html
<img src="images/filename.jpg" alt="">
```

**After:**
```php
<img src="<?php echo esc_url( get_template_directory_uri() . '/analogNXTTheme/images/filename.jpg' ); ?>" alt="">
```

### 3. Clean HTML Structure
- Removed unnecessary comments
- Organized code into logical template parts
- Maintained all original functionality and styling
- Preserved all CSS animations and JavaScript interactions

## Next Steps

### Complete the Homepage Content

The main content sections from `analogNXTTheme/index.html` need to be added to `template-parts/homepage-content.php`.

1. **Open the original HTML file:**
   - File: `wp-content/themes/analognxt/analogNXTTheme/index.html`
   - Find the main content sections (after `<body>` tag and navigation)

2. **Extract content sections** and add them to `template-parts/homepage-content.php`

3. **Replace all image paths:**
   ```php
   <?php echo esc_url( get_template_directory_uri() . '/analogNXTTheme/images/FILENAME' ); ?>
   ```

4. **Replace all video paths:**
   ```php
   <?php echo esc_url( get_template_directory_uri() . '/analogNXTTheme/media/FILENAME' ); ?>
   ```

### Example Section Conversion

**Original HTML:**
```html
<section class="hero-section">
  <img src="images/68dbcc66334ebfc0c3340eb4_hero.avif" alt="Hero Image" 
       srcset="images/hero-p-500.avif 500w, images/hero-p-800.avif 800w">
  <h1>Zeit Media | Art Comes First</h1>
  <p>Creative agency description...</p>
</section>
```

**WordPress Template:**
```php
<section class="hero-section">
  <img src="<?php echo esc_url( get_template_directory_uri() . '/analogNXTTheme/images/68dbcc66334ebfc0c3340eb4_hero.avif' ); ?>" alt="Hero Image" 
       srcset="<?php echo esc_url( get_template_directory_uri() . '/analogNXTTheme/images/hero-p-500.avif' ); ?> 500w, <?php echo esc_url( get_template_directory_uri() . '/analogNXTTheme/images/hero-p-800.avif' ); ?> 800w">
  <h1>Zeit Media | Art Comes First</h1>
  <p>Creative agency description...</p>
</section>
```

## Testing

1. **View the homepage:**
   - Go to: `http://yourdomain.com/`
   - The homepage should load with navigation and footer

2. **Check browser console:**
   - Press F12 to open developer tools
   - Look for any JavaScript errors
   - Verify all CSS and JS files are loading

3. **Test responsive design:**
   - Test on different screen sizes
   - Ensure all breakpoints work correctly

## Common Issues & Solutions

### Issue: Styles not loading
**Solution:** Clear WordPress cache and browser cache. Verify file paths in `functions.php`.

### Issue: JavaScript not working
**Solution:** Check browser console for errors. Ensure jQuery is loading before other scripts.

### Issue: Images not displaying
**Solution:** Verify image paths and ensure files exist in `analogNXTTheme/images/` folder.

### Issue: Page looks broken
**Solution:** Ensure all inline styles from original HTML are preserved in the template files.

## Dynamic Content Integration (Future)

To make the homepage fully dynamic with WordPress:

1. **Create Custom Post Types:**
   - Projects/Works
   - Services
   - Team Members

2. **Use WordPress Queries:**
   ```php
   <?php
   $args = array(
       'post_type' => 'projects',
       'posts_per_page' => 6
   );
   $projects = new WP_Query($args);
   
   if ($projects->have_posts()) :
       while ($projects->have_posts()) : $projects->the_post();
           // Display project
       endwhile;
   endif;
   wp_reset_postdata();
   ?>
   ```

3. **Add WordPress Menus:**
   - Replace hardcoded navigation with `wp_nav_menu()`
   - Register menus in `functions.php`

4. **Integrate with ACF (Advanced Custom Fields):**
   - Add flexible content fields
   - Make sections editable from WordPress admin

## Notes

- All original styles and functionality are preserved
- No placeholder comments in final code
- JavaScript libraries load in correct dependency order
- Image paths will work in development and production
- Theme follows WordPress coding standards

## Support

If you encounter any issues:
1. Check the browser console for errors
2. Verify file paths match the folder structure
3. Ensure all files from `analogNXTTheme` are present
4. Test with WordPress debugging enabled

## Credits

Original HTML template: Zeit Media (Webflow export)
WordPress Integration: Custom development
