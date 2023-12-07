<?php

namespace App\Http\Controllers;

use App\Models\FailedJob;
use Illuminate\Http\Request;

/**
 * Class FailedJobController
 * @package App\Http\Controllers
 */
class FailedJobController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $failedJobs = FailedJob::paginate();

        return view('failed-job.index', compact('failedJobs'))
            ->with('i', (request()->input('page', 1) - 1) * $failedJobs->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $failedJob = new FailedJob();
        return view('failed-job.create', compact('failedJob'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(FailedJob::$rules);

        $failedJob = FailedJob::create($request->all());

        return redirect()->route('failed-jobs.index')
            ->with('success', 'FailedJob created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $failedJob = FailedJob::find($id);

        return view('failed-job.show', compact('failedJob'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $failedJob = FailedJob::find($id);

        return view('failed-job.edit', compact('failedJob'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  FailedJob $failedJob
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, FailedJob $failedJob)
    {
        request()->validate(FailedJob::$rules);

        $failedJob->update($request->all());

        return redirect()->route('failed-jobs.index')
            ->with('success', 'FailedJob updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $failedJob = FailedJob::find($id)->delete();

        return redirect()->route('failed-jobs.index')
            ->with('success', 'FailedJob deleted successfully');
    }
}
