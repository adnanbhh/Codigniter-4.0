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
                  <form class="forms-sample" action="/addAssets" method="post">

                     <div class="form-group" id="text">
                        <label for="Category">Asset Category</label>
                          <select class="form-control" name="Category" value="<?= set_value('Category')?>" >
                          <?php 
                            if((sizeof($category))>0)
                            {
                                foreach($category as $info)
                                {
                          ?>
                            <option><?= $info['Title']; ?></option>
                          <?php
                                }
                            }
                            else
                              { 
                          ?>
                            <option>Data Not Found</option>
                          <?php } ?>
                          </select>
                    </div>

                    <div class="form-group">
                      <label for="exampleInputName1">Asset Owner Name <code>*</code></label>
                      <input type="text" class="form-control" id="FirstName" placeholder="FirstName" name="FirstName" value="<?= set_value('FirstName')?>">
                       </br>
                      <input type="text" class="form-control" id="LastName" placeholder="LastName" name="LastName" value="<?= set_value('LastName')?>">
                    </div>

                    <div class="form-group">
                      <label for="Description">Asset Description</label>
                      <textarea class="form-control" id="Description" name="Description" value="<?= set_value('Description')?>" rows="4"></textarea>
                    </div>

                    <div class="form-group">
                      <label for="Serial">Serial # <code>*</code></label>
                      <input type="text" class="form-control" id="Serial" placeholder="Serial" name="Serial" value="<?= set_value('Serial')?>">
                    </div>

                    <div class="form-group">
                      <label for="Model">Model # <code>*</code></label>
                      <input type="text" class="form-control" id="Model" placeholder="Model" name="Model" value="<?= set_value('Model')?>">
                    </div>

                    <div class="form-group">
                      <label for="Stage">Stage</label>
                        <select class="form-control" id="Stage" name="Stage" value="<?= set_value('Stage')?>">
                          <option>0</option>
                          <option>1</option>
                        </select>
                    </div>

                    <div class="form-group">
                      <label for="Desk">Desk N°</label>
                      <input type="text" class="form-control" id="Desk" placeholder="Desk" name="Desk" value="<?= set_value('Desk')?>">
                    </div>

                    <div class="form-group">
                      <label for="Cost">Asset Cost <code>-MAD-</code></label>
                      <input type="text" class="form-control" id="Cost" placeholder="Cost" name="Cost" value="<?= set_value('Cost')?>">
                    </div>

                    <div class="form-group">
                      <label for="DatePurchased">Date Purchased</label>
                      <input type="date" class="form-control" id="DatePurchased" placeholder="dd/mm/yyyy" name="DatePurchased" value="<?= set_value('DatePurchased')?>">
                    </div>

                    <div class="form-group">
                      <label for="DateLoaned">Date Loaned</label>
                      <input type="date" class="form-control" id="DateLoaned" placeholder="dd/mm/yyyy" name="DateLoaned" value="<?= set_value('DateLoaned')?>">
                    </div>

                    <div class="form-group">
                      <label for="Condit">Condition</label>
                      <textarea class="form-control" id="Condit" name="Condit" value="<?= set_value('Condit')?>" rows="4"></textarea>
                    </div>                 

                    <div class="form-group">
                      <label for="WarrantyExpiration">Warranty Expiration</label>
                      <input type="date" class="form-control" id="WarrantyExpiration" placeholder="dd/mm/yyyy" name="WarrantyExpiration" value="<?= set_value('WarrantyExpiration')?>">
                    </div>   

                    <button type="submit" class="btn btn-primary mr-2">Submit</button>
                    <button class="btn btn-light">Cancel</button>
                  </form>
                </div>
              </div>
            </div>
    
