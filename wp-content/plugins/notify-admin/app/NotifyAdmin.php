<?php

class NotifyAdmin
{

  private $notify_emails = [
    'helloeveryone@dxw.com',
  ];

  function notify_admin_on_post_publish($post) {

    foreach ($this->notify_emails as $email){
      wp_mail($email, "New post: " . $post->post_title, "A new post has been posted. Hooray.");
    }

    return $post;

   }

}
