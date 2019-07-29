<template>
	<div class="row justify-content-center">
		<ul>
			<li v-for="(category,index) in categories" :key="index">
				<a :href="`/category/${category.id}`">{{ category.name}}</a>
			</li>
		</ul>
	</div>
</template>
<script>
export default {
	data: function() {
		return {}
	},
	created() {
		axios.get('/api/products').then(response => {
			this.categories = response.data.categories
		})
	}
}
</script>
<style >
li {
	margin: 0px 10px 5px 0px;
	display: inline;
	padding: 5px;
	border: 1px solid #ddd;
	border-radius: 20px;
	transition: 0.3s;
}
</style>
