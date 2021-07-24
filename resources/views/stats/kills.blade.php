@extends('stats.app')
@section('kill','active')

@section('content')
<main style="margin-top: 58px">
    <div class="container pt-4">
      <!-- Section: Main chart -->
      <section class="mb-4">
        <div class="card">
          <div class="card-header py-3">
            <h5 class="mb-0 text-center"><strong>Top Kills Table</strong></h5>
          </div>
          <div class="card-body">
            {{-- <p>hi this test </p> --}}

            <!-- Tabs navs -->
<ul class="nav nav-tabs nav-fill mb-3" id="ex1" role="tablist">
  <li class="nav-item" role="presentation">
    <a
      class="nav-link active"
      id="ex2-tab-1"
      data-mdb-toggle="tab"
      href="#ex2-tabs-1"
      role="tab"
      aria-controls="ex2-tabs-1"
      aria-selected="true"
      >Kills</a
    >
  </li>
  <li class="nav-item" role="presentation">
    <a
      class="nav-link"
      id="ex2-tab-2"
      data-mdb-toggle="tab"
      href="#ex2-tabs-2"
      role="tab"
      aria-controls="ex2-tabs-2"
      aria-selected="false"
      >Headshot</a
    >
  </li>
  <li class="nav-item" role="presentation">
    <a
      class="nav-link"
      id="ex2-tab-3"
      data-mdb-toggle="tab"
      href="#ex2-tabs-3"
      role="tab"
      aria-controls="ex2-tabs-3"
      aria-selected="false"
      >Knife</a
    >
  </li>
</ul>
<!-- Tabs navs -->

<!-- Tabs content -->
<div class="tab-content" id="ex2-content">
  <div
    class="tab-pane fade show active"
    id="ex2-tabs-1"
    role="tabpanel"
    aria-labelledby="ex2-tab-1"
  >
    <div class="table-responsive">
            <table id="example" class="table table-sm table-hover" style="width:100%">
              <thead>
                  <tr>
                    <th>Player</th>
                    <th>Steam ID</th>
                    <th>Kills</th>
                  </tr>
              </thead>
              <tbody>
                @foreach ($users as $user)
                <tr>
                <th><a href="{{ route('player', ['id'=> $user->id]) }}"> {{ $user->name }} </a></th>
                <th>{{ $user->steam }}</th>
                <th>{{ $user->kills }}</th>
                </tr>
                @endforeach
              </tbody>
              <tfoot>
                  <tr>
                    <th>Player</th>
                    <th>Steam ID</th>
                    <th>Kills</th>
                  </tr>
              </tfoot>
            </table>
            </div>
  </div>
  <div
    class="tab-pane fade"
    id="ex2-tabs-2"
    role="tabpanel"
    aria-labelledby="ex2-tab-2"
  >
    <div class="table-responsive">
            <table id="example" class="table table-sm table-hover" style="width:100%">
              <thead>
                  <tr>
                    <th>Player</th>
                    <th>Steam ID</th>
                    <th>Kills</th>
                  </tr>
              </thead>
              <tbody>
                @foreach ($users as $user)
                <tr>
                <th><a href="{{ route('player', ['id'=> $user->id]) }}"> {{ $user->name }} </a></th>
                <th>{{ $user->steam }}</th>
                <th>{{ $user->kills }}</th>
                </tr>
                @endforeach
              </tbody>
              <tfoot>
                  <tr>
                    <th>Player</th>
                    <th>Steam ID</th>
                    <th>Kills</th>
                  </tr>
              </tfoot>
            </table>
            </div>
  </div>
  <div
    class="tab-pane fade"
    id="ex2-tabs-3"
    role="tabpanel"
    aria-labelledby="ex2-tab-3"
  >
  <div class="table-responsive">
    <table id="example" class="table table-sm table-hover" style="width:100%">
      <thead>
          <tr>
            <th>Player</th>
            <th>Steam ID</th>
            <th>Kills</th>
          </tr>
      </thead>
      <tbody>
        @foreach ($users as $user)
        <tr>
        <th><a href="{{ route('player', ['id'=> $user->id]) }}"> {{ $user->name }} </a></th>
        <th>{{ $user->steam }}</th>
        <th>{{ $user->kills }}</th>
        </tr>
        @endforeach
      </tbody>
      <tfoot>
          <tr>
            <th>Player</th>
            <th>Steam ID</th>
            <th>Kills</th>
          </tr>
      </tfoot>
    </table>
    </div>

    
  </div>
</div>
<!-- Tabs content -->



            


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
    $('.table').DataTable(
      {
        "ordering": false
      }
    );
} );
</script>
@endsection


