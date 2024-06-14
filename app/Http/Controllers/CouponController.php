<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CouponController extends Controller
{
    public function ApplyCoupon(Request $request){
        if(!$request->coupon && session('usedCoupon')){
            session()->put('price', session('realPrice'));
            session()->put('usedCoupon', null);
            return back();
        };
        $request->validate([
            'coupon' =>'required'
        ], [
            'coupon' => '"Kode Kupon" tidak boleh kosong'
        ]);

        $coupon = DB::table('coupons')
        ->where('CouponName', 'LIKE', $request->coupon)
        ->first();

        if(!$coupon){
            return back()->withErrors([
                'coupon' => '"Kode Kupon" tidak terdaftar'
            ]);
        } else if($coupon->MinimumSpend > session('price')){
            return back()->withErrors([
                'coupon' => 'Minimum Spend Belum Terpenuhi'
            ]);
        } else if(now() > $coupon->EndDate){
            return back()->withErrors([
                'coupon' => 'Masa Berlaku Kupon Sudah Habis'
            ]);
        }

        strlen((string) $coupon->Discount) > 2 ? session()->put('price', session('realPrice') - $coupon->Discount) : session()->put('price', session('realPrice') * (100 - $coupon->Discount) / 100);
        
        session()->put('usedCoupon', $coupon->CouponName);
        return back();
    }
}
