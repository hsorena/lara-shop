<template>
    <div>
        <div class="form-group required">
            <label for="input-country" class="col-sm-2 control-label">استان</label>
            <div class="col-sm-10">
                <select class="form-control" id="input-country" name="province_id" v-model="province" @change="getAllCities()">
                    <option selected>استان خود را انتخاب کنید...</option>
                    <option value="1">آذربایجان شرقی</option>
                    <option value="2">آذربایجان غربی</option>
                    <option value="3">اردبیل</option>
                    <option value="4">اصفهان</option>
                    <option value="5">البرز</option>
                    <option value="6">ایلام</option>
                    <option value="7">بوشهر</option>
                    <option value="8">تهران</option>
                    <option value="9">چهارمحال بختیاری</option>
                    <option value="10">خراسان جنوبی</option>
                    <option value="11">خراسان رضوی</option>
                    <option value="12">خراسان شمالی</option>
                    <option value="13">خوزستان</option>
                    <option value="14">زنجان</option>
                    <option value="15">سمنان</option>
                    <option value="16">سیستان و بلوچستان</option>
                    <option value="17">فارس</option>
                    <option value="18">قزوین</option>
                    <option value="19">قم</option>
                    <option value="20">کردستان</option>
                    <option value="21">کرمان</option>
                    <option value="22">کرمانشاه</option>
                    <option value="23">کهکیلویه و بویراحمد</option>
                    <option value="24">گلستان</option>
                    <option value="25">گیلان</option>
                    <option value="26">لرستان</option>
                    <option value="27">مازندران</option>
                    <option value="28">مرکزی</option>
                    <option value="29">هرمزگان</option>
                    <option value="30">همدان</option>
                    <option value="31">یزد</option>
                </select>
            </div>
        </div>
        <div class="form-group required">
            <label for="input-zone" class="col-sm-2 control-label">شهرستان</label>
            <div class="col-sm-10">
                <select class="form-control" id="input-zone" name="city_id">
                    <option v-for="city in cities" :value="city.id">{{ city.name}}</option>
                </select>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: "SelectCityComponent",
    data(){
        return{
            province : 'استان خود را انتخاب کنید...',
            cities : [],
            flag : false
        }
    },
    methods :{
        getAllCities(provinceId){
            axios.get('/api/cities/' + this.province).then(res => {
                this.cities = res.data.cities
                console.log(this.cities)
            }).catch(err => {
                console.log(err)
            })
        }
    }
}
</script>

<style scoped>

</style>
