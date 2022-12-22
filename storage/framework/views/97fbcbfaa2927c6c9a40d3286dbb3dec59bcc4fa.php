<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <!-- Bootstrap CSS -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
            crossorigin="anonymous"
        />

        <title>CRUD Laravel!</title>
    </head>
    <body>
        <h1 class="text-center mt-3 mb-4">Data Mahasiswa</h1>

        <div class="container">
            <?php if($message = Session::get('success')): ?>
                    <div class="alert alert-success" role="alert">
                        <?php echo e($message); ?>

                    </div>
                <?php endif; ?>
            <a href="/create" type="button" class="btn btn-success">Tambah +</a>
            <div class="row">
                <table class="table mt-2 table-success table-stripped">
                    <thead>
                        <tr class="text-center">
                            <th scope="col">NIM</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Umur</th>
                            <th scope="col">Alamat</th>
                            <th scope="col">Kota</th>
                            <th scope="col">Kelas</th>
                            <th scope="col">Jurusan</th>
                            <th scope="col">Dibuat</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr class="text-center">
                            <th scope="row"><?php echo e($row->nim); ?></th>
                            <td><?php echo e($row->nama); ?></td>
                            <td><?php echo e($row->umur); ?></td>
                            <td><?php echo e($row->alamat); ?></td>
                            <td><?php echo e($row->kota); ?></td>
                            <td><?php echo e($row->kelas); ?></td>
                            <td><?php echo e($row->jurusan); ?></td>
                            <td><?php echo e($row->created_at->format('d-m-Y')); ?></td>
                            <td>
                                <a href="/edit/<?php echo e($row->nim); ?>" class="btn btn-primary">Edit</a>
                                <a href="/delete/<?php echo e($row->nim); ?>" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin menghapus data ini?')">Hapus</a>
                            </td>
                        </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
            </div>
        </div>

        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
            crossorigin="anonymous"
        ></script>
    </body>
</html>
<?php /**PATH C:\xampp\htdocs\prak_crud\resources\views/read.blade.php ENDPATH**/ ?>