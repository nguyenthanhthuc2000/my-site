@extends('layouts.admin.app')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card m-b-30">
                <div class="card-body">
                    <h4 class="mt-0 mb-3 header-title">Thêm mới bài viết</h4>
                    <div class="form-group row">
                        <label for="title" class="col-sm-2 col-form-label">Tiêu đề</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="text" value="" id="title">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="content" class="col-sm-2 col-form-label">Nội dung</label>
                        <div class="col-sm-10">
                            <textarea required class="form-control" rows="5" id="content"></textarea>
                        </div>
                    </div>
                    <div class="form-group text-right">
                        <div>
                            <button type="submit" class="btn btn-primary waves-effect waves-light">
                                Lưu
                            </button>
                            <button type="reset" class="btn btn-secondary waves-effect m-l-5">
                                Huỷ
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection