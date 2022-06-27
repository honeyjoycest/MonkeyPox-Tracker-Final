<?php

namespace App\Http\Controllers;

use App\Models\MonkeyPoxTracker;
use Illuminate\Http\Request;

class MonkeyPoxTrackerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response()->json( MonkeyPoxTracker::orderBy('id','DESC')->get());
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
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $monkeyPoxTracker = new MonkeyPoxTracker;
        $monkeyPoxTracker->country = $request->country;
        $monkeyPoxTracker->month = $request->month;
        $monkeyPoxTracker->deaths = $request->deaths;
        $monkeyPoxTracker->recovered = $request->recovered;
        $monkeyPoxTracker->active_case = $request->active_case;
        $monkeyPoxTracker->save();

        return response()->json(['created'=>201]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\MonkeyPoxTracker  $monkeyPoxTracker
     * @return \Illuminate\Http\Response
     */
    public function show(MonkeyPoxTracker $monkeyPoxTracker)
    {
        return response()->json($monkeyPoxTracker);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\MonkeyPoxTracker  $monkeyPoxTracker
     * @return \Illuminate\Http\Response
     */
    public function edit(MonkeyPoxTracker $monkeyPoxTracker)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\MonkeyPoxTracker  $monkeyPoxTracker
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $monkeypt = MonkeyPoxTracker::find($id);

        $monkeypt->update($request->all());

        return response()->json(['updated'=>200]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\MonkeyPoxTracker  $monkeyPoxTracker
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $monkeypt = MonkeyPoxTracker::find($id);
        $monkeypt->delete();

        return response()->json(['deleted'=>200]);
    }
}
