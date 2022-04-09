      <div class="main-panel">        
        <div class="content-wrapper">
          <div class="row">     
            <!-- partial -->        
            <div class="col-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">UPDATE GROUP</h4>
                  <p class="card-description">
                  Group
                  </p>
                  <form class="forms-sample" action="/groupe/UpdateGroup?id=<?= $group['ID'] ?>" method="post">

                    <div class="form-group">
                      <label for="exampleInputName1">Titre <code>*</code></label>
                      <input type="text" class="form-control" id="Titre" placeholder="Titre" name="Titre" value="<?= $group['Titre'] ?>">
                    </div>

                    <button type="submit" class="btn btn-primary mr-2">Update</button>
                    <button class="btn btn-light">Cancel</button>
                  </form>
                </div>
              </div>
            </div>
    
