<!DOCTYPE html>

<html lang="pl">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Path Generator</title>

  <!-- Bootstrap CSS CDN --->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
  <!-- Bootstrap Container -->
  <div class="container mt-5">

    <!-- Header -->
    <div class="row">
      <div class="col-12">
        <h1 class="text-center mb-4">Path generator to files!"</h1>
        <p class="lead text-center text-muted">
          A tool for folder and files names into full system paths.
        </p>
      </div>
    </div>

    <!-- Test bootstrap - przycisk testowy --->
    <div class="row mt-4">
      <div class="col-12 text-center mb-4">
        <button type="button" class="btn btn-primary ">
          Test Bootstrap - if it is blue that Bootstrap works!
        </button>

      </div>
    </div>

    <!--- Formularz generowania ścieżek - KROK 3A--->
    <div class="row mt-5">
      <div class="col-12">

        <!-- Tu będzie formularz! --->
        <div class="card shadow">
          <div class="card-header bg-primary text-white">
            <h4 class="mb-0">Path Generator Form</h4>
          </div>

          <div class="card-body">
            <form method="POST" action="">

              <!--- BASE DIRECTORY--->
              <div class="mb-3 row">
                <label for="base_direcotry" class="col-sm-3 col-form-label">
                    Base Directory
                </label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" id="base_direcotry"
                                            name="base_directory" placeholder="/home/user/">
                        <div class="form-text">
                            Base directory where your files are located
                        </div>
                </div>
              </div>

              <!--- Tu będziemy dodawać kolejne pola --->
              <div class="alert alert-info" role="alert">
                Dodano pierwsze pole! Następne pola dodamy w kolejnych krokach.
              </div>


            </form>
          </div>
        </div>
      </div>
    </div>



    <!-- Bootstrap JavaScript CDN -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
