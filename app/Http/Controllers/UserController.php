<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Services\Facade\UserFacade;

/* Controller is used to process request and generate response only
 * @author: jaideep singh 
 */
class UserController extends Controller
{
   	public function index()
   	{
 		UserFacade::getUserData();

 		die('complete flow');
   	}
}
