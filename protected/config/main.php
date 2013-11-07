<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
// uncomment the following to define a path alias
// Yii::setPathOfAlias('local','path/to/local-folder');

// This is the main Web application configuration. Any writable
// CWebApplication properties can be configured here.
return array(
    'components' => array(
   
        // messages component class is CPhpMessageSource by default
        'messages' => array(
            // using static class method as event handler
            'onMissingTranslation' => array('MyEventHandler', 'handleMissingTranslation'),
        )
    )
);
