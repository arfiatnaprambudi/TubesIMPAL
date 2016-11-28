    <script>

function myFunction() {
    alert(<?php echo $message ?>);
}
</script>
           

    <div class="container">
        <div class="page-section">
            <div class="row">
                <div class="col-md-9">
                    <!-- Tabbable Widget -->
                    <div class="tabbable paper-shadow relative" data-z="0.5">
                        <!-- Tabs -->
                        <ul class="nav nav-tabs">
                            <li class="active"><a href="#"><i class="fa fa-fw fa-credit-card"></i> <span class="hidden-sm hidden-xs">Upload Materi</span></a></li>
                        </ul>
                        <!-- // END Tabs -->
                        <!-- Panes -->
                        <div class="tab-content">
                            <?php echo form_open_multipart('UploadMateri/upload_process'); ?>
                            <div id="lessons" class="tab-pane active">
                                <div class="media v-middle s-container">
                                    <div class="form-group">
                    <label for="select" class="col-sm-3 control-label">Judul</label>
                    <div class="col-sm-4 col-md-2">
                      <input type="text" class="form-control" placeholder="Judul Materi" value="" name="judul">
                    </div>
                    <br><br><br>
                                    <div class="form-group">
                    <label for="select" class="col-sm-3 control-label">Pilih Matkul</label>
                    <div class="col-sm-9 col-md-9">
                      <select id="select" class="form-control select2" name="kode">
                        <option value="1">Desain Analisis Algoritma</option>
                        <option value="2">Jaringan Komputer</option>
                        <option value="3">Teori Bahasa Automata</option>
                        <option value="4">Implementasi Perangkat Lunak</option>
                      </select>
                    </div>
                    <br><br><br>
                                    <div class="media-right">
									<form method="post" action="materisimpan.php" enctype="multipart/form-data">
										<input type="file" name="materi" id="materi" class="btn btn-primary paper-shadow relative"/></td>
									<br><br><br>		
												<input type="submit" name="simpan" value="simpan" class="btn btn-primary paper-shadow relative" onclick="myFunction()"></td>
                                                
                                                </form></div>
									</form>
											</table>
                                        
                                    </div>
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
                                <li class="list-group-item"><a class="link-text-color" href="<?php echo base_url();?>index.php/HomeDosen/logout"><span>Keluar</span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            </div>
            </div>
        </div>
    </div>
