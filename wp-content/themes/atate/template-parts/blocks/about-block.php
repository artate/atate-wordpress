<?php

    /**
     * Block Name: About
     *
     * This is the template that displays the testimonial block.
     */

    $sectionTitle = get_field('atgb_ab_title');
    $sectionText = get_field('atgb_ab_text');

    if(get_field('atgb_ab_anchor') !='' ) {
        $anchor = get_field('atgb_ab_anchor');
    } else {
        $anchor = "About";
    }    

    echo '<div class="about-block" id="';

    if($anchor != '' ) {
        echo $anchor;
    } else {
        echo 'about';
    }
    
    echo '"><div class="container">
            <div class="row">
                <div class="col-12">';
                    if ($sectionTitle != "") {
                        echo '<h2 class="text-center mb-4">' . $sectionTitle . '</h2>';
                    }

                    if ($sectionText != "") {
                    echo '<div class="intro-text">' . $sectionText . ' </div>';
                    }
            echo '
                </div>
            </div>';

            if (have_rows('atgb_ab_info_section')):
            echo '<div class="row">';

                while (have_rows('atgb_ab_info_section')): the_row();

                echo'
                <div class="col-md-4">
                    <div class="glance">
                        <p><strong>' . get_sub_field('atgb_section_title') . '</strong></p>
                        <p><i class="fa ' . get_sub_field('atgb_info_line_fa') . '"></i>
                            ' . get_sub_field('atgb_info_line') . '</p>
                        <p><i class="fa ' . get_sub_field('atgb_info_line_fa_2') . '"></i>
                            ' . get_sub_field('atgb_info_line_2') . '</p>
                    </div>
                </div>';

                endwhile;

            echo '</div>';

            endif;

            echo '
                </div>
            </div>
        </div>
        <div class="container">
            <hr>
        </div>';

 ?>