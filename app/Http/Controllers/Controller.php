<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;


    public $activationFee = 1720;

    public $referralBonus = 780;

    public $adminPayment = 180;


    public $level1Payment = 1720;
    public $level2Payment = 2500;
    public $level3Payment = 5000;
    public $level4Payment = 16000;
    public $level5Payment = 56000;
    public $level6Payment = 350000;



}
