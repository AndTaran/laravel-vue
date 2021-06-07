<template>
  <div class="container">
    <div class="form-group">
      <input
        type="text"
        @blur="saveName"
        v-model="deskName"
        class="form-control"
      />
    </div>
  </div>
</template>

<script>
export default {
  props: ["deskId"],
  data() {
    return {
      deskName: null,
    };
  },
  methods: {
    saveName() {
      axios
        .put("/api/desks/" + this.deskId, {
          name: this.deskName,
        })
        .then((response) => {})
        .catch((error) => {
          console.log(error);
        });
    },
  },
  mounted() {
    axios
      .get("/api/desks/" + this.deskId)
      .then((response) => {
        this.deskName = response.data.data.name;
      })
      .catch((error) => {
        console.log(error);
      });
  },
};
</script>
