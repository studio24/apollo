# Apollo 

Static framework

## Site URLs

* Live: http://apollo.s24.net/
* Staging: http://apollo-staging.s24.net
* Development: http://apollo.dev

## Building the site

To build the site once:

    gulp build

And to continuously watch the project for changes run:

    gulp

## Hosting

* The website is hosted on: {server name / shared server}

## Deployment

Deploy the site to live:

```
#!bash
{deploy command here}
```

Deploy the site to staging:

```
#!bash
ssh studio24@goldeneye.studio24.net deploy studio24/apollo staging master nodb
```

```
ssh studio24@goldeneye.studio24.net deploy studio24/apollo live master nodb
```

## Documentation

Please see docs at https://bitbucket.org/studio24/{repo-name}/wiki

## Synching tasks

### Sync files from live to staging

Run on your local Mac. Remove *-n* to run this live.

```
#!bash
ssh studio24@scaramanga.studio24.net 'rsync -n -av /var/www/{client}/{domain.com}/live/web/files/ /var/www/{client}/{domain.com}/staging/web/files'
```

### Sync files from live to local dev

Run on your local Mac. Remove *-n* to run this live.

```
#!bash
rsync -n -e "ssh" -av studio24@scaramanga.studio24.net:/var/www/{client}/{domain.com}/live/web/files/ ~/Sites/{project-name}/web/files
```

## Installation

{Clear installation instructions, see example below. Ensure you edit this to make this README accurate. If you have very extensive installation instructions move these into a INSTALL.md file and link from this README}

### Requirements

* PHP 5.5+
* [Composer](https://getcomposer.org/) 
* [Bower](http://bower.io/) 
* [Grunt](http://gruntjs.com/) 
* [Node](https://nodejs.org)

### Composer

The project uses Composer for PHP dependencies. For the initial build run:

    composer install

### Bower

The project uses Bower for JavaScript dependencies. For the initial build run:

    bower install

### Gulp

This project uses Grunt to build the Sass and JavaScript. For the initial build run:

    # Install project dependencies
    sudo npm install

    # Build the site for the first time
    gulp

### Initialise project environment

This will setup any required empty folders.

```
#!bash
chmod a+x scripts/init.sh
./scripts/init.sh
```