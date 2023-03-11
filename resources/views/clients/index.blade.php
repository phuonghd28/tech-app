@extends('clients.master')
@section('banner')
    <div class="row banner">
        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" style="border-radius: 50%;width: 10px;height: 10px;"
                        data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true"
                        aria-label="Slide 1"></button>
                <button type="button" style="border-radius: 50%;width: 10px;height: 10px;"
                        data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" style="border-radius: 50%;width: 10px;height: 10px;"
                        data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img height="500px"
                         src="https://homeq.vn/public/upload/images/giai-phap-nha-thong-minh-2.jpg?fbclid=IwAR1RkwuqZtbbTql-hqc5VW1vUjirsiGvxTo07fK7cBoQ1HMkgqQeJkhYRgE"
                         class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img height="500px" src="https://giaiphapdientu.vn/public/files/sysslider/sysslider_Ff1Rx5tT.jpg"
                         class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img height="500px" src="https://www.vtbshop.vn/upload/cloud-solution-1589512552.jpg" class="d-block w-100"
                         alt="...">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
                    data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
                    data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
@endsection

@section('content')
    <div class="container-md">
        <div class="row pt-4 mb-4">
            <div class="col-6">
                <img src="https://m.mic.gov.vn/Upload_Moi/2020_vn/20200914-at-ta7.jpg" alt="" width="100%">
            </div>
            <div class="col-6" style="padding-right: 30px">
                <h2 class="text-secondary mb-3 pb-3" style="border-bottom: 1px solid #034982"><span class="text-primary">Dịch vụ</span> của HDNTech</h2>
                <h5>Chúng tôi cung cấp bao gồm các dịch ᴠụ ᴠề phần cứng, phần mềm, хử lý ѕự cố, quản lý bảo mật, bảo trì định kỳ hệ thống CNTT.</h5>
                <h5>Làm ѕao để quản lý, duу trì hoạt động hệ thống công nghệ thông tin liên tục, hiệu quả. Làm ѕao khai thác nguồn lực công nghệ thông tin một cách tối ưu cho hoạt động ѕản хuất kinh doanh thật ѕự là những thách thức lớn mà các doanh nghiệp đang gặp phải. Các dịch vụ HDNTech chúng tôi cung cấp ѕẽ giúp các doanh nghiệp ᴠượt qua các thách thức nàу, đảm bảo tiết kiệm chi phí hoạt động công nghệ thông tin ᴠà mang lại ѕự an tâm trong ѕuốt quá trình hoạt động.</h5>
                <a href="" class="btn mt-3 outline-primary">Xem tất cả dịch vụ</a>
            </div>
        </div>
        <div class="row mb-4">
            <h2 class="text-center text-uppercase"><strong class="text-primary">Danh mục Sản phẩm</strong> của HDNTech</h2>
            @foreach($categories as $category)
            <div class="col-3">
                <div class="col-md-12 img-background" style="background-image: url('{{$category->image}}');">
                    <div style="position: absolute;left: 20px;bottom: 15px;z-index: 6">
                        <h5 class="text-light">{{$category->name}}</h5>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <div class="row">
            <h2 class="text-center text-uppercase"><strong class="text-primary">Sản phẩm nổi bật</strong> của HDNTech</h2>
            <div class="row justify-content-center pt-2">
                <ul class="tab-btn">
                    @foreach($categories as $category)
                    <li><button class="btn btn-black tablinks" onclick="tab(event,'{{$category->id}}')" id="defaultOpen">{{$category->name}}</button></li>
                    @endforeach
                </ul>
            </div>
            @foreach($categories as $category)
            <div class="tabcontent" id="{{$category->id}}">
                <div class="row  pb-4">
                    @foreach(\App\Models\Product::query()->where('category_id', $category->id)->limit(4)->get() as $product)
                        <div class="col-3 text-center">
                            <div class="card" style="width: 18rem;">
                                <img src="{{$product->image}}" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">{{$product->name}}</h5>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            @endforeach
        </div>
    </div>
    <div style="background: #f1f1f1;margin-top:30px;padding: 50px">
        <h2 class="text-center"><span class="text-primary">Tin tức</span> Công nghệ</h2>
        <div class="row mt-3">
            <div class="col-4 text-center">
                <div class="card" style="width: 90%;">
                    <div class="card-body">
                        <h5 class="card-title">Dating  Software Leitfaden:  Gegenständen   Verstehen und  Richtlinien  im Jahr 2020</h5>
                        <p class="card-text">Sie haben wirklich wahrscheinlich experimentiert mit Online-Dating Programme, mit höchstwahrscheinlich erfüllt mit einigen Personen aus diesen Apps enthält. Viele nutzen diese Art von Matchmaking Methode aufgrund der mehrere Gründe. Viele</p>
                        <a href="#" class="btn btn-primary">Xem chi tiết</a>
                    </div>
                </div>
            </div>

            <div class="col-4 text-center">
                <div class="card" style="width: 90%;">
                    <div class="card-body">
                        <h5 class="card-title">Dating  Software Leitfaden:  Gegenständen   Verstehen und  Richtlinien  im Jahr 2020</h5>
                        <p class="card-text">Sie haben wirklich wahrscheinlich experimentiert mit Online-Dating Programme, mit höchstwahrscheinlich erfüllt mit einigen Personen aus diesen Apps enthält. Viele nutzen diese Art von Matchmaking Methode aufgrund der mehrere Gründe. Viele</p>
                        <a href="#" class="btn btn-primary">Xem chi tiết</a>
                    </div>
                </div>
            </div>

            <div class="col-4 text-center">
                <div class="card" style="width: 90%;">
                    <div class="card-body">
                        <h5 class="card-title">Dating  Software Leitfaden:  Gegenständen   Verstehen und  Richtlinien  im Jahr 2020</h5>
                        <p class="card-text">Sie haben wirklich wahrscheinlich experimentiert mit Online-Dating Programme, mit höchstwahrscheinlich erfüllt mit einigen Personen aus diesen Apps enthält. Viele nutzen diese Art von Matchmaking Methode aufgrund der mehrere Gründe. Viele</p>
                        <a href="#" class="btn btn-primary">Xem chi tiết</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
