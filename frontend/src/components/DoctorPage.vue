<template>
    <div>
      <h1>Doctor View</h1>
      <div v-for="appointment in doctorAppointments" :key="appointment.id">
        <p>{{ appointment.details }}</p>
        <button @click="cancelAppointment(appointment.id)">Cancel</button>
      </div>
    </div>
  </template>
  
  <script>
  export default {
    data() {
      return {
        doctorAppointments: [
          { id: 1, details: 'Doctor Appointment 1' },
          { id: 2, details: 'Doctor Appointment 2' }
        ]
      };
    },
    methods: {
      cancelAppointment(id) {
        this.doctorAppointments = this.doctorAppointments.filter(app => app.id !== id);
      }
    }
  };
  </script>
  