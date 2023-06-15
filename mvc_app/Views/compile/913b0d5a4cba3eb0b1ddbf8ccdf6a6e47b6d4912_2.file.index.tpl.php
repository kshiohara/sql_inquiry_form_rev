<?php
/* Smarty version 4.3.1, created on 2023-06-14 12:17:15
  from '/Applications/MAMP/htdocs/sql_inquiry_form/mvc_app/Views/contact/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6489313ba2c902_05378339',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '913b0d5a4cba3eb0b1ddbf8ccdf6a6e47b6d4912' => 
    array (
      0 => '/Applications/MAMP/htdocs/sql_inquiry_form/mvc_app/Views/contact/index.tpl',
      1 => 1686712632,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6489313ba2c902_05378339 (Smarty_Internal_Template $_smarty_tpl) {
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
                <h2 class="mb-4">お問い合せ</h2>
                    <form action="/contact/confirm" method="post" class="bg-white p-3 rounded mb-5">
                        <p class="error-text"><?php echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['errorMessages']->value['auth'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
</p>
                        <div class="form-group">
                            <label for="name">氏名</label>
                            <input type="text" class="form-control" name="name" placeholder="テスト太郎" value="<?php echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['post']->value['name'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
">
                            <p class="error-text"><?php echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['errorMessages']->value['name'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
</p>
                        </div>
                        <div class="form-group">
                            <label for="furigana">フリガナ</label>
                            <input type="text" class="form-control" name="kana" placeholder="テストタロウ" value="<?php echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['post']->value['kana'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
">
                            <p class="error-text"><?php echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['errorMessages']->value['kana'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
</p>
                        </div>
                        <div class="form-group">
                            <label for="tel">電話番号（数字のみ、ハイフン無し）</label>
                            <input type="tel" class="form-control"  name="tel" placeholder="09012345678" value="<?php echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['post']->value['tel'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
">
                            <p class="error-text"><?php echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['errorMessages']->value['tel'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
</p>
                        </div>
                        <div class="form-group">
                            <label for="email">メールアドレス</label>
                            <input type="email" class="form-control" name="email" placeholder="sample@email.com" value="<?php echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['post']->value['email'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
">
                            <p class="error-text"><?php echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['errorMessages']->value['email'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
</p>
                        </div>
                        <div class="form-group">
                            <label for="textarea">お問い合せ内容</label>
                            <textarea class="form-control" name="body" placeholder="お問合せ内容を記入して下さい。"><?php echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['post']->value['body'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
</textarea>
                            <p class="error-text"><?php echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['errorMessages']->value['body'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
</p>
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
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['inquiries']->value, 'inquiry');
$_smarty_tpl->tpl_vars['inquiry']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['inquiry']->value) {
$_smarty_tpl->tpl_vars['inquiry']->do_else = false;
?>
                    <tr class="bg-light">
                        <td><?php echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['inquiry']->value->name ?? null)===null||$tmp==='' ? '' ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
</td>
                        <td><?php echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['inquiry']->value->kana ?? null)===null||$tmp==='' ? '' ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
</td>
                        <td><?php echo htmlspecialchars((string) (($tmp = htmlspecialchars((string)$_smarty_tpl->tpl_vars['inquiry']->value->tel, ENT_QUOTES, 'UTF-8', true) ?? null)===null||$tmp==='' ? '' ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
</td>
                        <td><?php echo htmlspecialchars((string) (($tmp = htmlspecialchars((string)$_smarty_tpl->tpl_vars['inquiry']->value->email, ENT_QUOTES, 'UTF-8', true) ?? null)===null||$tmp==='' ? '' ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
</td>
                        <td><?php echo nl2br((string) (($tmp = htmlspecialchars((string)$_smarty_tpl->tpl_vars['inquiry']->value->body, ENT_QUOTES, 'UTF-8', true) ?? null)===null||$tmp==='' ? '' ?? null : $tmp), (bool) 1);?>
</td>
                        <form action="/contact/edit" method="post">
                            <input type="hidden" name="id" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['inquiry']->value->id, ENT_QUOTES, 'UTF-8');?>
">
                            <td><input type="submit" class="" name="edit" value="編集"></td>
                        </form>
                        <form action="/contact/delete" method="post">
                             <input type="hidden" name="id" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['inquiry']->value->id, ENT_QUOTES, 'UTF-8');?>
">
                             <td><input type="submit" class="" name="delete" onclick="return deleteContact();" value="削除"></td>
                        </form>
                    </tr>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </tbody>
            </table>
        </div>
    </div>


<?php echo '<script'; ?>
>
"use strict";

function deleteContact(){
    const confirmDelete = confirm("本当に削除しますか？");
    if(confirmDelete) {
       return true;
    } else {
       return false;
    }
}

<?php echo '</script'; ?>
>

</body>
</html>
<?php }
}
