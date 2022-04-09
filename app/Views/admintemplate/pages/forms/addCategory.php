      <div class="main-panel">        
        <div class="content-wrapper">
          <div class="row">     
            <!-- partial -->        
            <div class="col-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Category</h4>
                  <p class="card-description">
                  Add Category
                  </p>
                  <form class="forms-sample" action="/addCategory" method="post">
                    <div class="form-group">
                      <label for="exampleInputName1">Title <code>*</code></label>
                      <input type="text" class="form-control" id="Title" placeholder="Title" name="Title" value="<?= set_value('Title')?>">
                    </div>

                    <div class="form-check">
                        <label for="is_parent">Is Parent ?</label><br>
                            <input type="checkbox" id="myCheck" name="myCheck" value="Yes" onclick="myFunction()"  checked> Yes
                    </div>


                    <div class="form-group" id="text" style="display:none">
                        <label for="parent_id">Parent Category</label>
                          <select class="form-control" name="parent_id" value="<?= set_value('parent_id')?>">
                            <option>none</option>
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
                      <label for="exampleTextarea1">Summary</label>
                      <textarea class="form-control" id="exampleTextarea1" name="Summary" value="<?= set_value('Summary')?>" rows="4"></textarea>
                    </div>

                    <div class="form-group">
                      <label for="exampleSelectGender">Statut <code>*</code></label>
                        <select class="form-control" id="exampleSelectGender" name="Statut" value="<?= set_value('Statut')?>">
                          <option>Active</option>
                          <option>Desable</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary mr-2">Submit</button>
                    <button class="btn btn-light">Cancel</button>
                  </form>
                </div>
              </div>
            </div>
    
<!-- 
                            <div class="form-group">
          <label for="is_parent">Is Parent</label><br>
          <input type="checkbox" name='is_parent' id='is_parent' value='1' checked> Yes                        
        </div>
     

        <div class="form-group d-none" id='parent_cat_div'>
          <label for="parent_id">Parent Category</label>
          <select name="parent_id" class="form-control">
                          <option>Active</option>
                          <option>Desable</option>
          </select>
        </div>      -->

<!-- <p id="text" style="display:none">Checkbox is CHECKED!</p> -->

<!--                     <div class="form-check">
                      <label for="is_parent">Is Parent</label><br>
                      <input type="checkbox" name='is_parent' id='is_parent' value='1' checked> Yes  
                    </div>
 -->
<!--                     <div class="form-group d-none" id='parent_cat_div'>
                      <label for="parent_id">Parent Category</label>
                        <select class="form-control" name="parent_id">
                          <option>wait</option>
                          <option>xait</option>
                        </select>
                    </div>
 -->

<!-- <script>
  (function( $ ){

  $.fn.filemanager = function(type, options) {
    type = type || 'file';

    this.on('click', function(e) {
      var route_prefix = (options && options.prefix) ? options.prefix : '/filemanager';
      var target_input = $('#' + $(this).data('input'));
      var target_preview = $('#' + $(this).data('preview'));
      window.open(route_prefix + '?type=' + type, 'FileManager', 'width=900,height=600');
      window.SetUrl = function (items) {
        var file_path = items.map(function (item) {
          return item.url;
        }).join(',');

        // set the value of the desired input to image url
        target_input.val('').val(file_path).trigger('change');

        // clear previous preview
        target_preview.html('');

        // set or change the preview image src
        items.forEach(function (item) {
          target_preview.append(
            $('<img>').css('height', '5rem').attr('src', item.thumb_url)
          );
        });

        // trigger change event
        target_preview.trigger('change');
      };
      return false;
    });
  }

})(jQuery);
</script>
<script>
  $('#is_parent').change(function(){
    var is_checked=$('#is_parent').prop('checked');
    // alert(is_checked);
    if(is_checked){
      $('#parent_cat_div').addClass('d-none');
      $('#parent_cat_div').val('');
    }
    else{
      $('#parent_cat_div').removeClass('d-none');
    }
  })
</script> -->

<script>
  function myFunction() {
  // Get the checkbox
  var checkBox = document.getElementById("myCheck");
  // Get the output text
  var text = document.getElementById("text");

  // If the checkbox is checked, display the output text
  if (checkBox.checked == false){
    text.style.display = "block";
  } else {
    text.style.display = "none";
  }
} 
</script>