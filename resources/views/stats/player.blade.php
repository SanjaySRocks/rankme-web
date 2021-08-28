@extends('stats.app')
@section('main','active')
    
@section('content')
      <section class="mb-4">
        <div class="card">
          <div class="card-header py-3">
            <h5 class="mb-0 text-center"><strong>{{ $users->name }}</strong></h5>
          </div>
          <div class="card-body">


            <div class="container">
              <div class="row">
                <div class="col-6 col-sm-3">Points</div>
                <div class="col-6 col-sm-3"><span class="badge bg-danger"> {{ $users->score }} </span></div>
            
                <!-- Force next columns to break to new line -->
                <div class="w-100"></div>
            
                <div class="col-6 col-sm-3">Kills</div>
                <div class="col-6 col-sm-3"><span class="badge bg-primary">{{ $users->kills }}</span></div>
              </div>

              <div class="row">
                <div class="col-6 col-sm-3">Deaths</div>
                <div class="col-6 col-sm-3"><span class="badge bg-primary">{{ $users->deaths }}</span></div>
            
                <!-- Force next columns to break to new line -->
                <div class="w-100"></div>
            
                <div class="col-6 col-sm-3">K/D</div>
                <div class="col-6 col-sm-3">
                  <span class="badge bg-primary">
                  @if($users->deaths > 0) 
                  {{ number_format(($users->kills/$users->deaths), 2) }}
                  @else
                  0.00
                  @endif
                  </span>
                </div>
              </div>

              <div class="row">
                <div class="col-6 col-sm-3">Headshot</div>
                <div class="col-6 col-sm-3"><span class="badge bg-primary">{{ $users->head }} / ( {{ number_format(($users->head/$users->kills * 100), 2) }}% ) </span></div>
            
                <!-- Force next columns to break to new line -->
                <div class="w-100"></div>
            
                <div class="col-6 col-sm-3">Knife</div>
                <div class="col-6 col-sm-3"><span class="badge bg-primary">{{ $users->knife }}</span></div>
              </div>
              @php
              $details = json_decode(file_get_contents("http://ipinfo.io/{$users->lastip}/json")); // -> "Mountain View"   
              @endphp
              
              <div class="row">
                <div class="col-6 col-sm-3">Location</div>
                <div class="col-6 col-sm-3"><span class="badge bg-primary">{{ $details->city }}, {{ $details->region }}</span></div>
              </div>
            
            </div>



          </div>
        </div>
      </section>


      <section>
        <div class="row">
          <div class="col-xl-4 col-sm-6 col-12 mb-4">
            <div class="card">
              <div class="card-body">
                <div class="d-flex justify-content-between px-md-1">
                  <div class="align-self-center">
                    <i class="fas fa-fire text-danger fa-3x"></i>
                  </div>
                  <div class="text-end">
                    <h3>{{ $users->first_blood }}</h3>
                    <p class="mb-0">First Blood</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-4 col-sm-6 col-12 mb-4">
            <div class="card">
              <div class="card-body">
                <div class="d-flex justify-content-between px-md-1">
                  <div class="align-self-center">
                    <i class="fas fa-strikethrough text-warning fa-3x"></i>
                  </div>
                  <div class="text-end">
                    <h3>{{ $users->wallbang }}</h3>
                    <p class="mb-0">Penetrated</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-4 col-sm-6 col-12 mb-4">
            <div class="card">
              <div class="card-body">
                <div class="d-flex justify-content-between px-md-1">
                  <div class="align-self-center">
                    <i class="fas fa-dot-circle text-success fa-3x"></i>
                  </div>
                  <div class="text-end">
                    <h3>{{ $users->no_scope }}</h3>
                    <p class="mb-0">No Scope</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
      </div>
    </section>


      <section class="mb-4">
        <div class="card">
          <div class="card-header py-3">
            <h5 class="mb-0 text-center"><strong>Weapons</strong></h5>
          </div>
          <div class="card-body">
              <h5 class="mb-0 text-center">he loves to play with AWP the most </h5>
              <table id="example" class="table table-sm table-hover">
                <thead>
                  <tr>
                    <th scope="col">Weapon</th>
                    <th scope="col">Frags</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th>
                      GLOCK</th>
                    <td>{{ $users->glock }} </td>
                  </tr>
                  <tr>
                    <th>
                      USP SILENCER</th>
                    <td>{{ $users->usp_silencer }}</td>
                  </tr>
                  <tr>
                    <th>
                       HKP2000</th>
                    <td>{{ $users->hkp2000 }}</td>
                  </tr>
                  <tr>
                    <th>
                       P250</th>
                    <td>{{ $users->p250 }}</td>
                  </tr>
                  <tr>
                    <th>
                       DEAGLE</th>
                    <td>{{ $users->deagle }}</td>
                  </tr>
                  <tr>
                    <th>
                       ELITE</th>
                    <td>{{ $users->elite }}</td>
                  </tr>
                  <tr>
                    <th>
                       FIVE SEVEN</th>
                    <td>{{ $users->fiveseven }}</td>
                  </tr>
                  <tr>
                    <th>
                       TEC-9</th>
                    <td>{{ $users->tec9 }}</td>
                  </tr>
                  <tr>
                    <th>
                       CZ-75A</th>
                    <td>{{ $users->cz75a }}</td>
                  </tr>
                  <tr>
                    <th>
                       MAC-10</th>
                    <td>{{ $users->mac10 }}</td>
                  </tr>
                  <tr>
                    <th>
                       MP9</th>
                    <td>{{ $users->mp9 }}</td>
                  </tr>
                  <tr>
                    <th>
                       MP7</th>
                    <td>{{ $users->mp7 }}</td>
                  </tr>
                  <tr>
                    <th>
                       UMP-45</th>
                    <td>{{ $users->ump45 }}</td>
                  </tr>

                  <tr>
                    <th>
                       P90</th>
                    <td>{{ $users->p90 }}</td>
                  </tr>
                  <tr>
                    <th>
                       GALIL</th>
                    <td>{{ $users->galilar }}</td>
                  </tr>
                  <tr>
                    <th>
                       AK-47</th>
                    <td>{{ $users->ak47 }}</td>
                  </tr>
                  <tr>
                    <th>
                       FAMAS</th>
                    <td>{{ $users->famas }}</td>
                  </tr>
                  <tr>
                    <th>
                       M4A1</th>
                    <td>{{ $users->m4a1 }}</td>
                  </tr>
                  <tr>
                    <th>
                       M4A1-S</th>
                    <td>{{ $users->m4a1_silencer }}</td>
                  </tr>
                  <tr>
                    <th>
                       AUG</th>
                    <td>{{ $users->aug }}</td>
                  </tr>

                  <tr>
                    <th>
                       SSG 08</th>
                    <td>{{ $users->ssg08 }}</td>
                  </tr>

                  <tr>
                    <th>
                       SG556</th>
                    <td>{{ $users->sg556 }}</td>
                  </tr>

                  <tr>
                    <th>
                       AWP</th>
                    <td>{{ $users->awp }}</td>
                  </tr>

                  
                </tbody>
              </table>

          </div>
        </div>
      </section>


      <section class="mb-4">
        <div class="card">
          <div class="card-header py-3">
            <h5 class="mb-0 text-center"><strong>Body Hits</strong></h5>
          </div>
          <div class="card-body">

              <h5 class="mb-0 text-center"> </h5>
              <table id="example" class="table table-sm table-bordered">
                <thead>
                  <tr>
                    <th scope="col">Body</th>
                    <th scope="col">Hits</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th>HEAD</th>
                    <td>{{ $users->head }} </td>
                  </tr>
                  <tr>
                    <th>CHEST</th>
                    <td>{{ $users->chest }}</td>
                  </tr>
                  <tr>
                    <th>STOMACH</th>
                    <td>{{ $users->stomach }}</td>
                  </tr>
                  <tr>
                    <th>LEFT ARM</th>
                    <td>{{ $users->left_arm }}</td>
                  </tr>
                  <tr>
                    <th>RIGHT ARM</th>
                    <td>{{ $users->right_arm }}</td>
                  </tr>
                  <tr>
                    <th>LEFT LEG</th>
                    <td>{{ $users->left_leg }}</td>
                  </tr>
                  <tr>
                    <th>RIGHT LEG</th>
                    <td>{{ $users->right_leg }}</td>
                  </tr>
                </tbody>
              </table>

          </div>
        </div>
      </section>

@endsection


@section('script')
<script>
  $(document).ready(function() {
    $('#example').DataTable(
      {
        "ordering": true,
        "order": [[ 1, "desc" ]]
      }
    );
} );
</script>
@endsection