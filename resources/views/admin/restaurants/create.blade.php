@extends('layouts.app')

@section('content')
<div class="col container">
    <div class="row justify-content-center">
        <div class="col-xl-7 col-lg-8 col-md-9">
            <nav class="mb-4" style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a href="{{ route('admin.restaurants.index') }}">店舗一覧</a></li>
                    <li class="breadcrumb-item active" aria-current="page">店舗登録</li>
                </ol>
            </nav>

            <div class="container">
                <h1 class="text-center mb-4">店舗登録</h1>

                <form method="POST" action="{{ route('admin.restaurants.store') }}" enctype="multipart/form-data">
                @csrf

                    {{-- 店舗名 --}}
                    <div class="row mb-3 align-items-center">
                        <label for="name" class="col-sm-3 col-form-label">店舗名</label>
                        <div class="col-sm-9">
                            <input type="text" name="name" id="name" value="{{ old('name') }}" class="form-control">
                        </div>
                    </div>

                    {{-- 店舗画像 --}}
                    <div class="row mb-3 align-items-center">
                        <label for="image" class="col-sm-3 col-form-label">店舗画像</label>
                        <div class="col-sm-9">
                            <input type="file" name="image" id="image" class="form-control">
                        </div>
                    </div>

                    {{-- 説明 --}}
                    <div class="row mb-3 align-items-center">
                        <label for="description" class="col-sm-3 col-form-label">説明</label>
                        <div class="col-sm-9">
                            <textarea name="description" id="description" class="form-control" rows="4">{{ old('description') }}</textarea>
                        </div>
                    </div>

                    {{-- 最低価格 --}}
                    <div class="row mb-3 align-items-center">
                        <label for="lowest_price" class="col-sm-3 col-form-label">最低価格</label>
                        <div class="col-sm-9">
                            <select name="lowest_price" id="lowest_price" class="form-control">
                                <option value="">選択されていません</option>
                                <option value="1000">1,000円</option>
                                <option value="2000">2,000円</option>
                                <option value="3000">3,000円</option>
                                <option value="4000">4,000円</option>
                            </select>             
                        </div>
                    </div>

                    {{-- 最高価格 --}}
                    <div class="row mb-3 align-items-center">
                        <label for="highest_price" class="col-sm-3 col-form-label">最高価格</label>
                        <div class="col-sm-9">
                            <select name="highest_price" id="highest_price" class="form-control">
                                <option value="">選択されていません</option>
                                <option value="4000">4,000円</option>
                                <option value="5000">5,000円</option>
                                <option value="6000">6,000円</option>
                                <option value="7000">7,000円</option>
                            </select>   
                            
                        </div>
                    </div>

                    {{-- 郵便番号 --}}
                    <div class="row mb-3 align-items-center">
                        <label for="postal_code" class="col-sm-3 col-form-label">郵便番号</label>
                        <div class="col-sm-9">
                            <input type="text" name="postal_code" id="postal_code" class="form-control" value="{{ old('postal_code') }}">
                        </div>
                    </div>

                    {{-- 住所 --}}
                    <div class="row mb-3 align-items-center">
                        <label for="address" class="col-sm-3 col-form-label">住所</label>
                        <div class="col-sm-9">
                            <input type="text" name="address" id="address" class="form-control" value="{{ old('address') }}">
                        </div>
                    </div>

                    {{-- 開店時間 --}}
                    <div class="row mb-3 align-items-center">
                        <label for="opening_time" class="col-sm-3 col-form-label">開店時間</label>
                        <div class="col-sm-9">
                            <select name="opening_time" id="opening_time" class="form-control">
                                <option value="">選択されていません</option>
                                <option value='10:00'>10:00</option>
                                <option value='11:00'>11:00</option>
                                <option value='12:00'>12:00</option>
                                <option value='13:00'>13:00</option>
                                <option value='14:00'>14:00</option>
                                <option value='15:00'>15:00</option>
                            </select>
                        </div>
                    </div>

                    {{-- 閉店時間 --}}
                    <div class="row mb-3 align-items-center">
                        <label for="closing_time" class="col-sm-3 col-form-label">閉店時間</label>
                        <div class="col-sm-9">
                            <select name="closing_time" id="closing_time" class="form-control">
                                <option value="">選択されていません</option>
                                <option value='16:00'>16:00</option>
                                <option value='17:00'>17:00</option>
                                <option value='18:00'>18:00</option>
                                <option value='19:00'>19:00</option>
                                <option value='20:00'>20:00</option>
                            </select>
                        </div>
                    </div>

                    {{-- 座席数 --}}
                    <div class="row mb-3 align-items-center">
                        <label for="seating_capacity" class="col-sm-3 col-form-label">座席数</label>
                        <div class="col-sm-9">
                            <input type="number" name="seating_capacity" id="seating_capacity" 
                            class="form-control" min="0"
                            value="{{ old('seating_capacity') }}">
                        </div>
                    </div>

                    <div class="text-center">
                        <button type="submit" class="btn text-white shadow-sm nagoyameshi-btn">登録</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
