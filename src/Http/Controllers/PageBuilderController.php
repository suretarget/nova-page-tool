<?php
namespace DigitalCloud\PageTool\Http\Controllers;

use DigitalCloud\PageTool\Models\Page;

class PageBuilderController extends Controller{

    public function index() {
        return view('page-tool::page-builder-main');
    }

    public function page($id) {
        $page = Page::find($id);
        return view('page-tool::page-builder', ['page' => $page]);
    }
}
