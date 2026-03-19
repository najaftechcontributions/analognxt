<?php
/**
 * Homepage Header Template
 *
 * @package AnalogNXT
 */
?>
<div class="nav_wrap1 w-flex u-justify-center" style="padding-top: 20px">
  <div
    class="nav-inner w-flex u-justify-between u-align-items-center"
    style="width: 100%; max-width: 100%"
  >
    <a href="/homepage-demo">
      <img
        src="https://analognxt.com/wp-content/uploads/2026/01/AnalogNXT-Black-BG-Transparent-PNG-1.png"
        alt="Logo"
        style="width: 100%; max-width: 270px; z-index: 1"
      />
    </a>

    <div class="nav-right u-gap-8 w-flex u-align-center">
      <!-- Hamburger -->
      <div class="hamburger" id="openMenu">
        <i class="fa-solid fa-bars fa-xl" style="color: rgb(255, 255, 255)"></i>
      </div>
			<a href="/contact-us" class="cta-button2">
  Get In Touch <span class="icon">➔</span>
</a>
      <!-- Overlay -->
      <div class="menu-overlay" id="menuOverlay">
        <div class="overlay-bg"></div>

        <div class="overlay-inner">
          <!-- Left Menu -->
          <div class="menu-left">
            <ul>
              <li
                class="active"
                data-image="https://analognxt.com/wp-content/uploads/2026/02/shanghai-night-with-urban-skyscraper-modern-cityscape-street-1-1-scaled.jpg"
              >
                <a href="/homepage-demo">[ HOME ]</a>
              </li>

              <li
                data-image="https://analognxt.com/wp-content/uploads/2026/02/dreamy-interior-mall-1-1-1-scaled.webp"
              >
                <a href="/about-us">[ ABOUT US ]</a>
              </li>

              <li
                data-image="https://analognxt.com/wp-content/uploads/2026/02/dreamy-interior-mall-2-1-1-1-1-scaled.jpg"
              >
                <a href="/our-projects">[ OUR PROJECTS ]</a>
              </li>

              <li
                data-image="https://analognxt.com/wp-content/uploads/2026/02/Image-1-1-9.webp"
              >
                <a href="/services-spatial-experiences">[ SPATIAL SERVICES ]</a>
              </li>

              <li
                data-image="https://analognxt.com/wp-content/uploads/2026/02/cyber-security-expert-working-with-technology-neon-lights-1-scaled.webp"
              >
                <a href="/services-system-integration"
                  >[ SYSTEM INTEGRATION ]</a
                >
              </li>

              <li
                data-image="https://analognxt.com/wp-content/uploads/2026/01/Image-1-1.webp"
              >
                <a href="/blog">[ BLOG ]</a>
              </li>

              <li
                data-image="https://analognxt.com/wp-content/uploads/2026/02/Image-1-1-10-1.webp"
              >
                <a href="/contact-us">[ CONTACT US ]</a>
              </li>
            </ul>
          </div>

          <!-- Right Image -->
          <div class="menu-right">
            <img
              id="menuImage"
              src="https://analognxt.com/wp-content/uploads/2026/02/shanghai-night-with-urban-skyscraper-modern-cityscape-street-1-1-scaled.jpg"
            />
          </div>

          <!-- Close -->
          <div class="close-btn" id="closeMenu">✕</div>
        </div>
      </div>
    </div>
  </div>
</div>

<style>
  a:not([class]) {
    text-decoration: none !important;
  }
	.cta-button2 {
  display: inline-flex;
  align-items: center;
  gap: 8px;
  font-size: 16px;
  font-weight: bold;
  color: #fff;
  text-decoration: none;
  padding: 12px 25px;
  border-radius: 1000px;
  background: none;
  transition: all 0.3s ease;
  z-index: 99;
  border: 1px solid #F29740;
  position: relative;
  overflow: hidden; /* Ensure the background stays within the button */
	font-family: 'Montserrat', sans-serif;
}
	@media (max-width:768px){
		.cta-button2{
			display:none !important;
		}
	}

/* On hover */
.cta-button2:hover {
  background-color: #fdd835; /* Darker yellow on hover */
}

.cta-button2 .icon {
  margin-left: 8px;
  font-size: 20px;
	    transform: rotate(-45deg);
}

	@media screen and (max-width: 600px) {
  .cta-button2 {
    font-size: 10px; /* Smaller font size */
    padding: 8px 20px; /* Adjust padding */
  }

  .cta-button2 .icon {
    font-size: 16px; /* Adjust icon size */
  }
}

/* Mobile responsiveness (for screens smaller than 400px) */
@media screen and (max-width: 400px) {
  .cta-button2 {
    font-size: 9px; /* Even smaller font size */
    padding: 6px 15px; /* Further adjust padding */
  }

  .cta-button2 .icon {
    font-size: 14px; /* Adjust icon size */
  }
}
/* Before pseudo-element for the "rise" effect */
.cta-button2::before {
  content: "";
  position: absolute;
  top: 100%; /* Start below the button */
  left: 0;
  width: 100%;
  height: 100%;
  background-color: #F29740; /* Yellow background */
  transition: top 0.3s ease; /* Smooth transition */
  z-index: -1; /* Place it behind the text */
}

.cta-button2:hover::before {
  top: 0; /* Move the background up when hovered */
}

  /* Overlay */
  .menu-overlay {
    position: fixed;
    inset: 0;
    width: 100%;
    height: 100vh;
    overflow: hidden;
    display: flex;
    align-items: center;
    justify-content: center;
    transform: translateY(-100%);
    transition: 0.6s ease;
    z-index: 9999;
  }

  .menu-overlay.active {
    transform: translateY(0);
  }

  /* Blurred Background */
  .overlay-bg {
    position: absolute;
    inset: 0;
    background: url("https://analognxt.com/wp-content/uploads/2026/02/shanghai-night-with-urban-skyscraper-modern-cityscape-street-1-1-scaled.jpg")
      center/cover no-repeat;
    filter: blur(30px);
    transform: scale(1.2);
    z-index: 0;
    pointer-events: none;
  }

  /* Dark overlay */
  .overlay-bg::after {
    content: "";
    position: absolute;
    inset: 0;
    background: rgba(0, 0, 0, 0.75);
  }

  /* Inner content */
  .overlay-inner {
    position: relative;
    width: 85%;
    height: 80%;
    display: flex;
    justify-content: space-between;
    align-items: center;
    z-index: 2;
  }
  @media (max-width: 768px) {
    .overlay-inner {
      flex-direction: column;
      width: 90%;
    }
  }

  /* Left Menu */
  .menu-left ul {
    list-style: none;
  }

  .menu-left li {
    font-size: 35px;
    font-family: "Montserrat", sans-serif;
    font-weight: 500;
    color: rgba(255, 255, 255, 0.5);
    margin: 20px 0;
    cursor: pointer;
    transition: 0.3s ease;
    letter-spacing: 2px;
  }
  @media (max-width: 768px) {
    .menu-left li {
      font-size: 22px;
    }
  }

  .menu-left li:hover,
  .menu-left li.active {
    color: #ff9d00;
  }

  /* Right Image */
  .menu-right {
    width: 40%;
    height: 70%;
    display: flex;
    align-items: center;
    justify-content: center;
  }
  @media (max-width: 768px) {
    .menu-right {
      width: 100%;
    }
  }
  .menu-right img {
    max-width: 100%;
    max-height: 100%;
    transform: rotate(6deg);
    transition: opacity 0.3s ease;
    border-radius: 8px;
    opacity: 1;
  }

  /* Close Button */
  .close-btn {
    position: absolute;
    bottom: 25px;
    left: 50%;
    transform: translateX(-50%);
    font-size: 22px;
    color: #fff;
    cursor: pointer;
  }
  /* Dropdown container */
  .dropdown {
    position: relative;
    /* needed for absolute positioning of menu */
    display: inline-block;
  }

  /* Hide the menu by default */
  .dropdown-menu {
    display: none;
    position: absolute;
    top: 100%;
    /* right below the button */
    left: 0;
    background: #000;
    min-width: 180px;
    border-radius: 5px;
    overflow: hidden;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
    z-index: 100;
  }

  /* Menu items */
  .dropdown-menu li {
    list-style: none;
  }

  .dropdown-menu li a {
    display: block;
    padding: 10px 15px;
    color: #fff;
    font-family: "Montserrat", sans-serif;
    font-size: 18px;
    font-weight: 500;
    text-decoration: none;
    transition: background 0.2s;
  }

  .dropdown-menu li a:hover {
    background: rgba(255, 255, 255, 0.1);
  }

  /* Show menu on hover */
  .dropdown:hover .dropdown-menu {
    display: block;
  }

  #newhero-block_f625a2a79ace96295cf2f47266521552 {
    margin-top: -80px !important;
  }

  html {
    margin-top: 0px !important;
  }

  .nav_wrap1 {
    position: sticky;
    /* or fixed if you want it always visible */
    top: 0;
    width: 100%;
    z-index: 999;
    background: transparent;
    /* default transparent */
    transition:
      background 0.3s ease,
      box-shadow 0.3s ease;
    padding: 20px;
  }

  /* Class added when scrolled */
  .nav_wrap1.scrolled {
    background: rgba(0, 0, 0, 0.85);
    /* dark translucent background */
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.2);
    /* optional shadow */
  }

  .menu-item {
    font-size: 25px;
  }

  /* Mobile dropdown */
  .mobile-dropdown {
    position: absolute;
    top: 100%;
    background: #000;
    border-radius: 8px;
    overflow: hidden;
    max-height: 0;
    /* collapsed */
    opacity: 0;
    /* hidden */
    transition:
      max-height 0.4s ease,
      opacity 0.4s ease;
    width: 100%;
    z-index: 100;
  }

  /* Show menu when active */
  .mobile-dropdown.active {
    max-height: 500px;
    /* enough to fit all items */
    opacity: 1;
  }

  /* List styles */
  .mobile-dropdown ul {
    list-style: none;
    padding: 0;
    margin: 0;
  }

  .mobile-dropdown li {
    padding: 10px 20px;
  }

  .mobile-dropdown li a {
    color: #fff;
    text-decoration: none;
    display: block;
    text-align: center;
  }

  .mobile-dropdown li:hover {
    background: rgba(255, 255, 255, 0.1);
  }

  /* Hamburger styling */
  .mobile-menu-toggle {
    font-size: 2rem;
    background: transparent;
    border: none;
    cursor: pointer;
    z-index: 200;
    position: relative;
  }

  /* Only show on mobile */
  @media (min-width: 768px) {
    .mobile-menu-toggle,
    .mobile-dropdown {
      display: none;
    }
  }

  .men-item {
    background: none;
    /* no background */
    border: none;
    /* remove default button border */
    padding: 0.5rem 0;
    /* vertical padding, no horizontal – adjust as needed */
    font-family: "Montserrat", sans-serif;
    font-size: 18px;
    font-weight: 500;
    /* medium weight – typical for menus */
    color: #fff;
    /* dark grey, adjust to your palette */
    text-decoration: none;
    /* remove underline if any */
    display: inline-flex;
    align-items: center;
    gap: 0.5rem;
    /* space between text and arrow */
    cursor: pointer;
    transition: color 0.2s ease;
  }

  .men-item:hover {
    color: #f29740;
  }

  @media (max-width: 1200px) {
    .men-item {
      font-size: 14px;
    }
  }

  /* Initial icon rotation (220°) is already inline: style="--fa-rotate-angle: 220deg;" */
  /* Hover: rotate to 270° */
  button.men-item i.fa-solid.fa-arrow-down {
    transform: rotate(220deg) !important;
  }

  #wpadminbar {
    display: none;
  }

  .nav_wrap {
    pointer-events: none;
  }

  .mobile-menu-toggle {
    position: absolute !important;
    top: 20px;
    right: 20px;
  }
</style>
<script>
  document.addEventListener("DOMContentLoaded", () => {
    const toggle = document.querySelector(".mobile-menu-toggle");
    const dropdown = document.querySelector(".mobile-dropdown");

    if (toggle && dropdown) {
      toggle.addEventListener("click", () => {
        dropdown.classList.toggle("active");
      });

      // Optional: close dropdown when clicking outside
      document.addEventListener("click", (e) => {
        if (!dropdown.contains(e.target) && !toggle.contains(e.target)) {
          dropdown.classList.remove("active");
        }
      });
    }
  });
  document.addEventListener("DOMContentLoaded", () => {
    const header = document.querySelector(".nav_wrap1");

    window.addEventListener("scroll", () => {
      if (window.scrollY > 50) {
        // scroll threshold in px
        header.classList.add("scrolled");
      } else {
        header.classList.remove("scrolled");
      }
    });
  });
</script>
<script>
  document.addEventListener("DOMContentLoaded", function () {
    const overlay = document.getElementById("menuOverlay");
    const openBtn = document.getElementById("openMenu");
    const closeBtn = document.getElementById("closeMenu");
    const menuItems = document.querySelectorAll(".menu-left li");
    const menuImage = document.getElementById("menuImage");

    let imageTimeout = null;
    let currentImage = menuImage.getAttribute("src");

    /* =========================
       PRELOAD ALL MENU IMAGES
    ==========================*/
    menuItems.forEach((item) => {
      const preloadImg = new Image();
      preloadImg.src = item.dataset.image;
    });

    /* =========================
       OPEN MENU
    ==========================*/
    openBtn.addEventListener("click", () => {
      overlay.classList.add("active");
    });

    /* =========================
       CLOSE MENU
    ==========================*/
    closeBtn.addEventListener("click", () => {
      overlay.classList.remove("active");
    });

    /* =========================
       IMAGE HOVER SWITCH
    ==========================*/
    menuItems.forEach((item) => {
      item.addEventListener("mouseenter", function () {
        const newImage = this.dataset.image;

        if (newImage === currentImage) return;

        menuItems.forEach((i) => i.classList.remove("active"));
        this.classList.add("active");

        if (imageTimeout) clearTimeout(imageTimeout);

        menuImage.style.opacity = "0";

        imageTimeout = setTimeout(() => {
          const img = new Image();
          img.src = newImage;

          img.onload = function () {
            menuImage.src = newImage;
            menuImage.style.opacity = "1";
            currentImage = newImage;
          };

          img.onerror = function () {
            menuImage.style.opacity = "1";
          };
        }, 150);
      });

      /* =========================
         CLOSE OVERLAY ON MENU CLICK
      ==========================*/
      item.addEventListener("click", function () {
        overlay.classList.remove("active");
      });
    });
  });
</script>
<script>
(function () {
  if (window.__forceReloadLinksInitialized) return;
  window.__forceReloadLinksInitialized = true;

  const reloadPaths = new Set([
    "/",
    "/homepage-demo",
    "/services-spatial-experiences",
    "/services-system-integration",
    "/contact-us",
    "/about-us"
  ]);

  function normalizePath(pathname) {
    if (!pathname) return "/";
    const cleaned = pathname.replace(/\/+$/, "");
    return cleaned || "/";
  }

  function shouldForceReload(pathname) {
    return reloadPaths.has(normalizePath(pathname));
  }

  function handleClick(e) {
    const a = e.target.closest("a[href]");
    if (!a) return;

    if (
      e.defaultPrevented ||
      e.button !== 0 ||
      e.metaKey || e.ctrlKey || e.shiftKey || e.altKey ||
      a.target === "_blank" ||
      a.hasAttribute("download")
    ) return;

    const href = a.getAttribute("href");
    if (!href || href.startsWith("#") || href.startsWith("mailto:") || href.startsWith("tel:")) {
      return;
    }

    const url = new URL(href, window.location.href);

    if (url.origin !== window.location.origin) return;

    const targetPath = normalizePath(url.pathname);
    const currentPath = normalizePath(window.location.pathname);

    if (!shouldForceReload(targetPath)) return;

    e.preventDefault();
    e.stopPropagation();
    if (e.stopImmediatePropagation) e.stopImmediatePropagation();

    if (targetPath === currentPath) {
      window.location.reload();
    } else {
      window.location.assign(url.href);
    }
  }

  function handlePopstate() {
    if (shouldForceReload(window.location.pathname)) {
      window.location.reload();
    }
  }

  document.addEventListener("click", handleClick, true);
  window.addEventListener("popstate", handlePopstate);
})();
</script>

<script>
document.addEventListener("DOMContentLoaded", function() {
  const words = ['content', 'innovation', 'creativity', 'technology', 'growth'];
  const rotatingWordElement = document.querySelector('.rotating-word');
  let wordIndex = 0;
  let wordInterval;

  // Function to change the word
  function changeWord() {
    rotatingWordElement.style.opacity = 0; // Fade out the current word
    
    setTimeout(function() {
      rotatingWordElement.textContent = words[wordIndex]; // Change the word
      wordIndex = (wordIndex + 1) % words.length; // Loop through the array of words
      rotatingWordElement.style.opacity = 1; // Fade in the new word
    }, 1000); // Wait for the fade-out duration before changing the word
  }

  // Function to ensure the word rotation starts immediately
  function startWordRotation() {
    if (!wordInterval) {
      wordInterval = setInterval(changeWord, 2500); // Rotate words every 2.5 seconds
      changeWord(); // Initialize the first word immediately
    }
  }

  // No reset of the interval happens during scrolling; it should keep running
  const section = document.querySelector('.newhero__section.second');
  
  const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      console.log(`Section visibility: ${entry.isIntersecting}`);
      if (entry.isIntersecting) {
        // When the second slide comes into view, start the word rotation
        if (!wordInterval) {
          console.log('Second slide in view, starting rotation...');
          startWordRotation();  // Start the interval if not running
        }
      }
    });
  }, { threshold: 0.5 }); // Trigger when 50% of the section is in view

  observer.observe(section); // Start observing the second slide section

  // Ensure the word rotation starts when the page is initially loaded
  startWordRotation();

  // Handle scroll event to make sure the interval keeps running when moving between sections
  window.addEventListener("wheel", function() {
    // Check if we are going to a new section
    console.log('Scrolling detected, ensuring word rotation continues');
    if (!wordInterval) {
      startWordRotation();  // Ensure rotation continues if it's not running
    }
  });
});</script>
