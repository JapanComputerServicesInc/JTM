@extends('layouts.app')

@section('content')

<div class="row mt">
    <div class="col-lg-12">
        <div class="form-panel">
            <h4 class="mb">部署編集・削除</h4>
                <form class="form-horizontal style-form" method="POST" action="{{ route('department_update',['id' => $departments->id]) }}">
                    @csrf
                    @method('patch')

                    <div class="form-group">
                        <label class="col-lg-2 col-md-4 col-sm-2 control-label"><i class="fa fa-user"></i>部署</label>
                        <div class="col-md-4">
                        @if ($errors->has('department'))
                            <div class="has-error">
                                {{ Form::text('department', $departments->name, ['placeholder' => '入力してください', 'class' => 'form-control']) }}
                                <span class="text-danger">{{$errors->first('department')}}</span>
                            </div>
                        @else
                            {{ Form::text('department', $departments->name, ['placeholder' => '入力してください', 'class' => 'form-control']) }}
                        @endif
                        </div>
                    </div>

                    <div class="row">
                         <div class="col-sm-12 pull-right text-right">
                              <button type="submit" class="btn btn-round btn-success">編集</button>
                              <button id="delete" type="button" class="btn btn-round btn-danger">削除</button>
                         </div>
                    </div>

              </form>

              <form id="form1" class="form-horizontal style-form" method="POST" action="{{ route('department_destroy',['id' => $departments->id]) }}">
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
