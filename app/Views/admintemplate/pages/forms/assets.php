            <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Assets Table</h4>
                  <p class="card-description">
                    Assets IT
                  </p>
                  <div class="table-responsive pt-3">
                    <table class="table table-bordered">
                      <thead>
                        <tr>
                          <th>
                            ID
                          </th>
                          <th>
                            Category
                          </th>
                          <th>
                            FirstName
                          </th>
                          <th>
                            LastName
                          </th>
                         <th>
                            Serial
                          </th>
                          <th>
                            Model
                          </th>
                          <th>
                            Stage
                          </th>
                          <th>
                            Desk
                          </th>
                          <th>
                            Cost
                          </th>
                         <th>
                            Purchased
                          </th>
                          <th>
                            Loaned
                          </th>
                          <th>
                            Condit
                          </th>
                          <th>
                            Expiration
                          </th>
                          <th>
                            Updated_at
                          </th>
                          <th>
                            Action
                          </th>
                          <th>
                            Action
                          </th>
                           <th>
                            Action  
                          </th>
                        </tr>
                      </thead>
                      <tbody>

                      <?php 
                        if((sizeof($category))>0)
                        {
                          foreach($category as $info)
                        {
                          ?>
                        <tr class="table-info">
                          <td><?= $info['ID']; ?></td>
                          <td><?= $info['Category']; ?></td>
                          <td><?= $info['FirstName']; ?></td>
                          <td><?= $info['LastName']; ?></td>
                          <td><?= $info['Serial']; ?></td>
                          <td><?= $info['Model']; ?></td>
                          <td><?= $info['Stage']; ?></td>
                          <td><?= $info['Desk']; ?></td>
                          <td><?= $info['Cost']; ?></td>
                          <td><?= $info['DatePurchased']; ?></td>
                          <td><?= $info['DateLoaned']; ?></td>
                          <td><?= $info['Condit']; ?></td>
                          <td><?= $info['WarrantyExpiration']; ?></td>
                          <td><?= $info['Updated_at']; ?></td>
                          <td>
                            <a href="/asset/UpdateAsset?id=<?= $info['ID'] ?>" class="btn btn-primary btn-sm float-left mr-1" style="height:30px; width:40px;border-radius:50%" data-toggle="tooltip" title="edit" data-placement="bottom"><i class="mdi mdi-table-edit"></i></a>
                            <form method="POST" action="">
                              
                              <a class="btn btn-danger btn-sm dltBtn" style="height:30px; width:40px;border-radius:50%"  href="/asset/DeleteAsset?id=<?= $info['ID'] ?>" title="Delete" ><i class="mdi mdi-delete"></i></a>
                            </form>
                          </td>


                        </tr>
                          <?php
                                }
                            }
                            else
                              { 
                          ?>
                          <tr class="table-info">
                            <td>Data Not Found</td>
                            <td>Data Not Found</td>
                            <td>Data Not Found</td>
                            <td>Data Not Found</td>
                            <td>Data Not Found</td>
                            <td>Data Not Found</td>
                            <td>Data Not Found</td>
                          </tr>
                          <?php } ?>  
                       </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>