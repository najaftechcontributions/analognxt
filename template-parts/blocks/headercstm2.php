<?php
$logo = get_field('logo');
?>

<header class="headercstm2">
  <div class="header2-inner w-flex u-justify-center u-align-center">
    <div class="logo u-text-align-center">
      <?php if ($logo): ?>
        <a href="/homepage-demo">
          <img src="<?php echo esc_url($logo['url']); ?>" alt="<?php echo esc_attr($logo['alt']); ?>">
        </a>
      <?php endif; ?>
    </div>
  </div>
</header>

<style>
.headercstm2 {
  position: sticky;
  top: 0;
  width: 100%;
  background: #0000;
  padding: 1rem 2rem;
  z-index: 1000;
  pointer-events: none;
}

.header2-inner {
  max-width: 1200px;
  margin: 0 auto;
}

.headercstm2 .logo img {
  max-height: 50px;
}
</style>
