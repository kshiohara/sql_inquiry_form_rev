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
                <h3 class="mb-8">お問い合わせ内容編集</h3>
                <form action="/contact/update" method="post" class="bg-white p-3 rounded mb-5">
                    <div class="form-group">
                        <input type="hidden" name="id" value="{$contact->id}">
                        <p>氏名</p>
                        <p class="err-msg-name"></p>
                        <input type="text" class="form-control" name="name" placeholder="テスト太郎" value="{$post['name']|default:$contact->name}">
                    </div>

                    <div class="form-group">
                        <p>フリガナ</p>
                        <p class="err-msg-kana"></p>
                        <input type="text" class="form-control" name="kana" placeholder="テストタロウ" value="{$post['kana']|default:$contact->kana}">
                    </div>

                    <div class="form-group">
                        <p>電話番号（数字のみ、ハイフン無し）</p>
                        <p class="err-msg-tel"></p>
                        <input type="tel" class="form-control" name="tel" placeholder="0000000000" value="{$post['tel']|default:$contact->tel}">
                    </div>

                    <div class="form-group">
                        <p>メールアドレス</p>
                        <p class="err-msg-email"></p>
                        <input type="email" class="form-control" name="email" placeholder="test@email.com" value="{$post['email']|default:$contact->email}">
                    </div>

                    <div class="form-group">
                        <p>お問い合せ内容</p>
                        <p class="err-msg-body"></p>
                        <textarea class="form-control" name="body">{$post['body']|default:$contact->body}</textarea>
                    </div>

                    <p>上記の内容で問題なければ、下部の編集ボタンを押してください。</p>
                    <button type="button" id="back" class="btn bg-secondary my-2 text-light">キャンセル</button>
                    <input type='submit' name="submit" id="submit" class="btn bg-warning my-2" value="編集">
                  </form>
            </div>
        </div>
    </div>

{literal}
<script>
"use strict";

{
    const backBtn = document.getElementById('back');
    backBtn.addEventListener('click', function(){
        history.back();
    });
}

</script>
{/literal}
</body>
</html>
