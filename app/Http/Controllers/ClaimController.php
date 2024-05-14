<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Claim;

class ClaimController extends Controller
{
    //
    public function index(){
        return view('claim\add-claim');
    }
    public function show(){
        $claim=Claim::all();
        // $claim=Claim::paginate(10);
        return view('claim\view-claim',['claims'=>$claim]);
    }
    public function store(){
        $claim= new Claim();
        $claim->claim_flag=request('claim_flag');
        $claim->claim_amount=request('claim_amount');
        $claim->claim_freq=request('claim_freq');
        $claim->old_claim=request('old_claim');

        $claim->save();
    }
    public function update($id){
        $claim=Claim::find($id);
        return view('claim\update-claim',['claim'=>$claim]);
    }
    public function patch($id){
        $claim=Claim::find($id);

        $claim->claim_flag=request('claim_flag');
        $claim->claim_amount=request('claim_amount');
        $claim->claim_freq=request('claim_freq');
        $claim->old_claim=request('old_claim');

        $claim->update();
    }
    public function destroy($id){
        Claim::destroy($id);
        return redirect('view-claim');
    }
}