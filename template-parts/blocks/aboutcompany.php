<?php
$heading = get_field('heading');
$paragraph = get_field('paragraph');
$image_left = get_field('image_left');
$image_right = get_field('image_right');
$image_bottom = get_field('image_bottom');
?>

<section class="about-company-block u-container w-flex u-flex-column u-justify-content-center u-align-center">
    <div class="u-section-spacer"></div>
    <div class="aboutcmpny-inner u-container u-justify-content-center">
        <div class="heading-econ w-flex u-flex-column u-justify-content-center u-align-center">
            <h1 class="global-h1"><?php echo esc_html($heading); ?></h1>
        </div>
        <div class="u-section-spacer u-container"></div>

        <div class="aftr-heading w-flex u-flex-row u-justify-content-between u-flex-column-m u-align-center u-gap-5">

            <div class="image-left">
                <?php if ($image_left): ?>
                    <img class="image-left" src="<?php echo esc_url($image_left['url']); ?>"
                        alt="<?php echo esc_attr($image_left['alt']); ?>">
                <?php endif; ?>
            </div>

            <div class="mid-text">
                <div class="global-txt1 u-zindex-2 cstm-textclass">
                    <?php echo wp_kses_post(get_field('paragraph')); ?>
                </div>
            </div>

            <div class="image-right">
                <?php if ($image_right): ?>
                    <img class="image-right" src="<?php echo esc_url($image_right['url']); ?>"
                        alt="<?php echo esc_attr($image_right['alt']); ?>">
                <?php endif; ?>
            </div>

        </div>

        <div class="u-section-spacer"></div>
        <div class="u-section-spacer"></div>

        <div class="image-bottom w-flex u-align-start u-justify-content-start">
            <?php if ($image_bottom): ?>
                <img class="image-bottom" src="<?php echo esc_url($image_bottom['url']); ?>"
                    alt="<?php echo esc_attr($image_bottom['alt']); ?>">
            <?php endif; ?>
        </div>
        <div class="u-section-spacer"></div>
</section>
<style>
    .image-left img {
        width: 100%;
        max-width: 270px;
        transform: rotate(-5.3deg);
    }

.image-left img, .image-bottom img, .image-right img {
  animation: float 5s ease-in-out infinite;
}

@keyframes float {
  0% {
    transform: translateY(0) rotate(-5.3deg); /* Initial position */
  }
  50% {
    transform: translateY(-20px) rotate(-5.3deg); /* Moves the image up */
  }
  100% {
    transform: translateY(0) rotate(-5.3deg); /* Resets the position */
  }
}




    .image-right img {
        width: 100%;
        max-width: 270px;
        transform: rotate(5.3deg);
        margin-bottom: -200px;
    }

    @media (max-width:767px) {
        .image-right img {
            margin: 0;
        }
    }

    .mid-text {
        width: 100%;
        text-align: center;
        max-width: 600px;
    }

    .cstm-textclass {
        font-weight: 600 !important;
    }

    .image-bottom img {
        width: 100%;
        max-width: 500px;
        height: 300px;
        transform: rotate(5.3deg);
    }

    .image-bottom {
        padding-left: 50px;
    }

    @media (max-width:767px) {
        .image-bottom {
            padding: 0;
        }
    }

    @media (max-width:767px) {
        .text-wrapper {
            padding: 0px 20px !important;
        }
    }
</style>