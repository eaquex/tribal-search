<template>
  <div class="search-bar">
    <div class="search-bar-title">Welcome to the best search engine</div>
    <div class="search-bar-tagline">Found here your favorite movies, songs, tv shows and more</div>
    <form class="search-bar-form" @submit.prevent="onSubmit">
      <input id="search" placeholder="Type your search terms here" v-model="terms">
      <button type="submit" :disabled="wait==true">Search</button>
    </form>
  </div>
</template>

<script>
import axios from 'axios';

export default {
  props: ['value'],
  methods: {
    onSubmit: function() {
        this.$emit('start')
        this.wait = true

        axios.get('/api/search', {
            params: {
              keywords: this.terms
            }
          })
          .then((response) => {
            this.records = response.data
          })
          .catch((error) => {
            this.records = []
          })
          .finally(() => {
            this.$emit('refresh', this.records)
            this.wait = false            
          })
    }
  },  
  data() {
      return {
        wait: false,
        terms: "",
        records: []
      }
  }
}
</script>