<form action="?action=update" method="post">
    <input type="hidden" name="ma" value="<?php echo $each->get_ma() ?>">
    Phòng
    <input type="text" name="phong" value="<?php echo $each->get_phong() ?>">
    <br>
    Tên
    <input type="text" name="ten"  value="<?php echo $each->get_ten() ?>">
    <br>
    <button type="submit">Sửa</button>
</form>