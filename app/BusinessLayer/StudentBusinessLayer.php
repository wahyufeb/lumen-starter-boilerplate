<?php


namespace App\BusinessLayer;

use App\DataAccessObject\StudentDAO;
use App\DataTransferObject\StudentDTO;

use App\Validator\EntityValidator;
use App\PresentationLayerer\ResponsePresentationLayer;

use Image;

class StudentBusinessLayer extends GenericBusinessLayer {

  public function olimpiadRegistrationAction(StudentDTO $params)
  {
    try {
      $validasiData = $this->validasiInputData($params);
      if($validasiData['code'] != 200) {
        return $validasiData;
      }

      // Handle Image Bukti Pembayaran & Kartu Pelajar
      $buktiPembayaran = $this->convertImage($params->getBuktiPembayaran());
      $kartuPelajar = $this->convertImage($params->getKartuPelajar());

      $postData = [
        'id_student' => $this->generateUuid(),
        'nama_depan' => $params->getNamaDepan(),
        'nama_belakang' => $params->getNamaBelakang(),
        'jenjang_pendidikan' => $params->getJenjangPendidikan(),
        'nama_sekolah' => $params->getNamaSekolah(),
        'kelas' => $params->getKelas(),
        'bidang_olim' => $params->getBidangOlim(),
        'no_wa' => $params->getNoWa(),
        'email' => $params->getEmail(),
        'bukti_pembayaran' =>  $buktiPembayaran,
        'kartu_pelajar' => $kartuPelajar,
      ];

      $saveData = StudentDAO::create($postData);

      if(is_null($saveData)){
        $response = new ResponsePresentationLayer(400, 'Terjadi pada saat mendaftar Olimpiad', null, []);
        return $response->getResponse();
      }

      $response = new ResponsePresentationLayer(200, 'Berhasil mendaftar Olimpiad', $saveData, []);
    } catch (\Exception $e) {
      $errors[] = $e->getMessage();
      $response = new ResponsePresentationLayer(500, 'Terjadi Kesalahan pada Server', null, $errors);
    }

    return $response->getResponse();
  }

  private function validasiInputData(StudentDTO $params) {
    try {
      $rules = [
        'nama_depan' => 'required|min:3',
        'nama_belakang' => 'required|min:3',
        'jenjang_pendidikan' => 'required',
        'nama_sekolah' => 'required|min:3',
        'kelas' => 'required',
        'bidang_olim' => 'required',
        'no_wa' => 'required',
        'email' => 'required|unique:App\DataAccessObject\StudentDAO,email',
        'bukti_pembayaran' =>  'required|image',
        'kartu_pelajar' => 'required|image'
      ];

      $data = [
        'nama_depan' => $params->getNamaDepan(),
        'nama_belakang' => $params->getNamaBelakang(),
        'jenjang_pendidikan' => $params->getJenjangPendidikan(),
        'nama_sekolah' => $params->getNamaSekolah(),
        'kelas' => $params->getKelas(),
        'bidang_olim' => $params->getBidangOlim(),
        'no_wa' => $params->getNoWa(),
        'email' => $params->getEmail(),
        'bukti_pembayaran' =>  $params->getBuktiPembayaran(),
        'kartu_pelajar' => $params->getKartuPelajar()
      ];

      $validator = EntityValidator::validate($data, $rules);
      if($validator->fails()){
        $error = $validator->errors();
        $response = new ResponsePresentationLayer(400, 'Gagal melakukan validasi input data', null, $error);
        return $response->getResponse();
      }

      $response = new ResponsePresentationLayer(200, 'Proses Validasi input data berhasil', null, []);
    } catch (\Exception $e) {
      $errors[] = $e->getMessage();
      $response = new ResponsePresentationLayer(500, 'Terjadi Kesalahan pada Server', null, $errors);
    }

    return $response->getResponse();
  }

}