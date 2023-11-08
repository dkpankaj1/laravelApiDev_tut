<?php

namespace App\Filters\V1;
use App\Filters\ApiFilters;



class CustomerFilters extends ApiFilters
{
    protected $safeParems = [
        "id"        => ["eq"],
        "name"      => ["eq", "like"],
        'type'      => ["eq"],
        'email'     => ["eq", "like"],
        'city'      => ["eq", "like"],
        'state'     => ["eq", "like"],
        'postalCode' => ['eq', 'lt', 'gt', 'lte', 'gte'],
    ];
    protected $columnMap = [
        "postalCode" => "postal_code"
    ];
    
}

?>