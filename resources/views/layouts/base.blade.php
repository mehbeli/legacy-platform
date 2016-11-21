
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" href="../../favicon.ico">

    <title>Jejual.my</title>

    <!-- Bootstrap core CSS -->
    <link href="/components/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="/components/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="/components/datatables/css/dataTables.bootstrap.min.css">
    <link rel="stylesheet" href="/components/datatables-select/css/select.bootstrap.min.css">
    <link rel="stylesheet" href="/components/bootstrap-select/css/bootstrap-select.min.css">
    <link rel="stylesheet" href="/components/sweetalert/sweetalert.css">
    <!-- link href="https://fonts.googleapis.com/css?family=Muli" rel="stylesheet" -->
    <!-- link href="https://fonts.googleapis.com/css?family=Karla" rel="stylesheet" -->
    @yield('vendor-css')

    <!-- Custom styles for this template -->
    <link rel="stylesheet" href="{{ elixir("css/all.css") }}">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    @yield('inline-css')
</head>

<body role="document">

    <!-- Fixed navbar -->
    <nav class="navbar navbar-new navbar-inverse navbar-fixed-top">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">JEJUAL.MY</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                @include('partials.businesslist')
                @if (isset($business) && !empty($business))
                <li class="border-left-solid current-business">
                    <a href="#">{{ $business->business_name }}</a>
                </li>
                @endif
            </ul>
            <ul class="nav navbar-nav navbar-right">
                {{-- include('partials.notification') --}}
                <li class="dropdown border-top-solid profile">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">{{ Auth::user()->name }} <i class="menu-drop fa fa-angle-down"></i></a>
                    <ul class="dropdown-menu">
                        <li><a href="#"><i class="fa fa-fw fa-user"></i> Profile</a></li>
                        <li><a href="#"><i class="fa fa-fw fa-sign-out"></i> Logout</a></li>
                    </ul>
                </li>
            </ul>
        </div><!--/.nav-collapse -->
    </nav>

    <!-- top info -->

    <!-- top info end -->
    <!-- container -->
    <div class="container-margin {{ (isset($notopbar) && $notopbar == true) ? 'no-top-bar' : null }}" role="main">
        <div class="col-md-10 col-md-offset-1">

            @yield('content')

        </div>
    </div> <!-- /container -->

    <!-- Modal -->
    <div class="modal fade" id="details-modal" tabindex="-1" role="dialog" aria-labelledby="details-modal">
        <div class="modal-dialog  modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Modal title</h4>
                </div>
                <div class="modal-body">
                    ...
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="/components/jquery/jquery-1.12.0.min.js"></script>
<!--     <script>window.jQuery || document.write('<script src="bootstrap/js/vendor/jquery.min.js"><\/script>')</script> -->
    <script src="/components/bootstrap/js/bootstrap.min.js"></script>
    <!-- <script src="bootstrap/js/docs.min.js"></script> -->
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <!-- <script src="bootstrap/js/ie10-viewport-bug-workaround.js"></script> -->
    <script>
    $(function () {
        $('[data-toggle="tooltip"]').tooltip()
    });
    </script>
    <script src="/components/datatables/js/jquery.dataTables.min.js"></script>
    <script src="/components/datatables/js/dataTables.bootstrap.min.js"></script>
    <script src="/components/datatables/js/dataTables.responsive.min.js"></script>
    <script src="/components/datatables-select/js/dataTables.select.min.js"></script>
    <script src="/components/datatables/js/responsive.bootstrap.min.js"></script>
    <script src="/components/bootstrap-select/js/bootstrap-select.min.js"></script>
    <script src="/components/sweetalert/sweetalert.min.js"></script>
    <script src="/components/parsleyjs/parsley.min.js"></script>
    <!-- <script src="/components/datatables-checkbox/js/dataTables.checkboxes.min.js"></script> -->
    <script src="/components/momentjs/moment.js"></script>
    <script src="/components/bootstrap-datetimepicker/js/bootstrap-datetimepicker.min.js"></script>
    @yield('script')
</body>
</html>
