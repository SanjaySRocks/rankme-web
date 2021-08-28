@extends('stats.app')
@section('knife','active')

@section('content')
      <section class="mb-4">
        <div class="card">
          <div class="card-header py-3">
            <h5 class="mb-0 text-center"><strong>Top Knifes Table</strong></h5>
          </div>
          <div class="card-body">
            {{-- <p>hi this test </p> --}}

            <div class="table-responsive">
            <table id="example" class="table table-sm table-hover" style="width:100%">
              <thead>
                  <tr>
                    <th>Player</th>
                    <th>Steam ID</th>
                    <th>Knifes</th>
                  </tr>
              </thead>
              <tbody>
                {{-- @foreach ($users as $user)
                <tr>
                <th><a href="{{ route('player', ['id'=> $user->id]) }}"> {{ $user->name }} </a></th>
                <th>{{ $user->steam }}</th>
                <th>{{ $user->knife }}</th>
                </tr>
                @endforeach --}}
              </tbody>
              <tfoot>
                  <tr>
                    <th>Player</th>
                    <th>Steam ID</th>
                    <th>Knifes</th>
                  </tr>
              </tfoot>
          </table>
            </div>


            <!-- <canvas class="my-4 w-100" id="myChart" height="380"></canvas> -->
          </div>
        </div>
      </section>
@endsection

@section('script')
<script>
  $(document).ready(function() {
    $('#example').DataTable(
      {
        "processing": true,
        "ordering": false,
        "serverSide": true,
        "ajax": "/getData/4",
        "columns": [
            { "data": "name", 
            "className": 'font-weight-bold', 
            fnCreatedCell: function (nTd, sData, oData, iRow, iCol) {
              $(nTd).html("<a href='{{ url('player') }}/"+oData.id+"'>"+oData.name+"</a>");
            }
        
         },
            { "data": "steam" },
            { "data": "knife" }
        ]
      }
    );
} );
</script>
@endsection


