# AnalogNXT WordPress Theme

A modern, fully dynamic WordPress theme with 9 custom Gutenberg blocks for creating stunning homepages. Built with Advanced Custom Fields (ACF) Pro for easy content management.

![Version](https://img.shields.io/badge/version-1.0.0-blue)
![WordPress](https://img.shields.io/badge/wordpress-5.8%2B-blue)
![PHP](https://img.shields.io/badge/php-7.4%2B-blue)
![ACF](https://img.shields.io/badge/ACF_Pro-required-red)

---

## 🎯 Overview

AnalogNXT is a premium WordPress theme that transforms your Figma designs into fully editable Gutenberg blocks. Every element is dynamic and can be customized through the WordPress dashboard - no coding required!

### ✨ Key Features

- **9 Custom Gutenberg Blocks** - All sections as reusable blocks
- **100% Dynamic Content** - Edit everything from the dashboard
- **ACF Pro Integration** - User-friendly field management
- **One-Click Demo Setup** - Get started in seconds
- **Fully Responsive** - Works on all devices
- **Animation Ready** - GSAP, ScrollTrigger, and more
- **Video Backgrounds** - Bunny CDN support included
- **Production Ready** - Secure, optimized, and tested

---

## 📦 What's Included

### 🧩 Custom Blocks

1. **Hero Section** - Video background with featured project
2. **About Section** - Company introduction with CTA
3. **Stats Section** - Animated statistics with parallax
4. **Featured Clients** - Scrolling client marquee
5. **Marquee Section** - Text/image carousel
6. **Scaling CTA** - Large scaling text animation
7. **Services Section** - Sticky card services showcase
8. **Works/Portfolio** - Project grid with details
9. **Final CTA** - 3D animated contact section

### 📚 Documentation

- **QUICK-START.md** - Get up and running in 5 minutes
- **SETUP-GUIDE.md** - Complete setup and usage instructions
- **PROJECT-SUMMARY.md** - Technical implementation details

---

## 🚀 Quick Start

### Requirements

- WordPress 5.8 or higher
- PHP 7.4 or higher
- **Advanced Custom Fields (ACF) Pro** (required)

### Installation

1. **Install ACF Pro**
   ```
   Download and activate ACF Pro plugin
   ```

2. **Activate Theme**
   ```
   Upload to /wp-content/themes/
   Activate from Appearance → Themes
   ```

3. **Create Homepage**
   
   **Option A - Demo Page (Fastest)**
   - Click "Create Demo Homepage" in admin notice
   - Or visit: `yoursite.com/wp-admin/?create_demo_page=1`
   
   **Option B - Custom Page**
   - Pages → Add New
   - Template: "Homepage (Blocks)"
   - Add AnalogNXT blocks
   - Customize content

4. **Set as Homepage**
   ```
   Settings → Reading
   Select "A static page"
   Choose your page
   Save
   ```

**That's it! Your site is ready! 🎉**

---

## 📖 Documentation

### For End Users

**[QUICK-START.md](QUICK-START.md)** - Fast setup and reference guide

Perfect for getting started quickly. Includes:
- 5-minute setup guide
- Block overview
- Common tasks
- Quick troubleshooting

**[SETUP-GUIDE.md](SETUP-GUIDE.md)** - Complete documentation

Comprehensive guide covering:
- Detailed installation steps
- In-depth block descriptions
- Content management
- Best practices
- Advanced usage

### For Developers

**[PROJECT-SUMMARY.md](PROJECT-SUMMARY.md)** - Technical details

Technical documentation including:
- Complete file structure
- Implementation details
- Code patterns
- API reference
- Testing notes

---

## 🎨 Block Overview

| Block | Description | Key Features |
|-------|-------------|--------------|
| **Hero** | Main banner section | Video background, Featured project, Social links |
| **About** | Company intro | Heading, Description, CTA button |
| **Stats** | Statistics showcase | Repeater items, Parallax effect |
| **Clients** | Client logos | Animated marquee, Text splitting |
| **Marquee** | Visual carousel | Text/Image items, Bi-directional scroll |
| **Scaling CTA** | Mid-page CTA | Large scaling text, Scroll animations |
| **Services** | Services grid | Repeater with images, Sticky cards |
| **Works** | Portfolio showcase | Project grid, Detailed metadata |
| **Final CTA** | End section | 3D animation, Contact button |

---

## 🎯 How to Use

### Adding Blocks

1. Edit your page in Gutenberg editor
2. Click the **+** button
3. Search for "AnalogNXT" or browse the **AnalogNXT Blocks** category
4. Click a block to add it
5. Edit fields in the right sidebar
6. Update the page

### Editing Content

1. Click any block in the editor
2. Use the **right sidebar** to edit fields
3. Changes save to the database automatically
4. Click **Update** when finished

### Reordering Blocks

1. Click the **⋮⋮** icon on the left of any block
2. Drag up or down to reorder
3. Or use the ↑↓ arrow buttons

---

## 🖼️ Media Guidelines

### Images

| Type | Recommended Size | Format |
|------|-----------------|--------|
| Hero Poster | 1920x1080px | WebP/AVIF |
| Services | 1200x800px | WebP/AVIF |
| Portfolio | 1400x900px | WebP/AVIF |
| Marquee | 800x800px | WebP/AVIF |

### Videos

- **Format:** MP4 (H.264) or WebM
- **Resolution:** 1920x1080 (Full HD)
- **File Size:** Under 10MB for best performance
- **Length:** 5-30 seconds for backgrounds

---

## 🔧 Technical Details

### File Structure

```
analognxt/
├── inc/
│   ├── blocks.php              # Block registration
│   ├── acf-field-groups.php    # ACF field definitions
│   ├── demo-setup.php          # Demo page creator
│   └── homepage-helpers.php    # Helper functions
│
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
│
├── analogNXTTheme/             # Design assets
│   ├── css/
│   ├── js/
│   ├── images/
│   └── media/
│
├── functions.php               # Main theme setup
├── template-homepage-blocks.php # Page template
│
├── QUICK-START.md             # Fast setup guide
├── SETUP-GUIDE.md             # Complete documentation
├── PROJECT-SUMMARY.md         # Technical details
└── README.md                  # This file
```

### Technologies Used

- **WordPress** 5.8+
- **Advanced Custom Fields Pro** 6.0+
- **GSAP** - Animations
- **ScrollTrigger** - Scroll animations
- **Barba.js** - Page transitions
- **Lenis** - Smooth scrolling
- **Swiper** - Carousel functionality

---

## 🛠️ Customization

### Changing Default Content

Edit default values in: `inc/acf-field-groups.php`

```php
'default_value' => 'Your new default text here',
```

### Modifying Block HTML

Edit block templates in: `template-parts/blocks/*.php`

### Adding New Blocks

Follow the pattern in:
1. Register block in `inc/blocks.php`
2. Define fields in `inc/acf-field-groups.php`
3. Create template in `template-parts/blocks/`

---

## 🚨 Troubleshooting

### Blocks not showing in editor?
→ Make sure ACF Pro is installed and activated

### Content not displaying on frontend?
→ Verify "Homepage (Blocks)" template is selected

### Styling issues?
→ Clear browser cache and WordPress cache

### Demo page creation fails?
→ Ensure you're logged in as Administrator

**More help:** See [SETUP-GUIDE.md](SETUP-GUIDE.md#troubleshooting)

---

## 📋 Support

### Documentation

- **Quick Start:** [QUICK-START.md](QUICK-START.md)
- **Full Guide:** [SETUP-GUIDE.md](SETUP-GUIDE.md)
- **Technical Docs:** [PROJECT-SUMMARY.md](PROJECT-SUMMARY.md)

### External Resources

- [WordPress Block Editor Handbook](https://developer.wordpress.org/block-editor/)
- [ACF Blocks Documentation](https://www.advancedcustomfields.com/resources/blocks/)
- [ACF Field Types](https://www.advancedcustomfields.com/resources/#field-types)

---

## ✅ Features Checklist

- [x] 9 Custom Gutenberg blocks
- [x] Fully dynamic content (ACF integration)
- [x] One-click demo page setup
- [x] Responsive design
- [x] Video background support
- [x] Image optimization ready
- [x] SEO friendly structure
- [x] GSAP animations
- [x] Smooth scrolling
- [x] Page transitions
- [x] Security best practices
- [x] Comprehensive documentation
- [x] Production ready

---

## 🎓 Learning Path

### New to WordPress Blocks?
1. Start with [QUICK-START.md](QUICK-START.md)
2. Create the demo page
3. Explore how blocks work
4. Customize the content
5. Read [SETUP-GUIDE.md](SETUP-GUIDE.md) for advanced features

### Experienced Developer?
1. Review [PROJECT-SUMMARY.md](PROJECT-SUMMARY.md)
2. Check `inc/blocks.php` for registration patterns
3. Explore `template-parts/blocks/` for templates
4. Customize as needed

---

## 🏆 Best Practices

### Content
- Keep headings concise (5-10 words)
- Limit descriptions to 2-3 paragraphs
- Use high-quality images (WebP format)
- Optimize videos before uploading

### Performance
- Compress images before upload
- Keep videos under 10MB
- Use a caching plugin
- Enable CDN for media files

### SEO
- Fill in alt text for all images
- Use descriptive headings
- Set proper page titles
- Internal linking in CTAs

---

## 📊 Stats

- **Total Blocks:** 9
- **Editable Fields:** 100+
- **Documentation Lines:** 1,400+
- **Template Files:** 9
- **Field Groups:** 9
- **Code Quality:** Production ready
- **Security:** WordPress standards
- **Performance:** Optimized

---

## 🎉 What's Next?

1. ✅ Install and activate the theme
2. ✅ Create your homepage
3. ✅ Customize the content
4. ✅ Add your branding
5. ✅ Upload your media
6. ✅ Test on mobile devices
7. ✅ Optimize for SEO
8. ✅ Launch your site! 🚀

---

## 📝 Version History

### Version 1.0.0 (January 2026)
- ✅ Initial release
- ✅ 9 custom Gutenberg blocks
- ✅ Full ACF integration
- ✅ Demo page system
- ✅ Complete documentation
- ✅ Production ready

---

## 📄 License

This theme is proprietary software. All rights reserved.

---

## 👨‍💻 About

**Theme Name:** AnalogNXT  
**Version:** 1.0.0  
**Author:** Zeit Media  
**Description:** Modern WordPress theme with dynamic Gutenberg blocks  
**Tags:** gutenberg, blocks, acf, video, portfolio, agency  

---

## 🙏 Credits

- **Design System:** Original AnalogNXT/Zeit design
- **Animation Libraries:** GSAP, ScrollTrigger, Lenis
- **WordPress Integration:** Custom development
- **Block System:** ACF Pro
- **Video Hosting:** Bunny CDN support

---

## 🔗 Quick Links

- [Quick Start Guide](QUICK-START.md) - Get started in 5 minutes
- [Setup Guide](SETUP-GUIDE.md) - Complete documentation  
- [Project Summary](PROJECT-SUMMARY.md) - Technical details
- [WordPress Codex](https://codex.wordpress.org/)
- [ACF Documentation](https://www.advancedcustomfields.com/resources/)

---

**Ready to build something amazing?** 

Start with [QUICK-START.md](QUICK-START.md) and you'll be live in minutes! ✨

---

**Made with ❤️ for WordPress**
