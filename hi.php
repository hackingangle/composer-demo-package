<?php require __DIR__. '/vendor/autoload.php';

use Hackingangle\Message\User as User;
use Ha\Message\User as Psr4User;
use Ha\FromEarth\User as ClassmapUser;
use Classmap\User as ClassRootUser;


$objUser = new User();
$objUser->hi();

$objUserPsr = new Psr4User();
$objUserPsr->hi();

$objUserFromClassMap = new ClassmapUser();
$objUserFromClassMap->hi();

$objUserFromClassMapRoot = new ClassRootUser();
$objUserFromClassMapRoot->hi();

Helper::hi();