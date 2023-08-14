@include('layouts.header')

<main id="main" class="main">
    <div class="main-panel">
        <div class="content-wrapper">
          <div class="page-header">
            <h3 class="page-title"> Chart-js </h3>
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Charts</a></li>
                <li class="breadcrumb-item active" aria-current="page">Charts</li>
              </ol>
            </nav>
          </div>
          <div class="row">
            <div class="col-lg-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Feeding Chart</h4>
                  <canvas id="feedchart" style="height:250px"></canvas>
                </div>
              </div>
            </div>
            <div class="col-lg-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Water Level Chart</h4>
                  <canvas id="waterchart" style="height:230px"></canvas>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Water Filter</h4>
                  <canvas id="filterchart" style="height:250px"></canvas>
                </div>
              </div>
            </div>
            
          </div>
        </div>
      </div>
    </div>
</main>