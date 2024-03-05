@include('admin.common.header')
@include('admin.common.sidebar')
<!--**********************************
	Content body start
***********************************-->
<div class="content-body">
	<div class="container-fluid">

		<div class="row">
			<div class="col-xl-12">

				<div class="mb-3">
					<a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#basicModal" class="btn btn-primary btn-sm">Add Rols</a>
				</div>
				<div class="filter cm-content-box box-primary">
					<div class="content-title SlideToolHeader">
						<div class="cpa">
							<i class="fa-solid fa-file-lines me-1"></i>Rols List
						</div>
					</div>
					<div class="cm-content-body form excerpt">
						<div class="card-body pb-4">
							<div class="table-responsive">
								<table class="table">
									<thead>
										<tr>
											<th>S.No</th>
											<th>Title</th>
											<th>Status</th>
											<th>Actions</th>
										</tr>
									</thead>
									<tbody>
                                       @if($roles->count() > 0)
                                        @foreach($roles as $item)
										<tr>
											<td>{{++$i}}</td>
											<td>{{$item->title}}</td>
											<td>
                                                @if($item->status==1)
                                                <span class="badge light badge-success">Active</span>
                                                @else
                                                <span class="badge light badge-danger">Inactive</span>
                                                @endif
                                            </td>
											<td class="text-nowrap">
												<a href="javascript:void(0);" class="btn btn-warning btn-sm content-icon">
													<i class="fa fa-edit"></i>
												</a>
												<a href="javascript:void(0);" class="btn btn-danger btn-sm content-icon">
														<i class="fa fa-times"></i>
												</a>
											</td>
										</tr>
                                        @endforeach
                                        @else
                                            <tr>
                                                <td colspan="4">Data Not Found!</td>
                                            </tr>
                                        @endif
									</tbody>
								</table>
								<div class="d-flex align-items-center justify-content-between flex-wrap">
									{{-- <p class="mb-2 me-3">Page 1 of 5, showing 2 records out of 8 total, starting on record 1, ending on 2</p> --}}
									{{ $roles->links() }}
                                    {{-- <nav aria-label="Page navigation example mb-2">
										<ul class="pagination mb-2 mb-sm-0">
										<li class="page-item"><a class="page-link" href="javascript:void(0);"><i class="fa-solid fa-angle-left"></i></a></li>
										<li class="page-item"><a class="page-link" href="javascript:void(0);">1</a></li>
										<li class="page-item"><a class="page-link" href="javascript:void(0);">2</a></li>
										<li class="page-item"><a class="page-link" href="javascript:void(0);">3</a></li>
										<li class="page-item"><a class="page-link " href="javascript:void(0);"><i class="fa-solid fa-angle-right"></i></a></li>
										</ul>
									</nav> --}}
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!--**********************************
	Content body end
***********************************-->
<div class="modal fade" id="basicModal">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Add Roles</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal">
                </button>
            </div>
            <div class="modal-body">
                <div id="responseMessage"></div>
                <form id="ajaxForm" method="post">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label">Title</label>
                        <input type="text" class="form-control" name="title" placeholder="Title">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Status</label>

                        <select class="default-select  form-control wide" name="status">
                            <option value="1">Active</option>
                            <option value="0">Inactive</option>
                        </select>
                    </div>
                    <button id="sendmemessage" type="button" class="btn btn-primary">Save changes</button>
                </form>
            </div>

        </div>
    </div>
</div>
@include('admin.common.footer')

<script>
    $(document).ready(function () {
        $('#sendmemessage').on('click', function () {
            // Serialize the form data
            var formData = $('#ajaxForm').serialize();
            // Send AJAX request
            $.ajax({
                url: '{{ url("/admin/roles") }}',
                type: 'post',
                data: formData,
                success: function (response) {
                    // Display success message
                    $('#responseMessage').html('<span class="alert alert-success">' + response.message + '</span>');
                    setTimeout(() => {
                       location.reload();
                    }, 2000);
                },
                error: function (xhr) {
                    // Display error message
                    var response = JSON.parse(xhr.responseText);
                    var errorsHtml = '<div class="alert alert-danger">';
                    $.each(response.errors, function (key, value) {
                        errorsHtml += '<span>' + value + '</span>';
                    });
                    errorsHtml += '</div>';
                    $('#responseMessage').html(errorsHtml);
                }
            });
        });
    });
</script>
