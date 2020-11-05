<?php

/**
 * Block Name: Portfolio
 *
 * This is the template that displays the testimonial block.
 */


    if(get_field('atgb_pb_anchor') !='' ) {
        $anchor = get_field('atgb_pb_anchor');
    } else {
        $anchor = "contact";
    }

    echo '
    <div class="portfolio-block" id="' . $anchor . '">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2 class="text-center mb-4">' .  get_field('atgb_pb_title') . '</h2>
                </div>';
                if (have_rows('atgb_pb_projects')) :
                    while (have_rows('atgb_pb_projects')) : the_row();
                    echo '
                <div class="col-md-6">
                    <div class="project">
                        <img src="' .get_sub_field('atgb_pb_image') . '" alt="' . get_sub_field('atgb_pb_project_title') . '">
                        <div class="title">
                            <p><strong>' . get_sub_field('atgb_pb_project_title') . '</strong></p>
                            <p>' . get_sub_field('atgb_pb_project_text') . '</p>
                            <p><a href="' . get_sub_field('atgb_pb_link') . '">View site</a></p>
                        </div>
                    </div>
                </div>';

                endwhile; endif;
                
                echo '
            </div>
        </div>
    </div>
    <div class="container">
        <hr>
    </div>';


 ?>