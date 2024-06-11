<template>
    <div>
      <h1>Patient View</h1>
      <input v-model="newAppointment" placeholder="New Appointment Details" />
      <button @click="bookAppointment">Book Appointment</button>
      <div v-for="appointment in patientAppointments" :key="appointment.id">
        <p>{{ appointment.details }}</p>
        <button @click="cancelAppointment(appointment.id)">Cancel</button>
      </div>
    </div>
  </template>
  
  <script>
  export default {
    data() {
      return {
        newAppointment: '',
        patientAppointments: [
          { id: 1, details: 'Patient Appointment 1' },
          { id: 2, details: 'Patient Appointment 2' }
        ]
      };
    },
    methods: {
      bookAppointment() {
        if (this.newAppointment) {
          this.patientAppointments.push({ id: Date.now(), details: this.newAppointment });
          this.newAppointment = '';
        }
      },
      cancelAppointment(id) {
        this.patientAppointments = this.patientAppointments.filter(app => app.id !== id);
      }
    }
  };
  </script>
  