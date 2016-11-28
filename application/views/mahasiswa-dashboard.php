 <div class="container">
        <div class="page-section">
            <div class="row">
                <div class="col-md-9">
                    <div class="panel panel-default">
                        <div class="media v-middle">
                            <div class="media-left">
                                <div class="bg-green-400 text-white">
                                    <div class="panel-body">
                                        <i class="fa fa-credit-card fa-fw fa-2x"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="media-body">
                                Your account ends on <span class="text-body-2">24 August 2019</span>
                            </div>
                           
                        </div>
                    </div>
                    <div class="row" data-toggle="isotope">
                        <div class="item col-xs-12 col-lg-6">
                            <div class="panel panel-default paper-shadow" data-z="0.5">
                                <div class="panel-heading">
                                    <h4 class="text-headline margin-none">Materi</h4>
                                    <p class="text-subhead text-light">Daftar materi anda :</p>
                                </div>
                                
                                <div class="panel-footer text-right">
                                    <a href="<?php echo base_url();?>index.php/DaftarMateriMahasiswa" class="btn btn-white paper-shadow relative" data-z="0" data-hover-z="1" data-animated href="#"> Lihat Semua Materi</a>
									<a href="<?php echo base_url();?>index.php/DownloadMateri" class="btn btn-primary paper-shadow relative" data-z="0" data-hover-z="1" data-animated>DOWNLOAD MATERI  <i class="fa fa-plus"></i></a>
								</div>
                            </div>
                        </div>
                       
                        <div class="item col-xs-12 col-lg-6">
                            <div class="panel panel-default paper-shadow" data-z="0.5">
                                <div class="panel-heading">
                                    <h4 class="text-headline margin-none">Quiz</h4>
                                    <p class="text-subhead text-light">Daftar quiz anda :</p>
                                </div>
                                
                                <div class="panel-footer">
                                    <a href="<?php echo base_url();?>index.php/mahasiswa-KerjakanQuiz"  class="btn btn-primary paper-shadow relative" data-z="0" data-hover-z="1" data-animated href="#" target="_blank"> Kerjakan Quiz</a>
                                </div>
                            </div>
                        </div>
						
						<div class="item col-xs-12 col-lg-6">
                            <div class="panel panel-default paper-shadow" data-z="0.5">
                                <div class="panel-heading">
                                    <h4 class="text-headline margin-none">Tugas</h4>
                                    <p class="text-subhead text-light">Tugas perkuliahan anda : </p>
                                </div>
                                
                                <div class="panel-footer text-right">
                                    <a href="<?php echo base_url();?>index.php/DaftarTugasMahasiswa" class="btn btn-white paper-shadow relative" data-z="0" data-hover-z="1" data-animated>Lihat Semua tugas</a>
                                    <a href="<?php echo base_url();?>index.php/DownloadTugas" class="btn btn-primary paper-shadow relative" data-z="0" data-hover-z="1" data-animated>DOWNLOAD TUGAS <i class="fa fa-plus"></i></a>
                                </div>
                            </div>
                        </div>
						
                        <div class="item col-xs-12 col-lg-6">
                            
                            <ul class="list-group relative paper-shadow" data-hover-z="0.5" data-animated>
                               
                               
                               
                            </ul>
                        </div>
                    </div>
                    <br/>
                    <br/>
                </div>
                <div class="col-md-3">
                    <div class="panel panel-default" data-toggle="panel-collapse" data-open="true">
                        <div class="panel-heading panel-collapse-trigger">
                            <h4 class="panel-title">Menu eLearning</h4>
                        </div>
                        <div class="panel-body list-group">
                            <ul class="list-group list-group-menu">
                                <li class="list-group-item"><a class="link-text-color" href="<?php echo base_url();?>index.php/HomeMahasiswa">Dashboard</a></li>
                                <li class="list-group-item"><a class="link-text-color" href="<?php echo base_url();?>index.php/DaftarMateriMahasiswa"> Materi</a></li>
								<li class="list-group-item"><a class="link-text-color" href="<?php echo base_url();?>index.php/DaftarTugasMahasiswa">Daftar Tugas</a></li>
								<li class="list-group-item"><a class="link-text-color" href="<?php echo base_url();?>index.php/DaftarQuizMahasiswa">Daftar Quiz</a></li>
                                <li class="list-group-item active"><a class="link-text-color" href="<?php echo base_url();?>index.php/ProfileMahasiswa">Profil</a></li>
                                <li class="list-group-item"><a class="link-text-color" href="<?php echo base_url();?>index.php/HomeMahasiswa/logout"><span>Keluar</span></a></li>
                            </ul>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>