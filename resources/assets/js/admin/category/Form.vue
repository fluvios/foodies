<template>
    <div>
        <div class="form-group" :class="{ 'has-error': errors.name }">
            <label for="">Nama Kategori Makanan</label>
            <input type="text" class="form-control" v-model="category.name">
            <p class="text-danger" v-if="errors.name">{{ errors.name[0] }}</p>
        </div>
        <div class="form-group" :class="{ 'has-error': errors.description }">
            <label for="">Alamat</label>
            <textarea cols="5" rows="5" class="form-control" v-model="category.description"></textarea>
            <p class="text-danger" v-if="errors.description">{{ errors.description[0] }}</p>
        </div>
    </div>
</template>

<script>
import { mapState, mapMutations } from 'vuex'
export default {
    name: 'FormCategories',
    computed: {
        ...mapState(['errors']), //MENGAMBIL STATE ERRORS
        ...mapState('category', {
            category: state => state.category //MENGAMBIL STATE OUTLET
        })
    },
    methods: {
        ...mapMutations('category', ['CLEAR_FORM']), //PANGGIL MUTATIONS CLEAR_FORM
    },
    //KETIKA PAGE INI DITINGGALKAN MAKA 
    destroyed() {
        //FORM DI BERSIHKAN
        this.CLEAR_FORM()
    }
}
</script>