<template>
    <div>
        <div class="input-group input-group-sm mb-3">
            <div class="input-group-prepend">
                <span id="inputGroup-sizing-sm" class="input-group-text">دسته محصول :</span>
            </div>
            <select v-model="categories_selected" class="custom-select" multiple name="categories[]"
                    @change="onChange($event , null)">
                <option v-for="category in categories" :value="category.id">{{ category.name }}</option>
            </select>
        </div>

        <div v-if="flag">
            <div v-for="(attribute , index) in attributes" class="input-group input-group-sm mb-3">
                <div class="input-group-prepend">
                    <span id="brands" class="input-group-text">ویژگی {{ attribute.title }}:</span>
                </div>
                <select class="custom-select" @change="addAttributes($event , index)">
                    <option>ویژگی را انتخاب کنید...</option>
                    <option v-if="!product" v-for="attribute_value in attribute.attribute_values" :value="attribute_value.id">{{ attribute_value.title }}</option>
                    <option v-if="product" v-for="attribute_value in attribute.attribute_values" :value="attribute_value.id"
                        :selected="product.attribute_values[index].id == attribute_value.id">
                        {{ attribute_value.title }}</option>
                </select>
            </div>
            <input :value="computedAttributes" name="attributes[]" type="hidden">
        </div>


        <div class="input-group input-group-sm mb-3">
            <div class="input-group-prepend">
                <span id="brands" class="input-group-text">برند :</span>
            </div>
            <select class="custom-select" name="brand_id" style="font-family:'Segoe UI'">
                <option v-if="!product" v-for="brand in brands" :value="brand.id">{{ brand.title }}</option>
                <option v-if="product" v-for="brand in brands" :value="brand.id" :selected="product.brand.id == brand.id">{{ brand.title }}</option>
            </select>
        </div>
    </div>

</template>

<script>
export default {
    name: "AttributeComponent",
    props: [
        'product',
        'brands'
    ],
    data() {
        return {
            categories: [],
            categories_selected: [],
            flag: false,
            attributes: [],
            selected_attributes: [],
            computedAttributes: []
        }
    },
    mounted() {
        axios.get('/api/categories').then(
            res => {
                this.getAllChildren(res.data.categories, 0)
            }).catch(
            err => {
                console.log(err)
            })
        if (this.product){
            for (let i = 0 ; i < this.product.categories.length ; i++)
            {
                this.categories_selected.push(this.product.categories[i].id)
            }
            for (let i = 0 ; i < this.product.attribute_values.length ; i++)
            {
                this.selected_attributes.push({
                    'index' : i ,
                    'value' : this.product.attribute_values[i].id
                })
                this.computedAttributes.push(this.product.attribute_values[i].id)
            }
            let load = 'ok'
            this.onChange(null  , load);
        }
    },
    methods: {
        getAllChildren(currentValue, level) {
            for (let i = 0; i < currentValue.length; i++) {
                let current = currentValue[i]
                this.categories.push({
                    id: current.id,
                    name: Array(level + 1).join(' -- ') + ' ' + current.name
                })
                if (current.children_recursive && current.children_recursive.length > 0) {
                    this.getAllChildren(current.children_recursive, level + 1)
                }
            }

        },
        onChange(event , load) {
            let categories = {
                categories_id: this.categories_selected
            }
            this.flag = false
            axios.post('/api/categories/attribute', this.categories_selected).then(
                res => {
                    if(this.product && load != 'ok')
                    {
                        this.computedAttributes = []
                        this.selected_attributes = []
                    }
                    this.attributes = res.data.attributes
                    this.flag = true
                }
            ).catch(
                err => {
                    console.log(err)
                    this.flag = false
                }
            )
        },
        addAttributes(event, index) {

            for (let i = 0; i < this.selected_attributes.length; i++) {

                let current = this.selected_attributes[i];
                if (current.index == index) {
                    this.selected_attributes.splice(i, 1)
                }
            }
            this.selected_attributes.push({
                'index': index,
                'value': event.target.value
            })
            this.computedAttributes = []
            for (let i = 0 ; i < this.selected_attributes.length; i++)
            {
                this.computedAttributes.push(this.selected_attributes[i].value)
            }
        }
    }
}
</script>

<style scoped>

</style>
