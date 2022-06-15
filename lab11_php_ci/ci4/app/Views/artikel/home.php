<?= $this->include('template/_header.php'); ?>

<h2 class="display-4" style="font-size: 36px">Artikel</h2>

<?php if ($artikels) : foreach ($artikels as $artikel) : ?>
        <div class="card mb-3">
            <div class="card-header">
                <h4><a href="<?= base_url('artikel/') . $artikel['slug'] ?>"><?= $artikel['judul'] ?></a></h4>
            </div>

            <div class="card-body">
                <p><?= substr($artikel['isi'], 0, 200) ?></p>
            </div>
        </div>
    <?php endforeach;
else : ?>
<div class="card">
    <div class="card-body">Belum ada data</div>
</div>
<?php endif; ?>

<?= $this->include('template/_footer.php'); ?>