<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class MyEventHandler
{
    static function handleMissingTranslation($event)
    {
        // event class for this event is CMissingTranslationEvent    
        // so we can get some info about the message
        $text = implode("\n", array(
           'Language: '.$event->language,
           'Category:'.$event->category,
           'Message:'.$event->message         
        ));
        // sending email
		mail('tobias@mauritz.de', 'Missing translation', $text);
    }
}

