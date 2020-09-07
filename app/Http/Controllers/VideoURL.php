<?php

namespace App\Http\Controllers;

use Goutte\Client;
use Illuminate\Http\Request;
use Symfony\Component\HttpClient\HttpClient;

class VideoURL extends Controller
{
	public function FInstaVD(Request $req)
	{
		try {
			$cl = new Client(HttpClient::create(['timeout' => 120]));
			$urlr = $req->url;
			$craw = $cl->request('GET', $urlr);
			$res = $craw->filterXpath('//meta[@property="og:video"]')->attr('content');
			$ar = array('urlbakc' => $res);
			return json_encode($ar, JSON_UNESCAPED_SLASHES);
		} catch (\Throwable $th) {
			throw $th;
		}
	}
	public function FInstaIMG(Request $req)
	{
		$cl = new Client();
		$urlr = $req->url;
		$craw = $cl->request('GET', $urlr);
		$res = $craw->filterXpath('//meta[@property="og:image"]')->attr('content');
		$ar = array('urlbakc' => $res);
		return json_encode($ar, JSON_UNESCAPED_SLASHES);
	}
}
