<?php

var_dump($_POST);
var_dump($_FILES);

$isFormSubmit = isset($_POST['csv_file_upload']);
if ($isFormSubmit === true) {
    $csvFile =  (isset($_Files['csv_file']['tmp_name']))
        ? $_FILES['csv_file']['tmp_name']
        : false;

//$csvFile = _dir_ . '/data/user.csv';
//$csvFile = _dir_ . '/data/users_empty.csv';
//$csvFile = _dir_ . '/data/empty.csv';


if (!file_exsist($csvFile)) {
    echo "File not found";
    die();
}

$handle = fopen($csvFile, "r+");   

    if ($handle !== false) {
           $rows = [];
	       while (($buffer = fgets($handle, 4096)) !== false) {
		        $rows = explode(";", $buffer);
		    }
            fclose($handle);

            if (count($rows) == 0){
            echo "File $scvFile is empty";
            die();
            }

    $coloumns = $rows[0];
    $columnCount = count($columns);
    $users = array_slice($rows, 1);
    $usersCount = count($users);
    }
//var_dump($users); 

}
?>

<html>
    <head>
        <title> CSV loader</title>
    </head>
    <body>
        <h1> CSV loader </h1>

        <form method = "POST" name = "csv_file_upload" enctype="multipart/form-data">
        <input type ='hidden'>
         Csv file: <input type = 'file' name "csv_file">
                <input type = "submitt" name = "csv_file_submit" value = "upload">
        </form>

        <?php if ($isFormSubmit === true): ?>
            <table border='1' cellpadding='0' cellspacing='0'>;
                <thead>
                    <tr>
                        <?php foreach ($columns as $name): ?>
                        <td>
                            <?php echo $name; ?>
                        </td>
                        <?php endforeach; ?>
                    </tr>
                </thead>
                <tbody>
                <?php if (count($users) > 0): ?>
                    <?php foreach ($users as $user): ?>
                    <tr>
                        <?php foreach ($user as $property): ?>
                        <td>
                            <?php echo $property; ?>
                        </td>
                        <?php endforeach; ?>
                    </tr>
                    <?php endforeach; ?>
                <?php else: ?>
                    <tr>
                        <td colspan="<?php echo $columnsCount; ?>">
                            Users not found
                        </td>
                    </tr>
                <?php endif; ?>
                </tbody>
            </table>
        <?php endif; ?>
    </body>
</html>




