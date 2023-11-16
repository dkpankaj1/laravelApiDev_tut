<?php

namespace App\Http\Controllers\API\V1;

use App\Filters\V1\InvoiceFilters;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreInvoiceRequest;
use App\Http\Requests\UpdateInvoiceRequest;
use App\Http\Resources\V1\InvoiceCollection;
use App\Http\Resources\V1\InvoiceResource;
use App\Models\Invoice;
use Illuminate\Http\Request;

class InvoiceController extends Controller
{

    public function index(Request $request)
    {

        $invoiceFilters = Invoice::query();

        $filter = new InvoiceFilters();

        $queryFilter = $filter->transform($request);

        if (count($queryFilter) == 0) {
            return new InvoiceCollection(Invoice::paginate());
        }

        return new InvoiceCollection(Invoice::where($queryFilter)->paginate()->appends($request->query()));

    }

    public function create()
    {
        //
    }

    public function store(StoreInvoiceRequest $request)
    {
        //
    }

    public function show(Invoice $invoice)
    {
        return new InvoiceResource($invoice);
    }

    public function edit(Invoice $invoice)
    {
        //
    }

    public function update(UpdateInvoiceRequest $request, Invoice $invoice)
    {
        //
    }

    public function destroy(Invoice $invoice)
    {
        //
    }
}
