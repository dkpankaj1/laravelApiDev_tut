<?php

namespace App\Http\Controllers\API\V1;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreCustomerRequest;
use App\Http\Requests\UpdateCustomerRequest;
use App\Http\Resources\V1\CustomerCollection;
use App\Http\Resources\V1\CustomerResource;
use App\Models\Customer;
use Illuminate\Http\Request;
use App\Filters\V1\CustomerFilters;

class CustomerController extends Controller
{
    
    public function index(Request $request)
    {
        $customerFilters = Customer::query();

        $filter = new CustomerFilters();
        
        $queryFilter = $filter->transform($request);

        if(count($queryFilter) == 0){
            return new CustomerCollection(Customer::paginate());
        }

        return new CustomerCollection(Customer::where($queryFilter)->paginate()->appends($request->query()));
    }

    public function create()
    {
        //
    }
   
    public function store(StoreCustomerRequest $request)
    {
        return new CustomerResource(Customer::create($request->all()));
    }

    public function show(Customer $customer)
    {
        return new CustomerResource($customer);
    }

    public function edit(Customer $customer)
    {
        //
    }

    public function update(UpdateCustomerRequest $request, Customer $customer)
    {
        //
    }

    public function destroy(Customer $customer)
    {
        //
    }
}
