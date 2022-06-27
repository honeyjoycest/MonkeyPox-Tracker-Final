<template>
  <nav class="navbar navbar-expand-lg navbar-light bg-info">
    <div class="container hover-links">
      <router-link to="/" class="navbar-brand hover-links"
        >MonkeyPox Virus Tracker</router-link
      >
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <router-link to="/" class="nav-link hover-links">Home</router-link>
          </li>
          <li class="nav-item">
            <router-link to="/about" class="nav-link hover-links"
              >About</router-link
            >
          </li>
          <li class="nav-item">
            <router-link to="/mp-tracker" class="nav-link hover-links"
              >Monkey Pox</router-link
            >
          </li>
          <li class="nav-item">
            <router-link to="/create-new-case" class="nav-link hover-links"
              >Create New Case</router-link
            >
          </li>
        </ul>
      </div>
    </div>
  </nav>
</template>

<script>
export default {};
</script>

<style scoped>
.hover-links:hover {
  color: blue;
}
.container {
  display: flex;
  align-items: center;
  justify-content: center;
}
</style>
