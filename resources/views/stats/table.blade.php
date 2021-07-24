<main style="margin-top: 58px">
    <div class="container pt-4">
      <!-- Section: Main chart -->
      <section class="mb-4">
        <div class="card">
          <div class="card-header py-3">
            <h5 class="mb-0 text-center"><strong>@yield('table')</strong></h5>
          </div>
          <div class="card-body">
            {{-- <p>hi this test </p> --}}

            <table id="example" class="table table-sm table-hover" style="width:100%">
              <thead>
                  @yield('table_head')
              </thead>
              <tbody>
                  @yield('table_data')
              </tbody>
              <tfoot>
                    @yield('table_head')
              </tfoot>
          </table>
          </div>
        </div>
      </section>
    </div>
  </main>

