@extends('layouts.admin')

@section('content')
    <div class="col container">
        <div class="row justify-content-center">
            <div class="col-xxl-9 col-xl-10 col-lg-11">
                <h1 class="mb-4 text-center">店舗一覧</h1>

                <div class="d-flex justify-content-between align-items-end">
                    <form method="GET" action="{{ route('admin.restaurants.index') }}" class="nagoyameshi-admin-search-box mb-3">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="店舗名で検索" name="keyword" value="{{ $keyword }}">
                            <button type="submit" class="btn text-white shadow-sm nagoyameshi-btn">検索</button>
                        </div>
                    </form>
                </div>

                <div>
                    <p class="mb-0">計{{ number_format($total) }}件</p>
                </div>

                <table class="table table-hover nagoyameshi-users-table">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">店舗名</th>
                            <th scope="col">最低価格</th>
                            <th scope="col">最高価格</th>
                            <th scope="col"></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($restaurants as $restaurant)
                            <tr>
                                <td>{{ $restaurant->id }}</td>
                                <td>{{ $restaurant->name }}</td>
                                <td>{{ number_format($restaurant->lowest_price) }}円</td>
                                <td>{{ number_format($restaurant->highest_price) }}円</td>
                                <td><a href="{{ route('admin.restaurants.show', $restaurant) }}">詳細</a></td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>

                <div class="d-flex justify-content-center">
                    {{ $restaurants->appends(request()->query())->links() }}
                </div>
            </div>
        </div>
    </div>
@endsection
