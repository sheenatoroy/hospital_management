<template>
    <div class="splitter-container">
      <div class="wrapper">
        <div class="logo">
          <img :src="require('@/assets/logo1.png')" alt="E-commerce Logo">
        </div>
        <div class="text-center name">
          User Registration
        </div>
        <form @submit.prevent="registerUser" class="form">
          <div class="form-field">
            <input type="text" name="name" v-model="name" placeholder="Name">
          </div>
          <div class="form-field">
            <input type="email" name="email" v-model="email" placeholder="Email">
          </div>
          <div class="form-field">
            <input type="password" name="password" v-model="password" placeholder="Password">
          </div>
          <div class="form-field">
            <input type="password" name="password_confirmation" v-model="password_confirmation" placeholder="Confirm Password">
          </div>
          <button type="submit" class="btn">Register</button>
        </form>
        <div class="text-center">
          <p>Already have an account? <router-link to="/" class="link-sign">Login here!</router-link></p>
        </div>
      </div>
    </div>
  </template>
  
  <script>
  import axios from '@/lib/axios';
  
  export default {
    methods: {
      async registerUser() {
        try {
          const response = await axios.post('/api/create', {
            name: this.name,
            email: this.email,
            password: this.password,
            password_confirmation: this.password_confirmation,
          });
  
          if (response.status === 201) {
            // Reset fields
            this.name = '';
            this.email = '';
            this.password = '';
            this.password_confirmation = '';
            alert('New account created.');
            this.$router.go(-1);
          }
        } catch (error) {
          console.log(error);
          alert('Registration failed. Please try again.');
        }
      }
    },
    data() {
      return {
        name: '',
        email: '',
        password: '',
        password_confirmation: '',
      };
    }
  };
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
    max-width: 400px;
    padding: 20px;
    background-color: white;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    text-align: center;
  }
  
  .logo img {
    width: 100px;
    height: 100px;
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
    width: 100%;
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