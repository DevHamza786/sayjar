@extends('panel.layouts.app')
@section('content')
<div class="content d-flex flex-column flex-column-fluid bg-white" id="kt_content">
    <h1 class="anchor fw-bolder mb-5 px-10" id="dom-positioning">User List</h1>
    <div id="kt_content_container" class="container-xxl">
        <table id="kt_datatable_example_5" class="table table-striped table-row-bordered bg-white gy-5 gs-7 border rounded">
            <thead>
                <tr class="fw-bolder fs-6 text-gray-800 px-7">
                    <th>Sr No.</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Verified</th>
                    <th>Subscription</th>
                    {{-- <th>Action</th> --}}
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $key => $data)
                    <tr>
                        <td>{{ ++$key }}</td>
                        <td>{{ $data->name }}</td>
                        <td>{{ $data->email }}</td>
                        <td>{{ $data->phone ?? '' }}</td>
                        <td>{{ $data->email_verified_at	 }}</td>
                        <td>{{ ($data->subscription  == 0) ? 'No' : 'Yes' }}</td>
                        {{-- <td>
                            <i class="bi bi-pencil-square fs-2x text-success"></i>
                            <i class="bi bi-trash fs-2x px-4 text-danger"></i>
                        </td> --}}
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
@section('script_page')
<script>
    $("#kt_datatable_example_5").DataTable({
 "language": {
  "lengthMenu": "Show _MENU_",
 },
 "dom":
  "<'row'" +
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
