@extends('client.base')
@section('content')
        <!--LATEST NEWS SECTION START-->
        <section>
            <div id="cbx-news" class="cbx-section cbx-news">
                <div class="cbx-inner">
                    <div class="container">
                        <div class="text-center cbx-content">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="cbx-heading">
                                        <h2 class="uppercase wow fadeInUp">Artikel</h2>
                                        <hr noshade size="" width="" color="">
                                    </div>
                                    <div>
                                        <div class="row wow fadeInUp">
                                            @foreach($list_artikel as $artikel)
                                            <div class="col-xs-12 col-sm-6 col-md-4 xs-text-center">
                                                <div class="single-news cbx-single-all">
                                                    <img src="{{url('public')}}/img/{{$artikel->gambar}}" style="height: 250px;" alt="news"/>
                                                    <div class="snews-bottom">
                                                        <h4>{{$artikel->judul}}<h4>
                                                        <p>{{$artikel->judul}}</p>
                                                        <a href="{{url('client', $artikel->id)}}">Lebih Lanjut</a>
                                                    </div>
                                                </div>
                                            </div><!--COL 4-->
                                            @endforeach
                                        </div><!--ROW-->
                                    </div>
                                </div><!--COL-->
                            </div><!--ROW-->
                        </div><!--CBX CONTENT CONTENT-->
                    </div><!--CONAINER-->
                </div><!--CBX INNER-->
            </div><!--CBX SECTION-->
        </section><!-- LATEST NEWS Section End-->

       <!--testimonials Section START-->
        <section>
            <div class="cbx-testimonials">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="cbx-heading text-center">
                                <h2 class="uppercase wow fadeInUp">Testimoni</h2>
                                <hr noshade size="" width="" color="">
                                <p class=" wow fadeInDown">
                            </div>
                        </div>
                    </div> <!--//Row-->
                    <div class="row">
                        <div class="carousel-reviews broun-block">
                            <div id="cbstepreviews" data-interval="3000" data-type="multi" data-ride="carousel" class="carousel cbstepcarousel slide carousel-fade">
                                <div data-percol="3" class="carousel-inner carousel-inner-multi">
                                    <div class="item active">
                                    </div> <!--//Item-->
                                    @foreach($list_komentar as $komentar)
                                    <div class="item">
                                        <div class="col-md-4 col-sm-6 col-xs-12">
                                            <div class="cbx-block-text rel zmin text-center">
                                                <p>{{$komentar->komentar}}</p>
                                                <ins class="cbx-ab zmin sprite sprite-i-triangle block"></ins>
                                            </div>
                                            <div class="cbx-person-text rel">
                                                <img src="{{url('public')}}/img/tm4.png" class="img-circle" alt="test2">
                                                <a title="" href="#"><b>{{$komentar->nama}}</b></a>
                                                <i>{{$komentar->updated_at}}</i>
                                            </div>
                                        </div>
                                    </div> <!--//Item-->
                                    @endforeach
                                </div>
                                <a class="left carousel-control cbx-slider-arrow" href="#cbstepreviews" role="button" data-slide="prev">
                                    <span><img class="" src="{{url('public')}}/img/arrows_left.png" alt=""/></span>
                                </a>
                                <a class="right carousel-control cbx-slider-arrow" href="#cbstepreviews" role="button" data-slide="next">
                                    <span><img class="" src="{{url('public')}}/img/arrows_right.png" alt=""/></span>
                                </a>
                                <!-- Indicators -->
                                <ol class="carousel-indicators cbx-carousel-indicators hidden-lg hidden-md hidden-sm">
                                    <li data-target="#cbstepreviews" data-slide-to="0" class="active"></li>
                                    <li data-target="#cbstepreviews" data-slide-to="1"></li>
                                    <li data-target="#cbstepreviews" data-slide-to="2"></li>
                                </ol>
                            </div>
                        </div> <!-- //CArosisel-review-->
                    </div><!--//Row-->
                </div><!--//Container-->
            </div> <!--testimonials outside of container-->
        </section><!--testimonials section end-->

        <div class="clearfix" style="margin-top:15px;"></div>
        <section>
            <div class="cbx-contact-area">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="cbx-heading text-center">
                                <h2 class="uppercase wow fadeInUp">Komentar</h2>
                                <hr noshade size="" width="" color="">
                            </div>
                        </div>
                    </div><!--//ROW Our Team-->
                </div>
                <div class="cbx-contactform-area">
                    <div class="cbx-contactform-inner">
                        <div class="container">
                            <div class="row">
                                <div class="col-sm-6 xs-text-center wow fadeInUp ">
                                    <div class="cbx-cform-area">
                                        <form method="POST" role="form" action="{{url('admin/komentar')}}" >
                                            @csrf
                                            <div class="form-group">
                                                <label for="" class="control-label">Nama</label>
                                                <input type="text" class="form-control" name="nama">
                                            </div>
                                            <div class="form-group">
                                                <label for="" class="control-label">Komentar</label>
                                                <textarea name="komentar" class="form-control"></textarea>
                                            </div>
                                            <div class="col-sm-10 col-sm-offset-1 xs-text-center cbx-submit-area">
                                                <button type="submit" name="submit" class="btn btn-block lz-git-submit-btn cbx-submit">Send</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--//Container-->
        </section>
@endsection