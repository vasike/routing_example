Routing Example for Developers
=======================

Project site: 

Code:

Issues: 

What Is This?
-------------

This a modules is intended to provide working examples of Drupal 8's
Routing API.
This modules strive to be simple, well documented and
modification friendly, in order to help developers quickly learn their inner
workings.

These examples are meant to teach you about code-level development for Drupal
8. Some solutions might be better served using a contributed module, so that
you don't end up having to re-invent the wheel in PHP.


How To Use The Examples
-----------------------

There are three main ways to interact with the examples in this project:

1. Enable the modules and use them within Drupal. Not all modules will have
obvious things to see within your Drupal installation. For instance, while the
Page and Form API examples will display forms, the Database API example does not
have much that is visible within Drupal.

2. Read the code. Much effort has gone into making the example code readable,
not only in terms of the code itself, but also the extensive inline comments
and documentation blocks.

3. Browse the code and documentation on the web. There are two main places to
do this:

* https://api.drupal.org/api/examples is the main API site for all of Drupal.
It has all manner of cross-linked references between the example code and the
APIs being demonstrated. All of the Doxygen-based comments in the code are
parsed and made browseable here.

* http://drupalcode.org/project/examples.git allows you to browse the git
repository for the Examples project.

Note also that in the future, many modules from the Examples project will be
moved into Drupal 8 core. This means some examples will come with Drupal
itself. As of this writing, none have been migrated to Drupal 8 yet.

This collection of modules ship with a composer.json file outlining the name,
description, type and license of the package. Although not used by Drupal itself
it allows the module to be installed via composer, therfore all contrib modules
should ship with one.

How To Install The Modules
--------------------------

1. The Examples project installs like any other Drupal module. There is extensive
documentation on how to do this here: https://drupal.org/documentation/install/modules-themes/modules-8

2. Enable  Routing Example module you wish to explore in Admin menu > Extend.

Having seen the behavior of the various routing examples, you can move on to
reading the code, experimenting with it, and hopefully grasp how things work.

Thanks.

Resources
---------

* Drupal 8 Routing: Decoupling hook_menu [tutorial]
https://www.appnovation.com/blog/drupal-8-routing-decoupling-hook-menu

* Drupal 8 Routing [slides]
http://www.slideshare.net/ygerasimov/drupal-8-routing

* Lesson 1.2 - Menus [lesson]
https://docs.acquia.com/articles/drupal-8-lesson-512-menus

* Basic Routing in Drupal 8
http://www.drupalism.com/tutorial/basic-routing-drupal-8

* Defining and Altering Routes in Drupal 8 [blog]
https://dev.acquia.com/blog/coding-drupal-8/defining-and-altering-routes-in-drupal-8/22/03/2016/9891

* What Happened to Hook_Menu in Drupal 8? [tutorial]
https://www.lullabot.com/articles/what-happened-to-hook_menu-in-drupal-8

* Create a Module with a Route and Controller [video tutorial]
https://drupalize.me/videos/create-module-route-and-controller?p=2486

* Create your first Drupal 8 module [tutorial]
http://befused.com/drupal/first-drupal8-module

* Building Drupal 8 Modules [github slides]
http://brantwynn.github.io/d8slides/
https://github.com/brantwynn/d8slides [source]

* Say Hello world to Drupal 8! [Basic steps involved in Creating a custom module in Drupal 8] [tutorial]
http://redcrackle.com/blog/say-hello-world-drupal-8-basic-steps-involved-creating-custom-module-drupal-8

* Symfony Routing
https://drupalize.me/videos/symfony-routing?p=1856
