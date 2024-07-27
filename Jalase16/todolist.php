<?php 
require_once "./dbconnect.php";

// اضافه کردن آیتم جدید به دیتا بیس
if($_SERVER['REQUEST_METHOD']=='POST' && isset($_POST['add'])){
    $item_name = $_POST['item_name'];
    $sql = "INSERT INTO todos (item_name) VALUES ('$item_name')";
    $conn->query($sql);
}

//  دریافت اطلاعات

if($show_archived){
    $sql = "SELECT * FROM todos WHERE is_archived = 1";
}else {
    $sql = "SELECT * FROM todos WHERE is_archived = 0";
}

// $sql = "SELECT * FROM todos";
$result = $conn->query($sql);

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/style.css">
    <title>To do list</title>
</head>
<body>
    <div class="container">
        <h1>To do list</h1>
        <form action="" method="POST">
            <input type="text" name="item_name" placeholder="Add new item..." required>
            <button type="submit" name="add">Add</button>
        </form>

        <?php
        $show_archived = false;
        if($show_archived):?>
            <a href="?show_archived=false"><button>Show to do list</button></a>
        <?php else:?>
            <a href="?show_archived=true"><button>Show Archived</button></a>
        <?php endif;?>
    
        
        <!-- شروع حلقه نمایش آیتم ها -->
        <?php while($row = $result->fetch_assoc()):?>
            <div class="todo_item<?php echo $row['is_completed'] ? 'completed' : ''; ?>">
                <span><?php echo htmlspecialchars($row['item_name']);?></span>
                    <div>
                        <a href="?complete">✅</a>
                        <a href="?archived">📦</a>
                        <a href="?delete">❌</a>
                        <a href="edit.php?id">✏️</a>
                    </div>
            </div>
        <?php endwhile;?>
        <!-- پایان حلقه نمایش آیتم ها -->
    </div>
</body>
</html>