<?php

namespace App\Http\Controllers\Admin;

use App\Base\Controllers\AdminController;
use App\Http\Controllers\Admin\DataTables\CertificateDataTable;
use App\Models\Certificate;
use Illuminate\Http\Request;
use App\Models\Category;
use Illuminate\Support\Facades\DB;

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
        $allCategories = Category::where('type', 'certification')->get();

        $selectedCategories = $certificate->categories->pluck('id')->toArray();

        foreach ($allCategories as $category) {
            $category['selected'] = in_array($category->id, $selectedCategories);
        }

        $certificate['categories'] = $allCategories->toArray();

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
        $selectedCategoriesJson = $request->input('categories', '[]');
        $selectedCategories = json_decode($selectedCategoriesJson, true);

        $certificateCategories = $certificate->categories->pluck('id')->toArray();

        $categoriesToAdd = array_diff($selectedCategories, $certificateCategories);
        $certificate->categories()->attach($categoriesToAdd);

        $categoriesToRemove = array_diff($certificateCategories, $selectedCategories);
        $certificate->categories()->detach($categoriesToRemove);

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
        DB::table('category_certificate')->where('certificate_id', $certificate->id)->delete();

        return $this->destroyFlashRedirect($certificate);
    }
}
