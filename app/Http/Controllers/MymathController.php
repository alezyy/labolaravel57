<?php
/**
 * Created by PhpStorm.
 * User: franceneralezy
 * Date: 2020-01-31
 * Time: 5:49 AM
 */

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Brick\Math\BigNumber;
use Brick\Math\BigInteger;
use Brick\Math\BigDecimal;

class MymathController extends Controller
{
    public function myMath()
    {
        //return view('mymath');

        $value = '-1234655858555';

        $big = BigInteger::of($value)->abs();

        print_r($big);

        // $valm = 1234;

        // echo $valm;
    }
}
