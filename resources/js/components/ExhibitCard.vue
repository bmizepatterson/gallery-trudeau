<template>
<div class="row justify-content-center">
    <div class="col-11 col-md-8 col-lg-6 my-5">
        <div class="card exhibit-image-container">

            <div class="exhibit-image" :style="{ backgroundImage: 'url(' + exhibit.url + ')' }">
                <a :href="exhibit.url" target="_blank" rel="noopener noreferrer"></a>
            </div>

            <div v-if="showHeader" class="card-header">
                <h4 class="m-0"><a :href="showUrl">{{ exhibit.title }}</a></h4>
                <small v-if="exhibit.artist || exhibit.year" class="text-white-50">
                    <template v-if="exhibit.artist">By {{ exhibit.artist }}</template><template v-if="exhibit.artist && exhibit.year">, </template>
                    <template v-if="exhibit.year">{{ exhibit.year }}</template>
                </small>
            </div>

            <div v-if="exhibit.description" class="card-body">
                {{ exhibit.description }}
            </div>

            <div class="card-footer">
                <div v-if="editUrl || deleteUrl" class="float-right text-muted">
                    <a v-if="editUrl" class="m-2" :href="editUrl" data-toggle="tooltip" data-placement="top" title="Edit this exhibit"><i class="fas fa-pen-square"></i></a>
                    <form v-if="deleteUrl" class="d-inline" method="POST" :action="deleteUrl">
                        <input type="hidden" name="_token" :value="csrf">
                        <input type="hidden" name="_method" value="DELETE">
                        <button type="submit" class="btn btn-link py-0" data-toggle="tooltip" data-placement="top" title="Delete this exhibit"><i class="fas fa-trash"></i></button>
                    </form>
                </div>
                <small><i class="fas fa-user-circle mr-1"></i>Posted by {{ user.name }} {{ updatedAt }}</small>
            </div>
        </div>
    </div>
</div>
</template>

<script>
export default {
    props: {
        exhibitJson: { type: String, required: true },
        userJson: { type: String, required: true },
        showUrl: { type: String, required: true },
        editUrl: { type: String, required: true },
        deleteUrl: { type: String, required: true },
        csrf: { type: String, required: true },
    },

    mounted: function() {
        $('[data-toggle="tooltip"]').tooltip();
    },

    computed: {
        exhibit() {
            return JSON.parse(this.exhibitJson);
        },
        user() {
            return JSON.parse(this.userJson);
        },
        updatedAt() {
            return Moment(this.exhibit.updated_at).fromNow();
        },
        showHeader() {
            return (this.exhibit.title || this.exhibit.artist || this.exhibit.year);
        }
    },

    methods: {
        submitDeleteForm: function() {
            this.$refs.deleteForm.submit();
        }
    }
}
</script>
