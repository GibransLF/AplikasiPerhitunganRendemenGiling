<?php

namespace App\Controllers;

use App\Database\Migrations\RendemenGiling;
use App\Models\RendemenGilingModel;
use CodeIgniter\HTTP\Request;

class rendemenGilingController extends BaseController
{
    protected $RendemenGilingModel;
    public function __construct()
    {
        $this -> RendemenGilingModel = new RendemenGilingModel();
    }
    public function index()
    {
        $data = [
            'rendemenGiling' => $this -> RendemenGilingModel -> findAll(),
            'validation' => \Config\Services::validation()
        ];
        return view('/rendemenGiling/index', $data);
    }

    public function save()
    {
        $validation =  \Config\Services::validation();
        if (! $this->validate([
            'JGabah' => 'required',
            'JBeras' => 'required'
        ])) {
            session() -> setFlashdata('pesanGagalInsert', 'Data gagal di Tambahkan!');

            return redirect() -> to('/') -> withInput() -> with('validation', $validation);
        };

        $countRendemen = $this -> request -> getVar('JBeras') / $this -> request -> getVar('JGabah') * 100;

        $this -> RendemenGilingModel -> save([
            'JGabah' => $this -> request -> getVar('JGabah'),
            'JBeras' => $this -> request -> getVar('JBeras'),
            'rendemen' => $countRendemen
        ]);
        session() ->setFlashdata('pesanInsert', 'Data berhasil di Tambahkan!');

        return redirect() -> to('/');
    }

    public function delete($id)
    {
        $this -> RendemenGilingModel ->delete($id);
        session() ->setFlashdata('pesanDelete','Data berhasil di Hapus!');
        return redirect() -> to('/');
    }

    public function edit($id)
    {
        $data = [
            'rendemen' => $this -> RendemenGilingModel -> where(['id' => $id]) -> first()
        ];

        return view('rendemenGiling/edit', $data);
    }

    public function update($id)
    {
        $validation =  \Config\Services::validation();
        if (! $this->validate([
            'JGabah' => 'required',
            'JBeras' => 'required'
        ])) {
            session() -> setFlashdata('pesanGagalUpdate','Data gagal di Ubah!');

            return redirect() -> to('/') -> withInput() -> with('validation', $validation);
        };

        $countRendemen = $this -> request -> getVar('JBeras') / $this -> request -> getVar('JGabah') * 100;

        $this -> RendemenGilingModel -> save([
            'id' => $id,
            'JGabah' => $this -> request -> getVar('JGabah'),
            'JBeras' => $this -> request -> getVar('JBeras'),
            'rendemen' => $countRendemen
        ]);
        session() ->setFlashdata('pesanUpdate','Data berhasil di Ubah!');

        return redirect() -> to('/');
    }
}
