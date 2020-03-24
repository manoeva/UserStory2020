@extends('layout')
@section('style')

@endsection
@section('content')
    <!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->

    <!-- slider_area_start -->
    <div class="slider_area" style="height:100vh !important;">
        <div class="slider_active owl-carousel" style="height:100vh !important;">
            <div class="single_slider  d-flex align-items-center slider_bg_1 overlay" style="height:100vh !important;">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-xl-12 col-md-12">
                            <div class="slider_text text-center">
                                <h3 style="font-size:64px;">User Story UI</h3>
                                <p>Buat user story menjadi UI secara otomatis</p>
                                <a href="#" class="btn btn-info"  data-toggle="modal" data-target="#createProject">Buat Project</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- slider_area_end -->
    <!-- modal tambah projek -->
    <!-- Modal -->
    <div class="modal fade" id="createProject" tabindex="-1" role="dialog" aria-labelledby="delete" aria-hidden="true">
      <div class="modal-dialog" role="document" style="margin:10vh 20vw 0 20vw">
          <div class="modal-content" style="width:60vw;">
              <div class="modal-body px-4 py-4">
                <div class="row mb-4">
                  <div class="col-md-8 col-8">
                    <h5 class="modal-title mt-1">Buat Project</h5>
                  </div>
                  <div class="col-md-4 col-4">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="margin-top:5px;">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                </div>
                <form id="createProjectForm" action="{{ route('project.store') }}" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="row mb-3">
                  <div class="col-8">
                      <div class="form-group">
                        <label class="text-body">Nama Project</label>
                        <input type="text" name="name" class="form-control">
                      </div>
                      <div class="form-group">
                        <label class="text-body">Deskripsi Project</label>
                        <textarea class="form-control" name="description" rows="3"></textarea>
                      </div>
                  </div>
                </div>
                </form>
                <div class="row">
                <div class="col align-self-end">
                  <div align="right">
                    <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Batal</button>
                    <button type="submit" form="createProjectForm" class="btn btn-info btn-sm">Simpan</button>
                  </div>
                </div>
                </div>
              </div>
          </div>
       </div>
    </div>
    <!-- end modal -->

    <div class="popular_places_area">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="section_title text-center mb_70">
                        <h3 class="mb-0">Daftar Project</h3>
                        <p>Berikut adalah daftar project yang telah dibuat</p>
                        <button type="button" class="btn btn-info mt-3" data-toggle="modal" data-target="#createProject">
                          Tambah Project
                        </button>
                    </div>
                </div>
            </div>
            <div class="row">
              <div class="col-12">
                <div class="single_place shadow-lg rounded">
                    <div class="place_info mx-3 my-2">
                      <table class="table table-borderless">
                        <thead>
                          <tr>
                            <th scope="col">No</th>
                            <th scope="col" style="width:70%">Nama Project</th>
                            <th scope="col">Aksi</th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php
                            $i = 1;
                          ?>
                          @foreach($project as $document)
                          <tr>
                            <th scope="row">{{$i}}</th>
                            <td>{{$document['name']}}</td>
                            <td>
                              <a href="{{route('project.show',['project_id'=>$document->id()])}}" class="btn btn-sm btn-info">Lihat</a>
                              <a href="#" class="btn btn-sm btn-danger">Hapus</a>
                            </td>
                          </tr>
                          <?php $i++; ?>
                          @endforeach
                        </tbody>
                        </table>
                    </div>
                </div>
              </div>
            </div>
        </div>
    </div>

    <footer class="footer">
        <div class="footer_top">
            <!-- <div class="container">
                <div class="row">
                    <div class="col-xl-4 col-md-6 col-lg-4 ">
                        <div class="footer_widget">
                            <div class="footer_logo">
                                <a href="#">
                                    <img src="img/footer_logo.png" alt="">
                                </a>
                            </div>
                            <p>5th flora, 700/D kings road, green <br> lane New York-1782 <br>
                                <a href="#">+10 367 826 2567</a> <br>
                                <a href="#">contact@carpenter.com</a>
                            </p>
                            <div class="socail_links">
                                <ul>
                                    <li>
                                        <a href="#">
                                            <i class="ti-facebook"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="ti-twitter-alt"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-instagram"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-pinterest"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-youtube-play"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>

                        </div>
                    </div>
                    <div class="col-xl-2 col-md-6 col-lg-2">
                        <div class="footer_widget">
                            <h3 class="footer_title">
                                Company
                            </h3>
                            <ul class="links">
                                <li><a href="#">Pricing</a></li>
                                <li><a href="#">About</a></li>
                                <li><a href="#"> Gallery</a></li>
                                <li><a href="#"> Contact</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 col-lg-3">
                        <div class="footer_widget">
                            <h3 class="footer_title">
                                Popular destination
                            </h3>
                            <ul class="links double_links">
                                <li><a href="#">Indonesia</a></li>
                                <li><a href="#">America</a></li>
                                <li><a href="#">India</a></li>
                                <li><a href="#">Switzerland</a></li>
                                <li><a href="#">Italy</a></li>
                                <li><a href="#">Canada</a></li>
                                <li><a href="#">Franch</a></li>
                                <li><a href="#">England</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 col-lg-3">
                        <div class="footer_widget">
                            <h3 class="footer_title">
                                Instagram
                            </h3>
                            <div class="instagram_feed">
                                <div class="single_insta">
                                    <a href="#">
                                        <img src="img/instagram/1.png" alt="">
                                    </a>
                                </div>
                                <div class="single_insta">
                                    <a href="#">
                                        <img src="img/instagram/2.png" alt="">
                                    </a>
                                </div>
                                <div class="single_insta">
                                    <a href="#">
                                        <img src="img/instagram/3.png" alt="">
                                    </a>
                                </div>
                                <div class="single_insta">
                                    <a href="#">
                                        <img src="img/instagram/4.png" alt="">
                                    </a>
                                </div>
                                <div class="single_insta">
                                    <a href="#">
                                        <img src="img/instagram/5.png" alt="">
                                    </a>
                                </div>
                                <div class="single_insta">
                                    <a href="#">
                                        <img src="img/instagram/6.png" alt="">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->
        </div>
        <div class="copy-right_text">
            <div class="container">
                <div class="footer_border"></div>
                <div class="row">
                    <div class="col-xl-12">
                        <p class="copy_right text-center">
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>


  <!-- Modal -->
  <div class="modal fade custom_search_pop" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="serch_form">
            <input type="text" placeholder="Search" >
            <button type="submit">search</button>
        </div>
      </div>
    </div>
  </div>
@endsection
