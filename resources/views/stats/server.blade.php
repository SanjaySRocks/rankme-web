@extends('stats.app')
@section('server','active')
    
@section('content')
<main style="margin-top: 58px">
    <div class="container pt-4">
      <!-- Section: Main chart -->
      <section class="mb-4">
        <div class="card">
          <div class="card-header py-3">
            <h5 class="mb-0 text-center"><strong>Servers</strong></h5>
          </div>
          <div class="card-body">
          
            <section>

              <div class="table-responsive">
              <table id="example" class="table table-borderless table-hover" style="width:100%">
                <thead>
                    <tr>
                        <th>Server Name</th>
                        <th>Server Address</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th>AnonymouS PUG [Mumbai] [128T !ws !knife] [LIVE 6-3]</th>
                        <th>13.234.99.54:27015</th>
                        <th class="text-success">ONLINE</th>
                        <th><a href="steam://connect/13.234.99.54:27015">[ CONNECT ]</a></th>
                    </tr>
                    <tr>
                      <th>AnonymouS PUG #2 [Mumbai] [128T !ws !knife] [LIVE 6-3]</th>
                      <th>13.126.169.227:27015</th>
                      <th class="text-success">ONLINE</th>
                      <th><a href="steam://connect/13.126.169.227:27015">[ CONNECT ]</a></th>
                    </tr>
                </tbody>
            </table>
              </div>


            </section>


          </div>
        </div>
      </section>
    </div>
  </main>
@endsection


