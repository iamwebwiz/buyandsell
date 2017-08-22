<?php

namespace App\Http\Controllers;

use App\User;
use App\UserAds;
use App\FreeAds;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Requests\UploadRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class AdsController extends Controller {

	public function SaveAd(UploadRequest $request)
    {

        if ($request->hasFile('ad_image'))  //check if file is an image
        {


           $adimage = $request->file('ad_image');


            $currentUser  = \Auth::user();
            $image     = $adimage;
            $filename     = 'ad.' . $image->getClientOriginalExtension();
            $save_path    = storage_path() . '/users/id/' . $currentUser->id . '/ad';
            $public_path  = '/images/' . $currentUser->id . '/ad/' . $filename;

            File::makeDirectory($save_path, $mode = 0755, true, true);
            $result = Storage::disk('public')->put($save_path, $filename);//save to the public directory



        } else {
            return 'No file selected';
        }

         $title = $request['ad_title'];
         $firstname = $currentUser->name;
          $price = $request['ad_price'];
         $longdesc = $request['ad_longdesc'];
          $shortdesc = $request['ad_shortdesc'];
         $location = $request['ad_location'];
         $phone = $request['ad_phone'];

         $newFreeAd = new FreeAds();

         $newFreeAd->title = $title;
         $newFreeAd->firstname = $firstname;
         $newFreeAd->price = $price;
        $newFreeAd->image = $public_path;  //the public path to the image
         $newFreeAd->longdesc = $longdesc;
        $newFreeAd->shortdesc = $shortdesc;
          $newFreeAd->location = $location;
         $newFreeAd->phone = $phone;

         if ($newFreeAd->save()){
         // Successfully posted advert
         echo "Your Ad would would be live"; // return dashboard with flash message
         }
         else {
          // Unable to post advert
         //return redirect()->back();
             echo "There was a problem posting your ad, pls try again in a few mins";
         }

    }


	public function getAdImage($filename){
		$image = Storage::disk('local')->get($filename);
		return new Response($image, 200);
	}

	public function postUserAd(Request $request){
		$user = Auth::user();
		$this->validate($request, [
			'ad_title' => 'required',
			'ad_shortdesc' => 'max:100',
			'ad_longdesc' => 'required',
			'ad_image' => 'image|mimes:jpg,png,jpeg,gif,svg,bmp|max:2048'
		]);

		if ($request->hasFile('ad_image'))  //check if file is an image
        {

            $ad_image = $request->file('ad_image'); //then fetch the image

            //append current time and extension
            $imagename = $user->username.time().'.'.$request->ad_image->getClientOriginalExtension();
            $ad_image = $request->ad_image->move(public_path('Adimages'), $imagename);
        }
        else {
            return 'No file selected';
        }

		$title = $request['ad_title'];
		$price = $request['ad_price'];
		$longdesc = $request['ad_longdesc'];
		// $image_name = $imagename;
		$image = $imagename;
		$shortdesc = $request['ad_shortdesc'];
		$location = $request['ad_location'];
		$phone = $request['ad_phone'];

		$advert = new UserAds;
		// store values in db
		$advert->title = $title;
		$advert->price = $price;
		// $advert->image_name = $image_name;
		$advert->image = $image;
		$advert->longdesc = $longdesc;
		$advert->shortdesc = $shortdesc;
		$advert->location = $location;
		$advert->phone = $phone;

		if ($request->user()->ads()->save($advert)){
			return redirect()->route('postedads')->with('message', 'Advert posted successfully!');
		}

		return redirect()->back()->with('error', 'An error occured while posting advert, please try again!');	
	}

	public function showUserAdverts(){
		$user = Auth::user();
		$adverts = $user->ads;
		// $posts = Post::orderBy('created_at', 'desc')->get();
		return view('user.postedads')->with(['user' => $user, 'adverts' => $adverts]);
	}

	public function getAllAdverts(){
		$ads = UserAds::orderBy('created_at', 'desc')->get();
		return view('home', ['ads' => $ads]);
	}

	public function deleteAdvert($advert_id){
		$advert = UserAds::where('id', $advert_id)->first();
		$advert->delete();
		return redirect()->back()->with('message', 'Successfully deleted advert');
	}

	public function editAdvert($advert_id){
		$user = Auth::user();
		$advert = UserAds::find($advert_id);
		return view('user.edit-advert')->with(['user' => $user, 'advert' => $advert]);
	}

	public function postEditAdvert(Request $request, $advert_id){
		$user = Auth::user();
		$this->validate($request, [
			'ad_title' => 'required',
			'ad_location' => 'required',
			'ad_price' => 'required'
		]);

		$advert = UserAds::find($advert_id);

		$advert->title = $request['ad_title'];
		$advert->location = $request['ad_location'];
		$advert->price = $request['ad_price'];
		$advert->phone = $request['ad_phone'];
		// update
		if ($advert->update()){
			return redirect()->route('postedads')->with('message', 'Advert details updated successfully!');
		}
		return redirect()->back();
	}
}
