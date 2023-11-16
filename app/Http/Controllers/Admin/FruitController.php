<?php

namespace App\Http\Controllers\Admin;

use App\Base\Controllers\AdminController;
use App\Http\Controllers\Admin\DataTables\FruitDataTable;
use App\Models\Fruit;
use Illuminate\Http\Request;

class FruitController extends AdminController
{
    /**
     * @var array
     */
    protected $validation = ['title' => 'required|string|max:200', 'description' => 'required|string|max:160'];

    /**
     * @param \App\Http\Controllers\Admin\DataTables\FruitDataTable $dataTable
     *
     * @return mixed
     */
    public function index(FruitDataTable $dataTable)
    {
        return $dataTable->render('admin.table', ['link' => route('admin.fruit.create')]);
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View|string
     */
    public function create()
    {
        return view('admin.forms.fruit', $this->formVariables('fruit', null));
    }

    /**
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     * @throws \Exception
     */
    public function store(Request $request)
    {
        return $this->createFlashRedirect(Fruit::class, $request);
    }

    /**
     * @param \App\Models\Fruit $fruit
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View|string
     */
    public function show(Fruit $fruit)
    {
        return view('admin.show', ['object' => $fruit]);
    }

    /**
     * @param \App\Models\Fruit $fruit
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View|string
     */
    public function edit(Fruit $fruit)
    {
        return view('admin.forms.fruit', $this->formVariables('fruit', $fruit));
    }

    /**
     * @param \App\Models\Fruit $fruit
     * @param \Illuminate\Http\Request  $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     * @throws \Exception
     */
    public function update(Fruit $fruit, Request $request)
    {
        return $this->saveFlashRedirect($fruit, $request);
    }

    /**
     * @param \App\Models\Fruit $fruit
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     * @throws \Exception
     */
    public function destroy(Fruit $fruit)
    {
        return $this->destroyFlashRedirect($fruit);
    }
}
