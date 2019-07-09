#!/usr/local/cpanel/3rdparty/bin/perl

use lib '/usr/local/cpanel';
use Cpanel::DataStore;

my $app = {
    url         => '/3rdparty/exampleWebMailApp/index.php',
    displayname => 'Example WebMail Application',
    icon        => '/3rdparty/exampleWebMailApp/icon.svg',
};

Cpanel::DataStore::store_ref(
    '/var/cpanel/webmail/webmail_exampleWebMailApp.yaml',
    $app
) || die("Failed to write webmail registration file, stopping here.");

print "Successfully wrote webmail registration file.\n";

0;
