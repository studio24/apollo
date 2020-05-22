# Apollo

This is a front-end (HTML, CSS & Javascript) framework to help build websites with performance and accessibility as first-class passengers.

## Preview URLs

* Production - https://apollo.studio24.net/ 
* Staging - https://apollo.studio24.dev/
* Development - http://localhost:8000/

Please note Apollo v1 can be viewed at http://apollo.s24.net/

## How do I get set up?

### Installation

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

### Deploy to Staging

````bash
TODO
````

### Deploy to Production

````bash
TODO
````

## Contributions

### To report an issue

Open a ticket in the [Issues section of this repository](https://bitbucket.org/studio24/apollo/issues?status=new&status=open). 

### To submit a bug fix or an enhancement

I'm so excited that you want to contribute to Apollo. Before you do though, please take a moment to consider how you 
would answer the following questions. A single 'Yes,' already tells us we would want your addition.

1. Does this solution already exist? (drop-down, select menu, tooltip, video player, etc.)
2. Could others use it? (Yes, no, maybe)
3. Have you already seen a working solution for this? (It works well, it needs improvement)
4. Does it solve the problem? (Yes, no, partially)

Create a new branch (one per fix/improvement) and apply your fix. When you are done, submit a pull request for review.

## Authors

* Nicola Saunders, Project Lead
* Carlos Eriksson, Lead on Apollo v1

## License

The MIT License (MIT). Please see [License File](LICENSE) for more information.

[LICENSE]: ./LICENSE
[license-badge]: https://img.shields.io/badge/license-MIT-blue.svg

