<template>
  <h1 class="text-center mt-4">Delete Record?</h1>

  <div class="container w-50 border border-radius p-4">
    <form @submit="postData">
      <div class="form-group">
        <label for="country">Country</label>
        <input
          type="text"
          class="form-control"
          v-model="monkeyPoxTracker.country"
          id="country"
        />
      </div>
      <div class="form-group">
        <label for="month">Month</label>
        <input
          type="text"
          class="form-control"
          v-model="monkeyPoxTracker.month"
          id="month"
        />
      </div>
      <div class="form-group">
        <label for="deaths">Deaths</label>
        <input
          type="text"
          class="form-control"
          v-model="monkeyPoxTracker.deaths"
          id="deaths"
        />
      </div>
      <div class="form-group">
        <label for="recovered">Recovered</label>
        <input
          type="text"
          class="form-control"
          v-model="monkeyPoxTracker.active_case"
          id="recovered"
        />
      </div>
      <div class="form-group">
        <label for="active_case">Active Case</label>
        <input
          type="text"
          class="form-control"
          v-model="monkeyPoxTracker.recovered"
          id="active_case"
        />
      </div>

      <button type="submit" class="btn btn-danger mt-4 w-100">Delete</button>
    </form>
  </div>
</template>

<script>
export default {
  props: ["id"],
  data() {
    return {
      monkeyPoxTracker: [],
      flag: "ad",
    };
  },

  methods: {
    postData(e) {
      e.preventDefault();
      const postData = {
        country: this.monkeyPoxTracker.country,
        month: this.monkeyPoxTracker.month,
        deaths: this.monkeyPoxTracker.deaths,
        active_case: this.monkeyPoxTracker.active_case,
        recovered: this.monkeyPoxTracker.recovered,
      };
      console.log("post data");
      console.log(postData);
      console.log("covidtracker");
      console.log(this.monkeyPoxTracker);

      fetch("http://192.168.1.219:8000/api/mp-tracker-delete/" + this.id, {
        method: "DELETE",
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
  },
  mounted() {
    fetch("http://192.168.1.219:8000/api/mp-tracker/" + this.id)
      .then((res) => res.json())
      .then((data) => (this.monkeyPoxTracker = data))
      .then((res) => {
        console.log("res");
        console.log(res);
      })
      .catch((err) => console.log(err));
  },
};
</script>

<style>
.width {
  width: 30px;
  height: 30px;
}
.hover-list:hover {
  background: rgb(226, 222, 222);
}
</style>
