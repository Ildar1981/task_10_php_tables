<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <title>Таблицы PHP</title>
</head>

<body>
    <table class="table">
        <caption><strong>Таблица истинности</strong></caption>
        <tr>
            <th>A</th>
            <th>B</th>
            <th>!A</th>
            <th>A || B</th>
            <th>A && B</th>
            <th>A xor B</th>
        </tr>
        <tr>
            <th>
                <?php echo $a = 0; ?>
            </th>
            <th>
                <?php echo $b = 0; ?>
            </th>
            <td>
                <?php echo (!$a) ? "<span style='color: green;'>true</span>": "<span style='color: red;'>false</span>"; ; ?>
            </td>
            <td>
                <?php echo ($a || $b) ? "<span style='color: green;'>true</span>": "<span style='color: red;'>false</span>"; ; ?>
            </td>
            <td>
                <?php echo ($a && $b) ? "<span style='color: green;'>true</span>": "<span style='color: red;'>false</span>"; ; ?>
            </td>
            <td>
                <?php echo ($a xor $b) ? "<span style='color: green;'>true</span>": "<span style='color: red;'>false</span>"; ; ?>
            </td>
        </tr>
        <tr>
            <th>
                <?php echo $a = 0; ?>
            </th>
            <th>
                <?php echo $b = 0; ?>
            </th>
            <td>
                <?php echo (!$a) ? "<span style='color: green;'>true</span>": "<span style='color: red;'>false</span>"; ; ?>
            </td>
            <td>
                <?php echo ($a || $b) ? "<span style='color: green;'>true</span>": "<span style='color: red;'>false</span>"; ; ?>
            </td>
            <td>
                <?php echo ($a && $b) ? "<span style='color: green;'>true</span>": "<span style='color: red;'>false</span>"; ; ?>
            </td>
            <td>
                <?php echo ($a xor $b) ? "<span style='color: green;'>true</span>": "<span style='color: red;'>false</span>"; ; ?>
            </td>
        </tr>
        <tr>
            <th>
                <?php echo $a = 1; ?>
            </th>
            <th>
                <?php echo $b = 0; ?>
            </th>
            <td>
                <?php echo (!$a) ? "<span style='color: green;'>true</span>": "<span style='color: red;'>false</span>"; ; ?>
            </td>
            <td>
                <?php echo ($a || $b) ? "<span style='color: green;'>true</span>": "<span style='color: red;'>false</span>"; ; ?>
            </td>
            <td>
                <?php echo ($a && $b) ? "<span style='color: green;'>true</span>": "<span style='color: red;'>false</span>"; ; ?>
            </td>
            <td>
                <?php echo ($a xor $b) ? "<span style='color: green;'>true</span>": "<span style='color: red;'>false</span>"; ; ?>
            </td>
        </tr>
        <tr>
            <th>
                <?php echo $a = 1; ?>
            </th>
            <th>
                <?php echo $b = 1; ?>
            </th>
            <td>
                <?php echo (!$a) ? "<span style='color: green;'>true</span>": "<span style='color: red;'>false</span>"; ; ?>
            </td>
            <td>
                <?php echo ($a || $b) ? "<span style='color: green;'>true</span>": "<span style='color: red;'>false</span>"; ; ?>
            </td>
            <td>
                <?php echo ($a && $b) ? "<span style='color: green;'>true</span>": "<span style='color: red;'>false</span>"; ; ?>
            </td>
            <td>
                <?php echo ($a xor $b) ? "<span style='color: green;'>true</span>": "<span style='color: red;'>false</span>"; ; ?>
            </td>
        </tr>
    </table>
    <br>
    <table class="table">
        <caption><strong>Таблица гибкого сравнения </strong></caption>
        <tr>
            <th> </th>
            <th>true</th>
            <th>false</th>
            <th>1</th>
            <th>0</th>
            <th>-1</th>
            <th>"1"</th>
            <th>null</th>
            <th>"php"</th>
        </tr>
        <tr>
            <th>true</th>
            <td>
                <?php echo (true == true) ?  "<span style='color: green;'>true</span>": "<span style='color: red;'>false</span>"; ?>
            </td>
            <td>
                <?php echo (true == false) ? "<span style='color: green;'>true</span>": "<span style='color: red;'>false</span>"; ; ?>
            </td>
            <td>
                <?php echo (true == 1) ? "<span style='color: green;'>true</span>": "<span style='color: red;'>false</span>"; ; ?>
            </td>
            <td>
                <?php echo (true == 0) ? "<span style='color: green;'>true</span>": "<span style='color: red;'>false</span>"; ; ?>
            </td>
            <td>
                <?php echo (true == -1) ? "<span style='color: green;'>true</span>": "<span style='color: red;'>false</span>"; ; ?>
            </td>
            <td>
                <?php echo (true == "1") ? "<span style='color: green;'>true</span>": "<span style='color: red;'>false</span>"; ; ?>
            </td>
            <td>
                <?php echo (true == null) ? "<span style='color: green;'>true</span>": "<span style='color: red;'>false</span>"; ; ?>
            </td>
            <td>
                <?php echo (true == "php") ? "<span style='color: green;'>true</span>": "<span style='color: red;'>false</span>"; ; ?>
            </td>
        </tr>
        <tr>
            <th>false</th>
            <td>
                <?php echo (false == true) ? "<span style='color: green;'>true</span>": "<span style='color: red;'>false</span>"; ; ?>
            </td>
            <td>
                <?php echo (false == false) ? "<span style='color: green;'>true</span>": "<span style='color: red;'>false</span>"; ; ?>
            </td>
            <td>
                <?php echo (false == 1) ? "<span style='color: green;'>true</span>": "<span style='color: red;'>false</span>"; ; ?>
            </td>
            <td>
                <?php echo (false == 0) ? "<span style='color: green;'>true</span>": "<span style='color: red;'>false</span>"; ; ?>
            </td>
            <td>
                <?php echo (false == -1) ? "<span style='color: green;'>true</span>": "<span style='color: red;'>false</span>"; ; ?>
            </td>
            <td>
                <?php echo (false == "1") ? "<span style='color: green;'>true</span>": "<span style='color: red;'>false</span>"; ; ?>
            </td>
            <td>
                <?php echo (false == null) ? "<span style='color: green;'>true</span>": "<span style='color: red;'>false</span>"; ; ?>
            </td>
            <td>
                <?php echo (false == "php") ? "<span style='color: green;'>true</span>": "<span style='color: red;'>false</span>"; ; ?>
            </td>
        </tr>
        <tr>
            <th>1</th>
            <td>
                <?php echo (1 == true) ? "<span style='color: green;'>true</span>": "<span style='color: red;'>false</span>"; ; ?>
            </td>
            <td>
                <?php echo (1 == false) ? "<span style='color: green;'>true</span>": "<span style='color: red;'>false</span>"; ; ?>
            </td>
            <td>
                <?php echo (1 == 1) ? "<span style='color: green;'>true</span>": "<span style='color: red;'>false</span>"; ; ?>
            </td>
            <td>
                <?php echo (1 == 0) ? "<span style='color: green;'>true</span>": "<span style='color: red;'>false</span>"; ; ?>
            </td>
            <td>
                <?php echo (1 == -1) ? "<span style='color: green;'>true</span>": "<span style='color: red;'>false</span>"; ; ?>
            </td>
            <td>
                <?php echo (1 == "1") ? "<span style='color: green;'>true</span>": "<span style='color: red;'>false</span>"; ; ?>
            </td>
            <td>
                <?php echo (1 == null) ? "<span style='color: green;'>true</span>": "<span style='color: red;'>false</span>"; ; ?>
            </td>
            <td>
                <?php echo (1 == "php") ? "<span style='color: green;'>true</span>": "<span style='color: red;'>false</span>"; ; ?>
            </td>
        </tr>
        <tr>
            <th>0</th>
            <td>
                <?php echo (0 == true) ? "<span style='color: green;'>true</span>": "<span style='color: red;'>false</span>"; ; ?>
            </td>
            <td>
                <?php echo (0 == false) ? "<span style='color: green;'>true</span>": "<span style='color: red;'>false</span>"; ; ?>
            </td>
            <td>
                <?php echo (0 == 1) ? "<span style='color: green;'>true</span>": "<span style='color: red;'>false</span>"; ; ?>
            </td>
            <td>
                <?php echo (0 == 0) ? "<span style='color: green;'>true</span>": "<span style='color: red;'>false</span>"; ; ?>
            </td>
            <td>
                <?php echo (0 == -1) ? "<span style='color: green;'>true</span>": "<span style='color: red;'>false</span>"; ; ?>
            </td>
            <td>
                <?php echo (0 == "1") ? "<span style='color: green;'>true</span>": "<span style='color: red;'>false</span>"; ; ?>
            </td>
            <td>
                <?php echo (0 == null) ? "<span style='color: green;'>true</span>": "<span style='color: red;'>false</span>"; ; ?>
            </td>
            <td>
                <?php echo (0 == "php") ? "<span style='color: green;'>true</span>": "<span style='color: red;'>false</span>"; ; ?>
            </td>
        </tr>
        <tr>
            <th>-1</th>
            <td>
                <?php echo (-1 == true) ? "<span style='color: green;'>true</span>": "<span style='color: red;'>false</span>"; ; ?>
            </td>
            <td>
                <?php echo (-1 == false) ? "<span style='color: green;'>true</span>": "<span style='color: red;'>false</span>"; ; ?>
            </td>
            <td>
                <?php echo (-1 == 1) ? "<span style='color: green;'>true</span>": "<span style='color: red;'>false</span>"; ; ?>
            </td>
            <td>
                <?php echo (-1 == 0) ? "<span style='color: green;'>true</span>": "<span style='color: red;'>false</span>"; ; ?>
            </td>
            <td>
                <?php echo (-1 == -1) ? "<span style='color: green;'>true</span>": "<span style='color: red;'>false</span>"; ; ?>
            </td>
            <td>
                <?php echo (-1 == "1") ? "<span style='color: green;'>true</span>": "<span style='color: red;'>false</span>"; ; ?>
            </td>
            <td>
                <?php echo (-1 == null) ? "<span style='color: green;'>true</span>": "<span style='color: red;'>false</span>"; ; ?>
            </td>
            <td>
                <?php echo (-1 == "php") ? "<span style='color: green;'>true</span>": "<span style='color: red;'>false</span>"; ; ?>
            </td>
        </tr>
        <tr>
            <th>"1"</th>
            <td>
                <?php echo ("1" == true) ? "<span style='color: green;'>true</span>": "<span style='color: red;'>false</span>"; ; ?>
            </td>
            <td>
                <?php echo ("1" == false) ? "<span style='color: green;'>true</span>": "<span style='color: red;'>false</span>"; ; ?>
            </td>
            <td>
                <?php echo ("1" == 1) ? "<span style='color: green;'>true</span>": "<span style='color: red;'>false</span>"; ; ?>
            </td>
            <td>
                <?php echo ("1" == 0) ? "<span style='color: green;'>true</span>": "<span style='color: red;'>false</span>"; ; ?>
            </td>
            <td>
                <?php echo ("1" == -1) ? "<span style='color: green;'>true</span>": "<span style='color: red;'>false</span>"; ; ?>
            </td>
            <td>
                <?php echo ("1" == "1") ? "<span style='color: green;'>true</span>": "<span style='color: red;'>false</span>"; ; ?>
            </td>
            <td>
                <?php echo ("1" == null) ? "<span style='color: green;'>true</span>": "<span style='color: red;'>false</span>"; ; ?>
            </td>
            <td>
                <?php echo ("1" == "php") ? "<span style='color: green;'>true</span>": "<span style='color: red;'>false</span>"; ; ?>
            </td>
        </tr>
        <tr>
            <th>null</th>
            <td>
                <?php echo (null == true) ? "<span style='color: green;'>true</span>": "<span style='color: red;'>false</span>"; ; ?>
            </td>
            <td>
                <?php echo (null == false) ? "<span style='color: green;'>true</span>": "<span style='color: red;'>false</span>"; ; ?>
            </td>
            <td>
                <?php echo (null == 1) ? "<span style='color: green;'>true</span>": "<span style='color: red;'>false</span>"; ; ?>
            </td>
            <td>
                <?php echo (null == 0) ? "<span style='color: green;'>true</span>": "<span style='color: red;'>false</span>"; ; ?>
            </td>
            <td>
                <?php echo (null == -1) ? "<span style='color: green;'>true</span>": "<span style='color: red;'>false</span>"; ; ?>
            </td>
            <td>
                <?php echo (null == "1") ? "<span style='color: green;'>true</span>": "<span style='color: red;'>false</span>"; ; ?>
            </td>
            <td>
                <?php echo (null == null) ? "<span style='color: green;'>true</span>": "<span style='color: red;'>false</span>"; ; ?>
            </td>
            <td>
                <?php echo (null == "php") ? "<span style='color: green;'>true</span>": "<span style='color: red;'>false</span>"; ; ?>
            </td>
        </tr>
        <tr>
            <th>"php"</th>
            <td>
                <?php echo ("php" == true) ? "<span style='color: green;'>true</span>": "<span style='color: red;'>false</span>"; ; ?>
            </td>
            <td>
                <?php echo ("php" == false) ? "<span style='color: green;'>true</span>": "<span style='color: red;'>false</span>"; ; ?>
            </td>
            <td>
                <?php echo ("php" == 1) ? "<span style='color: green;'>true</span>": "<span style='color: red;'>false</span>"; ; ?>
            </td>
            <td>
                <?php echo ("php" == 0) ? "<span style='color: green;'>true</span>": "<span style='color: red;'>false</span>"; ; ?>
            </td>
            <td>
                <?php echo ("php" == -1) ? "<span style='color: green;'>true</span>": "<span style='color: red;'>false</span>"; ; ?>
            </td>
            <td>
                <?php echo ("php" == "1") ? "<span style='color: green;'>true</span>": "<span style='color: red;'>false</span>"; ; ?>
            </td>
            <td>
                <?php echo ("php" == null) ? "<span style='color: green;'>true</span>": "<span style='color: red;'>false</span>"; ; ?>
            </td>
            <td>
                <?php echo ("php" == "php") ? "<span style='color: green;'>true</span>": "<span style='color: red;'>false</span>"; ; ?>
            </td>
        </tr>
    </table>
    <br>

    <table class="table">
        <caption><strong>Таблица жесткого сравнения</strong></caption>
        <tr>
            <th></th>
            <th>true</th>
            <th>false</th>
            <th>1</th>
            <th>0</th>
            <th>-1</th>
            <th>"1"</th>
            <th>null</th>
            <th>"php"</th>
        </tr>
        <tr>
            <th>true</th>
            <td>
                <?php echo (true === true) ? "<span style='color: green;'>true</span>": "<span style='color: red;'>false</span>"; ; ?>
            </td>
            <td>
                <?php echo (true === false) ? "<span style='color: green;'>true</span>": "<span style='color: red;'>false</span>"; ; ?>
            </td>
            <td>
                <?php echo (true === 1) ? "<span style='color: green;'>true</span>": "<span style='color: red;'>false</span>"; ; ?>
            </td>
            <td>
                <?php echo (true === 0) ? "<span style='color: green;'>true</span>": "<span style='color: red;'>false</span>"; ; ?>
            </td>
            <td>
                <?php echo (true === -1) ? "<span style='color: green;'>true</span>": "<span style='color: red;'>false</span>"; ; ?>
            </td>
            <td>
                <?php echo (true === "1") ? "<span style='color: green;'>true</span>": "<span style='color: red;'>false</span>"; ; ?>
            </td>
            <td>
                <?php echo (true == null) ? "<span style='color: green;'>true</span>": "<span style='color: red;'>false</span>"; ; ?>
            </td>
            <td>
                <?php echo (true === "php") ? "<span style='color: green;'>true</span>": "<span style='color: red;'>false</span>"; ; ?>
            </td>
        </tr>
        <tr>
            <th>false</th>
            <td>
                <?php echo (false === true) ? "<span style='color: green;'>true</span>": "<span style='color: red;'>false</span>"; ; ?>
            </td>
            <td>
                <?php echo (false === false) ? "<span style='color: green;'>true</span>": "<span style='color: red;'>false</span>"; ; ?>
            </td>
            <td>
                <?php echo (false === 1) ? "<span style='color: green;'>true</span>": "<span style='color: red;'>false</span>"; ; ?>
            </td>
            <td>
                <?php echo (false === 0) ? "<span style='color: green;'>true</span>": "<span style='color: red;'>false</span>"; ; ?>
            </td>
            <td>
                <?php echo (false === -1) ? "<span style='color: green;'>true</span>": "<span style='color: red;'>false</span>"; ; ?>
            </td>
            <td>
                <?php echo (false === "1") ? "<span style='color: green;'>true</span>": "<span style='color: red;'>false</span>"; ; ?>
            </td>
            <td>
                <?php echo (false === null) ? "<span style='color: green;'>true</span>": "<span style='color: red;'>false</span>"; ; ?>
            </td>
            <td>
                <?php echo (false === "php") ? "<span style='color: green;'>true</span>": "<span style='color: red;'>false</span>"; ; ?>
            </td>
        </tr>
        <tr>
            <th>1</th>
            <td>
                <?php echo (1 === true) ? "<span style='color: green;'>true</span>": "<span style='color: red;'>false</span>"; ; ?>
            </td>
            <td>
                <?php echo (1 === false) ? "<span style='color: green;'>true</span>": "<span style='color: red;'>false</span>"; ; ?>
            </td>
            <td>
                <?php echo (1 === 1) ? "<span style='color: green;'>true</span>": "<span style='color: red;'>false</span>"; ; ?>
            </td>
            <td>
                <?php echo (1 === 0) ? "<span style='color: green;'>true</span>": "<span style='color: red;'>false</span>"; ; ?>
            </td>
            <td>
                <?php echo (1 === -1) ? "<span style='color: green;'>true</span>": "<span style='color: red;'>false</span>"; ; ?>
            </td>
            <td>
                <?php echo (1 === "1") ? "<span style='color: green;'>true</span>": "<span style='color: red;'>false</span>"; ; ?>
            </td>
            <td>
                <?php echo (1 === null) ? "<span style='color: green;'>true</span>": "<span style='color: red;'>false</span>"; ; ?>
            </td>
            <td>
                <?php echo (1 === "php") ? "<span style='color: green;'>true</span>": "<span style='color: red;'>false</span>"; ; ?>
            </td>
        </tr>
        <tr>
            <th>0</th>
            <td>
                <?php echo (0 === true) ? "<span style='color: green;'>true</span>": "<span style='color: red;'>false</span>"; ; ?>
            </td>
            <td>
                <?php echo (0 === false) ? "<span style='color: green;'>true</span>": "<span style='color: red;'>false</span>"; ; ?>
            </td>
            <td>
                <?php echo (0 === 1) ? "<span style='color: green;'>true</span>": "<span style='color: red;'>false</span>"; ; ?>
            </td>
            <td>
                <?php echo (0 === 0) ? "<span style='color: green;'>true</span>": "<span style='color: red;'>false</span>"; ; ?>
            </td>
            <td>
                <?php echo (0 === -1) ? "<span style='color: green;'>true</span>": "<span style='color: red;'>false</span>"; ; ?>
            </td>
            <td>
                <?php echo (0 === "1") ? "<span style='color: green;'>true</span>": "<span style='color: red;'>false</span>"; ; ?>
            </td>
            <td>
                <?php echo (0 === null) ? "<span style='color: green;'>true</span>": "<span style='color: red;'>false</span>"; ; ?>
            </td>
            <td>
                <?php echo (0 === "php") ? "<span style='color: green;'>true</span>": "<span style='color: red;'>false</span>"; ; ?>
            </td>
        </tr>
        <tr>
            <th>-1</th>
            <td>
                <?php echo (-1 === true) ? "<span style='color: green;'>true</span>": "<span style='color: red;'>false</span>"; ; ?>
            </td>
            <td>
                <?php echo (-1 === false) ? "<span style='color: green;'>true</span>": "<span style='color: red;'>false</span>"; ; ?>
            </td>
            <td>
                <?php echo (-1 === 1) ? "<span style='color: green;'>true</span>": "<span style='color: red;'>false</span>"; ; ?>
            </td>
            <td>
                <?php echo (-1 === 0) ? "<span style='color: green;'>true</span>": "<span style='color: red;'>false</span>"; ; ?>
            </td>
            <td>
                <?php echo (-1 === -1) ? "<span style='color: green;'>true</span>": "<span style='color: red;'>false</span>"; ; ?>
            </td>
            <td>
                <?php echo (-1 === "1") ? "<span style='color: green;'>true</span>": "<span style='color: red;'>false</span>"; ; ?>
            </td>
            <td>
                <?php echo (-1 === null) ? "<span style='color: green;'>true</span>": "<span style='color: red;'>false</span>"; ; ?>
            </td>
            <td>
                <?php echo (-1 === "php") ? "<span style='color: green;'>true</span>": "<span style='color: red;'>false</span>"; ; ?>
            </td>
        </tr>
        <tr>
            <th>"1"</th>
            <td>
                <?php echo ("1" === true) ? "<span style='color: green;'>true</span>": "<span style='color: red;'>false</span>"; ; ?>
            </td>
            <td>
                <?php echo ("1" === false) ? "<span style='color: green;'>true</span>": "<span style='color: red;'>false</span>"; ; ?>
            </td>
            <td>
                <?php echo ("1" === 1) ? "<span style='color: green;'>true</span>": "<span style='color: red;'>false</span>"; ; ?>
            </td>
            <td>
                <?php echo ("1" === 0) ? "<span style='color: green;'>true</span>": "<span style='color: red;'>false</span>"; ; ?>
            </td>
            <td>
                <?php echo ("1" === -1) ? "<span style='color: green;'>true</span>": "<span style='color: red;'>false</span>"; ; ?>
            </td>
            <td>
                <?php echo ("1" === "1") ? "<span style='color: green;'>true</span>": "<span style='color: red;'>false</span>"; ; ?>
            </td>
            <td>
                <?php echo ("1" === null) ? "<span style='color: green;'>true</span>": "<span style='color: red;'>false</span>"; ; ?>
            </td>
            <td>
                <?php echo ("1" === "php") ? "<span style='color: green;'>true</span>": "<span style='color: red;'>false</span>"; ; ?>
            </td>
        </tr>
        <tr>
            <th>null</th>
            <td>
                <?php echo (null === true) ? "<span style='color: green;'>true</span>": "<span style='color: red;'>false</span>"; ; ?>
            </td>
            <td>
                <?php echo (null === false) ? "<span style='color: green;'>true</span>": "<span style='color: red;'>false</span>"; ; ?>
            </td>
            <td>
                <?php echo (null === 1) ? "<span style='color: green;'>true</span>": "<span style='color: red;'>false</span>"; ; ?>
            </td>
            <td>
                <?php echo (null === 0) ? "<span style='color: green;'>true</span>": "<span style='color: red;'>false</span>"; ; ?>
            </td>
            <td>
                <?php echo (null === -1) ? "<span style='color: green;'>true</span>": "<span style='color: red;'>false</span>"; ; ?>
            </td>
            <td>
                <?php echo (null === "1") ? "<span style='color: green;'>true</span>": "<span style='color: red;'>false</span>"; ; ?>
            </td>
            <td>
                <?php echo (null === null) ? "<span style='color: green;'>true</span>": "<span style='color: red;'>false</span>"; ; ?>
            </td>
            <td>
                <?php echo (null === "php") ? "<span style='color: green;'>true</span>": "<span style='color: red;'>false</span>"; ; ?>
            </td>
        </tr>
        <tr>
            <th>"php"</th>
            <td>
                <?php echo ("php" === true) ? "<span style='color: green;'>true</span>": "<span style='color: red;'>false</span>"; ; ?>
            </td>
            <td>
                <?php echo ("php" === false) ? "<span style='color: green;'>true</span>": "<span style='color: red;'>false</span>"; ; ?>
            </td>
            <td>
                <?php echo ("php" === 1) ? "<span style='color: green;'>true</span>": "<span style='color: red;'>false</span>"; ; ?>
            </td>
            <td>
                <?php echo ("php" === 0) ? "<span style='color: green;'>true</span>": "<span style='color: red;'>false</span>"; ; ?>
            </td>
            <td>
                <?php echo ("php" === -1) ? "<span style='color: green;'>true</span>": "<span style='color: red;'>false</span>"; ; ?>
            </td>
            <td>
                <?php echo ("php" === "1") ? "<span style='color: green;'>true</span>": "<span style='color: red;'>false</span>"; ; ?>
            </td>
            <td>
                <?php echo ("php" === null) ? "<span style='color: green;'>true</span>": "<span style='color: red;'>false</span>"; ; ?>
            </td>
            <td>
                <?php echo ("php" === "php") ? "<span style='color: green;'>true</span>": "<span style='color: red;'>false</span>"; ; ?>
            </td>
        </tr>
    </table>
    <br>
    <table class="table" id="form-text">
        <caption><strong>Выводы о сравнении в PHP </strong></caption>
        <tr>
            <th class="form"><span class='highlight'>Гибкое</span> сравнение, выполняемое с помощью оператора равенства (==), основывается на активных типах
                операндов. <br>
                Если операнды являются строками или NULL-значениями, то они сравниваются как строки; если один из них
                имеет тип Boolean,<br>
                то они преобразовываются в Boolean-значения и сравниваются; в противном случае они преобразовываются в
                числа и сравниваются.<br>
                Хотя это приводит к симметричным результам в сравнении с помощью оператора == (например, $a == $b то же
                самое что $b == $a), сравнение нетранзитивно..
                A оператор  <span class="highlight">строгого</span> равенства "===" в действительности этот оператор на самом деле сначала проверяет тип
                (typeof), а потом проверяет значение.</th>
        </tr>
 
    </table>
</body>

</html>