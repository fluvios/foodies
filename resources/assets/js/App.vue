<template>
    <div class="wrapper">
        <app-header v-if="isAuth" />

        <div class="content-wrapper">
            <router-view></router-view>
        </div>
        <app-footer v-if="isAuth" />
    </div>
</template>
<script>
    import { mapState, mapGetters } from 'vuex'
    import Header from './shared/Header.vue'
    import Footer from './shared/Footer.vue'
    export default {
        computed: {
            ...mapState(['token']),
            ...mapGetters(['isAuth'])
        },
        components: {
            'app-header': Header,
            'app-footer': Footer
        }
    }
</script>