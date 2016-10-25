# CFlash


[![Build Status](https://travis-ci.org/krst15/CFlash.svg?branch=master)](https://travis-ci.org/krst15/CFlash)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/krst15/CFlash/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/krst15/CFlash/?branch=master)
[![Code Coverage](https://scrutinizer-ci.com/g/krst15/CFlash/badges/coverage.png?b=master)](https://scrutinizer-ci.com/g/krst15/CFlash/?branch=master)


Class to show flash messages.
=========

  1.  Add this to your composer.json file. "require": { "zama15/cflashmessage": "dev-master" }

  2.  Then use composer/packagist to download the package.

  3.  Use this in your frontcontroller to get the the function to work. $di->setShared('flashMessages', function() use ($di){ $flashMessages = new \zama15\FlashMessage\CFlashMessage($di); return $flashMessages; });

  4.  In the router you need to add the css-stylesheet flash.css

  5.  Example code to show the messages. $app->router->add('flash', function() use ($app) {

    $title = "Flashmeddelanden"; $app->theme->setTitle($title); $app->theme->addStylesheet('css/flash.css');

    $app->flashMessages->addMessage('Success!', 'success'); $app->flashMessages->addMessage('Info', 'info'); $app->flashMessages->addMessage('Warning!', 'warning'); $app->flashMessages->addMessage('Error!', 'error');

    $app->views->add('me/page', [ 'content' => $app->flashMessages->getFlashMessages(), ]);

});
