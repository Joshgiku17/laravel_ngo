<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\donors;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Routing\Controller as BaseController;


class DonorsController extends Controller
{
    public function store()
    {
        donors::create(request(['names','address','phone_num','work','date']));
    }
}
