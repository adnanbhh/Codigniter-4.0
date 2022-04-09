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
                          <th>
                            Groupe
                          </th>
                        </tr>
                      </thead>
                      <tbody>

                      <?php 
                        if((sizeof($group))>0) :
                          foreach($group as $info)
                          { ?>
                              <tr class="table-info">
                                <td><a href="/mAffiche?id=<?= $info['ID'] ?>"><?= $info['ID']; ?></a></td>
                                <td><a href="/mAffiche?id=<?= $info['ID'] ?>"><?= $info['Titre']; ?></a></td>
                              </tr>
                          <?php
                           } endif?>
                             
                        
                      </tbody>
</table></div></div></div></div></div></div></div></div>
