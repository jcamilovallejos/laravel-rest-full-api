<?php

namespace App\Filters\V1;
use \Illuminate\Http\Request;
use App\Filters\ApiFilter;
class InvoicesFilter extends ApiFilter{
    protected $safeParams = [
        'customer_id' => ['eq'],
        'amount' => ['eq', 'gt', 'lt'],
        'status' => ['eq', 'ne'],
        'billed_date' => ['eq'],
        'paid_date' => ['eq']
    ];

    protected $columnMap = [
        'customerId' => 'customer_id',
        'amount' => 'amount',
        'status' => 'status',
        'billedDate' => 'billed_date',
        'paidDate' => 'paid_date'
    ];

    public function transform(Request $request)
    {
        return parent::transform($request);
    }
}
