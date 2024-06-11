<template>
    <div>
      <h1>Admin View</h1>
      <div v-for="record in medicalRecords" :key="record.id">
        <p>{{ record.details }}</p>
      </div>
    </div>
  </template>
  
  <script>
  export default {
    data() {
      return {
        medicalRecords: [
          { id: 1, details: 'Medical Record 1' },
          { id: 2, details: 'Medical Record 2' }
        ]
      };
    }
  };
  </script>
  