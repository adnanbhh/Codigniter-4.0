      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-lg-12 stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Admins</h4>
                  <p class="card-description">
                    List Admins
                  </p>
                  <div class="table-responsive pt-3">
                    <table class="table table-bordered">
                      <thead>
                        <tr>
                          <th>
                            ID
                          </th>
                          <th>
                            First Name
                          </th>
                          <th>
                            Last Name
                          </th>
                          <th>
                            Email
                          </th>
                          <th>
                            Create_at
                          </th>
                          <th>
                            Update_at
                          </th>
                        </tr>
                      </thead>
                      <tbody>

                      <?php 
                        if((sizeof($admin))>0) :
                          foreach($admin as $info)
                          { ?>
                              <tr class="table-info">
                                <td><?= $info['ID']; ?></td>
                                <td><?= $info['FirstName']; ?></td>
                                <td><?= $info['LastName']; ?></td>
                                <td><?= $info['Email']; ?></td>
                                <td><?= $info['Create_at']; ?></td>
                                <td><?= $info['Update_at']; ?></td>
                                
                              <?php if($info['FirstName']==session()->get('FirstName')) :
                                     ?>
                                      <td>u can't</td>
                              <?php
                                    else:
                                       ?>
                                        <td>
                                        <a href="/admin/UpdateAdmin?id=<?= $info['ID'] ?>" class="btn btn-primary btn-sm float-left mr-1" style="height:30px; width:40px;border-radius:50%" data-toggle="tooltip" title="edit" data-placement="bottom"><i class="mdi mdi-table-edit"></i></a>
                                        <form method="POST" action="">
                                          <a class="btn btn-danger btn-sm dltBtn" style="height:30px; width:40px;border-radius:50%"  href="/admin/DeleteAdmin?id=<?= $info['ID'] ?>" title="Delete" ><i class="mdi mdi-delete"></i></a>
                                        </form>
                                      </td>
                                  <?php endif ?>

                              </tr>
                          <?php
                           } endif?>
                             
                        
                      </tbody>
</table></div></div></div></div></div></div></div></div>
