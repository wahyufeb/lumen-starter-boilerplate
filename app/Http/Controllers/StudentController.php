<?php


namespace App\Http\Controllers;

use App\DataTransferObject\StudentDTO;
use App\BusinessLayer\StudentBusinessLayer;

use Illuminate\Http\Request;

class StudentController extends Controller
{
  private $studentBusinessLayer;
  public function __construct()
  {
    $this->studentBusinessLayer = new StudentBusinessLayer();
  }

  public function olimpiadRegistration(Request $request)
  {
    $studentDTO = new StudentDTO();
    $studentDTO->setNamaDepan($request->input('nama_depan'));
    $studentDTO->setNamaBelakang($request->input('nama_belakang'));
    $studentDTO->setJenjangPendidikan($request->input('jenjang_pendidikan'));
    $studentDTO->setNamaSekolah($request->input('nama_sekolah'));
    $studentDTO->setKelas($request->input('kelas'));
    $studentDTO->setBidangOlim($request->input('bidang_olim'));
    $studentDTO->setNoWa($request->input('no_wa'));
    $studentDTO->setEmail($request->input('email'));
    $studentDTO->setBuktiPembayaran($request->file('bukti_pembayaran'));
    $studentDTO->setKartuPelajar($request->file('kartu_pelajar'));

    $result = $this->studentBusinessLayer->olimpiadRegistrationAction($studentDTO);
    return response()->json($result, $result['code']);
  }

}
