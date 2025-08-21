<template>
	<div>
		<p>Response: {{ result }}</p>
	</div>
</template>

<script lang="ts">
import axios from 'axios'
import { defineComponent, onMounted, ref } from 'vue'

export default defineComponent({
	name: 'HomeView',
	setup () {
		const result = ref('Loading...')
		const testi = async() => {
		try {
			const res = await axios.get('http://localhost:8000/test')
			result.value = res.data.message
		}catch (error) {
			result.value = "error fetching"
			}
		}
		onMounted(() => {
			testi()
		})
		return { result }
	}
})
</script>

<style scoped>

</style>