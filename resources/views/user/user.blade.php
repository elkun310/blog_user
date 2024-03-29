@extends ('user.master.master')
@section('content')
    <!-- content -->
    <article class="content dashboard-page">

        <section class="section">
            <div class="row sameheight-container">
                <div class="col-xl-12">
                    @if (session('thongbao'))
                        <div class="alert alert-success" role="alert">
                            {{session('thongbao')}}
                        </div>
                    @endif
                    <div class="card sameheight-item items" data-exclude="xs,sm,lg">
                        <form action="" method="post">
                            <div class="card-header bordered">
                                <div class="header-block">
                                    <h3 class="title"> Danh sách thành viên </h3>
                                    <a href="add" class="btn btn-primary btn-sm"> Thêm </a>
                                </div>
                                <div class="header-block pull-right">
                                    <label class="search">
                                        <input class="search-input" name="search" placeholder="search...">
                                        <i class="fa fa-search search-icon"></i>
                                    </label>
                                    <div class="pagination">
                                        <button type="submit" class="btn btn-primary">Tìm kiếm</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <ul class="item-list striped">
                            <li class="item item-list-header">
                                <div class="item-row">

                                    <div class="item-col item-col-header ">

                                        <span>Họ Tên</span>

                                    </div>
                                    <div class="item-col item-col-header">

                                        <span>Số điện thoại</span>

                                    </div>
                                    <div class="item-col item-col-header ">

                                        <span>Địa chỉ</span>

                                    </div>
                                    <div class="item-col item-col-header ">

                                        <span>Số CMT</span>

                                    </div>
                                    <div class="item-col item-col-header">

                                        <span>Xoá</span>

                                    </div>
                                </div>
                            </li>
                            @foreach ($users as $row)
                            <li class="item">
                                    <div class="item-row">
                                        <div class="item-col">
                                        <a href="edit/{{ $row->id }}">
                                                {{ $row->full}}
                                            </a>
                                        </div>
                                        <div class="item-col">
                                                {{ $row->phone}}
                                        </div>
                                        <div class="item-col">
                                            <span title="Dũng Tiến-Thường tín-Hà Nội">{{ $row->address}}</span>
                                        </div>
                                        <div class="item-col">
                                                {{ $row->id_number}}
                                        </div>
                                        <div class="item-col ">
                                            <a href="del-user/{{ $row->id}}" class="btn btn-danger-outline" onclick="return delUser()">Xoá</a>
                                        </div>
                                    </div>
                                </li>
                            @endforeach
                            

                        </ul>

                    </div>

                </div>

            </div>

            <div align='right'>
                <nav aria-label="Page navigation example">
                    {{-- <ul class="pagination">
                        <li class="page-item"><a class="page-link" href="#"><</a></li>
                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item"><a class="page-link" href="#">></a></li>
                    </ul> --}}

                    {{--phân trang trong laravel --}}
                    {{ $users->links()}}
                </nav>
            </div>

        </section>

    </article>
    <!-- end content -->
    <script>
        function delUser(){
            return confirm('Bạn muốn xóa thành viên ?');
        } 
    </script>
@endsection
@section('title','Danh sách thành viên')