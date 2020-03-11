<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>User Story</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- <link rel="manifest" href="site.webmanifest"> -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    <!-- <link rel="stylesheet" href="{{asset('admin/css/bootstrap.min.css')}}"> -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('admin/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('admin/css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{asset('admin/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('admin/css/themify-icons.css')}}">
    <link rel="stylesheet" href="{{asset('admin/css/nice-select.css')}}">
    <link rel="stylesheet" href="{{asset('admin/css/flaticon.css')}}">
    <link rel="stylesheet" href="{{asset('admin/css/gijgo.css')}}">
    <link rel="stylesheet" href="{{asset('admin/css/animate.css')}}">
    <link rel="stylesheet" href="{{asset('admin/css/slick.css')}}">
    <link rel="stylesheet" href="{{asset('admin/css/slicknav.css')}}">
    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/themes/smoothness/jquery-ui.css">

    <link rel="stylesheet" href="{{asset('admin/css/style.css')}}">
    <!-- <link rel="stylesheet" href="css/responsive.css"> -->
</head>

<body>
    <!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->

    <!-- header-start -->
    <header>
        <!-- <div class="header-area ">
            <div id="sticky-header" class="main-header-area">
                <div class="container-fluid">
                    <div class="header_bottom_border">
                        <div class="row align-items-center">
                            <div class="col-xl-2 col-lg-2">
                                <div class="logo">
                                    <a href="index.html">
                                        <img src="img/logo.png" alt="">
                                    </a>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6">
                                <div class="main-menu  d-none d-lg-block">
                                    <nav>
                                        <ul id="navigation">
                                            <li><a class="active" href="index.html">home</a></li>
                                            <li><a href="about.html">About</a></li>
                                            <li><a class="" href="travel_destination.html">Destination</a></l/li>
                                            <li><a href="#">pages <i class="ti-angle-down"></i></a>
                                                <ul class="submenu">
                                                        <li><a href="destination_details.html">Destinations details</a></li>
                                                        <li><a href="elements.html">elements</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="#">blog <i class="ti-angle-down"></i></a>
                                                <ul class="submenu">
                                                    <li><a href="blog.html">blog</a></li>
                                                    <li><a href="single-blog.html">single-blog</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="contact.html">Contact</a></li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 d-none d-lg-block">
                                <div class="social_wrap d-flex align-items-center justify-content-end">
                                    <div class="number">
                                        <p> <i class="fa fa-phone"></i> 10(256)-928 256</p>
                                    </div>
                                    <div class="social_links d-none d-xl-block">
                                        <ul>
                                            <li><a href="#"> <i class="fa fa-instagram"></i> </a></li>
                                            <li><a href="#"> <i class="fa fa-linkedin"></i> </a></li>
                                            <li><a href="#"> <i class="fa fa-facebook"></i> </a></li>
                                            <li><a href="#"> <i class="fa fa-google-plus"></i> </a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="seach_icon">
                                <a data-toggle="modal" data-target="#exampleModalCenter" href="#">
                                    <i class="fa fa-search"></i>
                                </a>
                            </div>
                            <div class="col-12">
                                <div class="mobile_menu d-block d-lg-none"></div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div> -->
    </header>
    <!-- header-end -->

    <div class="popular_places_area">
        <div class="container">
          <div class="row ml-3">
            <div class="col-12">
              <div class="single_place shadow-lg pl-1" style="width:40px; height:40px;border-radius:50%;">
                <div class="place_info p-0 ml-2 mt-2">
                  <a href="{{route('project.show',['project_id'=>$project_id])}}"><i class="fa fa-arrow-left text-info"></i></a>
                </div>
              </div>
            </div>
          </div>
            <div class="row ml-3">
                <div class="col-lg-8">
                    <div class="section_title text-left mb_70">
                        <h3>Fitur 1</h3>
                        <p class="mb-5">Descriptive text of what is desired  In order to realize a named business value  As an explicit system actor ....</p>
                        <button type="button" class="btn btn-info" data-toggle="modal" data-target="#createScenario">
                          Tambah Skenario
                        </button>
                        <!-- Modal -->
                        <div class="modal fade" id="createScenario" tabindex="-1" role="dialog" aria-labelledby="delete" aria-hidden="true">
                          <div class="modal-dialog" role="document" style="margin:10vh 20vw 0 20vw">
                              <div class="modal-content" style="width:60vw;">
                                  <div class="modal-body px-4 py-4">
                                    <div class="row mb-4">
                                      <div class="col-md-8 col-8">
                                        <h5 class="modal-title mt-1">Buat Skenario</h5>
                                      </div>
                                      <div class="col-md-4 col-4">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="margin-top:5px;">
                                          <span aria-hidden="true">&times;</span>
                                        </button>
                                      </div>
                                    </div>
                                    <form>
                                    <div class="row mb-3">
                                      <div class="col-6">
                                          <div class="form-group">
                                            <label class="text-body">Nama Skenario</label>
                                            <input type="text" class="form-control">
                                          </div>
                                      </div>
                                    </div>
                                    <div class="row">
                                      <div class="col-8">
                                        <div class="multi-field-wrapper">
                                          <div class="multi-fields">
                                            <div class="multi-field">
                                              <div class="row">
                                                <div class="col-3">
                                                  <p class="mt-1 text-body">Given</p>
                                                </div>
                                                <div class="col-9">
                                                  <div class="input-group mb-3">
                                                    <input type="text" name="tag[]" class="form-control">
                                                    <!-- <div class="input-group-append">
                                                      <button class="btn btn-danger remove-field" type="button">Hapus</button>
                                                    </div> -->
                                                  </div>
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                      </div>
                                      </div>
                                    </div>
                                    <div class="row">
                                      <div class="col-8">
                                        <div class="multi-field-wrapper">
                                          <div class="multi-fields">
                                            <div class="multi-field">
                                              <div class="row">
                                                <div class="col-3">
                                                  <p class="mt-1 text-body">When</p>
                                                </div>
                                                <div class="col-9">
                                                  <div class="input-group mb-3">
                                                    <input type="text" name="tag[]" class="form-control">
                                                    <!-- <div class="input-group-append">
                                                      <button class="btn btn-danger remove-field" type="button">Hapus</button>
                                                    </div> -->
                                                  </div>
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                        <button type="button" class="add-field btn btn-info btn-sm">Tambah And</button>
                                      </div>
                                      </div>
                                    </div>
                                    <div class="row">
                                      <div class="col-8">
                                        <div class="multi-field-wrapper">
                                          <div class="multi-fields">
                                            <div class="multi-field">
                                              <div class="row">
                                                <div class="col-3">
                                                  <p class="mt-1 text-body">Then</p>
                                                </div>
                                                <div class="col-9">
                                                  <div class="input-group mb-3">
                                                    <input type="text" name="tag[]" class="form-control">
                                                    <!-- <div class="input-group-append">
                                                      <button class="btn btn-danger remove-field" type="button">Hapus</button>
                                                    </div> -->
                                                  </div>
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                      </div>
                                      </div>
                                    </div>
                                    </form>
                                    <div class="row">
                                    <div class="col align-self-end">
                                      <div align="right">
                                        <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Batal</button>
                                        <a href="#">
                                           <button type="button" class="btn btn-info btn-sm">Simpan</button>
                                        </a>
                                      </div>
                                    </div>
                                    </div>
                                  </div>
                              </div>
                           </div>
                        </div>
                        <!-- end modal -->
                    </div>
                </div>
            </div>

            <!-- card skenario -->
            <div class="row">
              <div class="col-12">
                <div class="single_place shadow-lg rounded">
                    <div class="place_info mx-3 my-2">
                      <div class="row">
                        <div class="col-8">
                          <h4 class="mt-1">Skenario 1</h4>
                        </div>
                        <div class="col-4">
                          <div class="float-right">
                            <a href="#" class="btn btn-sm btn-info">Edit</a>
                            <a href="#" class="btn btn-sm btn-danger">Hapus</a>
                          </div>
                        </div>
                      </div>
                      <hr>
                      <table class="table table-borderless">
                        <tbody>
                          <tr>
                            <td style="width:20%;"><strong>Given</strong></td>
                            <td>I am on "login.html"</td>
                          </tr>
                          <tr>
                            <td style="width:20%;"><strong>When</strong></td>
                            <td>I am in 'form:login'</td>
                          </tr>
                          <tr>
                            <td style="width:20%;"><strong>And</strong></td>
                            <td>I am fill 'input:email'</td>
                          </tr>
                          <tr>
                            <td style="width:20%;"><strong>And</strong></td>
                            <td>I am fill 'input:password'</td>
                          </tr>
                          <tr>
                            <td style="width:20%;"><strong>And</strong></td>
                            <td>I am press 'button:login'</td>
                          </tr>
                          <tr>
                            <td style="width:20%;"><strong>Then</strong></td>
                            <td>I am should be on "index.html"</td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                </div>
              </div>
            </div>
            <!-- end card scenario -->

        </div>
    </div>
    <footer class="footer">
        <!-- <div class="footer_top">
            <div class="container">
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
            </div>
        </div> -->
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
    <!-- link that opens popup -->
<!--
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://static.codepen.io/assets/common/stopExecutionOnTimeout-de7e2ef6bfefd24b79a3f68b414b87b8db5b08439cac3f1012092b2290c719cd.js"></script>

    <script src=" https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"> </script> -->
    <!-- JS here -->
    <script src="{{asset('admin/js/vendor/modernizr-3.5.0.min.js')}}"></script>
    <script src="{{asset('admin/js/vendor/jquery-1.12.4.min.js')}}"></script>
    <!-- <script src="{{asset('admin/js/popper.min.js')}}"></script> -->
    <!-- <script src="{{asset('admin/js/bootstrap.min.js')}}"></script> -->
    <script src="{{asset('admin/js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('admin/js/isotope.pkgd.min.js')}}"></script>
    <script src="{{asset('admin/js/ajax-form.js')}}"></script>
    <script src="{{asset('admin/js/waypoints.min.js')}}"></script>
    <script src="{{asset('admin/js/jquery.counterup.min.js')}}"></script>
    <script src="{{asset('admin/js/imagesloaded.pkgd.min.js')}}"></script>
    <script src="{{asset('admin/js/scrollIt.js')}}"></script>
    <script src="{{asset('admin/js/jquery.scrollUp.min.js')}}"></script>
    <script src="{{asset('admin/js/wow.min.js')}}"></script>
    <script src="{{asset('admin/js/nice-select.min.js')}}"></script>
    <script src="{{asset('admin/js/jquery.slicknav.min.js')}}"></script>
    <script src="{{asset('admin/js/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{asset('admin/js/plugins.js')}}"></script>
    <script src="{{asset('admin/js/gijgo.min.js')}}"></script>
    <script src="{{asset('admin/js/slick.min.js')}}"></script>

    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>



    <!--contact js-->
    <script src="{{asset('admin/js/contact.js')}}"></script>
    <script src="{{asset('admin/js/jquery.ajaxchimp.min.js')}}"></script>
    <script src="{{asset('admin/js/jquery.form.js')}}"></script>
    <script src="{{asset('admin/js/jquery.validate.min.js')}}"></script>
    <script src="{{asset('admin/js/mail-script.js')}}"></script>


    <script src="{{asset('admin/js/main.js')}}"></script>
    <script>
        $('#datepicker').datepicker({
            iconsLibrary: 'fontawesome',
            icons: {
             rightIcon: '<span class="fa fa-caret-down"></span>'
         }
        });
        $('.multi-field-wrapper').each(function() {
            var $wrapper = $('.multi-fields', this);
            $(".add-field", $(this)).click(function(e) {
                var template = '<div class="multi-field">'+
                  '<div class="row">'+
                    '<div class="col-3">'+
                      '<p class="mt-1 text-body">And</p>'+
                    '</div>'+
                    '<div class="col-9">'+
                      '<div class="input-group mb-3">'+
                        '<input type="text" name="tag[]" class="form-control">'+
                        '<div class="input-group-append">'+
                          '<button class="btn btn-danger remove-field" type="button">Hapus</button>'+
                        '</div>'+
                      '</div>'+
                    '</div>'+
                  '</div>'+
                '</div>'
                $(template).appendTo($wrapper)
            });
            $('.input-group-append .remove-field', $wrapper).click(function() {
                if ($('.multi-field', $wrapper).length > 1)
                    $(this).parent('.input-group-append').parent('.input-group').parent('.col-9').parent('.row').parent('.multi-field').remove();
            });
        });
    </script>
</body>

</html>
