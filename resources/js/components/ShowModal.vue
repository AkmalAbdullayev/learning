<template>
    <div>
        <a href="#" class="btn btn-sm btn-outline-primary" data-toggle="modal" data-target=".bd-example-modal-lg" title="Открыть">
            <i class="fa fa-folder-open-o" aria-hidden="true"></i>
        </a>
        <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Преподаватель</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">...</div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">Закрыть</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        props: ['info'],
        mounted() {
            console.log(this.info)
        }
    }
</script>
