@extends('stats.app')
@section('main','active')
    
@section('content')
<main style="margin-top: 58px">
    <div class="container pt-4">
      <!-- Section: Main chart -->
      <section class="mb-4">
        <div class="card">
          <div class="card-header py-3">
            <h5 class="mb-0 text-center"><strong>Main Dashboard</strong></h5>
          </div>
          <div class="card-body">
            

            <section>
              <div class="row">
                <div class="col-xl-6 col-md-12 mb-4">
                  <div class="card">
                    <div class="card-body">
                      <div class="d-flex justify-content-between p-md-1">
                        <div class="d-flex flex-row">
                          <div class="align-self-center">
                            <i class="far fa-user text-info fa-3x me-4"></i>
                          </div>
                          <div>
                            <h4>Total Players</h4>
                            <p class="mb-0">No. of Players</p>
                          </div>
                        </div>
                        <div class="align-self-center">
                          <h2 class="h1 mb-0">
                            {{ number_format($totalp,0,"",",") }}</h2>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-xl-6 col-md-12 mb-4">
                  <div class="card">
                    <div class="card-body">
                      <div class="d-flex justify-content-between p-md-1">
                        <div class="d-flex flex-row">
                          <div class="align-self-center">
                            <i
                               class="far fa-comment-alt text-warning fa-3x me-4"
                               ></i>
                          </div>
                          <div>
                            <h4>Total Headshots</h4>
                            <p class="mb-0">No. of Headshots</p>
                          </div>
                        </div>
                        <div class="align-self-center">
                          <h2 class="h1 mb-0">{{ number_format($totalhs,0,"",",") }}</h2>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>


              <div class="card">
                <div class="card-header py-3">
                  <h5 class="mb-0 text-center"><strong>User Dashboard</strong></h5>
                </div>
                <div class="card-body">
                  <div class="container">
                    <div class="mb-3">
                    <img class="shadow-1-strong" src="{{ session()->get('user')['avatar'] }}" height=70 width=70>
                    </div>
                    <div class="row">
                      <div class="col-6 col-sm-3">Username</div>
                      <div class="col-6 col-sm-3"><span class="badge bg-danger"> {{ session()->get('user')['username'] }} </span></div>
                  
                      <!-- Force next columns to break to new line -->
                      <div class="w-100"></div>
                  
                      <div class="col-6 col-sm-3">User ID</div>
                      <div class="col-6 col-sm-3"><span class="badge bg-primary">{{ session()->get('user')['steamid'] }}</span></div>
                    </div>
                  
                  </div>
                </div>
              </div>
              {{-- <div class="row">
                <div class="col-xl-6 col-md-12 mb-4">
                  <div class="card">
                    <div class="card-body">
                      <div class="d-flex justify-content-between p-md-1">
                        <div class="d-flex flex-row">
                          <div class="align-self-center">
                            <h2 class="h1 mb-0 me-4">$76,456.00</h2>
                          </div>
                          <div>
                            <h4>Total Points</h4>
                            <p class="mb-0">Count</p>
                          </div>
                        </div>
                        <div class="align-self-center">
                          <i class="far fa-heart text-danger fa-3x"></i>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-xl-6 col-md-12 mb-4">
                  <div class="card">
                    <div class="card-body">
                      <div class="d-flex justify-content-between p-md-1">
                        <div class="d-flex flex-row">
                          <div class="align-self-center">
                            <h2 class="h1 mb-0 me-4">$36,000.00</h2>
                          </div>
                          <div>
                            <h4>Highest Point</h4>
                            <p class="mb-0">Highest Point of all</p>
                          </div>
                        </div>
                        <div class="align-self-center">
                          <i class="fas fa-wallet text-success fa-3x"></i>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div> --}}
            </section>
            <!--Section: Statistics with subtitles-->





          </div>
        </div>
      </section>
    </div>
  </main>
@endsection


