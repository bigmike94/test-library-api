<?php
namespace App\Helpers;
class Helper
{
	public static function msg($okstatus, $data, $statusCode){
		 return response()->json([
            'ok'=>$okstatus,
            'data'=>$data
        ], $statusCode);
	}
}
?>