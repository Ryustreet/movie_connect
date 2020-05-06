<!DOCTYPE html>
@extends('layouts.app')

@section('content')
    <div class="night-sky" id="feature">
        <h2>Movie Connect</h2>
        <p>動画マッチングサービス<br>動画を編集したい人、動画を制作したい人にマッチングサービス </p>
    </div>

    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="http://file.gasmachiroshima.com/slide01.jpg" class="d-block w-100" alt="1枚目">
                <div class="carousel-caption d-none d-md-block">
                    <h5>スライド１</h5>
                    <p>説明</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="http://file.gasmachiroshima.com/slide02.jpg" class="d-block w-100" alt="２枚目">
                <div class="carousel-caption d-none d-md-block">
                    <h5>スライド２</h5>
                    <p>説明</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="http://file.gasmachiroshima.com/slide03.jpg" class="d-block w-100" alt="３枚目">
                <div class="carousel-caption d-none d-md-block">
                    <h5>スライド３</h5>
                    <p>説明</p>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button"         data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button"         data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    <div class="service-list" id="service">
        <h2>Service</h2>
        <div class="container">
            <div class="row">
                <div class="col-md-6 order-md-1">
                    <img src="http://file.gasmachiroshima.com/service1.jpg" alt="サービス１つめ" class="service-img">
                </div>
                <div class="col-md-6 service-description order-md-2">
                    <h3>動画編集を依頼したい</h3>
                    <hr color="#636e72">
                    <p>なんとかなんとかなんとかなんとかなんとかなんとかなんとかなんとかなんとかなんとか</p>
                    <a href=""class="btn btn-outline-secondary">詳細</a>
                </div>
                <div class="col-md-6 order-md-4">
                    <img src="http://file.gasmachiroshima.com/service2.jpg" alt="サービス２つめ" class="service-img">
                </div>
                <div class="col-md-6 service-description order-md-3">
                    <h3>サービス２</h3>
                    <hr color="#636e72">
                    <p>なんとかなんとかなんとかなんとかなんとかなんとかなんとかなんとかなんとかなんとか</p>
                    <a href=""class="btn btn-outline-secondary">詳細</a>
                </div>

                <div class="col-md-6 order-md-5">
                    <img src="http://file.gasmachiroshima.com/service3.jpg" alt="サービス３つめ" class="service-img">
                </div>
                <div class="col-md-6 service-description order-md-6">
                    <h3>サービス３</h3>
                    <hr color="#636e72">
                    <p>なんとかなんとかなんとかなんとかなんとかなんとかなんとかなんとかなんとかなんとか</p>
                    <a href=""class="btn btn-outline-secondary">詳細</a>
                </div>
            </div>
        </div>
    </div>

    <div class="night-sky" id="information">
        <h2>ムビコネをはじめよう</h2>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="info">
                        <div class="icon">
                            <i class="fas fa-user"></i>
                        </div>
                        <p>なんとかなんとかなんとかなんとかなんとかなんとかなんとか</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="info">
                        <div class="icon">
                            <i class="fas fa-blog"></i>
                        </div>
                        <p>なんとかなんとかなんとかなんとかなんとかなんとかなんとか</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="info">
                        <div class="icon">
                            <i class="fas fa-laptop-code"></i>
                        </div>
                        <p>なんとかなんとかなんとかなんとかなんとかなんとかなんとか</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
