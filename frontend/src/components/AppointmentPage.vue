<template>
    <div>
      <h1>Admin View</h1>
      <div v-for="appointment in appointments" :key="appointment.id">
        <p>{{ appointment.details }}</p>
      </div>
    </div>
  </template>
  
  <script>
  export default {
    data() {
      return {
        appointments: [
          { id: 1, details: 'Appointment 1' },
          { id: 2, details: 'Appointment 2' }
        ]
      };
    }
  };
  </script>
  