<template>
  <div class="card-item">
  	<div class="card-item-image">
  		<img class="card-item-placeholder" :src="placeholder[source]"/>
  	</div>
  	<div class="card-item-content">
    	<div class="card-item-title">{{ title }}</div>
    	<div class="card-item-type">{{ type }}</div>    
    </div>
  </div>
</template>

<script>
import itunes_source from "../../images/itunes.png"
import tvmaze_source from "../../images/tvmaze.png"
import crcind_source from "../../images/crcind.png"

export default {
  props: ["title", "type", "source"],
  data() {
      return {
      	placeholder: {
      		itunes: itunes_source,
      		tvmaze: tvmaze_source,
      		crcind: crcind_source
      	}
      }
  }
};
</script>