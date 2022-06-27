<template>
  <h1 class="text-center">Create new Case</h1>

  <div class="container w-50 border border-radius p-4">
    <form @submit="postData">
      <div class="form-group">
        <label for="country">Country</label>
        <input
          type="text"
          class="form-control"
          v-model="country"
          id="country"
        />
      </div>
      <div class="form-group">
        <label for="month">Month</label>
        <input type="text" class="form-control" v-model="month" id="month" />
      </div>
      <div class="form-group">
        <label for="deaths">Deaths</label>
        <input type="text" class="form-control" v-model="deaths" id="deaths" />
      </div>
      <div class="form-group">
        <label for="recovered">Recovered</label>
        <input
          type="text"
          class="form-control"
          v-model="active_case"
          id="recovered"
        />
      </div>
      <div class="form-group">
        <label for="active_case">Active Case</label>
        <input
          type="text"
          class="form-control"
          v-model="recovered"
          id="active_case"
        />
      </div>

      <button type="submit" class="btn btn-primary mt-4">Create</button>
    </form>
  </div>

  <form></form>
</template>

<script>
export default {
  data() {
    return {
      country: "",
      month: "",
      deaths: null,
      active_case: null,
      recovered: null,
    };
  },
  methods: {
    postData(e) {
      e.preventDefault();

      const postData = {
        country: this.country,
        month: this.month,
        deaths: this.deaths,
        active_case: this.active_case,
        recovered: this.recovered,
      };
      console.log(postData);

      fetch("http://192.168.1.219:8000/api/mp-tracker/store", {
        method: "POST",
        headers: {
          Accept: "application/json",
          "Content-Type": "application/json",
        },
        body: JSON.stringify(postData),
      })
        .then((response) => {
          if (response.status === 200) {
            this.$router.push({ path: "/mp-tracker" });
          }
        })
        .catch((err) => console.log(err));
    },
    mounted() {
      this.postData();
    },
  },
};
</script>

<style></style>
