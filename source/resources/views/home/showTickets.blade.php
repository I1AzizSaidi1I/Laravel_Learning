@extends('layout.app')

@section('content')
    <div class="hold-transition sidebar-mini">


<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Fixed Header Table</h3>

                    <div class="card-tools">
                        <div class="input-group input-group-sm" style="width: 150px;">
                            <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                            <div class="input-group-append">
                                <button type="submit" class="btn btn-default">
                                    <i class="fas fa-search"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body table-responsive p-0" style="height: 300px;">
                    <table class="table table-head-fixed text-nowrap">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>destination</th>
                            <th>price</th>
                            <th>created_at</th>
                            <th>updated_at</th>
                        </tr>
                        </thead>
                        <tbody>
                        @forelse($tickets as $ticket)
                        <tr>
                            <td>{{$ticket->id}}</td>
                            <td>{{$ticket->destination}}</td>
                            <td>{{$ticket->price}}</td>
                            <td>
                                <span class="tag tag-success">
                                    @if ($ticket->status ==1)
                                        <p>Approved</p>
                                    @else
                                        <p>in progress</p>
                                    @endif
                                </span></td>
                        </tr>
                        @empty
                            <tr>
                                <td colspan="5">No Data Found</td>
                            </tr>
                        @endforelse
                        </tbody>
                    </table>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
    </div>
</div>
    </div>
@endsection
