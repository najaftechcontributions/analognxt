# AnalogNXT Theme - Quick Start Guide

## ⚡ Fast Setup (5 Minutes)

### Step 1: Install ACF Pro
1. Download and install **Advanced Custom Fields (ACF) Pro**
2. Activate the plugin from WordPress Admin

### Step 2: Activate Theme
1. Upload theme to `/wp-content/themes/analognxt`
2. Activate from **Appearance → Themes**

### Step 3: Create Your Homepage
**Option A - Demo Page (Fastest)**
- Click "Create Demo Homepage" button in admin notice
- Or visit: `yoursite.com/wp-admin/?create_demo_page=1`

**Option B - From Scratch**
1. **Pages → Add New**
2. Template: Select **"Homepage (Blocks)"**
3. Click **+** button → Find **AnalogNXT Blocks**
4. Add blocks and customize

### Step 4: Set as Homepage
1. **Settings → Reading**
2. Select **"A static page"**
3. Choose your page as Homepage
4. Save

---

## 🧩 All 9 Blocks

| # | Block Name | Purpose |
|---|------------|---------|
| 1 | **Hero Section** | Video background hero with featured project |
| 2 | **About Section** | Company introduction with CTA button |
| 3 | **Stats Section** | Animated statistics with parallax effect |
| 4 | **Featured Clients** | Scrolling client names marquee |
| 5 | **Marquee Section** | Animated text/image carousel |
| 6 | **Scaling CTA** | Large scaling text call-to-action |
| 7 | **Services Section** | Sticky card services showcase |
| 8 | **Works/Portfolio** | Portfolio grid with project details |
| 9 | **Final CTA** | 3D animated contact section |

---

## 📝 How to Edit Content

### In Gutenberg Editor:
1. Click any block
2. Edit fields in the **right sidebar**
3. All changes save to database
4. Click **Update** when done

### Common Fields:
- **Text Fields** - Simple text input
- **WYSIWYG** - Rich text editor (About description)
- **Image** - Upload or select from library
- **URL** - Links to pages or external sites
- **Repeater** - Add multiple items (Services, Stats, Works)

---

## 🎨 Recommended Block Order

```
1. Hero Section          ← Grab attention
2. About Section         ← Introduce company
3. Stats Section         ← Build credibility
4. Featured Clients      ← Social proof
5. Marquee Section       ← Visual interest
6. Scaling CTA           ← Mid-page engagement
7. Services Section      ← What you offer
8. Works/Portfolio       ← Show your work
9. Final CTA            ← Convert visitors
```

---

## 🖼️ Image Size Recommendations

| Block | Recommended Size | Format |
|-------|-----------------|--------|
| Hero Poster | 1920x1080px | WebP/AVIF |
| Service Images | 1200x800px | WebP/AVIF |
| Portfolio Images | 1400x900px | WebP/AVIF |
| Marquee Images | 800x800px | WebP/AVIF |

**Always optimize images for web!**

---

## 🎥 Video Guidelines

### Supported Formats:
- MP4 (H.264) ✅
- WebM ✅
- Bunny CDN URLs (.m3u8) ✅

### Best Practices:
- **Resolution:** 1920x1080 (Full HD)
- **File Size:** Under 10MB
- **Length:** 5-30 seconds for backgrounds
- **Optimize:** Use HandBrake or similar tools

---

## ⚙️ Block Settings at a Glance

### 1. Hero Section
```
✏️ Video URL
✏️ Poster Image
✏️ Hero Title
✏️ Featured Project (post/page selector)
✏️ Featured Label
✏️ Social Links (repeater)
```

### 2. About Section
```
✏️ Eyebrow Text
✏️ Heading
✏️ Description (WYSIWYG)
✏️ Button Text
✏️ Button Link
```

### 3. Stats Section
```
✏️ Stats Items (repeater)
   - Number (e.g., "150+")
   - Label
```

### 4. Featured Clients
```
✏️ Clients Text (comma-separated names)
```

### 5. Marquee Section
```
✏️ Marquee Items (repeater)
   - Type (Text or Image)
   - Text content
   - Image upload
✏️ Scaling Video
```

### 6. Scaling CTA
```
✏️ Heading
✏️ Subheading
```

### 7. Services Section
```
✏️ Eyebrow Text
✏️ Heading
✏️ Button Text & Link
✏️ Services Items (repeater)
   - Number
   - Title
   - Items (bullet points)
   - Image
```

### 8. Works/Portfolio
```
✏️ Eyebrow Text
✏️ Heading
✏️ Button Text & Link
✏️ Portfolio Items (repeater)
   - Title
   - Client
   - Year
   - Category
   - Link
   - Featured Image
```

### 9. Final CTA
```
✏️ Heading
✏️ 3D Animation Video
✏️ Button Text
✏️ Button Link
```

---

## 🔧 Common Tasks

### Add a New Service
1. Edit page
2. Click **Services Section** block
3. Right sidebar → **Add Service**
4. Fill in: Number, Title, Items, Image
5. Update page

### Change Hero Video
1. Click **Hero Section** block
2. Right sidebar → **Background Video URL**
3. Paste new URL or upload file
4. Update page

### Reorder Blocks
1. Click **⋮⋮** icon on left of block
2. Drag up or down
3. Or use ↑↓ arrows in toolbar

### Remove a Block
1. Click block
2. Click **⋮** (three dots) in toolbar
3. Select **Remove Block**

---

## 🚨 Troubleshooting

### Blocks Not Showing?
→ Make sure ACF Pro is active

### Content Not Appearing?
→ Check you selected "Homepage (Blocks)" template

### Styling Issues?
→ Clear cache (browser + WordPress)
→ Check browser console for errors

### Demo Page Button Missing?
→ Only visible to Administrators
→ Or visit: `?create_demo_page=1`

---

## 📁 File Locations

```
inc/
├── blocks.php              ← Block registration
├── acf-field-groups.php    ← Field definitions
└── demo-setup.php          ← Demo page creator

template-parts/blocks/
├── hero.php                ← Hero block template
├── about.php               ← About block template
├── stats.php               ← Stats block template
├── featured-clients.php    ← Clients block template
├── marquee.php             ← Marquee block template
├── scaling-cta.php         ← Scaling CTA template
├── services.php            ← Services block template
├── works.php               ← Works block template
└── final-cta.php           ← Final CTA template
```

---

## 💡 Pro Tips

1. **Use Repeaters Wisely**
   - Stats: 3-4 items max
   - Services: 4-6 items
   - Portfolio: 6-12 items

2. **Keep Text Concise**
   - Headings: 5-10 words
   - Descriptions: 2-3 paragraphs max
   - CTA buttons: 2-4 words

3. **Optimize Everything**
   - Compress images before upload
   - Use WebP/AVIF format
   - Keep videos under 10MB
   - Enable caching plugin

4. **Test on Mobile**
   - Preview on real devices
   - Check all animations work
   - Ensure videos load properly

5. **Maintain Consistency**
   - Use same tone across blocks
   - Match brand colors
   - Keep image styles consistent

---

## ✅ Launch Checklist

- [ ] ACF Pro installed and activated
- [ ] Theme activated
- [ ] Demo page created OR custom page built
- [ ] All block content customized
- [ ] Images optimized and uploaded
- [ ] Videos added and tested
- [ ] Links verified (buttons, social, etc.)
- [ ] Homepage set in Settings → Reading
- [ ] Tested on desktop browser
- [ ] Tested on mobile device
- [ ] Cache cleared
- [ ] SEO settings configured
- [ ] Analytics added
- [ ] Ready to publish! 🚀

---

## 📚 Full Documentation

For detailed documentation, see **SETUP-GUIDE.md**

---

**Need Help?** Refer to SETUP-GUIDE.md for complete instructions.
