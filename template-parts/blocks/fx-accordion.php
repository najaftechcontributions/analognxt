<?php
/**
 * Template: FX Accordion Block (ACF)
 * Path: /template-parts/blocks/fx-accordion.php
 *
 * Dynamic fields:
 * - title (text)
 * - intro (textarea)
 * - items (repeater)
 *   - step_label (text)
 *   - heading (text) [required]
 *   - kicker (text)
 *   - content (wysiwyg)
 *   - list_title (text)
 *   - bullet_list (repeater: text)
 *   - closer (text)
 *   - open_by_default (true/false)
 * - single_open (true/false)
 */

// ---------- Block settings ----------
$block_id   = !empty($block['anchor']) ? $block['anchor'] : ('fx-accordion-' . ($block['id'] ?? uniqid()));
$class_name = 'fx-accordion';
if (!empty($block['className'])) $class_name .= ' ' . $block['className'];

$title       = get_field('title');
$intro       = get_field('intro');
$items       = get_field('items');
$single_open = (bool) get_field('single_open');

if (empty($items) || !is_array($items)) return;

// Unique suffix to avoid duplicate <style>/<script> collisions per block instance
$uid = preg_replace('/[^a-zA-Z0-9\-_]/', '', $block_id);
?>

<section class="u-section accorsecx">
<div
  class="cstm-section u-container"
  id="<?php echo esc_attr($block_id); ?>"
>
  <div
    class="<?php echo esc_attr($class_name); ?>"
    aria-label="<?php echo esc_attr($title ? wp_strip_all_tags($title) : 'Accordion'); ?>"
    data-single-open="<?php echo $single_open ? '1' : '0'; ?>"
  >
    <?php if (!empty($title)) : ?>
      <h2 class="global-h2">
        <?php echo esc_html($title); ?>
        <span class="fx-title-line"></span>
      </h2>
    <?php endif; ?>

    <?php if (!empty($intro)) : ?>
      <p class="global-txt1"><?php echo esc_html($intro); ?></p>
    <?php endif; ?>

    <?php foreach ($items as $i => $item) :
      $step_label      = $item['step_label'] ?? '';
      $item_heading    = $item['heading'] ?? '';
      $kicker          = $item['kicker'] ?? '';
      $content         = $item['content'] ?? '';
      $list_title      = $item['list_title'] ?? '';
      $bullet_list     = $item['bullet_list'] ?? array();
      $closer          = $item['closer'] ?? '';
      $open_by_default = !empty($item['open_by_default']);

      if (empty($item_heading) && empty($content)) continue;
    ?>

      <details class="fx-item" <?php echo $open_by_default ? 'open' : ''; ?>>
        <summary class="fx-summary">
          <?php if (!empty($step_label)) : ?>
            <span class="fx-step"><?php echo esc_html($step_label); ?></span>
          <?php endif; ?>

          <?php if (!empty($item_heading)) : ?>
            <span class="global-txt1"><?php echo esc_html($item_heading); ?></span>
          <?php endif; ?>

          <?php if (!empty($kicker)) : ?>
            <span class="fx-kicker"><?php echo esc_html($kicker); ?></span>
          <?php endif; ?>

          <span class="fx-icon" aria-hidden="true"></span>
        </summary>

        <div class="fx-panel">
          <div class="fx-panel-inner">
            <?php if (!empty($content)) : ?>
              <div class="fx-content">
                <?php echo wp_kses_post($content); ?>
              </div>
            <?php endif; ?>

            <?php if (!empty($list_title)) : ?>
              <div class="fx-sub"><?php echo esc_html($list_title); ?></div>
            <?php endif; ?>

            <?php if (!empty($bullet_list) && is_array($bullet_list)) : ?>
              <ul class="fx-list">
                <?php foreach ($bullet_list as $b) :
                  $txt = $b['text'] ?? '';
                  if (empty($txt)) continue;
                ?>
                  <li><?php echo esc_html($txt); ?></li>
                <?php endforeach; ?>
              </ul>
            <?php endif; ?>

            <?php if (!empty($closer)) : ?>
              <p class="fx-closer"><?php echo esc_html($closer); ?></p>
            <?php endif; ?>
          </div>
        </div>
      </details>

    <?php endforeach; ?>
  </div>
</div>
</section>
<style>
/* ================================
   FX Accordion (component scoped)
   Smooth slide open/close (height)
   ================================ */

/* Optional font import (better to enqueue in theme for performance) */
/* @import url("https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@400;500;600&display=swap"); */
 @import url("https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@400;500;600&display=swap");
#<?php echo esc_attr($uid); ?>{
  --bg: #050505;
  --border: rgba(255,255,255,0.12);
  --border2: rgba(255,255,255,0.18);
  --text: rgba(255,255,255,0.92);
  --muted: rgba(255,255,255,0.62);
  --muted2: rgba(255,255,255,0.45);
  --glow: rgba(255,255,255,0.18);
  --shadow: 0 18px 50px rgba(0,0,0,0.55);
  --radius: 18px;

  font-family: "Space Grotesk", system-ui, -apple-system, "Segoe UI", Roboto, Arial, sans-serif;
  color: var(--text);
  background:
    radial-gradient(1200px 500px at 20% 0%, rgba(255,255,255,0.06), transparent 60%),
    radial-gradient(1000px 600px at 80% 30%, rgba(255,255,255,0.05), transparent 55%),
    var(--bg);
  padding: 28px;
  border-radius: calc(var(--radius) + 6px);
  border: 1px solid rgba(255,255,255,0.08);
  box-shadow: var(--shadow);
  max-width: 100%;
	width:100%;
}
	.accorsecx{
    padding:0px 20px;
	}
#<?php echo esc_attr($uid); ?> .fx-title{
  display:flex;
  align-items:center;
  gap:14px;
  margin:0 0 18px;
  font-size:22px;
  font-weight:600;
  letter-spacing:.6px;
}
#<?php echo esc_attr($uid); ?> .fx-title-line{
  flex:1;
  height:1px;
  background: linear-gradient(90deg, rgba(255,255,255,0.35), transparent);
  opacity:.9;
}

#<?php echo esc_attr($uid); ?> .fx-intro{
  margin: 0 0 14px;
  color: rgba(255,255,255,0.72);
  line-height: 1.6;
  font-size: 14px;
}

/* Item shell */
#<?php echo esc_attr($uid); ?> .fx-item{
  position:relative;
  margin:12px 0;
  overflow:clip;
  transform:translateZ(0);
  border-radius: var(--radius);
  border: 1px solid var(--border);
  background: linear-gradient(180deg, rgba(255,255,255,0.04), rgba(255,255,255,0.02));
}
#<?php echo esc_attr($uid); ?> .fx-item::before{
  content:"";
  position:absolute;
  inset:-1px;
  pointer-events:none;
  opacity:0;
  transition: opacity 420ms ease;
  background:
    radial-gradient(700px 200px at 20% 0%, rgba(255,255,255,0.11), transparent 60%),
    radial-gradient(500px 250px at 80% 100%, rgba(255,255,255,0.07), transparent 55%);
}
#<?php echo esc_attr($uid); ?> .fx-item:hover::before{ opacity:1; }

@media (hover:hover){
  #<?php echo esc_attr($uid); ?> .fx-item{
    transition: transform 260ms ease, border-color 260ms ease;
  }
  #<?php echo esc_attr($uid); ?> .fx-item:hover{
    transform: translateY(-2px);
    border-color: rgba(255,255,255,0.18);
  }
}

/* Summary row */
#<?php echo esc_attr($uid); ?> .fx-summary{
  list-style:none;
  cursor:pointer;
  user-select:none;
  display:grid;
  grid-template-columns: auto 1fr auto;
  grid-template-rows: auto auto;
  gap: 6px 14px;
  align-items:center;
  padding: 18px;
}
#<?php echo esc_attr($uid); ?> .fx-summary::-webkit-details-marker{ display:none; }

#<?php echo esc_attr($uid); ?> .fx-step{
  grid-row: 1 / span 2;
  align-self:start;
  padding: 8px 12px;
  border-radius: 999px;
  border: 1px solid rgba(255,255,255,0.18);
  background: rgba(255,255,255,0.04);
  color: rgba(255,255,255,0.8);
  font-size: 12px;
  letter-spacing: .14em;
  text-transform: uppercase;
}

#<?php echo esc_attr($uid); ?> .fx-heading{
  font-size:17px;
  font-weight:600;
  letter-spacing:.3px;
  line-height:1.2;
}
#<?php echo esc_attr($uid); ?> .fx-kicker{
  grid-column: 2 / 3;
  font-size:13px;
  line-height:1.35;
  color: var(--muted);
}

/* Chevron icon */
#<?php echo esc_attr($uid); ?> .fx-icon{
  position:relative;
  width:38px;
  height:38px;
  border-radius:12px;
  border:1px solid rgba(255,255,255,0.12);
  background: rgba(255,255,255,0.02);
  box-shadow: 0 0 0 1px rgba(255,255,255,0.04) inset;
}
#<?php echo esc_attr($uid); ?> .fx-icon::before,
#<?php echo esc_attr($uid); ?> .fx-icon::after{
  content:"";
  position:absolute;
  top:50%;
  left:50%;
  width:10px;
  height:2px;
  background: rgba(255,255,255,0.75);
  transform-origin:center;
  transition: transform 420ms cubic-bezier(.2,.8,.2,1);
}
#<?php echo esc_attr($uid); ?> .fx-icon::before{ transform: translate(-65%,-50%) rotate(45deg); }
#<?php echo esc_attr($uid); ?> .fx-icon::after{  transform: translate(-35%,-50%) rotate(-45deg); }

/* Panel content typography */
#<?php echo esc_attr($uid); ?> .fx-content :where(p){
  margin:0;
  color: rgba(255,255,255,0.82);
  line-height:1.7;
  font-size:14px;
}
#<?php echo esc_attr($uid); ?> .fx-content :where(p + p){
  margin-top: 12px;
}

/* Subhead + list */
#<?php echo esc_attr($uid); ?> .fx-sub{
  margin-top:14px;
  font-size:12px;
  letter-spacing:.14em;
  text-transform:uppercase;
  color: var(--muted2);
}
#<?php echo esc_attr($uid); ?> .fx-list{
  margin:10px 0 0;
  padding-left:18px;
  color: rgba(255,255,255,0.78);
  line-height:1.8;
  font-size:14px;
}
#<?php echo esc_attr($uid); ?> .fx-closer{
  margin-top:14px !important;
  padding-top:14px;
  border-top:1px solid rgba(255,255,255,0.10);
  color: rgba(255,255,255,0.9);
}

/* ✅ Smooth slide animation (JS controls height) */
#<?php echo esc_attr($uid); ?> .fx-panel{
  height: 0;
  overflow: hidden;
  transition: height 520ms cubic-bezier(.2,.8,.2,1);
}
#<?php echo esc_attr($uid); ?> .fx-panel-inner{
  padding: 0 18px 18px;
}

/* Open styling (border + chevron) */
#<?php echo esc_attr($uid); ?> .fx-item[open]{
  border-color: var(--border2);
  box-shadow: 0 0 0 1px rgba(255,255,255,0.06) inset, 0 14px 45px rgba(0,0,0,0.55);
}
#<?php echo esc_attr($uid); ?> .fx-item[open] .fx-icon{
  box-shadow: 0 0 0 1px rgba(255,255,255,0.06) inset, 0 0 40px var(--glow);
}
#<?php echo esc_attr($uid); ?> .fx-item[open] .fx-icon::before{ transform: translate(-65%,-50%) rotate(-45deg); }
#<?php echo esc_attr($uid); ?> .fx-item[open] .fx-icon::after{  transform: translate(-35%,-50%) rotate(45deg); }

/* Reduced motion */
@media (prefers-reduced-motion: reduce){
  #<?php echo esc_attr($uid); ?> .fx-panel,
  #<?php echo esc_attr($uid); ?> .fx-item,
  #<?php echo esc_attr($uid); ?> .fx-icon::before,
  #<?php echo esc_attr($uid); ?> .fx-icon::after{
    transition: none !important;
  }
}
</style>

<script>
(function(){
  const root = document.getElementById(<?php echo wp_json_encode($block_id); ?>);
  if(!root) return;

  const DURATION = 520;
  const reduceMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
  const singleOpen = root.getAttribute("data-single-open") === "1";
  const items = Array.from(root.querySelectorAll("details.fx-item"));

  function setHeight(panel, val){ panel.style.height = val; }

  function openItem(d){
    if(d.open) return;

    if(singleOpen){
      items.forEach(other => { if(other !== d) closeItem(other); });
    }

    d.open = true;

    if(reduceMotion) return;

    const panel = d.querySelector(".fx-panel");
    const inner = d.querySelector(".fx-panel-inner");
    if(!panel || !inner) return;

    // Start closed -> animate to content height
    setHeight(panel, "0px");
    const end = inner.scrollHeight;

    requestAnimationFrame(() => {
      setHeight(panel, end + "px");
    });

    const onEnd = (e) => {
      if(e.propertyName !== "height") return;
      panel.style.height = "auto"; // responsive
      panel.removeEventListener("transitionend", onEnd);
    };
    panel.addEventListener("transitionend", onEnd);
  }

  function closeItem(d){
    if(!d.open) return;

    if(reduceMotion){
      d.open = false;
      return;
    }

    const panel = d.querySelector(".fx-panel");
    const inner = d.querySelector(".fx-panel-inner");
    if(!panel || !inner){
      d.open = false;
      return;
    }

    // Fix current height, then animate to 0
    const start = inner.scrollHeight;
    setHeight(panel, start + "px");

    requestAnimationFrame(() => {
      setHeight(panel, "0px");
    });

    const onEnd = (e) => {
      if(e.propertyName !== "height") return;
      d.open = false;
      panel.style.height = "";
      panel.removeEventListener("transitionend", onEnd);
    };
    panel.addEventListener("transitionend", onEnd);
  }

  // Init: ensure open-by-default items show correctly
  items.forEach(d => {
    const panel = d.querySelector(".fx-panel");
    const inner = d.querySelector(".fx-panel-inner");
    if(d.open && panel && inner && !reduceMotion){
      panel.style.height = "auto";
    }
  });

  // Click handling (smooth open + smooth close)
  items.forEach(d => {
    const summary = d.querySelector("summary");
    if(!summary) return;

    summary.addEventListener("click", (e) => {
      e.preventDefault();
      if(d.open) closeItem(d);
      else openItem(d);
    });

    // Keyboard support
    summary.addEventListener("keydown", (e) => {
      if(e.key === "Enter" || e.key === " "){
        e.preventDefault();
        summary.click();
      }
    });
  });
})();
</script>