<?php

namespace App\Http\Controllers;

use App\Auction;
use App\Category;
use App\User;
use Storage;
use Illuminate\Http\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class AuctionController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $auctions = Auction::paginate(10);

        return view('auctions.index', compact('auctions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();

        return view('auctions.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param User $user
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required|string|min:2|max:255',
            'description' => 'required|string',
            'dimensions' => 'string',
            'price' => 'required',
            'min_bid' => 'required',
            'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:255',
        ]);

        $auction = new Auction();

        $auction->user_id = Auth::id();
        $auction->category_id = $request->category;
        $auction->title = $request->title;
        $auction->description = $request->description;
        $auction->dimensions = $request->dimensions;
        $auction->price = $request->price;
        $auction->min_bid = $request->min_bid;
        $auction->image = $request->image;

        $auction->save();

        $auction->showMessage($request, 'De veiling werd succesvol toegevoegd');

        return redirect()->home();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Auction  $auction
     * @return \Illuminate\Http\Response
     */
    public function show(Auction $auction)
    {
        $currentAuction = Auction::find($auction->id);

        return view('auctions.show', compact('currentAuction'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Auction  $auction
     * @return \Illuminate\Http\Response
     */
    public function edit(Auction $auction)
    {
        $currentAuction = Auction::find($auction->id);
        $categories = Category::all();

        return view('auctions.edit', compact('currentAuction', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Auction  $auction
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Auction $auction)
    {
        $currentAuction = Auction::find($auction->id);

        $currentAuction->category_id = $request->category;
        $currentAuction->title = $request->title;
        $currentAuction->description = $request->description;
        $currentAuction->dimensions = $request->dimensions;
        $currentAuction->price = $request->price;
        $currentAuction->min_bid = $request->min_bid;

        $currentAuction->image = $request->file('image')->storeAs(
            'public/images', $request->file('image')->getClientOriginalName()
        );
        $file = $request->file('image');
        $filename = $file->getClientOriginalName();
        $currentAuction->image = $filename;
          

        $currentAuction->save();

        return redirect()->home();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Auction $auction
     * @return \Illuminate\Http\Response
     * @throws \Exception
     */
    public function destroy(Auction $auction)
    {
        $currentAuction = Auction::find($auction->id);

        $currentAuction->delete();

        return redirect()->home();
    }
}
