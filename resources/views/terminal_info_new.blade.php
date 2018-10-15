@extends('layouts.app')

@section('content')

<div class="row mt">
    <div class="col-lg-12">
        <div class="form-panel">
            <h1 class="mb">端末情報新規登録</h1>
            <form id="form1" class="form-horizontal style-form" method="POST" action="{{ route('terminal_info_create') }}">
                @csrf

                <div class="form-group">
                    <label class="col-md-2 control-label"><i class="fa fa-laptop"></i>製品名</label>
                        <div class="col-md-4">
                        @if ($errors->has('product_name'))
                            <div class="has-error">
                                {{ Form::text('product_name',null, ['placeholder' => '入力してください', 'class' => 'form-control']) }}
                                <span class="text-danger">{{$errors->first('product_name')}}</span>
                            </div>
                        @else
                            {{ Form::text('product_name',null, ['placeholder' => '入力してください', 'class' => 'form-control']) }}
                        @endif
                        </div>
                    <label class="col-md-2 control-label">メーカー</label>
                        <div class="col-md-4">
                        @if ($errors->has('producer'))
                            <div class="has-error">
                                {{ Form::text('producer', null, ['placeholder' => '入力してください', 'class' => 'form-control']) }}
                                <span class="text-danger">{{$errors->first('producer')}}</span>
                            </div>
                        @else
                            {{ Form::text('producer', null, ['placeholder' => '入力してください', 'class' => 'form-control']) }}
                        @endif
                        </div>
                </div>
                <div class="form-group">
                    <label class="col-md-2 control-label">モデル番号</label>
                        <div class="col-md-4">
                        @if ($errors->has('model_number'))
                            <div class="has-error">
                                {{ Form::text('model_number',null, ['placeholder' => '入力してください', 'class' => 'form-control']) }}
                                <span class="text-danger">{{$errors->first('model_number')}}</span>
                            </div>
                        @else
                            {{ Form::text('model_number',null, ['placeholder' => '入力してください', 'class' => 'form-control']) }}
                        @endif
                        </div>
                </div>


                <div class="row">
                    <div class="col-md-1 pull-right">
                        <button id="check" type="button" class="center-block btn btn-round btn-success">登録</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection

@section('scripts')
    <script>
    $('#check').click((event) => {
        swal({
            title: 'この情報で登録しますか?',
            text: "",
            icon: 'warning',
            buttons: true,
        })
        .then((willDelete) => {
          if (willDelete) {
              $('#form1').submit();
          }
        });

    });
    </script>
@endsection
