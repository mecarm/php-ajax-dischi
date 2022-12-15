var app = new Vue({
    el: '#app',
    data: {
        dischi : [],
    },
    mounted() {
      axios.get('./api/index.php')
        .then ( (response) => {
            this.dischi = response.data
            
        })
    },
    beforeUpdate() {
  
    },
    methods: {

    }
  })