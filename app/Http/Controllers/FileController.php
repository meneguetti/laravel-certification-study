<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FileController extends Controller
{

    public function delete(Request $request)
    {

        if ($request->filled('file')) {
            $fileDeleted = \Illuminate\Support\Facades\Storage::delete($request->get('file'));

            if ($fileDeleted) {
                return response()->redirectToRoute('download')->withInput([
                            'message_success' => 'File <b>' . $request->get('file') . '</b> deleted successfully.'
                ]);
            }
        }

        return response()->redirectToRoute('download');
    }

}
