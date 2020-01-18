<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Productstyle;
use App\Styleoption;

/*
|--------------------------------------------------------------------------
| Tool API Routes
|--------------------------------------------------------------------------
|
| Here is where you may register API routes for your tool. These routes
| are loaded by the ServiceProvider of your tool. They are protected
| by your tool's "Authorize" middleware by default. Now, go build!
|
*/

// Route::get('/endpoint', function (Request $request) {
//     //
// });

Route::get('/getstyles', function () {
	$styles = Productstyle::with('styleoptions')->get();
    return response()->json([
	    'styles' => $styles,
	]);
});

Route::get('/getstylebyid/{id}/{identifier}', function ($id,$identifier) {
	if ($identifier == "style") {
		$style = Productstyle::find($id);
	}
	if ($identifier == "option") {
		$style = Styleoption::find($id);
	}
    return response()->json([
	    'style' => $style,
	]);
});

Route::put('/updatestyle', function (Request $request) {
	if ($request->identifier == "style") {


		$data = $request->stylebyid;

		$style = Productstyle::find($data['id']);
		$style->name = $data['name'];
		$style->title = $data['title'];

		if($request->image)
       	{

        	$filename = str_random(40); 

        	$imagePath = '/image/' . $filename;

        	Image::make($request->image)->save(public_path($imagePath));

        	$style->image = $filename;
        }
       	

		$style->save();

		return "Updated Successfully";
	}
	if ($request->identifier == "option") {

		$data = $request->stylebyid;
		$style = Styleoption::find($data['id']);
		$style->name = $data['name'];
		$style->title = $data['title'];

		if($request->image)
       	{

        	$filename = str_random(40); 

        	$imagePath = '/image/' . $filename;

        	Image::make($request->image)->save(public_path($imagePath));

        	$style->image = $filename;
        }

		$style->save();

		return "Updated Successfully";
	}

	return "Something Wrong";

});