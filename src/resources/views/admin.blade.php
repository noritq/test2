@extends('layouts/common')

@section('css')
<link rel="stylesheet" href="{{ asset('css/admin.css') }}">
@endsection

@section('content')
<div class="admin__content">
    <div class="admin__content-heading">
        <h2>Admin</h2>
    </div>
    <div class="admin__content-form">
        <div class="admin__content-form__index">
            <form action="/admin/search" method="get">
                @csrf
                <input class="admin__content-form__name" type="text" name="keyword" value="{{old('keyword')}}" placeholder="名前やメールアドレスを入力してください">
                <select class="admin__content-form__gender" name="gender" id="">
                    <option disabled selected>性別</option>
                    <option value="1">男性</option>
                    <option value="2">女性</option>
                    <option value="3">その他</option>
                </select>
                    <select class="admin__content-form__detail" name="category_id" defaultValue="選択してください">
                    <option disabled selected>お問い合わせの種類</option>
                    @foreach ($categories as $category)
                    <option value="{{ $category['id'] }}">{{ $category['content'] }}</  option>
                    @endforeach
                </select>
                <input class="admin__content-form__date" type="date">
                <button>検索</button>
            </form>
            <div class="admin__content-export">
            <form action=""><button>エクスポート</button></form>
            </div>
            <div class="pagination">
            {{ $contacts->links('vendor.pagination.bootstrap-4') }}
            </div>
            <div class="admin__content-list">
                <table class="admin__content-table">
                    <tr class="admin__content-table-header">
                        <th>お名前</th>
                        <th>性別</th>
                        <th>メールアドレス</th>
                        <th colspan="2">お問い合わせの種類</th>
                    </tr>
                    @foreach ($contacts as $contact)
                    <tr class="admin__content-table-data">
                        <td><p>{{$contact['last_name']}} {{$contact['first_name']}}</p></td>
                        <td><p>{{$contact['gender']}}</p></td>
                        <td><p>{{$contact['email']}}</p></td>
                        <td><p>{{$category['content']}}</p></td>
                        <td>詳細</td>
                    </tr>
                    @endforeach
                </table>

                <div class="admin__content-logout">
                    <form action="/logout" method="post">
                        @csrf
                        <button class="admin__content-logout-button">logout</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection