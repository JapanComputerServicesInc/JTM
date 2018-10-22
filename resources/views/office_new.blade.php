@extends('layouts.app')

@section('content')

<div class="row mt">
    <div class="col-lg-12">
        <div class="form-panel">
            <h1 class="mb">Office情報新規登録</h1>
            <form id="form1" class="form-horizontal style-form" method="POST" action="{{ route('office_create') }}">
                @csrf

                <div class="form-group">
                    <label class="col-lg-2 col-sm-2 col-md-4 control-label"><i class="fab fa-windows"></i></i>Office</label>
                        <div class="col-md-4">
                        @if ($errors->has('office'))
                            <div class="has-error">
                                {{ Form::text('office',null, ['placeholder' => '入力してください', 'class' => 'form-control']) }}
                                <label class="control-label" for="InputText3">{{ $errors->first('office') }}</label>
                            </div>
                        @else
                            {{ Form::text('office',null, ['placeholder' => '入力してください', 'class' => 'form-control']) }}
                        @endif
                        </div>
                    <label class="col-lg-2 col-sm-2 col-md-4 control-label">ライセンス</label>
                        <div class="col-md-4">
                        @if ($errors->has('office_licenses_id'))
                            <div class="has-error">
                                {{ Form::select('office_licenses_id',$licenses,null, ['placeholder' => '選択してください', 'class' => 'form-control selectpicker', 'data-live-search' => "true"]) }}
                                <label class="control-label" for="InputText3">{{ $errors->first('office_licenses_id') }}</label>
                            </div>
                        @else
                            {{ Form::select('office_licenses_id',$licenses,null, ['placeholder' => '選択してください', 'class' => 'form-control selectpicker', 'data-live-search' => "true"]) }}
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
