<?php

namespace App\Http\Controllers\Admin;

use App\Base\Controllers\AdminController;
use App\Http\Controllers\Admin\DataTables\CertificateDataTable;
use App\Models\Certificate;
use Illuminate\Http\Request;

class CertificateController extends AdminController
{
    /**
     * @var array
     */
    protected $validation = [
        'title' => 'required|string|max:200',
        'subtitle' => 'required|string|max:200',
        'url' => 'required|string|max:200',
        'hexabg' => 'required|string|max:200',
        'icon' => 'required|string'
    ];

    /**
     * @param \App\Http\Controllers\Admin\DataTables\CertificateDataTable $dataTable
     *
     * @return mixed
     */
    public function index(CertificateDataTable $dataTable)
    {
        return $dataTable->render('admin.table', ['link' => route('admin.certificate.create')]);
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View|string
     */
    public function create()
    {
        return view('admin.forms.certificate', $this->formVariables('certificate', null));
    }

    /**
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     * @throws \Exception
     */
    public function store(Request $request)
    {
        return $this->createFlashRedirect(Certificate::class, $request);
    }

    /**
     * @param \App\Models\Certificate $certificate
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View|string
     */
    public function show(Certificate $certificate)
    {
        return view('admin.show', ['object' => $certificate]);
    }

    /**
     * @param \App\Models\Certificate $certificate
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View|string
     */
    public function edit(Certificate $certificate)
    {
        return view('admin.forms.certificate', $this->formVariables('certificate', $certificate));
    }

    /**
     * @param \App\Models\Certificate $certificate
     * @param \Illuminate\Http\Request  $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     * @throws \Exception
     */
    public function update(Certificate $certificate, Request $request)
    {
        return $this->saveFlashRedirect($certificate, $request);
    }

    /**
     * @param \App\Models\Certificate $certificate
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     * @throws \Exception
     */
    public function destroy(Certificate $certificate)
    {
        return $this->destroyFlashRedirect($certificate);
    }
}
