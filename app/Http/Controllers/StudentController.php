<?php

namespace App\Http\Controllers;
use App\Student;
use Carbon\Carbon;
use Illuminate\Http\Request;
use PDF;

class StudentController extends Controller
{
    public function index()
    {
        $students = Student::get();
        return view('students.index', compact('students'));
    }

    public function create(){
        return view('students.create');
    }

    public function store(Request $request){
        $today = \Carbon\Carbon::now();

        Student::create([
            'nama' => $request->nama,
            'jk' => $request->jk,
            'alamat' => $request->alamat,
            'agama' => $request->agama,
            'asal_sekolah' => $request->asal_sekolah,
            'jurusan' => $request->jurusan,
            'created_at' => $today,
            'updated_at' => $today,
        ]);

        return redirect('/students')->with('success','Added successfully.');
    }

    public function edit($no_reg){
        $students = Student::findOrFail($no_reg);
        return view('students.edit', compact('students'));
    }

    public function update(Request $request, $no_reg){
        Student::find($no_reg)->update([
               'nama' => $request->get('nama'),
               'jk' => $request->get('jk'),
               'alamat' => $request->get('alamat'),
               'agama' => $request->get('agama'),
               'asal_sekolah' => $request->get('asal_sekolah'),
               'jurusan' => $request->get('jurusan'),
        ]);

        return redirect('/students')->with('success','Student edited successfully.');
    }

    public function destroy($no_reg)
    {
        Student::find($no_reg)->delete();
        return redirect('/students')->with('success','Student deleted successfully.');
    }

    public function cetak_pdf()
    {
    	$students = Student::all();
 
    	$pdf = PDF::loadview('student_pdf',['students'=>$students]);
    	return $pdf->stream();
    }

    public function cetak_pdf_student($no_reg)
    {
    	$students = Student::findOrFail($no_reg);
 
    	$pdf = PDF::loadview('student_pdf_id',['students'=>$students]);
    	return $pdf->stream();
    }
}
