<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class PostController extends CController
{
   function actionAddComment()
   {
      $post = Post::model()->findByPk(10);      
      $notifier = new Notifier();

      // attaching event handler
      $post->onNewComment = array($notifier, 'comment');

      // in the real application data should come from $_POST
             $comment = new Comment();
             $comment->author = 'Sam Dark';
             $comment->text = 'Yii events are amazing!';

      // adding comment
             $post->addComment($comment);
   }
}