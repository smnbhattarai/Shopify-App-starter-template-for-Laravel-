<?php

namespace App\Http\Controllers;

use App\Models\Wishlist;
use Illuminate\Http\Request;

class WishlistController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * @param Request $request
     * @return string
     */
    public function store(Request $request)
    {
        Wishlist::updateOrcreate($request->all());
        return 'success';
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Wishlist  $wishlist
     * @return \Illuminate\Http\Response
     */
    public function show(Wishlist $wishlist)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Wishlist  $wishlist
     * @return \Illuminate\Http\Response
     */
    public function edit(Wishlist $wishlist)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Wishlist  $wishlist
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Wishlist $wishlist)
    {
        //
    }

    /**
     * @param Request $request
     * @return mixed
     */
    public function destroy(Request $request)
    {
        $item = Wishlist::where('shop_id', $request->shop_id)
            ->where('customer_id', $request->customer_id)
            ->where('product_id', $request->product_id)
            ->first();
        return $item->delete();
    }

    /**
     * @param Request $request
     * @return mixed
     */
    public function check(Request $request)
    {
        return Wishlist::where('shop_id', $request->shop_id)
            ->where('customer_id', $request->customer_id)
            ->where('product_id', $request->product_id)
            ->first();
    }

}
