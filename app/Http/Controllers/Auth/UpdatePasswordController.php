<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class UpdatePasswordController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        $request->validate([
            'email' => 'email|required',
            'password' => 'required|confirmed|min:',
        ]);

        User::where('email', $request->email)
                                     ->update(['password' => bcrypt(request('password'))]);

        return response()->json([
            'response_code' => '00',
            'response_message' => 'Password berhasil diubah',
        ], 200);
    }
}
