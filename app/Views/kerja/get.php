<?= $this->extend('layouts/default'); ?>

<?= $this->section('title'); ?>
<title>Kerja | Nikahan</title>
<?= $this->endSection(); ?>

<?= $this->section('content'); ?>
<section class="section">
    <div class="section-header">
        <h1>Kerja</h1>
        <div class="section-header-button">
            <a href="<?= site_url('kerja/add'); ?>" class="btn btn-primary">Add kerja</a>
        </div>
    </div>

    <?php if (session()->getFlashdata('success')) : ?>
        <div class="alert alert-success alert-dismissible show fade">
            <div class="alert-body">
                <button class="close" data-dismiss="alert">X</button>
                <b>Succes ! </b>
                <?= session()->getFlashdata('success'); ?>
            </div>
        </div>
    <?php endif; ?>

    <div class="section-body">
        <div class="card">
            <div class="card-header">
                <h4>Data Kerja / Acara</h4>
            </div>
            <div class="card-body p-0">
                <div class="card-body table-responsive">
                    <table class="table table-striped table-md">
                        <thead>
                            <tr>
                                <th>NO</th>
                                <th>Nama Kerjaan</th>
                                <th>Waktu Kerjaan</th>
                                <th>Info Kerjaan</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($query as $key => $row) : ?>
                                <tr>
                                    <td><?= $key + 1; ?></td>
                                    <td><?= $row->nama_kerja; ?></td>
                                    <td><?= date('d/m/y', strtotime($row->date_kerja)); ?></td>
                                    <td><?= $row->info_kerja; ?></td>
                                    <td class="text-center" style="width: 15%;">
                                        <a href="" class="btn btn-warning btn-sm">
                                            <i class="fas fa-pencil-alt"></i>
                                        </a>
                                        <a href="" class="btn btn-danger btn-sm">
                                            <i class="fas fa-trash-alt"></i>
                                        </a>
                                    </td>
                                </tr>
                            <?php endforeach ?>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="card-footer text-right">
                <nav class="d-inline-block">
                    <ul class="pagination mb-0">
                        <li class="page-item disabled">
                            <a class="page-link" href="#" tabindex="-1"><i class="fas fa-chevron-left"></i></a>
                        </li>
                        <li class="page-item active"><a class="page-link" href="#">1 <span class="sr-only">(current)</span></a></li>
                        <li class="page-item">
                            <a class="page-link" href="#">2</a>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item">
                            <a class="page-link" href="#"><i class="fas fa-chevron-right"></i></a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</section>
<?= $this->endSection(); ?>