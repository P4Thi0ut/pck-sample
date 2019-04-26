<?php

namespace Sample;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SampleController extends Controller {

	use \App\Http\factories\gateway;
    use \App\Http\factories\formatter;

    private $request = null;
    private $sysRequest = null;

	public function __construct() {}

	public function example (Request $request) {

		return $this->responseSuccess('OK');

	}

}