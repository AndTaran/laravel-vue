<template>
  <div class="container">
    <h1>Доски</h1>
    <div class="row">
      <div class="col-lg-4" v-for="desk in desks" :key="desk.id">
        <div class="card mt-3">
          <router-link
            class="card-body"
            :to="{ name: 'showDesk', params: { deskId: desk.id } }"
            ><h4 class="card-title">{{ desk.name }}</h4></router-link
          >
        </div>
      </div>
    </div>
    <div class="alert alert-danger" v-if="error">
      Ошибка
    </div>
    <div class="text-center spinner-grow" role="status" v-if="loading">
      <span class="visually-hidden">Loading...</span>
    </div>
  </div>
</template>

<script>
export default {
  data() {
    return {
      desks: [],
      error: false,
      loading: true,
    };
  },
  mounted() {
    axios
      .get("/api/desks")
      .then((response) => {
        this.desks = response.data.data;
      })
      .catch((error) => {
        console.log(error);
        this.error = true;
      })
      .finally(() => {
        this.loading = false;
      });
  },
};
</script>
