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
                <h3 class="mb-8">お問い合わせ内容　確認画面</h3>
                <form action="/contact/complete" method="post" name="confirmForm" class="bg-white p-3 rounded mb-5">
                    <div class="form-group">
                        <p>氏名</p>
                        <p class="err-msg-name"></p>
                        <p id="name">{$contact.name|default:''}</p>
                    </div>
                    <div class="form-group">
                        <p>フリガナ</p>
                        <p class="err-msg-kana"></p>
                        <p id="kana">{$contact.kana|default:''}</p>
                    </div>
                    <div class="form-group">
                        <p>電話番号（数字のみ、ハイフン無し）</p>
                        <p class="err-msg-tel"></p>
                        <p id="tel">{$contact.tel|default:''}</p>
                    </div>
                    <div class="form-group">
                        <p>メールアドレス</p>
                        <p class="err-msg-email"></p>
                        <p id="email">{$contact.email|default:''}</p>
                    </div>
                    <div class="form-group">
                        <p>お問い合せ内容</p>
                        <p class="err-msg-body"></p>
                        <p id="body">{$contact.body|default:''}</p>
                    </div>
                    <button type="button" id="back" class="btn bg-secondary my-2 text-light">キャンセル</button>
                    <input type='submit' name="submit" id="submit" class="btn bg-warning my-2" value="送信">
                  </form>
            </div>
        </div>
    </div>

{literal}
<script>
"use strict";

{

  // 「キャンセル」ボタン押した時
  const backBtn = document.getElementById('back');
  backBtn.addEventListener('click', function() {
    history.back();
  });

  // 「送信」ボタン押した時
  const submitBtn = document.getElementById('submit');
  submitBtn.addEventListener('click', function() {

    const maxLength = 10;

    const name = document.getElementById('name');
    const nameElement = name.textContent;
    const kana = document.getElementById('kana');
    const kanaElement = kana.textContent;
    const tel = document.getElementById('tel');
    const telElement = tel.textContent;
    const email = document.getElementById('email');
    const emailElement = email.textContent;
    const body = document.getElementById('body');
    const bodyElement = body.textContent;

    const errMsgName = document.querySelector('.err-msg-name');
    const errMsgKana = document.querySelector('.err-msg-kana');
    const errMsgTel = document.querySelector('.err-msg-tel');
    const errMsgEmail = document.querySelector('.err-msg-email');
    const errMsgBody = document.querySelector('.err-msg-body');
    const pattern = /^[A-Za-z0-9]{1}[A-Za-z0-9_.-]*@[A-Za-z0-9_.-]+\.[A-Za-z0-9]+$/;

    // 氏名のバリデーション
    // 空白だった場合
    if(name.length == 0) {
      errMsgName.textContent = "氏名を入力してください。";
    }
    // 10文字以上だった場合
    if(name.length > maxLength) {
      errMsgName.textContent = "氏名は10文字以内で入力願います。";
    }

    // フリガナのバリデーション
    // 空白だった場合
    if(kana.length == 0) {
      errMsgKana.textContent = "フリガナを入力してください。";
    }
    // 10文字以上だった場合
    if(kana.length > maxLength) {
      errMsgKana.textContent = "フリガナは10文字以内で入力願います。";
    }

    // 電話番号のバリデーション
    // 数字かどうかの確認
    if(!tel.toString().match(/[^0-9]+/)) {
      errMsgTel.textContent = "電話番号を数字で入力してください。(ハイフン無し)";
    }

    // Emailのバリデーション
    // 空白だった場合
    if (email.length == 0) {
      errMsgEmail.textContent = "メールアドレスを入力してください。";
    }
    // 有効なメールアドレスでなかった場合
    if (! pattern.test(emailElement)) {
      errMsgEmail.textContent = "有効なメールアドレスを入力してください。";
    }

    // お問合せ内容のバリデーション
    // 空白だった場合
    if(body.length == 0) {
      errMsgBody.textContent = "お問合せ内容を入力してください";
    }
  });

}
</script>
{/literal}

</body>
</html>
