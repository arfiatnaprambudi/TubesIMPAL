    
    <div class="container">

        <?php 
        $x = 1;
        foreach ($r as $result) {
        print"<div class=\"page-section\">";
        print"
        <br>
            <div class=\"row\">
                <div class=\"col-md-9\">
                <h1>";
        
        echo $result->nama_matkul;
        print"</h1>
                    <div class=\"row\" data-toggle=\"isotope\" style=\"position: static;\">
                       
                        <div class=\"item col-xs-12 col-lg-6\">
                            <div class=\"panel panel-default paper-shadow\" data-z=\"0.5\">
                                <div class=\"panel-heading\">
                                    <h4 class=\"text-headline margin-none\">Materi Perkuliahan</h4>
                                    <p class=\"text-subhead text-light\">Materi Perkuliahan terakhir anda:</p>
                                </div>
                                 <ul class=\"list-group\">";
                  foreach ($h as $hasil){
                  $a = $hasil->kode_matkul;
                  $b = $result->kode_matkul;
                  if($a==$b){
                  print"<li class=\"list-group-item media v-middle\">
                    <div class=\"media-body\">";
                      $c = $hasil->location;
                      $d = $hasil->filename;
                      print"<a href=\"";echo $c;echo $d;print"\" class=\"text-subhead list-group-link\">";
                        
                        
                        echo $hasil->judul; 
                            
                      

                    print"</div>
                    </li>";}}
                  //<li class="list-group-item media v-middle">
                    //<div class="media-body">
                      //<a href="website-instructor-course-edit-course.html" class="text-subhead list-group-link">Dynamic Programming</a>
                    //</div>
                  
                  //</li>
                print"</ul>
                
                                <div class=\"panel-footer text-right\">
                                    <a href=\"";echo base_url();print"index.php/DaftarMateriDosen\" class=\"btn btn-white paper-shadow relative\" data-z=\"0\" data-hover-z=\"1\" data-animated>Lihat Semua materi</a>
                                    <a href=\"";echo base_url();print"index.php/UploadMateri\" class=\"btn btn-primary paper-shadow relative\" data-z=\"0\" data-hover-z=\"1\" data-animated>UPLOAD MATERI  <i class=\"fa fa-plus\"></i></a>
                                </div>
                            </div>
                        </div>
                        
                        
                        <div class=\"item col-xs-12 col-lg-6\">
                            <div class=\"panel panel-default paper-shadow\" data-z=\"0.5\">
                                <div class=\"panel-heading\">
                                    <h4 class=\"text-headline margin-none\">Quiz</h4>
                                    <p class=\"text-subhead text-light\">Quiz terakhir anda:</p>
                                </div>
                
                                <div class=\"panel-footer text-right\">
                                    <a href=\"";echo base_url();print"index.php/DaftarQuizDosen\" class=\"btn btn-white paper-shadow relative\" data-z=\"0\" data-hover-z=\"1\" data-animated>Lihat Semua quiz</a>
                                    <a href=\"";echo base_url();print"index.php/BuatQuizDosen\" class=\"btn btn-primary paper-shadow relative\" data-z=\"0\" data-hover-z=\"1\" data-animated>BUAT QUIZ  <i class=\"fa fa-plus\"></i></a>
                                </div>
                            </div>
                        </div>";
                        
                        
                        
                        
            
            print"<div class=\"item col-xs-12 col-lg-6\">
                            <div class=\"panel panel-default paper-shadow\" data-z=\"0.5\">
                                <div class=\"panel-heading\">
                                    <div class=\"media v-middle\">
                                        <div class=\"media-body\">
                                            <h4 class=\"text-headline margin-none\">Hasil Quiz</h4>
                                            <p class=\"text-subhead text-light\">Hasil Quiz terakhir:</p>
                                        </div>
                                        <div class=\"media-right\">
                                            <a class=\"btn btn-white btn-flat\" href=\"\">Lihat Semua hasil</a>
                                        </div>
                                    </div>
                                </div>
                
                                <div class=\"table-responsive\">
                                    <table class=\"table text-subhead v-middle\">
                                        <tbody>
                                            <tr>
                                                <td class=\"width-100 text-caption\">
                                                    <div class=\"label label-grey-200 label-xs\">20 Apr 2016</div>
                                                </td>
                                                <td>Kalkulus 1</td>
                                                <td class=\"width-80 text-center\"><a href=\"result_quiz.php\" target=\"_blank\">Hasil</a></td>
                                               
                                            </tr>
                                            
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>";
            
            print"<div class=\"item col-xs-12 col-lg-6\">
                            <div class=\"panel panel-default paper-shadow\" data-z=\"0.5\">
                                <div class=\"panel-heading\">
                                    <h4 class=\"text-headline margin-none\">Tugas Perkuliahan</h4>
                                    <p class=\"text-subhead text-light\">Tugas Perkuliahan terkahir anda:</p>
                                </div>
                 <ul class=\"list-group\">";
                  print"<li class=\"list-group-item media v-middle\">
                    <div class=\"media-body\">
                      <a href=\"website-instructor-course-edit-course.html\" class=\"text-subhead list-group-link\">Latihan 1 Brute Force</a>
                    </div>
                    
                  </li>";
                  //<li class="list-group-item media v-middle">
                    //<div class="media-body">
                      //<a href="website-instructor-course-edit-course.html" class="text-subhead list-group-link">Latihan 2 Dynamic Programming</a>
                    //</div>
                  
                  //</li>
                print"</ul>
                                <div class=\"panel-footer text-right\">
                                    <a href=\"";echo base_url();print"index.php/DaftarTugasDosen\" class=\"btn btn-white paper-shadow relative\" data-z=\"0\" data-hover-z=\"1\" data-animated>Lihat Semua tugas</a>
                                    <a href=\"";echo base_url();print"index.php/UploadTugas\" class=\"btn btn-primary paper-shadow relative\" data-z=\"0\" data-hover-z=\"1\" data-animated>UPLOAD TUGAS  <i class=\"fa fa-plus\"></i></a>
                                </div>
                            </div>
                        </div>
                        
                        
                    </div>
                    <br/>
                    <br/>
                </div>
                <br>
                <br/>

                ";
                if ($x==1){
                    print"
                    <div class=\"col-md-3\">
                    <div class=\"panel panel-default\" data-toggle=\"panel-collapse\" data-open=\"true\">
                        <div class=\"panel-heading panel-collapse-trigger\">
                            <h4 class=\"panel-title\">Menu eLearning </h4>
                        </div>
                        <div class=\"panel-body list-group\">
                            <ul class=\"list-group list-group-menu\">
                                <li class=\"list-group-item active\"><a class=\"link-text-color\" href=\"";echo base_url();print"index.php/HomeDosen\">Dashboard</a></li>
                                <li class=\"list-group-item\"><a class=\"link-text-color\" href=\"";echo base_url();print"index.php/DaftarMateriDosen\">Daftar Materi</a></li>
                <li class=\"list-group-item\"><a class=\"link-text-color\" href=\"";echo base_url();print"index.php/DaftarTugasDosen\">Daftar Tugas</a></li>
                <li class=\"list-group-item\"><a class=\"link-text-color\" href=\"";echo base_url();print"index.php/DaftarQuizDosen\">Daftar Quiz</a></li>
                                <li class=\"list-group-item\"><a class=\"link-text-color\" href=\"";echo base_url();print"index.php/ProfileDosen\">Profil</a></li>
                                <li class=\"list-group-item\"><a class=\"link-text-color\" href=\"";echo base_url();print"index.php/HomeDosen/logout\"><span>Keluar</span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>";

                    }
                $x++;}?>

                
            </div>
        </div>
    </div>