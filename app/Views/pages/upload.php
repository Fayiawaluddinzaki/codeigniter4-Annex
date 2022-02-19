<?= $this->extend('template/blank'); ?>
<?= $this->section('content'); ?>

<div class="page-content-wrapper ">

    <div class="container-fluid">

        <div class="row">
            <div class="col-sm-12">
                <div class="page-title-box">
                    <div class="btn-group float-right">
                        <ol class="breadcrumb hide-phone p-0 m-0">
                            <li class="breadcrumb-item"><a href="#">Annex</a></li>
                            <li class="breadcrumb-item"><a href="#">Forms</a></li>
                            <li class="breadcrumb-item active">Summernote</li>
                        </ol>
                    </div>
                    <h4 class="page-title">Summernote</h4>
                </div>
            </div>
        </div>
        <!-- end page title end breadcrumb -->

        <div class="row">
            <div class="col-12">
                <div class="card m-b-30">
                    <div class="card-body">

                        <h4 class="mt-0 header-title">Examples</h4>
                        <p class="text-muted m-b-30 font-14">Super simple wysiwyg editor on bootstrap</p>

                        <div class="summernote">Hello Summernote</div>

                    </div>
                </div>
            </div> <!-- end col -->
        </div> <!-- end row -->

    </div><!-- container -->

</div> <!-- Page content Wrapper -->


<?= $this->endSection('content'); ?>
<?= $this->section('script'); ?>

        <!--Summernote js-->
        <script src="<?= base_url()?>/template/assets/plugins/summernote/summernote-bs4.min.js"></script>

        <!-- App js -->
        <script src="<?= base_url()?>/template/assets/js/app.js"></script>
        <script>
            jQuery(document).ready(function () {
                $('.summernote').summernote({
                    height: 300, // set editor height
                    minHeight: null, // set minimum height of editor
                    maxHeight: null, // set maximum height of editor
                    focus: true // set focus to editable area after initializing summernote
                });
            });
        </script>
<?= $this->endSection('script'); ?>
