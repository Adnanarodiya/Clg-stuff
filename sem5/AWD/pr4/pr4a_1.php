<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }

        td {
            padding: 10px;
        }

        label {
            display: block;
            margin-bottom: 5px;
        }

        input {
            width: 100%;
            padding: 5px;
            box-sizing: border-box;
        }

        button {
            padding: 10px 20px;
            background-color: #4CAF50;
            color: white;
            border: none;
            cursor: pointer;
            display:flex;
            border-radius : 10px;
            margin: 0 auto;
        }

        button:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <form action="pr4a_2.php" method="get">
        <table>
            <tr>
                <td><label>Name :</label></td>
                <td><input type="text" name="txt_name"></td>
            </tr>
            <tr>
                <td><label>Email :</label></td>
                <td><input type="text" name="txt_email"></td>
            </tr>
            <tr>
                <td><label>Enrollment Number :</label></td>
                <td><input type="number" name="txt_erno"></td>
            </tr>
            <tr>
                <td><label>Mobile Number :</label></td>
                <td><input type="number" name="txt_mono"></td>
            </tr>
            <tr>
                <td><label>Institute Name :</label></td>
                <td><input type="text" name="txt_inname"></td>
            </tr>
            <tr>
                <td><label>Course Name :</label></td>
                <td><input type="text" name="txt_coname"></td>
            </tr>
            <tr>
                <td colspan="2"><button type="submit">Submit</button></td>
            </tr>
        </table>
    </form>
</body>
</html>