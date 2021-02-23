<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Company;
use Illuminate\Support\Facades\Log;


class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $companies = Company::get();
        return view('Company.index', compact('companies'))->with('i');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('Company.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate([
            'companyName' => 'required',
            'email' => 'required',
            'website' => 'required',
            'gst'    => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:1024|required',
        ]);
            try {
                if ($request->hasfile('image')) {
                    $image = $request->image;
                    $i = rand(10, 1000);
                    $imageName = time() . '_' . $i . '.' . $image->getClientOriginalExtension();
                    $image->move(public_path().'/companyImage/', $imageName);
                }
                $company = array(
                                'name' => $request->companyName,
                                'email' => $request->email,
                                'logo' => $imageName,
                                'gst'  => $request->gst,
                                'website' => $request->website,
                            );
                Company::create($company);

                return redirect()->route('companies.index')->with('success', __('message.createCompany'));
        } catch (\Exception $ex) {
            Log::error($ex->getMessage());
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $company = Company::where('id', $id)->first();
        return view('Company.show', compact('company'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $company = Company::where('id', $id)->first();
        return view('Company.edit', compact('company'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        request()->validate([
            'companyName' => 'required',
            'email' => 'required',
            'website' => 'required',
        ]);

        try{
            $company = Company::find($id);
            if ($request->hasfile('image')) {
                    request()->validate([
                        'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:1024|required'
                    ]);
                    $image = $request->image;
                    $i = rand(10, 1000);
                    $activeImage = time() . '_' . $i . '.' . $image->getClientOriginalExtension();
                    $image->move(public_path().'/companyImage/', $activeImage);
            } else {
                    $activeImage = $company->logo;
            }

            $companies = array(
                        'name' => $request->companyName,
                                    'email' => $request->email,
                                    'logo' => $activeImage,
                                    'gst'  => $request->gst,
                                    'website' => $request->website,
                    );
                $company->update($companies);
                return redirect()->route('companies.index')->with('success', __('message.updateCompany'));
        } catch (\Exception $ex) {
            Log::error($ex->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
       $companyId = $request->companyId;
        try {
            Company::where('id', $companyId)->delete();
            
            $result = array(
                'status' => 200,
                'message' => __('message.deleteCompany')
            );
            return response()->json($result);
        } catch (\Exception $ex) {
            Log::error($ex->getMessage());
        }

        return redirect()->back()->with('error', __('message.status'))->withInput();
    }
}
