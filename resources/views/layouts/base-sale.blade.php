
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

    <title>Theme Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="/components/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="/components/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="/components/datatables/css/dataTables.bootstrap.min.css">
    <link rel="stylesheet" href="/components/bootstrap-select/css/bootstrap-select.min.css">
    <link rel="stylesheet" href="/components/sweetalert/sweetalert.css">
    @yield('vendor-css')

    <!-- Custom styles for this template -->
    <link rel="stylesheet" href="/css/sale.css">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    @yield('inline-css')
</head>

<body role="document" class="open-order">

    @yield('content')

    <div class="open-table-footer">
        &copy; Copyright 2016. Powered by Jejual
    </div>

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
                    <button type="button" class="btn btn-success">Add to Cart</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
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
    <script src="/components/datatables/js/responsive.bootstrap.min.js"></script>
    <script src="/components/bootstrap-select/js/bootstrap-select.min.js"></script>
    <script src="/components/sweetalert/sweetalert.min.js"></script>
    <script src="/components/parsleyjs/parsley.min.js"></script>
    @yield('script')
</body>
</html>
