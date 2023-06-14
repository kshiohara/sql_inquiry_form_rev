<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Casteria</title>
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
    <div class="p-4 container-field form-orange">
        <div class="row justify-content-center">
            <div class="col-lg-6 mx-auto col-md-8">
                <h2 class="mb-4">お問い合せ</h2>
                    <form action="/contact/confirm" method="post" class="bg-white p-3 rounded mb-5">
                        <p class="error-text">{$errorMessages['auth']|default:''}</p>
                        <div class="form-group">
                            <label for="name">氏名</label>
                            <input type="text" class="form-control" name="name" placeholder="テスト太郎" value="{$post['name']|default:''}">
                            <p class="error-text">{$errorMessages['name']|default:''}</p>
                        </div>
                        <div class="form-group">
                            <label for="furigana">フリガナ</label>
                            <input type="text" class="form-control" name="kana" placeholder="テストタロウ" value="{$post['kana']|default:''}">
                            <p class="error-text">{$errorMessages['kana']|default:''}</p>
                        </div>
                        <div class="form-group">
                            <label for="tel">電話番号（数字のみ、ハイフン無し）</label>
                            <input type="tel" class="form-control"  name="tel" placeholder="09012345678" value="{$post['tel']|default:''}">
                            <p class="error-text">{$errorMessages['tel']|default:''}</p>
                        </div>
                        <div class="form-group">
                            <label for="email">メールアドレス</label>
                            <input type="email" class="form-control" name="email" placeholder="sample@email.com" value="{$post['email']|default:''}">
                            <p class="error-text">{$errorMessages['email']|default:''}</p>
                        </div>
                        <div class="form-group">
                            <label for="textarea">お問い合せ内容</label>
                            <textarea class="form-control" name="body" placeholder="お問合せ内容を記入して下さい。">{$post['body']|default:""}</textarea>
                            <p class="error-text">{$errorMessages['body']|default:''}</p>
                        </div>
                        <a href="/" class="text-white form-group btn bg-secondary my-2">ホーム</a>
                        <button class="btn bg-warning my-2">送信</button>
                    </form>
            </div>
            <table class="table mx-5">
                <thead class="table-dark">
                    <tr>
                        <th>氏名</th>
                        <th>フリガナ</th>
                        <th>電話番号</th>
                        <th>メールアドレス</th>
                        <th>お問い合せ内容</th>
                        <th></th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                {foreach $inquiries as $inquiry}
                    <tr class="bg-light">
                        <td>{$inquiry->name|default:''}</td>
                        <td>{$inquiry->kana|default:''}</td>
                        <td>{$inquiry->tel|escape:'html'|default:''}</td>
                        <td>{$inquiry->email|escape:'html'|default:''}</td>
                        <td>{$inquiry->body|escape:'html'|default:''|nl2br nofilter}</td>
                        <form action="/contact/edit" method="post">
                            <input type="hidden" name="id" value="{$inquiry->id}">
                            <td><input type="submit" class="" name="edit" value="編集"></td>
                        </form>
                        <form action="/contact/delete" method="post">
                             <input type="hidden" name="id" value="{$inquiry->id}">
                             <td><input type="submit" class="" name="delete" onclick="return deleteContact();" value="削除"></td>
                        </form>
                    </tr>
                {/foreach}
                </tbody>
            </table>
        </div>
    </div>

{literal}
<script>
"use strict";

function deleteContact(){
    const confirmDelete = confirm("本当に削除しますか？");
    if(confirmDelete) {
       return true;
    } else {
       return false;
    }
}

</script>
{/literal}
</body>
</html>
