<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Response;
use Illuminate\Http\RedirectResponse;

use DB;

class AboutController extends Controller
{
    //

    public function show() {
    	
    	// return 'hello';

    	if(view()->exists('default.about')) {


    		// $articles = DB::select('SELECT * FROM `articles` WHERE `id` = :id', ['id' => 11]);

    		// DB::insert('INSERT INTO `articles`(`name`, `text`) VALUES(?, ?)', ['test 1', 'TEXT']);

    		// $result = DB::connection()->getPdo()->lastInsertId();	//Получить идентификатор последнего добавленого элемента

    		// $result = DB::update('UPDATE `articles` SET `name` = ? WHERE `id` =  ?', ["TEST 2", 13]);

    		// $result = DB::delete('DELETE FROM `articles` WHERE `id` = ?', [13]);

    		// DB::statement('DROP table `articles`');

    		$articles = DB::select('SELECT * FROM `articles` WHERE `id` >= ?', [8]);
    		
    		// dump($result);
    		dump($articles);

    		return view('default.about')->withTitle('About');

    	}

    	abort(404);
    }
}
