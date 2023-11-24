<?php

namespace App\Http\Controllers\Admin;

use App\Base\Controllers\AdminController;
use App\Http\Controllers\Admin\DataTables\EducationDataTable;
use App\Models\Education;
use Illuminate\Http\Request;

class EducationController extends AdminController
{
    /**
     * @var array
     */
    protected $validation = [
        'title' =>  'required|string|max:200',
        'university_pt' => 'required|string|max:160',
        'university_en' =>  'required|string|max:200',
        'course_pt' =>  'required|string|max:200',
        'course_en' =>  'required|string|max:200',
        'status_pt' =>  'required|string|max:200',
        'status_en' =>  'required|string|max:200',
        'date_init' => 'required|date',
        'date_end' => 'required|date',
    ];

    /**
     * @param \App\Http\Controllers\Admin\DataTables\EducationDataTable $dataTable
     *
     * @return mixed
     */
    public function index(EducationDataTable $dataTable)
    {
        return $dataTable->render('admin.table', ['link' => route('admin.education.create')]);
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View|string
     */
    public function create()
    {
        return view('admin.forms.education', $this->formVariables('education', null));
    }

    /**
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     * @throws \Exception
     */
    public function store(Request $request)
    {
        return $this->createFlashRedirect(Education::class, $request);
    }

    /**
     * @param \App\Models\Education $education
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View|string
     */
    public function show(Education $education)
    {
        return view('admin.show', ['object' => $education]);
    }

    /**
     * @param \App\Models\Education $education
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View|string
     */
    public function edit(Education $education)
    {
        return view('admin.forms.education', $this->formVariables('education', $education));
    }

    /**
     * @param \App\Models\Education $education
     * @param \Illuminate\Http\Request  $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     * @throws \Exception
     */
    public function update(Education $education, Request $request)
    {
        return $this->saveFlashRedirect($education, $request);
    }

    /**
     * @param \App\Models\Education $education
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     * @throws \Exception
     */
    public function destroy(Education $education)
    {
        return $this->destroyFlashRedirect($education);
    }
}
