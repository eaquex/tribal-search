<template>
  <div class="card-container">
  	<div class="card-row">  		
    	<card-item v-for="(item, index) in data" :key="index" :title="item.name" :type="item.type" :source="item.source"></card-item>
    </div>      
  </div>
</template>

<script>
export default {
	props: ['records'],
	watch: {
		records: function(current) {
			this.data = current
		}
	},
	data() {
		return {
			data: []
		}
	}
};
</script>