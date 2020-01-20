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


Route::get('/getfabrics', function () {
	$getfabrics = App\Rawmaterial::get();
    return response()->json([
	    'getfabrics' => $getfabrics,
	]);
});

Route::get('/getfolders', function () {
	$path = public_path('upload');
	$folders = array_map('basename', File::directories($path));
    return response()->json([
	    'folders' => $folders,
	]);
});


Route::post('/formSubmit', function (Request $request) {


	// $fileName = time().'.'.$request->file->getClientOriginalExtension();

	// Zipper::make($fileName)->extractTo(public_path('upload/'.$request->name));
	 Zipper::make($request->file)->extractTo(public_path('upload/'.$request->name));

    // $request->file->move(public_path('upload'), $fileName);

    return response()->json(['success'=>'You have successfully upload file.']);

});




Route::get('/jacketstyles', function () {
	$jacketstyles = Productstyle::with('styleoptions')->where('type','jacket')->where('cus_type','style')->get();
    return response()->json([
	    'jacketstyles' => $jacketstyles,
	]);
});


// Route::get('/jacketfabrics', function () {
// 	$jacketfabrics = Productstyle::with('styleoptions')->where('type','jacket')->where('cus_type','fabric')->get();
//     return response()->json([
// 	    'jacketfabrics' => $jacketfabrics,
// 	]);
// });

Route::get('/jacketaccents', function () {
	$jacketaccents = Productstyle::with('styleoptions')->where('type','jacket')->where('cus_type','accent')->get();
    return response()->json([
	    'jacketaccents' => $jacketaccents,
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