@extends('layouts.master')

@section('content')

<div class="container-fluid">
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body p-3">
                <button type="button" class="btn btn-primary" 
                data-toggle="modal" data-target="#newModal">
                    <i class="fa fa-plus-circle"></i>
                    Add New
                </button>
            </div>
        </div>

        <div class="card">
            <div class="card-header">
                Customers
            </div><!-- card-header -->
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="example" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th width="15%">ပစ္စည်းအမျိုးအမည်</th>
                                    <th>ID</th>
                                    <th>ကျပ်</th>
                                    <th>ပဲ</th>
                                    <th>ရွေး</th>
                                    <th width="15%">ထုတ်ချေးသောငွေရင်း</th>
                                    <th width="15%">ပေါင်သူအမည်</th>
                                    <th width="15%">ပေါင်သူနေရပ်</th>
                                    <th width="12%">နေ့စွဲ</th>
                                    <th width="20%">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @isset($customers)
                                    <?php $num = 1; ?>
                                    @foreach($customers as $customer)
                                        <tr>
                                            <td>{{ $num++ }}</td>    
                                            <td>
                                                <a href="{{ url('customer/' . $customer->id) }}">
                                                    {{ $customer->category }}
                                                </a>
                                            </td>    
                                            <td>{{ sprintf("%07d", $customer->id) }}</td>    
                                            <td>{{ $customer->w_kyat }}</td>    
                                            <td>{{ $customer->w_pae }}</td>    
                                            <td>{{ $customer->w_ywae }}</td>    
                                            <td>{{ $customer->loan }}</td>    
                                            <td>{{ $customer->name }}</td>   
                                            <td>{{ $customer->address }}</td>  
                                            <td>{{ $customer->created_at->toDateString() }}</td>
                                            <td>
                                                <div class="row justify-content-center">
                                                    <button class="btn btn-success mr-2 btn-sm">
                                                        <i class="fa fa-edit"></i>
                                                    </button>
                                                    /
                                                    <form method="POST">
                                                        @csrf
                                                        @method('DELETE')
                                                        <input type="hidden" name="id" value="{{ $customer->id }}">
                                                        <button class="btn btn-danger ml-2 btn-sm"
                                                        onclick="return confirm('Are you sure?')">
                                                            <i class="fa fa-trash"></i>
                                                        </button>
                                                    </form>
                                                </div>
                                            </td>   
                                        </tr>
                                    @endforeach
                                @endisset    
                            </tbody>                          
                        </table>
                    </div><!-- /.table-responsive -->
                </div><!-- /.card-body -->      
        </div><!-- /.card -->
    </div><!-- /.col-12 -->
</div><!-- /.row -->
</div> <!-- /.container -->

<!-- Modal -->
<div class="modal fade" id="newModal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">New Customer</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <form method="POST" id="newForm">
                @csrf
                <div class="form-group">
                    <label for="">ပစ္စည်းအမျိုးအမည်</label>
                    <input type="text" class="form-control" id="" name="category">
                </div>
                <div class="form-row">
                    <div class="form-group col-12">
                        <label for="">ကျောက်ပါအလေးချိန်</label>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="">ကျပ်</label>
                        <input type="text" class="form-control" id="" name="w_kyat">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="">ပဲ</label>
                        <select id="inputState" class="form-control" name="w_pae">
                            @for ($i = 1; $i < 17; $i++)
                                <option value="{{ $i }}">{{ $i }}</option> 
                            @endfor
                        </select>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="">ရွေး</label>
                        <select id="inputState" class="form-control" name="w_ywae">
                            @for ($i = 1; $i < 9; $i++)
                            <option value="{{ $i }}">{{ $i }}</option> 
                            @endfor
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="">ထုတ်ချေးသောငွေရင်း</label>
                    <input type="text" class="form-control" id="" name="loan">
                </div>
                <div class="form-group">
                    <label for="">ပေါင်သူအမည်</label>
                    <input type="text" class="form-control" id="" name="name">
                </div>
                <div class="form-group">
                    <label for="">ပေါင်သူနေရပ်</label>
                    <input type="text" class="form-control" id="" name="address">
                </div>
            </form>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary" id="newBtn">Create</button>
        </div>
        </div>
    </div>
</div>
@endsection

@section('js')
<script>
    $(document).ready(function() {
        $('#example').DataTable();
        $('#newBtn').click(function() {
            $("#newForm").submit();
        })
    } );
</script>
@endsection
