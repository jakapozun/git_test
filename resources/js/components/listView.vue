<template>
    <div class="container">
        <div v-for="(item,index) in items" :key="index">
            <list-item
            :item="item"
            v-on:itemchanged="$emit('reloadlist')"
            ></list-item>
        </div>
    </div>
</template>

<script>
import listItem from "./listItem";

    export default {
        props: ['items'],
        components: {
            listItem
        }
    }
</script>
