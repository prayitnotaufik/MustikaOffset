<?php

namespace App\Controllers;

use App\Models\ProdukModel;

class Produk extends BaseController
{
    protected $product;

    public function __construct()
    {
        $this->product = new ProdukModel();
    }

    public function index()
    {
        $data = [
            'produk' => $this->product->getProduk()
        ];

        return view('produk/index', $data);
    }

    public function admin()
    {
        return view('produk/login');
    }

    public function dashboard()
    {
        if (session()->get('isLogin')) {
            $data = [
                'produk' => $this->product->getProduk()
            ];

            return view('produk/dashboard', $data);
        } else {
            session()->setFlashdata('pesan', 'Silahkan Login dahulu');
            return redirect()->to('produk/admin');
        }
    }

    public function login()
    {
        $username = $this->request->getVar('username');
        $password = $this->request->getVar('password');

        if ($username == 'admin' && $password == 'admin') {
            session()->set([
                'isLogin' => true
            ]);
            return redirect()->to('produk/dashboard');
        } else {
            session()->setFlashdata('pesan', 'Username atau Password Salah !');
            return redirect()->to('produk/admin');
        }
    }

    public function addProduk()
    {
        $file = $this->request->getFile('gambar');
        $namaFile = $file->getRandomName();
        $file->move('img', $namaFile);

        $data = [
            'nama' => $this->request->getVar('nama'),
            'harga' => $this->request->getVar('harga'),
            'kategori' => $this->request->getVar('kategori'),
            'deskripsi' => $this->request->getVar('deskripsi'),
            'gambar' => $namaFile
        ];

        $this->product->insert($data);

        session()->setFlashdata('pesan', 'Produk berhasil ditambahkan');

        return redirect()->to('produk/dashboard');
    }

    public function updateProduk($id)
    {
        $produk = $this->product->find($id);
        $file = $this->request->getFile('gambar');

        if ($file->getError() == 4) {
            $namaFile = $produk['gambar'];
        } else {
            $namaFile = $file->getRandomName();
            $file->move('img', $namaFile);
            unlink('img/' . $produk['gambar']);
        }

        $data = [
            'nama' => $this->request->getVar('nama'),
            'harga' => $this->request->getVar('harga'),
            'kategori' => $this->request->getVar('kategori'),
            'deskripsi' => $this->request->getVar('deskripsi'),
            'gambar' => $namaFile
        ];

        $this->product->update($id, $data);

        session()->setFlashdata('pesan', 'Produk berhasil diupdate');

        return redirect()->to('produk/dashboard');
    }

    public function delete($id)
    {
        $produk = $this->product->find($id);
        unlink('img/' . $produk['gambar']);

        $this->product->delete($id);
        session()->setFlashdata('pesan', 'Produk berhasil dihapus');

        return redirect()->to('produk/dashboard');
    }
}
