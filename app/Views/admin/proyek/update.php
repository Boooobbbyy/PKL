<div class="modal fade" id="modaledit" tabindex="-1" aria-labelledby="jabatanModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="newSubmenuModalLabel">Edit Proyek</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <?= form_open('Proyek/edit', ['class' => 'formedit']) ?>
            <?= csrf_field(); ?>
            <div class="modal-body">
                <input type="text" name="id" id="id" value="id" hidden>

                <div class="form-group row">
                    <label for="" class="col-sm-4 col-form-label">Nama Proyek</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="nama" name="nama">
                        <div class="invalid-feedback errorNama">

                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="" class="col-sm-4 col-form-label">Lokasi</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="lokasi" name="lokasi">
                        <div class="invalid-feedback errorLokasi">

                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="" class="col-sm-4 col-form-label">Tanggal Mulai</label>
                    <div class="col-sm-8">
                        <input type="date" class="form-control" id="tgl_mulai" name="tgl_mulai">
                        <div class="invalid-feedback errorTgl_mulai">

                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="" class="col-sm-4 col-form-label">Tanggal selesai</label>
                    <div class="col-sm-8">
                        <input type="date" class="form-control" id="tgl_selesai" name="tgl_selesai">
                        <div class="invalid-feedback errorTgl_selesai">

                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="" class="col-sm-4 col-form-label">Status Proyek</label>
                    <div class="col-sm-8">
                        <select class="form-select form-control" aria-label="Default select example" name="status">
                            <option value="dalam proses">dalam proses</option>
                            <option value="selesai">selesai</option>
                            <option value="dibatalkan">dibatalkan</option>

                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="" class="col-sm-4 col-form-label">Progress</label>
                    <div class="col-sm-8">
                        <input type="number" min="0" class="form-control" id="progress" name="progress">
                        <div class="invalid-feedback errorProgress">

                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="" class="col-sm-4 col-form-label">Dana Proyek</label>
                    <div class="col-sm-8">
                        <input type="number" min="0" class="form-control" id="dana" name="dana">
                        <div class="invalid-feedback errorProgress">

                        </div>
                    </div>
                </div>
            </div>
            <div class=" modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary btnsimpan"><i class="fa fa-share-square"></i> Update</button>
            </div>
            <?= form_close() ?>
        </div>
    </div>
</div>

<script>
    $(document).ready(function() {
        $('.formedit').submit(function(e) {
            e.preventDefault();
            $.ajax({
                type: "POST",
                url: $(this).attr('action'),
                data: $(this).serialize(),
                dataType: "json",
                beforeSend: function() {
                    $('.btnsimpan').attr('disable', 'disable');
                    $('.btnsimpan').html('<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span> <i>Loading...</i>');
                },
                complete: function() {
                    $('.btnsimpan').removeAttr('disable', 'disable');
                    $('.btnsimpan').html('<i class="fa fa-share-square"></i>  Update');
                },
                success: function(response) {
                    Swal.fire({
                        icon: 'success',
                        title: 'Berhasil...',
                        text: response.sukses,
                    });

                    $('#modaledit').modal('hide');
                    datapegawai();
                    jumlahpegawai();
                    totalgaji();
                }
            });
        });
    });
</script>