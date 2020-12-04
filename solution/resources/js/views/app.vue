<template>
  <div>
  	<header>
  		<nav>
  			<div class="logo">TRIBAL SEARCH</div>
  		</nav>  		
  	</header>
    <main>    	
    	<search-bar v-model="terms" @start="search" @refresh="refresh"></search-bar>    	
    	<loader v-if="searching==true"></loader>
    	<card-container :records="records"></card-container>
    </main>
  	<footer>
  		<div class="disclaimer">
  			Copyright &copy;2020 by Edgar Quex
  		</div>
  	</footer>    
  </div>
</template>
<script>

export default {
	methods: {
		search: function() {
			this.searching = true
			this.records = []
		},

		refresh: function(value) {
			this.searching = false
			this.records = value
		}
	},
	data() {
		return {			
			terms: "",
			records: [],
			searching: false
		}
	}
};
</script>