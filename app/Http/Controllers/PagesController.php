<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class PagesController extends Controller
{
    //
    public function getIndex() {
    	// echo __METHOD__;
    	echo route('page.index');
    }

    public function getCreate() {
    	echo __METHOD__;
    }

    public function postIndex() {
    	echo __METHOD__;
    }
}
