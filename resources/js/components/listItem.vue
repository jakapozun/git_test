<template>
    <div class="container">
        <input type="checkbox"
        @change="updateCheck()"
        v-model="item.completed">
        <span :class="[item.completed ? 'completed' : 'uncompleted']">{{ item.name }}</span>
        <button @click="removeItem()">
            <font-awesome-icon icon="trash"></font-awesome-icon>
        </button>
    </div>
</template>

<script>
    export default {
        props: ['item'],
        methods: {
            updateCheck() {
                axios.put('api/item/edit/' + this.item.id, {
                    item: this.item
                })
                .then(response => {
                    if(response.status === 200){
                        this.$emit('itemchanged');
                    }
                })
                .catch( error => {
                    console.log(error);
                })
            },
            removeItem() {
                axios.delete('api/item/destroy/' + this.item.id)
                .then(response => {
                    if(response.status == 200){
                        this.$emit('itemchanged');
                    }
                })
                .catch(error => {
                    console.log(error);
                })
            }
        }
    }
</script>

<style>
.completed{
    text-decoration: line-through;
    color: #999999;
}

.uncompleted{
    text-decoration: none;
    color: #1a202c;
}
</style>
