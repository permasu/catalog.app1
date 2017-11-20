<?php

namespace App\Http\Controllers;

use App\Models\Company;

class CompanyController extends Controller
{
    public function view( $id ) {
        $company = Company::whereId($id)->get()->first();
        return view('page.company', ['company' => $company]);
    }
}