<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
<?php
include_once "../api/base.php";
$img = $_GET;
$data = $Images->find($img['id']);
$file = "../images/" . $data['img'];
?>
<h3>編輯</h3>
<hr>
<form action="../api/edit_img.php" method="post" enctype="multipart/form-data">
    <table>
        <tr>
            <td>
                <input type="hidden" name="id" value="<?= $data['id']; ?>">
            </td>
            <td>
                <img src="<?= $file; ?>" alt="" style="width: 30%;" id="current-img">
                <img src="" alt="" id="show" style="width: 30%;display:none">
                <input type="file" name="file" id="file">
            </td>
            <td>
                <input type="text" name="text" id="text" value="<?= $data['text'] ?>">
            </td>
            <td style="display: flex;">
                <input type="submit" value="確認">
                <input type="reset" value="重置">
                <!-- <button onclick="test()" type="button"></button> -->
            </td>
        </tr>
    </table>
</form>

<script>
    $(document).ready(function() {
        $("#file").on("change", function() {
            var file = this.files[0];
            if (file) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $("#show").attr("src", e.target.result);
                    $("#current-img").hide();
                    $("#show").show();
                }
                reader.readAsDataURL(file);
            }
        });
    });

    // function test() {
    //     console.log($("#file").val());
    // }
</script>