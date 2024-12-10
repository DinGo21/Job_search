<?php

namespace App\Http\Controllers\Api;

use App\Models\Job;
use App\Models\Feedback;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FeedbackController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(string $id)
    {
        return response()->json(Job::find($id)->feedback, 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, string $id)
    {
        $feedback = Feedback::create([
            'job_id' => (int)$id,
            'comment' => $request->comment
        ]);
        return response()->json($feedback, 200);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $jobId, string $commentId)
    {
        return response()->json(Job::find($jobId)->feedback[(int)$commentId - 1], 200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $jobId, string $commentId)
    {
        $feedback = Job::find($jobId)->feedback[(int)$commentId - 1];

        $feedback->update([
            'job_id' => $request->job_id,
            'comment' => $request->comment
        ]);
        return response()->json($feedback, 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $jobId, string $commentId)
    {
        Job::find($jobId)->feedback[(int)$commentId - 1]->delete();
    }
}
