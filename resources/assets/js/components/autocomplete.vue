<template>
    <autocomplete

            anchor       = "name"
            label        = "description"
            :initValue   = "value"
            :url         = "url"
            :name        = "name"
            :placeholder = "placeholder"
            :min         = "4"
            :debounce    = "300"
            :classes="{
                wrapper: 'form-wrapper',
                input: 'form-control',
                list: 'list-group',
                item: 'list-group-item' }"
            :onSelect = myAction
            :onShouldRenderChild = myRender
    >
    </autocomplete>
</template>

<script>

    import Autocomplete from 'vue2-autocomplete-js';

    export default {

        props: ['url', 'onSelect', 'placeholder', 'name', 'target', 'render', 'value'],

        components: {Autocomplete},

        methods: {
            myAction(value) {
                switch (this.onSelect) {
                    case 'openLink':
                        location.href = value.link;
                        break;
                    case 'select':
                        this.$emit('update-value', {
                            'id': value.id,
                            'name': this.target
                        });
                        break;
                }
            },

            myRender(value) {
                var html;

                switch (this.render) {
                    case 'address':

                        var string = value.query
                                    .split(/[^а-яa-z]+/gi)
                                    .join("\|");

                        var pattern = new RegExp('('+ string +')', 'gui');

                        string = value.name.replace( pattern, '<b>$1</b>');

                        html = `<span class="autocomplete-anchor-text">${ string }</span>`;
                        break;
                    default:
                        html = `<span class="autocomplete-anchor-text">${ value.name }</span>
                               <span class="autocomplete-anchor-label">${ value.description }</span>`;
                        break;
                }

                return html;
            }
        }
    }

</script>