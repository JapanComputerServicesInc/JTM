@extends('layouts.app')

@section('content')

<div class="row mt">
    <div class="col-lg-12">
        <div class="form-panel">
            <h4 class="mb">保管場所編集・削除</h4>
                <form class="form-horizontal style-form" method="POST" action="{{ route('depository_update',['id' => $depositories->id]) }}">
                    @csrf
                    @method('patch')

                    <div class="form-group">
                        <label class="col-lg-2 col-md-4 col-sm-2 control-label"><i class="fa fa-archive"></i>保管場所</label>
                        <div class="col-md-4">
                        @if ($errors->has('depository'))
                            <div class="has-error">
                                {{ Form::text('depository', $depositories->name, ['placeholder' => '入力してください', 'class' => 'form-control']) }}
                                <span class="text-danger">{{$errors->first('depository')}}</span>
                            </div>
                        @else
                            {{ Form::text('depository', $depositories->name, ['placeholder' => '入力してください', 'class' => 'form-control']) }}
                        @endif
                    </div>

                    <div class="row">
                         <div class="col-sm-12 pull-right text-right">
                              <button type="submit" class="btn btn-round btn-success">編集</button>
                              <button id="delete" type="button" class="btn btn-round btn-danger">削除</button>
                         </div>
                    </div>

              </form>

              <form id="form1" class="form-horizontal style-form" method="POST" action="{{ route('depository_destroy',['id' => $depositories->id]) }}">
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
