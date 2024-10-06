<?php

namespace App\Http\Controllers;

use App\Models\GoalPlanLevel;
use App\Http\Requests\StoreGoalPlanLevelRequest;
use App\Http\Requests\UpdateGoalPlanLevelRequest;

class GoalPlanLevelController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $targets = GoalPlanLevel::query()->with(['goals'])->get();
        return response()->json($targets);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreGoalPlanLevelRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(GoalPlanLevel $goalPlanLevel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateGoalPlanLevelRequest $request, GoalPlanLevel $goalPlanLevel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(GoalPlanLevel $goalPlanLevel)
    {
        //
    }
}
