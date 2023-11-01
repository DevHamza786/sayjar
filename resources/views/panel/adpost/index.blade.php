@extends('panel.layouts.app')
@section('content')
<div class="content d-flex flex-column flex-column-fluid bg-white" id="kt_content">
    <div class="card-header border-0 pt-6">
        <!--begin::Card toolbar-->
        <div class="card-toolbar d-flex justify-content-between">
            <h1 class="anchor fw-bolder mb-5 px-4">Ads Posted</h1>
            <!--begin::Toolbar-->
            <div class="d-flex px-6" data-kt-user-table-toolbar="base">
                <!--begin::Add user-->
                @hasrole('admin')
                    <a href="{{ route('adpost.admin-create') }}" class="btn btn-primary">
                        Ad Post
                    </a>
                @endrole
                @hasrole('customer')
                    <a href="{{ route('ad-post.create') }}" class="btn btn-primary">
                        Ad Post
                    </a>
                @endrole
                <!--end::Add user-->
            </div>
            <!--end::Toolbar-->
        </div>
        <!--end::Card toolbar-->
    </div>

    <div id="kt_content_container" class="container-xxl">
        <div class="panel panel-default">
            @if (session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
            @endif
        </div>
        <table id="kt_datatable_example_5"
            class="table table-striped table-row-bordered bg-white gy-5 gs-7 border rounded">
            <thead>
                <tr class="fw-bolder fs-6 text-gray-800 px-7">
                    <th>Sr No.</th>
                    <th>Feature Image</th>
                    @hasrole('admin')
                    <th>Users</th>
                    @endhasrole
                    <th>Title</th>
                    <th>Type</th>
                    <th>Category</th>
                    <th>Model</th>
                    <th>City</th>
                    <th>Price</th>
                    <th>Is Premium?</th>
                    <th>Status</th>
                    <th>Approval</th>
                    @hasrole('admin')
                    <th>Deleted</th>
                    @endhasrole
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($post as $key => $data)
                <tr>
                    <td>{{ ++$key }}</td>
                    <td><img src="{{ asset('public/adpost/features/image/' . $data->feature_image) }}" height="60"
                            width="60" /></td>
                    @hasrole('admin')
                    <td>{{ $data->user->name }}</td>
                    @endhasrole
                    <td>{{ $data->title }}</td>
                    <td>{{ ucwords($data->type->name) }}</td>
                    <td>{{ ucwords($data->category->name) }}</td>
                    <td>{{ ucwords($data->models->name) }}</td>
                    <td>{{ $data->city->name }}</td>
                    <td>
                        {{ $data->price_per_day.' /per day' }} <br>
                        {{ $data->price_per_week.' /per week' }} <br>
                        {{ $data->price_per_month.' /per month' }}
                    </td>
                    <td>{{ ($data->premium_add == null) ? 'No' : 'Yes' }}</td>
                    <td>
                        @if ($data->status == 'active')
                        <span class="badge badge-light-success">active</span>
                        @elseif($data->status == 'unactive')
                        <span class="badge badge-light-danger">unactive</span>
                        @endif
                    </td>
                    <td>
                        @if ($data->admin_apporval == 'pending')
                        <span class="badge badge-light-warning">Pending</span>
                        @elseif($data->admin_apporval == 'approved')
                        <span class="badge badge-light-success">Approved</span>
                        @elseif($data->admin_apporval == 'rejected')
                        <span class="badge badge-light-danger">Rejected</span>
                        @endif
                    </td>
                    @hasrole('admin')
                    <td>{{ (isset($data->deleted_at)) ? 'Yes' : 'No'  }}</td>
                    @endhasrole
                    @hasrole('customer')
                    <td>
                        <a href="{{ route('ad-post.edit',$data->id) }}" class="btn btn-success p-1 rounded-1">
                            <i class="bi bi-pencil-square px-2 text-white" style="font-size:14px !important"></i>
                        </a>
                        <a href="{{ route('ad-post.destory', $data->id) }}" class="btn btn-danger p-1 rounded-1" data-id="{{ $data->id }}">
                            <i class="bi bi-trash px-2 text-white" style="font-size:14px !important"></i>
                        </a>
                        @if($data->admin_apporval == 'approved')
                        <button class="btn btn-secondary p-1 rounded-1 post_status" data-id="{{ $data->id }}">
                            <i class="bi bi-power px-2 text-dark"
                                style="font-size:14px !important"></i>
                        </button>
                    @endif
                    </td>
                    @endhasrole
                    @hasrole('admin')
                    <td>
                        <button class="btn btn-primary p-2 post_approval" data-id="{{ $data->id }}">
                            <i class="bi bi-clipboard-plus px-2 text-white"
                                style="font-size:18px !important"></i>
                        </button>
                        @if($data->admin_apporval == 'approved')
                            <button class="btn btn-secondary p-2 post_status" data-id="{{ $data->id }}">
                                <i class="bi bi-power px-2 text-dark"
                                    style="font-size:18px !important"></i>
                            </button>
                        @endif
                    </td>
                    @endhasrole
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
<div class="modal fade" tabindex="-1" id="kt_modal_add_status">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title">Update Ad Post Approval</h3>

                <!--begin::Close-->
                <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal" aria-label="Close">
                    <i class="bi bi-x-lg text-dark"></i>
                </div>
                <!--end::Close-->
            </div>

            <form action="{{ route('adpost.approval') }}" method="POST">
                @csrf
            <div class="modal-body">
                    <input name="id" id="adpost_id" type="hidden" value=""/>
                    <select class="form-select form-select-solid fw-bolder" name="approval" id="adpost_approval" required>
                        <option value="">-- Chose One --</option>
                        <option value="rejected">Rejected</option>
                        <option value="pending">Pending</option>
                        <option value="approved">Approved</option>
                    </select>
                </div>

                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>
            </form>
        </div>
    </div>
</div>

<div class="modal fade" tabindex="-1" id="kt_modal_ad_status">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title">Update Ad Post Status</h3>

                <!--begin::Close-->
                <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal" aria-label="Close">
                    <i class="bi bi-x-lg text-dark"></i>
                </div>
                <!--end::Close-->
            </div>

            <form action="{{ route('adpost.statusupdate') }}" method="POST">
                @csrf
            <div class="modal-body">
                    <input name="id" id="adpost_status_id" type="hidden" value=""/>
                    <select class="form-select form-select-solid fw-bolder" name="status" id="adpost_status" required>
                        <option value="">-- Chose One --</option>
                        <option value="active">Active</option>
                        <option value="unactive">Unactive</option>
                    </select>
                </div>

                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
@section('script_page')
<script>
$('.post_approval').click(function() {
    var id = $(this).data('id');
    $.ajax({
        url: '/admin/edit-adpost/' + id,
        type: 'GET',
        dataType: 'json',
        success: function(data) {
            $('#kt_modal_add_status').modal('show');
            $('#adpost_id').val(data.id);
            $("#adpost_approval option").each(function() {
                if ($(this).val() == data.admin_apporval) {
                    $(this).prop("selected", true);
                }
            });

        }
    });
});

$('.post_status').click(function() {
    var id = $(this).data('id');
    $.ajax({
        url: '/admin/edit-adpost/' + id,
        type: 'GET',
        dataType: 'json',
        success: function(data) {
            $('#kt_modal_ad_status').modal('show');
            $('#adpost_status_id').val(data.id);
            $("#adpost_status option").each(function() {
                if ($(this).val() == data.status) {
                    $(this).prop("selected", true);
                }
            });

        }
    });
});


$("#kt_datatable_example_5").DataTable({
    "language": {
        "lengthMenu": "Show _MENU_",
    },
    "dom": "<'row'" +
        "<'col-sm-6 d-flex align-items-center justify-conten-start'l>" +
        "<'col-sm-6 d-flex align-items-center justify-content-end'f>" +
        ">" +

        "<'table-responsive'tr>" +

        "<'row'" +
        "<'col-sm-12 col-md-5 d-flex align-items-center justify-content-center justify-content-md-start'i>" +
        "<'col-sm-12 col-md-7 d-flex align-items-center justify-content-center justify-content-md-end'p>" +
        ">"
});
</script>
@endsection
