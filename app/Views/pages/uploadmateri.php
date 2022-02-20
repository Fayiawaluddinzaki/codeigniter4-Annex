<?= $this->extend('template/blank'); ?>
<?= $this->section('content'); ?>
<div class="row mt-3">
    <div class="col-xl-6">
        <div class="card m-b-30">
            <div class="card-body">
                <h4 class="mt-0 header-title">File Upload 3</h4>
                <p class="text-muted m-b-30 font-14">You can set the height</p>
                <input type="file" id="input-file-now-custom-2" class="dropify" data-height="500" />
            </div>
        </div>
    </div>
    <div class="col-xl-6">
        <form action="/uploadmateri" method="POST">
            <div class="card m-b-30">
                <div class="card-body">
                    <h4 class="mt-0 header-title">File Upload 4</h4>
                    <p class="text-muted m-b-30 font-14">You can combine options</p>
                    <input type="file" name="materi" id="input-file-now-custom-3" class="dropify" data-height="500"
                        data-default-file="<?= base_url()?>/template/assets/plugins/dropify/images/test-image-2.jpg" />
                </div>
                <div class="card-footer">
                    <a href="#" class="btn btn-primary" id="materiupload">Upload</a>
                </div>
            </div>
        </form>
    </div>
</div>
<?= $this->endSection('content'); ?>

<?= $this->section('script'); ?>

<script src="<?= base_url()?>/template/assets/js/app.js"></script>
<script>
    $(document).ready(function () {
        // Basic
        $('.dropify').dropify();

        // Translated
        $('.dropify-fr').dropify({
            messages: {
                default: 'Glissez-déposez un fichier ici ou cliquez',
                replace: 'Glissez-déposez un fichier ou cliquez pour remplacer',
                remove: 'Supprimer',
                error: 'Désolé, le fichier trop volumineux'
            }
        });

        // Used events
        var drEvent = $('#input-file-events').dropify();

        drEvent.on('dropify.beforeClear', function (event, element) {
            return confirm("Do you really want to delete \"" + element.file.name + "\" ?");
        });

        drEvent.on('dropify.afterClear', function (event, element) {
            alert('File deleted');
        });

        drEvent.on('dropify.errors', function (event, element) {
            console.log('Has Errors');
        });

        var drDestroy = $('#input-file-to-destroy').dropify();
        drDestroy = drDestroy.data('dropify')
        $('#toggleDropify').on('click', function (e) {
            e.preventDefault();
            if (drDestroy.isDropified()) {
                drDestroy.destroy();
            } else {
                drDestroy.init();
            }
        })
    });
</script>
<?= $this->endSection('script'); ?>