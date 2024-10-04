<?php

namespace App\Http\Controllers;

use App\Models\Goal;
use App\Http\Requests\StoreGoalRequest;
use App\Http\Requests\UpdateGoalRequest;

class GoalController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $goals = Goal::query()->with('media')->get();
        return response()->json($goals);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreGoalRequest $request)
    {
        $goal = Goal::query()->create([
            'title' => $request->title,
            'description' => $request->description,
            'calories' => $request->calories,
            'duration' => "1 month"
        ]);
        if ($request->media) {
            $goal->addMediaFromRequest('media')->toMediaCollection('goals');
        }
        return response()->json($goal);
    }

    /**
     * Display the specified resource.
     */
    public function show(Goal $goal)
    {
        $show = $goal->load('media');
        return response()->json($show);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateGoalRequest $request, Goal $goal)
    {
        $goals = $goal->update([
            'title' => $request->title
        ]);
        if ($request->media) {
            $goal->addMediaFromRequest('media')->toMediaCollection('goals');
        }
        return response()->json($goals);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Goal $goal)
    {
        //
    }
}
