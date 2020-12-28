<?php


namespace App\DataTransferObject;

class StudentDTO extends GenericDTO {
  private $studentId;
  private $namaDepan;
  private $namaBelakang;
  private $jenjangPendidikan;
  private $namaSekolah;
  private $kelas;
  private $bidangOlim;
  private $noWa;
  private $email;
  private $buktiPembayaran;
  private $kartuPelajar;

  /**
   * Get the value of studentId
   */
  public function getStudentId()
  {
    return $this->studentId;
  }

  /**
   * Set the value of studentId
   *
   * @return  self
   */
  public function setStudentId($studentId)
  {
    $this->studentId = $studentId;

    return $this;
  }

  /**
   * Get the value of namaDepan
   */
  public function getNamaDepan()
  {
    return $this->namaDepan;
  }

  /**
   * Set the value of namaDepan
   *
   * @return  self
   */
  public function setNamaDepan($namaDepan)
  {
    $this->namaDepan = $namaDepan;

    return $this;
  }

  /**
   * Get the value of namaBelakang
   */
  public function getNamaBelakang()
  {
    return $this->namaBelakang;
  }

  /**
   * Set the value of namaBelakang
   *
   * @return  self
   */
  public function setNamaBelakang($namaBelakang)
  {
    $this->namaBelakang = $namaBelakang;

    return $this;
  }

  /**
   * Get the value of jenjangPendidikan
   */
  public function getJenjangPendidikan()
  {
    return $this->jenjangPendidikan;
  }

  /**
   * Set the value of jenjangPendidikan
   *
   * @return  self
   */
  public function setJenjangPendidikan($jenjangPendidikan)
  {
    $this->jenjangPendidikan = $jenjangPendidikan;

    return $this;
  }

  /**
   * Get the value of namaSekolah
   */
  public function getNamaSekolah()
  {
    return $this->namaSekolah;
  }

  /**
   * Set the value of namaSekolah
   *
   * @return  self
   */
  public function setNamaSekolah($namaSekolah)
  {
    $this->namaSekolah = $namaSekolah;

    return $this;
  }

  /**
   * Get the value of kelas
   */
  public function getKelas()
  {
    return $this->kelas;
  }

  /**
   * Set the value of kelas
   *
   * @return  self
   */
  public function setKelas($kelas)
  {
    $this->kelas = $kelas;

    return $this;
  }

  /**
   * Get the value of bidangOlim
   */
  public function getBidangOlim()
  {
    return $this->bidangOlim;
  }

  /**
   * Set the value of bidangOlim
   *
   * @return  self
   */
  public function setBidangOlim($bidangOlim)
  {
    $this->bidangOlim = $bidangOlim;

    return $this;
  }

  /**
   * Get the value of noWa
   */
  public function getNoWa()
  {
    return $this->noWa;
  }

  /**
   * Set the value of noWa
   *
   * @return  self
   */
  public function setNoWa($noWa)
  {
    $this->noWa = $noWa;

    return $this;
  }

  /**
   * Get the value of email
   */
  public function getEmail()
  {
    return $this->email;
  }

  /**
   * Set the value of email
   *
   * @return  self
   */
  public function setEmail($email)
  {
    $this->email = $email;

    return $this;
  }

  /**
   * Get the value of buktiPembayaran
   */
  public function getBuktiPembayaran()
  {
    return $this->buktiPembayaran;
  }

  /**
   * Set the value of buktiPembayaran
   *
   * @return  self
   */
  public function setBuktiPembayaran($buktiPembayaran)
  {
    $this->buktiPembayaran = $buktiPembayaran;

    return $this;
  }

  /**
   * Get the value of kartuPelajar
   */
  public function getKartuPelajar()
  {
    return $this->kartuPelajar;
  }

  /**
   * Set the value of kartuPelajar
   *
   * @return  self
   */
  public function setKartuPelajar($kartuPelajar)
  {
    $this->kartuPelajar = $kartuPelajar;

    return $this;
  }
}