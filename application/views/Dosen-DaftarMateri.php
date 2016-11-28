
  <div class="container">
    <?php 
        $x = 1;
        foreach ($r as $result) {
    print"<div class=\"page-section\">
      <div class=\"row\">

        <div class=\"col-md-9\">
        <h1>"; echo $result->nama_matkul; print"</h1>

          <div class=\"row\" data-toggle=\"isotope\">

            <div class=\"item col-xs-12 col-sm-6 col-lg-4\">
              <div class=\"panel panel-default paper-shadow\" data-z=\"0.5\">

                <div class=\"cover overlay cover-image-full hover\">
                  <span class=\"\"></span>
                  <a href=\"website-instructor-course-edit-course.html\" class=\"\">
                    <span class=\"v-center\">
                <i class=\"\"></i>
            </span>
                  </a>

                  <a href=\"website-instructor-course-edit-course.html\" class=\"\">
                    <span class=\"v-center\">
                <span class=\"btn btn-circle btn-white btn-lg\"><i class=\"fa fa-graduation-cap\"></i></span>
                    </span>
                  </a>

                </div>

                <div class=\"panel-body\">
                  <h4 class=\"text-headline margin-v-0-10\"><a href=\"website-instructor-course-edit-course.html\">"; echo $result->judul; print"</a></h4>

                </div>
                <hr class=\"margin-none\" />
                <div class=\"panel-body\">

                  <a class=\"btn btn-white btn-flat paper-shadow relative\" data-z=\"0\" data-hover-z=\"1\" data-animated href=\"website-instructor-course-edit-course.html\"><i class=\"fa fa-fw fa-pencil\"></i> Edit course</a>

                </div>

              </div>
            </div>
            
            <div class=\"item col-xs-12 col-sm-6 col-lg-4\">
              <div class=\"panel panel-default paper-shadow\" data-z=\"0.5\">

                <div class=\"cover overlay cover-image-full hover\">
                  <span class=\"img icon-block height-150 bg-grey-200\"></span>
                  <a href=\"";echo base_url();print"index.php/UploadMateri\"  class=\"padding-none overlay overlay-full icon-block bg-grey-200\">
                    <span class=\"v-center\">
                <i class=\"fa fa-plus text-grey-600\"></i>
            </span>
                  </a>

                </div>

              </div>
            </div>

          </div>";}?>
          
          
        </div>
        <div class="col-md-3">
                    <div class="panel panel-default" data-toggle="panel-collapse" data-open="true">
                        <div class="panel-heading panel-collapse-trigger">
                            <h4 class="panel-title">Menu eLearning</h4>
                        </div>
                        <div class="panel-body list-group">
                            <ul class="list-group list-group-menu">
                                <li class="list-group-item"><a class="link-text-color" href="<?php echo base_url();?>index.php/HomeDosen">Dashboard</a></li>
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