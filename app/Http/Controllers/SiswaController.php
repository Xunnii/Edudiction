<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    public function index(Request $request)
    {
        $filterableColumns = ['kelas'];
        $searchableColumns = ['name'];
        $pageData['dataSiswa'] = Siswa::filter($request, $filterableColumns, $searchableColumns)
            ->simplePaginate(10)
            ->withQueryString();
        return view('admin.siswa.index', $pageData);
    }

    public function create()
    {
        return view('admin.siswa.create');
    }

    public function store(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'name' => ['required'],
            'phone' => ['required', 'numeric'],
            'alamat' => ['required'],
            'kelas' => ['required', 'in:12,11,10,9,8,7,6,5,4,3'],
            'mataPelajaran' => ['required', 'in:Matematika,Fisika,Biologi,Kimia,
                                                IPA,IPS,PKN,Agama Islam,
                                                Bahasa Indonesia,Bahasa Inggris'],
            'tanggal' => ['required', 'date'],
            'pukul' => ['required', 'date_format:H:i'],
        ]);

        $data['name'] = $request->name;
        $data['phone'] = $request->phone;
        $data['alamat'] = $request->alamat;
        $data['kelas'] = $request->kelas;
        $data['mataPelajaran'] = $request->mataPelajaran;
        $data['tanggal'] = $request->tanggal;
        $data['pukul'] = $request->pukul;

        Siswa::create($data);

        return redirect()->route('siswa.list')->with('success', 'Penambahan Data Berhasil!');
    }

    public function show(string $id)
    {
        //
    }

    public function edit(string $param1)
    {
        $data['dataSiswa'] = Siswa::findOrFail($param1);
        return view('admin.siswa.edit', $data);
    }


    public function update(Request $request)
    {
        $request->validate([
            'name' => ['required'],
            'phone' => ['required', 'numeric'],
            'alamat' => ['required'],
            'kelas' => ['required', 'in:12,11,10,9,8,7,6,5,4,3'],
            'mataPelajaran' => ['required', 'in:Matematika,Fisika,Biologi,Kimia,
                                                IPA,IPS,PKN,Agama Islam,
                                                Bahasa Indonesia,Bahasa Inggris'],
            'tanggal' => ['required', 'date'],
            'pukul' => ['required', 'date_format:H:i'],
        ]);
        $id = $request->id;
        $user = Siswa::findOrFail($id);

        $siswa['name'] = $request->name;
        $siswa['phone'] = $request->phone;
        $siswa['alamat'] = $request->alamat;
        $siswa['kelas'] = $request->kelas;
        $siswa['mataPelajaran'] = $request->mataPelajaran;
        $siswa['tanggal'] = $request->tanggal;
        $siswa['pukul'] = $request->pukul;

        $user->save();

        return redirect()->route('siswa.list')->with('success', 'Perubahan Data Berhasil!');
    }


    public function destroy(string $param1)
    {
        $siswa = Siswa::findOrFail($param1);

        $siswa->delete();

        return redirect()->route('siswa.list')->with('success', 'Penghapusan Data Berhasil!');
    }
}
