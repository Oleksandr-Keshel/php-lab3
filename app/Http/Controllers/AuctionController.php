<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Auction;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;

class AuctionController extends Controller
{

    public function index(){
        $user = Auth::user(); // Retrieve the currently authenticated user
        $auctions = Auction::all();
        if (Gate::forUser($user)->allows('view-all-auctions')) {
            return view('auctions.index', ['auctions' => $auctions]);
        } else {
            abort(403);
        }

    }

    public function show($code){
        $user = Auth::user();
        if (Gate::forUser($user)->allows('view-auction')) {
            $auction = Auction::findOrFail($code);
            return view('auctions.show', ['auction' => $auction]);
        } else {
            abort(403);
        }

    }

    public function create(){
        $user = Auth::user();
        if (Gate::forUser($user)->allows('create-auction')) {
            return view('auctions.create');
        } else {
            abort(403);
        }
    }

    public function store(Request $request){
        $validated = $request->validate([
            'lotName' => 'required',
            'startDate' => 'required|date|before:tomorrow',
            'finishDate' => 'required|date|after_or_equal:startDate|before:tomorrow',
            'startPrice' => 'required|integer|min:1',
            'finalPrice' => 'required|integer|gte:startPrice',
        ]);
        $auction = new Auction();

        $auction->lotName = $request->input('lotName');
        $auction->startDate = $request->input('startDate');
        $auction->finishDate = $request->input('finishDate');
        $auction->startPrice = $request->input('startPrice');
        $auction->finalPrice = $request->input('finalPrice');
        $auction->creator_user_id = Auth::id();

        $auction->save();
        return redirect('/auctions')->with('success', 'Auction was successfully created!');
    }

    public function edit($code){
        $user = Auth::user();
        $auction = Auction::findOrFail($code);
        if(Gate::forUser($user)->allows('edit-auction', $auction)){
            return view('auctions.edit', ['auction' => $auction]);
        } else{
            abort(403);
        }


    }

    public function update($code, Request $request){
        $auction = Auction::findOrFail($code);

        $validated = $request->validate([
            'lotName' => 'required',
            'startDate' => 'required|date|before:tomorrow',
            'finishDate' => 'required|date|after_or_equal:startDate|before:tomorrow',
            'startPrice' => 'required|integer|min:1',
            'finalPrice' => 'required|integer|gte:startPrice',
        ]);
        
        $auction->lotName = $request->input('lotName');
        $auction->startDate = $request->input('startDate');
        $auction->finishDate = $request->input('finishDate');
        $auction->startPrice = $request->input('startPrice');
        $auction->finalPrice = $request->input('finalPrice');
        $auction->save();

        return redirect('/auctions')->with('success', 'Auction was successfully updated!');
    }
    public function destroy($code){
        $user = Auth::user();
        $auction = Auction::findOrFail($code);
        if(Gate::forUser($user)->allows('delete-auction', $auction)){
            $auction->delete();
            return redirect('/auctions')->with('success', 'Auction was successfully deleted!');
        } else{
            abort(403);
        }



    }

}
