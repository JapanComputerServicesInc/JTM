@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">利用状況登録画面</div>
                  <div class="card-body">
                        <div class="form-group">
                          <label for="employeeNo">ホスト名</label>
                          <input type="number" class="form-control @if($errors->has('employee_no')) is-invalid @endif" id="employee_no" name="employee_no"  placeholder="12345678" value="{{ old('employee_no') }}" required>
                          <small id="noHelp" class="form-text text-muted">12桁で入力して下さい</small>
                        </div> 
                        <div class="row">
                        <div class="col-md-12">
                        <div class="form-group">
                          <label for="exampleInputPassword1">氏名</label>
                          <input type="text" class="form-control @if($errors->has('first_name')) is-invalid @endif" id="first_name" name="first_name"  placeholder="にっこり！" value="{{ old('first_name') }}" required>
                        </div>
                        </div>
                        </div>
                        <div class="form-group">
                          <label for="exampleInputPassword1">部署</label>
                        </div>
                        <div class="form-group">
                          <label for="exampleInputPassword1">保管場所</label>
                          <input type="email" class="form-control @if($errors->has('email')) is-invalid @endif" id="email" name="email" placeholder="" value="{{old('email')}}" required>
                        </div>
                        <div class="form-group">
                        <label for="exampleInputPassword1" style="font-size:20px;">利用状況</label>
                        <span class="check" style="padding-left:20px;padding-right:20px;font-size:20px;">
                        <input type="radio" name="example" value="選択肢1" class="check">使用中
</span>
<span class="check" style="padding-right:20px;font-size:20px;">
                        <input type="radio" name="example" value="選択肢2" checked>未使用
</span>
                        </div> 
                        <div class="row">
                        <div class="col-md-12" style="text-align:center;">                
                        <button type="submit" class="btn btn-primary" style="margin-top:20px;">登録</button>
</div>
</div>
                      </form>
                  </div>
                </div>
            </div>
        </div>
    </div>
</div>
    
@endsection
