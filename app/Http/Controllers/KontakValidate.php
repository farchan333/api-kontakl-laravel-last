<?php

	namespace App\Http\Controllers;

	class KontakValidate
	{
		public function getShowRespon($data){
			if ($data->count() > 0) {
				return response()->json([
					'status' => true,
					'message' => 'Success',
					'data' => $data
				], 200);
			} else {
				return response()->json([
					'status' => false,
					'message' => 'Data masih kosong'
				],404);
			}
		}

		public function getResponse($data,string $text){
			if ($data){
				return response()->json([
					'status' => true,
					'message' => $text
				], $data == true?200:404);
			}
		}
	}