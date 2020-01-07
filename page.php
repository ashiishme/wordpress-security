<?php 
	/* 
	** @package makzine
	** Single Page
	*/

	get_header(); ?>

	<div id="main-content">

		<div class="container">
			<div class="col-md-8">

				<?php 

				if(have_posts()):
					
					while(have_posts()) : the_post();

					get_template_part( 'template-parts/content', 'page' );

					endwhile;

				else:

					echo "<p>No Content Found</p>";

				endif;

				?>
				<?php 
					if(isset($_POST['submit_users'])) {
						$user = $_POST['get_users'];
						$query = "SELECT * FROM wp_users WHERE user_login = $user ";
						echo $query;
						$results = $wpdb->get_results($query);
						var_dump($results);
					}
				?>
				<form method="POST">
					<div class="get-users">
						<input type="text" name="get_users">
						<input type="submit" name="submit_users" value="Get Users">
					</div>
				</form>

			<!-- <div style="border: 2px solid #D5CC5A; overflow: hidden; margin: 15px auto; max-width: 575px;">
				<iframe scrolling="no" src="http://whitehatagency.com.au/" style="border: 0px none; margin-left: -36px; height: 812px; margin-top: -486px; width: 650px;">
				</iframe>
			</div> -->
			</div>

			<div class="col-md-4">

				<?php get_sidebar(); ?>

			</div>

		</div>

	</div>


	<?php get_footer(); ?>


