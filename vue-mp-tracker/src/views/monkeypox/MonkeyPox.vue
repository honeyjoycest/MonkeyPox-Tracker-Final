<template>
  <div>
    <hr />
    <div class="container">
      <div class="text-center m-4">
        <h4>MonkeyPox Virus Record</h4>
      </div>
      <div class="container">
        <table class="table table-striped">
          <thead class="bg-primary text-white">
            <tr>
              <th>Country</th>
              <th>Month</th>
              <th>Deaths</th>
              <th>Recovered</th>
              <th>Active Case</th>
              <th class="text-center">Action</th>
            </tr>
          </thead>
          <tbody>
            <tr
              v-for="mpt in monkeyPoxTracker"
              :key="mpt.id"
              class="hover-list"
            >
              <td>{{ mpt.country }}</td>
              <td>{{ mpt.month }}</td>
              <td>{{ mpt.deaths }}</td>
              <td>{{ mpt.recovered }}</td>
              <td>{{ mpt.active_case }}</td>
              <td>
                <router-link
                  :to="{ name: 'view-mp-tracker', params: { id: mpt.id } }"
                  class="btn btn-sm btn-success"
                  >open</router-link
                >
                <router-link
                  :to="{
                    name: 'view-mp-tracker-edit',
                    params: { id: mpt.id },
                  }"
                  class="btn btn-sm btn-secondary"
                  >Update</router-link
                >
                <router-link
                  :to="{
                    name: 'view-mp-tracker-delete',
                    params: { id: mpt.id },
                  }"
                  class="btn btn-sm btn-danger"
                  >Delete</router-link
                >
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  data() {
    return {
      monkeyPoxTracker: [],
    };
  },
  methods: {
    getData() {
      fetch("http://192.168.1.219:8000/api/mp-tracker")
        .then((res) => res.json())
        .then((data) => {
          this.monkeyPoxTracker = data;
        })
        .catch((err) => console.log(err));
    },
  },
  mounted() {
    this.getData();
  },
};
</script>

<style>
.hover-list:hover {
  background: rgb(226, 222, 222);
}
</style>
