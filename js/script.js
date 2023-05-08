const { createApp } = Vue;

createApp({
  data() {
    return {
      myAPI: "http://localhost/Boolean/php-dischi-json/server.php",
      albums: [],
    };
  },
  mounted() {
    axios.get(this.myAPI).then((resp) => {
      this.albums = resp.data.results;
    });
  },
}).mount("#app");
