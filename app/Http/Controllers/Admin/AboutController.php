<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Response;
use Illuminate\Http\RedirectResponse;

class AboutController extends Controller
{
    //

    public function show() {
    	
    	// return 'hello';

    	if(view()->exists('default.about')) {

    		$view = view('default.about')->withTitle('About')->render();

    		/*return (new Response($view))->header('Content-Type', 'newType')
    									->header('Header-One', 'Header One');*/

    		/*return response($view)->header('Content-Type', 'newType')
    									->header('Header-One', 'Header One');*/

    		// return response()->view('default.about', ['title'=> 'About']);
    		// return response()->download('robots.txt', 'mytext.txt');

    		// return view('default.about')->withTitle('About');

    		/*return response($view)->withHeaders([
    			'Header-One' => 'hello',
    			'Header-Two' => 'Download Files'
    		]);*/

			// return redirect()->action('Admin\ContactController@show');

			// return RedirectResponse::create('/articles');

			return response()->myRes($view);

    	}

    	abort(404);
    }
}
