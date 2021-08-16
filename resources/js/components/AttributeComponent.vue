<template>
    <div>
        <div class="input-group input-group-sm mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="inputGroup-sizing-sm">دسته محصول :</span>
            </div>
            <select class="selectpicker" name="category_id[]" multiple>
                <option v-for="category in categories" :value="category.id">{{ category.name }}</option>
            </select>
        </div>

        <div class="input-group input-group-sm mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="brands">برند :</span>
            </div>
            <select class="selectpicker" name="brand_id[]" multiple>
                <option v-for="brand in brands" :value="brand.id">{{ brand.title }}</option>
            </select>
        </div>
    </div>

</template>

<script>
export default {
    name: "AttributeComponent",
    props:['brands'],
    data() {
        return {
            categories: []
        }
    },
    mounted() {
        axios.get('/api/categories').then(
                res => {
                    this.getAllChildren(res.data.categories , 0)
            }).catch(
                err =>{
                    console.log(err)
            })
    },
    methods:{
    getAllChildren(currentValue , level){
        for (let i = 0 ; i < currentValue.length ; i++){
            let current = currentValue[i]
            this.categories.push({
                id: current.id,
                name: Array(level+1).join(' -- ') + ' ' + current.name
            })
            if (current.sub_category && current.sub_category.length > 0){
                this.getAllChildren(current.sub_category , level + 1)
            }
        }

        }
    }
}
</script>

<style scoped>

</style>
