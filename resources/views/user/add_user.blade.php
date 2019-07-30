@extends('user.master.master')
@section('content')
     <!-- content -->
     <article class="content dashboard-page">
        <div class="col-md-12">
                <div class="card card-block sameheight-item" >
                    <div class="title-block">
                        <h3 class="title"> THÊM THÀNH VIÊN </h3>
                        
                        {{-- biến $errors có sẵn trong view --}}
                        {{-- @if (isset($errors))
                            <pre>
                                {{ var_dump($errors->toarray())}}
                            </pre>
                        @endif --}}
                        <hr>
                    </div>
                    <form method="POST">
                        <!--error 419 bảo mật token phương thức post-->
                        @csrf
                        <div class="form-group">
                            <label class="control-label">Họ Và Tên</label>
                            <input name="full" type="text" class="form-control underlined" value="{{old('full')}}" > </div>
                           {{showError($errors,'full')}}
                        <div class="form-group"> 
                            <label class="control-label">Số điện thoại</label>
                            <input name="phone" type="text" class="form-control underlined" value="{{old('phone')}}"> </div>
                            {{showError($errors,'phone')}}
                        <div class="form-group">
                            <label class="control-label">Địa chỉ</label>
                            <input name="address" type="text" class="form-control underlined" value="{{old('address')}}"> </div>
                            {{showError($errors,'address')}}
                        <div class="form-group">
                            <label class="control-label">Số CMT</label>
                            <input name="id_number" type="text" class="form-control underlined" value="{{old('id_number')}}"> </div>
                            {{showError($errors,'id_number')}}        
                        <div align='right'>
                                <button type="submit" class="btn btn-success">Thêm</button>
                                <button class="btn btn-primary" type="reset" >Nhập lại</button>
                        </div>
                    </form>
                </div>
            </div>

</article>
<!-- end content -->
@endsection
@section('title','Thêm thành viên')