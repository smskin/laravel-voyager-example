<?php
/** @noinspection PhpUnused */

namespace App\Http\Controllers;

use App\DBContext\Page;

class StaticPageController extends Controller
{
    public function show(string $slug){
        $page = Page::whereSlug($slug)->first([
            'title',
            'body'
        ]);
        if (!$page){
            abort(404);
        }

        return view('static_page',[
            'title'=>$page->title,
            'body'=>$page->body
        ]);
    }
}
