@extends('layouts.app')

@section('content')
<section id="content">
                <section class="wrapper">
                     


<div class="row mt">
    <div class="col-lg-12">
        <div class="form-panel">
            <h4 class="mb">検索</h4>
            <hr>
            <form class="form-horizontal style-form" method="get">
                <div class="form-group">
                    <label class="col-sm-5 col-md-5 col-lg-1 control-label">氏名</label>
                    <div class="col-lg-3">
                        <input type="text" class="form-control">
                    </div>
                    <label class="col-md-1 control-label">保管場所</label>
                    <div class="col-lg-3">
                        <select class="form-control">
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                        </select>
                    </div>
                    <label class="col-md-1 control-label">OS</label>
                    <div class="col-lg-3">
                        <select class="form-control">
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-1 col-xs-12 control-label">CPU</label>
                    <div class="col-lg-3">
                        <select class="form-control">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                      </select>
                    </div>
                    <label class="col-md-1 col-xs-12 control-label">Office</label>
                    <div class="col-lg-3">
                        <select class="form-control">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                      </select>
                    </div>
                    <label class="col-md-1 col-xs-12 control-label">メモリ</label>
                    <div class="col-lg-3">
                        <select class="form-control">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                      </select>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-1 col-xs-12 control-label">HDD/SSD</label>
                    <div class="col-lg-3">
                        <select class="form-control">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                      </select>
                    </div>
                </div>

                <div class="form-group">
                  <label class="checkbox-inline">
                    <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1">
                    使用中
                  </label>
                  <label class="checkbox-inline">
                    <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
                    未使用
                  </label>
                  <label class="checkbox-inline">
                    <input type="radio" name="optionsRadios" id="optionsRadios3" value="option2">
                    全て
                  </label>
                </div>

@endsection







