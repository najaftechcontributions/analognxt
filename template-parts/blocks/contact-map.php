<?php
/**
 * Block: Contact + Map
 * Uses theme utility classes for layout.
 */

$overline = get_field('overline') ?: "Let's Chat";
$heading = get_field('heading') ?: "Send a Message";
$button_text = get_field('button_text') ?: "Let's Talk";

$wa_label = get_field('whatsapp_label') ?: 'Whatsapp';
$wa_value = get_field('whatsapp_value') ?: '+971 55 145 4572';

$addr_label = get_field('address_label') ?: 'Address';
$addr_value = get_field('address_value') ?: 'DUBAI, UNITED ARAB EMIRATES';

$email_label = get_field('email_label') ?: 'Email';
$email_value = get_field('email_value') ?: 'info@analogmxt.com';

$section_id = trim((string) get_field('section_id'));
$block_id = !empty($section_id) ? $section_id : ('contact-map-' . ($block['id'] ?? uniqid()));
?>
<section id="<?php echo esc_attr($block_id); ?>" class="anx-contact-map w-block">
    <div class="anx-contact-map__wrap w-block">

        <div class="anx-contact-map__card w-flex u-flex-column u-gap-9">
            <!-- Top: form + map -->
            <div class="anx-contact-map__grid w-flex u-flex-row u-flex-column-t u-gap-0">

                <!-- Left -->
                <div class="anx-contact-map__left w-flex u-flex-column u-gap-4">
                    <div class="anx-contact-map__heading w-block">
                        <div class="anx-contact-map__overline w-block global-txt1"><?php echo esc_html($overline); ?>
                        </div>
                        <h2 class="anx-contact-map__title global-h2"><?php echo esc_html($heading); ?></h2>
                    </div>

                    <div class="anx-contact-map__form w-block">
                        <?php echo do_shortcode('[fluentform id="3"]'); ?>
                    </div>
                </div>

                <!-- Right -->
                <div class="anx-contact-map__right w-block">
                    <div class="anx-contact-map__map w-block">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d1850246.6366147576!2d55.227488!3d25.076022!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e5f43496ad9c645%3A0xbde66e5084295162!2sDubai%20-%20United%20Arab%20Emirates!5e0!3m2!1sen!2sin!4v1770928280239!5m2!1sen!2sin"
                            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>

            </div>

            <!-- Bottom info bar -->
            <div class="anx-contact-map__info w-flex u-flex-row u-flex-column-t u-gap-0">

                <div class="anx-contact-map__info-item w-flex u-align-start u-gap-3">
                    <div class="anx-contact-map__icon w-inline-flex u-align-center u-justify-center" aria-hidden="true">
                        <!-- WhatsApp icon -->
                        <svg viewBox="0 0 24 24" fill="none">
                            <path
                                d="M20 12.1c0 4.4-3.6 8-8 8-1.3 0-2.6-.3-3.7-.9L4 20l.9-4.1c-.6-1.2-.9-2.5-.9-3.8 0-4.4 3.6-8 8-8s8 3.6 8 8Z"
                                stroke="currentColor" stroke-width="1.6" stroke-linecap="round"
                                stroke-linejoin="round" />
                            <path
                                d="M9.4 8.8c.2-.5.5-.5.7-.5h.5c.2 0 .4.1.5.4l.6 1.4c.1.3.1.5-.1.7l-.3.4c-.1.2-.2.4 0 .7.2.4.8 1.4 1.8 2.2 1.2 1 2.2 1.3 2.6 1.4.3.1.5 0 .7-.1l.8-.9c.2-.2.4-.2.6-.1l1.5.7c.3.1.4.4.3.7-.1.7-.6 1.4-1.2 1.7-.5.3-1.2.4-2.7 0-1.6-.4-3.5-1.4-5-3-1.5-1.6-2.4-3.5-2.8-5.1-.3-1.3 0-2 .3-2.5Z"
                                fill="currentColor" />
                        </svg>
                    </div>
                    <div class="anx-contact-map__info-text w-block">
                        <div class="anx-contact-map__info-label w-block"><?php echo esc_html($wa_label); ?></div>
                        <div class="anx-contact-map__info-value w-block"><?php echo esc_html($wa_value); ?></div>
                    </div>
                </div>

                <div class="anx-contact-map__info-item w-flex u-align-start u-gap-3">
                    <div class="anx-contact-map__icon w-inline-flex u-align-center u-justify-center" aria-hidden="true">
                        <!-- Location pin -->
                        <svg viewBox="0 0 24 24" fill="none">
                            <path d="M12 21s7-4.6 7-11a7 7 0 1 0-14 0c0 6.4 7 11 7 11Z" stroke="currentColor"
                                stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M12 10.5a2.2 2.2 0 1 0 0-4.4 2.2 2.2 0 0 0 0 4.4Z" fill="currentColor" />
                        </svg>
                    </div>
                    <div class="anx-contact-map__info-text w-block">
                        <div class="anx-contact-map__info-label w-block"><?php echo esc_html($addr_label); ?></div>
                        <div class="anx-contact-map__info-value w-block"><?php echo wp_kses_post(nl2br($addr_value)); ?>
                        </div>
                    </div>
                </div>

                <div class="anx-contact-map__info-item w-flex u-align-start u-gap-3">
                    <div class="anx-contact-map__icon w-inline-flex u-align-center u-justify-center" aria-hidden="true">
                        <!-- Email -->
                        <svg viewBox="0 0 24 24" fill="none">
                            <path d="M4.5 7.5h15v10h-15v-10Z" stroke="currentColor" stroke-width="1.6"
                                stroke-linecap="round" stroke-linejoin="round" />
                            <path d="m5 8 7 6 7-6" stroke="currentColor" stroke-width="1.6" stroke-linecap="round"
                                stroke-linejoin="round" />
                        </svg>
                    </div>
                    <div class="anx-contact-map__info-text w-block">
                        <div class="anx-contact-map__info-label w-block"><?php echo esc_html($email_label); ?></div>
                        <div class="anx-contact-map__info-value w-block"><?php echo esc_html($email_value); ?></div>
                    </div>
                </div>

            </div>
        </div>

    </div>

    <?php if (!empty($button_text)): ?>
        <script>
            (function () {
                var root = document.getElementById('<?php echo esc_js($block_id); ?>');
                if (!root) return;
                var btn = root.querySelector('.fluentform_wrapper .ff-btn-submit, .fluentform_wrapper button[type="submit"], .fluentform_wrapper input[type="submit"]');
                if (!btn) return;
                if (btn.tagName === 'INPUT') btn.value = '<?php echo esc_js($button_text); ?>';
                else btn.textContent = '<?php echo esc_js($button_text); ?>';
            })();
        </script>
    <?php endif; ?>
</section>
<style>
    /*Fluent form css */
    .ff-default .ff-el-form-control {
        background-color: #0000 !important;
        border: 1px solid #d9d9d94f !important;
        padding-top: 25px !important;
        padding-bottom: 25px !important;
        font-family: 'Montserrat', sans-serif !important;
        border-radius: 0 !important;
    }

    .label_ff_3_names_first_name_ {
        margin-bottom: 20px !important;
    }

    .ff-default {
        font-size: 18px;
        font-family: 'Montserrat', sans-serif;
    }

    .anx-contact-map {
        background: #000;
        padding: 60px 0;
    }

    .anx-contact-map__wrap {
        width: min(1100px, calc(100% - 40px));
        margin: 0 auto;
    }

    .anx-contact-map__card {
        background: #0a0a0a;
        border: 1px solid rgba(255, 255, 255, .10);
        box-shadow: 0 0 0 1px rgba(255, 255, 255, .03) inset;
    }

    /* top split */
    .anx-contact-map__left {
        padding: 34px 34px 28px;
        border-right: 1px solid rgba(255, 255, 255, .10);
        width: 50%;
    }

    .anx-contact-map__right {
        width: 50%;
        background: #111;
    }

    @media (max-width:991px) {
        .anx-contact-map__left {
            width: 100%;
            border-right: 0;
            border-bottom: 1px solid rgba(255, 255, 255, .10);
        }

        .anx-contact-map__right {
            width: 100%;
        }
    }

    .anx-contact-map__overline {
        color: #f5a338;
        margin-bottom: 10px;
    }

    .anx-contact-map__title {
        color: #fff;
        font-size: 36px;
        line-height: 1.1;
        margin: 0;
    }

    @media (max-width:991px) {
        .anx-contact-map__title {
            font-size: 30px;
        }
    }

    @media (max-width:600px) {
        .anx-contact-map__left {
            padding: 24px 18px 18px;
        }

        .anx-contact-map__title {
            font-size: 26px;
        }
    }

    /* map */
    .anx-contact-map__map {
        width: 100%;
        height: 100%;
        min-height: 520px;
    }

    .anx-contact-map__map iframe {
        width: 100% !important;
        height: 100% !important;
        min-height: 520px;
        display: block;
    }

    @media (max-width:991px) {

        .anx-contact-map__map,
        .anx-contact-map__map iframe {
            min-height: 420px;
        }
    }

    /* bottom info bar */
    .anx-contact-map__info {
        border-top: 1px solid rgba(255, 255, 255, .10);
        background: #050505;
    }

    .anx-contact-map__info-item {
        padding: 18px 18px;
        border-right: 1px solid rgba(255, 255, 255, .10);
        width: 33.333%;
    }

    .anx-contact-map__info-item:last-child {
        border-right: 0;
    }

    @media (max-width:991px) {
        .anx-contact-map__info-item {
            width: 100%;
            border-right: 0;
            border-bottom: 1px solid rgba(255, 255, 255, .10);
        }

        .anx-contact-map__info-item:last-child {
            border-bottom: 0;
        }
    }

    .anx-contact-map__icon {
        width: 28px;
        height: 28px;
        color: #f5a338;
        flex: 0 0 28px;
    }

    .anx-contact-map__icon svg {
        width: 18px;
        height: 18px;
        display: block;
    }

    .anx-contact-map__info-label {
        color: rgba(255, 255, 255, .85);
        font-size: 12px;
        margin-bottom: 6px;
    }

    .anx-contact-map__info-value {
        color: #fff;
        font-size: 12.5px;
        letter-spacing: .2px;
    }

    /* Fluent Forms look */
    .anx-contact-map .fluentform_wrapper .ff-el-group {
        margin-bottom: 12px !important;
    }

    .anx-contact-map .fluentform_wrapper .ff-el-form-control,
    .anx-contact-map .fluentform_wrapper input[type="text"],
    .anx-contact-map .fluentform_wrapper input[type="email"],
    .anx-contact-map .fluentform_wrapper input[type="tel"],
    .anx-contact-map .fluentform_wrapper textarea,
    .anx-contact-map .fluentform_wrapper select {
        background: transparent !important;
        border: 1px solid rgba(255, 255, 255, .18) !important;
        color: #fff !important;
        border-radius: 0 !important;
        padding: 12px 12px !important;
        box-shadow: none !important;
    }

    .anx-contact-map .fluentform_wrapper textarea {
        min-height: 140px !important;
        resize: vertical;
    }

    .anx-contact-map .fluentform_wrapper ::placeholder {
        color: rgba(255, 255, 255, .55) !important;
    }

    .anx-contact-map .fluentform_wrapper .ff-btn-submit,
    .anx-contact-map .fluentform_wrapper button[type="submit"],
    .anx-contact-map .fluentform_wrapper input[type="submit"] {
        background: #f5a338 !important;
        border: 1px solid #f5a338 !important;
        color: #0a0a0a !important;
        border-radius: 0 !important;
        padding: 12px 18px !important;
        font-weight: 600 !important;
        min-width: 160px;
    }

    @media (max-width:600px) {

        .anx-contact-map .fluentform_wrapper .ff-btn-submit,
        .anx-contact-map .fluentform_wrapper button[type="submit"],
        .anx-contact-map .fluentform_wrapper input[type="submit"] {
            width: 100%;
            min-width: 0;
        }
    }
</style>