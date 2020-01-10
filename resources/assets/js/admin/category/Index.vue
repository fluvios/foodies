<template>
    <div class="container">
        <section class="content-header">
            <h1>
                Manage Outlets
            </h1>
            <breadcrumb></breadcrumb>
        </section>

        <section class="content">
            <div class="row">
                <router-view></router-view>
            </div>
        </section>
    </div>
</template>
<script>
    import Breadcrumb from '../../shared/Breadcrumb.vue'
    export default {
        name: 'IndexCategory',
        components: {
            'breadcrumb': Breadcrumb
        }
    }
</script>