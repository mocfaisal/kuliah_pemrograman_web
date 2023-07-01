@extends('backend.layouts.index')
@section('app.title', 'Dashboard')

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

@endsection

{{-- Content --}}
@section('content')
    <div class="card">
        <div class="card-header">
            <h6 class="card-title">Dashboard</h6>
        </div>
        <div class="card-body">
            <h5>List Stock 10 Obat yang sedikit</h5>
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Nama Obat</th>
                            <th>Stock</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        if (!empty($data_obat)) {
                            $i = 1;
                            foreach ($data_obat as $val) {
                                $stock = number_format($val['stock'], 0, ',', '.');

                                echo '<tr>';
                                echo '<td>' . $i . '</td>';
                                echo '<td>' . $val['nm_obat'] . '</td>';
                                echo '<td>' . $stock . '</td>';
                                echo '</tr>';

                                $i++;
                            }
                        }

                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
