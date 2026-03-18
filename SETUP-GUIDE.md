# AnalogNXT Theme - Setup Guide

## Overview

This WordPress theme includes 9 custom Gutenberg blocks that are fully dynamic and editable through the WordPress dashboard. All blocks are built using Advanced Custom Fields (ACF) Pro and can be easily customized without touching any code.

## Requirements

1. **WordPress** 5.8 or higher
2. **PHP** 7.4 or higher
3. **Advanced Custom Fields (ACF) Pro** - Required for all blocks to work

## Installation Steps

### 1. Install Required Plugins

1. Install and activate **Advanced Custom Fields (ACF) Pro**
   - This is required for all custom blocks to function
   - Without ACF Pro, the blocks will not appear in the editor

### 2. Theme Activation

1. Upload the theme to `/wp-content/themes/`
2. Activate the theme from WordPress Admin → Appearance → Themes
3. Once activated, you'll see a notice in the admin dashboard with a link to create a demo homepage

## Creating Your First Page

### Option 1: Create Demo Homepage (Recommended for First-Time Setup)

1. **Via Admin Notice:**
   - After activating the theme, look for the blue notice at the top of your dashboard
   - Click the "Create Demo Homepage" button
   - This will create a draft page with all 9 blocks pre-populated with default content

2. **Via URL:**
   - As an admin, visit: `yoursite.com/wp-admin/?create_demo_page=1`
   - This will automatically create and redirect you to edit the demo page

### Option 2: Create a Custom Page from Scratch

1. Go to **Pages → Add New**
2. Give your page a title (e.g., "Homepage", "Landing Page")
3. On the right sidebar, find **Page Attributes**
4. Under **Template**, select **"Homepage (Blocks)"**
5. Click the **+** button to add blocks
6. Search for "AnalogNXT" or find blocks under the **AnalogNXT Blocks** category
7. Add blocks in any order you prefer

## Available Blocks

All blocks are located under the **AnalogNXT Blocks** category in the Gutenberg editor.

### 1. Hero Section
**Purpose:** Main homepage hero with video background and featured project

**Editable Fields:**
- Background Video URL (supports Bunny CDN and standard video URLs)
- Poster Image (fallback image while video loads)
- Hero Title (main heading text)
- Featured Project (link to a post or project)
- Featured Label (e.g., "New Project", "Latest Work")
- Social Links (repeater field for multiple social media links)

**Default Content:** Includes video background, animated title, and social media links

---

### 2. About Section
**Purpose:** Introduce your company or services with eyebrow text, heading, and description

**Editable Fields:**
- Eyebrow Text (small label above heading)
- Heading (main section title)
- Description (WYSIWYG editor for rich text)
- Button Text
- Button Link (internal or external URL)

**Default Content:** "Art Comes First — Creative Agency" with sample description

---

### 3. Stats Section
**Purpose:** Display company statistics and achievements

**Editable Fields:**
- Stats Items (repeater field)
  - Number (e.g., "150+", "10 Years")
  - Label (e.g., "Projects Completed", "Team Members")

**Usage:** Add as many stat items as needed using the repeater field

---

### 4. Featured Clients
**Purpose:** Showcase client logos and names in a scrolling marquee

**Editable Fields:**
- Clients Text (textarea with client names separated by spaces or commas)

**Default Content:** Sample client names like "NESTLÉ VINAMILK P&G UNILEVER..."

**Note:** Enter all client names in one text field, separated by spaces or commas

---

### 5. Marquee Section
**Purpose:** Animated horizontal marquee with alternating text and images

**Editable Fields:**
- Marquee Items (repeater field)
  - Type (Text or Image)
  - Text (if type is Text)
  - Image (if type is Image)
- Scaling Video (optional video that scales on scroll)

**Usage:** Add multiple items to create a flowing marquee effect

---

### 6. Scaling CTA
**Purpose:** Large impactful call-to-action with scaling text animation

**Editable Fields:**
- Heading (main CTA text)
- Subheading (supporting text)

**Default Content:** "EVERY PIXEL, EVERY LINE, EVERY DETAIL CRAFTED WITH PRECISION AND ACCURACY"

---

### 7. Services Section
**Purpose:** Showcase your services with sticky card effects and images

**Editable Fields:**
- Eyebrow Text
- Heading (section title)
- Button Text
- Button Link
- Services Items (repeater field)
  - Number (e.g., "01", "02")
  - Title (service name)
  - Items (textarea - each line becomes a bullet point)
  - Image (featured image for the service)

**Default Content:** 4 sample services with images

**Usage:** Each service will have a sticky card effect as you scroll

---

### 8. Works/Portfolio
**Purpose:** Display your portfolio or case studies

**Editable Fields:**
- Eyebrow Text
- Heading
- Button Text
- Button Link
- Portfolio Items (repeater field)
  - Title
  - Client
  - Year
  - Category
  - Link (URL to project page)
  - Featured Image

**Usage:** Add as many portfolio items as you want to showcase

---

### 9. Final CTA
**Purpose:** End-of-page call-to-action with 3D animation video

**Editable Fields:**
- Heading (e.g., "Have a project in mind?")
- 3D Animation Video (upload MP4 or WebM)
- Button Text
- Button Link

**Default Content:** Contact CTA with animated background

---

## Working with Blocks

### How to Add a Block

1. In the page editor, click the **+** icon
2. Search for the block name (e.g., "Hero", "About", "Services")
3. Or browse to **AnalogNXT Blocks** category
4. Click the block to add it to your page

### How to Edit a Block

1. Click on the block in the editor
2. The right sidebar will show all editable fields
3. Make your changes (all changes are saved to the database)
4. Click "Preview" to see your changes live
5. Click "Update" or "Publish" when done

### How to Reorder Blocks

1. Click the **⋮⋮** icon on the left side of any block
2. Drag the block up or down to reorder
3. Or use the up/down arrows in the block toolbar

### How to Remove a Block

1. Click the block to select it
2. Click the **⋮** (three dots) in the block toolbar
3. Select "Remove Block"

---

## Recommended Block Order for Homepage

For the best user experience, we recommend this order:

1. **Hero Section** - First impression with video
2. **About Section** - Introduce your company
3. **Stats Section** - Build credibility with numbers
4. **Featured Clients** - Show who you work with
5. **Marquee Section** - Add visual interest
6. **Scaling CTA** - Mid-page engagement
7. **Services Section** - Detail what you offer
8. **Works/Portfolio** - Showcase your work
9. **Final CTA** - Convert visitors to leads

---

## Setting Your Homepage

After creating your homepage:

1. Go to **Settings → Reading**
2. Under "Your homepage displays", select **A static page**
3. For "Homepage", select your newly created page
4. Click **Save Changes**

---

## Customizing Default Content

Each block comes with default content for quick setup. To change these defaults:

1. Edit the file: `inc/acf-field-groups.php`
2. Find the field group for the block you want to modify
3. Update the `default_value` parameter
4. Save the file

**Example:** To change the default Hero title:
```php
'default_value' => 'Your New Default Title Here',
```

---

## Managing Images

### Uploading Images

1. When editing a block, click on image fields
2. Click "Upload" to add a new image from your computer
3. Or click "Media Library" to use existing images

### Image Recommendations

- **Hero Poster Image:** 1920x1080px or larger
- **Service Images:** 1200x800px or larger
- **Portfolio Images:** 1400x900px or larger
- **Marquee Images:** 800x800px or larger

All images should be optimized for web (use WebP or AVIF format if possible)

---

## Managing Videos

### Video Fields

Some blocks support video backgrounds (Hero, Marquee, Final CTA):

1. **Bunny CDN URLs:** Paste the full `.m3u8` playlist URL
2. **Direct Video Files:** Upload MP4 or WebM files through the media library
3. **External URLs:** Paste full video URLs

### Video Recommendations

- **Format:** MP4 (H.264) or WebM
- **Resolution:** 1920x1080 (Full HD)
- **File Size:** Keep under 10MB for best performance
- **Length:** 5-30 seconds for backgrounds

---

## Troubleshooting

### Blocks Not Appearing

**Problem:** Custom blocks don't show in the editor

**Solution:**
1. Make sure ACF Pro is installed and activated
2. Go to Plugins → Installed Plugins
3. Confirm "Advanced Custom Fields PRO" is active
4. Refresh the page editor

---

### Demo Page Creation Fails

**Problem:** Clicking "Create Demo Page" shows an error

**Solution:**
1. Ensure you're logged in as an Administrator
2. Check that ACF Pro is active
3. Try creating a page manually instead (Option 2 above)

---

### Content Not Showing on Frontend

**Problem:** Blocks appear in editor but not on the live site

**Solution:**
1. Make sure you selected the **"Homepage (Blocks)"** template
2. Check Page Attributes in the right sidebar
3. Update/Publish the page
4. Clear any caching plugins
5. View page in an incognito window

---

### Styling Issues

**Problem:** Blocks don't look right on the frontend

**Solution:**
1. Ensure all CSS and JS files are properly enqueued
2. Check that the `analogNXTTheme` folder exists in your theme directory
3. Check browser console for any JavaScript errors
4. Clear browser cache and WordPress cache

---

## Support & Documentation

### File Structure

```
analognxt/
├── inc/
│   ├── blocks.php              # Block registration
│   ├── acf-field-groups.php    # Field definitions
│   ├── demo-setup.php          # Demo page helper
│   └── homepage-helpers.php    # Helper functions
├── template-parts/
│   └── blocks/
│       ├── hero.php
│       ├── about.php
│       ├── stats.php
│       ├── featured-clients.php
│       ├── marquee.php
│       ├── scaling-cta.php
│       ├── services.php
│       ├── works.php
│       └── final-cta.php
├── template-homepage-blocks.php # Page template
└── functions.php               # Main theme functions
```

### Key Files to Know

- **Block Registration:** `inc/blocks.php` - Where blocks are registered with WordPress
- **Field Definitions:** `inc/acf-field-groups.php` - Where ACF fields are defined
- **Block Templates:** `template-parts/blocks/*.php` - The actual block HTML/PHP
- **Page Template:** `template-homepage-blocks.php` - The homepage template file

### Making Edits

- **To change block content:** Use the WordPress editor (no code needed)
- **To change block fields:** Edit `inc/acf-field-groups.php`
- **To change block HTML:** Edit files in `template-parts/blocks/`
- **To add new blocks:** Follow the pattern in `inc/blocks.php`

---

## Advanced Usage

### Creating Additional Pages

You can use these blocks on any page:

1. Create a new page
2. Select the "Homepage (Blocks)" template
3. Add any combination of blocks
4. Each page can have different content

### Duplicating Blocks

To use the same block twice on one page:

1. Add the block as normal
2. Fill in different content for each instance
3. Each block instance saves its own data

### Using Blocks in Posts

Currently blocks are designed for pages, but you can enable them for posts:

1. Edit `inc/blocks.php`
2. Add `'post_type' => array('page', 'post'),` to each block registration
3. Save and refresh

---

## Tips & Best Practices

### Performance

1. **Optimize Images:** Use WebP or AVIF format, compress before uploading
2. **Limit Repeater Items:** Don't add 50+ items to services or portfolio
3. **Video Size:** Keep background videos under 10MB
4. **Use CDN:** Consider using a CDN for videos (Bunny CDN is pre-configured)

### Content

1. **Write Clear CTAs:** Make button text action-oriented
2. **Keep Descriptions Concise:** 2-3 paragraphs maximum per section
3. **High-Quality Images:** Use professional photos, min 1200px wide
4. **Consistent Tone:** Maintain brand voice across all blocks

### SEO

1. **Use Descriptive Titles:** Make hero and heading text meaningful
2. **Alt Text for Images:** Fill in alt text for all uploaded images
3. **Internal Linking:** Link to other pages in your CTAs
4. **Page Title:** Set a proper page title in the document settings

---

## Next Steps

1. ✅ Install ACF Pro
2. ✅ Activate the theme
3. ✅ Create a demo homepage or new page
4. ✅ Customize the content in each block
5. ✅ Set your homepage in Settings → Reading
6. ✅ Add your branding, colors, and content
7. ✅ Test on mobile devices
8. ✅ Publish and share!

---

## Quick Reference Card

| Block | Purpose | Key Fields |
|-------|---------|------------|
| Hero | Main banner | Video URL, Title, Featured Project |
| About | Company intro | Heading, Description, Button |
| Stats | Show numbers | Repeater: Number, Label |
| Clients | Logo marquee | Client names (comma-separated) |
| Marquee | Visual flow | Repeater: Text/Image items |
| Scaling CTA | Mid-page CTA | Heading, Subheading |
| Services | What you offer | Repeater: Services with images |
| Works | Portfolio | Repeater: Projects with details |
| Final CTA | End CTA | Heading, Video, Button |

---

## Getting Help

If you need assistance:

1. Check this guide first
2. Review the default demo page for examples
3. Inspect the block code in `template-parts/blocks/`
4. Check ACF documentation: https://www.advancedcustomfields.com/resources/

---

**Last Updated:** January 2026
**Theme Version:** 1.0.0
**Compatible With:** WordPress 5.8+, ACF Pro 6.0+
