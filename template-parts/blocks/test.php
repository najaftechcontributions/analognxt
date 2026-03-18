<?php
$uid  = 'newhero-' . $block['id'];
$pid1 = 'tsparticles-1-' . $block['id'];
$pid2 = 'tsparticles-2-' . $block['id'];

// debug (remove later)
echo '<!-- NEWHERO RENDERED -->';
echo '<div style="position:fixed;top:10px;left:10px;z-index:999999;background:#0f0;color:#000;padding:6px 10px;font:12px/1.2 sans-serif;">NEWHERO OK</div>';
?>

<div id="<?php echo esc_attr($uid); ?>" class="newhero">
  <section class="newhero__section first">
    <div class="outer"><div class="inner"><div class="bg">
      <div id="<?php echo esc_attr($pid1); ?>" class="particles"></div>
      <h2 class="section-heading">Scroll down</h2>
    </div></div></div>
  </section>

  <section class="newhero__section second">
    <div class="outer"><div class="inner"><div class="bg">
      <div id="<?php echo esc_attr($pid2); ?>" class="particles"></div>
      <h2 class="section-heading">Animated with GSAP</h2>
    </div></div></div>
  </section>
</div>

<style>
  /* lock scrolling ONLY while this hero is active */
  html.newhero-lock,
  body.newhero-lock{
    overflow: hidden !important;
    height: 100% !important;
  }

  /* hero takes up ONE screen in the page flow */
  #<?php echo esc_attr($uid); ?>{
    position: relative;
    height: 100vh;
    overflow: hidden;
  }

  /* ONLY hero slides */
  #<?php echo esc_attr($uid); ?> .newhero__section{
    position: absolute;
    inset: 0;
    width: 100%;
    height: 100%;
    opacity: 0;
    visibility: hidden;
    z-index: 0;
  }

  /* fallback: show slide 1 if JS fails */
  #<?php echo esc_attr($uid); ?> .newhero__section.first{
    opacity: 1;
    visibility: visible;
    z-index: 1;
  }

  #<?php echo esc_attr($uid); ?> .outer,
  #<?php echo esc_attr($uid); ?> .inner{
    width: 100%;
    height: 100%;
    overflow: hidden;
  }

  #<?php echo esc_attr($uid); ?> .bg{
    position: absolute;
    inset: 0;
    display: flex;
    align-items: center;
    justify-content: center;
    overflow: hidden;
    isolation: isolate;
  }

  #<?php echo esc_attr($uid); ?> .particles{
    position: absolute;
    inset: 0;
    z-index: 0;
    pointer-events: none;
  }

  #<?php echo esc_attr($uid); ?> .particles canvas{
    width: 100% !important;
    height: 100% !important;
  }

  #<?php echo esc_attr($uid); ?> .section-heading{
    position: relative;
    z-index: 2;
    color: #fff;
  }

  #<?php echo esc_attr($uid); ?> .first .bg{ background:#000; }

  #<?php echo esc_attr($uid); ?> .second .bg{
    background-image:url("https://assets.codepen.io/16327/site-landscape-2.jpg");
    background-size:cover;
    background-position:center;
  }

  #<?php echo esc_attr($uid); ?> .second .bg::after{
    content:"";
    position:absolute;
    inset:0;
    background:linear-gradient(180deg, rgba(0,0,0,.6) 50%, rgba(0,0,0,.1) 100%);
    z-index:1;
    pointer-events:none;
  }
</style>

<!-- scripts (OK for testing; later enqueue them) -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.13.0/gsap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.13.0/Observer.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.13.0/SplitText.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/tsparticles@2/tsparticles.bundle.min.js"></script>

<script>
(function(){
  const root = document.getElementById("<?php echo esc_js($uid); ?>");
  if (!root) return;

  // prevent double-init
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
        number: { density: { enable: true }, value: 600 },
        opacity: {
          value: { min: 0.3, max: 0.6 },
          animation: { enable: true, speed: 1, minimumValue: 0.3, sync: false }
        },
        shape: { type: "circle" },
        size: { value: 1 }
      }
    };
  }

  window.addEventListener("load", () => {
    // particles
    if (window.tsParticles) {
      tsParticles.load("<?php echo esc_js($pid1); ?>", particlesConfig());
      tsParticles.load("<?php echo esc_js($pid2); ?>", particlesConfig());
    }

    // gsap
    if (!(window.gsap && window.Observer && window.SplitText)) return;
    gsap.registerPlugin(Observer, SplitText);

    // lock scroll ONLY while hero is active
    document.documentElement.classList.add("newhero-lock");
    document.body.classList.add("newhero-lock");

    const sections = root.querySelectorAll(".newhero__section");
    const images = root.querySelectorAll(".bg");
    const headings = gsap.utils.toArray(root.querySelectorAll(".section-heading"));
    const outerWrappers = gsap.utils.toArray(root.querySelectorAll(".outer"));
    const innerWrappers = gsap.utils.toArray(root.querySelectorAll(".inner"));

    const splitHeadings = headings.map(h =>
      SplitText.create(h, { type: "chars,words,lines", linesClass: "clip-text" })
    );

    let currentIndex = 0; // start on slide 1
    let animating = false;

    // initial transforms
    gsap.set(outerWrappers, { yPercent: 100 });
    gsap.set(innerWrappers, { yPercent: -100 });

    // force initial visibility
    gsap.set(sections, { autoAlpha: 0, zIndex: 0 });
    gsap.set([outerWrappers[0], innerWrappers[0]], { yPercent: 0 });
    gsap.set(images[0], { yPercent: 0 });
    gsap.set(sections[0], { autoAlpha: 1, zIndex: 1 });

    function gotoSection(index, direction) {
      if (animating) return;
      if (index < 0 || index > sections.length - 1) return;
      if (index === currentIndex) return;

      animating = true;

      const fromTop = direction === -1;
      const dFactor = fromTop ? -1 : 1;

      const tl = gsap.timeline({
        defaults: { duration: 1.25, ease: "power1.inOut" },
        onComplete: () => (animating = false)
      });

      // hide current
      gsap.set(sections[currentIndex], { zIndex: 0 });
      tl.to(images[currentIndex], { yPercent: -15 * dFactor })
        .to(sections[currentIndex], { autoAlpha: 0 }, "<");

      // show next
      gsap.set(sections[index], { autoAlpha: 1, zIndex: 1 });

      tl.fromTo([outerWrappers[index], innerWrappers[index]], {
          yPercent: i => (i ? -100 * dFactor : 100 * dFactor)
        }, {
          yPercent: 0
        }, 0)
        .fromTo(images[index], { yPercent: 15 * dFactor }, { yPercent: 0 }, 0)
        .fromTo(splitHeadings[index].chars, {
          autoAlpha: 0,
          yPercent: 150 * dFactor
        }, {
          autoAlpha: 1,
          yPercent: 0,
          duration: 1,
          ease: "power2",
          stagger: { each: 0.02, from: "random" }
        }, 0.2);

      currentIndex = index;
    }

    // ✅ release hero control + allow page scroll to other blocks
    function releaseToPage(obs){
      obs.disable();

      document.documentElement.classList.remove("newhero-lock");
      document.body.classList.remove("newhero-lock");

      // keep slide 2 visible as final
      gsap.set(sections[0], { autoAlpha: 0, zIndex: 0 });
      gsap.set(sections[1], { autoAlpha: 1, zIndex: 1 });

      // scroll to next block (wheel was prevented)
      const next = root.parentElement?.nextElementSibling || root.nextElementSibling;
      if (next) {
        next.scrollIntoView({ behavior: "smooth", block: "start" });
      } else {
        window.scrollBy({ top: window.innerHeight, behavior: "smooth" });
      }
    }

    const obs = Observer.create({
      type: "wheel,touch,pointer",
      wheelSpeed: -1,
      tolerance: 10,
      preventDefault: true,

      onUp: () => {
        if (animating) return;

        if (currentIndex === 0) {
          gotoSection(1, 1);
        } else {
          // slide 2 -> release to page
          releaseToPage(obs);
        }
      },

      onDown: () => {
        if (animating) return;
        if (currentIndex === 1) gotoSection(0, -1);
      }
    });

  });
})();
</script>
