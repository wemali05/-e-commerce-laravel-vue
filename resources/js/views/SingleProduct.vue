   <template>
	<div class="container">
		<div class="row">
			<div class="col-md-8 offset-md-2">
				<img :src="product.image" :alt="product.name" />
				<h3 class="title" v-html="product.name"></h3>
				<p class="text-muted">{{product.description}}</p>
				<h4>
					<span class="small-text text-muted float-left">$ {{product.price}}</span>
					<span class="small-text float-right">Available Quantity: {{product.units}} ml</span>
				</h4>
				<br />
				<hr />
				<a :href="`/checkout/${product.id}`" class="col-md-4 btn btn-sm btn-primary float-right">Buy Now</a>
			</div>
		</div>
	</div>
</template>

    <script>
export default {
	props: {
		product: {
			type: Object,
			required: true
		}
	},
	data() {
		return {}
	},
	mounted() {}
}
</script>

    <style scoped>
.small-text {
	font-size: 18px;
}
.title {
	font-size: 36px;
}
</style>
