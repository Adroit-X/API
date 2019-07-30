<?php
namespace App\Services\Facade;

use \Illuminate\Support\Facades\Facade;
/**
 * Facade for user service
 */
class ProductFacade extends Facade
{
    /**
     * Returning service name
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'App\Services\ProductService';
    }
}