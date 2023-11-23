<?php

namespace App\Http\Controllers\Admin;

use App\Base\Controllers\AdminController;
use App\Http\Controllers\Admin\DataTables\JobDataTable;
use App\Models\Job;
use Illuminate\Http\Request;

class JobController extends AdminController
{
    /**
     * @var array
     */
    protected $validation = [
        'title' => 'required|string|max:200',
        'company' => 'required|string|max:160',
        'date_init' => 'required|string|max:160',
        'date_end' => 'nullable|string|max:160',
        'responsibilities' => 'required|string|max:160',
        'order' => 'nullable|integer',
        'current_company' => 'required|integer',
        'company_image' => 'required|string'
    ];

    /**
     * @param \App\Http\Controllers\Admin\DataTables\JobDataTable $dataTable
     *
     * @return mixed
     */
    public function index(JobDataTable $dataTable)
    {
        return $dataTable->render('admin.table', ['link' => route('admin.job.create')]);
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View|string
     */
    public function create()
    {
        return view('admin.forms.job', $this->formVariables('job', null));
    }

    /**
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     * @throws \Exception
     */
    public function store(Request $request)
    {
        return $this->createFlashRedirect(Job::class, $request);
    }

    /**
     * @param \App\Models\Job $job
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View|string
     */
    public function show(Job $job)
    {
        return view('admin.show', ['object' => $job]);
    }

    /**
     * @param \App\Models\Job $job
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View|string
     */
    public function edit(Job $job)
    {
        return view('admin.forms.job', $this->formVariables('job', $job));
    }

    /**
     * @param \App\Models\Job $job
     * @param \Illuminate\Http\Request  $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     * @throws \Exception
     */
    public function update(Job $job, Request $request)
    {
        return $this->saveFlashRedirect($job, $request);
    }

    /**
     * @param \App\Models\Job $job
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     * @throws \Exception
     */
    public function destroy(Job $job)
    {
        return $this->destroyFlashRedirect($job);
    }
}
