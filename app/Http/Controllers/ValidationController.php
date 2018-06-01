<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StoreBlogPost;

class ValidationController extends Controller
{

    public function formRequests(Request $request)
    {
        
        return view('validation.form-requests');
    }

    public function formRequestsInjected(StoreBlogPost $request)
    {
        
        return view('validation.form-requests-injected');
        
    }
    
    public function formRequestsManual(Request $request)
    {
        
        /* @var $validator \Illuminate\Validation\Validator */
        $validator = validator()->make($request->all(), (new StoreBlogPost)->rules());
        
        //if it is not valid it returns to formRequests
        $validator->validate();
        
        return view('validation.form-requests-injected');
        
    }

}
