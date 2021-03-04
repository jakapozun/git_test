<template>
    <div>
        <input type="text" v-model="search" placeholder="Search for title...">
        <div class="box" v-for="item in filteredData">
            <h2>{{ item[0][0] }}</h2>
            <p v-for="(level, index) in item">Level: {{ index + 1}} Date: {{ level[3] ? level[3] : "No date"}}</p>
        </div>

    </div>
</template>

<script>
export default {

    data(){
        return {
            data: [],
            search: ''
        }
    },

    methods: {

        loadData(){
            axios.get("data")
                .then( response => {
                    this.data = response.data
                })
                .catch( error => {
                    console.log(error);
                })
        }

    },

    created() {
        this.loadData();
    },

    computed:{
        filteredData: function(){
            return this.data.filter((item)=>{
                debugger
                return item[0][0].toLowerCase().includes(this.search.toLowerCase())
            })
        }
    }

}

</script>


<style>
.box{
    margin-top: 2em;
    padding: 0.5em;
    background-color: lightblue;
    font-size: 15px;
    border: 1px solid cadetblue;
    border-radius: 5px;
    max-width: 20em;
}
</style>
