<?php

namespace App\Filters\V1;
use \Illuminate\Http\Request;
use App\Filters\ApiFilter;
class CustomersFilter extends ApiFilter{
    protected $safeParams = [
        'name' => ['eq'],
        'type' => ['eq'],
        'email' => ['eq'],
        'address' => ['eq'],
        'city' => ['eq'],
        'state' => ['eq'],
        'postalCode' => ['eq', 'gt', 'lt']
    ];

    protected $columnMap = [
        'name' => 'name',
        'type' => 'type',
        'email' => 'email',
        'address' => 'address',
        'city' => 'city',
        'state' => 'state',
        'postalCode' => 'postal_code'
    ];

    public function transform(Request $request)
    {
        return parent::transform($request);
    }
}
