<?php

namespace Deployer;

require 'recipe/common.php';

// Project name
set('application', 'Apollo v2');

// Project repository
set('repository', 'git@github.com:studio24/apollo');

// [Optional] Allocate tty for git clone. Default value is false.
set('git_tty', true);

// Custom
set('keep_releases', 10);

// Hosts

host('production')
    ->hostname('63.34.69.8')
    ->user('deploy')
    ->set('deploy_path','/data/var/www/vhosts/apollo-v2/production');

host('staging')
    ->stage('staging')
    ->hostname('63.34.69.8')
    ->user('deploy')
    ->set('deploy_path','/data/var/www/vhosts/apollo-v2/staging');

// Tasks

desc('Deploy Apollo v2');
task('deploy', [
    'deploy:info',
    'deploy:prepare',
    'deploy:lock',
    'deploy:release',
    'deploy:update_code',
    'deploy:composer:nvm-use',
    'deploy:composer:npm-install',
    'deploy:composer:npm-build',
    'deploy:clear_paths',
    'deploy:symlink',
    'deploy:unlock',
    'cleanup',
    'success'
]);

task('deploy:nvm-use',function(){

    cd('{{release_path}}');
    run('/usr/local/bin/nvm use ');

});

task('deploy:npm-install',function(){

    cd('{{release_path}}');
    run('/usr/local/bin/npm install ');

});

task('deploy:npm-build',function(){

    cd('{{release_path}}');
    run('/usr/local/bin/npm build ');

});

// [Optional] If deploy fails automatically unlock.
after('deploy:failed', 'deploy:unlock');


