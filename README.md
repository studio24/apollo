# Apollo #

Static (HTML, CSS and Javascript) framework with performance and accessibility as first-class passenger.

When Apollo is used in the Studio24 Wordpress starter theme, it becomes the `src/assets` folder.

### What is this repository for? ###

## Site URLs

* Live - http://apollo.s24.net/
* Development - http://local.apollo.s24.net

* Quick summary
* v 2.0.0
* [Learn Markdown](https://bitbucket.org/tutorials/markdowndemo)

### How do I get set up? ###

* [Summary of set up](#summary-of-set-up)
* Configuration
* Dependencies
* Database configuration (none)
* How to run tests
* Deployment instructions

### Contribution guidelines ###

* Writing tests (none)
* Code review
* Other guidelines

### Who do I talk to? ###

- **Carlos Eriksson** - *Repo owner*
- **Marie Manandise** - *Contributor*
- **Sean Dunwoody** - *Contributor*

***

## Summary of set up ##

Install the project dependencies.

````bash
# Install theme dependencies
cd web/wp-content/themes/Pantheon
npm install
````

Build assets (such as styles). Add `--production` flag to prepare files for commit.

````bash
cd web/wp-content/themes/Pantheon
gulp build
````

Watch for changes. Add `--production` flag to prepare files for commit.

````bash
cd web/wp-content/themes/Pantheon
gulp
````