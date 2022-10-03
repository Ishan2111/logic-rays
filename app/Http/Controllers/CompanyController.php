<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Country;
use DB;

class CompanyController extends Controller
{
    public function show()
    {
        $country = 'India';
        $data = Company::with('User')
            ->with('country')
            ->whereRelation('Country', 'name', 'like', '%' . $country . '%')
            ->get()
            ->toArray();
        dd($data);
    }
}
