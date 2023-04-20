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
        console.log(this.todoList);
      });
    },
    trueOrFalse(index) {
      this.todoList[index].done = !this.todoList[index].done;
    },
  },
  mounted() {
    this.displayList();
  },
}).mount("#app");
