<?php

namespace App\Http\Controllers;

use App\Activity;

class ActivityController extends Controller
{
    public function index()
    {
        $activities = Activity::all();
        return view('activities.index', compact('activities'));
    }

    public function show(Activity $activity)
    {
        return view('activities.show', compact('activity'));
    }

    public function create()
    {
        return view('activities.create');
    }

    public function store()
    {

        $this->validate(request(), [
            'name' => 'required',
            'reps' => 'required'
        ]);

        $activity = new Activity;

        $activity->name = request('name');
        $activity->reps = request('reps');
        $activity->user_id = 1;

        $activity->save();

        return redirect('/activities');
    }
}
