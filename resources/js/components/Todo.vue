<template>
    <div class="container" style="background-color: #fffbdb">
        <div>
            <h2>Todo List</h2>
            <add-item v-on:reloadlist="getList()"></add-item>
        </div>
        <list-view :items="items"
        v-on:reloadlist="getList()"></list-view>
    </div>
</template>

<script>
import addItem from "./addItem";
import listView from "./listView";
import saveState from 'vue-save-state';
    export default {
        mixins: [saveState],
        components: {
            addItem,
            listView
        },

        data() {
            return {
                items: []
            }
        },

        methods: {
            getList() {
                axios.get('api/items')
                    .then(response => {
                        this.items = response.data
                    })
                    .catch(error => {
                        console.log(error);
                    })
            },

            getSaveStateConfig() {
                return {
                    'cacheKey': 'Todo',
                };
            },

            created() {
                this.getList();
            }
        }
    }
</script>

<style>
.container {
    text-align: center;

}
</style>
