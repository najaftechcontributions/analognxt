<?php
$uid = 'newhero-' . $block['id'];
$pid1 = 'tsparticles-1-' . $block['id'];
$pid2 = 'tsparticles-2-' . $block['id'];
// ================= Slide 1 =================
$slide1_heading = get_field('slide1_heading') ?: 'Scroll down';
$slide1_text = get_field('slide1_text');
$slide1_image = get_field('slide1_image'); // accent image (not background)
// ================= Slide 2 =================
$slide2_heading = get_field('slide2_heading') ?: 'Animated with GSAP';
$slide2_text = get_field('slide2_text');
$slide2_bg_image = get_field('slide2_bg_image'); // full background image for slide 2
?>

<div id="<?php echo esc_attr($uid); ?>" class="newhero">
  <section class="newhero__section first">
    <div class="outer">
      <div class="inner">
        <div class="bg w-flex u-flex-column u-gap-5">

          <div id="<?php echo esc_attr($pid1); ?>" class="particles"></div>
          <?php
          $slide1_image = get_field('slide1_image');
          if ($slide1_image):
            $image_url = is_array($slide1_image) ? $slide1_image['url'] : $slide1_image;
            $image_alt = is_array($slide1_image) ? $slide1_image['alt'] : '';
            ?>

            <img src="<?php echo esc_url($image_url); ?>" alt="<?php echo esc_attr($image_alt); ?>"
              class="behind-headingimg">

          <?php endif; ?>
          <h2 class="section-heading global-h1 u-text-align-center">
            <?php echo wp_kses_post($slide1_heading); ?>
          </h2>
<div class="global-txt1 u-zindex-6 herotxt" style="text-align:center;">
  <?php echo wp_kses_post($slide1_text); ?>
</div>


        </div>
      </div>
    </div>
  </section>

<section class="newhero__section second">
  <div class="outer">
    <div class="inner">
      <div class="bg second-slide w-flex u-flex-column u-align-start u-justify-center u-gap-6">
        
        <!-- Background Video -->
        <video autoplay muted loop class="background-video" playsinline>
  <source src="https://grey-cobra-124389.hostingersite.com/wp-content/uploads/2026/03/8058346-hd_1920_1080_25fps.mp4" type="video/mp4">
  Your browser does not support the video tag.
</video>

        <!-- Section Heading -->
		  <div class="heading-econ w-flex">
  <h2 class="section-heading global-h1 u-zindex-2">

</h2>
			  <h1 class="global-h1">
				    <?php 
    // Fetch the custom field 'slide2_heading' and provide a fallback value if it's empty
    $slide2_heading = get_field('slide2_heading') ?: 'We are the fusion of'; 
    echo wp_kses_post($slide2_heading); // Output the fetched heading safely
  ?>
	  <span class="rotating-word-wrap">
  <span class="rotating-word">content</span>
</span>
			  </h1>

			  </div>

        <!-- Text Content -->
	

        <!-- Specialisms Categories -->
        <div class="specialisms w-flex u-flex-row u-justify-between u-gap-8">
          <!-- IMMERSE Category -->
          <div class="specialism-category u-flex u-flex-column u-align-start u-gap-4">
           <a href="/services-system-integration"> <h3 class="category-title global-h2 u-mb-4">IMMERSE</h3></a>
   <ul class="category-list u-list-none global-txt1">
  <li><a href="/services-spatial-experiences">Immersive environments & installations</a></li>
  <li><a href="/services-spatial-experiences">Interactive exhibition design</a></li>
  <li><a href="/services-spatial-experiences">Experience scenography</a></li>
  <li><a href="/services-spatial-experiences">Projection mapping & media surfaces</a></li>
  <li><a href="/services-spatial-experiences">Digital architecture & spatial storytelling</a></li>
  <li><a href="/services-spatial-experiences">Museum & cultural experiences</a></li>
  <li><a href="/services-spatial-experiences">Retail immersive environments</a></li>
</ul>
          </div>

          <!-- DISRUPT Category -->
          <div class="specialism-category u-flex u-flex-column u-align-start u-gap-4">
          <a href="/services-system-integration">  <h3 class="category-title global-h2 u-mb-4">DISRUPT</h3></a>
       <ul class="category-list u-list-none global-txt1">
  <li><a href="/services-system-integration">AV & digital systems integration</a></li>
  <li><a href="/services-system-integration">Smart space infrastructure</a></li>
  <li><a href="/services-system-integration">Media architecture engineering</a></li>
  <li><a href="/services-system-integration">Control systems & automation</a></li>
  <li><a href="/services-system-integration">Interactive technology frameworks</a></li>
  <li><a href="/services-system-integration">AI / data-driven installations</a></li>
  <li><a href="/services-system-integration">Digital twin environments</a></li>
</ul>
          </div>

          <!-- ENGAGE Category -->
          <div class="specialism-category u-flex u-flex-column u-align-start u-gap-4">
			  <a href="/services-spatial-experiences">
				  <h3 class="category-title global-h2 u-mb-4 u-zindex-6">ENGAGE</h3></a>
         <ul class="category-list u-list-none global-txt1">
  <li><a href="/services-system-integration">Interactive content design</a></li>
  <li><a href="/services-system-integration">Experience UX & journey design</a></li>
  <li><a href="/services-system-integration">Brand storytelling environments</a></li>
  <li><a href="/services-system-integration">Motion graphics & media content</a></li>
  <li><a href="/services-system-integration">Digital narratives & installations</a></li>
  <li><a href="/services-system-integration">Audience engagement strategies</a></li>
  <li><a href="/services-system-integration">Live interactive experiences</a></li>
</ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


</div>

<style>
	.category-title,.rotating-word{
		color:#f29740;
	}
	#tsparticles-2-block_58ad060cd3d2b7db312e8d2c387f4446{
		display:none;
	}
.specialisms {
  display: flex;
  flex-wrap: wrap;
  justify-content: space-between;
  gap: 2rem;
  overflow-y: hidden; /* Disable vertical scrolling */
}

.specialisms {
  display: flex;
  flex-wrap: wrap;
  justify-content: space-between;
  gap: 2rem;
}

/* For mobile devices: Make it a row and enable horizontal scrolling */
@media (max-width: 768px) {
  .specialisms {
    display: flex;
    flex-direction: row; /* Make it a row */
    overflow-x: auto; /* Allow horizontal scrolling */
    gap: 1rem; /* Adjust spacing between categories */
    padding-bottom: 10px; /* Optional: to add spacing at the bottom */
  }

  .specialism-category {
    flex: 0 0 auto; /* Prevent the items from stretching */
    min-width: 300px; /* Set a minimum width to avoid shrinking too much */
  }

  .specialisms::-webkit-scrollbar {
    height: 8px; /* Optional: Set the height of the scrollbar */
  }

  .specialisms::-webkit-scrollbar-thumb {
    background-color: #888; /* Optional: Style the scrollbar thumb */
    border-radius: 10px; /* Optional: Rounded corners for the scrollbar */
  }

  .specialisms::-webkit-scrollbar-thumb:hover {
    background-color: #555; /* Optional: Change color when hovering */
  }
}
	.category-list a {
  text-decoration: none; /* Remove default underline */
  color: inherit; /* Keep text color same as the parent */
  font-weight: 500; /* Optional: adjust as per your design */
  position: relative; /* For positioning the underline effect */
  display: inline-block; /* Ensure the hover works properly */
  transition: color 0.3s ease; /* Smooth transition for text color */
}

/* Hover effect */
.category-list a::after {
  content: ''; /* Empty content for pseudo-element */
  position: absolute;
  bottom: 0;
  left: 0;
  width: 0;
  height: 2px; /* Thickness of the underline */
  background-color: #fff; /* Change this to your preferred color */
  transition: width 0.3s ease; /* Smooth underline transition */
}

/* On hover, extend the underline */
.category-list a:hover::after {
  width: 100%;
}

/* Optional: Change the color of text on hover */
.category-list a:hover {
  color: #fff; /* You can change this to any color you like */
}
	/* Style for the rotating word */
.rotating-word {
  display: inline-block;
  font-weight: bold;
  opacity: 1;
  transition: opacity 1s ease-in-out; /* Smooth fade transition */
}
	/* General Section Styling */
.newhero__section.second .inner {
  padding: 50px;
}
	.heading-econ,.txt-econ{
		width:100%;
	}
	.txt-econ{
    max-width: 650px;
    padding-right: 20px;
	}

.newhero__section.second .bg {
  display: flex;
  flex-direction: column;
  align-items: flex-start;
  justify-content: flex-start;
  gap: 70px;
}
	@media (max-width:768px){
		.newhero__section.second .bg{
			gap: 25px;
		}
	}
.newhero__section.second .section-heading {
  font-size: 3rem; /* Adjust font size */
  font-weight: 700;
  margin-bottom: 10px;
}

.newhero__section.second .section-description {
  font-size: 1.2rem;
  line-height: 1.6;
  margin-bottom: 40px;
  max-width: 80%;
}

/* Specialism Categories */
.newhero__section.second .specialisms {
  display: flex;
  justify-content: space-between;
  width: 100%;
	flex-wrap:nowrap;
	padding-bottom:0px;
}

.newhero__section.second .specialism-category {
  width: 30%;
}

.newhero__section.second .category-title {
  font-size: 1.5rem;
  font-weight: 700;
  margin-bottom: 20px;
}
	@media (max-width: 768px) {
  .newhero__section.second .category-title {
    font-size: 18px; /* Set font size to 18px */
    margin-bottom: 5px; /* Set margin-bottom to 0 */
  }
}
	#newhero-block_aad675cf25ed994ee67db97ee88de69d .newhero__section{
		height:auto !important;
	}

.newhero__section.second .category-list {
  list-style: none;
  padding: 0;
}

.newhero__section.second .category-list li {
  font-size: 1rem;
  margin-bottom: 10px;
}
	@media (max-width:768px){
		.newhero__section.second .category-list li{
			font-size:12px;
		}
	}
	@media (max-width:768px){
		font-size:13px !important;
	}

/* Responsive Layout */
@media (max-width: 1024px) {
  .newhero__section.second .specialisms {
    flex-direction: row;
    align-items: center;
  }

  .newhero__section.second .specialism-category {
    width: 80%;
    margin-bottom: 40px;
  }
}

@media (max-width: 767px) {
  .newhero__section.second .section-heading {
    font-size: 2.5rem;
  }

  .newhero__section.second .section-description {
    font-size: 12px;
  }

  .newhero__section.second .specialisms {
    flex-direction: row;
    align-items: center;
	  gap:20px !important;
  }

  .newhero__section.second .specialism-category {
    width: 90%;
    margin-bottom: 20px;
  }
}
	.cstmtxt{
		padding-bottom:30px;
	}
	@media (max-width:768px){
	#newhero-block_2f02539591f18e50ab65d7b9d3acfc5b .newhero__section{
      height:85vh !important;
	}
	}
	#tsparticles-2-block_6a980c9921797275f4b4fe9e0ac9f278{
display:none;
	}
  #newhero-block_6a980c9921797275f4b4fe9e0ac9f278 {
    margin-top: -80px;
  }
	#tsparticles-2-block_2f02539591f18e50ab65d7b9d3acfc5b{
		display:none;
	}
  .section-heading {
    font-weight: 800 !important;
  }

  /* lock scrolling ONLY while this hero is active */
  html.newhero-lock,
  body.newhero-lock {
    overflow: hidden !important;
    height: 100% !important;
  }

  .newhero__section .bg {
    position: relative;
  }

  .second-slide {
    padding-top: 120px;
    padding-left: 100px;
  }

  @media (max-width:1400px) {
    .second-slide {
      padding-bottom: 120px;
    }
  }

  @media (max-width:1024px) {
    .second-slide {
      padding-top: 80px;
      padding-left: 20px;
    }
  }

  @media (max-width:768px) {
    .second-slide {
      padding-bottom: 80px;
      padding-left: 20px;
    }
  }


  .hero-heading-bg {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    z-index: 1;
    max-width: 100%;
    opacity: 0.25;
    /* adjust as needed */
    pointer-events: none;
  }

  .section-heading {
    position: relative;
    z-index: 2;
  }

  /* Method 1: Using transform (most common) */
  .image-container {
    position: relative;
    width: 100%;
    height: 500px;
    /* Set your desired height */
  }

  .behind-headingimg {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    width: 100%;
    opacity: 0.6;
    max-width: 500px;
    z-index: 0;

  }

  @media (max-width:768px) {
    .behind-headingimg {
      max-width: 300px;
    }
  }

  h4 {
    z-index: 3 !important;
  }

  /* hero takes up ONE screen in the page flow */
  #<?php echo esc_attr($uid); ?> {
    position: relative;
    height: 100vh;
    overflow: hidden;
  }

  /* ONLY hero slides */
  #<?php echo esc_attr($uid); ?> .newhero__section {
    position: absolute;
    inset: 0;
    width: 100%;
    height: 100%;
    opacity: 0;
    visibility: hidden;
    z-index: 0;
  }

  /* fallback: show slide 1 if JS fails */
  #<?php echo esc_attr($uid); ?> .newhero__section.first {
    opacity: 1;
    visibility: visible;
    z-index: 1;
  }

  #<?php echo esc_attr($uid); ?> .outer,
  #<?php echo esc_attr($uid); ?> .inner {
    width: 100%;
    height: 100%;
    overflow: hidden;
  }

  #<?php echo esc_attr($uid); ?> .bg {
    position: absolute;
    inset: 0;
    display: flex;
    align-items: center;
    justify-content: center;
    overflow: hidden;
    isolation: isolate;
  }

  #<?php echo esc_attr($uid); ?> .particles {
    position: absolute;
    inset: 0;
    z-index: 0;
    pointer-events: none;
  }

  #<?php echo esc_attr($uid); ?> .particles canvas {
    width: 100% !important;
    height: 100% !important;
  }

  #<?php echo esc_attr($uid); ?> .section-heading {
    position: relative;
    z-index: 2;
    color: #fff;
  }

  #<?php echo esc_attr($uid); ?> .first .bg {
    background: #000;
  }



#<?php echo esc_attr($pid2); ?> .second .bg {
    position: relative;
}

.background-video {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    object-fit: cover;  /* Ensures the video covers the entire background */
    z-index: -1; /* Places the video behind the content */
}

#<?php echo esc_attr($pid2); ?> .second .bg::after {
    content: "";
    position: absolute;
    inset: 0;
    background-color: #000;
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
    z-index: 1;
    pointer-events: none;
}

</style>

<script>
  (function () {
    const root = document.getElementById("<?php echo esc_js($uid); ?>");
    if (!root) return;

    if (root.dataset.inited === "1") return;
    root.dataset.inited = "1";

    function particlesConfig() {
      return {
        fullScreen: { enable: false, zIndex: 0 },
        background: { color: { value: "transparent" } },
        interactivity: {
          events: {
            onClick: { enable: true, mode: "repulse" },
            onHover: { enable: true, mode: "bubble" }
          },
          modes: {
            bubble: { distance: 200, duration: 2, opacity: 0, size: 0, speed: 3 },
            repulse: { distance: 400, duration: 0.4 }
          }
        },
        particles: {
          color: { value: "#ffffff" },
          move: { direction: "none", enable: true, outModes: "out", random: true, speed: 0.3 },
          number: { density: { enable: true }, value: 1000 },
          opacity: {
            value: { min: 0.3, max: 1.5 },
            animation: { enable: true, speed: 1.5, minimumValue: 0.5, sync: false }
          },
          shape: { type: "circle" },
          size: { value: 1.5 }
        }
      };
    }

    window.addEventListener("load", () => {
      // tsParticles
      if (window.tsParticles) {
        tsParticles.load("<?php echo esc_js($pid1); ?>", particlesConfig());
        tsParticles.load("<?php echo esc_js($pid2); ?>", particlesConfig());
      }

      // GSAP guard
      if (!(window.gsap && window.Observer && window.SplitText)) return;
      gsap.registerPlugin(Observer, SplitText);

      const sections = root.querySelectorAll(".newhero__section");
      const images = root.querySelectorAll(".bg");
      const headings = gsap.utils.toArray(root.querySelectorAll(".section-heading"));
      const outerWrappers = gsap.utils.toArray(root.querySelectorAll(".outer"));
      const innerWrappers = gsap.utils.toArray(root.querySelectorAll(".inner"));

      let splitHeadings = [];
      let currentIndex = 0;
      let animating = false;
      let obs = null;

      function lockPage() {
        document.documentElement.classList.add("newhero-lock");
        document.body.classList.add("newhero-lock");
      }

      function unlockPage() {
        document.documentElement.classList.remove("newhero-lock");
        document.body.classList.remove("newhero-lock");
      }

      function createSplits() {
        // Revert any existing splits on these headings (safe because they're scoped to this hero)
        headings.forEach(h => {
          if (h && h._gsSplitText) h._gsSplitText.revert();
        });

        splitHeadings = headings.map(h =>
          SplitText.create(h, { type: "chars,words,lines", linesClass: "clip-text" })
        );
      }

      function revertSplits() {
        splitHeadings.forEach(s => s && s.revert && s.revert());
        splitHeadings = [];
      }

      // Initial setup (same as yours)
      lockPage();
      createSplits();

      gsap.set(outerWrappers, { yPercent: 100 });
      gsap.set(innerWrappers, { yPercent: -100 });
      gsap.set(sections, { autoAlpha: 0, zIndex: 0 });
      gsap.set([outerWrappers[0], innerWrappers[0]], { yPercent: 0 });
      gsap.set(images[0], { yPercent: 0 });
      gsap.set(sections[0], { autoAlpha: 1, zIndex: 1 });

      function gotoSection(index, direction) {
        if (animating || index === currentIndex) return;
        // If splits were cleaned up while released, recreate before animating chars.
        if (!splitHeadings.length) createSplits();

        animating = true;
        const dFactor = direction === -1 ? -1 : 1;

        const tl = gsap.timeline({
          defaults: { duration: 1.25, ease: "power1.inOut" },
          onComplete: () => (animating = false)
        });

        gsap.set(sections[currentIndex], { zIndex: 0 });

        tl.to(images[currentIndex], { yPercent: -15 * dFactor })
          .to(sections[currentIndex], { autoAlpha: 0 }, "<");

        gsap.set(sections[index], { autoAlpha: 1, zIndex: 1 });

        tl.fromTo(
          [outerWrappers[index], innerWrappers[index]],
          { yPercent: i => (i ? -100 * dFactor : 100 * dFactor) },
          { yPercent: 0 },
          0
        )
          .fromTo(images[index], { yPercent: 15 * dFactor }, { yPercent: 0 }, 0)
        const chars = splitHeadings[index] && splitHeadings[index].chars;
          if (chars && chars.length) {
            tl.fromTo(
              chars,
              { autoAlpha: 0, yPercent: 150 * dFactor },
              {
                autoAlpha: 1,
                yPercent: 0,
                duration: 1,
                ease: "power2",
                stagger: { each: 0.02, from: "random" }
              },
              0.2
            );
          }

        currentIndex = index;
      }

      function releaseToPage() {
        if (obs) obs.disable();
        unlockPage();

        // Optional but recommended: restore DOM so other SplitText logic elsewhere never “sees” wrapped nodes
        revertSplits();

        const next = root.parentElement?.nextElementSibling || root.nextElementSibling;
        next?.scrollIntoView({ behavior: "smooth", block: "start" });
      }

      function enableHero() {
        if (!obs) return;

        // Make sure split text exists again
        if (!splitHeadings.length) createSplits();

        lockPage();
        obs.enable();

        // Your original behavior assumes we re-enter hero in section 1 after releasing.
        // Keep it the same:
        currentIndex = 1;
      }

      // ✅ Bulletproofing: scope Observer to the hero only
      obs = Observer.create({
        target: root,                 // IMPORTANT: prevents interfering with other page interactions
        type: "wheel,touch,pointer",
        wheelSpeed: -1,
        tolerance: 10,
        preventDefault: false,

        onUp: () => {
          if (animating) return;
          currentIndex === 0 ? gotoSection(1, 1) : releaseToPage();
        },

        onDown: () => {
          if (animating) return;
          if (currentIndex === 1) gotoSection(0, -1);
        }
      });

      // 🔁 Re-enable hero when scrolling back up
      new IntersectionObserver(([entry]) => {
        if (entry.isIntersecting && obs && obs.isEnabled === false) {
          enableHero();
        }
      }, { threshold: 0.6 }).observe(root);

      // ✅ Safety unlock so you never get “stuck” locked due to navigation/back/refresh edge cases
      window.addEventListener("pagehide", () => {
        if (obs) obs.disable();
        unlockPage();
        revertSplits();
      });
    });
  })();
</script>

<script>
  document.addEventListener("DOMContentLoaded", () => {
    const rotators = document.querySelectorAll(".word-rotator");

    rotators.forEach(rotator => {
      const words = JSON.parse(rotator.dataset.words); // get words from data-words
      let current = 0;

      setInterval(() => {
        // fade out
        rotator.style.opacity = 0;

        setTimeout(() => {
          current = (current + 1) % words.length;
          rotator.textContent = words[current];
          rotator.style.opacity = 1;
        }, 300); // match transition duration
      }, 2000); // rotate every 2s
    });
  });
</script>
