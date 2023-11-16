<?php

namespace App\Http\Controllers\Admin;

use App\Base\Controllers\AdminController;
use App\Http\Controllers\Admin\DataTables\SkillDataTable;
use App\Models\Skill;
use Illuminate\Http\Request;

class SkillController extends AdminController
{
    /**
     * @var array
     */
    protected $validation = [
        'title' => 'required|string|max:20',
        'image' => 'required|string'
    ];

    /**
     * @param \App\Http\Controllers\Admin\DataTables\SkillDataTable $dataTable
     *
     * @return mixed
     */
    public function index(SkillDataTable $dataTable)
    {
        return $dataTable->render('admin.table', ['link' => route('admin.skill.create')]);
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View|string
     */
    public function create()
    {
        return view('admin.forms.skill', $this->formVariables('skill', null));
    }

    /**
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     * @throws \Exception
     */
    public function store(Request $request)
    {
        return $this->createFlashRedirect(Skill::class, $request);
    }

    /**
     * @param \App\Models\Skill $skill
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View|string
     */
    public function show(Skill $skill)
    {
        return view('admin.show', ['object' => $skill]);
    }

    /**
     * @param \App\Models\skill $skill
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View|string
     */
    public function edit(Skill $skill)
    {
        return view('admin.forms.skill', $this->formVariables('skill', $skill));
    }

    /**
     * @param \App\Models\Skill $skill
     * @param \Illuminate\Http\Request  $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     * @throws \Exception
     */
    public function update(Skill $skill, Request $request)
    {
        return $this->saveFlashRedirect($skill, $request);
    }

    /**
     * @param \App\Models\Skill $skill
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     * @throws \Exception
     */
    public function destroy(Skill $skill)
    {
        return $this->destroyFlashRedirect($skill);
    }
}
