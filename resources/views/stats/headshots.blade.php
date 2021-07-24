@extends('stats.app')
@section('headshot','active')

@section('content')
<main style="margin-top: 58px">
    <div class="container pt-4">
      <!-- Section: Main chart -->
      <section class="mb-4">
        <div class="card">
          <div class="card-header py-3">
            <h5 class="mb-0 text-center"><strong>Top Headshots Table</strong></h5>
          </div>
          <div class="card-body">
            {{-- <p>hi this test </p> --}}

            <div class="table-responsive">
            <table id="example" class="table table-sm table-hover" style="width:100%">
              <thead>
                  <tr>
                    <th>Player</th>
                    <th>Steam ID</th>
                    <th>Headshots</th>
                  </tr>
              </thead>
              <tbody>
                @foreach ($users as $user)
                <tr>
                <th><a href="{{ route('player', ['id'=> $user->id]) }}"> {{ $user->name }} </a></th>
                <th>{{ $user->steam }}</th>
                <th>{{ $user->head }}</th>
                </tr>
                @endforeach
              </tbody>
              <tfoot>
                  <tr>
                    <th>Player</th>
                    <th>Steam ID</th>
                    <th>Headshots</th>
                  </tr>
              </tfoot>
          </table>
            </div>


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


