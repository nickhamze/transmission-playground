<?php
require_once '/wordpress/wp-load.php';
require_once ABSPATH.'wp-admin/includes/image.php';
$user=get_user_by('login','admin');wp_set_current_user($user->ID);
update_user_meta($user->ID,'desktop_mode_mode','1');
update_user_meta($user->ID,'desktop_mode_seen_intros',array('activation-welcome'));
update_option('blogname','Transmission');update_option('blogdescription','A little space to write.');
$category=wp_insert_term('Field notes','category');$tag=wp_insert_term('Small discoveries','post_tag');
$file=wp_upload_bits('first-light.png',null,file_get_contents('/tmp/first-light.png'));
$media=wp_insert_attachment(array('post_title'=>'First light','post_mime_type'=>'image/png','post_status'=>'inherit'),$file['file']);
wp_update_attachment_metadata($media,wp_generate_attachment_metadata($media,$file['file']));
update_post_meta($media,'_wp_attachment_image_alt','A sage-green planet against a deep green sky.');
wp_insert_post(array('post_type'=>'post','post_author'=>$user->ID,'post_status'=>'draft','post_title'=>'The internet used to feel like a place.','post_content'=>'<p>I miss the little corners of the internet. A favorite song, a half-finished thought, a guestbook that someone actually signed.</p><p>They were just someone’s place.</p><h2>Maybe we can make room again.</h2><p>Not everything needs to be a performance. Sometimes you just want to write something down, open the window, and let a little light in.</p><blockquote><p>A good place to write should feel like somewhere you want to return to.</p></blockquote>','post_category'=>array($category['term_id']),'tags_input'=>array('Small discoveries')));
$post=wp_insert_post(array('post_type'=>'post','post_author'=>$user->ID,'post_status'=>'publish','post_title'=>'First light','post_content'=>'<p>A note from a small corner of the universe.</p><img class="wp-image-'.$media.'" src="'.esc_url($file['url']).'" alt="A sage-green planet against a deep green sky."><p>This is a normal WordPress post. You can find it in Posts, edit it in Transmission, or read it on the site.</p>','post_excerpt'=>'A note from a small corner of the universe.','post_category'=>array($category['term_id'])));
set_post_thumbnail($post,$media);
