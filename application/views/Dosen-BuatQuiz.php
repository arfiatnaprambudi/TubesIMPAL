<div class="container">
        <div class="page-section">
            <div class="row">
                <div class="col-md-9">
                    
                    
                    <form method="post" action="quizsimpan.php" name="myForm" onsubmit="return validateForm()">
 <table>
 <tr>
 <td>Mata Kuliah</td>
 <td><input name="mataKuliah" type="text" size="30"></td>
 </tr>
  <tr>
  <td>Quiz ke</td> 
 <td><input name="quizKe" type="number" size="30"></td>
 </tr>
 <tr>
 <td>No Soal</td>
 <td><input name="no_soal" type="number" size="30"></td>
 </tr>
 <tr>
 <td>Soal</td>
 <td><input name="soal" type="text" size="30"></td>
 </tr>
 <tr>
 <td>Jawaban Benar</td>
 <td>
 <input type="radio" name="pilihan_benar" value="a">a
 <input type="radio" name="pilihan_benar" value="b">b
 <input type="radio" name="pilihan_benar" value="c">c
 <input type="radio" name="pilihan_benar" value="d">d
 
 </td>
 </tr>
 <tr>
 <td>Pilihan a</td>
 <td><input name="pilihan_a" type="text" size="30"></td>
 </tr>
 <tr>
 <td>Pilihan b</td>
 <td><input name="pilihan_b" type="text" size="30"></td>
 </tr>
 <tr>
 <td>Pilihan c</td>
 <td><input name="pilihan_c" type="text" size="30"></td>
 </tr>
 <tr>
 <td>Pilihan d</td>
 <td><input name="pilihan_d" type="text" size="30"></td>
 </tr>
 <tr>
 
 </tr>
  <tr>
 <td colspan="2">
 <input type="submit" value="Simpan" class="btn btn-primary paper-shadow relative">
 
 </tr>
 </table>
 </form>;

                    <br/>
                    <br/>
                </div>
                <div class="col-md-3">
                    <div class="panel panel-default" data-toggle="panel-collapse" data-open="true">
                        <div class="panel-heading panel-collapse-trigger">
                            <h4 class="panel-title">Menu eLearning </h4>
                        </div>
                        <div class="panel-body list-group">
                            <ul class="list-group list-group-menu">
                                <li class="list-group-item"><a class="link-text-color" href="<?php echo base_url();?>index.php/Welcome">Dashboard</a></li>
                                <li class="list-group-item"><a class="link-text-color" href="<?php echo base_url();?>index.php/DaftarMateriDosen">Daftar Materi</a></li>
                <li class="list-group-item"><a class="link-text-color" href="<?php echo base_url();?>index.php/DaftarTugasDosen">Daftar Tugas</a></li>
                <li class="list-group-item"><a class="link-text-color" href="<?php echo base_url();?>index.php/DaftarQuizDosen">Daftar Quiz</a></li>
                                <li class="list-group-item"><a class="link-text-color" href="<?php echo base_url();?>index.php/ProfileDosen">Profil</a></li>
                                <li class="list-group-item"><a class="link-text-color" href="<?php echo base_url();?>index.php/HomeDosen/logout"><span>Keluar</span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
   