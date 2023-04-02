<?php

require_once 'vendor/autoload.php';

use App\Customer;
use App\Employee;
use App\User;

/* 
$user = new User();
var_dump($user);

try {
  $user->setName('bob');
  echo $user->getName();
} catch (InvalidArgumentException $e) {
  echo "Une erreur est survenue : " . $e->getMessage();
}
var_dump($user); 
*/

$client = new Customer();
$client
  ->setCustomerNumber('123123123')
  ->setName('Olivier');
var_dump($client);
echo $client->getInformations();

$emp = new Employee();
$emp
  ->setEmpNumber('9876543')
  ->setName('Michael');
var_dump($emp);
echo $emp->getInformations();

/**
 * Undocumented function
 *
 * @param User[] $users
 * @return void
 */
function displayUsersInfo(array $users): void
{
  foreach ($users as $user) {
    echo $user->getInformations() . '<br>';
  }
}

displayUsersInfo([$client, $emp]);
