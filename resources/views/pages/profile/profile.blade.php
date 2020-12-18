@extends('layouts.layout')

@section('content')
    <!-- content-header -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>
                        Hồ sơ nhân viên
                    </h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">

                        <li class="breadcrumb-item"><a href="#"><i class="fas fa-home home-icon"></i>Trang chủ</a></li>
                        <li class="breadcrumb-item"><a href="#">Tất cả hồ sơ</a></li>
                        <li class="breadcrumb-item active">Hồ sơ nhân viên</li>

                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content-header -->
    <!-- content-body -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-3">
                    @include('pages.profile.info')
                </div>
                <div class="col-lg-9">
                    <div class="card card-primary card-outline card-outline-tabs">
                        <div class="card-header p-0 border-bottom-0">
                            <ul class="nav nav-tabs" id="custom-tabs-three-tab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="custom-tabs-three-home-tab" data-toggle="pill"
                                       href="#table_basic_infor" role="tab" aria-controls="table_basic_infor"
                                       aria-selected="true">Thông tin cơ bản</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="custom-tabs-three-profile-tab" data-toggle="pill"
                                       href="#custom-tabs-three-profile" role="tab"
                                       aria-controls="custom-tabs-three-profile" aria-selected="false">Hồ sơ nhân
                                        viên</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="custom-tabs-three-messages-tab" data-toggle="pill"
                                       href="#custom-tabs-three-messages" role="tab"
                                       aria-controls="custom-tabs-three-messages" aria-selected="false">Hợp đồng lao
                                        động</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="custom-tabs-three-settings-tab" data-toggle="pill"
                                       href="#custom-tabs-three-settings" role="tab"
                                       aria-controls="custom-tabs-three-settings" aria-selected="false">Chế độ bảo
                                        hiểm</a>
                                </li>
                            </ul>
                        </div>
                        <div class="card-body">
                            <div class="tab-content" id="custom-tabs-three-tabContent">
                                <div class="tab-pane fade show active" id="table_basic_infor" role="tabpanel"
                                     aria-labelledby="table_basic_infor-tab">
                                    <form role="form" class="">
                                        <!-- Thông tin cá nhân -->
                                        <div class="group">
                                            <div class="group-header">
                                                <spam>Thông tin cá nhân</spam>
                                            </div>
                                            <div class="group-body">
                                                <div class="row">
                                                    <div class="col-lg-4">
                                                        <div class="form-group">
                                                            <label for="s-name">Họ và tên</label>
                                                            <input type="text" class="form-control" id="s-name"
                                                                   placeholder="Họ và tên">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <div class="form-group">
                                                            <label for="txt_name">Giới tính</label>
                                                            <input type="text" class="form-control" id="txt_sex"
                                                                   placeholder="giới tính">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <div class="form-group">
                                                            <label for="txt_birth">Ngày sinh</label>
                                                            <input type="date" class="form-control" id="txt_birth"
                                                                   placeholder="Ngày sinh">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <div class="form-group">
                                                            <label for="txt_nation">Dân tộc</label>
                                                            <input type="text" class="form-control" id="txt_nation"
                                                                   placeholder="Dân tộc">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <div class="form-group">
                                                            <label for="txt_religion">Tôn giáo</label>
                                                            <input type="text" class="form-control" id="txt_religion"
                                                                   placeholder="Tôn giáo">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <div class="form-group">
                                                            <label for="txt_nationality">Quốc tịch</label>
                                                            <input type="text" class="form-control" id="txt_nationality"
                                                                   placeholder="Quốc tịch">
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="form-group">
                                                            <label for="txt_address">Địa chỉ thường chú</label>
                                                            <input type="text" class="form-control" id="txt_address"
                                                                   placeholder="địa chỉ thường chú">
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="form-group">
                                                            <label for="txt_address1">Địa chỉ tạm trú</label>
                                                            <input type="text" class="form-control" id="txt_address1"
                                                                   placeholder="Địa chỉ tạm trú">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Thông tin liên hệ -->
                                        <div class="group">
                                            <div class="group-header">
                                                <spam>Thông tin liên hệ</spam>
                                            </div>
                                            <div class="group-body">
                                                <div class="row">
                                                    <div class="col-lg-4">
                                                        <div class="form-group">
                                                            <label for="txt_department">Phòng ban</label>
                                                            <input type="text" class="form-control" id="txt_department"
                                                                   placeholder="Phòng ban">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <div class="form-group">
                                                            <label for="s-name">Chức danh</label>
                                                            <input type="text" class="form-control" id="txt_position"
                                                                   placeholder="Chức danh">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <div class="form-group">
                                                            <label for="txt_branch">Chi nhánh</label>
                                                            <input type="text" class="form-control" id="txt_branch"
                                                                   placeholder="Chi nhánh">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <div class="form-group">
                                                            <label for="txt_phone1">Số điện thoại 1</label>
                                                            <input type="text" class="form-control" id="txt_phone1"
                                                                   placeholder="Số điện thoại 1">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <div class="form-group">
                                                            <label for="txt_phone2">Số điện thoại 2</label>
                                                            <input type="text" class="form-control" id="txt_phone2"
                                                                   placeholder="Số điện thoại 2">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <div class="form-group">
                                                            <label for="txt_email">E-mail công việc</label>
                                                            <input type="E-mail" class="form-control" id="txt_email"
                                                                   placeholder="E-mail">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Thông tin tài khoản -->
                                        <div class="group">
                                            <div class="group-header">
                                                <spam>Thông tin tài khoản</spam>
                                            </div>
                                            <div class="group-body">
                                                <div class="row">
                                                    <div class="col-lg-4">
                                                        <div class="form-group">
                                                            <label for="txt_code">Mã nhân viên</label>
                                                            <input type="text" class="form-control" id="txt_code"
                                                                   placeholder="Mã nhân viên">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <div class="form-group">
                                                            <label for="s-name">ASGL Code</label>
                                                            <input type="text" class="form-control" id="txt_asgl_code"
                                                                   placeholder="ASGL Code">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <div class="form-group">
                                                            <label for="txt_pass">Đổi mật khẩu</label>
                                                            <input type="password" class="form-control" id="txt_pass"
                                                                   placeholder="">
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                        <!-- Trạng thái tài khoản -->
                                        <div class="group">
                                            <div class="group-header">
                                                <spam>Trạng thái tài khoản</spam>
                                            </div>
                                            <div class="group-body">
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <div class="float-left">
                                                            <div
                                                                class="custom-control custom-switch custom-switch-off-danger custom-switch-on-success">
                                                                <input type="checkbox" class="custom-control-input"
                                                                       id="chk_hoatdong" checked="true">
                                                                <label class="custom-control-label" for="chk_hoatdong">Hoạt
                                                                    động</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="float-right">
                                                            <button type="submit" class="btn btn-primary btn-asgl">Cập
                                                                nhật
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="tab-pane fade" id="custom-tabs-three-profile" role="tabpanel"
                                     aria-labelledby="custom-tabs-three-profile-tab">
                                    Mauris tincidunt mi at erat gravida, eget tristique urna bibendum. Mauris pharetra
                                    purus
                                    ut ligula tempor, et vulputate metus facilisis. Lorem ipsum dolor sit amet,
                                    consectetur
                                    adipiscing elit. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices
                                    posuere cubilia Curae; Maecenas sollicitudin, nisi a luctus interdum, nisl ligula
                                    placerat mi, quis posuere purus ligula eu lectus. Donec nunc tellus, elementum sit
                                    amet
                                    ultricies at, posuere nec nunc. Nunc euismod pellentesque diam.
                                </div>
                                <div class="tab-pane fade" id="custom-tabs-three-messages" role="tabpanel"
                                     aria-labelledby="custom-tabs-three-messages-tab">
                                    Morbi turpis dolor, vulputate vitae felis non, tincidunt congue mauris. Phasellus
                                    volutpat augue id mi placerat mollis. Vivamus faucibus eu massa eget condimentum.
                                    Fusce
                                    nec hendrerit sem, ac tristique nulla. Integer vestibulum orci odio. Cras nec augue
                                    ipsum. Suspendisse ut velit condimentum, mattis urna a, malesuada nunc. Curabitur
                                    eleifend facilisis velit finibus tristique. Nam vulputate, eros non luctus
                                    efficitur,
                                    ipsum odio volutpat massa, sit amet sollicitudin est libero sed ipsum. Nulla
                                    lacinia, ex
                                    vitae gravida fermentum, lectus ipsum gravida arcu, id fermentum metus arcu vel
                                    metus.
                                    Curabitur eget sem eu risus tincidunt eleifend ac ornare magna.
                                </div>
                                <div class="tab-pane fade" id="custom-tabs-three-settings" role="tabpanel"
                                     aria-labelledby="custom-tabs-three-settings-tab">
                                    Pellentesque vestibulum commodo nibh nec blandit. Maecenas neque magna, iaculis
                                    tempus
                                    turpis ac, ornare sodales tellus. Mauris eget blandit dolor. Quisque tincidunt
                                    venenatis
                                    vulputate. Morbi euismod molestie tristique. Vestibulum consectetur dolor a
                                    vestibulum
                                    pharetra. Donec interdum placerat urna nec pharetra. Etiam eget dapibus orci, eget
                                    aliquet urna. Nunc at consequat diam. Nunc et felis ut nisl commodo dignissim. In
                                    hac
                                    habitasse platea dictumst. Praesent imperdiet accumsan ex sit amet facilisis.
                                </div>
                            </div>
                        </div>
                        <!-- /.card -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /.content-body -->
@stop
