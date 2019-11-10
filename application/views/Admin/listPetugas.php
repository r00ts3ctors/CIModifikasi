<div class="card">
  <div class="card-body">

    <div class="row">
      <div class="col-12">
        <div class="table-responsive">
          <table id="order-listing" class="table">
            <thead>
              <tr>
                  <th>#</th>
                  <th>Nama Lengkap</th>
                  <th>Email</th>
                  <th>Telepon</th>
                  <th>Kota</th>
                  <th>Lembaga</th>
                  <th>Actions</th>
              </tr>
            </thead>
            <tbody>
              <?php $no=1;foreach ($listsome as $key): ?>
                <tr>
                  <td><?php echo $no++; ?></td>
                  <td><?php echo $key['nama'] ?></td>
                  <td><?php echo $key['email'] ?></td>
                  <td><?php echo $key['telepon'] ?></td>
                  <td><?php echo $key['kota'] ?></td>
                  <td><?php echo $key['lembaga'] ?></td>
                  <td>
                    <button class="btn btn-outline-primary">View</button>
                  </td>
              </tr>

              <?php endforeach; ?>


            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>
