<?php get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<?php
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

         endwhile;

  else :

  endif;
  ?>

<?php endwhile; else: ?>
 
<?php endif; ?>

<?php get_footer(); ?>
