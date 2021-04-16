<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
    <thead>
        <tr style="text-align: center;">
            <th>No</th>
            <th>Nama Proyek</th>
            <th>Lokasi</th>
            <th>Tanggal Mulai</th>
            <th>Tanggal Selesai</th>
            <th>Status</th>
            <th>Progress</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <?php $no = 1; ?>
        <?php foreach ($proyek as $p) : ?>
            <tr class="text-center">
                <td class="align-middle"><?= $no++; ?></td>
                <td class="align-middle"><?= $p['nama']; ?></td>
                <td class="align-middle"><?= $p['lokasi']; ?></td>
                <td class="align-middle"><?= $p['tgl_mulai']; ?></td>
                <td class="align-middle"><?= $p['tgl_selesai']; ?></td>
                <td class="align-middle"><?= $p['status']; ?></td>
                <td class="align-middle"><?= $p['progress']; ?>%</td>
                <td class="align-middle">
                    <button class="btn btn-success btn-sm" onclick="detail(<?= $p['id_proyek']; ?>)"><i class="fa fa-eye"></i></button>
                    <button class="btn btn-warning btn-sm" onclick="edit(<?= $p['id_proyek']; ?>)"><i class="fa fa-tags"></i></button>
                    <button class="btn btn-danger btn-sm" onclick="hapus(<?= $p['id_proyek']; ?>)"><i class="fa fa-trash"></i></button>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>

<script>
    $(document).ready(function() {
        $('#dataTable').DataTable({
            "columnDefs": [{
                "targets": [1, 6],
                "orderable": false,
            }]
        });
    });

    function detail(id) {
        $.ajax({
            type: "POST",
            url: "<?= base_url('Proyek/show_detail'); ?>",
            data: {
                id: id
            },
            dataType: "json",
            success: function(response) {
                if (response.sukses) {
                    $('.viewmodal').html(response.sukses).show();
                    $('#modaldetail').modal('show');
                }
            }
        });
    }

    function edit(id) {
        $.ajax({
            type: "POST",
            url: "<?= base_url('Proyek/form_edit'); ?>",
            data: {
                id: id
            },
            dataType: "json",
            success: function(response) {
                if (response.sukses) {
                    $('.viewmodal').html(response.sukses).show();
                    $('#modaledit').modal('show');
                }
            }
        });
    }

    function hapus(id) {
        Swal.fire({
            title: 'Hapus data?',
            text: `Apakah anda yakin menghapus data?`,
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Ya!',
            cancelButtonText: 'Tidak'
        }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                    url: "<?= base_url('Proyek/hapus') ?>",
                    type: "POST",
                    dataType: "json",
                    data: {
                        id: id
                    },
                    success: function(response) {
                        if (response.sukses) {
                            Swal.fire({
                                title: "Berhasil!",
                                text: response.sukses,
                                icon: "success",
                                showConfirmButton: false,
                                timer: 1500
                            });
                            dataproyek();
                        }
                    }
                });
            }
        })
    }
</script>