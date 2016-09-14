@extends('layouts.base')

@section('inline-css')
<style>
span.check-mark {
    margin-top: 12px !important;
}
.sp-nd2 .btn {
    border-left: none !important;
    border-radius: 0 !important;
}

hr {
    margin-top: 5px;
}

.cropit-preview {
  /* You can specify preview size in CSS */
  width: 100%;
  height: 300px;
  border-radius: 5px;
  border: 2px solid #EEE;
  cursor: move;
}
</style>
@endsection

@section('content')
@include('partials.flashmessage')

<div class="row">
    <div class="col-md-12">
        @include('partials.topbusinessinfo')
    </div>
</div>
<div class="container-margin" role="main">
    <div class="col-md-3">
        @include('partials.businesssidebar')
    </div>
    <div class="col-md-9">
        <div class="panel panel-default from-menu">
            <div class="panel-heading clearfix">
                <h4 class="panel-title pull-left" style="padding-top: 7.5px; padding-bottom: 7.5px">Add Product</h4>
            </div>
            <form class="form" id="show-product" action="{{ action('ProductController@update', [ 'business' => $business->unique_id, 'products' => $product->unique_id ]) }}" method="POST">
            <input type="hidden" name="_method" value="PUT">
            {{ csrf_field() }}
            <div class="panel-body">
                <div class="row">
                    <div class="col-sm-5">
                        <label>Thumbnails</label>
                        <!-- This wraps the whole cropper -->
                        <div id="image-cropper">
                            <!-- This is where the preview image is displayed -->
                            <div class="cropit-preview"></div>

                            <!-- This range input controls zoom -->
                            <!-- You can add additional elements here, e.g. the image icons -->
                            <div class="row" style="padding-top: 4px;">
                                <div class="col-xs-2">
                                    <span class="label label-primary">Zoom</span>
                                </div>
                                <div class="col-xs-10" style="padding-top: 6px;">
                                    <input type="range" class="cropit-image-zoom-input" style="width: 100%;"/>
                                </div>
                            </div>


                            <!-- This is where user selects new image -->
                            <input type="file" class="cropit-image-input hide" />
                            <input type="hidden" name="img">
                            <button type="button" class="btn btn-sm btn-info btn-upload btn-block btn-margin-fix"><i class="fa fa-upload"></i> Upload Image</button>
                            <!-- The cropit- classes above are needed
                            so cropit can identify these elements -->
                        </div>
                    </div>
                    <div class="col-sm-7">
                        <div class="form-group">
                            <label>Product Name</label>
                            <input type="text" name="product_name" class="form-control" placeholder="Product Name" value="{{ $product->product_name }}">
                        </div>
                        <div class="form-group">
                            <label>Product Description</label>
                            <textarea name="product_description" class="form-control" placeholder="Product Description" rows="13">{{ $product->product_description }}</textarea>
                        </div>
                    </div>
                </div><!-- /.row -->
                <div class="row">
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label>Quantity (In stock)</label>
                            <input name="quantity_in_stock" type="text" class="form-control" placeholder="Quantity" value="{{ $product->quantity_in_stock }}">
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label>Cost (RM/MYR)</label>
                            <input name="cost" type="text" class="form-control" placeholder="Price" value="{{ $product->cost }}">
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label>Selling Price (RM/MYR)</label>
                            <input name="selling_price" type="text" class="form-control" placeholder="Selling Price" value="{{ $product->selling_price }}">
                        </div>
                    </div>
                </div>
            </div>
            <div class="panel-footer clearfix">
                <a href="/business/{{$business->unique_id}}/products" class="btn btn-default">Back</a>
                <button type="submit" class="btn btn-primary pull-right">Save Changes</button>
            </div>
            </form>
        </div>

    </div>
</div> <!-- /container -->

<!-- modal -->
<div class="modal fade add-product-modal-lg" tabindex="-1" role="dialog" aria-labelledby="addProduct">
  <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title" id="myModalLabel">Product Details</h4>
        </div>
        <div class="modal-body">
          ...
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
  </div>
</div>
@endsection

@section('script')
<script src="/components/jquery-cropit/jquery.cropit.js"></script>
<script>
$('#image-cropper').cropit({
    imageState: {
        src: "{{ $imageSrc }}"
    }
});

$('#show-product').on('submit', function () {
    $dataExport = $('#image-cropper').cropit('export', {
        type: 'image/jpeg',
        quality: .9,
        originalSize: false
    });
    $('input[name=img]').val($dataExport);
})
$('.btn-upload').on('click', function () {
    $('.cropit-image-input').click();
});
</script>
@endsection
