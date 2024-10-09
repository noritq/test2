@section('content')
<div class="admin__content">
    <div class="admin__content-heading">
        <h2>Admin</h2>
    </div>
    <div class="admin__content-form">
        <div class="admin__content-form__index">
            <form action="">
                <input class="admin__content-form__name" type="text" placeholder="名前やメールアドレスを入力してください">
                <select class="admin__content-form__gender" name="gender" id="">
                    <option value="1">男性</option>
                    <option value="2">女性</option>
                    <option value="3">その他</option>
                </select>
                    <select class="admin__content-form__detail" name="detail" defaultValue="選択してください">
                    <option disabled selected>お問い合わせの種類</option>
                    <option value="商品のお届けについて">商品のお届けについて</option>
                    <option value="商品の交換いついて">商品の交換について</option>
                    <option value="商品トラブル">商品トラブル</option>
                    <option value="ショップへのお問い合わせ">ショップへのお問い合わせ</option>
                    <option value="その他">その他</option>
                </select>
                <input class="admin__content-form__date" type="date">
                <button>検索</button>
            </form>
            <div class="admin__content-export">
            <form action=""><button>エクスポート</button></form>
            </div>
            <div class="admin__content-list">
                <table class="admin__content-table">
                    <tr class="admin__content-table-header">
                        <th>お名前</th>
                        <th>性別</th>
                        <th>メールアドレス</th>
                        <th colspan="2">お問い合わせの種類</th>
                    </tr>
                    <tr class="admin__content-table-data">
                        <td>山田</td>
                        <td>男性</td>
                        <td>test@example.com</td>
                        <td>商品の交換について</td>
                        <td>詳細</td>
                    </tr>
                </table>
                <div class="admin__content-logout">
                    <form action="/logout" method="post">
                        @csrf
                        <button class="admin__conttent-logout-button">logout</button>
                    </form>
                </div>
            </div>

            
        </div>
    </div>
</div>


@endsection