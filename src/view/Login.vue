<template>
	<div>Test</div>
	<form @submit.prevent="login">
		<input v-model="username" placeholder="Username" />
		<input v-model="password" type="password" placeholder="Password" />
		<button type="submit">Login</button>
		<p v-if="error">{{ error }}</p>
	</form>
</template>

<script lang="ts">
import { defineComponent } from 'vue'
import { ref } from 'vue'
import axios from 'axios'

export default defineComponent({
	name: 'Login',
	setup () {
	const username = ref('')
	const password = ref('')
	const error = ref('')

	const login = async () => {
	try {
		const res = await axios.post('http://localhost:8000/login', new URLSearchParams({
		username: username.value,
		password: password.value
		}))
		localStorage.setItem('token', res.data.access_token)
		error.value = ''
		alert('Login successful!')
	} catch (err) {
		error.value = 'Login failed'
	}
	}
	
		return { login, username, password, error }
	}
})
</script>

<style scoped>

</style>