<?php
/* Smarty version 4.3.1, created on 2023-06-13 17:19:38
  from '/Applications/MAMP/htdocs/sql_inquiry_form/mvc_app/Views/contact/edit.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6488269a43d777_70821849',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e58975fe03c6e47fd1555072084c865f1982c59b' => 
    array (
      0 => '/Applications/MAMP/htdocs/sql_inquiry_form/mvc_app/Views/contact/edit.tpl',
      1 => 1686644372,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6488269a43d777_70821849 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
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
                        <input type="hidden" name="id" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['contact']->value->id, ENT_QUOTES, 'UTF-8');?>
">
                        <p>氏名</p>
                        <p class="err-msg-name"></p>
                        <input type="text" class="form-control" name="name" placeholder="テスト太郎" value="<?php echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['post']->value['name'] ?? null)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['contact']->value->name ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
">
                    </div>

                    <div class="form-group">
                        <p>フリガナ</p>
                        <p class="err-msg-kana"></p>
                        <input type="text" class="form-control" name="kana" placeholder="テストタロウ" value="<?php echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['post']->value['kana'] ?? null)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['contact']->value->kana ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
">
                    </div>

                    <div class="form-group">
                        <p>電話番号（数字のみ、ハイフン無し）</p>
                        <p class="err-msg-tel"></p>
                        <input type="tel" class="form-control" name="tel" placeholder="0000000000" value="<?php echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['post']->value['tel'] ?? null)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['contact']->value->tel ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
">
                    </div>

                    <div class="form-group">
                        <p>メールアドレス</p>
                        <p class="err-msg-email"></p>
                        <input type="email" class="form-control" name="email" placeholder="test@email.com" value="<?php echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['post']->value['email'] ?? null)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['contact']->value->email ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
">
                    </div>

                    <div class="form-group">
                        <p>お問い合せ内容</p>
                        <p class="err-msg-body"></p>
                        <textarea class="form-control" name="body"><?php echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['post']->value['body'] ?? null)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['contact']->value->body ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
</textarea>
                    </div>

                    <p>上記の内容で問題なければ、下部の編集ボタンを押してください。</p>
                    <button type="button" id="back" class="btn bg-secondary my-2 text-light">キャンセル</button>
                    <input type='submit' name="submit" id="submit" class="btn bg-warning my-2" value="編集">
                  </form>
            </div>
        </div>
    </div>


<?php echo '<script'; ?>
>
"use strict";

{
    const backBtn = document.getElementById('back');
    backBtn.addEventListener('click', function(){
        history.back();
    });
}

<?php echo '</script'; ?>
>

</body>
</html>
<?php }
}
