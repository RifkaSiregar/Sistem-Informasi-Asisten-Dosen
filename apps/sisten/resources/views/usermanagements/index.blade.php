@extends('layouts.master')

@section('content')

<title>User Management</title>

<!-- <link href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css" rel="stylesheet"> -->
<link href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</head>

<body>
  <div class="main">
    <div class="main-content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">

            <div class="card">
              <div class="card-body">
                <div class="form-group">
                  <label><strong>Status :</strong></label>
                  <select id='status' class="form-control" style="width: 200px">
                    <option value="">--Select Status--</option>
                    <option value="active">Active</option>
                    <option value="inactive">Inactive</option>
                  </select>
                </div>
              </div>
            </div>


            @if (session('success'))
            <div class="alert alert-success alert-block">
              <button type="button" class="close" data-dismiss="alert">×</button>
              {{ session('success')}}
            </div>
            @endif

            <!-- TABLE HOVER -->
            <div class="panel">
              <div class="panel-heading">
                <h3 class="panel-title">List of Users</h3>

              </div>
              <div class="panel-body">
                <table class="table table-hover data-table">
                  <thead>
                    <tr>
                      <th>Name</th>
                      <th>Registration Number</th>
                      <th>Email</th>
                      <th>Role</th>
                      <th>Status</th>
                    </tr>
                  </thead>
                  <tbody>
                  </tbody>
                </table>
              </div>
            </div>
            <!-- END TABLE HOVER -->

          </div>
        </div>
      </div>
    </div>
  </div>

</body>

<script type="text/javascript">
  $(function() {

    var table = $('.data-table').DataTable({
      processing: true,
      serverSide: true,

      ajax: {
        url: "{{ route('users.index') }}",
        data: function(d) {
          d.status = $('#status').val(),
            d.search = $('input[type="search"]').val()
        }
      },

      columns: [{
          data: 'initial',
          name: 'initial'
        },
        {
          data: 'registration_number',
          name: 'registration_number'
        },
        {
          data: 'email',
          name: 'email'
        },
        {
          data: 'role',
          name: 'role'
        },
        {
          data: 'status',
          name: 'status',
          render: function(data, type, row) {
            return "<a href='/users/" + row.id + "/edit'>" + row.status + "</a>"
          }
        },
      ]
    });
    $('#status').change(function() {
      table.draw();
    });

  });
</script>

@stop