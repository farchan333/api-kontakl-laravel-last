<?php

	namespace App\Http\Controllers;

	use App\Models\Kontak;
	use Illuminate\Http\Request;

	class KontakController extends Controller
	{
		protected KontakValidate $kontakValidate;

		/**
		 * @param KontakValidate $kontakValidate
		 */
		public function __construct(KontakValidate $kontakValidate)
		{
			$this->kontakValidate = $kontakValidate;
		}


		public function index()
		{
			$data = Kontak::orderBy('id', 'desc')->paginate(5)->get();
			return $this->kontakValidate->getShowRespon($data);

		}

		public function store(Request $request)
		{
		}

		public function show($id)
		{
		}

		public function update(Request $request, $id)
		{
		}

		public function destroy($id)
		{
		}
	}
