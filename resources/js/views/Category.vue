    <template>
	<div class="container">
	
		
	
			// <div class="row">
			// 	<div class="col-md-12">
			// 		<div class="row">
			// 			<div class="col-md-4 product-box" v-for="(product,index) in category" :key="index">
			// 				<img :src="product.image" :alt="product.name" />
			// 				<h5>
			// 					<span class="small-text text-muted float-right">$ {{ product.price}}</span>
			// 				</h5>
							
			// 					<a  class="col-md-4 btn btn-sm btn-primary float-right" :href="`/products/${product.id}`">Buy Now</a>
							
			// 			</div>
			// 		</div>
			// 	</div>
			// </div>
		</div>
	
</template>

<script>
export default {
	props: {
		category: {
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
