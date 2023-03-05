<?php
include 'Model.php';
include 'CategoryTree.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Task - 2</title>
</head>
<body>
<?php
$model = new Model();
$categories = $model->getCategoriesWithNoOfItem();

$categoryTree = new CategoryTree();
echo $categoryTree->build($categories, 0);
?>
</body>
</html>