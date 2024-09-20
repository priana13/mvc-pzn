      <h1>Homepage</h1>

      <h4>Nama: <?= $data['nama'] ?></h4>

      <h3>Skills: </h3>

      <ul>
            <?php foreach ($data['skills'] as $key => $skill) { ?>

                  <li><?= $skill['name'] ?></li>

            <?php } ?>
      </ul>

