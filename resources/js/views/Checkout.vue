<template>
	<div class="container">
		<div class="row">
			<div class="col-md-8 offset-md-2">
				<div class="order-box">
					<img :src="product.image" :alt="product.name" />
					<h2 class="title" v-html="product.name"></h2>
					<p class="small-text text-muted float-left">$ {{product.price}}</p>
					<p class="small-text text-muted float-right">Available Units: {{product.units}}</p>
					<br />
					<hr>
					<label class="row">
						<span class="col-md-2 float-left">Quantity:</span>
						<input
							type="number"
							name="units"
							min="1"
							:max="product.units"
							class="col-md-2 float-left"
							v-model="quantity"
							@change="checkUnits"
						/>
					</label>
				</div>
				<br />
				<div>

					<div>

						<div class="row">
							<label for="address" class="col-md-3 col-form-label">Delivery Address</label>
							<div class="col-md-9">
								<input id="address" type="text" class="form-control" v-model="address" required />
							</div>
						</div>
						<br />
						<button
							class="col-md-4 btn btn-sm btn-success float-right"

							@click="placeOrder"
						>Continue</button>
					</div>
				</div>
			</div>
		</div>
	</div>
</template>

    <script>
export default {
	props: {
		product: {
			type: Object,
			// required: true
		}
	},
	data() {
		return {
			address: '',
			quantity: 1,
			the_product: {}
		}
	},
	created(){
		this.the_product = this.product
	},

	methods: {

		placeOrder(e) {
			e.preventDefault()

			let address = this.address
			let product_id = this.product.id
			let quantity = this.quantity

			axios
				.post('/orders/product', { address, quantity, product_id })
				.then(response => window.location.href = '/confirmation')
		},
		checkUnits(e) {
			if (this.quantity > this.product.units) {
				this.quantity = this.product.units
			}
		}
	}
}
</script>


    <style scoped>
.small-text {
	font-size: 18px;
}
.order-box {
	border: 1px solid #cccccc;
	padding: 10px 15px;
}
.title {
	font-size: 36px;
}
</style>
