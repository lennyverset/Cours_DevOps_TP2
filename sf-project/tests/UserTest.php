<?php

use App\Entity\User;
use PHPUnit\Framework\TestCase;

class UserTest extends TestCase
{

	public function testSetFirstName_validValue_successful() 
	{
    		$user = new User;
    		$value = 'User';
    		$user->setFirstName($value);
    		$this->assertEquals($value, $user->getFirstName());
	}
}
?>
