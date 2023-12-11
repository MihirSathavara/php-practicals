<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" method="post">
        <input type="text" name="string"><br>
        <input type="submit" value="Click Here" name="submit"><br>
        <table>
            <tr>
                <th>Choice</th>
                <th>Function Name</th>
                <th>Description</th>
                <th>Output</th>
            </tr>
            <tr>
                <td><input type="checkbox" name="len"></td>
                <td>strlen()</td>
                <td>returns lenght of string</td>
                <td><?php
                    if (isset($_POST["submit"]) && isset($_POST["len"]))
                        echo strlen($_POST["string"]);
                     else
                        echo "Not Selected";?>
                       </td>
            <tr>
                <td><input type="checkbox" name="rev"></td>
                <td>strrev()</td>
                <td>returns reverse string of the original string</td>
                <td><?php
                    if (isset($_POST["submit"]) && isset($_POST["rev"]))
                        echo strrev($_POST["string"]);
                    else
                        echo "Not selected";
                    ?></td>
            </tr>
            <tr>
                <td><input type="checkbox" name="rea"></td>
                <td>str_shuffle()</td>
                <td>rearrange the all charcters of the original string</td>
                <td><?php
                    if (isset($_POST["submit"]) && isset($_POST["rea"]))
                        echo str_shuffle($_POST["string"]);
                    else
                        echo "Not selected";
                    ?></td>
            </tr>
        </table>
    </form>
</body>

</html>