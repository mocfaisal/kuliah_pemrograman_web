@extends('backend.layouts.index')
@section('app.title', 'Obat')

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
        // Variable Declare

        // Function Declare

        var table = $('#tbl_list').DataTable({
            processing: true,
            serverSide: true,
            destroy: true,
            ajax: {
                url: "{{ route('master.obat.data') }}",
                type: "POST",
                // data: NewData,
                dataType: "JSON",
            },
            columns: [{
                    data: 'DT_RowIndex',
                    name: 'DT_RowIndex',
                    orderable: false,
                    searchable: false
                },
                {
                    data: 'nama_dagang',
                    name: 'nama_dagang'
                },
                {
                    data: 'nama_generik',
                    name: 'nama_generik'
                },
                {
                    data: 'golongan_obat',
                    name: 'golongan_obat'
                },
                {
                    data: 'bentuk_sediaan',
                    name: 'bentuk_sediaan'
                },
                {
                    data: 'qty',
                    name: 'qty'
                },
                {
                    data: 'action',
                    name: 'action',
                    orderable: false,
                    searchable: false
                }
            ]
        });

        function popDelete(id) {
            Swal.fire({
                title: 'Yakin hapus data?',
                showDenyButton: true,
                confirmButtonText: 'Ya',
                denyButtonText: `Tidak`,
            }).then((result) => {
                if (result.isConfirmed) {
                    $.ajax({
                        url: "{{ route('master.obat.delete') }}",
                        type: 'post',
                        data: {
                            'id': id
                        }
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
                                    // location.replace("{{ route('master.obat.list') }}");
                                    table.ajax.reload();
                                }
                            });
                        } else {
                            Swal.fire('Error', msg, 'error');
                        }
                    });
                }
            })
        }

        // On Event
    </script>

@endsection

{{-- Content --}}
@section('content')
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">List Obat</h4>
        </div>
        <div class="card-body">

            <div class="row">
                <div class="col-md-2">
                    <a class="btn icon btn-primary rounded-pill" href="{{ route('master.obat.create') }}">
                        <i class="bi bi-plus-circle"></i> Add Data
                    </a>
                </div>
            </div>

            <hr>

            <div class="table-responsive">
                <table class="table" id="tbl_list" style="width: 100%;">
                    <thead>
                        <tr>
                            <td rowspan="2" style="vertical-align: middle; text-align: center;">No</td>
                            <td colspan="2" style="vertical-align: middle; text-align: center;">Nama</td>
                            <td rowspan="2" style="vertical-align: middle; text-align: center;">Golongan</td>
                            <td rowspan="2" style="vertical-align: middle; text-align: center;">Bentuk Sediaan</td>
                            <td rowspan="2" style="vertical-align: middle; text-align: center;">Stock</td>
                            <td rowspan="2" style="vertical-align: middle; text-align: center;">Action</td>
                        </tr>
                        <tr>
                            <td style="vertical-align: middle; text-align: center;">Dagang</td>
                            <td style="vertical-align: middle; text-align: center;">Generik</td>
                        </tr>
                    </thead>
                </table>
            </div>

        </div>
    </div>
@endsection
