<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Http\Request;

class companyController extends Controller{

    public function index(){
        $company = Company::all();  
        return view('admin.index', compact('company'));
    }
    
    public function create(){
        
        return view('admin.company');
    }

    public function save(Request $request){
        Company::create($request->all());
        return redirect()->route('admin.index');
    }
}
