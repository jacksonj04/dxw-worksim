<?php
/**
 * Plugin Name: Notify Admin
 */

 class NotifyAdmin
 {

   function notify_admin_on_post_publish($post) {

     $admin_email = (string) get_bloginfo('admin_email');

     // foreach (self::$notify_emails as $email){
       wp_mail($admin_email, "New post: " . $post->post_title, "A new post has been posted. Hooray. See it at " . get_permalink($post));
     // }

     return $post;

    }

 }

 // $admin_email = get_bloginfo('admin_email');
 //
 // echo $admin_email;

add_action('new_to_publish', ['NotifyAdmin', 'notify_admin_on_post_publish']);
add_action('draft_to_publish', ['NotifyAdmin', 'notify_admin_on_post_publish']);
add_action('pending_to_publish', ['NotifyAdmin', 'notify_admin_on_post_publish']);
