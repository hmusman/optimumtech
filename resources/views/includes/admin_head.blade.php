<meta charset="utf-8" />
<title>Optimum Tech</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
<meta content="Themesdesign" name="author" />
<!-- App favicon -->
<link rel="shortcut icon" href="{{ asset('storage/admin/images/logo.png') }}">

 <!-- Plugins css -->
 <link href="{{ asset('assets/libs/dropzone/min/dropzone.min.css') }}" rel="stylesheet" type="text/css" />
<!-- Plugins css -->

<!-- datepicker -->
<link href="{{ asset('assets/libs/air-datepicker/css/datepicker.min.css') }} " rel="stylesheet" type="text/css" />

<!-- jvectormap -->
<link href="{{ asset('assets/libs/jqvmap/jqvmap.min.css') }} " rel="stylesheet" />

<!-- Bootstrap Css -->
<link href="{{ asset('assets/css/bootstrap.min.css') }} " rel="stylesheet" type="text/css" />
<!-- Icons Css -->
<link href="{{ asset('assets/css/icons.min.css') }} " rel="stylesheet" type="text/css" />
<!-- App Css-->
<link href="{{ asset('assets/css/app.min.css') }} " rel="stylesheet" type="text/css" />

<link href="{{ asset('assets/tinymce/tinymce.min.css') }} " rel="stylesheet" type="text/css" />

<link rel="stylesheet" type="text/css" href="{{ asset('assets/libs/sweetalert2/sweetalert2.min.css') }}">
<!-- <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap.min.css"> -->
<style type="text/css">
		.title_btn {
  position: relative;
  cursor: pointer;
}

.title_btn[aria-label]:after {
  opacity:0;
  content: attr(aria-label);
  padding: 4px 8px;
  position: absolute;
  left: 0;
  top: 100%;
  white-space: nowrap;
  z-index: 20;
  background:#2fa97c;
  transition: opacity 0.5s;
  pointer-events:none;
  border-radius: 4px 4px;
  margin-top: 5px;
}

.title_btn[aria-label]:hover:after {
  opacity:1;
  transition-delay:.5s;
}
</style>