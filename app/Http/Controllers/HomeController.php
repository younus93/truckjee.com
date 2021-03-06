<?php

namespace App\Http\Controllers;

use App\ContactUs;
use App\Http\Requests\Request;
use App\Http\Requests\WebsiteLoadRequest;
use App\Jobs\ChangeLocale;
use App\Models\WebsiteLoad;
use Carbon\Carbon;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;

class HomeController extends Controller
{

	/**
	 * Display the home page.
	 *
	 * @return Response
	 */
	public function index()
	{
		return view('front.index');
	}

	/**
	 * Change language.
	 *
	 * @param  App\Jobs\ChangeLocaleCommand $changeLocale
	 * @param  String $lang
	 * @return Response
	 */
	public function language( $lang,
		ChangeLocale $changeLocale)
	{		
		$lang = in_array($lang, config('app.languages')) ? $lang : config('app.fallback_locale');
		$changeLocale->lang = $lang;
		$this->dispatch($changeLocale);

		return redirect()->back();
	}

	public function submitWebsiteLoad(\Illuminate\Http\Request $request)
	{

		$load = new WebsiteLoad($request->except('date_required'));

		$load->date_required = Carbon::createFromFormat('d/m/Y',$request->get('date_required'));
		$load->save();

		$request->session()->flash('website-load','Success! We will contact you shortly with truck details');
		return redirect()->back();
	}

	public function contactSubmit(\Illuminate\Http\Request $request)
	{
		try{
			ContactUs::create($request->all());
			return response("Success",200);
		}catch(\Exception $e)
		{
			Log::info($e);
		}
		return response("error",302);
	}

	public function track($imei ,$slug)
	{
		$client = new Client();
		$response = $client->get('http://gps.truckjee.com:3001/gps/'.$imei);
		$response = json_decode($response->getBody()->getContents())[0];
        $location = $client->get('http://nominatim.openstreetmap.org/reverse?'.
            'format=json'.
            '&lat='.$response->lat.
            '&lon='.$response->long.
            '&zoom=18'.
            '&addressdetails=0');
        $location = (json_decode($location->getBody()->getContents())->display_name);
        $last_udpated = Carbon::parse($response->server_time)->diffForHumans();
        return view('plot')->with([
            'lat'   =>  $response->lat,
            'long'  =>  $response->long,
            'vehicleNumber' =>  $slug,
            'location'      =>  $location,
            'last_updated'  =>  $last_udpated
        ]);
	}

}
