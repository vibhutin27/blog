<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use DB;

class AccountsController extends Controller
{
                //
            $user = DB::table('users')->where('email', '=', $request->email)->first();
            //Check if the user exists
            if (count($user) < 1) {
                return redirect()->back()->withErrors(['email' => trans('User does not exist')]);
            }

            //Create Password Reset Token
            DB::table('password_resets')->insert([
                'email' => $request->email,
                'token' => str_random(60),
                'created_at' => Carbon::now()
            ]);
            //Get the token just created above
            $tokenData = DB::table('password_resets')
                ->where('email', $request->email)->first();

            if ($this->sendResetEmail($request->email, $tokenData->token)) {
                return redirect()->back()->with('status', trans('A reset link has been sent to your email address.'));
            } else {
                return redirect()->back()->withErrors(['error' => trans('A Network Error occurred. Please try again.')]);
            }
}
