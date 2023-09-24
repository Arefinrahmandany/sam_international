@extends('backend.layouts.app')

@section('main-content')




<!-- card start -->


<div class="container mt-5 mb-5">
    <div class="card-body">
        <div class="row no-gutters">
            <div class="card">
                <div class="main-body">
<div class="mb-4 pt-4">
    <div class="row gutters-sm">
        <div class="col-md-4 mb-3">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex flex-column align-items-center text-center">
                        <img src="{{ base64_encode($passport_data->photos) }}" alt="Image" width="15px">
                        <div class="mt-3">
                            <h4>{{ $passport_data -> name}}</h4>
                            <p class="text-muted font-size-sm">{{ $passport_data -> address}}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-8">
            <div class="card mb-3">
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-3">
                            <h6 class="mb-0">Full Name</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">{{ $passport_data -> name}}</div>
                    </div>
                <hr>
                    <div class="row">
                        <div class="col-sm-3">
                            <h6 class="mb-0">Passport Number</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">{{ $passport_data -> passport_number }}</div>
                    </div>
                <hr>
                    <div class="row">
                        <div class="col-sm-3">
                            <h6 class="mb-0">Email</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">{{ $passport_data -> email}}</div>
                    </div>
                <hr>
                    <div class="row">
                        <div class="col-sm-3">
                            <h6 class="mb-0">Phone</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">{{ $passport_data -> phone}}</div>
                    </div>
                <hr>
                    <div class="row">
                        <div class="col-sm-3">
                            <h6 class="mb-0">Address</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">{{ $passport_data -> address}}</div>
                    </div>
                <hr>
                    <div class="row">
                        <div class="col-sm-3">
                            <h6 class="mb-0">Applying Country</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">{{ $passport_data -> applying_country}}</div>
                    </div>
                <hr>
                    <div class="row">
                        <div class="col-sm-3">
                            <h6 class="mb-0">Agent</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">{{ $passport_data -> agent_via}}</div>
                    </div>
                <hr>
                    <div class="row">
                        <div class="col-sm-3">
                            <h6 class="mb-0">Amount</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">{{ $passport_data -> amount}}</div>
                    </div>

                <hr>
                            <div class="row">
                              <div class="col-sm-12">
                                <a class="btn btn-info " target="__blank" href="{{ route('passports.edit',$passport_data -> id) }}">Edit</a>
                              </div>
                            </div>
                          </div>
                        </div>

                        <div class="row gutters-sm">
                          <div class="col-sm-6 mb-3">
                            <div class="card h-100">
                              <div class="card-body">
                                <h6 class="d-flex align-items-center mb-3"><i class="material-icons text-info mr-2">assignment</i>Project Status</h6>
                                <small>Web Design</small>
                                <div class="progress mb-3" style="height: 5px">
                                  <div class="progress-bar bg-primary" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <small>Website Markup</small>
                                <div class="progress mb-3" style="height: 5px">
                                  <div class="progress-bar bg-primary" role="progressbar" style="width: 72%" aria-valuenow="72" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <small>One Page</small>
                                <div class="progress mb-3" style="height: 5px">
                                  <div class="progress-bar bg-primary" role="progressbar" style="width: 89%" aria-valuenow="89" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <small>Mobile Template</small>
                                <div class="progress mb-3" style="height: 5px">
                                  <div class="progress-bar bg-primary" role="progressbar" style="width: 55%" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <small>Backend API</small>
                                <div class="progress mb-3" style="height: 5px">
                                  <div class="progress-bar bg-primary" role="progressbar" style="width: 66%" aria-valuenow="66" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                              </div>
                            </div>
                          </div>

                        </div>

                      </div>

                      </div>
                    </div>

                  </div>

                      <style>
                          /* Basic CSS styling for the progress bar and steps */
                          .progress-container {
                              display: flex;
                              justify-content: space-between;
                              align-items: center;
                          }

                          .step {
                              width: 20px;
                              height: 20px;
                              background-color: #ccc;
                              border-radius: 50%;
                              display: flex;
                              justify-content: center;
                              align-items: center;
                          }

                          .step.active {
                              background-color: #007bff;
                              color: white;
                          }

                          .progress-bar {
                              flex-grow: 1;
                              height: 4px;
                              background-color: #ccc;
                              position: relative;
                          }

                          .progress-bar-fill {
                              height: 100%;
                              background-color: #007bff;
                              transition: width 0.3s ease-in-out;
                          }
                      </style>
                  </head>
                  <body>
                      <div class="progress-container">
                          <div class="step active">1</div>
                          <div class="step">2</div>
                          <div class="step">3</div>
                          <div class="step">4</div>
                          <div class="progress-bar">
                              <div class="progress-bar-fill" style="width: 25%;"></div>
                          </div>
                      </div>

                      <script>
                          // JavaScript to update the progress bar based on the active step
                          const steps = document.querySelectorAll('.step');
                          const progressBarFill = document.querySelector('.progress-bar-fill');

                          steps.forEach((step, index) => {
                              step.addEventListener('click', () => {
                                  // Update the progress bar width
                                  const stepWidth = (index + 1) * (100 / steps.length);
                                  progressBarFill.style.width = `${stepWidth}%`;

                                  // Mark the clicked step as active
                                  steps.forEach((s, i) => {
                                      if (i <= index) {
                                          s.classList.add('active');
                                      } else {
                                          s.classList.remove('active');
                                      }
                                  });
                              });
                          });
                      </script>



            </div>
        </div>
    </div>
</div>
<!-- card End -->

@endsection
