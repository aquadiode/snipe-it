<?php

namespace App\Http\Controllers\Api;

use App\Helpers\Helper;
use App\Http\Controllers\Controller;
use App\Http\Transformers\CalendarTransformer;
use App\Models\Company;
use App\Models\Calendar;
use Illuminate\Http\Request;
use App\Events\CheckoutableCheckedIn;
use App\Events\ComponentCheckedIn;
use App\Models\Asset;

class CalendarController extends Controller 
{

public function index(Request $request)
{
    $this->authorize('index', Consumable::class);

}

}