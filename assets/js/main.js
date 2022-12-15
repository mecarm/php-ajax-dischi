var app = new Vue({
  el: "#app",
  data: {
    dischi: [],
    generi: [],
    genereSelezionato: "",
  },
  mounted() {
    axios.get("./api/index.php").then((response) => {
      this.dischi = response.data;

      //ciclo per estrarre e filtrare i generi
      this.dischi.forEach((element) => {
        //condizione per filtrare i generi uguali e pusharli solo una volta
        if (!this.generi.includes(element.genre)) {
          this.generi.push(element.genre);
        }
      });
    });
  },
  beforeUpdate() {},
  methods: {
    genereSelected() {
      axios.get("./api/index.php?genre=" + this.genereSelezionato).then((response) => {
        this.dischi = response.data;
      });
    },
  },
});