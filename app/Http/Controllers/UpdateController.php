<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UpdateController extends Controller
{
    public function update(Request $request ,$nim) {
        $tt = $request->input('tt');
        $tm = $request->input('tm');
        $uts = $request->input('uts');;
        $uas = $request->input('uas');;
        $na = (0.20*$tt)+(0.20*$tm)+(0.20*$uts)+(0.40*$uas);
        $nh = nh($na);
        function nh($na){
            if($na <= 100 ) { $nh = "A"; }
            if($na <  80 )  { $nh = "B"; }
            if($na <  70 )  { $nh = "C"; }
            if($na <  60 )  { $nh = "D"; }
            if($na <  40 )  { $nh = "E"; }
            return $nh;
        }

        DB::update('update nilai_mahasiswa set tt = ?,tm=?, uts=?, uas=?, na=?, where id = ?',[$tt,$tm,$uts,$uas,$na]);

    }
}
