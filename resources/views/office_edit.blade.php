@extends('layouts.app')

@section('content')

<div class="row mt">
    <div class="col-lg-12">
        <div class="form-panel">
            <h1 class="mb">Office情報編集・削除</h1>
            <form class="form-horizontal style-form" method="POST" action="{{ route('office_update',['id' => $office_information->id]) }}">
                @csrf
                @method('patch')
                <div class="form-group">
                    <label class="col-lg-2 col-sm-2 col-md-4 control-label"><i class="fab fa-windows"></i>Office</label>
                        <div class="col-md-4">
                        @if ($errors->has('office'))
                            <div class="has-error">
                                {{ Form::text('office', $office_information->name, ['placeholder' => '入力してください', 'class' => 'form-control']) }}
                                <label class="control-label" for="InputText3">{{ $errors->first('office') }}</label>
                            </div>
                        @else
                            {{ Form::text('office', $office_information->name, ['placeholder' => '入力してください', 'class' => 'form-control']) }}
                        @endif
                        </div>
                    <label class="col-lg-2 col-sm-2 col-md-4 control-label">ライセンス</label>
                        <div class="col-md-4">
                            @if ($errors->has('office_licenses_id'))
                                <div class="has-error">
                                    {{ Form::select('office_licenses_id', $license,$office_information->office_licenses_id, ['placeholder' => '選択してください', 'class' => 'form-control selectpicker', 'data-live-search' => "true"]) }}
                                    <label class="control-label" for="InputText3">{{ $errors->first('office_licenses_id') }}</label>
                                </div>
                            @else
                                {{ Form::select('office_licenses_id', $license,$office_information->office_licenses_id, ['placeholder' => '選択してください', 'class' => 'form-control selectpicker', 'data-live-search' => "true"]) }}
                            @endif
                        </div>
                </div>

                <div class="row">
                    <div class="col-md-7">
                    @if ($errors->has('office_information'))
                        <div class="has-error">
                            <label class="control-label" for="InputText3">{{ $errors->first('office_information') }}</label>
                        </div>
                    @endif
                    </div>
                     <div class="col-sm-12 pull-right text-right">
                          <button type="submit" class="btn btn-round btn-success">編集</button>
                          <button id="delete" type="button" class="btn btn-round btn-danger">削除</button>
                     </div>
                </div>

          </form>

          <form id="form1" class="form-horizontal style-form" method="POST" action="{{ route('office_destroy',['id' => $office_information->id]) }}">
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
