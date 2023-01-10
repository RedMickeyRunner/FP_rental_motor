<?php
    $form_action = isset($form_action) ? $form_action : 'add';
    $sewa = isset($sewa) ? $sewa : null;
    $url = $form_action == 'add' ? base_url('sewa/add') : base_url('sewa/edit/' . $sewa->id);
?>

<form action="<?= $url ?>" method="post">
    <label for="motor_id">Motor ID:</label><br>
    <select name="motor_id" id="motor_id">
        <?php
            $this->load->model('MotorModel');
            $motor = $this->MotorModel->get_all();
            foreach ($motor as $m):
        ?>
            <option value="<?= $m->id ?>" <?= isset($sewa) && $sewa->motor_id == $m->id ? 'selected' : '' ?>>
                <?= $m->nama ?>
            </option>
        <?php endforeach ?>
    </select><br>
    <label for="penyewa_id">Penyewa ID:</label><br>
    <select name="penyewa_id" id="penyewa_id">
        <?php
            $this->load->model('PenyewaModel');
            $penyewa = $this->PenyewaModel->get_all();
            foreach ($penyewa as $p):
        ?>
            <option value="<?= $p->id ?>" <?= isset($sewa) && $sewa->penyewa_id == $p->id ? 'selected' : '' ?>>
            <?= $p->nama ?>
            </option>
            <?php endforeach ?>
    </select><br>
    <label for="tgl_sewa">Tanggal Sewa:</label><br>
    <input type="date" name="tgl_sewa" id="tgl_sewa" value="<?= isset($sewa) ? $sewa->tanggal_sewa : '' ?>"><br>
    <label for="tgl_kembali">Tanggal Kembali:</label><br>
    <input type="date" name="tgl_kembali" id="tgl_kembali" value="<?= isset($sewa) ? $sewa->tanggal_kembali : '' ?>"><br>
    <label for="harga_sewa">Harga Sewa:</label><br>
    <input type="text" name="harga_sewa" id="harga_sewa" value="<?= isset($sewa) ? $sewa->harga_total : '' ?>"><br><br>
    <input type="submit" value="Submit">

</form>