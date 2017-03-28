<?php

require_once("functions.php");

$errors = array();

if(isset($_POST['submit'])){
    
    $name = $_POST['name'];
    $memo = $_POST['memo'];

    $name = htmlspecialchars($name, ENT_QUOTES);
    $memo = htmlspecialchars($memo, ENT_QUOTES);

    if($name === ''){
        $errors['name'] = 'お名前が入力されていません。';
    }

    if($memo === ''){
        $errors['memo'] = 'メモが入力されていません。';
    }
    
    if(count($errors) === 0){
        
        $dbh = db_connect();

        $sql = 'INSERT INTO tasks (name, memo, done) VALUES (?, ?, 0)';
        $stmt = $dbh->prepare($sql);

        
        $stmt->bindValue(1, $name, PDO::PARAM_STR);
        $stmt->bindValue(2, $memo, PDO::PARAM_STR);
        $stmt->execute();

        $dbh = null;

        unset($name, $memo);
    }
}


if(isset($_POST['method']) && ($_POST['method'] === 'put')){
    
    
    $id = $_POST["id"];
    $id = htmlspecialchars($id, ENT_QUOTES);
    $id = (int)$id;

    $dbh = db_connect();

    $sql = 'UPDATE tasks SET done = 1  WHERE id = ?';
    $stmt = $dbh->prepare($sql);
    
    $stmt->bindValue(1, $id, PDO::PARAM_INT);
    $stmt->execute();

    $dbh = null;
}
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Todoリスト</title>
<link type="text/css" rel="stylesheet" href="./main.css">
</head>
<body>
<header><h1>Todoリスト</h1></header>
<?php
if(isset($errors)){
    print("<ul>");
    foreach($errors as $value){
        print("<li>");
        print($value);
        print("</li>");
    }
    print("</ul>");
}
?>
<main>
<form action="todolist.php" method="post" id="form">
<ul>
    <li><span>タスク名</span><input type="text" name="name" value="<?php if(isset($name)){print($name);} ?>"></li>
    <li><span>メモ</span><textarea name="memo"><?php if(isset($memo)){print($memo);} ?></textarea></li>
    <li><input type="submit" name="submit"></li>
</ul>
</form>
<hr>
<?php
$dbh = db_connect();

$sql = 'SELECT id, name, memo FROM tasks WHERE done = 0 ORDER BY id DESC';
$stmt = $dbh->prepare($sql);
$stmt->execute();
$dbh = null;

print('<dl class="wrapper1">');

while($task = $stmt->fetch(PDO::FETCH_ASSOC)){
    
    print '<dt>';
    print $task["name"];
    print '</dt>';

    print '<dd class="div1">';
    print $task["memo"];
    print '</dd>';

    print '<dd class="div2">';
    print '
            <form action="todolist.php" method="post">
            <input type="hidden" name="method" value="put">
            <input type="hidden" name="id" value="' . $task['id'] . '">
            <button type="submit">Done</button>
            </form>
          ' ;
    print '</dd>';

}

print('</dl>');

?>
</main>
</body>
</html>