<?php


namespace App\Voyager\Http\Controllers;

use Illuminate\Http\Request;

class PostReviewController extends VoyagerBaseController
{
    public function index(Request $request)
    {
        return parent::index($request);
    }
}
