      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-md-12 grid-margin">
              <div class="row">
                <div class="col-12 col-xl-8 mb-4 mb-xl-0">
                  <h3 class="font-weight-bold">Welcome <?= session()->get('FirstName') ?></h3>
                  <h6 class="font-weight-normal mb-0">All systems are running smoothly!</h6>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6 grid-margin stretch-card">
              <div class="card tale-bg">
                <div class="card-people mt-auto">
                  <img src="/images/dashboard/people.png" alt="people">
                  <div class="weather-info">
                    
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6 grid-margin transparent">
              <div class="row">
                <div class="col-md-6 mb-4 stretch-card transparent">
                  <div class="card card-tale">
                    <div class="card-body">
                      <p class="mb-4">Number Of Users</p>
                      <p class="fs-30 mb-2">

                        <?php 
                        $i=0;
                        if((sizeof($user))>0)
                        {
                          $i=1;
                          foreach($user as $info)
                          { 
                            $i++;
                          }
                        }
                        echo $i;
                        ?>
                        

                      </p>
                      <p></p>
                    </div>
                  </div>
                </div>
                 <div class="col-md-6 mb-4 stretch-card transparent">
                  <div class="card card-tale">
                    <div class="card-body">
                      <p class="mb-4">Number Of Assets</p>
                      <p class="fs-30 mb-2">

                        <?php 

                        if((sizeof($asset))>0)
                          { $j=1;
                          foreach($asset as $info)
                          { 
                            $j++;
                          }
                        }
                        else
                        {
                          $j=0;
                        }
                        echo $j;
                        ?>
                        

                      </p>
                      <p></p>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 mb-4 stretch-card transparent">
                  <div class="card card-dark-blue">
                    <div class="card-body">
                      <p class="mb-4">Number of Categories</p>
                      <p class="fs-30 mb-2">

                      <?php 
                        if((sizeof($category))>0)
                          { $k=1;
                          foreach($category as $info)
                          { 
                            $k++;
                          }
                        }
                        echo $k;
                      ?>

                      </p>
                      <p></p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-4 stretch-card grid-margin">
              <div class="card">
                <div class="card-body">
                  <p class="card-title mb-0">Categories</p>
                  <div class="table-responsive">
                    <table class="table table-borderless">
                      <thead>
                        <tr>
                          <th class="pl-0  pb-2 border-bottom">Name</th>
                          <th class="border-bottom pb-2">Statut</th>
                          <th class="border-bottom pb-2">isParent</th>
                        </tr>
                      </thead>
                      <tbody>

                      <?php 
                        if((sizeof($category))>0):
                          foreach($category as $info)
                          { 
                            ?>
                        <tr>
                          <td class="pl-0"><?= $info['Title']?></td>
                          <td><p class="mb-0"><?= $info['Statut']?></p></td>
                          <td class="text-muted"><?= $info['isParent']?></td>
                        </tr>
                            
                      <?php } 
                        else:   ?>
                        }
                        <tr>
                          <td class="pl-0">Kentucky</td>
                          <td><p class="mb-0"><span class="font-weight-bold mr-2">65</span>(2.15%)</p></td>
                          <td class="text-muted">65</td>
                        </tr>
                      <?php endif?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      </div>