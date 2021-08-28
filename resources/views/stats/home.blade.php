@extends('stats.app')
@section('main','active')
    
@section('content')
      <section class="mb-4">
        <div class="card">
          <div class="card-header py-3">
            <h5 class="mb-0 text-center"><strong>Real time Statistics</strong></h5>
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

            </section>





          </div>
        </div>
      </section>
@endsection


