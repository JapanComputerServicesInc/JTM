@extends('layouts.app')

@section('content')

<div class="row mt">
    <div class="col-lg-12">
        <div class="form-panel">
            <h4 class="mb">端末情報編集・削除</h4>
                <form class="form-horizontal style-form" method="POST" action="{{ route('terminal_info_update',['id' => $terminal_information->id]) }}">
                    @csrf
                    @method('patch')

                    <div class="form-group">
                        <label class="col-md-2 control-label"><i class="fa fa-laptop"></i>製品名</label>
                            <div class="col-md-4">
                            @if ($errors->has('product_name'))
                                <div class="has-error">
                                    {{ Form::text('product_name',$terminal_information->name, ['placeholder' => '入力してください', 'class' => 'form-control']) }}
                                    <label class="control-label" for="InputText3">{{ $errors->first('product_name') }}</label>
                                </div>
                            @else
                                {{ Form::text('product_name',$terminal_information->name, ['placeholder' => '入力してください', 'class' => 'form-control']) }}
                            @endif
                            </div>
                        <label class="col-md-2 control-label">メーカー</label>
                            <div class="col-md-4">
                            @if ($errors->has('producer'))
                                <div class="has-error">
                                    {{ Form::text('producer',$terminal_information->producer, ['placeholder' => '入力してください', 'class' => 'form-control selectpicker', 'data-live-search' => "true"]) }}
                                    <label class="control-label" for="InputText3">{{ $errors->first('producer') }}</label>
                                </div>
                            @else
                                {{ Form::text('producer',$terminal_information->producer, ['placeholder' => '入力してください', 'class' => 'form-control selectpicker', 'data-live-search' => "true"]) }}
                            @endif
                            </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-2 control-label">モデル番号</label>
                            <div class="col-md-4">
                            @if ($errors->has('model_number'))
                                <div class="has-error">
                                    {{ Form::text('model_number',$terminal_information->model_number, ['placeholder' => '入力してください', 'class' => 'form-control']) }}
                                    <label class="control-label" for="InputText3">{{ $errors->first('model_number') }}</label>
                                </div>
                            @else
                                {{ Form::text('model_number',$terminal_information->model_number, ['placeholder' => '入力してください', 'class' => 'form-control']) }}
                            @endif

                            </div>
                    </div>

                    <div class="row">
                        <div class="col-md-7">
                        @if ($errors->has('terminal_information'))
                            <div class="has-error">
                                <label class="control-label" for="InputText3">{{ $errors->first('terminal_information') }}</label>
                            </div>
                        @endif
                        </div>
                         <div class="col-sm-12 pull-right text-right">
                              <button type="submit" class="btn btn-round btn-success">編集</button>
                              <button id="delete" type="button" class="btn btn-round btn-danger">削除</button>
                         </div>
                    </div>

              </form>

              <form id="form1" class="form-horizontal style-form" method="POST" action="{{ route('terminal_info_destroy',['id' => $terminal_information->id]) }}">
                  @csrf
                  @method('delete')
              </form>
        </div>
    </div>

</div>

@endsection

@section('scripts2')

    <script>
    $('#delete').click((event) => {
        swal({
            title: 'この情報を削除しますか?',
            text: "消すともとに戻すことができません",
            icon: 'warning',
            buttons: true,
            dangerMode: true,
        })
        .then((willDelete) => {
          if (willDelete) {
              $('#form1').submit();
          }
        });
    })
    </script>

@endsection
