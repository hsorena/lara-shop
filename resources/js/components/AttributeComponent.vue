<template>
    <div>
        <div class="input-group input-group-sm mb-3">
            <div class="input-group-prepend">
                <span id="inputGroup-sizing-sm" class="input-group-text">دسته محصول :</span>
            </div>
            <select v-model="categories_selected" class="custom-select" multiple name="categories[]"
                    @change="onChange($event)">
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
                    <option v-for="attribute_value in attribute.attribute_values" :value="attribute_value.id">
                        {{ attribute_value.title }}
                    </option>
                </select>
            </div>
            <input :value="computedAttributes" name="attributes[]" type="hidden">
        </div>


        <div class="input-group input-group-sm mb-3">
            <div class="input-group-prepend">
                <span id="brands" class="input-group-text">برند :</span>
            </div>
            <select class="custom-select" name="brand_id" style="font-family:'Segoe UI'">
                <option v-for="brand in brands" :value="brand.id">{{ brand.title }}</option>
            </select>
        </div>
    </div>

</template>

<script>
export default {
    name: "AttributeComponent",
    props: ['brands'],
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
    },
    methods: {
        getAllChildren(currentValue, level) {
            for (let i = 0; i < currentValue.length; i++) {
                let current = currentValue[i]
                this.categories.push({
                    id: current.id,
                    name: Array(level + 1).join(' -- ') + ' ' + current.name
                })
                if (current.sub_category && current.sub_category.length > 0) {
                    this.getAllChildren(current.sub_category, level + 1)
                }
            }

        },
        onChange(event) {
            let categories = {
                categories_id: this.categories_selected
            }
            this.flag = false
            axios.post('/api/categories/attribute', this.categories_selected).then(
                res => {
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
