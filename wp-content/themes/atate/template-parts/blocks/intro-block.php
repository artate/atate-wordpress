<?php

/**
 * Block Name: Intro
 *
 * This is the template that displays the testimonial block.
 */

     $backgroundImage= get_field('atgb_ib_background_image');
     $title = get_field('atgb_ib_title');
     $cta1 = get_field('atgb_ib_cta_one');
     $cta2 = get_field('atgb_ib_cta_two');

     echo '
        <div class="intro-block" style="background-image: url(\'' . $backgroundImage . '\');">
            <div class="intro-block__inner">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <h1 class="mb-4">' . $title . '</h1>';
                            if ($cta1 || $cta) {
                                echo '<div class="intro-block__inner__content">';
                            }

                            if ($cta1) {
                                if($cta1['atgb_ib_cta1_link']) {
                                    echo '<a href="' . $cta1['atgb_ib_cta1_link'] . '" class="cta">';
                                } else {
                                    echo '<a href="#" class="cta">';
                                }

                                if ($cta1['atgb_ib_cta1_title']) {
                                    echo '<span>' . $cta1['atgb_ib_cta1_title'] . '</span>';
                                }

                                echo '</a>';
                            }

                            if ($cta2) {
                                if($cta2['atgb_ib_cta2_link']) {
                                    echo '<a href="' . $cta2['atgb_ib_cta2_link'] . '" class="cta">';
                                } else {
                                    echo '<a href="#" class="cta">';
                                }

                                if ($cta2['atgb_ib_cta2_title']) {
                                    echo '<span>' . $cta2['atgb_ib_cta2_title'] . '</span>';
                                }

                            echo '</a>';
                            }
                            if ($cta1 || $cta) {
                                echo '</div>';
                            }

                        echo '</div>
                    </div>
                </div>
            </div>
        </div>';
?>