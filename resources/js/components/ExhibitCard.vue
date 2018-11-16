<template>
<div class="row justify-content-center">
    <div class="col-md-8 mb-5">
        <div class="card exhibit-image-container">

            <div class="exhibit-image" :style="{ backgroundImage: 'url(' + imageUrl + ')' }">
                <a :href="imageUrl" target="_blank" rel="noopener noreferrer"></a>
            </div>

            <h4 class="card-header m-0"><a :href="exhibitUrl"><slot name="title"></slot></a></h4>

            <div class="card-body"><slot name="body"></slot></div>

            <div class="card-footer">
                <div v-if="editUrl || deleteUrl" class="float-right pt-1 text-muted">
                    <a v-if="editUrl" class="m-2" :href="editUrl" data-toggle="tooltip" data-placement="top" title="Edit this exhibit"><i class="fas fa-pen-square"></i></a>
                    <form v-if="deleteUrl" class="d-none" method="POST" :action="deleteUrl">
                        <input type="hidden" name="_token" :value="csrf">
                        <input type="hidden" name="_method" value="DELETE">
                        <button type="submit" class="btn btn-link" data-toggle="tooltip" data-placement="top" title="Delete this exhibit"><i class="fas fa-trash"></i></button>
                    </form>
                </div>
                <small><i class="fas fa-user-circle mr-1"></i>posted <template v-if="user">by {{ user }}</template> {{ updatedAt }}</small>
            </div>
        </div>
    </div>
</div>
</template>

<script>
export default {
    props: {
        user: String,
        exhibitUrl: String,
        editUrl: String,
        deleteUrl: String,
        updatedAtString: String,
        imageUrl: String,
        csrf: String
    },

    mounted: function() {
        $('[data-toggle="tooltip"]').tooltip();
    },

    computed: {
        updatedAt: function() {
            return Moment(this.updatedAtString).fromNow();
        }
    },

    methods: {
        submitDeleteForm: function() {
            this.$refs.deleteForm.submit();
        }
    }
}
</script>

<style>
.exhibit-image {
    background-size: cover;
    background-position: center;
    width: 100%;
    height: 50vw;
}
.exhibit-image > a {
    width: 100%;
    height: 100%;
    display: inline-block;
}
.exhibit-image-container {
    overflow: hidden;
}
</style>
