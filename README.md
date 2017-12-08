# Apollo

This is a static (HTML, CSS and Javascript) framework with performance and accessibility as first-class passenger.

## What is this repository for?

Apollo is used in the Studio24 Wordpress starter theme with the same name. It's part of the [Wordpress installer script](https://bitbucket.org/studio24/wordpress-installation-script). The following file(s) and folder(s) should be deleted after installation. They are used for this repository itself and are not needed when used in the theme.

- `/delete-this-folder-in-wp`
- `apollo.php`

## Preview URLs

* Live - http://apollo.s24.net/
* Staging - http://apollo-staging.s24.net
* Development - http://local.apollo.s24.net

## How do I get set up?

### Clone the repository

````bash
cd ~/Sites
git clone git@bitbucket.org:studio24/apollo.git
cd apollo
# Switch your version of Node using NVM
nvm use v6.9.5
# Install dependencies
npm install
````

### Configuration

#### YAML config file

Update the `config.yml` to change the location for where the production files are saved.

#### Gulp config file

Update the `gulpfile.babel.js` to change the URL of your local server. This allows [Browsersync](https://www.browsersync.io/) to preview and reload the site as you change it.

#### NPM config file

Update the `package.json` to manage the packages required to build the site's assets.

#### Webpack config file

Update the `webpack.config.js` to change which Javascript modules are bundled for use in a browser. Default bundles jQuery.

## Dependencies

- [NPM](https://www.npmjs.com/) - Package manager for Javascript
- [NVM](https://github.com/creationix/nvm) - Manage multiple active versions of node.js
- [Gulp](https://gulpjs.com/) - Task runner

## Deployment instructions

### Deploying to Staging

````bash
ssh studio24@goldeneye.studio24.net deploy studio24/apollo staging master nodb
````

### Deploying to Live

````bash
ssh studio24@goldeneye.studio24.net deploy studio24/apollo live master nodb
````

## Contribution guidelines

### To report an issue

Open a ticket in the [Issues section of this repository](https://bitbucket.org/studio24/apollo/issues?status=new&status=open). Assign it to the repository maintainer (Carlos) for discussion.

### To submit a bug fix or an enhancement

Create a new branch (one per fix/improvement) and apply your fix. When you are done, submit a pull request to the repository maintainer (Carlos) for review.

## Who do I talk to?

- Carlos Eriksson - [carlos@studio24.net](@carlos@studio24.net) - Slack @carlos