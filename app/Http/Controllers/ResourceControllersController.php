<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ResourceControllersController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $photos = \Illuminate\Support\Facades\Storage::files('images/photos');

        return view('controllers.resource-controllers.index', compact('photos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('controllers.resource-controllers.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if ($request->hasFile('file')) {

            $filename = $request->file('file')->storeAs('images/photos', $request->file('file')->getClientOriginalName());

            return response()->redirectToRoute('resource-controllers.index')->withInput(['message' => 'File uploaded successfully.']);
        }

        return response()->redirectToRoute('resource-controllers.create')->withInput(['file_missing' => true]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return response()->download(
                        storage_path('app') . DIRECTORY_SEPARATOR . 'images' . DIRECTORY_SEPARATOR . 'photos' . DIRECTORY_SEPARATOR . $id
        );
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('controllers.resource-controllers.edit', compact('id'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $fileExists = \Illuminate\Support\Facades\Storage::exists(
                        'images' . DIRECTORY_SEPARATOR . 'photos' . DIRECTORY_SEPARATOR . $request->input('name_old')
        );

        if ($fileExists) {

            $newFileExists = \Illuminate\Support\Facades\Storage::exists(
                            'images' . DIRECTORY_SEPARATOR . 'photos' . DIRECTORY_SEPARATOR . $request->input('name')
            );

            //new name already exists
            if ($newFileExists) {

                return response()->redirectToRoute('resource-controllers.edit', $request->input('name_old'))->withInput([
                            'message' => 'The new name (' . $request->input('name') . ') already exists'
                ]);
            }

            //update to new name
            $success = \Illuminate\Support\Facades\Storage::move(
                            'images' . DIRECTORY_SEPARATOR . 'photos' . DIRECTORY_SEPARATOR . $request->input('name_old'),
                            'images' . DIRECTORY_SEPARATOR . 'photos' . DIRECTORY_SEPARATOR . $request->input('name')
            );

            return response()->redirectToRoute('resource-controllers.index')->withInput([
                        'message' => 'Name changed successfully.'
            ]);
        }
        
        return response()->redirectToRoute('resource-controllers.index')->withInput([
                    'message' => 'File doesn\'t exist.',
                    'status' => 'danger'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $fileExists = \Illuminate\Support\Facades\Storage::exists(
                        'images' . DIRECTORY_SEPARATOR . 'photos' . DIRECTORY_SEPARATOR . $id
        );

        if ($fileExists) {

            $success = \Illuminate\Support\Facades\Storage::delete('images' . DIRECTORY_SEPARATOR . 'photos' . DIRECTORY_SEPARATOR . $id);

            return response()->redirectToRoute('resource-controllers.index')->withInput([
                        'message' => 'File removed successfully.'
            ]);
        }

        return response()->redirectToRoute('resource-controllers.index')->withInput([
                    'message' => 'File doesn\'t exist.',
                    'status' => 'danger'
        ]);
    }

}
