@extends('layout.master')

@section('content')
<style>
    .calendar-card {
        border-radius: 16px;
        background-color: #fffffffa;
    }
    .fc-theme-standard .fc-scrollgrid { border: none; }
    .fc-theme-standard td, .fc-theme-standard th { border-color: #f1f1f1; padding: 4px; }
    .fc-daygrid-day-frame { border: 1px solid #e9ecef; border-radius: 8px; min-height: 100px; }
    
    /* Highlight khusus tanggal hari ini */
    .fc-day-today .fc-daygrid-day-frame { 
        background-color: rgba(32, 201, 151, 0.05) !important; 
        border: 2px solid #20c997 !important; 
    }
    
    /* Tombol navigasi kalender */
    .fc .fc-button-primary { 
        background-color: #ffffff; 
        color: #495057; 
        border: 1px solid #dee2e6; 
        border-radius: 50px; 
        text-transform: capitalize;
    }
    .fc .fc-button-primary:hover { background-color: #f8f9fa; color: #212529; }
    .fc .fc-button-primary:not(:disabled).fc-button-active { 
        background-color: #20c997; 
        color: white; 
        border-color: #20c997; 
    }
    .fc-toolbar-title { font-weight: bold; color: #343a40; }
</style>

<div class="container-fluid px-4 py-3">
    <!-- Hapus class text-white jika background Anda terang -->
    <h4 class="mb-4 fw-bold text-white">Calendar</h4>

    <div class="card shadow-sm calendar-card border-0">
        <div class="card-body p-4">
            <!-- Kalender akan di-generate secara otomatis di dalam div ini -->
            <div id="calendar"></div>
        </div>
    </div>
</div>

<!-- Load FullCalendar.js langsung dari CDN -->
<script src="https://cdn.jsdelivr.net/npm/fullcalendar@6.1.10/index.global.min.js"></script>
<script>
  document.addEventListener('DOMContentLoaded', function() {
    var calendarEl = document.getElementById('calendar');
    
    var calendar = new FullCalendar.Calendar(calendarEl, {
      initialView: 'dayGridMonth',
      headerToolbar: {
        left: 'title',
        right: 'today prev,next'
      },
      buttonText: {
        today: 'Hari Ini' // Mengubah teks tombol kembali ke hari ini
      },
      height: 'auto', // Menyesuaikan tinggi secara otomatis
    });
    
    calendar.render();
  });
</script>
@endsection

@section('js')

@endsection