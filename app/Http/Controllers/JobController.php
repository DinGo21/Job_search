<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class JobController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if ($request->action === 'delete')
        {
            $this->destroy($request->id);
            return Redirect::to(route('index'));
        }
        $jobs = Job::all();
        return view('index', compact('jobs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    // public function create()
    // {
    // }
    
    /**
     * Store a newly created resource in storage.
     */
    // public function store(Request $request)
    // {
    //     //
    // }
    
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $job = Job::find($id);
        if ($job)
            return view('show', compact('job'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    // public function edit(string $id)
    // {
    //     //
    // }

    /**
     * Update the specified resource in storage.
     */
    // public function update(Request $request, string $id)
    // {
    //     //
    // }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $job = Job::find($id);
        if ($job)
        {
            $job->delete();
        }
    }
}
