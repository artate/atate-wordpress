<?php
    function introductionBlock() {
     $backgroundImage= get_sub_field('at_ib_background_image');
     $title = get_sub_field('at_ib_title');
     $cta1 = get_sub_field('at_ib_cta_one');
     $cta2 = get_sub_field('at_ib_cta_two');

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
                                if($cta1['at_ib_cta1_link']) {
                                    echo '<a href="' . $cta1['at_ib_cta1_link'] . '" class="cta">';
                                } else {
                                    echo '<a href="#" class="cta">';
                                }

                                if ($cta1['at_ib_cta1_title']) {
                                    echo '<span>' . $cta1['at_ib_cta1_title'] . '</span>';
                                }

                                echo '</a>';
                            }

                            if ($cta2) {
                                if($cta2['at_ib_cta2_link']) {
                                    echo '<a href="' . $cta2['at_ib_cta2_link'] . '" class="cta">';
                                } else {
                                    echo '<a href="#" class="cta">';
                                }

                                if ($cta2['at_ib_cta2_title']) {
                                    echo '<span>' . $cta2['at_ib_cta2_title'] . '</span>';
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
    }

    function aboutBlock() {
        if(get_sub_field('at_ab_anchor') !='' ) {
        $anchor = get_sub_field('at_ab_anchor');
        } else {
        $anchor = "contact";
        }
    $sectionTitle = get_sub_field('at_ab_title');
    $sectionText = get_sub_field('at_ab_text');

    echo '
        <div class="about-block" id="';
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

            if (have_rows('at_ab_info_section')):
            echo '<div class="row">';

                while (have_rows('at_ab_info_section')): the_row();

                echo'
                <div class="col-md-4">
                    <div class="glance">
                        <p><strong>' . get_sub_field('at_section_title') . '</strong></p>
                        <p><i class="fa ' . get_sub_field('at_info_line_fa') . '"></i>
                            ' . get_sub_field('at_info_line') . '</p>
                        <p><i class="fa ' . get_sub_field('at_info_line_fa_2') . '"></i>
                            ' . get_sub_field('at_info_line_2') . '</p>
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
     }

    function contactUsFormBlock() {
        if(get_sub_field('at_ib_anchor') !='' ) {
            $anchor = get_sub_field('at_ib_anchor');
        } else {
            $anchor = "contact";
        }
        echo '
        <div class="contact-block" id="' . $anchor . '">
        ' . do_shortcode('[contact-form-7 id="11" title="Contact"]') . '
        </div>';
    }

    function portfolioBlock() {
        if(get_sub_field('at_pb_anchor') !='' ) {
        $anchor = get_sub_field('at_pb_anchor');
        } else {
        $anchor = "contact";
        }

        echo '
        <div class="portfolio-block" id="' . $anchor . '">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2 class="text-center mb-4">' .  get_sub_field('at_pb_title') . '</h2>
                </div>';
                if (have_rows('at_pb_projects')) :
                    while (have_rows('at_pb_projects')) : the_row();
                    echo '
                <div class="col-md-6">
                    <div class="project">
                        <img src="' .get_sub_field('at_pb_image') . '" alt="' . get_sub_field('at_pb_project_title') . '">
                        <div class="title">
                            <p><strong>' . get_sub_field('at_pb_project_title') . '</strong></p>
                            <p>' . get_sub_field('at_pb_project_text') . '</p>
                            <p><a href="' . get_sub_field('at_pb_link') . '">View site</a></p>
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
    }

    function timelineBlock() {
        if(get_sub_field('at_tlb_anchor') !='' ) {
            $anchor = get_sub_field('at_tlb_anchor');
        } else {
            $anchor = "timeline";
        }

        echo '<div class="timeline-block" id="' . $anchor . '">
                <div class="container">';
        if (get_sub_field('at_timeline_block_title') != ''){
            echo '<h2 class="text-center mb-5">' . get_sub_field('at_timeline_block_title') . '</h2>';
        }

        if (have_rows('at_tlb')) :
        $itemSide = '';
            echo '<div class="timeline-container">';
                while (have_rows('at_tlb')) : the_row();
                $itemSide = get_sub_field('at_tlb_side');
                    echo'
                    <div class="timeline-item">
                          <div class="timeline-dot"></div>
                                <div class="timeline-content js--fadeIn' . $itemSide . '">
                                    <div class="date">' . get_sub_field('at_tlb_date') . '</div>
                                    <h3>' . get_sub_field('at_tlb_title') . '</h3>
                                    <p class="timeline-location">' . get_sub_field('at_tlb_location') . '</p>
                                    ' . get_sub_field('at_tlb_text') . '
                                    <a class="bnt-more" href="' . get_sub_field('at_tlb_link') . '">' . get_sub_field('at_tlb_link_text') . '</a>
                                </div>
                          </div>';
                endwhile;
            echo '</div>';
        endif;
        echo '</div>
        </div>';
    }

    function callComponents() {
        if( have_rows('at_components') ):

            while (have_rows('at_components')) : the_row();
            $row = get_row();
      
              if( get_row_layout() == 'at_intro_block' ):
      
                  introductionBlock($row);
      
                 endif;
      
              if( get_row_layout() == 'at_about_block' ):
      
                  aboutBlock($row);
      
               endif;
      
              if( get_row_layout() == 'at_contact_block' ):
      
                  contactUsFormBlock($row);
      
              endif;
      
                if( get_row_layout() == 'at_portfolio_block' ):
      
                    portfolioBlock($row);
      
               endif;
      
      
               if( get_row_layout() == 'at_timeline_block' ):
      
                         timelineBlock($row);
      
               endif;
      
               endwhile;
      
        else :
      
        endif;
    }

    add_action('acf/init', 'my_acf_init');

    function my_acf_init() {
	if( function_exists('acf_register_block') ) {
		
		acf_register_block(array(
			'name'				=> 'intro',
			'title'				=> __('Intro'),
			'description'		=> __('Intro block.'),
			'render_callback'	=> 'my_acf_block_render_callback',
			'category'			=> 'formatting',
			'icon'				=> 'admin-home',
			'keywords'			=> array( 'intro' ),
        ));
        
        acf_register_block(array(
			'name'				=> 'about',
			'title'				=> __('About'),
			'description'		=> __('About block.'),
			'render_callback'	=> 'my_acf_block_render_callback',
			'category'			=> 'formatting',
			'icon'				=> 'analytics',
			'keywords'			=> array( 'about' ),
        ));
        
        acf_register_block(array(
			'name'				=> 'contact',
			'title'				=> __('Contact'),
			'description'		=> __('Contact block.'),
			'render_callback'	=> 'my_acf_block_render_callback',
			'category'			=> 'formatting',
			'icon'				=> 'email',
			'keywords'			=> array( 'contact' ),
        ));
        
        acf_register_block(array(
			'name'				=> 'portfolio',
			'title'				=> __('Portfolio '),
			'description'		=> __('Portfolio block.'),
			'render_callback'	=> 'my_acf_block_render_callback',
			'category'			=> 'formatting',
			'icon'				=> 'laptop',
			'keywords'			=> array( 'portfolio', 'quote' ),
        ));
        
        acf_register_block(array(
			'name'				=> 'timeline',
			'title'				=> __('Timeline '),
			'description'		=> __('Timeline block.'),
			'render_callback'	=> 'my_acf_block_render_callback',
			'category'			=> 'formatting',
			'icon'				=> 'admin-comments',
			'keywords'			=> array( 'timeline', 'quote' ),
		));
	}
    } 

    function my_acf_block_render_callback( $block ) {
	
        // convert name ("acf/testimonial") into path friendly slug ("testimonial")
        $slug = str_replace('acf/', '', $block['name']);
        
        // include a template part from within the "template-parts/block" folder
        if( file_exists( get_theme_file_path("/template-parts/blocks/{$slug}-block.php") ) ) {
            include( get_theme_file_path("/template-parts/blocks/{$slug}-block.php") );
        }
    }
?>