<?php

namespace App\Services;

use App\Repositories\UserRepository;

/* Service is used to write the business logic
 * @author: jaideep singh 
 */
class UserService
{
    protected $userRepository;

    public function __construct(UserRepository $userRepository)
    {	
    	$this->userRepository = $userRepository;
    }

    public function getUserData()
    {	
    	return 1;
    }
}
