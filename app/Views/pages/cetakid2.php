<?= $this->extend('template/blank'); ?>
<?= $this->section('content'); ?>
<div class="container mt-4">
    <div class="col-md">
        <div class="card m-b-30">
            <h4 class="card-header mt-0">Featured</h4>
            <div class="card-body">
                <div class="image">
                    <!-- <img src="<?= base_url(); ?>/template/assets/images/logo.png" alt="" class="rounded-circle"> -->
                    <img src="<?= base_url(); ?>/template/assets/images/bg-account.png" class="img-fluid rounded-circle" alt="">
                </div>
                <h4 class="card-title font-20 mt-0">aisdfiadasd</h4>
                <p class="card-text">With supporting text below as a natural lead-in to
                    additional content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
            <div class="card-footer mt-0">
                <a name="" id="" class="btn btn-primary" href="/print" role="button">Cetak Kartu</a>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection('content'); ?>