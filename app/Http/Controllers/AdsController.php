<?php

namespace App\Http\Controllers;

use App\FreeAds;
use App\UserAds;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class AdsController extends Controller {

	public function postFreeAd(Request $request){
		$this->validate($request, [
			'ad_poster' => 'required|min:3|max:100',
			'ad_title' => 'required',
			'ad_price' => 'required',
			'ad_shortdesc' => 'max:100',
			'ad_location' => 'required'
		]);

		$ad_image = $request->file('ad_image');
		$filename = $request['ad_poster'] . '-' . $request['ad_location'] . '.jpg';
		if ($ad_image){
			Storage::disk('local')->put($filename, File::get($ad_image));
		}

		$title = $request['ad_title'];
		$firstname = $request['ad_poster'];
		$price = $request['ad_price'];
		$image_name = $filename;
		$image = $ad_image;
		$longdesc = $request['ad_longdesc'];
		$shortdesc = $request['ad_shortdesc'];
		$location = $request['ad_location'];
		$phone = $request['ad_phone'];

		$newFreeAd = new FreeAds();

		$newFreeAd->title = $title;
		$newFreeAd->firstname = $firstname;
		$newFreeAd->price = $price;
		$newFreeAd->image_name = $filename;
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