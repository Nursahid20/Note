<?php
require '../setting/functions.php';
$query = "SELECT * FROM notes WHERE status='arsip'";
$data = query($query);

?>

<?php foreach ($data as $d) { ?>
    <a id="edit" class="btn" data-bs-toggle="modal" data-bs-target="#modal<?= $d['id']; ?>">
        <textarea id="text3" disabled rows="1" placeholder="<?= (strlen($d['title']) > 23 ?  substr($d['title'], 0, 24) . ".." : $d['title']); ?>"></textarea><br>
        <textarea id="text4" disabled rows="1" placeholder="<?= (strlen($d['description']) > 23 ?  substr($d['description'], 0, 24) . ".." : $d['description']); ?>"></textarea>
    </a>

    <!-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo">Open modal for @mdo</button> -->

    <div class="modal fade" id="modal<?= $d['id']; ?>" role="dialog" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content modl">
                <div class="modal-body">
                    <div class="modal-header">
                        <a href="../note/setting/arsip.php?id=<?php echo $d['id']; ?>" title="Arsip" style="color: white;"><i class='bx bx-archive-in bx-lg' style="font-size: larger; cursor:pointer;margin-right:5px;"></i></a>
                        <a href="../note/setting/delete.php?id=<?php echo $d['id']; ?>" title="Hapus" style="color: white;"><i class='bx bx-trash bx-lg' style="font-size: larger; cursor:pointer"></i></a>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form action="setting/update.php" method="get">
                        <?php
                        $id = $d['id'];
                        $query_edit = query("SELECT * FROM notes WHERE id='$id'");
                        //$result = mysqli_query($conn, $query);
                        foreach ($query_edit as $edit) {
                        ?>
                            <input type="hidden" name="id" id="id" value="<?php echo $edit['id']; ?>">
                            <div class="mb-3">
                                <textarea id="text5" name="text5" rows="1" cols="55" onkeypress="auto_grow(this)" onkeyup="auto_grow(this)" autocomplete="off"><?php echo $edit['title']; ?></textarea><br>
                                <textarea id="text6" name="text6" rows="1" cols="55" onkeypress="auto_grow(this)" onkeyup="auto_grow(this)" autocomplete="off"><?php echo $edit['title']; ?></textarea><br>
                            </div>
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-primary">Simpan</button>
                            </div>
                        <?php } ?>
                    </form>
                </div>
            </div>
        </div>
    </div>
<?php } ?>