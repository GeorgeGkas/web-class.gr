Compile & deploy
=======

We use [gulp.js](http://gulpjs.com/) as our build system. To deploy the site you have to compile SCSS and REACT and also copy the bootstrap fonts folder. Bellow we show you how to do it:

 1. Run `gulp scss` to copy the Bootstrap fonts folder and copmile the scss code.
 2. Run `gulp react` to compile and bundle the react folder.

These two tasks will create a `public` folder. This serves the static files that are needed to run the web app.
