@extends('layouts/common')

@section('css')
<link rel="stylesheet" href="{{ asset('css/index.css') }}">
@endsection

@section('content')
<div class="contact-form__content">
    <div class="contact-form__content-heading">
        <h2>Contact</h2>
    </div>
    <form class="form" action="/confirm" method="post">
        @csrf
        <div class="form__group">
            <div class="form__group-title">
                <span class="form__label-item">お名前</span>
                <span class="form__group-required">※</span>
            </div>
             <div class="form__group-content_name">
                <input type="text" name="last_name" placeholder="例:山田" value="{{old('last_name')}}">
                <input type="text" name="first_name" placeholder="例:太郎" value="{{old('first_name')}}">
             </div>
        </div>
        <div class="form__error">
                @error('last_name')
                    {{ $message }}
                @enderror
                @error('first_name')
                    {{ $message }}
                @enderror
             </div>
        <div class="form__group">
            <div class="form__group-title">
                <span class="form__label-item">性別</span>
                <span class="form__group-required">※</span>
            </div>
             <div class="form__group-content_gender">
                <input type="radio" name="gender" value=1 checked>男性
                <input type="radio" name="gender" value=2>女性
                <input type="radio" name="gender" value=3>その他
             </div>
        </div>
        <div class="form__error">
                @error('gender')
                    {{ $message }}
                @enderror
             </div>
        <div class="form__group">
            <div class="form__group-title">
                <span class="form__label-item">メールアドレス</span>
                <span class="form__group-required">※</span>
            </div>
             <div class="form__group-content_email">
                <input type="email" name="email" placeholder="例:test@example.com" value="{{old('email')}}">
             </div>
        </div>
        <div class="form__error">
                @error('email')
                    {{ $message }}
                @enderror
             </div>
        <div class="form__group">
            <div class="form__group-title">
                <span class="form__label-item">電話番号</span>
                <span class="form__group-required">※</span>
            </div>
             <div class="form__group-content_tel">
                <input type="tel" name="tel_first" placeholder="090" value="{{old('tel_first')}}">
                <span>-</span>
                <input type="tel" name="tel_second" placeholder="1234" value="{{old('tel_second')}}">
                <span>-</span>
                <input type="tel" name="tel_third" placeholder="5678" value="{{old('tel_third')}}">
             </div>
        </div>
        <div class="form__error">
                @error('tel_first')
                    {{ $message }}
                @enderror
                @error('tel_second')
                    {{ $message }}
                @enderror
                @error('tel_third')
                    {{ $message }}
                @enderror
             </div>
        <div class="form__group">
            <div class="form__group-title">
                <span class="form__label-item">住所</span>
                <span class="form__group-required">※</span>
            </div>
             <div class="form__group-content_address">
                <input type="text" name="address" placeholder="東京都渋谷区千駄ヶ谷1-2-3" value="{{old('address')}}">
             </div>
        </div>
        <div class="form__error">
                @error('address')
                    {{ $message }}
                @enderror
             </div>
        <div class="form__group">
            <div class="form__group-title">
                <span class="form__label-item">建物名</span>
            </div>
             <div class="form__group-content_building">
                <input type="text" name="building" placeholder="千駄ヶ谷マンション101">
             </div>
        </div>
        <div class="form__group">
            <div class="form__group-title">
                <span class="form__label-item">お問い合わせの種類</span>
                <span class="form__group-required">※</span>
            </div>
             <div class="form__group-content_content">
                <select name="content" defaultValue="選択してください">
                    <option disabled selected>選択してください</option>
                    <option value="商品のお届けについて">商品のお届けについて</option>
                    <option value="商品の交換いついて">商品の交換について</option>
                    <option value="商品トラブル">商品トラブル</option>
                    <option value="ショップへのお問い合わせ">ショップへのお問い合わせ</option>
                    <option value="その他">その他</option>
                </select>
             </div>
        </div>
        <div class="form__error">
                @error('content')
                    {{ $message }}
                @enderror
             </div>
        <div class="form__group">
            <div class="form__group-title">
                <span class="form__label-item">お問い合わせ内容</span>
                <span class="form__group-required">※</span>
            </div>
             <div class="form__group-content_detail">
                <textarea name="detail" placeholder="お問い合わせ内容をご記載くだい" value="{{old('detail')}}"></textarea>
             </div>
        </div>
        <div class="form__error">
                @error('detail')
                    {{ $message }}
                @enderror
             </div>
        <div class="form__button">
            <button class="form__button-submit" type="submit">確認画面</button>
        </div>
    </form>
</div>


@endsection