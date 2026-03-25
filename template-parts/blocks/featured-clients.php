<?php
/**
 * Featured Clients Block
 *
 * ACF Gutenberg Block
 *
 * @package AnalogNXT
 */

// Get ACF field
$clients_text = get_field( 'clients_text' ) ?: 'Ministry of Public Security Ministry of Foreign Affairs Ministry of Culture Sports and Tourism VINGROUP BIM GROUP PETROLIMEX VIETINBANK VIETCOMBANK TECHCOMBANK VPBANK MB TPBANK SHB HDBANK MSB PJICO VIETTEL VNG VTC FPT VINAPHONE SAMSUNG LG VIETNAM AIRLINES BAMBOO AIRWAYS SONY OPPO HYUNDAI SABECO VINACONEX AND MORE...';
?>

<section class="featured-clients-section section_home_client section_wrap">
    <div data-home-client-section class="featured_client_component">
        <div class="featured_client_contain u-container">
            <div class="u-flex-vertical-nowrap u-align-items-center">
                <div class="eyebrow_wrap">
                    <div class="eyebrow_layout">
                        <div class="eyebrow_marker"></div>
                        <div class="eyebrow_text u-text-style-main w-richtext">
                            <p>Featured Clients</p>
                        </div>
                    </div>
                </div>
            </div>

            <div data-home-client-title data-splitting>
                <p class="featured_client">
                    <?php echo wp_kses_post( $clients_text ); ?>
                </p>
            </div>
        </div>
    </div>
</section>

<style>
.featured_client {
    font-size: 42px;
    font-weight: 800;
    font-family: 'Montserrat', sans-serif;
}
.eyebrow_wrap{
    display: none;
}
@media (max-width: 768px) {
    .featured_client {
        font-size: 32px;
    }
}
@media (max-width: 767px) {
  .featured-clients-section {
    display: none;
  }
}
</style>