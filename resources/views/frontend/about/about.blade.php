@extends('layouts_frontend._main')

@section('content')
<section class="breadcrumb-area bg-img bg-overlay" style="background-image: url(img/bg-img/41.jpg);">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="breadcrumb-content">
                        <h2>TENTANG WARAWARA</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Breadcrumb Area End ##### -->

    <!-- ##### Breadcrumb Area Start ##### -->
    <div class="mag-breadcrumb py-5">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#"><i class="fa fa-home" aria-hidden="true"></i> Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">About</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Breadcrumb Area End ##### -->

    <!-- ##### Archive Post Area Start ##### -->
    <div class="archive-post-area">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-xl-12">
                  
                  <div class="feature-video-posts mb-30">
                    <ul class="nav nav-tabs nav-justified">
                        <li class="nav-item">
                            <a class="nav-link active show" data-toggle="tab" href="#Warawaraproject"><i class="fas fa-user"></i>  &nbsp;Warawaraproject</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#balkon_seni"><i class="fa fa-play"></i>  &nbsp;Balkon Seni</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#Suarakata"><i class="fa fa-play"></i>  &nbsp;Suarakata</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#Sastramudita"><i class="fa fa-play"></i>  &nbsp;Sastramudita</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#Nastyawala"><i class="fa fa-play"></i>  &nbsp;Nastyawala</a>
                        </li>
                    </ul>
                    <br>
                    <div class="tab-content">
                        
                        <div class="tab-pane container-fluid fade active show" id="Warawaraproject">
                          <p style="font-size: 15px">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Warawaraproject merupakan startup yang bergerak dibidang media kreatif. Saat ini fokus pada usaha penyebarluasan informasi Seni, Sastra, dan Budaya di .uruh Indonesia. Tujuan utama dibentuknya media informasi adalah sebagai wadah yang akan menjembatani antara dunia seni dengan dunia rnasyaralcat secara umum untuk dapat saling berkolaborasi secara positif </p>
                          <br><br>
                          <div class="row">
                              <div class="col-12 col-lg-3 mb-50 text-center">
                                 <img src="{{ url('assets_frontend/img/warawara_team/Soffyaranti.jpg') }}" class="responsive" style="border-radius: 50%;">
                                 <p><b>Soffya Ranti</b>
                                 <br><span style="font-size:0.8em;">Jurnalis Budaya</span></p>
                              </div>
                              <div class="col-12 col-lg-3 mb-50 text-center">
                                 <img src="{{ url('assets_frontend/img/warawara_team/amel.jpg') }}" class="responsive" style="border-radius: 50%;">
                                 <p><b>Amel</b>
                                 <br><span style="font-size:0.8em;">Jurnalis Budaya</span></p>
                              </div>
                              <div class="col-12 col-lg-3 mb-50 text-center">
                                 <img src="{{ url('assets_frontend/img/warawara_team/saniatus.jpg') }}" class="responsive" style="border-radius: 50%;">
                                 <p><b>Saniatus Solekhah</b>
                                 <br><span style="font-size:0.8em;">Bendahara</span></p>
                              </div>
                              <div class="col-12 col-lg-3 mb-50 text-center">
                                 <img src="{{ url('assets_frontend/img/warawara_team/adnan.jpg') }}" class="responsive" style="border-radius: 50%;">
                                 <p><b>Adnan Guntur</b>
                                 <br><span style="font-size:0.8em;">Co-Founder</span></p>
                              </div>
                          </div>
                          <div class="row">
                              <div class="col-12 col-lg-3 mb-50 text-center">
                                 <img src="{{ url('assets_frontend/img/warawara_team/tina.jpg') }}" class="responsive" style="border-radius: 50%;">
                                 <p><b>Tinna Afeeril</b>
                                 <br><span style="font-size:0.8em;">Brand Ambassador</span></p>
                              </div>
                              <div class="col-12 col-lg-3 mb-50 text-center">
                                 <img src="{{ url('assets_frontend/img/warawara_team/novi.jpg') }}" class="responsive" style="border-radius: 50%;">
                                 <p><b>Novi Kurniawan</b>
                                 <br><span style="font-size:0.8em;">Photographer</span></p>
                              </div>
                             
                          </div>
                        </div>
                        <div class="tab-pane container-fluid fade" id="balkon_seni">
                          
                           {{--  <div class="row">
                              <div class="col-12 col-lg-3 mb-50 text-center">
                                 <img src="{{ url('assets_frontend/img/warawara_team/Soffyaranti.jpg') }}" class="responsive" style="border-radius: 50%;">
                                 <p><b>Soffya Ranti</b>
                                 <br><span style="font-size:0.8em;">Jurnalis Budaya</span></p>
                              </div>
                              <div class="col-12 col-lg-3 mb-50 text-center">
                                 <img src="{{ url('assets_frontend/img/warawara_team/Soffyaranti.jpg') }}" class="responsive" style="border-radius: 50%;">
                                 <p><b>Dimas Jayasrana</b>
                                 <br><span style="font-size:0.8em;">Founder | CEO</span></p>
                              </div>
                          </div> --}}

                        </div>
                        <div class="tab-pane container-fluid fade" id="Suarakata">
                          
                          <p style="font-size: 15px">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Suara Kata merupakan Sebuah media yang bergerak dan berproses dalam
                          merawat karya sastra khususnya puisi, melalui pembacaan
                          dan musikalisasi puisi.
                          Suara Kata bertujuan untuk memberi kesempatan dan
                          peluang kepada para penyair atau siapapun yang bermimpi
                          menjadinya, untuk menyuarakan, aktif berpartisipasi, dan
                          mengapresiasi karya sastra-khususnya puisi. </p>
                          <br><br>
                          <div class="row">
                              <div class="col-12 col-lg-3 mb-50 text-center">
                                 <img src="{{ url('assets_frontend/img/warawara_team/inas.jpg') }}" class="responsive" style="border-radius: 50%;">
                                 <p><b>Inas Hanifah</b>
                                 <br><span style="font-size:0.8em;">Director of Photography</span></p>
                              </div>
                              <div class="col-12 col-lg-3 mb-50 text-center">
                                 <img src="{{ url('assets_frontend/img/warawara_team/ahmad.jpg') }}" class="responsive" style="border-radius: 50%;">
                                 <p><b>Ahmad Fahmik</b>
                                 <br><span style="font-size:0.8em;">Sound Engineer</span></p>
                              </div>
                              <div class="col-12 col-lg-3 mb-50 text-center">
                                 <img src="{{ url('assets_frontend/img/warawara_team/azzam.jpg') }}" class="responsive" style="border-radius: 50%;">
                                 <p><b>Azam Annajah</b>
                                 <br><span style="font-size:0.8em;">Video Editor</span></p>
                              </div>
                              <div class="col-12 col-lg-3 mb-50 text-center">
                                 <img src="{{ url('assets_frontend/img/warawara_team/duwi.jpg') }}" class="responsive" style="border-radius: 50%;">
                                 <p><b>Duwi Rachmawati</b>
                                 <br><span style="font-size:0.8em;">Illustrator</span></p>
                              </div>
                          </div>

                        </div>
                        <div class="tab-pane container-fluid fade" id="Sastramudita">
                          
                          <p style="font-size: 15px">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pramudita Sastra merupakan program publikasi karya sastra berupa puisi setiap hari Minggu di akun Instagram Warawaraproject </p>
                          <br><br>
                          <div class="row">
                              <div class="col-12 col-lg-3 mb-50 text-center">
                                 <img src="{{ url('assets_frontend/img/warawara_team/sakinah.jpg') }}" class="responsive" style="border-radius: 50%;">
                                 <p><b>Sakinah</b>
                                 <br><span style="font-size:0.8em;">Project manager</span></p>
                              </div>
                              <div class="col-12 col-lg-3 mb-50 text-center">
                                 <img src="{{ url('assets_frontend/img/warawara_team/pipit.jpg') }}" class="responsive" style="border-radius: 50%;">
                                 <p><b>Pipit</b>
                                 <br><span style="font-size:0.8em;">Desain Graphis</span></p>
                              </div>
                          </div>

                        </div>
                        <div class="tab-pane container-fluid fade" id="Nastyawala">
                          
                          <p style="font-size: 15px">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Nastyawala merupakan koperasi yang dikelola oleh Warawaraproject. Kami memiliki visi untuk membangun ekosistem kreatif bagi teman-teman UMKM berbasis budaya. Selain itu juga menjual beberapa Merchandise Official seperti Pembatas Buku Wayang, Gantungan Kunci, Kaos, dan sebagainya </p>
                          <br><br>
                          {{-- <div class="row">
                              <div class="col-12 col-lg-3 mb-50 text-center">
                                 <img src="{{ url('assets_frontend/img/warawara_team/s.jpg') }}" class="responsive" style="border-radius: 50%;">
                                 <p><b>Soffya Ranti</b>
                                 <br><span style="font-size:0.8em;">Jurnalis Budaya</span></p>
                              </div>
                              <div class="col-12 col-lg-3 mb-50 text-center">
                                 <img src="{{ url('assets_frontend/img/warawara_team/Soffyaranti.jpg') }}" class="responsive" style="border-radius: 50%;">
                                 <p><b>Dimas Jayasrana</b>
                                 <br><span style="font-size:0.8em;">Founder | CEO</span></p>
                              </div>
                          </div> --}}

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('extra_scripts')
<script type="text/javascript">
 
</script>
@endsection