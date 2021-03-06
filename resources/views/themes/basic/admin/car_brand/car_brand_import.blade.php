@extends('admin.layout.admin_index_layout')
@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            {{ trans('admin_common.Car Brands') }}
            <small>{{ trans('admin_common.Import') }}</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="{{ url('admin') }}"><i class="fa fa-dashboard"></i> {{ trans('admin_common.Home') }}</a></li>
            <li><a href="{{ url('admin/carbrand') }}">{{ trans('admin_common.Car Brands') }}</a></li>
            <li class="active">{{ trans('admin_common.Import') }}</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-md-6">
                <div class="box">
                    <div class="box-header with-border">
                      <h3 class="box-title">{{ trans('admin_common.Import Car Brands') }}</h3>
                    </div>
                    <!-- /.box-header -->

                    <form role="form" method="post" name="import_form" id="import_form" enctype="multipart/form-data">
                        <div class="box-body">

                            {!! csrf_field() !!}

                            <div class="form-group required {{ $errors->has('csv_file') ? ' has-error' : '' }}">
                                <label for="csv_file" class="control-label">{{ trans('admin_common.CSV file to be imported') }}</label>
                                <input type="file" name="csv_file" id="csv_file">
                                @if ($errors->has('csv_file'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('csv_file') }}</strong>
                                    </span>
                                @endif
                            </div>

                        </div>
                        <!-- /.box-body -->

                        <div class="box-footer">
                            <button type="submit" class="btn btn-primary">{{ trans('admin_common.Import') }}</button>
                        </div>
                    </form>
                </div>
                <!-- /.box -->
            </div>

            <div class="col-md-6">
                <div class="box">
                    <div class="box-header with-border">
                        <h3 class="box-title">{{ trans('admin_common.CSV Import How to') }}</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <p class="help-block">{{ trans('admin_common.CSV must be comma separed/delimeted, without header, quoted with "') }}</p>
                        <p class="help-block">{{ trans('admin_common.Car Brand must be unique') }}</p>
                        <p class="help-block">{{ trans('admin_common.CSV Fields: Car Brand Name, Car Brand Active (0 = Not Active, 1 = Active)') }}</p>
                        <p class="help-block">
                            <strong>{{ trans('admin_common.Example') }}:</strong><br />
                            "Audi" , "1"<br />
                            "BMW" , "1"<br />
                            "Mercedes" , "1"<br />
                        </p>
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->
            </div>
        </div>
    </section>
    <!-- /.content -->
@endsection

@section('styles')
    <link rel="stylesheet" href="{{ asset('js/chosen/chosen.css') }}" />
    <link rel="stylesheet" href="{{ asset('js/chosen/chosen-bootstrap.css') }}" />
@endsection

@section('js')
    <script src="{{ asset('js/chosen/chosen.jquery.min.js') }}"></script>
@endsection


