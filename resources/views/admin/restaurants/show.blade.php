@extends('layouts.app') 

@section('content')
<div class="col container">
    <div class="row justify-content-center">
        <div class="col-xl-7 col-lg-8 col-md-9">
            <nav class="mb-4" style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a href="{{ route('admin.restaurants.index') }}">店舗一覧</a></li>
                    <li class="breadcrumb-item active" aria-current="page">店舗詳細</li>
                </ol>
            </nav>

            <h1 class="mb-4 text-center">{{ $restaurant->name }}</h1>

            <div class="container mb-4">
                <div class="row pb-2 mb-2 border-bottom">
                    <div class="col-3"><span class="fw-bold">ID</span></div>
                    <div class="col"><span>{{ $restaurant->id }}</span></div>
                </div>

                <div class="row pb-2 mb-2 border-bottom">
                    <div class="col-3"><span class="fw-bold">店舗名</span></div>
                    <div class="col"><span>{{ $restaurant->name }}</span></div>
                </div>

                <div class="row pb-2 mb-2 border-bottom">
                    <div class="col-3"><span class="fw-bold">住所</span></div>
                    <div class="col"><span>{{ $restaurant->address }}</span></div>
                </div>

                <div class="row pb-2 mb-2 border-bottom">
                    <div class="col-3"><span class="fw-bold">郵便番号</span></div>
                    <div class="col"><span>{{ substr($restaurant->postal_code, 0, 3) . '-' . substr($restaurant->postal_code, 3) }}</span></div>
                </div>

                <div class="row pb-2 mb-2 border-bottom">
                    <div class="col-3"><span class="fw-bold">説明</span></div>
                    <div class="col"><span>{{ $restaurant->description }}</span></div>
                </div>

                <div class="row pb-2 mb-2 border-bottom">
                    <div class="col-3"><span class="fw-bold">最低価格</span></div>
                    <div class="col"><span>{{ number_format($restaurant->lowest_price) }}円</span></div>
                </div>

                <div class="row pb-2 mb-2 border-bottom">
                    <div class="col-3"><span class="fw-bold">最高価格</span></div>
                    <div class="col"><span>{{ number_format($restaurant->highest_price) }}円</span></div>
                </div>

                <div class="row pb-2 mb-2 border-bottom">
                    <div class="col-3"><span class="fw-bold">営業時間</span></div>
                    <div class="col"><span>{{ $restaurant->opening_time }} ～ {{ $restaurant->closing_time }}</span></div>
                </div>

                <div class="row pb-2 mb-2 border-bottom">
                    <div class="col-3"><span class="fw-bold">座席数</span></div>
                    <div class="col"><span>{{ $restaurant->seating_capacity }}席</span></div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
