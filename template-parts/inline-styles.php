<!-- Inline Styles for Homepage -->
<style>
    :root {
        --grid-breakout: [full-start] minmax(0, 1fr) [content-start] repeat(var(--site--column-count), minmax(0, var(--site--column-width))) [content-end] minmax(0, 1fr) [full-end];
        --grid-breakout-single: [full-start] minmax(0, 1fr) [content-start] minmax(0, calc(100% - var(--site--margin) * 2)) [content-end] minmax(0, 1fr) [full-end];
    }

    ::before,
    ::after {
        box-sizing: border-box;
    }

    .w-embed:before,
    .w-embed:after,
    .w-richtext:before,
    .w-richtext:after {
        content: unset;
    }

    html {
        background-color: var(--_theme---background);
    }

    button {
        background-color: unset;
        padding: unset;
        text-align: inherit;
    }

    button:not(:disabled) {
        cursor: pointer;
    }

    video {
        width: 100%;
        object-fit: cover;
    }

    .wf-empty {
        padding: 0;
    }

    svg {
        max-width: 100%;
    }

    @media (prefers-color-scheme: light) {
        option {
            color: black;
        }
    }

    img::selection {
        background: transparent;
    }

    body {
        text-transform: var(--_text-style---text-transform);
        font-smoothing: antialiased;
        -webkit-font-smoothing: antialiased;
    }

    a:not([class]) {
        text-decoration: underline;
    }

    h1,
    h2,
    h3,
    h4,
    h5,
    h6,
    p,
    blockquote,
    label {
        font-family: inherit;
        font-size: inherit;
        font-weight: inherit;
        line-height: inherit;
        letter-spacing: inherit;
        text-transform: inherit;
        text-wrap: inherit;
        margin-top: 0;
        margin-bottom: 0;
    }

    select:has(option[value=""]:checked) {
        color: color-mix(in lab, currentcolor 60%, transparent)
    }

    ::selection {
        background-color: var(--_theme---selection--background);
        color: var(--_theme---selection--text);
    }

    :is(.u-margin-trim, .u-rich-text)> :not(:not(.w-condition-invisible, .u-cover-absolute, .u-ignore-trim) ~ :not(.w-condition-invisible, .u-cover-absolute, .u-ignore-trim)),
    :is(.u-margin-trim, .u-rich-text)> :not(:not(.w-condition-invisible, .u-cover-absolute, .u-ignore-trim) ~ :not(.w-condition-invisible, .u-cover-absolute, .u-ignore-trim)).u-display-contents> :first-child {
        margin-top: 0;
    }

    :is(.u-margin-trim, .u-rich-text)> :not(:has(~ :not(.w-condition-invisible, .u-cover-absolute, .u-ignore-trim))),
    :is(.u-margin-trim, .u-rich-text)> :not(:has(~ :not(.w-condition-invisible, .u-cover-absolute, .u-ignore-trim))).u-display-contents> :last-child {
        margin-bottom: 0;
    }

    :is(h1, h2, h3, h4, h5, h6, p):not(.u-text-trim-off, :has([class*="u-text-style-"]))::before,
    [class*="u-text-style-"]:not(.u-text-trim-off, :has(h1, h2, h3, h4, h5, h6, p))::before {
        content: "";
        display: table;
        margin-bottom: calc(-0.5lh + var(--_text-style---trim-top));
    }

    :is(h1, h2, h3, h4, h5, h6, p):not(.u-text-trim-off, :has([class*="u-text-style-"]))::after,
    [class*="u-text-style-"]:not(.u-text-trim-off, :has(h1, h2, h3, h4, h5, h6, p))::after {
        content: "";
        display: table;
        margin-bottom: calc(-0.5lh + var(--_text-style---trim-bottom));
    }

    .w-richtext a {
        position: relative;
        z-index: 4;
    }

    .u-line-clamp-1,
    .u-line-clamp-2,
    .u-line-clamp-3,
    .u-line-clamp-4 {
        -webkit-line-clamp: 1;
        -webkit-box-orient: vertical;
    }

    .u-line-clamp-2 {
        -webkit-line-clamp: 2;
    }

    .u-line-clamp-3 {
        -webkit-line-clamp: 3;
    }

    .u-line-clamp-4 {
        -webkit-line-clamp: 4;
    }

    .u-child-contain>* {
        width: 100%;
        max-width: inherit !important;
        margin-inline: 0 !important;
        margin-top: 0 !important;
    }

    .u-hide-if-empty:empty,
    .u-hide-if-empty:not(:has(> :not(.w-condition-invisible))),
    .u-hide-if-empty-cms:not(:has(.w-dyn-item)),
    .u-embed-js,
    .u-embed-css {
        display: none !important;
    }

    a,
    button,
    :where([tabindex]),
    [data-outline] {
        outline-offset: var(--focus--offset-outer);
    }

    a:focus-visible,
    button:focus-visible,
    [tabindex]:focus-visible,
    label:has(input:focus-visible) [data-outline] {
        outline-color: var(--_theme---text);
        outline-width: var(--focus--width);
        outline-style: solid;
    }

    [data-button]:has(button:disabled) {
        opacity: 0.5;
        pointer-events: none;
    }

    .button_toggle_wrap:has([aria-pressed="true"]) .button_toggle_play {
        opacity: 0;
    }

    .button_toggle_wrap:has([aria-pressed="true"]) .button_toggle_pause {
        opacity: 1;
    }

    .wf-design-mode .clickable_wrap {
        z-index: 0;
    }

    .clickable_wrap a[href="#"] {
        display: none;
    }

    .clickable_wrap a[href="#"]~button {
        display: block;
    }

    @container threshold-large (width >=62em) {
        .u-order-unset-above {
            order: unset !important;
        }

        .u-all-unset-above {
            all: unset !important;
        }

        .u-grid-below {
            display: flex !important;
        }
    }

    @container threshold-medium (width >=48em) {
        .u-order-unset-above {
            order: unset !important;
        }

        .u-all-unset-above {
            all: unset !important;
        }

        .u-grid-below {
            display: flex !important;
        }
    }

    @container threshold-small (width >=30em) {
        .u-order-unset-above {
            order: unset !important;
        }

        .u-all-unset-above {
            all: unset !important;
        }

        .u-grid-below {
            display: flex !important;
        }
    }

    @container threshold-large (width < 62em) {
        .u-order-unset-below {
            order: unset !important;
        }

        .u-all-unset-below {
            all: unset !important;
        }

        .u-grid-above {
            display: flex !important;
        }
    }

    @container threshold-medium (width < 48em) {
        .u-order-unset-below {
            order: unset !important;
        }

        .u-all-unset-below {
            all: unset !important;
        }

        .u-grid-above {
            display: flex !important;
        }
    }

    @container threshold-small (width < 30em) {
        .u-order-unset-below {
            order: unset !important;
        }

        .u-all-unset-below {
            all: unset !important;
        }

        .u-grid-above {
            display: flex !important;
        }
    }

    .form_main_radio_label:has(input:checked) .form_main_radio_circle_inner {
        opacity: 1;
    }

    .form_main_checkbox_label:has(input:checked) .form_main_checkbox_box {
        background-color: currentColor;
        border-color: currentColor;
    }

    .form_main_checkbox_label:has(input:checked) .form_main_checkbox_icon {
        opacity: 1;
    }

    /* Video Player Styles */
    [data-bunny-player-init] :is(.bunny-player__placeholder, .bunny-player__dark, .bunny-player__playpause, .bunny-player__loading),
    [data-bunny-background-init] :is(.bunny-bg__placeholder, .bunny-bg__loading),
    [data-bunny-lightbox-init] :is(.bunny-lightbox-player__placeholder, .bunny-lightbox-player__dark, .bunny-lightbox-player__playpause, .bunny-lightbox-player__loading) {
        transition: opacity 0.3s linear, visibility 0.3s linear;
    }

    [data-bunny-background-init][data-player-status="playing"] .bunny-bg__placeholder,
    [data-bunny-background-init][data-player-status="paused"] .bunny-bg__placeholder,
    [data-bunny-background-init][data-player-activated="true"][data-player-status="ready"] .bunny-bg__placeholder {
        opacity: 0;
        visibility: hidden;
    }

    [data-bunny-background-init][data-player-status="playing"] .bunny-bg__play-svg,
    [data-bunny-background-init][data-player-status="loading"] .bunny-bg__play-svg {
        display: none;
    }

    [data-bunny-background-init][data-player-status="playing"] .bunny-bg__pause-svg,
    [data-bunny-background-init][data-player-status="loading"] .bunny-bg__pause-svg {
        display: block;
    }

    [data-bunny-background-init][data-player-status="loading"] .bunny-bg__loading {
        opacity: 1;
        visibility: visible;
    }

    /* Bunny Lightbox Visibility Controls */
    .bunny-lightbox {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        z-index: 9999;
        display: flex;
        align-items: center;
        justify-content: center;
        transition: opacity 0.3s ease, visibility 0.3s ease;
    }

    .bunny-lightbox[data-bunny-lightbox-status="not-active"] {
        opacity: 0;
        visibility: hidden;
        pointer-events: none;
    }

    .bunny-lightbox[data-bunny-lightbox-status="active"] {
        opacity: 1;
        visibility: visible;
        pointer-events: auto;
    }

    .bunny-lightbox__dark {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.9);
        z-index: 1;
    }

    .bunny-lightbox__calc {
        position: relative;
        z-index: 2;
        width: 90%;
        max-width: 1400px;
    }

    .bunny-lightbox__close {
        position: absolute;
        top: 2rem;
        right: 2rem;
        width: 3rem;
        height: 3rem;
        z-index: 3;
        border: none;
        background: transparent;
        cursor: pointer;
        padding: 0;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .bunny-lightbox__close-bar {
        position: absolute;
        width: 100%;
        height: 2px;
        background-color: #fff;
        transform: rotate(45deg);
    }

    .bunny-lightbox__close-bar.is--duplicate {
        transform: rotate(-45deg);
    }

    .hero_heading {
        transform: translate3d(0, 0, 0)
    }

    .text-divider {
        display: inline;
    }

    @media screen and (min-width: 480px) {
        .btn-bubble-arrow__content {
            transition: transform 0.735s cubic-bezier(0.625, 0.05, 0, 1);
            transform: translateX(-1rem) rotate(0.001deg);
        }

        .btn-bubble-arrow__arrow {
            transition: transform 0.735s cubic-bezier(0.625, 0.05, 0, 1);
            transform: scale(0) rotate(0.001deg);
            transform-origin: left;
        }

        .btn-bubble-arrow__arrow-svg {
            transition: transform 0.735s cubic-bezier(0.625, 0.05, 0, 1);
            transform: rotate(0.001deg);
        }

        .btn-bubble-arrow__arrow.is--duplicate {
            position: absolute;
            z-index: 2;
            right: 0;
            transform: scale(1) rotate(0.001deg);
            transform-origin: right;
        }

        .btn-bubble-arrow .btn-bubble-arrow__arrow-svg {
            transform: rotate(-45deg);
        }

        .btn-bubble-arrow:hover .btn-bubble-arrow__content {
            transform: translateX(0.25rem) rotate(0.001deg);
        }

        .btn-bubble-arrow:hover .btn-bubble-arrow__arrow-svg {
            transform: rotate(0deg);
        }

        .btn-bubble-arrow:hover .btn-bubble-arrow__arrow {
            transform: scale(1) rotate(0.001deg);
        }

        .btn-bubble-arrow:hover .btn-bubble-arrow__arrow.is--duplicate {
            transform: scale(0) rotate(0.001deg);
        }
    }

    .nav_desktop_link::before,
    .footer_contact_link::before {
        content: "";
        position: absolute;
        bottom: 0em;
        left: 0;
        width: 100%;
        height: 0.0625em;
        background-color: #fff;
        transition: transform 0.735s cubic-bezier(0.625, 0.05, 0, 1);
        transform-origin: right;
        transform: scaleX(0) rotate(0.001deg);
    }

    .nav_desktop_link:hover::before,
    .footer_contact_link:hover::before {
        transform-origin: left;
        transform: scaleX(1) rotate(0.001deg);
    }

    .list_active {
        opacity: 1;
    }

    .blog_list {
        transition: opacity 0.6s cubic-bezier(0.625, 0.05, 0, 1), transform 0.6s cubic-bezier(0.625, 0.05, 0, 1);
        transform: scale(1) rotate(0.001deg);
        opacity: 1;
        visibility: visible;
    }

    .home_work_item:nth-child(1),
    .home_work_item:nth-child(2) {
        grid-column-end: span 6
    }

    .cs_work_item:nth-child(5n+1),
    .cs_work_item:nth-child(5n+2) {
        grid-column-end: span 6
    }

    .work_item:hover .work_item_info {
        background-color: rgba(255, 255, 255, 0.10);
    }

    .work_item:hover .cs_btn_wrap {
        padding-left: 0.5rem;
        padding-right: 0.5rem;
        opacity: 1;
    }

    .work_item:hover .cs_btn_bg {
        transform: translateY(0%);
    }

    .work_item:hover .cs_btn_text {
        color: black;
    }

    .social_link {
        transition: opacity 0.5s cubic-bezier(0.625, 0.05, 0, 1);
    }

    .footer_link_wrap:hover .footer_link_bg,
    .social_link:hover .footer_link_bg {
        transform: translateY(0%);
    }

    .footer_link_bg {
        transition: transform 0.5s cubic-bezier(0.625, 0.05, 0, 1);
    }

    .cs_btn_bg {
        transition: transform 0.5s cubic-bezier(0.625, 0.05, 0, 1);
    }

    .footer_link_wrap,
    .cs_btn_wrap {
        transition: padding 0.5s cubic-bezier(0.625, 0.05, 0, 1), opacity 0.5s cubic-bezier(0.625, 0.05, 0, 1);
    }

    .footer_link_wrap:hover {
        padding-left: 1rem;
        padding-right: 1rem;
        opacity: 1;
    }

    .button_main_wrap:hover .button_bg {
        transform: translateY(0%);
    }

    .blog_item:hover [data-blog-item-image] {
        transform: scale(0.75);
    }

    .blog_item:hover [data-blog-item-bg] {
        transform: translateY(0%);
    }

    .filter-btn[data-filter-status="active"] {
        opacity: 1;
    }

    .cs_work_item[data-filter-status="active"],
    .blog_item[data-filter-status="active"] {
        transition: opacity 0.6s cubic-bezier(0.625, 0.05, 0, 1), transform 0.6s cubic-bezier(0.625, 0.05, 0, 1);
        transform: scale(1) rotate(0.001deg);
        opacity: 1;
        visibility: visible;
        position: relative;
    }

    .cs_work_item[data-filter-status="transition-out"],
    .blog_item[data-filter-status="transition-out"] {
        transition: opacity 0.45s cubic-bezier(0.625, 0.05, 0, 1), transform 0.45s cubic-bezier(0.625, 0.05, 0, 1);
        transform: scale(0.9) rotate(0.001deg);
        opacity: 0;
        visibility: visible;
    }

    .cs_work_item[data-filter-status="not-active"],
    .blog_item[data-filter-status="not-active"] {
        transform: scale(0.9) rotate(0.001deg);
        opacity: 0;
        visibility: hidden;
        position: absolute;
    }

    .is-list-active {
        opacity: 1;
    }

    @keyframes translateX {
        to {
            transform: translateX(-200%);
        }
    }

    [data-css-marquee-list] {
        animation: translateX 20s linear;
        animation-iteration-count: infinite;
    }

    /* Marquee Advanced Animations */
    .marquee-advanced {
        overflow: hidden;
        position: relative;
        width: 100%;
    }

    .marquee-advanced__scroll {
        display: flex;
        will-change: transform;
        width: fit-content;
    }

    .marquee-advanced__collection {
        display: flex;
        align-items: center;
        gap: 2rem;
        flex-shrink: 0;
        white-space: nowrap;
    }

    /* Seamless infinite marquee animations */
    @keyframes marquee-right {
        0% {
            transform: translateX(-100%);
        }
        100% {
            transform: translateX(0%);
        }
    }

    @keyframes marquee-left {
        0% {
            transform: translateX(0%);
        }
        100% {
            transform: translateX(-33.333%);
        }
    }

    [data-marquee-direction="right"] .marquee-advanced__scroll {
        animation: marquee-right 50s linear infinite;
    }

    [data-marquee-direction="left"] .marquee-advanced__scroll {
        animation: marquee-left 50s linear infinite;
    }

    [data-marquee-speed="15"] .marquee-advanced__scroll {
        animation-duration: 50s;
    }

    [data-marquee-status="paused"] .marquee-advanced__scroll {
        animation-play-state: paused;
    }

    [data-gsap-slider-init] {
        --slider-status: on;
        --slider-spv: 3;
        --slider-gap: 1rem;
    }

    @media screen and (max-width: 991px) {
        [data-gsap-slider-init] {
            --slider-status: on;
            --slider-spv: 2.25;
            --slider-gap: 1.5em;
        }
    }

    @media screen and (max-width: 767px) {
        [data-gsap-slider-init] {
            --slider-status: on;
            --slider-spv: 1.15;
            --slider-gap: 1em;
        }

        .home_work_item {
            --gap: 1.25em;
            padding-right: var(--gap);
        }

        .home_work_item:last-of-type {
            margin-right: calc(-1 * var(--gap));
        }
    }

    [data-gsap-slider-status="not-active"] [data-gsap-slider-controls] {
        display: none;
    }

    [data-gsap-slider-control-status="not-active"] {
        opacity: 0.2;
        pointer-events: none;
    }

    .gsap-slider__control {
        transition: opacity 0.3s ease, background-color 0.3s ease;
    }

    .demo-card {
        transition: all 0.3s ease;
    }

    [data-gsap-slider-item-status="not-active"] .demo-card {
        background-color: #131313;
    }

    .demo-card__tag {
        transition: all 0.3s ease;
    }

    [data-gsap-slider-item-status="not-active"] .demo-card__tag {
        opacity: 0;
    }

    .wf-design-mode [data-show-in-designer="true"] {
        display: block;
        clip-path: none;
    }

    /* Transforming Spaces Section */
    .transforming-section {
        background-color: var(--_theme---background);
        padding: 6rem 0;
    }

    .transforming-heading-wrap {
        text-align: center;
        padding: 0 2rem;
    }

    .transforming-heading {
        font-size: clamp(2.5rem, 5vw, 5rem);
        font-weight: 700;
        line-height: 1.2;
        letter-spacing: -0.02em;
        max-width: 1200px;
        margin: 0 auto;
    }

    @media (max-width: 767px) {
        .transforming-section {
            padding: 4rem 0;
        }
    }

    /* Precision Crafted Section */
    .precision-section {
        background-color: var(--_theme---background);
        padding: 6rem 0;
    }

    .precision-heading-wrap {
        text-align: center;
        padding: 0 2rem;
    }

    .precision-heading {
        font-size: clamp(1.5rem, 3vw, 3rem);
        font-weight: 600;
        line-height: 1.3;
        letter-spacing: 0.05em;
        max-width: 1000px;
        margin: 0 auto;
        text-transform: uppercase;
    }

    @media (max-width: 767px) {
        .precision-section {
            padding: 4rem 0;
        }
    }

    /* Projects List Section */
    .projects-list-section {
        background-color: var(--_theme---background);
        padding: 6rem 0;
    }

    .projects-list {
        display: flex;
        flex-direction: column;
        gap: 0;
    }

    .project-item {
        width: 100%;
    }

    .project-link {
        display: block;
        text-decoration: none;
        color: inherit;
        transition: opacity 0.3s ease;
    }

    .project-link:hover {
        opacity: 0.7;
    }

    .project-link-inner {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 2rem 0;
        gap: 1rem;
    }

    .project-name {
        flex: 1;
        font-weight: 500;
    }

    .project-arrow {
        flex-shrink: 0;
        width: 24px;
        height: 24px;
        opacity: 0.6;
        transition: opacity 0.3s ease, transform 0.3s ease;
    }

    .project-link:hover .project-arrow {
        opacity: 1;
        transform: translateX(4px);
    }

    .project-divider {
        width: 100%;
        height: 1px;
        background-color: currentColor;
        opacity: 0.15;
    }

    @media (max-width: 767px) {
        .projects-list-section {
            padding: 4rem 0;
        }

        .project-link-inner {
            padding: 1.5rem 0;
        }
    }

    /* Footer Map Section */
    .footer_map_section {
        width: 100%;
        margin-top: 4rem;
        padding-top: 4rem;
        border-top: 1px solid rgba(255, 255, 255, 0.1);
    }

    .footer_map_wrap {
        width: 100%;
        height: 400px;
        border-radius: 8px;
        overflow: hidden;
    }

    .footer_map {
        width: 100%;
        height: 100%;
        border: none;
        filter: grayscale(100%) invert(92%) contrast(83%);
    }

    @media (max-width: 767px) {
        .footer_map_section {
            margin-top: 2rem;
            padding-top: 2rem;
        }

        .footer_map_wrap {
            height: 300px;
        }
    }
</style>
