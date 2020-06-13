# Apollo

Apollo is our standard approach to front-end development (HTML, CSS & Javascript) at Studio 24. It contains a small, focussed starting point for CSS projects along with a set of common patterns. 

Our aim with Apollo is to use vanilla HTML and CSS, performance and accessibility are first-class passengers. This is primarily an internal project at Studio 24, though it is open source so anyone is welcome to use or learn from this project.

## Preview URLs

* Production - https://apollo.studio24.net/ 
* Staging - https://apollo.studio24.dev/

Please note Apollo v1 can be viewed at http://apollo.s24.net/

## How do I get set up?

### Installation
From within the project root

```bash
# Switch your version of Node to the correct version for this project (see .nvmrc)
nvm use

# Install dependencies
npm install
npm run build
```

The simplest way to [view Apollo locally](http://localhost:8000/) is via the PHP built-in server:

```
php -S localhost:8000 -t web
```

### Configuration

#### NPM config file

If needed, update `package.json` to manage the packages and NPM scripts required to build the site's assets.

### Build

To re-build the assets once

```bash
npm run build
```

To watch for changes

```bash
npm run watch
```

## Dependencies

- [NPM](https://www.npmjs.com/) - Package manager for Javascript
- [NVM](https://github.com/creationix/nvm) - Manage multiple active versions of node.js

## Deployment instructions

Please note that files are currently deployed from your local file system, and not from Git. So please ensure you are on
the right branch before you deploy and your code is up-to-date. 

### Deploy to Production

````bash
dep deploy production
````

### Deploy to Staging

````bash
dep deploy staging
````

## Creating a release

We use [semantic versioning](https://semver.org/) for releases. For example:

* Major release: v2.0
* Minor release: v2.1
* Beta release: v2.0-beta.1

To create a new release:

* Go to [releases](https://github.com/studio24/apollo/releases) > Draft a new release
* Set the tag & title to the release name (see above)
* Make sure you choose the right branch
* Publish release

This then creates a set of downloadable links for the package on the releases page.

## Contributions

### To report an issue

* [Report an issue](https://github.com/studio24/apollo/issues/new?labels=bug)
* [Suggest an enhancement](https://github.com/studio24/apollo/issues/new?labels=enhancement) 

## Authors

* Nicola Saunders - _Project Lead_ - [Studio 24](https://www.studio24.net/)
* Carlos Eriksson - [Studio 24](https://www.studio24.net/)

## License

The MIT License (MIT). Please see [License File](LICENSE) for more information.

[LICENSE]: ./LICENSE
[license-badge]: https://img.shields.io/badge/license-MIT-blue.svg

## Acknowledgments

* Inspired by [Springer Nature Front End Playbook](https://github.com/springernature/frontend-playbook) and [Every Layout](https://every-layout.dev/)
