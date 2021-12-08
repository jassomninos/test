<?php

namespace App\Http\Traits;
use App\Models\Student;

trait ImageUploadTrait {
    public function imageUpload($fileName,$directory) {
        $genrateFileName = time().'_'.$fileName->getClientOriginalName();
        $filePath =  $fileName->move(public_path($directory), $genrateFileName);
        return $genrateFileName;
    }
}