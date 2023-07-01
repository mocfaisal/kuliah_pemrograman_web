@extends('backend.layouts.index')
@section('app.title', 'obat - Create')

{{-- Resources --}}
{{-- External Code --}}
@section('private.css.file')

@endsection

@section('private.js.file')

@endsection

{{-- Internal Code --}}
@section('private.css.code')

@endsection

@section('private.js.code')

    <script>
        $(function() {
            $('#frm_master').parsley();
        });

        $('#btn_save').on('click', function(e) {
            // var form = $('#frm_master');

            // form.parsley().validate();

            // if (form.parsley().isValid()) {

            //     $.ajax({
            //         url: "{{ route('transaksi.obat.add') }}",
            //         type: 'post',
            //         data: form.serializeArray()
            //     }).done(function(response) {
            //         var msg = response.msg ?? 'Unknow Error';

            //         if (response.success) {
            //             // Swal.fire('Success', msg, 'success');
            //             Swal.fire({
            //                 title: 'Success',
            //                 text: msg,
            //                 icon: 'success',
            //                 confirmButtonText: 'OK',
            //             }).then((result) => {
            //                 if (result.isConfirmed) {
            //                     location.replace("{{ route('transaksi.obat.list') }}");
            //                 }
            //             });
            //         } else {
            //             Swal.fire('Error', msg, 'error');
            //         }
            //     });

            // }
        });

        $('#btn_cancel').on('click', function(e) {
            let link_ = "{{ route('transaksi.obat.list') }}";
            location.replace(link_);
        });

        $('#btn_add').on('click', function(e) {
            // add data to table
        });


        $("#nm_obat").autocomplete({
            // appendTo: mdl_selector, // to fix not showing when on modal
            minLength: 2,
            source: function(request, response) {

                $.ajax({
                    url: "{{ route('transaksi.obat.getObat') }}",
                    type: 'post',
                    dataType: "json",
                    data: {
                        name: request.term
                    },
                    success: function(res) {
                        response(res.data);
                    }
                });
            },
            select: function(event, ui) {
                var dataItems = ui.item;

                $("#nm_obat").data('obat_id', dataItems.id);
                $("#nm_obat").val(dataItems.nama);

                return false;
            }
        }).autocomplete("instance")._renderItem = function(ul, item) {
            return $("<li></li>").append(item.nama).appendTo(ul);
        };
    </script>

@endsection

{{-- Content --}}
@section('content')
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Tambah Transaksi</h4>
        </div>
        <div class="card-body">

            <form class="form form-vertical" id="frm_master" method="POST">
                @csrf
                <div class="form-body">
                    <div class="row">
                        <div class="col-12">
                            <div class="form-group">
                                <label for="nm_pembeli">Nama Pembeli</label>
                                <input type="text" class="form-control" name="nm_pembeli" id="nm_pembeli"
                                    placeholder="Nama Pembeli" required>
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="form-group">
                                <label for="nm_obat">Nama Obat</label>
                                <input type="text" class="form-control" id="nm_obat" placeholder="Nama Obat" required>
                            </div>
                        </div>

                        <div class="col-6">
                            <div class="form-group">
                                <label for="harga">Harga</label>
                                <div class="input-group">
                                    <span class="input-group-text">Rp.</span>
                                    <input type="text" class="form-control" name="harga" id="harga"
                                        placeholder="Harga" readonly>
                                    <span class="input-group-text">,-</span>
                                </div>
                            </div>
                        </div>

                        <div class="col-3">
                            <div class="form-group">
                                <label for="harga_beli">Jumlah</label>
                                <input type="text" class="form-control" name="harga_jual" id="harga_jual"
                                    placeholder="Jumlah" required>
                            </div>
                        </div>

                        <div class="col-2 col align-self-center">
                            <button type="button" class="btn btn-primary" id="btn_add"><i
                                    class="bi bi-plus-lg"></i></button>
                        </div>

                    </div>

                </div>

                <div class="clearfix"></div>
                <br>

                <hr>

                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Nama Obat</th>
                                <th>Harga</th>
                                <th>Jumlah</th>
                                <th>Sub Total</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody></tbody>
                    </table>
                </div>

                <div class="form-footer">
                    <div class="col-12 d-flex justify-content-end">
                        <button type="button" class="btn btn-primary me-1 mb-1" id="btn_save"> Save </button>
                        <button type="button" class="btn btn-light-secondary me-1 mb-1" id="btn_cancel"> Cancel </button>
                    </div>
                </div>

            </form>

        </div>
    </div>
@endsection
