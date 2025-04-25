<?php
    namespace App\Http\Controllers;
    use Illuminate\Http\Request;
    use Illuminate\Support\Facades\Storage;
    class FileController extends Controller
    {
        public function upload(Request $request)
        {

            $archivo = $request->file('file');
            $path = Storage::put('imagenes', $archivo);

            dd($path);
        }
        public function download($path)
        {
            return Storage::download($path);
        }
    }