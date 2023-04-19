<!DOCTYPE html>
<html lang="fr">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Skill Techology</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="backend/css/themify-icons.css">
  <link rel="stylesheet" href="backend/css/vendor.bundle.base.css">
  <link rel="stylesheet" href="backend/css/vendor.bundle.addons.css">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="backend/css/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="backend/images/logo_2H_tech.png" />
</head>
<body>
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->



            {{--Start navbar 1--}}

                    @include("include.navbar1")

            {{--End navbar 1--}}


    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_sidebar.html -->


            {{--Start navbar2--}}

            @include("include.navbar2")


            {{--End navbar2--}}




 <!-- partial -->


            {{--Start content--}}

            <div class="main-panel">
                <div class="content-wrapper">
                            @yield('contenu')
                            <footer class="footer">
                                <div class="d-sm-flex justify-content-center justify-content-sm-between">
                                  <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2023 <a href="https://www.urbanui.com/" target="_blank">ulrich fedjo</a>.</span>
                                  <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Syll Technology<i class="ti-heart text-danger ml-1"></i></span>
                                </div>
                              </footer>
                </div>
            </div>



            {{--Start content--}}

    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

  <!-- plugins:js -->
  <script src="backend/js/vendor.bundle.base.js"></script>
  <script src="backend/js/vendor.bundle.addons.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page-->
  <!-- End plugin js for this page-->
  <!-- inject:js -->
  <script src="backend/js/off-canvas.js"></script>
  <script src="backend/js/hoverable-collapse.js"></script>
  <script src="backend/js/template.js"></script>
  <script src="backend/js/settings.js"></script>
  <script src="backend/js/todolist.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  @yield('scripts')
  <!-- End custom js for this page-->
</body>

</html>