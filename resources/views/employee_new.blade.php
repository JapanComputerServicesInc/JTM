@extends('layouts.app')

@section('content')

<div class="row mt">
    <div class="col-lg-12">
        <div class="form-panel">
            <h1 class="mb">社員情報新規登録</h1>
            <form id="form1" class="form-horizontal style-form" method="POST" action="{{ route('employee_create') }}">
                @csrf

                <div class="form-group">
                    <label class="col-md-2 control-label"><i class="fa fa-user"></i>社員</label>
                        <div class="col-md-4">
                        @if ($errors->has('employee'))
                            <div class="has-error">
                                {{ Form::text('employee',null, ['placeholder' => '入力してください', 'class' => 'form-control']) }}
                                <label class="control-label" for="InputText3">{{ $errors->first('employee') }}</label>

                            </div>
                        @else
                            {{ Form::text('employee',null, ['placeholder' => '入力してください', 'class' => 'form-control']) }}
                        @endif
                        </div>
                    <label class="col-md-2 control-label">部署</label>
                        <div class="col-md-4">
                        @if ($errors->has('department'))
                            <div class="has-error">
                                {{ Form::select('department', $departments, null, ['placeholder' => '選択してください', 'class' => 'form-control selectpicker', 'data-live-search' => "true"]) }}
                                <label class="control-label" for="InputText3">{{ $errors->first('department') }}</label>
                            </div>
                        @else
                            {{ Form::select('department', $departments, null, ['placeholder' => '選択してください', 'class' => 'form-control selectpicker', 'data-live-search' => "true"]) }}
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
