<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--favicon-->
	<link rel="icon" href="assets/images/favicon-32x32.png" type="image/png" />
	<!--plugins-->
	@yield("style")
	<link href="../assets/plugins/simplebar/css/simplebar.css" rel="stylesheet" />
	<link href="../assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet" />
	<link href="../assets/plugins/metismenu/css/metisMenu.min.css" rel="stylesheet" />
	<!-- loader-->
	<link href="../assets/css/pace.min.css" rel="stylesheet" />
	<script src="../assets/js/pace.min.js"></script>
	<!-- Bootstrap CSS -->
	<link href="../assets/css/bootstrap.min.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
	<link href="../assets/css/app.css" rel="stylesheet">
	<link href="../assets/css/icons.css" rel="stylesheet">

    <!-- Theme Style CSS -->
    <link rel="../stylesheet" href="assets/css/dark-theme.css" />
    <link rel="../stylesheet" href="assets/css/semi-dark.css" />
    <link rel="../stylesheet" href="assets/css/header-colors.css" />
	<link href="https://cdn.jsdelivr.net/npm/tom-select@2.0.1/dist/css/tom-select.css" rel="stylesheet">
	<script src="https://cdn.jsdelivr.net/npm/tom-select@2.0.1/dist/js/tom-select.complete.min.js"></script>	
    <title>Serendipity</title>
	
</head>

<body>
	<!--wrapper-->
	<div class="wrapper">
		<!--start header -->
		@include("layouts.header")
		<!--end header -->
		<!--navigation-->
		@include("layouts.nav")
		<!--end navigation-->
		<!--start page wrapper -->
		@yield("wrapper")
		<!--end page wrapper -->
		<!--start overlay-->
		<div class="overlay toggle-icon"></div>
		<!--end overlay-->
		<!--Start Back To Top Button--> <a href="javaScript:;" class="back-to-top"><i class='bx bxs-up-arrow-alt'></i></a>
		<!--End Back To Top Button-->
		<footer class="page-footer">
			<p class="mb-0">Copyright © 2021. All right reserved. SERendipity.</p>
		</footer>
	</div>
	<!--end wrapper-->
    <!--start switcher-->
            </div>
        </div>
    </div>
    <!--end switcher-->
	<!-- Bootstrap JS -->
	<script src="../assets/js/bootstrap.bundle.min.js"></script>
	<!--plugins-->
	<script src="../assets/js/jquery.min.js"></script>
	<script src="../assets/plugins/simplebar/js/simplebar.min.js"></script>
	<script src="../assets/plugins/metismenu/js/metisMenu.min.js"></script>
	<script src="../assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js"></script>
	<script src="../assets/js/vue.js"></script>
	<script src="../assets/js/axios.min.js"></script>
	<!--app JS-->
	<script src="assets/js/kitfontawesome.js"></script>
	<script src="assets/js/app.js"></script>
	<script src="https://unpkg.com/@popperjs/core@2/dist/umd/popper.js"></script>
	@yield("script")
</body>

<script type="text/javascript">
var app = new Vue({
  el: '#listOffert',
  data: {
	lts_offerts: []
  },
  mounted () {
    axios
      .get('/getAllServices')
      .then(response => (
		  response.data != [] ? this.lts_offerts = response.data.List : []
		  ))
  },
  methods: {
    getlstOffertGeneration: function (id){
		axios.get('/EducativeOffer/'+id)
		.then(function (response) {
			console.log(response);
		})
		.catch(function (error) {
			console.log(error);
		});
	}
  }
})
</script>

</html>
