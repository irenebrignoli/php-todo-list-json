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
      //this.todoList[index].done = !this.todoList[index].done;

      const data = true;

      axios
        .post("server.php", data, {
          headers: { "Content-Type": "multipart/form-data" },
        })
        .then((response) => {
          this.todoList[index] = response.data;

          console.log(data);
        });
    },
    addItem() {
      if (this.todoItem != "") {
        const data = {
          item: {
            text: this.todoItem,
            done: false,
          },
        };

        console.log(data);

        axios
          .post("server.php", data, {
            headers: { "Content-Type": "multipart/form-data" },
          })
          .then((response) => {
            this.todoList = response.data;
            this.todoItem = "";
          });
      }
    },
  },
  mounted() {
    this.displayList();
  },
}).mount("#app");
