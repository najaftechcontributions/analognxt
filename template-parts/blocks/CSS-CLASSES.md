# CSS Classes Reference

This document explains the CSS classes used in the homepage blocks and their purposes.

## Class Naming Convention

The project uses a mix of:
- **Utility Classes** (prefix: `u-`)
- **Component Classes** (descriptive names)
- **Webflow Classes** (prefix: `w-`)
- **Data Attributes** (for JavaScript)

## Block-Specific Classes

### Hero Section

#### Main Container
- `.hero-section` - Section wrapper
- `.home_hero_contain` - Hero content container
- `.bunny-bg` - Background video player wrapper

#### Title Area
- `.home_hero_title_wrap` - Title wrapper grid
- `.home_title_column` - Left column for main title
- `.home_featured_column` - Right column for featured project

#### Featured Project
- `.featured_link` - Clickable wrapper
- `.featured_image` - Project image
- `.featured_info_wrap` - Text info container
- `.featured_info_text` - "New Project" label
- `.featured_cs_title` - Project title

#### Bottom Links
- `.home_hero_bottom_wrap` - Bottom section wrapper
- `.home_hero_bottom` - Bottom grid container
- `.home_hero_bottom_left` - Social links column
- `.home_hero_bottom_center` - Works link column
- `.home_hero_bottom_right` - Showreel button column
- `.text-divider` - Separator between links
- `.link` - Link styling

### About Section

- `.about-section` - Section wrapper
- `.about_eyebrow_wrap` - Eyebrow container
- `.eyebrow_wrap` - Eyebrow component
- `.eyebrow_layout` - Eyebrow layout
- `.eyebrow_marker` - Colored marker dot
- `.eyebrow_text` - Eyebrow label text
- `.about_heading` - Content column
- `.home_about_heading` - Main heading
- `.btn-group` - Button container
- `.btn-bubble-arrow` - Animated arrow button
- `.btn-bubble-arrow__arrow` - Arrow icon wrapper
- `.btn-bubble-arrow__content` - Button text wrapper
- `.btn-bubble-arrow__content-text` - Button text

### Stats Section

- `.stats-section` - Section wrapper
- `.parallax-demo-row__half` - Parallax container
- `.parallax-bg` - Background image wrapper
- `.parallax-img` - Background image
- `.parallax-demo-row` - Stats grid container
- `.parallax-demo-row__third` - Individual stat column
- `.parallax-demo-card` - Stat card
- `.c-heading` - Stat number
- `.c-paragraph` - Stat description

### Featured Clients Section

- `.featured-clients-section` - Section wrapper
- `.section_home_client` - Alternative section class
- `.section_wrap` - Section container
- `.featured_client_component` - Component wrapper
- `.featured_client_contain` - Content container
- `.featured_client` - Client text display
- `.is-desktop` - Desktop-only version
- `.is-mobile` - Mobile-only version

### Marquee Section

- `.marquee-section` - Section wrapper
- `.marquee-advanced` - Marquee container
- `.marquee-advanced__scroll` - Scroll wrapper
- `.marquee-advanced__collection` - Items collection
- `.marquee__advanced__p` - Marquee text
- `.home_marquee_image_wrap` - Image wrapper
- `.scaling-element__small-box` - Video scaling container
- `.scaling-video__wrapper` - Video wrapper
- `.scaling-video` - Video element container
- `.scaling-video-overlay` - Dark overlay

### Scaling CTA Section

- `.scaling-cta-section` - Section wrapper
- `.section_scale` - Alternative section class
- `.scaling-element__big-box` - Large scaling container
- `.scailing_text_wrap` - Text wrapper
- `.scailing_text_contain` - Text container
- `._3d_heading_wrap` - 3D heading wrapper
- `.scailing_text` - Animated text
- `.scailing_button_wrap` - Button wrapper grid
- `.scailing_button` - Button column
- `.button_main_wrap` - Main button component
- `.clickable_wrap` - Clickable overlay
- `.clickable_link` - Link element
- `.clickable_btn` - Button element
- `.button_main_text` - Button text
- `.button_bg` - Button background animation

### Services Section

- `.services-section` - Section wrapper
- `.section_contain` - Content container
- `.sticky-card-wrap` - Sticky card wrapper
- `.sticky-card` - Individual sticky card
- `.services_item` - Service item grid
- `.services_number_wrap` - Number column
- `.services_heading_wrap` - Heading column
- `.services_image_wrap` - Image column
- `.services_image` - Service image

### Works Section

- `.works-section` - Section wrapper
- `.home_work_component` - Component wrapper
- `.home_work_grid` - Works grid
- `.home_work_item` - Individual work item
- `.work_item` - Work card wrapper
- `.work_image_wrap` - Image container
- `.work_item_info` - Work information overlay
- `.work_info_wrap` - Year and category wrapper
- `.cs_client` - Work title
- `.cs_title` - Client name
- `.cs_btn_wrap` - Button wrapper
- `.cs_btn_text` - Button text
- `.cs_btn_bg` - Button background

### Final CTA Section

- `.final-cta-section` - Section wrapper
- `.section_cta` - Alternative section class
- `.cta_wrap` - CTA container
- `._3d_heading_wrap` - Heading wrapper
- `._3d_heading` - 3D animated heading
- `.is-last` - Last heading modifier
- `._3d_wrap` - 3D canvas wrapper
- `._3d_canvas` - Canvas container
- `._3d_absolute` - Desktop canvas
- `._3d_absolute_mobile` - Mobile video
- `.hide-mobile` - Hide on mobile

### Footer

- `.footer_wrap` - Footer wrapper
- `.footer_contain` - Footer container
- `.footer_layout` - Footer grid
- `.footer_left_wrap` - Left column
- `.footer_main_title` - Main footer heading
- `.footer_cta` - CTA section
- `.footer_link_wrap` - Link wrapper
- `.footer_link_text` - Link text
- `.footer_link_bg` - Link background animation
- `.footer_nav` - Navigation section
- `.footer_group_wrap` - Group wrapper
- `.footer_group_list` - Navigation list
- `.footer_group_item` - List item
- `.footer_info` - Address section
- `.footer_contact` - Contact section
- `.footer_contact_link` - Contact link
- `.footer_bottom_wrap` - Bottom section
- `.footer_bottom_contain` - Bottom container
- `.footer_bottom_layout` - Bottom layout
- `.footer_bottom_text` - Copyright text
- `.social_link_wrap` - Social links wrapper
- `.social_link_item` - Social link item
- `.social_link` - Social link

## Utility Classes

### Layout
- `.u-container` - Max-width container
- `.u-grid-custom` - Custom grid system
- `.u-column-1` through `.u-column-12` - Grid columns
- `.u-section` - Section wrapper
- `.u-section-spacer` - Section spacing

### Display
- `.u-display-contents` - Display contents
- `.u-width-full` - Full width
- `.u-height-full` - Full height
- `.u-cover-absolute` - Absolute positioned cover
- `.u-position-fixed` - Fixed positioning
- `.u-zindex-1`, `.u-zindex-2`, `.u-zindex-3` - Z-index layers

### Typography
- `.u-text-style-h1` - H1 text style
- `.u-text-style-h2` - H2 text style
- `.u-text-style-h3` - H3 text style
- `.u-text-style-h4` - H4 text style
- `.u-text-style-main` - Main body text
- `.u-text-style-small` - Small text
- `.u-text-style-large` - Large text
- `.u-weight-bold` - Bold font weight
- `.u-text-trim-off` - Disable text trimming
- `.u-line-height-large` - Large line height

### Spacing
- `.u-margin-top-5` - Margin top 5
- `.u-margin-bottom-1` through `.u-margin-bottom-8` - Margin bottom
- `.u-margin-bottom-4`, `.u-margin-bottom-6`, `.u-margin-bottom-7`, `.u-margin-bottom-8` - Various margins

### Sizing
- `.u-max-width-12ch` - Max 12 characters wide
- `.u-max-width-20ch` - Max 20 characters wide
- `.u-max-width-50ch` - Max 50 characters wide
- `.u-max-width-60ch` - Max 60 characters wide
- `.u-min-height-screen` - Minimum viewport height

### Opacity
- `.u-opacity-60` - 60% opacity
- `.u-opacity-80` - 80% opacity

### Alignment
- `.u-alignment-center` - Center alignment
- `.u-align-items-center` - Flex align items center

### Other
- `.u-sr-only` - Screen reader only
- `.u-overflow-clip` - Clip overflow
- `.u-word-break-all` - Break all words
- `.u-rich-text` - Rich text content
- `.u-margin-trim` - Margin trimming
- `.u-flex-vertical-nowrap` - Flex column no wrap
- `.u-icon-medium`, `.u-icon-large`, `.u-icon-xlarge` - Icon sizes
- `.u-ignore-trim` - Ignore margin trim

## Webflow Classes

- `.w-inline-block` - Inline block display
- `.w-dyn-list` - Dynamic list
- `.w-dyn-items` - Dynamic items wrapper
- `.w-dyn-item` - Dynamic item
- `.w-richtext` - Rich text editor output
- `.w-variant-*` - Webflow variants

## State Classes

### Modifiers
- `.is-desktop` - Desktop only
- `.is-mobile` - Mobile only
- `.is-1`, `.is-2` - Numbered variations
- `.is-last` - Last item
- `.is-large` - Large variant
- `.is-right` - Right aligned
- `.is--duplicate` - Duplicate element (for animations)

## Data Attributes (JavaScript Hooks)

### Video Players
- `[data-bunny-background-init]` - Background video player
- `[data-bunny-player-init]` - Standard video player
- `[data-bunny-lightbox-init]` - Lightbox video player
- `[data-player-activated]` - Player activation state
- `[data-player-status]` - Player status (idle, playing, etc.)
- `[data-player-control]` - Player control type

### Animations
- `[data-parallax]` - Parallax element
- `[data-parallax-scrub]` - Parallax scrub amount
- `[data-parallax-start]` - Parallax start position
- `[data-parallax-end]` - Parallax end position
- `[data-parallax-disable]` - Disable parallax on breakpoint
- `[data-flip-element]` - FLIP animation element
- `[data-scailing-text]` - Scaling text animation
- `[data-scailing-btn]` - Scaling button animation
- `[data-heading]` - Heading animation

### Marquee
- `[data-marquee-duplicate]` - Number of duplicates
- `[data-marquee-direction]` - Scroll direction
- `[data-marquee-status]` - Marquee status
- `[data-marquee-speed]` - Base speed
- `[data-marquee-scroll-speed]` - Scroll speed
- `[data-marquee-scroll-target]` - Scroll target element
- `[data-marquee-collection-target]` - Collection target

### Sections
- `[data-home-client-section]` - Home client section
- `[data-home-client-title]` - Client title
- `[data-home-service]` - Service item
- `[data-swiper-group]` - Swiper group
- `[data-swiper-wrap]` - Swiper wrapper

### Buttons
- `[data-button]` - Button component
- `[data-outline]` - Focus outline element

### Other
- `[data-splitting]` - Splitting.js element
- `[data-wf--*]` - Webflow data attributes

## Responsive Classes

### Container Queries
- `@container threshold-small` - Small breakpoint (30em)
- `@container threshold-medium` - Medium breakpoint (48em)
- `@container threshold-large` - Large breakpoint (62em)

### Conditional Classes
- `.u-order-unset-above` - Unset order above breakpoint
- `.u-order-unset-below` - Unset order below breakpoint
- `.u-all-unset-above` - Unset all above breakpoint
- `.u-all-unset-below` - Unset all below breakpoint
- `.u-grid-above` - Grid above breakpoint
- `.u-grid-below` - Grid below breakpoint

### Device Specific
- `.hide-mobile` - Hide on mobile devices

## Animation/Transition Classes

### Hover States
Classes that trigger on hover:
- `.btn-bubble-arrow:hover` - Bubble arrow button
- `.work_item:hover` - Work item card
- `.footer_link_wrap:hover` - Footer links
- `.nav_desktop_link:hover` - Navigation links

### Filter States
- `[data-filter-status="active"]` - Active filter item
- `[data-filter-status="transition-out"]` - Transitioning out
- `[data-filter-status="not-active"]` - Inactive item

## Usage Examples

### Creating a Grid Layout
```html
<div class="u-container u-grid-custom">
    <div class="u-column-4">Column 1</div>
    <div class="u-column-8">Column 2</div>
</div>
```

### Adding Section Spacing
```html
<section class="u-section">
    <div class="u-section-spacer"></div>
    <!-- Content -->
    <div class="u-section-spacer"></div>
</section>
```

### Responsive Typography
```html
<h2 class="u-text-style-h2 u-margin-bottom-4">Heading</h2>
<p class="u-text-style-main u-opacity-80">Description text</p>
```

### Button Component
```html
<div class="button_main_wrap" data-button>
    <div class="clickable_wrap u-cover-absolute">
        <a href="/page" class="clickable_link w-inline-block">
            <span class="clickable_text u-sr-only">Button Text</span>
        </a>
    </div>
    <div aria-hidden="true" class="button_main_text u-text-style-main">Button Text</div>
    <div class="button_bg"></div>
</div>
```

## Best Practices

1. **Don't modify utility classes** - They're used throughout the theme
2. **Keep component classes together** - Don't separate related classes
3. **Use data attributes for JS** - Don't rely on classes for JavaScript
4. **Maintain naming consistency** - Follow existing patterns
5. **Document custom classes** - Add to this file when creating new components

## Notes

- Classes prefixed with `u-` are utility classes and should not be modified
- Classes prefixed with `w-` are from Webflow and may be auto-generated
- Data attributes with `data-wf--*` are Webflow-specific
- Animation classes often rely on GSAP, Lenis, or Splitting.js
- Some classes have responsive variants controlled by container queries
