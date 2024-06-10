<template>
  <div class="splitter-container">
    <div class="wrapper">
      <div class="text-center name">
        Login
      </div>
      <form @submit.prevent="login" class="form">
        <div class="form-field">
          <input type="text" name="email" v-model="email" placeholder="Email" required>
        </div>
        <div class="form-field">
          <input type="password" name="password" v-model="password" placeholder="Password" required>
        </div>
        <button type="submit" class="btn">Login</button>
      </form>
      <div class="text-center">
        <p>Don't have an account? <router-link to="/register" class="link-sign">Sign up here!</router-link></p>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: 'LoginPage',
  props: {
    msg: String
  }
}
</script>
<style scoped>
.splitter-container {
  display: flex;
  justify-content: center;
  align-items: center;
  height: 100vh;
  background-color: #f0f0f0;
}

.wrapper {
  width: 100%;
  max-width: 450px;
  padding: 20px;
  background-color: white;
  border-radius: 8px;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
  text-align: center;
}

.logo img {
  width: 100px;
  margin-bottom: 20px;
}

.name {
  font-size: 1.5rem;
  margin-bottom: 20px;
  color: #333;
}

.form {
  display: flex;
  flex-direction: column;
}

.form-field {
  margin-bottom: 15px;
}

.form-field input {
  width: 90%;
  padding: 10px;
  border: 1px solid #ddd;
  border-radius: 5px;
  font-size: 1rem;
}

.btn {
  width: 100%;
  padding: 10px;
  background-color: #007bff;
  border: none;
  border-radius: 5px;
  color: white;
  font-size: 1rem;
  cursor: pointer;
  transition: background-color 0.3s;
}

.btn:hover {
  background-color: #0056b3;
}

.text-center {
  font-size: 0.9rem;
  color: #333;
}

.link-sign {
  color: #007bff;
  text-decoration: none;
}

.link-sign:hover {
  text-decoration: underline;
}
</style>