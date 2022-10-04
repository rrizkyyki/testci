<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>List</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  </head>
  <body>

    <div class="container">
        <div class="card mt-3">
            <div class="card-header">
                <h5>Read Data</h5>
            </div>
            <div class="card-body">
                
                <table class="table table-striped table-bordered">
                    <thead>
                        <tr>
                        <th scope="col">id</th>
                        <th scope="col">nis</th>
                        <th scope="col">nama</th>
                        <th scope="col">alamat</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($students as $s): ?>
                        <tr>
                        <th scope="row"><?= $s->id ?></th>
                        <td><?= $s->nis ?></td>
                        <td><?= $s->nama ?></td>
                        <td><?= $s->alamat ?></td>
                        </tr>
                    <?php endforeach; ?>
                    </tbody>
                </table>

            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>