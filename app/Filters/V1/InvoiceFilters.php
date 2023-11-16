<?php

namespace App\Filters\V1;
use App\Filters\ApiFilters;



class InvoiceFilters extends ApiFilters
{
    protected $safeParems = [
        "id"            => ["eq"],
        "customer"      => ["eq"],
        'amount'        => ['eq', 'lt', 'gt', 'lte', 'gte'],
        'status'        => ["eq"],
        'billedDated'   => ['eq', 'lt', 'gt', 'lte', 'gte'],
        'paidDated'     => ['eq', 'lt', 'gt', 'lte', 'gte'],
    ];
    protected $columnMap = [
        "customer"      =>"customer_id",
        "billedDated"   => "billed_dated",
        "paidDated"     => "paid_dated"
    ];
    
}

?>