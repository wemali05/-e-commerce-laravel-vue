    <template>
	<div class="container">
		<div
			class="container-fluid hero-section d-flex align-content-center justify-content-center flex-wrap ml-auto"
		>
			<h2 class="title">Welcome to the bigStore</h2>
		</div>
		<div class="row justify-content-center">
			<ul>
				<li class="cli" v-for="(category,index) in categories" :key="index">
					<a :href="`/products/${category.id}`">{{ category.name}}</a>
				</li>
			</ul>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="row">
						<div class="col-md-4 product-box" v-for="(product,index) in categories.products" :key="index">
							<img :src="product.image" :alt="product.name" />
							<h5>
								<span class="small-text text-muted float-right">$ {{ product.price}}</span>
							</h5>
							<button class="col-md-4 btn btn-sm btn-primary float-right">
								<a :href="`/products/${product.id}`">Buy Now</a>
							</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</template>

<script>
export default {
	props: {
		categories: {
			type: Array,
			required: true
		}
	},
	data: function() {
		return {}
	},
	created() {
		// axios.get('/api/products').then(response => {
		// 	this.products = response.data.products
		// 	this.categories = response.data.categories
		// })
	},
	mounted() {}
}
</script>

<style scoped>
.small-text {
	font-size: 14px;
}
.product-box {
	border: 1px solid #cccccc;
	padding: 10px 15px;
}
.hero-section {
	height: 30vh;
	background: #ababab;
	align-items: center;
	margin-bottom: 20px;
	margin-top: -20px;
}
.title {
	font-size: 60px;
	color: #ffffff;
}
.cli {
	margin: 0px 10px 5px 0px;
	display: inline;
	padding: 5px;
	border: 1px solid #ddd;
	border-radius: 20px;
	transition: 0.3s;
}
</style>
