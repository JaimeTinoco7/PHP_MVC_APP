<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Mi App MVC</title>

  <!-- Bootstrap y DataTables -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">

  <style>
    body {
      margin: 0;
      background-color: #f8f9fa; /* Color de fondo suave */
    }
    .content-area {
      margin-left: 260px; /* Ajuste para la barra lateral */
      padding: 20px;
      min-height: 100vh; /* Asegurar que cubra toda la pantalla */
    }
    .sidebar {
      width: 250px;
      min-height: 100vh;
      background: #343a40;
      color: white;
      padding: 20px;
      position: fixed;
      left: 0;
      top: 0;
      overflow-y: auto;
    }
    .sidebar a {
      color: white;
      text-decoration: none;
      display: block;
      padding: 10px;
      border-radius: 5px;
    }
    .sidebar a:hover {
      background: #495057;
    }
  </style>
</head>
<body>
  <?php include 'header.php'; ?>

  <div class="d-flex">
    <div class="sidebar">
      <?php include 'sidebar.php'; ?>
    </div>

    <div class="content-area w-100">
      <?php include $content_view; ?>
    </div>
  </div>

  <!-- Scripts -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <script src="./public/js/main.js"></script>

</body>
</html>
