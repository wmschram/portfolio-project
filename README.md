# symfony-project
Symfony 4.1 with basic structure already present.

##### This project comes with:
- Gulp
- Bootstrap (grid only)
- Basic frontend structure (js + sass through BEM / Atom Design)
- Basic Twig structure (shared blocks, includes, menu's)
- Basic SEO (meta tags, fallback, rich data on Menu, Breadcrumbs)
- KnpMenuBundle (MainMenu + Breadcrumbs)


#### Template structure
https://github.com/wmschram/symfony-project/tree/master/templates/shared

The base template already has been setup to include the basics of each page. Menu, breadcrumb, footer and meta tags.
In the 'shared/includes' folder there are files that are included on each page, and there are 'shared/blocks' which are reusable elements to be used throughout the templates. New elements in the 'blocks' folder should always be abstract and reusable.

In the 'default' folder you should build reusable templates for certain type of pages. For example: blog pages or contact pages.
We have created a example tempate which also shows that you can overwrite twig blocks from the 'base' file even though the specific page is extending the example template.

Twig files that are included or embedded by other files, and are nothing more then 'parts' being with a underscore in their filename.


#### SCSS
This project is build with ATOM design in mind.
A great article to grasp the concept of this design system: http://bradfrost.com/blog/post/atomic-web-design/ 
I included the reset & grid of Bootstrap, the rest is up to you. Also i simplified the breakpoints by making a small mixin.
The variables used in the project have been defined using a specific way. Note that background variables always start with 'bg' in order to prevent using them on (for example) borders. Please use the variables accordingly so ensure easy changes further down the road. If your client wants the menu to have a different background color, you are going to have a hard time if you used the variables the wrong way.

For the default font-family i went with the Ubuntu font. If you want to change it, alter the SCSS variable and font-include in the stylesheet twig file.

### Installation
Installing this project is like any other symfony project.

- run: composer install
- run: npm install



### Running the project
There are several ways to run this project depending on what you intent to do with it.
You could use Wamp/Xamp for a local environment. Or if you're building a website that does not require a database,
you could use the build-in symfony server by running:

- run: php bin/console server:run

More info: https://symfony.com/doc/current/setup.html 
