# Apollo

This is a static (HTML, CSS and Javascript) framework with performance and accessibility as first-class passenger.

_Please note the new version of Apollo is being actively developed in the [apollo-v2](https://github.com/studio24/apollo/tree/apollo-v2) branch and is planned for completion in early 2020._

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

```bash
git clone git@github.com:studio24/apollo.git
```

If you have Apollo already, to update the origin repo to GitHub:

```bash
git remote set-url origin git@github.com:studio24/apollo.git
```

### Installation

```bash
cd apollo/web

# Switch your version of Node using NVM
nvm use v10.2.1

# Install dependencies
npm install
npm run build
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

I'm so excited that you want to contribute to Apollo. Before you do though, please take a moment to consider how you would answer the following questions. A single 'Yes,' already tells us we would want your addition.

1. Does this solution already exist? (drop-down, select menu, tooltip, video player, etc.)
2. Could others use it? (Yes, no, maybe)
3. Have you already seen a working solution for this? (It works well, it needs improvement)
4. Does it solve the problem? (Yes, no, partially)

Create a new branch (one per fix/improvement) and apply your fix. When you are done, submit a pull request to the repository maintainer (Carlos) for review.

## Who do I talk to?

- Carlos Eriksson - [carlos@studio24.net](@carlos@studio24.net) - Slack @carlos
