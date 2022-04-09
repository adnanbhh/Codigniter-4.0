      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-lg-12 stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Categories</h4>
                  <p class="card-description">
                    List Category
                  </p>
                  <div class="table-responsive pt-3">
                    <table class="table table-bordered">
                      <thead>
                        <tr>
                          <th>
                            #
                          </th>
                          <th>
                            Title
                          </th>
                          <th>
                            is Parent
                          </th>
                          <th>
                            Parent Category
                          </th>
                          <th>
                            Slug
                          </th>
                          <th>
                            Statut
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
                          <td><?= $info['Title']; ?></td>
                          <td><?= $info['isParent']; ?></td>
                          <td><?= $info['ParentCategory']; ?></td>
                          <td><?= $info['Summary']; ?></td>
                          <td><?= $info['Statut']; ?></td>
                          <td>
                            <a href="/category/UpdateCategory?id=<?= $info['ID'] ?>" class="btn btn-primary btn-sm float-left mr-1" style="height:30px; width:40px;border-radius:50%" data-toggle="tooltip" title="edit" data-placement="bottom"><i class="mdi mdi-table-edit"></i></a>
                            <form method="POST" action="">
                              <?php $ID = $info['ID']; ?>
                              <a class="btn btn-danger btn-sm dltBtn" style="height:30px; width:40px;border-radius:50%"  href="/category/DeleteCategory?id=<?= $info['ID'] ?>" title="Delete" ><i class="mdi mdi-delete"></i></a>
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
        </div>