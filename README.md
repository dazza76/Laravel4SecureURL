
SecureURL Module in Laravel 4
Application specific modules in Laravel 4 can be enabled by adding the following to your "composer.json" file:

"require": {
    "dazza76/Laravel4SecureURL": "dev-master"
}
And by adding a new provider to your providers list in "app/config/app.php":

'providers' => array(
    'Dazza76\Laravel4SecureURL\Laravel4SecureURLServiceProvider',
);
