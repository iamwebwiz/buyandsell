<?php

namespace App\Http\Controllers;

use App\FreeAds;
use App\Http\Requests\UploadRequest;
use App\UserAds;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class AdsController extends Controller {

	public function SaveAd(UploadRequest $request)
    {

        if ($request->hasFile('ad_image'))  //check if file is an image
        {

            $ad_image = $request->file('ad_image'); //then fetch the image
            $imagename = $request['ad_poster'].time().'.'.$request->ad_image->getClientOriginalExtension(); //append current time and extension
            $ad_image = $request->ad_image->move(public_path('Adimages'), $imagename);

        }else{
            return 'No file selected';
        }



		$title = $request['ad_title'];
		$firstname = $request['ad_poster'];
		$price = $request['ad_price'];
        $longdesc = $request['ad_longdesc'];
		$shortdesc = $request['ad_shortdesc'];
		$location = $request['ad_location'];
		$phone = $request['ad_phone'];

		$newFreeAd = new FreeAds();

		$newFreeAd->title = $title;
		$newFreeAd->firstname = $firstname;
		$newFreeAd->price = $price;
		//$newFreeAd->image_name = $filename;
		$newFreeAd->image = $ad_image;
		$newFreeAd->longdesc = $longdesc;
		$newFreeAd->shortdesc = $shortdesc;
		$newFreeAd->location = $location;
		$newFreeAd->phone = $phone;

	if ($newFreeAd->save()){
			// Successfully posted advert
			return view('guest', compact('newFreeAd'));
		}
		else {
			// Unable to post advert
			return redirect()->back();
		}

	}

	public function getAdImage($filename){
		$image = Storage::disk('local')->get($filename);
		return new Response($image, 200);
	}

	public function createAd(Request $request){
		$advert = new UserAds;
		// store values in db

		$request->user()->ads()->save($advert);
		return redirect()->route('dashboard');
	}
}