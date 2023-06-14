<?php
require_once(ROOT_PATH . 'Models/Db.php');

class Contact extends Db
{

    public function __construct($dbh = null)
    {
        parent::__construct($dbh);
        $this->dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }

    // お問い合わせ情報参照用
    public function showInquiry() {
        // select文を変数に格納
        $query = 'SELECT id, name, kana, tel, email, body FROM contacts';
        // SQLステートメントを実行し、結果を変数に格納
        $stmt = $this->dbh->query($query);
        $result = $stmt->fetchAll(PDO::FETCH_OBJ);
        return $result;
    }

    /**
     * メールアドレスが一意か判定後ユーザー登録処理を行ってユーザーIDを返却する
     *
     * @param string $name 氏名
     * @param string $kana フリガナ
     * @param string $tel 電話番号
     * @param string $email メールアドレス
     * @param string $body お問合せ内容
     */
    public function completeContact(string $name, string $kana, string $tel, string $email, string $body)
    {
        try{
            // データベースのトランザクションを開始。トランザクション中にエラーが発生した場合、変更がロールバックされて元の状態に戻る。
            $this->dbh->beginTransaction();

            // contactsテーブルに下記情報を挿入するためのクエリを準備
            $query = 'INSERT INTO contacts (name, kana, tel, email, body) VALUES (:name, :kana, :tel, :email, :body)';
            // ユーザーから直接入力された情報をクエリに挿入してしまうとSQLインジェクションを受ける可能性がある為、prepare関数を使用し、後からクエリに値（変数）を当てはめる。
            $stmt = $this->dbh->prepare($query);
            // bindParam関数でプレースホルダに入力した値をバインドする。
            $stmt->bindParam(':name', $name, PDO::PARAM_STR);
            $stmt->bindParam(':kana', $kana, PDO::PARAM_STR);
            $stmt->bindParam(':tel', $tel, PDO::PARAM_STR);
            $stmt->bindParam(':email', $email, PDO::PARAM_STR);
            $stmt->bindParam(':body', $body, PDO::PARAM_STR);
            // クエリを実行
            $stmt->execute();

            // lastInsertId()メソッド:（contactsテーブルの）最後に挿入された行のIDを取得。
            $lastId = $this->dbh->lastInsertId();

            // トランザクションを完了することでデータの書き込みを確定させる
            $this->dbh->commit();

            return $lastId;
        } catch (PDOException $e) {
            // 不具合があった場合トランザクションをロールバックして変更をなかったコトにする。
            $this->dbh->rollBack();
            echo "登録失敗: " . $e->getMessage() . "\n";
            exit();
        }

    }

    // お問合せ内容編集用
    public function editContact(string $id): stdClass
    {
    try{
        $query = 'SELECT id, name, kana, tel, email, body FROM contacts WHERE id =:id';
        $stmt = $this->dbh->prepare($query);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_OBJ);
    } catch (PDOException $e) {
        echo "認証エラー: ". $e->getMessage(). "\n";
        exit();
    }
    }

    /**
     * お問合せ内容の情報を更新する
     * @param string $id ID
     * @param string $name 氏名
     * @param string $kana フリガナ
     * @param string $tel 電話番号
     * @param string $email メールアドレス
     * @param string $body お問合せ内容
     */

    public function updateContact(int $id, string $name, string $kana, string $tel, string $email, string $body)
    {
        try {
            $this->dbh->beginTransaction();

            $query = 'UPDATE contacts SET name = :name, kana = :kana, email = :email, tel = :tel, body = :body WHERE id = :id';
            $stmt = $this->dbh->prepare($query);
            $stmt->bindParam(':id', $id, PDO::PARAM_INT);
            $stmt->bindParam(':name', $name);
            $stmt->bindParam(':kana', $kana);
            $stmt->bindParam(':email', $email);
            $stmt->bindParam(':tel', $tel);
            $stmt->bindParam(':body', $body);

            $stmt->execute();
            $this->dbh->commit();
            return true;
        } catch (PDOException $e) {
            // 不具合があった場合トランザクションをロールバックして変更をなかったコトにする。
            $this->dbh->rollBack();
            echo "登録失敗: " . $e->getMessage() . "\n";
            exit();
        }

    }


    /**
     * ユーザーIDに対応するユーザーのデータをテーブルから削除する
     * @param string $id お問合せID
     * @return void
     */
    public function deleteContact(string $id)
    {
        try{
            $this->dbh->beginTransaction();
            $query = 'DELETE FROM contacts WHERE id = :id';
            $stmt = $this->dbh->prepare($query);
            $stmt->bindParam(':id', $id, PDO::PARAM_INT);
            $stmt->execute();
            // トランザクションを完了することでデータの書き込みを確定させる
            $this->dbh->commit();
            return;
        } catch (PDOException $e) {
            // 不具合があった場合トランザクションをロールバックして変更をなかったコトにする。
            $this->dbh->rollBack();
            echo "削除失敗: " . $e->getMessage() . "\n";
            exit();
        }
    }
}
