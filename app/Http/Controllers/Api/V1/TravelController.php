<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Models\Travel;

class TravelController extends Controller
{
    public function index()
    {
        return Travel::where('is_public', true)->get();
    }
}
