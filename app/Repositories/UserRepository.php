<?php

namespace App\Repositories;

use App\Entity\Users;

/* Repositories is used to write the queries
 * @author: jaideep singh 
 */
class UserRepository
{
    protected $userModel;

    public function __construct(Users $userModel)
    {
    	$this->userModel = $userModel;
    }




}
