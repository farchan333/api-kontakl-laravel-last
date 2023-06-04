<?php

	namespace App\Http\Controllers;

	class KontakValidate
	{
		public function getShowRespon($data)
		{
			if ($data->count() > 0) {
				return response()->json([
					'status' => true,
					'message' => sizeof($data)." data ditemukan",
					'data' => $data
				], 200);
			} else {
				return response()->json([
					'status' => false,
					'message' => 'Data masih kosong'
				], 404);
			}
		}

		public function getResponse($data, string $text)
		{
			if ($data) $isExists = true;
			else $isExists = false;

			return response()->json(array(
				'status' => $isExists,
				'message' => $text
			), $isExists ? 200 : 404);

		}
	}