<?php
$aliases['mtcv.dev'] = array(
'uri' => 'dev-mtcv.pantheonsite.io',
'db-url' => 'mysql://pantheon:2f68996f2f4e49be9776fec9fba3d491@dbserver.dev.ad79477c-5d06-4234-b6b8-582ebeee0e5c.drush.in:22188/pantheon',
'db-allows-remote' => TRUE,
'remote-host' => 'appserver.dev.ad79477c-5d06-4234-b6b8-582ebeee0e5c.drush.in',
'remote-user' => 'dev.ad79477c-5d06-4234-b6b8-582ebeee0e5c',
'ssh-options' => '-p 2222 -o "AddressFamily inet"',
'path-aliases' => array(
'%files' => 'files',
'%drush-script' => 'drush',
),
);
