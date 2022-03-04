<?= $this->extend('template/blank'); ?>
<?= $this->section('content'); ?>

<?= chat('my-first-chat') ?>

<?= $this->endSection('content'); ?>

<?= $this->section('script'); ?>
<script src="<?= base_url()?>/vendor/bootstrap/bootstrap.min.css"></script>
<script src="<?= base_url()?>/vendor/bootstrap/bootstrap.bundle.min.js"></script>
<script src="<?= base_url()?>/vendor/chat/chat.css"></script>
<script src="<?= base_url()?>/vendor/chat/chat.js"></script>
<?= $this->endSection('script'); ?>