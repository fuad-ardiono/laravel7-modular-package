<?php
namespace App\Module\Package;

use App\Http\Controllers\Controller as BaseController;
use App\Module\Package\Contract as PackageService;

class Controller extends BaseController
{
	private $package_service;

	public function __construct(PackageService $package_service)
	{
		$this->package_service = $package_service;
	}

	public function listData() {
		try {
			$dispatch_service = $this->package_service->listData();
			return $this->response('Success fetch list data', $dispatch_service);
		} catch (\Exception $err) {
			return $this->responseError($err);
		}
	}
}
