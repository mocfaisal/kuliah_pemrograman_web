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

        $(".numericOnly").keypress(function(e) {
            if (String.fromCharCode(e.keyCode).match(/[^0-9]/g)) return false;
        });

        $('#btn_save').on('click', function(e) {
            var form = $('#frm_master');

            form.parsley().validate();

            if (form.parsley().isValid()) {

                $.ajax({
                    url: "{{ route('master.obat.add') }}",
                    type: 'post',
                    data: form.serializeArray()
                }).done(function(response) {
                    var msg = response.msg ?? 'Unknow Error';

                    if (response.success) {
                        // Swal.fire('Success', msg, 'success');
                        Swal.fire({
                            title: 'Success',
                            text: msg,
                            icon: 'success',
                            confirmButtonText: 'OK',
                        }).then((result) => {
                            if (result.isConfirmed) {
                                location.replace("{{ route('master.obat.list') }}");
                            }
                        });
                    } else {
                        Swal.fire('Error', msg, 'error');
                    }
                });

            }
        });

        $('#btn_cancel').on('click', function(e) {
            let link_ = "{{ route('master.obat.list') }}";
            location.replace(link_);
        });
    </script>

@endsection

{{-- Content --}}
@section('content')
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Tambah Obat</h4>
        </div>
        <div class="card-body">

            <form class="form form-vertical" id="frm_master" method="POST">
                @csrf
                <div class="form-body">
                    <div class="row">
                        <div class="col-12">
                            <div class="form-group">
                                <label for="nm_dagang">Nama Dagang</label>
                                <input type="text" class="form-control" name="nm_dagang" id="nm_dagang"
                                    placeholder="Nama Dagang" required>
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="form-group">
                                <label for="nm_generik">Nama Generik</label>
                                <input type="text" class="form-control" name="nm_generik" id="nm_generik"
                                    placeholder="Nama Generik" required>
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="form-group">
                                <label for="golongan_obat">Golongan Obat</label>
                                {{-- <select class="form-select choices multiple-remove" name="golongan_obat" id="golongan_obat"
                                    multiple="multiple" required>
                                    <option>IT</option>
                                    <option>Blade Runner</option>
                                    <option>Thor Ragnarok</option>
                                </select> --}}
                                <input type="text" class="form-control" name="golongan_obat" id="golongan_obat"
                                    placeholder="Golongan Obat" required>
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="form-group">
                                <label for="dosis">Dosis</label>
                                <input type="text" class="form-control" name="dosis" id="dosis" placeholder="Dosis"
                                    required>
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="form-group">
                                <label for="bentuk_sediaan">Bentuk Sediaan</label>
                                <input type="text" class="form-control" name="bentuk_sediaan" id="bentuk_sediaan"
                                    placeholder="Ex : tablet, botol, kapsul" required>
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="form-group">
                                <label for="pabrik">Pabrik</label>
                                <input type="text" class="form-control" name="pabrik" id="pabrik"
                                    placeholder="Ex : PT. xxx" required>
                            </div>
                        </div>

                        <div class="col-md-6 col-12">
                            <div class="form-group">
                                <label for="harga_beli">Harga Beli</label>
                                <div class="input-group">
                                    <span class="input-group-text">Rp.</span>
                                    <input type="text" class="form-control numericOnly" name="harga_beli" id="harga_beli"
                                        placeholder="Harga Beli" required>
                                    <span class="input-group-text">,-</span>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6 col-12">
                            <div class="form-group">
                                <label for="harga_beli">Harga Jual</label>
                                <div class="input-group">
                                    <span class="input-group-text">Rp.</span>
                                    <input type="text" class="form-control numericOnly" name="harga_jual" id="harga_jual"
                                        placeholder="Harga Jual" required>
                                    <span class="input-group-text">,-</span>
                                </div>
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="form-group">
                                <label for="stock">Stock</label>
                                <input type="number" class="form-control" name="stock" id="stock" placeholder="Stock"
                                    required>
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="form-floating">
                                <textarea class="form-control" name="keterangan" id="keterangan"></textarea>
                                <label for="keterangan">Keterangan</label>
                            </div>
                        </div>

                    </div>

                </div>

                <div class="clearfix"></div>
                <br>

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
