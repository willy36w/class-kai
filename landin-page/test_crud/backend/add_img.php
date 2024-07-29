<h3>新增圖片</h3>
<hr>
<form action="../api/add_img.php" method="post" enctype="multipart/form-data">
    <table>
        <tr>
            <td>圖片 : </td>
            <td><input type="file" name="img" id="img"></td>
        </tr>
        <tr>
            <td>替代文字 : </td>
            <td><input type="text" name="text" id="text"></td>
        </tr>
        <tr>
            <td>
                <input type="submit" value="新增">
                <input type="reset" value="重置">
            </td>
        </tr>
    </table>
</form>