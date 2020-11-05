<?php

/**
 * Block Name: Contact
 *
 * This is the template that displays the testimonial block.
 */

    if(get_field('atgb_ib_anchor') !='' ) {
        $anchor = get_field('atgb_ib_anchor');
    } else {
        $anchor = "contact";
    }

    echo '
    <div class="contact-block" id="' . $anchor . '">
        ' . do_shortcode('[contact-form-7 id="11" title="Contact"]') . '
    </div>';


 ?>