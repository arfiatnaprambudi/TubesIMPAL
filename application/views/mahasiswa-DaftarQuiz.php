    <div class="container">
        <div class="page-section">
            <div class="row">
                <div class="col-md-9">

                
             <form action="proses_quiz.php" method="POST">
                    <tr>
                    <td>Quiz Ke : </td>
                    <td><input name="quizke" type="number" size="30"></td>
                    <input type="submit" value="simpan" class="btn btn-primary paper-shadow relative">
                    </tr>         
             </form>   
                
    
                </div>
               
                <div class="col-md-3">
                    <div class="panel panel-default" data-toggle="panel-collapse" data-open="true">
                        <div class="panel-heading panel-collapse-trigger">
                            <h4 class="panel-title">Menu eLearning </h4>
                        </div>
                        <div class="panel-body list-group">
                            <ul class="list-group list-group-menu">
                                <li class="list-group-item"><a class="link-text-color" href="<?php echo base_url();?>index.php/HomeMahasiswa">Dashboard</a></li>
                                <li class="list-group-item"><a class="link-text-color" href="<?php echo base_url();?>index.php/DaftarMateriMahasiswa">Daftar Materi</a></li>
								<li class="list-group-item"><a class="link-text-color" href="<?php echo base_url();?>index.php/DaftarTugasMahasiswa">Daftar Tugas</a></li>
								<li class="list-group-item active"><a class="link-text-color" href="<?php echo base_url();?>index.php/DaftarQuizMahasiswa">Daftar Quiz</a></li>
                                <li class="list-group-item"><a class="link-text-color" href="<?php echo base_url();?>index.php/ProfileMahasiswa">Profil</a></li>
                                <li class="list-group-item"><a class="link-text-color" href="<?php echo base_url();?>index.php/HomeMahasiswa/logout"><span>Keluar</span></a></li>
                            </ul>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>