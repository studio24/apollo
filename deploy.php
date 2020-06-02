<?php

namespace Deployer;

require 'recipe/common.php';

// Project name
set('application', 'Apollo v2');

// Custom
set('keep_releases', 10);

// Hosts
host('production')
    ->stage('production')
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
    'deploy:build_prod',
    'deploy:build_stage',
    'deploy:prepare',
    'deploy:lock',
    'deploy:release',
    'deploy:copy_code',
    'deploy:clear_paths',
    'deploy:symlink',
    'deploy:unlock',
    'cleanup',
    'success'
]);

task('deploy:build_prod', function () {
    writeln("<info>Building site assets</info>");
    run('npm run build');
})->local()->onStage('production');

task('deploy:build_stage', function () {
    writeln("<info>Building site assets</info>");
    run('npm run build');
})->local()->onStage('staging');

task('deploy:copy_code', function () {
    writeln("<info>Uploading files to server</info>");
    upload(__DIR__  . '/web', '{{release_path}}');
});

// [Optional] If deploy fails automatically unlock.
after('deploy:failed', 'deploy:unlock');

