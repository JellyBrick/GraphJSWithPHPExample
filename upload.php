<!DOCTYPE html>
<html lang="ko">
<head>
    <meta content="text/html; charset=UTF-8" http-equiv="Content-Type">
    <script type="text/javascript">
        function check() {
            document.getElementById("main_form").submit();
            return true;
        }
    </script>
    <title></title>
</head>
<body>
<center>
    <form action="/data_viewer.php" id="main_form" method="post">
        <table class="tablestyle" height="300px" width="650px">
            <tr class="tablestyle">
                <td class="tablestyle" width="150px">
                    데이터 입력1
                </td>
                <td class="tablestyle" style="text-align:left;padding-left:10px">
                    <input class="inputstyle" id="data_input1" length=20 name="data_input" type="text">
                </td>
            </tr>
            <tr class="tablestyle">
                <td class="tablestyle" width="150px">
                    데이터 입력2
                </td>
                <td class="tablestyle" style="text-align:left;padding-left:10px">
                    <input class="inputstyle" id="data_input2" length=20 name="data_input" type="text">
                </td>
            </tr>
            <tr class="tablestyle">
                <td class="tablestyle" width="150px">
                    데이터 입력3
                </td>
                <td class="tablestyle" style="text-align:left;padding-left:10px">
                    <input class="inputstyle" id="data_input3" length=20 name="data_input" type="text">
                </td>
            </tr>
            <tr class="tablestyle">
                <td class="tablestyle" width="150px">
                    데이터 입력4
                </td>
                <td class="tablestyle" style="text-align:left;padding-left:10px">
                    <input class="inputstyle" id="data_input4" length=20 name="data_input" type="text">
                </td>
            </tr>
            <tr class="tablestyle">
                <td class="tablestyle" width="150px">
                    데이터 입력5
                </td>
                <td class="tablestyle" style="text-align:left;padding-left:10px">
                    <input class="inputstyle" id="data_input5" length=20 name="data_input" type="text">
                </td>
                <td class="tablestyle" rowspan="4" width="150px">
                    <input class="submitstyle" onclick="check()" type="button" value="제출">
                </td>
            </tr>
        </table>
    </form>

</center>
</body>
</html>