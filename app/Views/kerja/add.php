<?= $this->extend('layouts/default'); ?>

<?= $this->section('title'); ?>
<title>Add Kerja | Nikahan</title>
<?= $this->endSection(); ?>

<?= $this->section('content'); ?>
<section class="section">
    <div class="section-header">
        <div class="section-header-back">
            <a href="<?= site_url('kerja'); ?>" class="btn"><i class="fas fa-arrow-left"></i></a>
        </div>
        <h1>Add kerjaan</h1>
    </div>

    <div class="section-body">
        <div class="card">
            <div class="card-header">
                <h4>Create data Kerjaan / Acara</h4>
            </div>
            <div class="card-body col-md-6">
                <form action="<?= site_url('kerja'); ?>" method="post" autocomplete="off">

                    <div class="form-group">
                        <label>Nama kerjaan / Acara</label>
                        <input type="text" name="nama_kerja" class="form-control" required autofocus>
                    </div>
                    <div class="form-group">
                        <label>Tanggal kerjaan / Acara</label>
                        <input type="date" name="date_kerja" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Info kerjaan / Acara</label>
                        <textarea name="info_kerja" class="form-control" required style="resize: none;"></textarea>
                    </div>
                    <div>
                        <button type="submit" class="btn btn-success"><i class="fas fa-paper-plane"></i> Save</button>
                        <button type="reset" class="btn btn-secondary">Reset</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</section>
<?= $this->endSection(); ?>