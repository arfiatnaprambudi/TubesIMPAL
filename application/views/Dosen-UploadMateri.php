    <div class="container">
        <div class="page-section">
            <div class="row">
                <div class="col-md-9">
                    <!-- Tabbable Widget -->
                    <div class="tabbable paper-shadow relative" data-z="0.5">
                        <!-- Tabs -->
                        <ul class="nav nav-tabs">
                            <li class="active"><a href="website-instructor-course-edit-lessons.html"><i class="fa fa-fw fa-credit-card"></i> <span class="hidden-sm hidden-xs">Lessons</span></a></li>
                        </ul>
                        <!-- // END Tabs -->
                        <!-- Panes -->
                        <div class="tab-content">
                            <div id="lessons" class="tab-pane active">
                                <div class="media v-middle s-container">
                                    
                                    <div class="media-right">
									<form method="post" action="materisimpan.php" enctype="multipart/form-data">
										<table align="center">
											<tr>
												<td>Materi</td>
												<td>:</td>
												<td><input type="file" name="materi" id="materi" class="btn btn-primary paper-shadow relative"/></td>
											</tr>
											<tr>
												<td><input type="submit" name="simpan" value="simpan" class="btn btn-primary paper-shadow relative"></td>
									</form>
											</table>
                                        
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                        <!-- // END Panes -->
                    </div>
                    <!-- // END Tabbable Widget -->
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
                                <li class="list-group-item"><a class="link-text-color" href="<?php echo base_url();?>index.php/Welcome">Dashboard</a></li>
                                <li class="list-group-item"><a class="link-text-color" href="<?php echo base_url();?>index.php/DaftarMateriDosen">Daftar Materi</a></li>
                <li class="list-group-item"><a class="link-text-color" href="<?php echo base_url();?>index.php/DaftarTugasDosen">Daftar Tugas</a></li>
                <li class="list-group-item"><a class="link-text-color" href="<?php echo base_url();?>index.php/DaftarQuizDosen">Daftar Quiz</a></li>
                                <li class="list-group-item"><a class="link-text-color" href="<?php echo base_url();?>index.php/ProfileDosen">Profil</a></li>
                                <li class="list-group-item"><a class="link-text-color" href="<?php echo base_url();?>index.php/Login"><span>Keluar</span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            </div>
            </div>
        </div>
    </div>
