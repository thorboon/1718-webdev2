<?php

namespace App\Http\Controllers\Api;

use App\Auction;
use App\Http\Resources\AuctionResource;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AuctionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Resources\Json\AnonymousResourceCollection
     */
    public function index()
    {
        $auctions = Auction::paginate(10);

        return AuctionResource::collection($auctions);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return AuctionResource
     */
    public function store(Request $request)
    {
        $auction = Auction::create($request->all());

        return new AuctionResource($auction);
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return AuctionResource
     */
    public function show($id)
    {
        $auction = Auction::findOrFail($id);

        return new AuctionResource($auction);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return AuctionResource
     */
    public function update(Request $request, $id)
    {
        $auction = Auction::findOrFail($id);

        $auction->update($request->all());

        return new AuctionResource($auction);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return AuctionResource
     * @throws \Exception
     */
    public function destroy($id)
    {
        $auction = Auction::findOrFail($id);

        $auction->delete();

        return new AuctionResource($auction);
    }
}
