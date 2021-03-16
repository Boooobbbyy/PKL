<table class="table table-striped table-bordered" id="dataTable" width="100%" cellspacing="0">
    <thead class="thead-dark">
        <tr style="text-align: center;">
            <th>Foto</th>
            <th>Pegawai</th>
            <th>Lokasi</th>
            <th>Waktu</th>
            <th>Keterangan</th>
            <th>Catatan</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($absensi as $a) : ?>
            <tr class="text-center">
                <td class="align-middle"><img src="<?= base_url('uploads/absensi') . '/' . $a['foto']; ?>" width="50px" class="img-thumbnail"></td>
                <td class="align-middle"><b><?= $a['nama']; ?></b><br><?= $a['nip']; ?></td>
                <td class="align-middle">Lat: <?= $a['latitude']; ?><br>Lng: <?= $a['longitude']; ?></td>
                <td class="align-middle"><?= $a['created_at']; ?></td>
                <td class="align-middle"><?= $a['keterangan']; ?></td>
                <td class="align-middle"><?= $a['catatan']; ?></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>

<script>
    $(document).ready(function() {
        $('#dataTable').DataTable({
            "columnDefs": [{
                "targets": [0],
                "orderable": false,
            }]
        });
    });
</script>