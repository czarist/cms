<?php

namespace App\Http\Controllers\Admin;

use App\Base\Controllers\AdminController;
use App\Http\Controllers\Admin\DataTables\ProjectDataTable;
use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends AdminController
{
    /**
     * @var array
     */
    protected $validation = [
        'title' => 'required|string|max:200',
        'subtitle' => 'required|string|max:200',
        'url' => 'required|string|max:200',
        'designer' => 'required|string|max:200',
        'designer-url' => 'required|string|max:200',
        'intermediary' => 'required|string|max:200',
        'intermediary-url' => 'required|string|max:200',
        'plataform' => 'required|string|max:200',
        'hexabg' => 'required|string|max:200',
        'icon' => 'required|string',
        'description' => 'required|string|max:200'
    ];

    /**
     * @param \App\Http\Controllers\Admin\DataTables\  $dataTable
     *
     * @return mixed
     */
    public function index(ProjectDataTable $dataTable)
    {
        return $dataTable->render('admin.table', ['link' => route('admin.project.create')]);
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View|string
     */
    public function create()
    {
        return view('admin.forms.project', $this->formVariables('project', null));
    }

    /**
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     * @throws \Exception
     */
    public function store(Request $request)
    {
        return $this->createFlashRedirect(Project::class, $request);
    }

    /**
     * @param \App\Models\Project $project
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View|string
     */
    public function show(Project $project)
    {
        return view('admin.show', ['object' => $project]);
    }

    /**
     * @param \App\Models\Project $project
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View|string
     */
    public function edit(Project $project)
    {
        return view('admin.forms.project', $this->formVariables('project', $project));
    }

    /**
     * @param \App\Models\Project $project
     * @param \Illuminate\Http\Request  $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     * @throws \Exception
     */
    public function update(Project $project, Request $request)
    {
        return $this->saveFlashRedirect($project, $request);
    }

    /**
     * @param \App\Models\Project $project
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     * @throws \Exception
     */
    public function destroy(Project $project)
    {
        return $this->destroyFlashRedirect($project);
    }
}
