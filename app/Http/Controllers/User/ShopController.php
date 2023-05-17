<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Shop;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use InterventionImage;
// use Intervention\Image\Facades\Image as InterventionImage;
use App\Http\Requests\UploadImageRequest;
use App\Services\ImageService;
use Illuminate\Support\Facades\Log;

class ShopController extends Controller
{
    public function __construct()
    {
        // $this->middleware('auth:owners');

        // $this->middleware(function ($request, $next) {
        //     // dd($request->route()->parameter('shop'));//文字列

        //     $id = $request->route()->parameter('shop'); //shopのid取得
        //     if (!is_null($id)) { // null判定
        //         $shopsOwnerId = Shop::findOrFail($id)->owner->id;
        //         $shopId = (int)$shopsOwnerId; // キャスト 文字列→数値に型変換
        //         $ownerId = Auth::id();
        //         if ($shopId !== $ownerId) { // 同じでなかったら
        //             abort(404); // 404画面表示
        //         }
        //     }
        //     return $next($request);
        // });
    }

    public function index()
    {
        // $ownerId = Auth::id();
        $shops = Shop::get();
        // dd('テスト');
        return view('user.index', compact('shops')
        );
    }
}
