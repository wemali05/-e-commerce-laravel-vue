    <template>
	<div class="container">


		
			<div class="row">
				<div class="col-md-12">
					<div class="row">
						<div class="col-md-4 product-box" v-for="(product,index) in products" :key="index">
							<a :href="`/products/${product.id}`">
								<img :src="product.image" :alt="product.name" />
								<h5>
									<span v-html="product.name"></span>
									<span class="small-text text-muted float-right">$ {{product.price}}</span>
								</h5>
								<button class="col-md-4 btn btn-sm btn-primary float-right">Buy Now</button>
							</a>
						</div>
					</div>
				</div>
			</div>
		
		
	</div>
</template>

<script>
export default {
	props: {
		products: {
			type: Array,
			required: true
		}
	},
	data: function() {
		return {}
	},
	created() {},
	methods: {}
	
}
</script>

