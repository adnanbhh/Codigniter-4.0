      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-lg-12 stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Group</h4>
                  <p class="card-description">
                    List Group
                  </p>
                  <div class="table-responsive pt-3">
                    <table class="table table-bordered">
                      <thead>
                        <tr>
                        <th>
                          ID
                        </th>
                        <?php 
                        if((sizeof($title))>0) :
                          foreach($title as $info)
                          { ?>
                              <th>
                                <?= substr($info['Name'],1,-1) ?>
                        
                              </th>
                          <?php
                           } endif?>
                          <th>
                            action
                          </th>
                        </tr>
                      </thead>
                      <tbody>
                      
                      <tr class="table-info">
                      <?php 
                        if((sizeof($fafa))>0) :
                          foreach($fafa as $info)
                          { ?>
                            <td><?= $info['ID'] ?></td>
                            <?php 
                            foreach ($title as $key) {
                            ?>
                                <td><?= $info[substr($key['Name'],1,-1)]; ?></td>
                          <?php
                           } ?> 

<td>
                                  <a href="/groupe/UpdateGroup?id=<?= $info['ID'] ?>" class="btn btn-primary btn-sm float-left mr-1" style="height:30px; width:40px;border-radius:50%" data-toggle="tooltip" title="edit" data-placement="bottom"><i class="mdi mdi-table-edit"></i>
                                  </a>
                                  
                                  <form method="POST" action="">
                                      <a class="btn btn-danger btn-sm dltBtn" style="height:30px; width:40px;border-radius:50%"  href="/groupe/DeleteGroup?id=<?= $info['ID'] ?>" title="Delete" ><i class="mdi mdi-delete"></i>
                                      </a>
                                  </form>
                                </td>
                         </tr>
                           <?php } endif?>
                       

                             
                        
                      </tbody>
</table></div></div></div></div></div></div></div></div>
