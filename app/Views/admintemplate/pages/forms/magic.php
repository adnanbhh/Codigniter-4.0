      <div class="main-panel">        
        <div class="content-wrapper">
          <div class="row">     
            <!-- partial -->        
            <div class="col-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">ADD ASSET</h4>
                  <p class="card-description">
                  IT ASSET FORM
                  </p>
                  <?php $id = $_GET['id']; ?>
                  <form class="forms-sample" action="/magic?id=<?= $id; ?>" method="post">

                    <div style="visibility: hidden">
                      <input type="text" class="form-control" name="ID" value="<?= set_value($_GET['id'])?>">

                    </div>
                          <?php 
                            if((sizeof($title))>0)
                            {
                                foreach($title as $info)
                                {
                          ?>
                    <div class="form-group">
                      <label for="exampleInputName1"><?= substr($info['Name'],1,-1); ?><code>*</code></label>
                      <input type="text" class="form-control" id="<?= substr($info['Name'],1,-1); ?>" placeholder="<?= substr($info['Name'],1,-1); ?>" name="<?= substr($info['Name'],1,-1);; ?>" value="<?= set_value(substr($info['Name'],1,-1));?>">
                    </div>
                          <?php
                                }
                            }
                            else
                              { 
                          ?>
                                <div class="form-group">
                                  <label for="exampleInputName1"><code>*</code></label>
                                  NONE  
                                </div>
                          <?php } ?>

                    <button type="submit" class="btn btn-primary mr-2">Submit</button>
                    <button class="btn btn-light">Cancel</button>
                  </form>
                </div>
              </div>
            </div>
    
