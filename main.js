const { createApp } = Vue;

createApp({
  data() {
    return {
      todoList: [],
      todoItem: "",
    };
  },
  methods: {
    displayList() {
      axios.get("server.php").then((response) => {
        this.todoList = response.data;
      });
    },
  },
  mounted() {
    this.displayList();
  },
}).mount("#app");
