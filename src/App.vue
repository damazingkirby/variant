<script lang="ts">
import { defineComponent } from 'vue'; 

export default defineComponent({
    name: 'App',
    components: {},
    data() {
        return {
            nom1: 'addName',
            nom2: 'addName',
            jeux1: 0,
            jeux2: 0,
            set1: 0,
            set2: 0,
            name1: '',
            name2: '',
            bonbon: '.',
            bonbon1: '.',
            showgun: true,
            showgun1: true,
            
        }
    },
    methods: {
        theHandler() {
            this.nom1 = this.name1;
            this.nom2 = this.name2;
        },
        addOne() {
            if(this.jeux1 < 11 && !(this.set2 == 1 && this.jeux2 == 11)) {
                this.jeux1++;
            }
            else if(this.jeux1 === 11 && this.set1 < 1){
                this.set1++;
                this.jeux1 = 0;
            }
        },
        addTwo() {
            if(this.jeux2 < 11 && !(this.set1 == 1 && this.jeux1 == 11)) {
                this.jeux2++;
            }
            else if(this.jeux2 === 11 && this.set2 < 1){
                this.set2++;
                this.jeux2 = 0;
            }
        },
        reset() {
            this.nom1 = 'addName';
            this.nom2 = 'addName';
            this.set1 = 0;
            this.set2 = 0;
            this.jeux1 = 0;
            this.jeux2 = 0;
            this.name1 = '';
            this.name2 =  '';
            

        },
        serveOwner() {
            if(this.jeux1 + this.jeux2 ) {

            }
        },
        coco() {
            console.log('superbatman');
        }
    },
    mounted() {
        this.showgun1 = !this.showgun;
        this.coco();
    },
})
</script>

<template>
    <div class="jeuxset">
        <p class="nom">{{ nom1 }}</p>
        <p class="p">{{ jeux1 }} {{ set1 }}</p>
        <p v-show="showgun"> {{ bonbon }}</p><br>
    </div>
    <div class="jeuxset">
        <p class="nom">{{ nom2 }}</p>
        <p class="p">{{ jeux2 }} {{ set2 }}</p>
        <p v-show="showgun1"> {{ bonbon1 }}</p><br>
    </div>
    <form @submit.prevent="theHandler">
        <input type="text" v-model="name1">
        <input type="text" v-model="name2">
        <button type="submit">Save the name</button>
    </form>
    <button @click="addOne">+</button>
    <button @click="addTwo">++</button>
    <button @click="reset">reset</button>
</template>

<style scoped>
    p {
        display: inline-flex;
        width: 30px;
        
    }
    .nom {
        width: 200px; /* Adjust width as needed */
        display: inline-flex;
    }
    .p {
        display: inline-block;
        width: 50px
    }
</style>
