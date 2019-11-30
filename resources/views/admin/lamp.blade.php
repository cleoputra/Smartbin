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
                    <button type="submit" class="btn btn-warning pull-right" id="button">New Item</button>

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
                  <th>Name Produk/Kode</th>
                  <th>Status</th>
                  <th>Lantai</th>
                  <th>Ruang</th>
                  <th>Deskripsi</th>
                  
                </tr>
                <tr>
                 @foreach ($lampu as $lampu)
                  <td>{{ $lampu->id }}</td> 
                  <td>{{ $lampu->name_product }}</td>
                  <td>On</td>
                  <td>{{ $lampu->lantai }}</td>
                  <td>{{ $lampu-> ruang }}</td>
                  <td>{{ $lampu-> deskripsi }}</td>
                        <td>
                            <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#modal-danger" @click="changeId({{ $f_recruit->id }})">Delete</button>
                        </td>
                </tr>
                @endforeach
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
                <input type="text" placeholder="Name Produk/Kode">
                <input type="text" placeholder="Lantai">
                <input type="text" placeholder="Ruangan">
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
