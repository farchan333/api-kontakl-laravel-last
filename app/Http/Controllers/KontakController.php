<?php

	namespace App\Http\Controllers;

	use App\Models\Kontak;
	use Illuminate\Http\Request;
	use Validator;

	class KontakController extends Controller
	{
		protected $kontakValidate;
		public function __construct()
		{
			$this->kontakValidate = new KontakValidate();
		}


		public function index()
		{
			$data = Kontak::orderBy('id', 'desc')->get();
			return $this->kontakValidate->getShowRespon($data);
		}

		public function store(Request $request)
		{
		}

		public function show($id)
		{
			$data = Kontak::find($id);
			if ($data){
				return $this->kontakValidate->getResponse($data,"data $data->nama ditemukan");
			}else {
				return $this->kontakValidate->getResponse(false,"data dengan id $id tidak ditemukan");
			}
		}

		public function update(Request $request, $id)
		{
			$data = Kontak::find($id);
			$nama = $data->nama;
			$isValid = Validator::make($request->all(), [
				'nama' => 'required',
				'alamat' => 'required',
				'telepon' => 'required'
			]);
			if ($isValid->fails()){
				return $this->kontakValidate->getResponse($data,'data inputtan kosong');
			}else {
				$data->update($request->all());
				return $this->kontakValidate->getResponse($data,"Data $nama berhasil di ubah menjadi $request->nama");
			}
		}

		public function destroy($id)
		{
			$data = Kontak::find($id);
			if ($data){
				$data->delete();
				return $this->kontakValidate->getResponse($data,"Data $data->nama berhasil di hapus");
			}else {
				return $this->kontakValidate->getResponse(false,"Data dengan id $id tidak ditemukan");
			}
		}
	}
