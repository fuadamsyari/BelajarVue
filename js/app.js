var app = new Vue({
  el: '#app',
  data: {
    info: '',
  },
  mounted() {
    axios
      .post('proses.php', {
        request: 1,
      })
      .then((response) => (this.info = response.data))
      .catch((error = console.log(error)));
  },
});
