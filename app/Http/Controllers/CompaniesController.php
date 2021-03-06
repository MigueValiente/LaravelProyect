<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Company;
use App\Http\Requests\CompanyRequest;
use Illuminate\Support\Facades\Storage;

class CompaniesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     public function __construct()
     {
       $this->middleware('auth',['only' => ['create','store','edit','update','destroy']
     ]);
     }

    public function index()
    {
        $companies = Company::paginate(10);
        return view('public.companies.index',compact('companies'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('public.companies.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CompanyRequest $request)
    {

        $logo = $request->file('logo');
        $resultadoLogo = NULL;

        if($logo != NULL){
            $resultadoLogo = $logo->store('logos','public');
        }

        Company::create([
            'name' => request('name'),
            'slug' => str_slug(request('name'),'-'),
            'web' => request('web'),
            'address' => request('address'),
            'email' => request('email'),
            'logo' => $resultadoLogo,
        ]);
  
        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $company = Company::where('slug', $slug)->firstOrFail();

        return view('public.companies.show', ['company' => $company]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Company $company)
    {
        return view('public.companies.edit',compact('company'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CompanyRequest $request, Company $company)
    {
        $logo = $request->file('logo');

        if($logo && $company->logo){
            Storage::disk('public')->delete($company->logo);
        }

        $company->update([
            'name' => request('name'),
            'slug' => str_slug(request('name'), "-"),
            'address' => request('address'),
            'web' => request('web'),
            'email' => request('email'),
            'logo' => ($logo?$logo->store('logos','public'):$company->logo),
        ]);
  
        return redirect('/companies/'.$company->slug);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Company $company)
    {
        $company->delete();

        return redirect('/');
    }
}
