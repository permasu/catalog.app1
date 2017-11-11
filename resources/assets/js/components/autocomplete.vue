<template>

    <autocomplete
            url="/ajax/company/search/"
            anchor="full_name"
            label="address"
            placeholder="Название организации"
            name="search"
            :on-select="getData"
            :classes="{
                wrapper: 'form-wrapper',
                input: 'form-control',
                list: 'list-group',
                item: 'list-group-item' }"
            :onSelect="openLink">
    </autocomplete>

</template>


<script>

    import Autocomplete from 'vue2-autocomplete-js';

    export default {

        components: { Autocomplete },

        methods: {
            getData(obj){
                console.log(obj);
            },

            openLink(value) {
                location.href = value.link;
            }
        }
    };

</script>