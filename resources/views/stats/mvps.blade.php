@extends('stats.app')
@section('mvp','active')

@section('content')
<main style="margin-top: 58px">
    <div class="container pt-4">
      <!-- Section: Main chart -->
      <section class="mb-4">
        <div class="card">
          <div class="card-header py-3">
            <h5 class="mb-0 text-center"><strong>Top MVPs Table</strong></h5>
          </div>
          <div class="card-body">
            {{-- <p>hi this test </p> --}}

            <div class="table-responsive">
            <table id="example" class="table table-sm table-hover" style="width:100%">
              <thead>
                  <tr>
                    <th>Player</th>
                    <th>Steam ID</th>
                    <th>MVPs</th>
                  </tr>
              </thead>
              <tbody>
                @foreach ($users as $user)
                <tr>
                <th><a href="player/{{ $user->id }}"> {{ $user->name }} </a></th>
                <th>{{ $user->steam }}</th>
                <th>{{ $user->mvp }}</th>
                </tr>
                @endforeach
              </tbody>
              <tfoot>
                  <tr>
                    <th>Player</th>
                    <th>Steam ID</th>
                    <th>MVPs</th>
                  </tr>
              </tfoot>
          </table>
            </div>

            <!-- <canvas class="my-4 w-100" id="myChart" height="380"></canvas> -->
          </div>
        </div>
      </section>
    </div>
  </main>
@endsection

@section('script')
<script>
  $(document).ready(function() {
    $('#example').DataTable(
      {
        "ordering": false
      }
    );
} );
</script>
@endsection


