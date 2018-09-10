@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">利用状況登録画面</div>
                  <div class="card-body">
                    <form method="post" action="{{ route('employee_create') }}"> 
                      @csrf
                        <div class="form-group">
                          <label for="employeeNo">ホスト名</label>
                          <input type="number" class="form-control @if($errors->has('employee_no')) is-invalid @endif" id="employee_no" name="employee_no"  placeholder="12345678" value="{{ old('employee_no') }}" required>
                          <small id="noHelp" class="form-text text-muted">12桁で入力して下さい</small>
                          <span class="help-block  text-danger">{{$errors->first('employee_no')}}</span>
                        </div> 
                        <div class="row">
                        <div class="col-md-12">
                        <div class="form-group">
                          <label for="exampleInputPassword1">氏名</label>
                          <input type="text" class="form-control @if($errors->has('first_name')) is-invalid @endif" id="first_name" name="first_name"  placeholder="にっこり！" value="{{ old('first_name') }}" required>
                          <span class="help-block  text-danger">{{$errors->first('name')}}</span>
                        </div>
                        </div>
                        </div>
                        <div class="form-group">
                          <label for="exampleInputPassword1">部署</label>
                          <select name="dpid" class="form-control">
                            @foreach ($departments as $department)
                            <option value="{{$department -> id}}" @if (old('dpid') == $department -> id) selected @endif>{{$department->name}}</option>
                            <!--idを取得するとき　<option vlaue="$department->id"></option> -->
                           @endforeach
                          </select>
                        </div>
                        <div class="form-group">
                          <label for="exampleInputPassword1">保管場所</label>
                          <input type="email" class="form-control @if($errors->has('email')) is-invalid @endif" id="email" name="email" placeholder="" value="{{old('email')}}" required>
                          <span class="help-block  text-danger">{{$errors->first('email')}}</span>
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
