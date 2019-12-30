<?php 
	/* 
	** @package makzine
	**Template Name: Cross Site Scripting
	*/
	get_header(); 

	$post_title = $_POST['xss_title'];
	$post_content = $_POST['xss_content'];
	$submit = $_POST['submit'];

	if(isset($submit)){
	    global $user_ID;
	    $new_post = array(
	        'post_title' => $post_title,
	        'post_content' => $post_content,
	        'post_status' => 'publish',
	        'post_date' => date('Y-m-d H:i:s'),
	        'post_author' => $user_ID,
	        'post_type' => 'post',
	        'post_category' => array(0)
	    );
	    wp_insert_post($new_post);
	}

?>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">
		<div class="entry-content">
			<form id="xss-form" method="post">
				<div class="field-wrap">
					<label>Title: </label>
					<input type="text" name="xss_title" id="xss-title">
				</div>
				<div class="field-wrap">
					<label>Content: </label>
					<textarea rows="4" cols="50" name="xss_content"></textarea>
				</div>
				<div class="field-wrap">
					<input type="submit" name="submit" id="xss-submit" value="Submit">
				</div>
			</form>
		</div>
	</main><!-- .site-main -->

</div><!-- .content-area -->

<?php get_footer(); ?>