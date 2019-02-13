@extends('layouts.master')

@section('content')

<div class="container">
<div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                        Hover Data Table
                </div><!-- card-header -->
                    <div class="card-body">
                        <table id="datatable" class="table table-bordered table-hover">
                            <thead>
                            <tr>
                                <th>Rendering engine</th>
                                <th>Browser</th>
                                <th>Platform(s)</th>
                                <th>Engine version</th>
                                <th>CSS grade</th>
                            </tr>
                            </thead>
                            <tbody>
                            @for ($i = 0; $i < 30; $i++)
                            <tr>
                                <td>Trident</td>
                                <td>Internet
                                Explorer 4.0
                                </td>
                                <td>Win 95+</td>
                                <td> 4</td>
                                <td>X</td>
                            </tr>
                            @endfor
                            </tbody>
                        </table>
                    </div><!-- /.card-body -->      
            </div><!-- /.card -->
        </div><!-- /.col-12 -->
    </div><!-- /.row -->
</div>
<!-- /.container -->

@endsection

@section('js')
<script>
    $(document).ready( function () {
        $('#datatable').DataTable();
    } );
</script>
@endsection
