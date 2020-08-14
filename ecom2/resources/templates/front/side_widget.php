      <!-- Sidebar Widgets Column -->

<style>
.fixed {position: fixed !important; top: 78px; left: 1300px; bottom: 0px;}

</style>

      <div class="col-md-3 fixed">

        <!-- Search Widget -->
        <div class="card my-4">
          <h5 class="card-header">Search</h5>
          <div class="card-body">
            <div class="input-group">
              <input type="text" class="form-control" placeholder="Search for...">
              <span class="input-group-append">
                <button class="btn btn-secondary" type="button">Go!</button>
              </span>
            </div>
          </div>
        </div>

        <!-- Categories Widget -->
        <div class="card my-4">
          <h5 class="card-header">Categories</h5>
          <div class="card-body">
            <div class="row">
              <div class="col-lg-6">
                <ul class="list-unstyled mb-0">
                    <?php get_categories(); ?>
                </ul>
              </div>
              <div class="col-lg-6">
                
                
              </div>
            </div>
          </div>
        </div>

        <!-- Side Widget -->
        <div class="card my-4">
          <h5 class="card-header">Side Widget</h5>
          <div class="card-body">
            Free same day and 1 day shipping guaranteed by your local sellers!
          </div>
        </div>

      </div>

    
    <!-- /.row -->

  </div>



