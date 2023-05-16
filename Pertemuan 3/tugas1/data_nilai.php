<div class="container">
  <h2>Data Mahasiswa</h2>
  <table class="table">
      <thead>
          <tr>
              <th>No</th>
              <th>Nama Lengkap</th>
              <th>Mata Kuliah</th>
              <th>UTS</th>
              <th>UAS</th>
              <th>Tugas</th>
              <th>Rerata</th>
              <th>Grade</th>
              <th>Predikat</th>
              <th>Keterangan</th>
          </tr>
      </thead>
      <tbody>
          <tr>
              <td>1</td>
              <td>Azril</td>
              <td>Statistika dan Probabilitas</td>
              <td>89</td>
              <td>95</td>
              <td>80</td>
              <td>87.95</td>
              <td>A</td>
              <td>Sangat Memuaskan</td>
              <td>Lulus</td>
          </tr>
          <tr>
              <td>2</td>
              <td>EL</td>
              <td>Statistika dan Probabilitas</td>
              <td>78</td>
              <td>81</td>
              <td>80</td>
              <td>79.75</td>
              <td>B</td>
              <td>Memuaskan</td>
              <td>Lulus</td>
          </tr>

          <?php
					/**
					* Task 3
					* 1. Import libfungsi.php
					* 2. Tampilkan data dalam bentuk table
					* 3. Berikan error handling untuk mengatasi ketika form belum disubmit
					* Note: Sesuaikan dengan isi table yang sudah ada						
					*/
                    require_once 'libfungsi.php';

                if(isset($POST['submit'])) {
                    $nomor = $_POST['nomor'];
                    $nama_lengkap = $_POST['nama_lengkap'];
                    $matkul = $_POST['matkul'];
                    $uts = $_POST['nilai_uts'];
                    $uas = $_POST['nilai_uas'];
                    $tugas = $_POST['nilai_tugas'];
                    $total_nilai = kelulusan($uts, $uas, $tugas);
                    $grade = grade($total_nilai);
                    $predikat = predikat($total_nilai,$grade);
                    $ket = keterangan($total_nilai, $uts, $uas, $tugas);

                    echo '<tr>';
                    echo '<td>' . $nomor . '</td>';
                    echo '<td>' . $nama_lengkap . '</td>';
                    echo '<td>' . $matkul . '</td>';
                    echo '<td>' . $uts . '</td>';
                    echo '<td>' . $uas . '</td>';
                    echo '<td>' . $tugas . '</td>';
                    echo '<td>' . $total_nilai . '</td>';
                    echo '<td>' . $grade . '</td>';
                    echo '<td>' . $predikat . '</td>';                    
                    echo '<td>' . $ket . '</td>';                    
                    echo '</tr>';
                }
          ?>
      </tbody>
  </table>
</div>