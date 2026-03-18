<?php
$heading = get_field('heading');
$image_1 = get_field('image_1');
$image_2 = get_field('image_2');
$image_3 = get_field('image_3');
$image_4 = get_field('image_4');
?>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const images = document.querySelectorAll('.portfolio-img .img');

        const observer = new IntersectionObserver(
            entries => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('show'); // slide in
                    } else {
                        entry.target.classList.remove('show'); // slide out on scroll up
                    }
                });
            },
            { threshold: 0.3 }
        );

        images.forEach(img => observer.observe(img));
    });
</script>



<div class="u-section-spacer"></div>
<section class="u-container u-section cstm-portfolio u-gap-6">
    <div class="global-h1 section-heading u-zindex-2">
        <?php echo wp_kses_post($heading); ?>
    </div>

    <div class="portfolio-img u-container w-flex w-flex-column u-justify-center u-align-center">
        <div class="images-inner">
            <div class="images-top w-flex ">
                <div class="img img-1">
                    <img src="<?php echo esc_url($image_1['url']); ?>" alt="<?php echo esc_attr($image_1['alt']); ?>">
                </div>
                <div class="img img-2 u-zindex-2">
                    <img src="<?php echo esc_url($image_2['url']); ?>" alt="<?php echo esc_attr($image_2['alt']); ?>">
                </div>
            </div>
            <div class="images-bottom w-flex u-justify-between ">
                <div class="img img-3">
                    <img src="<?php echo esc_url($image_3['url']); ?>" alt="<?php echo esc_attr($image_3['alt']); ?>">
                </div>
                <div class="img img-4 u-zindex-3">
                    <img src="<?php echo esc_url($image_4['url']); ?>" alt="<?php echo esc_attr($image_4['alt']); ?>">
                </div>
            </div>

        </div>
    </div>
</section>
<div class="u-section-spacer"></div>
<style>
    .section-heading {
        text-align: center;
        font-size: 80px;
    }
@media (max-width:767px){
    .section-heading{
        font-size: 50px !important;
    }
}
    .text-color {
        color: #F29740;
        font-weight: 700;

    }

    .section-heading {
        text-transform: uppercase;
    }

    .img-1 {
        width: 100%;
        max-width: 270px;
    }

    .img-2 {
        width: 100%;
        max-width: 570px;
        ;
        margin-top: -60px;
    }

    .img-3 {
        width: 100%;
        max-width: 320px;
        margin-left: 120px;
        margin-top: -65px;
    }

    .img-4 {
        width: 100%;
        max-width: 270px;
        margin-right: -100px;
        margin-top: -65px;
    }
	@media (max-width:767px){
		.img-4{
       margin-right:0px;
		}
	}
    .images-bottom {
        width: 100%;
        max-width: 1000px;
    }

</style>