@extends('client.layouts.index')
@section('content')
    <!-- Page Content -->
    <section class="content-section-a">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 ml-auto">
                    <hr class="section-heading-spacer">
                    <div class="clearfix"></div>
                    <h2 class="section-heading">Tại sao lại phải học <br>lập trình IOS</h2>
                    <p class="lead">
                        {{--<a target="_blank" href="http://join.deathtothestockphoto.com/">Death to the Stock Photo</a>--}}
                        - Lập trình iOS luôn nằm trong Top 10 những công việc có thu nhập khủng và nhiều cơ hội nhất từ
                        2013-2015, thu nhập không dưới 1000$/tháng, ngôn ngữ dễ học trực quan. </p>
                </div>
                <div class="col-lg-5 mr-auto">
                    <img class="img-fluid" src="{{ asset('assets-client/img/ipad.png') }}" alt="">
                </div>
            </div>
        </div>
        <!-- /.container -->
    </section>

    <section class="content-section-b">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 mr-auto order-lg-2">
                    <hr class="section-heading-spacer">
                    <div class="clearfix"></div>
                    <h2 class="section-heading">Bạn sẽ được gì sau <br>khóa học IOS</h2>
                    <p class="lead">Những kiến thức nền tảng , demo app dự án thực tế và những bí quyết từ giảng viên có
                        3 năm kinh nghiệm trở lên, có sản phẩm đưa lên app store sau khi hoàn thành khóa học
                        <a target="_blank" href="http://www.giaoduc24h.com/">Giaoduc24h</a></p>
                </div>
                <div class="col-lg-5 ml-auto order-lg-1">
                    <img class="img-fluid" src="{{ asset('assets-client/img/dog.png') }}" alt="">
                </div>
            </div>
        </div>
        <!-- /.container -->
    </section>
    <!-- /.content-section-b -->

    <section class="content-section-a">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 ml-auto">
                    <hr class="section-heading-spacer">
                    <div class="clearfix"></div>
                    <h2 class="section-heading">Thông tin khóa học <br>lập trình IOS</h2>
                    <p class="lead">Giới thiệu và làm quen với giao diện Mac OS App Store, sử dụng 1 số dòng lệnh cơ bản
                        với terminal và cài đặt Xcode.</p>
                    <p class="lead">Viết ứng dụng đầu tay, các thao tác trên máy ảo simulator.</p>
                    <p class="lead">Build demo trên máy ảo và hướng dẫn build máy thật.</p>
                </div>
                <div class="col-lg-5 mr-auto ">
                    <img class="img-fluid" src="{{ asset('assets-client/img/phones.png') }}" alt="">
                </div>
            </div>
        </div>
        <!-- /.container -->

    </section>
    <!-- /.content-section-a -->

    <aside class="banner">
        <div class="container">
            <form id="booking-form" class="booking-form" data-toggle="validator" method="POST"
                  action="{{ url('booking') }}" onsubmit="alert('Đăng ký thành công , cảm ơn bạn');">
                <input type="hidden" name="_token" value="{!! csrf_token() !!}">
                <div class="row">
                    <div class="col-lg-6 my-auto">
                        <h2>Đăng ký khóa học ngay nhận ưu đãi <span style="color: red">90%</span>
                            <article class="price">
                                <div class="new_emph">
                                    <div class="old_price">
                                        <center><s><p lp-display="old_price">2,100,000</p></s></center>
                                    </div>
                                    <div class="new_price">
                                        <p class="line-1">Chỉ còn</p>
                                        <p lp-display="new_price">299,000</p></b>
                                    </div>
                                </div>
                            </article>
                        </h2>
                    </div>
                    <div class="col-lg-6 my-auto">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" id="book-name" name="name"
                                           placeholder="Họ tên" required
                                           data-error="Vui lòng nhập tên">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div> <!-- /.col -->
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" id="book-phone" name="phone"
                                           placeholder="Số điện thoại" required
                                           data-error="Vui lòng nhập số điện thoại">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div> <!-- /.col -->
                        </div> <!-- /.row -->
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="email" class="form-control" id="book-email" name="email"
                                           placeholder="Email"
                                           required data-error="Vui lòng nhập email">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div> <!-- /.col -->
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" id="book-email" name="address"
                                           placeholder="Địa chỉ"
                                           required data-error="Vui lòng nhập địa chỉ">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div> <!-- /.col -->
                        </div> <!-- /.row -->
                        <div class="row">
                            <div class="col-md-6 col-md-offset-3">
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary btn-lg hvr-in" id="book-submit">Đăng ký
                                        ngay
                                    </button>
                                </div>
                            </div> <!-- /.col -->
                        </div> <!-- /.row -->
                    </div>
                </div>
            </form>
        </div>
        <!-- /.container -->
    </aside>
@endsection
