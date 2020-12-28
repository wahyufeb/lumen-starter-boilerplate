<?php


namespace App\DataAccessObject;

class StudentDAO extends GenericDAO {
  protected $table = 'students';
  protected $fillable = [
    'id_student',
    'nama_depan',
    'nama_belakang',
    'jenjang_pendidikan',
    'nama_sekolah',
    'kelas',
    'bidang_olim',
    'no_wa',
    'email',
    'bukti_pembayaran',
    'kartu_pelajar'
  ];
}