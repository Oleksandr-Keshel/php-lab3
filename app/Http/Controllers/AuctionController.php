<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Auction;

class AuctionController extends Controller
{

    public function index(){
        $auctions = Auction::all();
        return view('auctions.index', ['auctions' => $auctions]);
    }

    public function show($code){
        $auction = Auction::findOrFail($code);
        return view('auctions.show', ['auction' => $auction]);
    }

    public function create(){
        return view('auctions.create');
    }

    public function store(){
        $auction = new Auction();

        $auction->lotName = request('lotName');
        $auction->startDate = request('startDate');
        $auction->finishDate = request('finishDate');
        $auction->startPrice = request('startPrice');
        $auction->finalPrice = request('finalPrice');

        $auction->save();
        return redirect('/auctions')->with('success', 'Auction was successfully created!');
    }

    public function edit($code){
        $auction = Auction::findOrFail($code);
        return view('auctions.edit', ['auction' => $auction]);
    }

    public function update($code, Request $request){
        $auction = Auction::findOrFail($code);

        $auction->lotName = $request->input('lotName');
        $auction->startDate = $request->input('startDate');
        $auction->finishDate = $request->input('finishDate');
        $auction->startPrice = $request->input('startPrice');
        $auction->finalPrice = $request->input('finalPrice');
        $auction->save();

        return redirect('/auctions')->with('success', 'Auction was successfully updated!');
    }
    public function destroy($code){
        $auction = Auction::findOrFail($code);
        $auction->delete();
        return redirect('/auctions')->with('success', 'Auction was successfully deleted!');;
    }

}
