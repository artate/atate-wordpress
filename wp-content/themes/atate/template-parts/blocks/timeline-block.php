<?php

/**
 * Block Name: Timeline
 *
 * This is the template that displays the testimonial block.
 */

    if(get_field('atgb_tlb_anchor') !='' ) {
        $anchor = get_field('atgb_tlb_anchor');
    } else {
        $anchor = "timeline";
    }

    echo '<div class="timeline-block" id="' . $anchor . '">
            <div class="container">';

    if (get_field('atgb_tlb_title') != ''){
        echo '<h2 class="text-center mb-5">' . get_field('atgb_tlb_title') . '</h2>';
    }

    if (have_rows('atgb_tlb')) :
        $itemSide = '';
        echo '<div class="timeline-container">';
            while (have_rows('atgb_tlb')) : the_row();
            $itemSide = get_sub_field('atgb_tlb_side');

                echo'
                <div class="timeline-item">
                      <div class="timeline-dot"></div>
                            <div class="timeline-content js--fadeIn' . $itemSide . '">
                                <div class="date">' . get_sub_field('atgb_tlb_date') . '</div>
                                <h3>' . get_sub_field('atgb_tlb_title') . '</h3>
                                <p class="timeline-location">' . get_sub_field('atgb_tlb_location') . '</p>
                                ' . get_sub_field('atgb_tlb_text') . '
                                <a class="bnt-more" href="' . get_sub_field('atgb_tlb_link') . '">' . get_sub_field('atgb_tlb_link_text') . '</a>
                            </div>
                      </div>';

            endwhile;

        echo '</div>';

    endif;

    echo '</div>
    </div>';
 ?>