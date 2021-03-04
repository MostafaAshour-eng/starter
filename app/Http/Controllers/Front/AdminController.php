<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\VerifiesEmails;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except('');
    }

    public  function showAdminName(): string
   {
       return 'Mostafa Ashour';
   }
}
