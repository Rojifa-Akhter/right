<div class="main-panel">
    <div class="content-wrapper">
      <div class="row">
        <div class="mb-4 col-sm-12 mb-xl-0">
          <h4 class="font-weight-bold text-dark">Hi, welcome back!</h4>
          <p class="mb-2 font-weight-normal text-muted">APRIL 1, 2019</p>
        </div>
      </div>
      <div class="mt-3 row">
        <div class="col-xl-3 flex-column d-flex grid-margin stretch-card">
          <div class="flex-grow row">
            <div class="col-sm-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                      <h4 class="card-title">Customers</h4>
                      <p>23% increase in conversion</p>
                      <h4 class="mb-2 text-dark font-weight-bold">43,981</h4>
                      <canvas id="customers"></canvas>
                  </div>
                </div>
            </div>
            <div class="col-sm-12 stretch-card">
                <div class="card">
                  <div class="card-body">
                      <h4 class="card-title">Orders</h4>
                      <p>6% decrease in earnings</p>
                      <h4 class="mb-2 text-dark font-weight-bold">55,543</h4>
                      <canvas id="orders"></canvas>
                  </div>
                </div>
           </div>
          </div>
        </div>
        <div class="col-xl-9 d-flex grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                  <h4 class="card-title">Website Audience Metrics</h4>
                  <div class="row">
                    <div class="col-lg-5">
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit amet cumque cupiditate</p>
                    </div>
                    <div class="col-lg-7">
                      <div class="chart-legends d-lg-block d-none" id="chart-legends"></div>
                    </div>
                  </div>
                  <div class="row">
                      <div class="col-sm-12">
                          <canvas id="web-audience-metrics-satacked" class="mt-3"></canvas>
                      </div>
                  </div>
                    
                </div>
              </div>
        </div>
      </div>
      <div class="row">
          <div class="col-xl-4 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <div class="mb-3 d-flex justify-content-between">
                      <h4 class="card-title">Market Trends</h4>
                      <div class="dropdown">
                          <button class="pt-0 pr-0 btn btn-sm dropdown-toggle text-dark" type="button" id="dropdownMenuSizeButton3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              This week
                          </button>
                          <div class="dropdown-menu" aria-labelledby="dropdownMenuSizeButton3">
                            <h6 class="dropdown-header">This week</h6>
                            <h6 class="dropdown-header">This month</h6>
                          </div>
                        </div>
                  </div>
                  <div id="chart-legends-market-trend" class="mt-1 chart-legends">
                  </div>
                  <div class="mt-2 mb-2 row">
                    <div class="col-6">
                      <div class="text-small"><span class="text-success">18.2%</span> higher </div>
                    </div>
                    <div class="col-6">
                      <div class="text-small"><span class="text-danger">0.7%</span> higher </div>
                    </div>
                  </div>
                  <div class="mt-4 marketTrends">
                    <canvas id="marketTrendssatacked"></canvas>
                  </div>
                    
                </div>
              </div>
          </div>
          <div class="col-xl-4 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <h4 class="card-title">Traffic Sources</h4>
                <div class="row">
                  <div class="col-sm-12">
                      <div class="mt-2 mb-2 d-flex justify-content-between text-dark">
                          <div><span class="font-weight-bold">4453</span> Leads</div>
                          <div>Goal: 2000</div>
                        </div>
                    <div class="mb-2 progress progress-md grouped">
                      <div class="progress-bar bg-danger" role="progressbar" style="width: 30%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                      <div class="progress-bar bg-info" role="progressbar" style="width: 20%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                      <div class="progress-bar bg-primary" role="progressbar" style="width: 10%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                      <div class="progress-bar bg-warning" role="progressbar" style="width: 10%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                      <div class="progress-bar bg-success" role="progressbar" style="width: 5%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                      <div class="progress-bar bg-light" role="progressbar" style="width: 25%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                  </div>
                  <div class="col-sm-12">
                    <div class="traffic-source-legend">
                      <div class="mt-2 mb-1 d-flex justify-content-between">
                        <div class="font-weight-bold">SOURCE</div>
                        <div class="font-weight-bold">TOTAL</div>
                      </div>
                      <div class="d-flex justify-content-between legend-label">
                        <div><span class="bg-danger"></span>Google Search</div>
                        <div>30%</div>
                      </div>
                      <div class="d-flex justify-content-between legend-label">
                        <div><span class="bg-info"></span>Social Media</div>
                        <div>20%</div>
                      </div>
                      <div class="d-flex justify-content-between legend-label">
                        <div><span class="bg-primary"></span>Referrals</div>
                        <div>10%</div>
                      </div>
                      <div class="d-flex justify-content-between legend-label">
                        <div><span class="bg-warning"></span>Organic Traffic</div>
                        <div>10%</div>
                      </div>
                      <div class="d-flex justify-content-between legend-label">
                        <div><span class="bg-success"></span>Google Search</div>
                        <div>5%</div>
                      </div>
                      <div class="d-flex justify-content-between legend-label">
                        <div><span class="bg-light"></span>Email Marketing</div>
                        <div>25%</div>
                      </div>
                    </div>
                    
                  </div>
                </div>  
              </div>
            </div>
          </div>
          <div class="col-xl-4 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <h4 class="mb-3 card-title">Recent Activity</h4>
                <div class="row">
                  <div class="col-sm-12">
                    <div class="text-dark">
                      <div class="pb-3 d-flex border-bottom justify-content-between">
                        <div class="mr-3"><i class="mdi mdi-signal-cellular-outline icon-md"></i></div>
                        <div class="font-weight-bold mr-sm-4">
                          <div>Deposit has updated to Paid</div>
                          <div class="mt-1 text-muted font-weight-normal">32 Minutes Ago</div>
                        </div>
                        <div><h6 class="font-weight-bold text-info ml-sm-2">$325</h6></div>
                      </div>
                      <div class="pt-3 pb-3 d-flex border-bottom justify-content-between">
                        <div class="mr-3"><i class="mdi mdi-signal-cellular-outline icon-md"></i></div>
                        <div class="font-weight-bold mr-sm-4">
                          <div>Your Withdrawal Proceeded</div>
                          <div class="mt-1 text-muted font-weight-normal">45 Minutes Ago</div>
                        </div>
                        <div><h6 class="font-weight-bold text-info ml-sm-2">$4987</h6></div>
                      </div>
                      <div class="pt-3 pb-3 d-flex border-bottom justify-content-between">
                        <div class="mr-3"><i class="mdi mdi-signal-cellular-outline icon-md"></i></div>
                        <div class="font-weight-bold mr-sm-4">
                          <div>Deposit has updated to Paid                              </div>
                          <div class="mt-1 text-muted font-weight-normal">1 Days Ago</div>
                        </div>
                        <div><h6 class="font-weight-bold text-info ml-sm-2">$5391</h6></div>
                      </div>
                      <div class="pt-3 d-flex justify-content-between">
                        <div class="mr-3"><i class="mdi mdi-signal-cellular-outline icon-md"></i></div>
                        <div class="font-weight-bold mr-sm-4">
                          <div>Deposit has updated to Paid</div>
                          <div class="mt-1 text-muted font-weight-normal">3 weeks Ago</div>
                        </div>
                        <div><h6 class="font-weight-bold text-info ml-sm-2">$264</h6></div>
                      </div> 
                    </div>
                  </div>
                </div>  
              </div>
            </div>
          </div>
      </div>
      <div class="row">
        <div class="col-xl-9 grid-margin-lg-0 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
                <h4 class="card-title">Top Sellers</h4>
                <div class="mt-3 table-responsive">
                  <table class="table table-header-bg">
                    <thead>
                      <tr>
                        <th>
                            Country
                        </th>
                        <th>
                            Revenue
                        </th>
                        <th>
                            Vs Last Month
                        </th>
                        <th>
                            Goal Reached
                        </th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>
                          <i class="mr-2 flag-icon flag-icon-us" title="us" id="us"></i> United States 
                        </td>
                        <td>
                          $911,200
                        </td>
                        <td>
                          <div class="text-success"><i class="mr-2 icon-arrow-up"></i>+60%</div>
                        </td>
                        <td>
                          <div class="row">
                            <div class="col-sm-10">
                              <div class="progress">
                                <div class="progress-bar bg-info" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                              </div>
                            </div>
                            <div class="col-sm-2">
                              25%
                            </div>
                          </div>
                        </td>
                        
                      </tr>
                      <tr>
                        <td>
                          <i class="mr-2 flag-icon flag-icon-at" title="us" id="at"></i> Austria
                        </td>
                        <td>
                            $821,600
                        </td>
                        <td>
                          <div class="text-danger"><i class="mr-2 icon-arrow-down"></i>-40%</div>
                        </td>
                        <td>
                          <div class="row">
                            <div class="col-sm-10">
                              <div class="progress">
                                <div class="progress-bar bg-info" role="progressbar" style="width: 50%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                              </div>
                            </div>
                            <div class="col-sm-2">
                              50%
                            </div>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <i class="mr-2 flag-icon flag-icon-fr" title="us" id="fr"></i> France
                        </td>
                        <td>
                            $323,700
                        </td>
                        <td>
                          <div class="text-success"><i class="mr-2 icon-arrow-up"></i>+40%</div>
                        </td>
                        <td>
                          <div class="row">
                            <div class="col-sm-10">
                              <div class="progress">
                                <div class="progress-bar bg-info" role="progressbar" style="width: 10%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                              </div>
                            </div>
                            <div class="col-sm-2">
                              10%
                            </div>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <td class="py-1">
                          <i class="mr-2 flag-icon flag-icon-de" title="us" id="de"></i> Germany
                        </td>
                        <td>
                            $833,205
                        </td>
                        <td>
                          <div class="text-danger"><i class="mr-2 icon-arrow-down"></i>-80%</div>
                        </td>
                        <td>
                          <div class="row">
                            <div class="col-sm-10">
                              <div class="progress">
                                <div class="progress-bar bg-info" role="progressbar" style="width: 70%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                              </div>
                            </div>
                            <div class="col-sm-2">
                              70%
                            </div>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <td class="pb-0">
                          <i class="mr-2 flag-icon flag-icon-ae" title="ae" id="ae"></i> united arab emirates
                        </td>
                        <td class="pb-0">
                            $232,243
                        </td>
                        <td class="pb-0">
                          <div class="text-success"><i class="mr-2 icon-arrow-up"></i>+80%</div>
                        </td>
                        <td class="pb-0">
                          <div class="row">
                            <div class="col-sm-10">
                              <div class="progress">
                                <div class="progress-bar bg-info" role="progressbar" style="width: 60%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                              </div>
                            </div>
                            <div class="col-sm-2">
                              0%
                            </div>
                          </div>
                        </td>
                      </tr>
                      
                    </tbody>
                  </table>
                </div>
            </div>
          </div>
        </div>
        <div class="col-xl-3 grid-margin-lg-0 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
                <h4 class="mb-3 card-title">Overall rating</h4>
                <div class="d-flex">
                  <div>
                      <h4 class="mb-2 mr-2 text-dark font-weight-bold">4.3</h4>
                  </div>
                  <div>
                    <select id="over-all-rating" name="rating" autocomplete="off">
                      <option value="1">1</option>
                      <option value="2">2</option>
                      <option value="3">3</option>
                      <option value="4">4</option>
                      <option value="5">5</option>
                    </select>
                  </div>
                </div>
                <p class="mb-4">Based on 186 reviews</p>
                <div class="row">
                  <div class="pr-0 col-sm-2">
                      <div class="d-flex">
                        <div>
                            <div class="mb-2 mr-2 text-dark font-weight-bold">5</div>
                        </div>
                        <div>
                          <i class="fa fa-star text-warning"></i>
                        </div>
                      </div>
                  </div>
                  <div class="pl-2 col-sm-9">
                      <div class="row">
                        <div class="col-sm-10">
                          <div class="mt-1 progress progress-lg">
                            <div class="progress-bar bg-warning" role="progressbar" style="width: 80%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                        </div>
                        <div class="col-sm-2 p-lg-0">
                          80%
                        </div>
                      </div>
                  </div>
                </div>
                <div class="mt-2 row">
                  <div class="pr-0 col-sm-2">
                      <div class="d-flex">
                        <div>
                            <div class="mb-2 mr-2 text-dark font-weight-bold">4</div>
                        </div>
                        <div>
                          <i class="fa fa-star text-warning"></i>
                        </div>
                      </div>
                  </div>
                  <div class="pl-2 col-sm-9">
                      <div class="row">
                        <div class="col-sm-10">
                          <div class="mt-1 progress progress-lg">
                            <div class="progress-bar bg-warning" role="progressbar" style="width: 45%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                        </div>
                        <div class="col-sm-2 p-lg-0">
                          45%
                        </div>
                      </div>
                  </div>
                </div>
                <div class="mt-2 row">
                  <div class="pr-0 col-sm-2">
                      <div class="d-flex">
                        <div>
                            <div class="mb-2 mr-2 text-dark font-weight-bold">3</div>
                        </div>
                        <div>
                          <i class="fa fa-star text-warning"></i>
                        </div>
                      </div>
                  </div>
                  <div class="pl-2 col-sm-9">
                      <div class="row">
                        <div class="col-sm-10">
                          <div class="mt-1 progress progress-lg">
                            <div class="progress-bar bg-warning" role="progressbar" style="width: 30%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                        </div>
                        <div class="col-sm-2 p-lg-0">
                          30%
                        </div>
                      </div>
                  </div>
                </div>
                <div class="mt-2 row">
                  <div class="pr-0 col-sm-2">
                      <div class="d-flex">
                        <div>
                            <div class="mb-2 mr-2 text-dark font-weight-bold">2</div>
                        </div>
                        <div>
                          <i class="fa fa-star text-warning"></i>
                        </div>
                      </div>
                  </div>
                  <div class="pl-2 col-sm-9">
                      <div class="row">
                        <div class="col-sm-10">
                          <div class="mt-1 progress progress-lg">
                            <div class="progress-bar bg-warning" role="progressbar" style="width: 8%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                        </div>
                        <div class="col-sm-2 p-lg-0">
                          8%
                        </div>
                      </div>
                  </div>
                </div>
                <div class="mt-2 row">
                  <div class="pr-0 col-sm-2">
                      <div class="d-flex">
                        <div>
                            <div class="mb-2 mr-2 text-dark font-weight-bold">5</div>
                        </div>
                        <div>
                          <i class="fa fa-star text-warning"></i>
                        </div>
                      </div>
                  </div>
                  <div class="pl-2 col-sm-9">
                      <div class="row">
                        <div class="col-sm-10">
                          <div class="mt-1 progress progress-lg">
                            <div class="progress-bar bg-warning" role="progressbar" style="width: 1%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                        </div>
                        <div class="col-sm-2 p-lg-0">
                          1%
                        </div>
                      </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-12">
                    <p class="mt-3 mb-2 mb-3 text-dark font-weight-bold">Rating by category</p>
                    <div class="d-flex">
                        <div>
                            <div class="mb-2 mr-2 text-dark font-weight-bold">4.3</div>
                        </div>
                        <div class="mr-2">
                          <i class="fa fa-star text-warning"></i>
                        </div>
                        <div><p>Work/Management</p></div>
                      </div>
                      <div class="d-flex">
                          <div>
                              <div class="mb-2 mr-2 text-dark font-weight-bold">3.5</div>
                          </div>
                          <div class="mr-2">
                            <i class="fa fa-star text-warning"></i>
                          </div>
                          <div><p>Salary/Culture</p></div>
                        </div>
                  </div>
                </div>

            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- content-wrapper ends -->
    <!-- partial:partials/_footer.html -->
   @include('admin.footer')
    <!-- partial -->
  </div>