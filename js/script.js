const { createApp } = Vue;

createApp({
  data() {
    return {
      myAPI: "http://localhost/Boolean/php-dischi-json/server.php",
    };
  },
  mounted() {
    axios.get(this.myAPI).then((resp) => {
      console.log(resp);
    });
  },
}).mount("#app");
