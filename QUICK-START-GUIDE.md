# Quick Start Guide - Restructured Homepage

## 🎉 What's New?

Your homepage has been completely restructured into modular, reusable blocks! Everything works the same as before, but now it's much easier to maintain and customize.

## 📁 File Locations

### Main Files
- **Homepage**: `template-parts/homepage-content.php`
- **Blocks Folder**: `template-parts/blocks/`
- **Styles**: `template-parts/inline-styles.php`
- **Footer**: `template-parts/footer-content.php`

### Block Files
All blocks are in `template-parts/blocks/`:
- `hero.php` - Hero section
- `about.php` - About section
- `stats.php` - Statistics section
- `featured-clients.php` - Clients section
- `marquee.php` - Marquee section
- `scaling-cta.php` - Scaling CTA
- `services.php` - Services section
- `works.php` - Works/portfolio section
- `final-cta.php` - Final CTA section

## 🔧 Quick Tasks

### Task 1: Edit Hero Heading
**File**: `template-parts/blocks/hero.php`  
**Line**: Find this:
```php
<h1 class="u-text-style-h1">Art Comes First — Creative Aboves All</h1>
```
Change the text between the `<h1>` tags.

### Task 2: Update About Section
**File**: `template-parts/blocks/about.php`  
**Lines**: Find this:
```php
<h2 class="home_about_heading">Vietnam's leading creative agency</h2>
<p>Founded in 2013, Zeit has become one of Vietnam's leading agencies...</p>
```
Update the heading and paragraph text.

### Task 3: Change Services
**File**: `template-parts/blocks/services.php`  
**Lines**: Find the `$services` array at the top:
```php
$services = array(
    array(
        'title' => 'Events',
        'items' => array(
            'Creative event concept development',
            'Full-scale event planning and execution'
        ),
        'image' => '68d67020885f73c3326608fe_events.avif'
    ),
    // ... more services
);
```
Edit the array to change service details.

### Task 4: Update Portfolio Items
**File**: `template-parts/blocks/works.php`  
**Lines**: Find the `$works` array:
```php
$works = array(
    array(
        'title' => 'HANOI CONVENTION',
        'client' => 'Ministry of Public Security',
        'year' => '2025',
        'category' => 'Events',
        'link' => '/work/hanoi-convention',
        'image' => '691e117fe3f9d636a04d2d86_...'
    ),
    // ... more works
);
```
Edit to add/remove/update portfolio items.

### Task 5: Update Footer Contact Info
**File**: `template-parts/footer-content.php`  
**Lines**: Find this:
```php
<div class="u-text-style-small u-opacity-80 u-margin-bottom-1">
    24 Tue Tinh Street, Cua Nam Ward, Hanoi.
</div>
```
Update addresses, email, and phone number.

## 🎨 Adding Images

All images should use this pattern:
```php
<?php $theme_url = get_template_directory_uri() . '/analogNXTTheme'; ?>
<img src="<?php echo esc_url($theme_url . '/images/your-image.jpg'); ?>" alt="Description">
```

**Image folder**: `wp-content/themes/analognxt/analogNXTTheme/images/`

## 🔄 Reusing Blocks

Want to use a block on another page? Easy!

**Example - Creating a Services Page**:
1. Create `services.php` in your theme root
2. Add this code:
```php
<?php get_header(); ?>

<?php get_template_part('template-parts/blocks/hero'); ?>
<?php get_template_part('template-parts/blocks/services'); ?>
<?php get_template_part('template-parts/blocks/final-cta'); ?>

<?php get_footer(); ?>
```

**Example - Custom About Page**:
```php
<?php get_header(); ?>

<?php get_template_part('template-parts/blocks/about'); ?>
<?php get_template_part('template-parts/blocks/stats'); ?>
<?php get_template_part('template-parts/blocks/featured-clients'); ?>
<?php get_template_part('template-parts/blocks/final-cta'); ?>

<?php get_footer(); ?>
```

## 🎯 Common Modifications

### Change Button Text
Search for: `button_main_text`
```php
<div class="button_main_text u-text-style-main">[ Contact Us ]</div>
```

### Update Section Eyebrow
Search for: `eyebrow_text`
```php
<div class="eyebrow_text u-text-style-main w-richtext">
    <p>About Us</p>
</div>
```

### Change CTA Heading
In `scaling-cta.php` or `final-cta.php`:
```php
<div class="scailing_text">Ready to</div>
<div class="scailing_text">Create</div>
```

### Update Social Links
In `hero.php` or `footer-content.php`:
```php
<a href="https://www.instagram.com/zeitmedia.vn" target="_blank">
    <div>IG</div>
</a>
```

## 📝 Block Order

Current homepage block order:
1. Hero
2. About
3. Stats
4. Featured Clients
5. Marquee
6. Scaling CTA
7. Services
8. Works
9. Final CTA

To change order, edit `template-parts/homepage-content.php`:
```php
<?php get_template_part('template-parts/blocks/hero'); ?>
<?php get_template_part('template-parts/blocks/services'); ?> <!-- Moved up -->
<?php get_template_part('template-parts/blocks/about'); ?>
<!-- etc. -->
```

## 🚀 Making Blocks Dynamic (Future)

When ready to make content editable via WordPress admin:

1. **Install ACF Pro** (Advanced Custom Fields)
2. **Create Field Group** for the block
3. **Update block template** to use ACF fields
4. **Register as ACF block**

See full guide in: `template-parts/blocks/README.md`

**Quick Example**:
```php
// Static (current)
<h1>Art Comes First</h1>

// Dynamic (future with ACF)
<h1><?php the_field('heading'); ?></h1>
```

## 🔍 Finding Things

### Find All Images
Search for: `$theme_url . '/images/`

### Find All Links
Search for: `href="`

### Find All Buttons
Search for: `button_main_wrap`

### Find All Headings
Search for: `<h1`, `<h2`, `<h3`

### Find All Text Content
Look for content between HTML tags that's not wrapped in `<?php`

## ⚠️ Important Notes

### DO:
✅ Edit text content directly  
✅ Change image paths  
✅ Update links and URLs  
✅ Modify arrays (services, works, etc.)  
✅ Reorder blocks  
✅ Add new blocks

### DON'T:
❌ Remove CSS classes (will break styling)  
❌ Remove data attributes (will break animations)  
❌ Change file structure without updating includes  
❌ Edit files without backing up first  
❌ Remove PHP escaping functions (`esc_url`, `esc_html`, etc.)

## 🧪 Testing After Changes

1. **Clear Cache**: Clear WordPress cache and browser cache
2. **Check Console**: Open browser dev tools for errors
3. **Test Mobile**: View on mobile devices
4. **Verify Links**: Click all links to ensure they work
5. **Check Animations**: Scroll through page to test animations

## 📚 Documentation Files

- **Summary**: `HOMEPAGE-RESTRUCTURE-SUMMARY.md` - Overview of changes
- **Blocks Guide**: `template-parts/blocks/README.md` - Detailed block documentation
- **CSS Classes**: `template-parts/blocks/CSS-CLASSES.md` - CSS class reference
- **This Guide**: `QUICK-START-GUIDE.md` - You are here!

## 💡 Pro Tips

### Tip 1: Use Search and Replace
When changing multiple instances of text:
1. Use your code editor's "Find and Replace" feature
2. Search for exact text you want to change
3. Replace all instances at once

### Tip 2: Keep Backups
Before making major changes:
```bash
# Create a backup
cp -r template-parts template-parts-backup
```

### Tip 3: Work on One Block at a Time
Don't try to edit everything at once:
1. Pick one block
2. Make changes
3. Test
4. Move to next block

### Tip 4: Use Comments
Add comments to mark your changes:
```php
<!-- Custom: Updated heading on 2025-01-13 -->
<h2>New Heading</h2>
```

### Tip 5: Version Control
If using Git:
```bash
# Commit after each major change
git add .
git commit -m "Updated hero section heading"
```

## 🆘 Troubleshooting

### Problem: White Screen
**Solution**: Check for PHP syntax errors. Look for:
- Missing semicolons `;`
- Unclosed PHP tags `?>`
- Unclosed quotes `"` or `'`

### Problem: Missing Images
**Solution**: Verify image path:
```php
// Should be:
echo esc_url($theme_url . '/images/filename.jpg');

// Not:
echo 'images/filename.jpg';
```

### Problem: Broken Layout
**Solution**: Check that you didn't remove important classes or HTML structure

### Problem: Animations Not Working
**Solution**: Ensure data attributes are intact:
```php
// Keep these:
data-parallax="trigger"
data-marquee-speed="15"
data-flip-element="wrapper"
```

## 📞 Need Help?

1. **Check Documentation**: Read the README files
2. **Review Examples**: Look at existing blocks for patterns
3. **Test Changes**: Make small changes and test frequently
4. **Use Browser DevTools**: Inspect elements to understand structure

## ✅ Quick Checklist

Before going live with changes:
- [ ] All text content updated
- [ ] All images loading correctly
- [ ] All links working
- [ ] Mobile responsive
- [ ] No console errors
- [ ] Animations working
- [ ] Footer information correct
- [ ] Social links updated
- [ ] Contact information current
- [ ] Backup created

## 🎓 Next Steps

1. **Familiarize yourself** with the block structure
2. **Make small test changes** to understand how it works
3. **Read the full documentation** when you have time
4. **Plan for ACF integration** if you want dynamic content
5. **Enjoy cleaner, more maintainable code!**

---

**Questions?** Check the detailed documentation in `template-parts/blocks/README.md`

**Happy editing! 🚀**
