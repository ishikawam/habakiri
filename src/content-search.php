<?php
/**
 * Version    : 1.2.1
 * Author     : inc2734
 * Author URI : http://2inc.org
 * Created    : July 5, 2015
 * Modified   : August 7, 2015
 * License    : GPLv2 or later
 * License URI: license.txt
 */
?>
<article class="article article--search">
	<div class="entry">
		<div class="entry__content entry-content">
			<div class="entries entries--search">
				<?php while ( have_posts() ) : the_post(); ?>
				<article <?php post_class( array( 'article' ) ); ?>>
					<div class="entry">
						<?php Habakiri::the_title(); ?>
						<div class="entry__summary entry-summary">
							<?php the_excerpt(); ?>
						<!-- end .entry-summary --></div>
					<!-- end .entry --></div>
				</article>
				<?php endwhile; ?>
			<!-- end .entries --></div>
		<!-- end .entry-content --></div>
		<?php Habakiri::the_pager(); ?>
	<!-- end .entry --></div>
</article>
