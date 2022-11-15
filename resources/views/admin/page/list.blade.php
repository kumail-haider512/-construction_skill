@extends('layouts.admin')
@section('title', 'Page')
@section('nav-title', 'Page')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header card-header-success card-header-icon">
                    <div class="card-icon"><i class="material-icons">list</i></div>
                    <h5 class="card-title">Page List</h5>
                </div>
                <div class="card-body">
                	<div class="material-datatables mt-3">
                        <table class="datatables table table-striped table-bordered table-hover" cellspacing="0" width="100%" style="width:100%">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Date</th>
                                    <th>Name</th>
                                    <th>Detail</th>
                                    <th>Link</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                            	@foreach ($list as $item)
                                <tr>
                                	<td>{{ $loop->iteration }}</td>
                                	<td>{{ $item->created_at->format('d/m/Y') }}</td>
                                	<td>{{ $item->name }}</td>
                                    <td>{!! $item->description !!}</td>
                                    <td>
                                        <div class="input-group mb-3">
                                            <input type="text" class="form-control form-control-sm link" value="{{asset($item->uid.'/'.$item->slug)}}" style="">
                                            <div class="input-group-append">
                                                <button class="btn btn-sm btn-primary copy-link">Copy</button>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <a href="{{ route('admin.page.edit', $item->id) }}" rel="tooltip" class="btn btn-success btn-round" data-original-title="Edit" title="Edit">
                                            <i class="material-icons">edit</i>
                                        </a>
                                        <button type="button" onclick="deleteAlert('{{ route('admin.page.delete', $item->id) }}')" rel="tooltip" class="btn btn-danger btn-round delete-btn" data-original-title="Delete" title="Delete">
                                            <i class="material-icons">close</i>
                                        </button>
                                    </td>
                                </tr>
                                @endforeach		
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('js')
<script >
    $(document).on("click",".copy-link", function(event) {
        var elm = $(this).closest('td').find('.link');
        $(elm).select();
        document.execCommand("copy");
        $('.copy-link').text('Copy');
        $(this).text('Copied');
    });
</script>
@endsection