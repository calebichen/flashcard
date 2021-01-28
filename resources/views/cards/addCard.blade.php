@extends('layouts.app')


@section('title', '新增flashcard')


@section('content')


    <div class="content">
        <div class="container-fluid">
            <h5 class="mt-4 mb-2">新增 Flashcard</h5>
            <form action="{{ route('cards.store') }}" method="post">
                @csrf
                @section('card-title')
                <i class="fa fa-file-medical"></i> 新增表格
                @endsection
                @section('card-body')

                    <div class="row">
                        <div class="col-sm-6">
                            <h3>正面</h3>
                            <div class="form-group">
                                <label for="front1">正面主要欄(必填)</label>
                                <input type="text" class="form-control" name="front1" id="front1" placeholder="填入正面主要資訊（必填）" value="{{ old('front1') }}">
                            </div>
                            @error('front1')
                                <div class="alert alert-danger alert-dismissible">
                                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                    本欄位為必須填入欄位，不能空白。
                                </div>
                            @enderror
                            <div class="form-group">
                                <label for="front2">正面次要欄1</label>
                                <input type="text" class="form-control" name="front2" id="front2" placeholder="" value="{{ old('front2') }}">
                            </div>
                            <div class="form-group">
                                <label for="front3">正面次要欄2</label>
                                <input type="text" class="form-control" name="front3" id="front3" placeholder="" value="{{ old('front3') }}">
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <h3>背面</h3>
                            <div class="form-group">
                                <label for="back1">背面主要欄(必填)</label>
                                <input type="text" class="form-control" name="back1" id="back1" placeholder="填入背面主要資訊（必填）" value="{{ old('back1') }}">
                            </div>
                            @error('back1')
                            <div class="alert alert-danger alert-dismissible">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                本欄位為必須填入欄位，不能空白。
                            </div>
                            @enderror

                            <div class="form-group">
                                <label for="back2">背面次要欄1</label>
                                <input type="text" class="form-control" name="back2" id="back2" placeholder="" value="{{ old('back2') }}">
                            </div>

                            <div class="form-group">
                                <label for="back3">背面次要欄2</label>
                                <input type="text" class="form-control" name="back3" id="back3" placeholder="" value="{{ old('back3') }}">
                            </div>
                        </div>

                    </div>
                @endsection()

                @section('card-footer')
                    <div class="text-center">
                        <button type="submit" class="btn btn-primary">送出新增</button>
                    </div>
                @endsection()

                @include('layouts.dashboard.elements.card')
            </form>
        </div>
    </div>





@endsection()
