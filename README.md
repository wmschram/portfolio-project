# porfolio-project
This is my personal portfolio project running on the Symfony 4 framework.

##### This project comes with:
- Gulp
- Bootstrap (grid only)
- Frontend structure (js + sass through BEM / Atom Design)
- Twig structure (shared blocks, includes, menu's)
- Basic SEO (meta tags, fallback, rich data on Menu, Breadcrumbs)
- KnpMenuBundle (MainMenu + Breadcrumbs)


#### SCSS
This project is build with ATOM design in mind.
A great article to grasp the concept of this design system: http://bradfrost.com/blog/post/atomic-web-design/ 
I included the reset and grid of Bootstrap, the rest is custom. Also i simplified the breakpoints by making a small mixin.
The variables used in the project have been defined using a specific way. Note that background variables always start with 'bg' in order to prevent using them on (for example) borders. This is to ensure easy changes further down the road.

For the default font-family i went with the montserrat font.

### Installation
Installing this project is like any other symfony project.

- run: composer install
- run: npm install



### Running the project
This website does not require a database, therefor it can use the build-in symfony server by running:

- run: php bin/console server:run

More info: https://symfony.com/doc/current/setup.html 
