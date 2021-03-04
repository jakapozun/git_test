<template>
    <div>
        FROM: <v-date-picker v-model="start" mode="dateTime" is24hr>
            <template v-slot="{ inputValue, inputEvents }">
                <input
                    :value="inputValue"
                    v-on="inputEvents"
                />
            </template>
        </v-date-picker>
        <div>
            ----------------
        </div>
        TO: <v-date-picker v-model="end" mode="dateTime" is24hr>
            <template v-slot="{ inputValue, inputEvents }">
                <input
                    :value="inputValue"
                    v-on="inputEvents"
                />
            </template>
        </v-date-picker>

        <p>FROM: {{ start }}</p>
        <p>TO:: {{ end }}</p>
    </div>
</template>

<script>
export default {
    data() {
        return {
            start: new Date(),
            end: new Date(),
        };
    },
}
</script>

<style>

</style>
