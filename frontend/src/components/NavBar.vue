<template>
    <nav class="navbar">
      <ul class="navbar-list">
        <li class="navbar-item">
          <router-link to="/patients">Patient Management</router-link>
        </li>
        <li class="navbar-item">
          <router-link to="/doctors">Doctor Management</router-link>
        </li>
        <li class="navbar-item">
          <router-link to="/appointments">Appointment Management</router-link>
        </li>
        <li class="navbar-item">
          <router-link to="/medical-records">Medical Records</router-link>
        </li>
      </ul>
    </nav>
  </template>
  
  <script>
  export default {
    name: 'Navbar'
  }
  </script>
  
  <style scoped>
  .navbar {
    background-color: #2c3e50;
    padding: 1rem;
  }
  
  .navbar-list {
    list-style: none;
    display: flex;
    justify-content: space-around;
    margin: 0;
    padding: 0;
  }
  
  .navbar-item {
    margin: 0 1rem;
  }
  
  .navbar-item a {
    color: #fff;
    text-decoration: none;
  }
  
  .navbar-item a:hover {
    text-decoration: underline;
  }
  </style>
  