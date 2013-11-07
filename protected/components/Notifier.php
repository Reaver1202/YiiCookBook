<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Notifier {
    function comment($event){
       $text = "There was new comment from {$event->comment->author} on post {$event->post->title}";
	   mail('tobias@mauritz.de.com', 'New comment', $text);
    }
}