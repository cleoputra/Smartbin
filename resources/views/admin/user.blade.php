<?php echo View::make('includes/adminHeader'); ?>
<div class="content-wrapper" id="dashboard">
  <section class="content">
      <!-- /.row -->
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title"><b>List Lampu Pintar</b></h3>

              <div class="box-tools">
                <div class="input-group input-group-sm" style="width: 150px;">
                    <button type="submit" class="btn btn-warning pull-right">New Item</button>

                  <div class="input-group-btn">
                  </div>
                </div>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
              <table class="table table-hover">
                <tr>
                  <th>ID</th>
                  <th>Name</th>
                  <th>Status</th>
                  <th>Created at</th>
                  
                </tr>
                <tr>
                  <td>183</td>
                  <td>John Doe</td>
                  <td>11-7-2014</td>
                  <td><span class="label label-success">Approved</span></td>
                   <td><button type="submit" class="label btn-warning" id="button">Edit</button></td>
                   <td><button type="submit" class="label btn-danger ">Delete</button></td>
                </tr>
                
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>

     <!-- pop up form -->
        <div class="bg-modal">
          <div class="modal-content">

            <div class="close">+</div>
            <img src="https://www.richardmiddleton.me/comic-100.png">
              <form action="">
                <input type="text" placeholder="Nama">
                <input type="text" placeholder="Status">
                <a href="" class="button">Submit</a>
              </form>  
         </div>
        </div>

      </div>
    </section>
</div>


<script src="https://cdn.jsdelivr.net/npm/vue"></script>

<script>
  var app = new Vue({
    el: '#dashboard',
    data: {
      id: 0,
    },
    computed: {
      urlToDelete() {
        return '{{ url('') }}/delete/' + this.id  
      },
    },
    methods: {
      changeId(id) {
        this.id = id
      },
    },
  })
</script>

<?php echo View::make('includes/adminFooter'); ?>
