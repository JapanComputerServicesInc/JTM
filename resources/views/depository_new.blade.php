@extends('layouts.app')

@section('content')

<div class="row mt">
    <div class="col-lg-12">
        <div class="form-panel">
            <h1 class="mb">保管場所新規登録</h1>
            <form id="form1" class="form-horizontal style-form" method="POST" action="{{ route('depository_create') }}">
                @csrf

                <div class="form-group">
                    <label class="col-lg-2 col-sm-2 col-md-4 control-label"><i class="fa fa-archive"></i>保管場所</label>
                        <div class="col-md-4">
                            @if ($errors->has('depository_name'))
                                <div class="has-error">
                                    {{ Form::text('depository_name',null, ['placeholder' => '入力してください', 'class' => 'form-control']) }}
                                    <label class="control-label" for="InputText3">{{ $errors->first('depository_name') }}</label>

                                </div>
                            @else
                                {{ Form::text('depository_name',null, ['placeholder' => '入力してください', 'class' => 'form-control']) }}
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
