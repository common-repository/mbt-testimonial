<?php
function mbt_testimonial_metabox(){

	add_meta_box('mbt-testimonial-id','Testimonial Info','mbt_testimonial_user_fields','mbttestimonial','normal','high');
}
add_action('add_meta_boxes','mbt_testimonial_metabox');

function mbt_testimonial_user_fields(){

	global $post;
	$mbtrole = get_post_meta($post->ID,'mbt_user_role',true);
	$mbtcompany = get_post_meta($post->ID,'mbt_company',true);
?>
	<div id="mbt-metabox">
		<input type="text" name="mbt-userrole" value="<?php echo $mbtrole;?>" placeholder="User Role" />
		<input type="text" name="mbt-company" value="<?php echo $mbtcompany;?>" placeholder="Company" />
	</div>
<?php
}

function mbt_testimonial_update_post(){

	global $post;
	$mbtuser = sanitize_text_field($_POST['mbt-userrole']);
	$mbtcompany = sanitize_text_field($_POST['mbt-company']);
	update_post_meta($post->ID,'mbt_user_role',$mbtuser);
	update_post_meta($post->ID,'mbt_company',$mbtcompany);
}

add_action('save_post','mbt_testimonial_update_post');