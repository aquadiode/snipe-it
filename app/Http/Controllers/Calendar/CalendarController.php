<?php

namespace App\Http\Controllers\Events;

use App\Models\User;
use Auth;
use Carbon\Carbon;

class AssetsController extends Controller 
{
//returns a view with event calendar
public function index()
{
    $this->authorize('view', License::class);

    return view('licenses/index');
}

}